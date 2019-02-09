<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends AbstractController
{
    /**
     * @Route("/recipes/{slug}", name="recipe_show")
     */
    public function show($slug)
    {
        $comments = [
            "Peter Piper picked a peck of pickled peppers.
            A peck of pickled peppers Peter Piper picked.
            If Peter Piper picked a peck of pickled peppers?
            Where's the peck of pickled peppers Peter Piper picked?",
            "Nine nimble noblemen nibbling nuts.",
            "Ingenious iguanas improvising an intricate impromptu on impossibly-impractical instruments."
        ];
       
        return $this->render('recipes/show.html.twig', [
            'comments' => $comments, 
        ]);
    }
}