<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('OMG ! My first page!');
    }

    #[Route('/news/{slug}')]
    public function show($slug)
    {
        
        return new Response (sprintf('Future article of: %s', $slug));
    }
}