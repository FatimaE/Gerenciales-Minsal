<?php
namespace minsalSIG\minsalSIGBundle\Forms\Usuario;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IngresarUsuario extends AbstractType
{	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {	
		$repository=$this->getDoctrine();
	        $all_empleados=$repository->getRepository('minsalSIGminsalSIGBundle:Empleado')->findAll();
		if(count($all_empleados)>0){
			$empleados=array();
			foreach($all_empleados as $empleado) {
				$empleados[$empleado->getIdEmpleado()]=$empleado->getprimerNombre().' '.$empleado->getprimerApellido();
			}
		}

        	$builder
			->add('empleado', 'choice',array(
				'choices' =>$empleados,
				'empty_value' => 'Elija un empleado',
				'attr' => array('class' => 'form-control')))			
			->add('idRol', 'entity', array( 'label' => 'Rol del Usuario', 'class' => 'minsalSIGminsalSIGBundle:Rol', 'property' => 'nombreRol'))
			->add('username', 'text', array('label' => 'Nombre del Usuario', 'max_length' => 16))
			->add('password', 'repeated', array(
				'type' => 'password',
				'invalid_message' => 'Las claves deben coincidir.',
				'options' => array('attr' => array('class' => 'password-field')),
				'required' => true,
				'first_options'  => array('label' => 'Clave de Usuario'),
				'second_options' => array('label' => 'Repita la Clave'),
			))
			->add('agregar', 'submit', array('label' => 'Agregar usuario', 'attr' => array('style' => 'inline')))
			->add('limpiar', 'reset', array('label' => 'Limpiar campos', 'attr' => array('style' => 'inline')));
			
    }

    public function getName()
    {
        return 'IngresarUsuario';
    }
}
