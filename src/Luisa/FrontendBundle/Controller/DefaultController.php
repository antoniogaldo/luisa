<?php

namespace Luisa\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
      /**
      * @Route("/", name="entry")
      */
      public function entryAction(Request $request)
      {
          return $this->redirect($this->generateUrl('home'));
      }

      /**
      * @Route("/home", name="home")
      */
      public function indexAction()
      {
        $em = $this->getDoctrine()->getManager();
        $fotocategoria = $em->getRepository('BackendBundle:FotoCategoria')->findAll();
        $foto = $em->getRepository('BackendBundle:Foto')->findAll();
        return $this->render('FrontendBundle:Default:index.html.twig',array(
          'fotocategoria'=> $fotocategoria,
          'foto'=> $foto,
        ));

      }
}
