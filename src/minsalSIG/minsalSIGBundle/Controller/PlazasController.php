<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PlazasController extends Controller
{
	 public function PlazasAction(Request $request)
    {
		
              //para obtener los datos de la universidad
            $repository=$this->getDoctrine();         
            $universidad=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->findAll();
             
             if(count($universidad)>0){            
                $institucion=array();            
                foreach($universidad as $univ) 
                {                 
                    $institucion[$univ->getId()]= $univ->getNombre();                    
                }                    
            }
             
             //Creando el formulario
            $form = $this->createFormBuilder(null)
                    ->add('selectuniv', 'choice', array('choices' =>$institucion, 'empty_value' => 'Elija una Universidad'))
                    ->add('enviar', 'submit')->getForm(); 
            
              $form->handleRequest($request);
            
            if ($form->isValid()) {
                //recupero los Id de los select
                $univId = $form->get('selectuniv')->getData();   
                
                 //Recuperar el id de ss_carrera_inst 
               $varCarrInst = $repository->getRepository('minsalSIGminsalSIGBundle:SsCarreraInstForm')->findBy(array('idInstitucionFormadora' => $univId));
                
            
            }
            
             return $this->render('minsalSIGminsalSIGBundle:Tactico:plazas.html.twig', array('form' => $form->createView(), 'universidad' => $universidad,));

     }
}
