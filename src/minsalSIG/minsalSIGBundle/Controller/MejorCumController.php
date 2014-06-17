<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine;

class MejorCumController extends Controller
{
	 public function MejorCumAction(Request $request)
    {
             //para obtener los datos de la carrera como de la institución 
            $repository=$this->getDoctrine();
            $carrera=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->findAll();           
            $universidad=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->findAll();
       
            //Creando lo que llevara los select
            if(count($carrera)>0){            
                $carr=array(); 
                $carr[0]= 'Todas las carreras'; 
                foreach($carrera as $carreras) 
                {                 
                    $carr[$carreras->getId()]= $carreras->getNombre();                    
                }                    
            }
            
            if(count($universidad)>0){            
                $institucion=array();  
                $institucion[0]= 'Todas las universidades'; 
                foreach($universidad as $univ) 
                {                 
                    $institucion[$univ->getId()]= $univ->getNombre();                    
                }                    
            }
            
            //Creando el formulario
            $form = $this->createFormBuilder(null)
                    ->add('selectcarr', 'choice', array('choices' =>$carr, 'empty_value' => 'Elija una Carrera', 'required' => true))
                    ->add('selectuniv', 'choice', array('choices' =>$institucion, 'empty_value' => 'Elija una Universidad', 'required' => true))
                    ->add('enviar', 'submit')->getForm();
            
            
            $form->handleRequest($request);
            
            if ($form->isValid()) {
                //recupero los Id de los select
                $varId = $form->get('selectcarr')->getData();//carreras
                $univId = $form->get('selectuniv')->getData();          
                
                //Seleccionar todas las carreras
                if($varId == 0)
                {
                    if($univId == 0){    
                      
                        $conn = $this->get('database_connection');
                        $resultado = $conn->fetchAll('SELECT a.id, a.id_carrera, a.id_institucion_formadora, 
                            count(mejor_cum) cuenta FROM ss_carrera_inst_form a LEFT OUTER JOIN ss_estudiante b 
                            ON (a.id = b.id_carrera_inst_form) GROUP BY a.id, a.id_carrera, a.id_institucion_formadora order by 1');
                         
                        
                        return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum.html.twig', 
                                array('carrera' => $carrera, 'universidad' => $universidad, 'resultado' => $resultado));     

                   }
                   else 
                       //Seleccionar todas carreras, una universidad
                       if($univId != 0){
                           $nomUniv=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->find($univId); 
                           
                           $conn = $this->get('database_connection');
                           $resultado = $conn->fetchAll('SELECT a.id, a.id_carrera, a.id_institucion_formadora, count(mejor_cum) cuenta 
                           FROM ss_carrera_inst_form a LEFT OUTER JOIN ss_estudiante b ON (a.id = b.id_carrera_inst_form)
                           WHERE a.id_institucion_formadora='.$univId.' GROUP BY a.id, a.id_carrera, a.id_institucion_formadora order by 1');
                           
                           return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum2.html.twig', array('carrera' => $carrera, 'nomUniv' => $nomUniv, 'resultado' => $resultado));
                       }
                }
                //Selecciona una carrera
                else
                    if($varId != 0){
                        //Selecciona una carrera todas las universidades
                        if($univId == 0){
                            $nomCarr=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->find($varId);
                           
                            $conn = $this->get('database_connection');
                            $resultado = $conn->fetchAll('SELECT a.id, a.id_carrera, a.id_institucion_formadora, count(mejor_cum) cuenta 
                            FROM ss_carrera_inst_form a LEFT OUTER JOIN ss_estudiante b ON (a.id = b.id_carrera_inst_form)
                            WHERE a.id_carrera='.$varId.' GROUP BY a.id, a.id_carrera, a.id_institucion_formadora order by 1');
                            
                            return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum3.html.twig', array('nomCarr' => $nomCarr, 'universidad' => $universidad, 'resultado' => $resultado));
                        }
                        else
                            if($univId != 0){
                                $nomCarr=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->find($varId);
                                $nomUniv=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->find($univId);
                                
                                $conn = $this->get('database_connection');
                                $resultado = $conn->fetchAll('SELECT a.id, a.id_carrera, a.id_institucion_formadora, count(mejor_cum) cuenta 
                                FROM ss_carrera_inst_form a LEFT OUTER JOIN ss_estudiante b ON (a.id = b.id_carrera_inst_form)
                                WHERE a.id_carrera='.$varId.' AND a.id_institucion_formadora = '.$univId.' GROUP BY a.id, a.id_carrera, a.id_institucion_formadora order by 1');
                                
                                return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum4.html.twig', array('nomCarr' => $nomCarr, 'nomUniv' => $nomUniv, 'resultado' => $resultado));
                            }
                }
                 
           
            }
                            
            return $this->render('minsalSIGminsalSIGBundle:Tactico:cum.html.twig', array('form' => $form->createView(), 'carrera' => $carrera, 'universidad' => $universidad));
    }   
}