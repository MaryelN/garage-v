<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GarageController extends AbstractController
{

  #[Route('/')]
  public function homepage(): Response
  {
    return $this->render('garage/homepage.html.twig', [
      'title' => 'Garage Parrot'
    ]);
  }

/* To match add variables to our URL*/
  #[Route('/browse/{slug}')]
  public function browse(string $slug = null): Response
  {
    if ($slug){
      $title = 'Genre: '.$slug;
    }else {
      $title = 'All Genres';
    }

    return new Response($title);
  }
}