<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use \minsalSIG\minsalSIGBundle\Entity\FosUserUser;

class LoginController extends Controller
{
	 public function indexAction(Request $request)
    {
		$session = new Session();
		$session=$this->getRequest()->getSession();
		$session->start();
		$repository=$this->getDoctrine();
		$user = new FosUserUser();
		$form = $this->createFormBuilder($user,  array('method' => $request->getMethod()))
                        
                        ->add('username', 'text', array('max_length' => 15, 'attr' => array('title'=>'Este campo no puede estar vacio. Debe ingresar solo letras y numeros, minimo 8 y maximo 12 caracteres', 'class' => 'form-control', 'placeholder' => 'Nombre de Usuario', "pattern" => "([a-zA-Z0-9])+")))
			->add('password', 'password', array('attr' => array('title'=>'Este campo no puede estar vacio.', 'class' => 'form-control', 'placeholder' => 'Contraseña', "pattern" => "([a-zA-Z0-9\s]|-|_|$|%|&)+")))
			//->add('username', 'text', array('attr' => array('class' => 'form-control', 'placeholder' => 'Nombre de Usuario')))
			//->add('password', 'password', array('attr' => array('class' => 'form-control', 'placeholder' => 'Contraseña')))
			//->add('remember', 'checkbox')
			->add('ingresar', 'submit', array('label' => 'Ingresar', 'attr' => array('class' => 'btn btn-lg btn-info btn-block')))
			->getForm();
		$form->handleRequest($request);
		if ($form->isValid()) {
			$session->set('login', 0);
			$session->set('nombre_usuario', '');
			$session->set('id_rol', '');
			$session->set('nombre_rol', '');
			$session->set('tipo_accion', '0');
			//echo "<script languaje='javascript'>alert('OK')</script>";
			/*$username=$form->get('user')->getData();
			$password=$form->get('pass')->getData();*/
			$usuario=$repository->getRepository('minsalSIGminsalSIGBundle:FosUserUser')->findOneBy(array('username'=>$user->getUsername(), 'password'=>$user->getPassword() ));
			if(count($usuario) > 0) {
				$session->set('login_expirado', '');
				$session->set('login', 1);
				$session->set('nombre_usuario', $usuario->getIdEmpleado()->getPrimerNombre().' '.$usuario->getIdEmpleado()->getPrimerApellido());
				$session->set('id_rol', $usuario->getIdRol()->getIdRol());
				$session->set('nombre_rol',$usuario->getIdRol()->getNombreRol());
				return $this->render('minsalSIGminsalSIGBundle:Index:menu.html.twig');
                                
			}
                        else
                            return $this->render('minsalSIGminsalSIGBundle:Index:error.html.twig');
    
			
		}
		else

			return $this->render('minsalSIGminsalSIGBundle:Index:index.html.twig', array('form' => $form->createView()));
    }
	
   	
	public function logoffAction()
	{
		$session = $this->getRequest()->getSession();
		$session->invalidate();
		return $this->redirect($this->generateUrl('minsal_si_gminsal_sig_homepage'));
	}
}
