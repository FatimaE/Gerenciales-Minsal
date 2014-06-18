<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use minsalSIG\minsalSIGBundle\Forms\Usuario\IngresarUsuario;
use minsalSIG\minsalSIGBundle\Entity\Empleado;


class EmpleadoController extends Controller
{
    public function consultarAction()
    {
	$session=$this->getRequest()->getSession();
		//tipo_accion=1 -> CRUD
		//$session->set('tipo_accion', '1');
		$repository=$this->getDoctrine();
		$empleados=$repository->getRepository('minsalSIGminsalSIGBundle:Empleado')->findAll();
		$form = $this->createFormBuilder(null)
			->add('NuevoEmpleado', 'button', array('label' => 'Agregar nuevo empleado', 'attr' => array('class' => 'btn btn-sm btn-default')))
			->getForm();
        return $this->render('minsalSIGminsalSIGBundle:Administracion:consultarEmpleado.html.twig', 
			array(	'form' => $form->createView(),
					'empleados' => $empleados,));	
    }
    
    public function InsertarAction(Request $request)
    {
                
		$repository1=$this->getDoctrine();
                $repository=$this->getDoctrine();
		$flash = $this->get('braincrafted_bootstrap.flash');             
			        
                $all_empleados=$repository1->getRepository('minsalSIGminsalSIGBundle:Empleado')->findAll();
                $all_cargos=$repository->getRepository('minsalSIGminsalSIGBundle:Cargo')->findAll();
                
		
                if(count($all_cargos)>0){
			$cargos=array();
			foreach($all_cargos as $cargo) {
				$cargos[$cargo->getIdCargo()]=$cargo->getNombreCargo();
			}
		}
                
		$session = $this->getRequest()->getSession();
		$empleado = new Empleado();
                $form = $this->createFormBuilder(null)
                        
                        ->add('cargo', 'choice',array(
				'choices' =>$cargos,
				'empty_value' => 'Elija un Cargo',
				'attr' => array('class' => 'form-control')))
                        ->add('primerNombre', 'text', array('max_length' => 15, 'attr' => array('class' => 'form-control', 'placeholder' => 'Nombre', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "([a-zA-Z Ññáéíóú /\s/])+")))
			->add('primerApellido', 'text', array('max_length' => 15, 'attr' => array('class' => 'form-control', 'placeholder' => 'Apellido', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "([a-zA-Z Ññáéíóú /\s/])+")))			
                        ->add('emailInstitucional', 'text', array('max_length' => 50, 'attr' => array('class' => 'form-control', 'placeholder' => 'Email', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}")))			                       
          		->add('Guardar', 'submit', array('label' => 'Guardar Usuario', 'attr' => array('class' => 'btn btn-info')))
			->add('Limpiar', 'reset', array('label' => 'Limpiar Campos', 'attr' => array('class' => 'btn  btn-default')))
                        ->getForm();
		
		$form->handleRequest($request);
		if ($form->isValid()) {
                                $idCargo = $form->get('cargo')->getData();
                                $cargo=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:Cargo')->find($idCargo);
				$primerNombre = $form->get('primerNombre')->getData();
				$primerApellido = $form->get('primerApellido')->getData();
				$emailInstitucional = $form->get('emailInstitucional')->getData();
				                                                    
                                $empleado->setIdCargo($cargo);
				$empleado->setPrimerNombre($primerNombre);
                                $empleado->setPrimerApellido($primerApellido);
				$empleado->setEmailInstitucional($emailInstitucional);
				
				
				$em=$this->getDoctrine()->getManager();
				$em->persist($empleado);
				$em->flush();
				$this->get('session')->getFlashBag()->set(
				'success', array('message' => 'Empleado creado con éxito.')
				);
			
			return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_InsertarEmpleado'));
		}
		return $this->render('minsalSIGminsalSIGBundle:Administracion:insertarEmpleado.html.twig',
			array('form'=>$form->createView()));
			
    }
    
    public function ModificarAction(Request $request, $idEmpleado)
    {           
		               
                $repository=$this->getDoctrine();
                $flash = $this->get('braincrafted_bootstrap.flash');
		$empleado = $repository->getRepository('minsalSIGminsalSIGBundle:Empleado')->find($idEmpleado);
		$session = $this->getRequest()->getSession();
		$all_cargos=$repository->getRepository('minsalSIGminsalSIGBundle:Cargo')->findAll();
                if(count($all_cargos)>0){
			$cargos=array();
			foreach($all_cargos as $cargo) {
				$cargos[$cargo->getIdCargo()]=$cargo->getNombreCargo();
			}
		}
                
		$form = $this->createFormBuilder($empleado)
                        
                        ->add('idCargo', 'entity', array( 'label' => 'Cargo del empleado', 'class' => 'minsalSIGminsalSIGBundle:Cargo', 'property' => 'nombreCargo'))
			->add('primerNombre', 'text', array('max_length' => 15, 'attr' => array('class' => 'form-control', 'placeholder' => 'Nombre', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "([a-zA-Z Ññáéíóú /\s/])+")))
			->add('primerApellido', 'text', array('max_length' => 15, 'attr' => array('class' => 'form-control', 'placeholder' => 'Apellido', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "([a-zA-Z Ññáéíóú /\s/])+")))			
                        ->add('emailInstitucional', 'text', array('max_length' => 50, 'attr' => array('class' => 'form-control', 'placeholder' => 'Email', 'title'=>'Este campo no puede estar vacio. Ingrese un email valido Ejemplo: alguien@gmail.com', "pattern" => "[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}")))			                       
          		->add('Guardar', 'submit', array('label' => 'Guardar Usuario', 'attr' => array('class' => 'btn btn-info')))
			->add('Limpiar', 'reset', array('label' => 'Limpiar Campos', 'attr' => array('class' => 'btn  btn-default')))
                        ->getForm();
		$form->handleRequest($request);
                
		if ($form->isValid()) {
                        $em=$this->getDoctrine()->getManager();
			$em->persist($empleado);
			$em->flush();
			$flash->success('Empleado: ' .$form->get('primerNombre')->getData(). ' modificado exitosamente.');
			return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarEmpleado'));
		}
        return $this->render('minsalSIGminsalSIGBundle:Administracion:modificarEmpleado.html.twig',
                array('form'=> $form->createView()));
    }
    
    public function EliminarAction($idEmpleado)
    {   
                $repository=$this->getDoctrine();
                $flash = $this->get('braincrafted_bootstrap.flash');
                $all_usuarios=$repository->getRepository('minsalSIGminsalSIGBundle:FosUserUser')->findOneBy(array('idEmpleado'=>$idEmpleado));
                if(count($all_usuarios)>0)
                {
                    $flash->error('Hay usuarios que dependen de este empleado y no puede ser eliminado .');
                }
                    else{
                    $empleados=$this->getDoctrine()->getRepository('minsalSIGminsalSIGBundle:Empleado');
                    $empleado=$empleados->find($idEmpleado);
                    $em=$this->getDoctrine()->getManager();
                    $em->remove($empleado);
                    $em->flush();
                    $flash->success('Empleado eliminado exitosamente.');
                }
           return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarEmpleado'));
        
    }
	
}	