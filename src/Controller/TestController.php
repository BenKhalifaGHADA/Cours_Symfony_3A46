<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test/{id}', name: 'app_test')]
    public function index($id): Response
    {
        return $this->render('test/index.html.twig',['valeur'=>$id]);
        //envoyer la valeur de id auprés de controlleur vers le fichier twig
    }

    #[Route('/home',name:'home')]
    public function home(){
       // return new Response("c'est un test");
        return $this->redirectToRoute('app_test');
    }
}
