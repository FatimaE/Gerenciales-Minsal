<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use minsalSIG\minsalSIGBundle\Forms\Usuario\IngresarUsuario;
use minsalSIG\minsalSIGBundle\Entity\FosUserUser;


class UsuarioController extends Controller
{
    public function consultarAction()
    {
	$session=$this->getRequest()->getSession();
		//tipo_accion=1 -> CRUD
		//$session->set('tipo_accion', '1');
		$repository=$this->getDoctrine();
		$users=$repository->getRepository('minsalSIGminsalSIGBundle:FosUserUser')->findAll();
		$form = $this->createFormBuilder(null)
			->add('NuevoUsuario', 'button', array('label' => 'Agregar Nuevo Usuario', 'attr' => array('class' => 'btn btn-sm btn-default')))
			->getForm();
        return $this->render('minsalSIGminsalSIGBundle:Administracion:consultarUsuario.html.twig', 
			array(	'form' => $form->createView(),
					'users' => $users,));	
    }
    
    public function InsertarAction(Request $request)
    {
		$repository=$this->getDoctrine();
		$flash = $this->get('braincrafted_bootstrap.flash');
		$session = $this->getRequest()->getSession();
		$user = new FosUserUser();
		$form = $this->createForm(new IngresarUsuario(), $user);
		$form->handleRequest($request);
		if ($form->isValid()) {
			if ($form->get('agregar')->isClicked()) {
				$em=$this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				$flash->success('Usuario insertado exitosamente.'); 
                                return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_InsertarUsuario'));
			}
			
		}
		return $this->render('minsalSIGminsalSIGBundle:Administracion:insertarUsuario.html.twig',
			array('form'=>$form->createView()));
    }
    
    public function ModificarAction(Request $request, $id)
    {   
        $repository=$this->getDoctrine();
		$user = $repository->getRepository('minsalSIGminsalSIGBundle:FosUserUser')->find($id);
		$session = $this->getRequest()->getSession();
		$all_roles=$repository->getRepository('minsalSIGminsalSIGBundle:Rol')->findAll();
                $all_empleados=$repository->getRepository('minsalSIGminsalSIGBundle:Empleado')->findAll();
		if(count($all_roles)>0){
			$roles=array();
			foreach($all_roles as $rol) {
				$roles[$rol->getIdRol()]=$rol->getNombreRol();
			}
		}
                if(count($all_empleados)>0){
			$empleados=array();
			foreach($all_empleados as $empleado) {
				$empleados[$empleado->getIdEmpleado()]=$empleado->getprimerNombre();
			}
		}
		$form = $this->createFormBuilder(null)
                        ->add('empleado', 'choice',array(
				'choices' =>$empleados,
				'empty_value' => 'Elija un empleado',
				'attr' => array('class' => 'form-control')))
                        ->add('rol', 'choice',array(
				'choices' =>$roles,
				'empty_value' => 'Elija un Rol',
				'attr' => array('class' => 'form-control')))
			->add('username', 'text', array('attr' => array('class' => 'form-control', 'placeholder' => 'Username', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras, numeros, espacios, guiones', "pattern" => "([a-zA-Z0-9]|-|_)+")))
			->add('Guardar', 'submit', array('label' => 'Guardar Modificaciones', 'attr' => array('class' => 'btn btn-sm btn-success')))
			->add('Limpiar', 'reset', array('label' => 'Limpiar Campos', 'attr' => array('class' => 'btn btn-sm btn-danger')))
			
			->getForm();
		$form->handleRequest($request);
		if ($form->isValid()) {
			return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarUsuario'));
		}
        return $this->render('minsalSIGminsalSIGBundle:Administracion:modificarUsuario.html.twig', array('form'=> $form->createView()));
    }
    
    public function EliminarAction($id)
    {   
        $flash = $this->get('braincrafted_bootstrap.flash');
		$users=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:FosUserUser');
		$user=$users->find($id);
		$em=$this->getDoctrine()->getManager();
		$em->remove($user);
		$em->flush();
		$flash->error('Usuario eliminado exitosamente.');
        return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarUsuario'));
    }
	
}	