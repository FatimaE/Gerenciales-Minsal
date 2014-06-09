<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PlazasController extends Controller
{
	 public function PlazasAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Tactico:plazas.html.twig');

     }
}
