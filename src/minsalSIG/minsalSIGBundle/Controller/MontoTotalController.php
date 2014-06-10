<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MontoTotalController extends Controller
{
	 public function MontoTotalAction(Request $request)
    {
		
             return $this->render('minsalSIGminsalSIGBundle:Estrategico:montoTotal.html.twig');

     }
}



