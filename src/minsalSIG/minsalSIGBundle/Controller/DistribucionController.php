<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DistribucionController extends Controller
{
	 public function DistribucionAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Tactico:distribucion.html.twig');

     }
}

