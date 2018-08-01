<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Route("/noticias", name="noticias")
     */
    public function tareasAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Noticias');

        $noticias = $repository->findAll();

        return $this->render('default/noticias.html.twig', 
            array(
                'noticias'=>$noticias,                
            )
        );
    }


     /**
     * @Route("/noticia/{id}", name="noticia", requirements={"id"="\d+"})
     */
    public function tareaAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Noticias');

        $noticia = $repository->findOneById($id);

        $url_atras = $this->generateUrl('homepage');

        return $this->render('default/noticia_unica.html.twig', 
            array(
                'noticia'=>$noticia,
                'url_atras'=>$url_atras
            )
        );
    }
}
