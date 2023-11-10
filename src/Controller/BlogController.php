<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class blogController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('homepage.html.twig', [
        ]);
    }
    #[Route('/blog{error}')]
    public function error1($error): Response
    {
        return $this->render('error.html.twig',[

        ]);
    }
    #[Route('/blog')]
    public function blogpage(): Response
    {
        return $this->render('blogpage.html.twig',[

        ]);
    }

}
