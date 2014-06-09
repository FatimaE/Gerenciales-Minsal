<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    
    public function ModificarAction()
    {
        return $this->render('minsalSIGminsalSIGBundle:Administracion:modificarUsuario.html.twig');
    }
    
    public function EliminarAction()
    {
        return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_consultarUsuario'));
    }
	
}	