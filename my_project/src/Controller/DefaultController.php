<?php

namespace App\Controller;


use App\Entity\Blog;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


final class DefaultController extends AbstractController
{
    #[Route('/', name: 'blog_default')]
    public function index(): Response
    {
        return $this->render('index.html.twig', []);
    }
}
