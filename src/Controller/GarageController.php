<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GarageController
{

  #[Route('/')]
  public function homepage(): Response
  {
    return new Response('Title: Garage');
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