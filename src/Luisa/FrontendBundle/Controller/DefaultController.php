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
        $foto = $em->getRepository('BackendBundle:FotoHome')->findAll();
        $video = $em->getRepository('BackendBundle:VideoHome')->findAll();
        return $this->render('FrontendBundle:Default:index.html.twig',array(
          'foto' => $foto,
          'video'=> $video
        ));

      }

      /**
      * @Route("/fotocategoria", name="foto-categoria")
      */
      public function FotoCategoriaAction()
      {
        $em = $this->getDoctrine()->getManager();
        $fotocategoria = $em->getRepository('BackendBundle:FotoCategoria')->findAll();
        return $this->render('FrontendBundle:Default:fotocategoria.html.twig',array(
          'fotocategoria' => $fotocategoria,
        ));
      }

      /**
      * @Route("/video", name="video")
      */
      public function VideoAction()
      {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('BackendBundle:Video')->findAll();
        return $this->render('FrontendBundle:Default:video.html.twig',array(
          'video' => $video,
        ));
      }

      /**
      * @Route("/fotocategoria/foto/{id}", name="foto")
      */
      public function FotoAction($id)
      {
        $em = $this->getDoctrine()->getManager();
        $foto = $em->getRepository('BackendBundle:Foto')->find($id);
        return $this->render('FrontendBundle:Default:foto.html.twig',array(
          'foto' => $foto,
        ));
      }
}
