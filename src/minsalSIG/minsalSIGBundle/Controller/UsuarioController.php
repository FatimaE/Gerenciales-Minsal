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
		$repository1=$this->getDoctrine();
	        
                $all_empleados=$repository1->getRepository('minsalSIGminsalSIGBundle:Empleado')->findAll();
                $all_roles=$repository->getRepository('minsalSIGminsalSIGBundle:Rol')->findAll();
                
		if(count($all_empleados)>0){
			$empleados=array();
			foreach($all_empleados as $empleado) {
				$empleados[$empleado->getIdEmpleado()]=$empleado->getprimerNombre().' '.$empleado->getprimerApellido();
			}
		}
                if(count($all_roles)>0){
			$roles=array();
			foreach($all_roles as $rol) {
				$roles[$rol->getIdRol()]=$rol->getNombreRol();
			}
		}
                
		$session = $this->getRequest()->getSession();
		$user = new FosUserUser();
                $form = $this->createFormBuilder(null)
                        
                        ->add('empleado', 'choice',array(
				'choices' =>$empleados,
				'empty_value' => 'Elija un empleado',
				'attr' => array('class' => 'form-control')))
                        ->add('rol', 'choice',array(
				'choices' =>$roles,
				'empty_value' => 'Elija un Rol',
				'attr' => array('class' => 'form-control')))
			->add('username', 'text', array('label' => 'Nombre del Usuario', 'max_length' => 16))
			->add('password', 'repeated', array(
				'type' => 'password',
				'invalid_message' => 'Las claves deben coincidir.',
				'options' => array('attr' => array('class' => 'password-field')),
				'required' => true,
				'first_options'  => array('label' => 'Clave de Usuario'),
				'second_options' => array('label' => 'Repita la Clave'),
			))
			->add('Guardar', 'submit', array('label' => 'Guardar Usuario', 'attr' => array('class' => 'btn btn-sm btn-success')))
			->add('Limpiar', 'reset', array('label' => 'Limpiar Campos', 'attr' => array('class' => 'btn btn-sm btn-danger')))
                        ->getForm();
		
		$form->handleRequest($request);
		if ($form->isValid()) {
                        $password = $form->get('password')->getData();

                                $id_rol = $form->get('rol')->getData();
                                $id_empleado = $form->get('empleado')->getData();
				$username = $form->get('username')->getData();
				$rol=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:Rol')->find($id_rol);
                                $empleado=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:Empleado')->find($id_empleado);
                                                    
                                $user->setIdEmpleado($empleado);
				$user->setIdRol($rol);
				$user->setUsername($username);
				$user->setPassword($password);
				
				
				$em=$this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				$this->get('session')->getFlashBag()->set(
				'success', array('message' => 'Usuario creado con éxito.')
				);
			
			return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_InsertarUsuario'));
		}
		return $this->render('minsalSIGminsalSIGBundle:Administracion:insertarUsuario.html.twig',
			array('form'=>$form->createView()));
			
    }
    
    public function ModificarAction(Request $request, $id)
    {           
		               
                $repository=$this->getDoctrine();
                $flash = $this->get('braincrafted_bootstrap.flash');
		$user = $repository->getRepository('minsalSIGminsalSIGBundle:FosUserUser')->find($id);
		$session = $this->getRequest()->getSession();
		$all_roles=$repository->getRepository('minsalSIGminsalSIGBundle:Rol')->findAll();
                if(count($all_roles)>0){
			$roles=array();
			foreach($all_roles as $rol) {
				$roles[$rol->getIdRol()]=$rol->getNombreRol();
			}
		}
                
		$form = $this->createFormBuilder($user)
                        
                        ->add('idRol', 'entity', array( 'label' => 'Rol del Usuario', 'class' => 'minsalSIGminsalSIGBundle:Rol', 'property' => 'nombreRol'))
			->add('username', 'text', array('attr' => array('class' => 'form-control', 'placeholder' => 'Username', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras, numeros, espacios, guiones', "pattern" => "([a-zA-Z0-9]|-|_)+")))
			->add('Guardar', 'submit', array('label' => 'Guardar Modificaciones', 'attr' => array('class' => 'btn btn-sm btn-success')))
			->add('Limpiar', 'reset', array('label' => 'Limpiar Campos', 'attr' => array('class' => 'btn btn-sm btn-danger')))
			->getForm();
		$form->handleRequest($request);
                
		if ($form->isValid()) {
                        $em=$this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			$flash->success('Usuario: ' .$form->get('username')->getData(). ' modificado exitosamente.');
			return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarUsuario'));
		}
        return $this->render('minsalSIGminsalSIGBundle:Administracion:modificarUsuario.html.twig',
                array('form'=> $form->createView()));
    }
    
    public function EliminarAction($id)
    {   
        $flash = $this->get('braincrafted_bootstrap.flash');
		$users=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:FosUserUser');
		$user=$users->find($id);
		$em=$this->getDoctrine()->getManager();
		$em->remove($user);
		$em->flush();
		$flash->success('Usuario eliminado exitosamente.');
        return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarUsuario'));
    }
	
}	