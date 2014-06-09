<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MejorCumController extends Controller
{
	 public function MejorCumAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Tactico:cum.html.twig');

     }
}
