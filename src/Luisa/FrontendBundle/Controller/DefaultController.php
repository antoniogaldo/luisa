<?php

namespace Luisa\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
      public function indexAction(Request $request)
      {
        
      }
}
