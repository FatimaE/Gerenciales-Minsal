<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AprobadosController extends Controller
{
	 public function AprobadosAction(Request $request)
    {
		
            //para obtener los datos de la carrera como de la institución 
            $repository=$this->getDoctrine();
            $carrera=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->findAll();           
            $universidad=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->findAll();
       
            //Creando lo que llevara los select
            if(count($carrera)>0){            
                $carr=array();            
                foreach($carrera as $carreras) 
                {                 
                    $carr[$carreras->getId()]= $carreras->getNombre();                    
                }                    
            }
            
            if(count($universidad)>0){            
                $institucion=array();            
                foreach($universidad as $univ) 
                {                 
                    $institucion[$univ->getId()]= $univ->getNombre();                    
                }                    
            }
            
            //Creando el formulario
            $form = $this->createFormBuilder(null)
                    ->add('selectcarr', 'choice', array('choices' =>$carr, 'empty_value' => 'Elija una Carrera'))
                    ->add('selectuniv', 'choice', array('choices' =>$institucion, 'empty_value' => 'Elija una Universidad'))
                    ->add('enviar', 'submit')->getForm(); 
            
            $form->handleRequest($request);
            
            if ($form->isValid()) {
                //recupero los Id de los select
                $varId = $form->get('selectcarr')->getData();
                $univId = $form->get('selectuniv')->getData();          
                
                //Recuperar el id de ss_carrera_inst 
               $varCarrInst = $repository->getRepository('minsalSIGminsalSIGBundle:SsCarreraInstForm')->findBy(array('idCarrera' => $varId, 'idInstitucionFormadora' => $univId));
                
                if(count($varCarrInst)>0){                         
                foreach($varCarrInst as $carInst) 
                {                 
                    $varCarInstId = $carInst->getId();                    
                }                    
            }
                            
                return $this->render('minsalSIGminsalSIGBundle:Tactico:prueba1.html.twig', array('varCarInstId' => $varCarInstId));
                
            }
                            
            return $this->render('minsalSIGminsalSIGBundle:Tactico:aprobados.html.twig', array('form' => $form->createView(), 'carrera' => $carrera, 'universidad' => $universidad,));
		 

     }
}
