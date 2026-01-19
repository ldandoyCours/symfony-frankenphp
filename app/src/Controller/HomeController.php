<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\PostType;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {

        // ajout du formulaire
        $form = $this->createForm(PostType::class, new Post);

        return $this->render('home/index.html.twig', [
            'firstname' => 'Loïc',
            'form' => $form->createView(),
        ]);
    }
}
