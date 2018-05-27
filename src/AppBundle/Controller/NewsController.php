<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{

    /**
     * @Route("/news", name="news")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('AppBundle:News')->findAll();

        return $this->render('news/index.html.twig', [
            'news' => $news
        ]);
    }
}
