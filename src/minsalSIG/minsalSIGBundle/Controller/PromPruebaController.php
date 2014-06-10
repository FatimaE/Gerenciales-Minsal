<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PromPruebaController extends Controller
{
	 public function PromPruebaAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Estrategico:promPrueba.html.twig');

     }
}



