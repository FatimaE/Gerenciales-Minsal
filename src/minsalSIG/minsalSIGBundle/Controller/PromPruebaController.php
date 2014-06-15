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
        $carreras=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->findAll();      	 
        $universidad=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->findAll();

        //Creando lo que llevara los select
        if(count($carreras)>0){       	 
        $carr=array();       	 
        foreach($carreras as $carrera) //------ $carreras arreglo <--- $carrera valor individual
        {            	 
                $carr[$carrera->getId()]= $carrera->getNombre();               	 
        }               	 
        }

        if(count($universidad)>0){       	 
            $institucion=array();       	 
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
        
        

//        $varId=$form->get('selectcarr')->getData();
//        $univId=$form->get('selectuniv')->getData();
        
        $varId=$univId=$c_Id=$resultado_notas=$c_i=NULL;
        
        if ($form->isValid()) {
            $varId = $carr[$form->get('selectcarr')->getData()];         // Introducir los valores del select 
            $univId = $institucion[$form->get('selectuniv')->getData()]; // en las variables que se redireccionan a la misma vista.
            
            $c_Id = $form->get('selectcarr')->getData();  // Introducir los id de la carrera y la institucion 
            $u_Id = $form->get('selectuniv')->getData();  //   
            
            ///////////////// Carrera e Institucion Formadora ////////////////////////////////////////////
            $repository = $this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:SsCarreraInstForm');                    
            $query = $repository->createQueryBuilder('ci')
                ->where('ci.idCarrera = :carrera AND ci.idInstitucionFormadora=:universidad')
                ->setParameters(array('carrera' => $c_Id, 'universidad' => $u_Id))                   
//            ->orderBy('p.price', 'ASC')
                ->getQuery();
            $carrera_institucion= $query->getResult();
            
            if(count($carrera_institucion)>0){       	 
                $a_ci=array(); $i=0;      	 
                foreach($carrera_institucion as $carrera) ///------ $carrera_institucion arreglo <--- $carrera valor individual
                {            	 
                    $a_ci[$i]= $carrera->getId();               	 
                    $i++;
                }  
                $c_i= $a_ci[0];
                
            ///////////////////// Estudiantes- Carrera-Institución Formadora /////////////////////////
            $repository = $this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:SsEstudiante');                    
            $query = $repository->createQueryBuilder('e')
                ->select("avg(e.notaPrueba) as promedio")
                ->where('e.idCarreraInstForm = :carrera_institucion')
                ->setParameter('carrera_institucion', $c_i)       
//            ->orderBy('p.price', 'ASC')
                ->getQuery();
            $resultado_notas = $query->getResult();
            
            


//            return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig', array('form' => $form->createView(), 'carrera' => $carreras, 'universidad' => $universidad,'varId' => $varId, 'univId' => $univId));
//            
            return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig',array('form' => $form->createView(), 'varId' => $varId, 'univId' => $univId, 'c_Id' =>$resultado_notas, 'c_i'=>$c_i));
            }
            
            
        

        }	
//             return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig',array('form' => $form->createView(), 'carrera' => $carreras, 'universidad' => $universidad,'varId' => $varId, 'univId' => $univId));
             return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig',array('form' => $form->createView(), 'varId' => $varId, 'univId' => $univId,'c_Id' =>$resultado_notas,'c_i'=>$c_i));

     }
}






