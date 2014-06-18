<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PruebaConController extends Controller
{
	 public function PruebaConAction(Request $request)
    { //para obtener los datos de la carrera como de la institución 
            $repository=$this->getDoctrine();
            $carrera=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->findBy(array('id' => array(1,2,3,4,5,6))); 
                                
           //Creando lo que llevara los select
            if(count($carrera)>0){            
                $carr=array();            
                foreach($carrera as $carreras) 
                {                 
                    $carr[$carreras->getId()]= $carreras->getNombre();                    
                }                    
            }
            
            //Creando el formulario
            $form = $this->createFormBuilder(null)
                    ->add('selectcarr', 'choice', array('choices' =>$carr, 'empty_value' => 'Elija una Carrera'))                   
                    ->add('enviar', 'submit')->getForm();
            
            
            $form->handleRequest($request);
            
            if ($form->isValid()) {
                //recupero los Id de los select
                $varId = $form->get('selectcarr')->getData();               

                    $conn = $this->get('database_connection');
                    $resultado = $conn->fetchAll('select a.id, a.id_carrera, a.id_institucion_formadora, count(b.id) numEst, count(b.nota_prueba) estEx, 
                                                 count(b.aprobado) aprobados, count(b.reprobado) reprobados, min(b.nota_prueba) minimo, max(b.nota_prueba) maximo from 
                                                 ss_carrera_inst_form a left outer join ss_estudiante b on (a.id = b.id_carrera_inst_form) 
                                                 where a.id_carrera= '.$varId. 'group by a.id, a.id_carrera, a.id_institucion_formadora order by 2');
                    
                    $universidad = $conn->fetchAll('select * from ss_carrera_inst_form a join  ss_institucion_formadora b on (a.id_institucion_formadora = b.id)
                                                    where a.id_carrera ='.$varId.'');                    
                    
                    $carreraNombre = $conn->fetchAll('select nombre from ss_carrera where id ='.$varId.'');
                    
                    return $this->render('minsalSIGminsalSIGBundle:Tactico:RepPruebaCon.html.twig', 
                            array('carreraNombre' => $carreraNombre, 'universidad' => $universidad, 'resultado' => $resultado));   
              
            }
                            
            return $this->render('minsalSIGminsalSIGBundle:Tactico:pruebaCon.html.twig', array('form' => $form->createView(), 'carrera' => $carrera));
		
    }    
    
}

