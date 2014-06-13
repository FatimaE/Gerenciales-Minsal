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
		$form = $this->createForm(new IngresarCargo(), $cargo);
		$form->handleRequest($request);
		if ($form->isValid()) {
			if ($form->get('agregar')->isClicked()) {
				$em=$this->getDoctrine()->getManager();
				$em->persist($cargo);
				$em->flush();
				$flash->success('Cargo insertado exitosamente.');
				return $this->redirect($this->generateUrl('minsalSIGminsalSIGBundle:Administracion:insertarCargo'));
			}
			if ($form->get('regresar')->isClicked()) {
				return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarCargo'));
			}
		}
		return $this->render('minsalSIGminsalSIGBundle:Administracion:insertarCargo.html.twig',
			array('form'=>$form->createView()));
        
    }
    
    public function ModificarAction($id)
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
			->add('ConsultaUsuarios', 'button', array('label' => 'Regresar', 'attr' => array('class' => 'btn btn-sm btn-default')))
			->getForm();
		$form->handleRequest($request);
		if ($form->isValid()) {
			return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_modificarUsuario'));
		}
        return $this->render('minsalSIGminsalSIGBundle:Administracion:modificarUsuario.html.twig');
    }
    
    public function EliminarAction($idCargo)
    {   
        $flash = $this->get('braincrafted_bootstrap.flash');
		$cargos=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:Cargo');
		$cargo=$cargos->find($idCargo);
		$em=$this->getDoctrine()->getManager();
		$em->remove($cargo);
		$em->flush();
		$flash->error('Cargo eliminado exitosamente.');
        return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarCargo'));
    }
	
}	