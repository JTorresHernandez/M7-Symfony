<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/carpeta/{name}", name="src_appB_default")
     */

    public function textAction($name){

        return new Response ("Que te cuenta gafas? " . $name);
    }

    /**
     * @Route("/vista", name="src_appB_default_VistaAction")
     */
    public function vistaAction(){

return $this->render(':default:vista1.html.twig', ['titulo' => 'Puto Torres el WEON!! ', 'resultado' => '7']);
    }

    /**
     * @Route("/indice, name="src_appB_pagprinc_formAction")
     */

    public function indiceAction(){

        return $this->render(':default:index.html.twig');
    }



}
