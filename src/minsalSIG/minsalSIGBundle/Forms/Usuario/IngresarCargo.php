<?php
namespace minsalSIG\minsalSIGBundle\Forms\Usuario;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class IngresarCargo extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
			->add('nombreCargo', 'text', array('max_length' => 25, 'attr' => array('class' => 'form-control', 'placeholder' => 'Cargo', 'title'=>'Este campo no puede estar vacio. Solo ingrese letras y espacios', "pattern" => "([a-zA-Z Ññáéíóú /\s/])+")))			
			->add('descripcion', 'text', array('label' => 'Descripcion del cargo', 'max_length' => 75, 'attr' => array ('class' => 'form-control', 'placeholder' => 'Descripcion' )))
			->add('agregar', 'submit', array('label' => 'Agregar cargo', 'attr' => array('style' => 'inline')))
			->add('limpiar', 'reset', array('label' => 'Limpiar campos', 'attr' => array('style' => 'inline')));
			
			
    }

    public function getName()
    {
        return 'IngresarCargo';
    }
}
