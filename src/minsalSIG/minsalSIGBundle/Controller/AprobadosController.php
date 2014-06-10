<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AprobadosController extends Controller
{
	 public function AprobadosAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Tactico:aprobados.html.twig');

     }
}
