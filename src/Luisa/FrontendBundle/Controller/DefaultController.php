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
          return $this->redirect($this->generateUrl('home', ['_locale' => $request->getLocale()]));
      }

      /**
      * @Route("/{_locale}/home", name="home")
      */
      public function indexAction()
      {
        $em = $this->getDoctrine()->getManager();
        $foto = $em->getRepository('BackendBundle:Foto')->findAll();
        return $this->render('FrontendBundle:Default:index.html.twig',array(
          'foto' => $foto
        ));

      }
}
