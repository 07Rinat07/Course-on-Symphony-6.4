<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


final class DefaultController extends AbstractController
{
    #[Route('/default/{id}/{page}', name: 'blog_default', requirements: ['id' => '\d+'], defaults: ['id' => 1], methods: ['GET'])]
    public function index(Request $request, int $id, int $page): Response
    {

        return $this->render('index.html.twig', ['id'=>$id]);
    }
}
