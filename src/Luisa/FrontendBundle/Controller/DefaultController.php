<?php

namespace Luisa\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
      const DEFAULT_LIMIT = 3;
      const DEFAULT_LIMITVIDEO = 4;
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
        $fotocategoria = $em->getRepository('BackendBundle:FotoCategoria')->findLatestFoto(self::DEFAULT_LIMIT);
        $foto = $em->getRepository('BackendBundle:Foto')->findAll();
        $video = $em->getRepository('BackendBundle:Video')->findLatestVideo(self::DEFAULT_LIMITVIDEO);
        $about = $em->getRepository('BackendBundle:About')->findAll();
        return $this->render('FrontendBundle:Default:index.html.twig',array(
          'fotocategoria'=> $fotocategoria,
          'foto'=> $foto,
          'video'=> $video,
          'about'=> $about,
        ));

      }

    /**
    * @Route("/_ajax/ajax_get_foto", name="ajax_get_foto")
    */
    public function ajaxFotoAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $em =  $this->getDoctrine()->getManager();

            $offset = $request->get('offset');

            $fotocategoria = $em->getRepository('BackendBundle:FotoCategoria')->findLatestFoto(self::DEFAULT_LIMIT, $offset);

            return $this->render('FrontendBundle:Ajax:foto.html.twig', array(
                'fotocategoria' => $fotocategoria,
            ));
        }

        throw new NotFoundHttpException("Page not found");
    }

    /**
    * @Route("/_ajax/ajax_get_video", name="ajax_get_video")
    */
    public function ajaxVideoAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $em =  $this->getDoctrine()->getManager();

            $offsetvideo = $request->get('offsetvideo');

            $video = $em->getRepository('BackendBundle:Video')->findLatestVideo(self::DEFAULT_LIMITVIDEO, $offsetvideo);

            return $this->render('FrontendBundle:Ajax:video.html.twig', array(
                'video' => $video,
            ));
        }

        throw new NotFoundHttpException("Page not found");
    }

}
