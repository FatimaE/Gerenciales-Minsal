<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class EstudiantesController extends Controller
{
	 public function EstudiantesAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Estrategico:estudiantes.html.twig');

     }
}



