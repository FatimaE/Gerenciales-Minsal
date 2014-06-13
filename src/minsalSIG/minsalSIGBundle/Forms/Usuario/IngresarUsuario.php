<?php
namespace minsalSIG\minsalSIGBundle\Forms\Usuario;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class IngresarUsuario extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('idEmpleado', 'entity', array( 'label' => 'Nombre del empleado', 'class' => 'minsalSIGminsalSIGBundle:Empleado', 'property' => 'primerNombre'))
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
