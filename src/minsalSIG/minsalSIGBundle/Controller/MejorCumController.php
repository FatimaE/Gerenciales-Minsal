<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


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
                $varId = $form->get('selectcarr')->getData();
                $univId = $form->get('selectuniv')->getData();          
                
                //Seleccionar todas las universidades
                if($varId == 0)
                {
                    if($univId == 0){                                  
                        return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum.html.twig', array('carrera' => $carrera, 'universidad' => $universidad));     

                   }
                   else 
                       //Seleccionar todas carreras, una universidad
                       if($univId != 0){
                           $nomUniv=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->find($univId);                           
                           return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum2.html.twig', array('carrera' => $carrera, 'nomUniv' => $nomUniv));
                       }
                }
                //Selecciona una carrera
                else
                    if($varId != 0){
                        //Selecciona una carrera todas las universidades
                        if($univId == 0){
                            $nomCarr=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->find($varId);
                            return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum3.html.twig', array('nomCarr' => $nomCarr, 'universidad' => $universidad));
                        }
                        else
                            if($univId != 0){
                                $nomCarr=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->find($varId);
                                $nomUniv=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->find($univId);
                                return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum4.html.twig', array('nomCarr' => $nomCarr, 'nomUniv' => $nomUniv));
                            }
                }
                 
                                       
                        
                
           /*    //Recuperar el id de ss_carrera_inst 
               $varCarrInst = $repository->getRepository('minsalSIGminsalSIGBundle:SsCarreraInstForm')->findBy(array('idCarrera' => $varId, 'idInstitucionFormadora' => $univId));
                
                if(count($varCarrInst)>0){                         
                foreach($varCarrInst as $carInst) 
                {                 
                    $varCarInstId = $carInst->getId();                    
                }                    
            }
                            
                return $this->render('minsalSIGminsalSIGBundle:Tactico:prueba1.html.twig', array('varCarInstId' => $varCarInstId));
                */
            }
                            
            return $this->render('minsalSIGminsalSIGBundle:Tactico:cum.html.twig', array('form' => $form->createView(), 'carrera' => $carrera, 'universidad' => $universidad));
		
    }
    /*
     public function todosAction(Request $request)
    {
        $repository=$this->getDoctrine();
        $carrera=$repository->getRepository('minsalSIGminsalSIGBundle:SsCarrera')->findAll();           
        $universidad=$repository->getRepository('minsalSIGminsalSIGBundle:SsInstitucionFormadora')->findAll();
                  
         return $this->render('minsalSIGminsalSIGBundle:Tactico:RepMejorCum.html.twig', array('carrera' => $carrera, 'universidad' => $universidad));      
         
    }*/
}
