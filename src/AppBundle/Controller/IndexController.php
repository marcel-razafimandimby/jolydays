<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('Index/index.html.twig');
    }
    /*
    * method : hello
    */
    public function helloAction()
    {
        return $this->render('Index/hello.html.twig');
    }
    /*
    * listAnnonce
    */
    public function listAnnonceAction(){
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AppBundle:Annonce')->getAllAnnonce();
        $categories = $em->getRepository('AppBundle:Categorie')->findAll();

        return $this->render('annonce/all-annonce.html.twig', array(
            'annonces' => $annonces,
            'categories' =>$categories,
        ));
    }
    /*
    * ficheAnnonce
    */
    public function ficheAnnonceAction($id){
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('AppBundle:Annonce')->find($id);
        return $this->render('annonce/fiche-annonce.html.twig', array(
            'annonce' => $annonce,
            
        ));
    }
}
