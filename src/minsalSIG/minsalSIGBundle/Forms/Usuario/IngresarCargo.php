<?php
namespace minsalSIG\minsalSIGBundle\Forms\Usuario;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class IngresarCargo extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('nombreCargo', 'text', array( 'label' => 'Nombre del cargo'))
			->add('descripcion', 'text', array('label' => 'Descripcion del cargo'))
			->add('agregar', 'submit', array('label' => 'Agregar cargo', 'attr' => array('style' => 'inline')))
			->add('limpiar', 'reset', array('label' => 'Limpiar campos', 'attr' => array('style' => 'inline')));
			
    }

    public function getName()
    {
        return 'IngresarCargo';
    }
}
