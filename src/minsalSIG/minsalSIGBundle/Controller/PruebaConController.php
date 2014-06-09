<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PruebaConController extends Controller
{
	 public function PruebaConAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Tactico:pruebaCon.html.twig');

     }
}
