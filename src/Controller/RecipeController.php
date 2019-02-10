<?php

namespace App\Controller;

use App\Entity\Recipe;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipeController extends AbstractController
{
    /**
     * @Route("/recipes/{slug}", name="recipe_show")
     */
    public function show($slug)
    {
        return $this->render('recipes/show.html.twig');
        }
    
    /**
     * @Route("/comments/{slug}", name="comments")
     */

    public function new(Request $request)
    {
        $comment = new Comment();

        $form=$this->createFormBuilder($comment)
        ->add('name', TextType::class)
        ->add('email', TextType::class)
        ->add('comment', TextType::class)
        ->add('save', SubmitType::class, ['label'=>'Create Comment'])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $comment = $form->getData();

            return $this->redirectToRoute('comment_success');
        }
        return $this->render('comments/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}