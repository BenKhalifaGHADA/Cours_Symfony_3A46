<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/show/{name}',name:'app_author1')]
    public function showAuthor($name){
        return $this->render('author/show.html.twig',['n'=>$name]);

    }

    #[Route('/showAll',name: 'showAll')]
    public function showAll(AuthorRepository $repo ){
        $list=$repo->findAll();
        return
            $this->render('author/showAll.html.twig',['Authors'=>$list]);
    }
}
