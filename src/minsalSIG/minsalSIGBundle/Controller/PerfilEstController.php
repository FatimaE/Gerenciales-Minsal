<?php

namespace minsalSIG\minsalSIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PerfilEstController extends Controller
{
	 public function PerfilEstAction(Request $request)
    { //para obtener los datos de la carrera como de la institución 
            $repository=$this->getDoctrine();                                    
           
            
            $conn = $this->get('database_connection');
            $datos = $conn->fetchAll('select * from cargo c join empleado e on (c.id_cargo = e.id_cargo) join fos_user_user f on 
(e.id_empleado = f.id_empleado) join rol r on (f.id_rol = r.id_rol) where r.id_rol =3');
                            
            return $this->render('minsalSIGminsalSIGBundle:Estrategico:perfilE.html.twig', array('datos' => $datos));
		
    }    
    
}

