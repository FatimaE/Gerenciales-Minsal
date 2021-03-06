<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use minsalSIG\minsalSIGBundle\Forms\Usuario\IngresarCargo;
use minsalSIG\minsalSIGBundle\Entity\Cargo;


class CargoController extends Controller
{
    public function consultarAction()
    {
        $session=$this->getRequest()->getSession();
		//tipo_accion=1 -> CRUD
		//$session->set('tipo_accion', '1');
		$repository=$this->getDoctrine();
		$cargos=$repository->getRepository('minsalSIGminsalSIGBundle:Cargo')->findAll();
		$form = $this->createFormBuilder(null)
			->add('NuevoCargo', 'button', array('label' => 'Agregar Nuevo cargo', 'attr' => array('class' => 'btn btn-sm btn-default')))
			->getForm();
        return $this->render('minsalSIGminsalSIGBundle:Administracion:consultarCargo.html.twig', 
			array(	'form' => $form->createView(),
					'cargos' => $cargos,));	
    }
    
    public function InsertarAction(Request $request)
    {
		$repository=$this->getDoctrine();
		$flash = $this->get('braincrafted_bootstrap.flash');
		$session = $this->getRequest()->getSession();
		$cargo = new Cargo();
		$form = $this->createFormBuilder($cargo)
                        ->add('nombreCargo', 'text', array('max_length' => 25, 'attr' => array('class' => 'form-control', 'placeholder' => 'Cargo', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "([a-zA-Z Ññáéíóú /\s/])+")))			
			->add('descripcion', 'text', array('label' => 'Descripcion del cargo', 'max_length' => 75, 'attr' => array ('class' => 'form-control', 'placeholder' => 'Descripcion' )))
			->add('Guardar', 'submit', array('label' => 'Guardar Cargo', 'attr' => array('class' => 'btn btn-info')))
			->add('Limpiar', 'reset', array('label' => 'Limpiar Campos', 'attr' => array('class' => 'btn  btn-default')))
                        ->getForm();
                
                $form->handleRequest($request);
		if ($form->isValid()) {
			
				$em=$this->getDoctrine()->getManager();
				$em->persist($cargo);
				$em->flush();			
				$flash->success('Cargo insertado exitosamente.');
				return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_insertarCargo'));
			
			
		}
		return $this->render('minsalSIGminsalSIGBundle:Administracion:insertarCargo.html.twig',
			array('form'=>$form->createView()));
        
    }
    
    public function ModificarAction(Request $request, $idCargo)
    {   
        $repository=$this->getDoctrine();
                $flash = $this->get('braincrafted_bootstrap.flash');
		$cargo = $repository->getRepository('minsalSIGminsalSIGBundle:Cargo')->find($idCargo);
		$session = $this->getRequest()->getSession();
		
		$form = $this->createFormBuilder($cargo)
                        ->add('nombreCargo', 'text', array('max_length' => 25, 'attr' => array('class' => 'form-control', 'placeholder' => 'Cargo', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "([a-zA-Z Ññáéíóú /\s/])+")))			
			->add('descripcion', 'text', array('label' => 'Descripcion del cargo', 'max_length' => 75, 'attr' => array ('class' => 'form-control', 'placeholder' => 'Descripcion' )))
			->add('Guardar', 'submit', array('label' => 'Guardar Cargo', 'attr' => array('class' => 'btn btn-info')))
			->add('Limpiar', 'reset', array('label' => 'Limpiar Campos', 'attr' => array('class' => 'btn  btn-default')))
                        ->getForm();
		$form->handleRequest($request);
		if ($form->isValid()) {
                        $em=$this->getDoctrine()->getManager();
			$em->persist($cargo);
			$em->flush();
			$flash->success('Cargo: ' .$form->get('nombreCargo')->getData(). ' modificado exitosamente.');
			return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarCargo'));
			
		}
        return $this->render('minsalSIGminsalSIGBundle:Administracion:modificarCargo.html.twig',
                array('form'=> $form->createView()));
    }
    

    
    public function EliminarAction($idCargo)
    {   
                $repository=$this->getDoctrine();
                $flash = $this->get('braincrafted_bootstrap.flash');
                $all_empleados=$repository->getRepository('minsalSIGminsalSIGBundle:Empleado')->findOneBy(array('idCargo'=>$idCargo));
                if(count($all_empleados)>0)
                    $flash->error('Hay empleados que dependen de este cargo y no puede ser eliminado .');
                else{
                    $cargos=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:Cargo');
                    $cargo=$cargos->find($idCargo);
                    $em=$this->getDoctrine()->getManager();
                    $em->remove($cargo);
                    $em->flush();
                    $flash->success('Cargo eliminado exitosamente.');
                }
           return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarCargo'));

    }
	
}	