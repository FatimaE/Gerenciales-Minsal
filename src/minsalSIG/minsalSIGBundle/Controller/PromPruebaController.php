<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PromPruebaController extends Controller
{
    public function PromPruebaAction(Request $request){
        
	//para obtener los datos de la carrera como de la institución
        $repository=$this->getDoctrine();
//        $carreras=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->findAll();      	 
        $universidad=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->findAll();
        $carreras=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->findBY(array(), array('id' => 'ASC'));

        //Creando lo que llevara los select
        if(count($carreras)>0){       	 
            $carr=array();
            $carr[0]= 'Todas las carreras'; 
            foreach($carreras as $carrera){ // $carreras arreglo <-- $carrera valor individual           	 
                    $carr[$carrera->getId()]= $carrera->getNombre();               	 
            }               	 
        }

        if(count($universidad)>0){       	 
            $institucion=array();
            $institucion[0]= 'Todas las universidades';
            foreach($universidad as $univ){            	 
                $institucion[$univ->getId()]= $univ->getNombre();               	 
            }               	 
        }

        //Creando el formulario
        $form = $this->createFormBuilder(null)
                ->add('selectcarr', 'choice', array('choices' =>$carr, 'empty_value' => 'Seleccione una Carrera'))
                ->add('selectuniv', 'choice', array('choices' =>$institucion, 'empty_value' => 'Seleccione una Universidad'))
                ->add('Generar', 'submit')->getForm();

        $form->handleRequest($request);
        // Fin formulario
        

        $carreraId=$univId=$c_Id=$c_i=$e=NULL;  // Valores por defecto (variables para generar reporte)
        
        if ($form->isValid()) {
            $carreraId = $carr[$form->get('selectcarr')->getData()];     // Introducir los valores del select 
            $universidadId = $institucion[$form->get('selectuniv')->getData()]; // en las variables que se redireccionan a la misma vista.
            
            $c_Id = $form->get('selectcarr')->getData();  // Introducir los id de la carrera 
            $u_Id = $form->get('selectuniv')->getData();  //  y la institucion (universidad)
            
            
            // Creando vistas de acuerdo a selección del 'choice'
            // 
            //Seleccionar todas las carreras
            if($c_Id == 0){
                //Seleccionar todas las carreras, todas las universidades
                if($u_Id == 0){                                                   
                    $conn = $this->get('database_connection');
                    $resultado = $conn->fetchAll('SELECT ci.id, ci.id_carrera, ci.id_institucion_formadora, avg(nota_prueba) promedio
                                                    FROM ss_carrera_inst_form ci LEFT OUTER JOIN ss_estudiante e
                                                        ON (ci.id = e.id_carrera_inst_form)
                                                    GROUP BY ci.id, ci.id_carrera, ci.id_institucion_formadora
                                                    ORDER BY ci.id');
                                                                       
                    return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba1.html.twig', array('carreras' => $carreras, 'universidades' => $universidad, 'resultados'=>$resultado));                                                                                     
                }
                else 
                   //Seleccionar todas carreras, una universidad
                    if($u_Id != 0){
                        $conn = $this->get('database_connection');
                        $resultado = $conn->fetchAll('SELECT ci.id, ci.id_carrera, ci.id_institucion_formadora, avg(nota_prueba) promedio                                                         
                                                        FROM ss_carrera_inst_form ci LEFT OUTER JOIN ss_estudiante e
                                                            ON (ci.id=e.id_carrera_inst_form)
                                                        WHERE ci.id_institucion_formadora= '.$u_Id.'
                                                        GROUP BY ci.id, ci.id_carrera, ci.id_institucion_formadora
                                                        ORDER BY ci.id;');
                                                                       
                        return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba2.html.twig', array('carreras' => $carreras, 'universidad' => $universidadId, 'resultados'=>$resultado)); 
                    }
            }
            //Selecciona una carrera
            else
                if($c_Id != 0){
                    //Selecciona una carrera todas las universidades
                    if($u_Id == 0){
                        $conn = $this->get('database_connection');
                        $resultado = $conn->fetchAll('SELECT ci.id, ci.id_carrera, ci.id_institucion_formadora, avg(nota_prueba) promedio
                                                        FROM ss_carrera_inst_form ci LEFT OUTER JOIN ss_estudiante e
                                                            ON (ci.id=e.id_carrera_inst_form)
                                                        WHERE ci.id_carrera= '.$c_Id.'
                                                        GROUP BY ci.id, ci.id_carrera, ci.id_institucion_formadora
                                                        ORDER BY ci.id');
                                                                       
                        return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba3.html.twig', array('carrera' => $carreraId, 'universidades' => $universidad, 'resultados'=>$resultado)); 
                    }
                    else//Selecciona una carrera una universidad
                        if($u_Id != 0){  
                            $conn = $this->get('database_connection');
                            $resultado = $conn->fetchAll('SELECT ci.id, ci.id_carrera, ci.id_institucion_formadora, avg(nota_prueba) promedio
                                                            FROM ss_carrera_inst_form ci LEFT OUTER JOIN ss_estudiante e
                                                                ON (ci.id=e.id_carrera_inst_form)
                                                            WHERE ci.id_institucion_formadora = '.$u_Id.' AND ci.id_carrera = '.$c_Id.' 
                                                            GROUP BY ci.id, ci.id_carrera, ci.id_institucion_formadora
                                                            ORDER BY ci.id');
                                                                       
                            return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba4.html.twig', array('carrera' => $carreraId, 'universidad' => $universidadId, 'resultados'=>$resultado)); 
                        }
                }        
        }
        
        
                     
        return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig',array('form' => $form->createView(), 'carrera' => $carreras, 'universidad' => $universidad));
     }
}


