<?php

namespace App\Controller;

use App\Form\Comment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormBuilderInterface;


class RecipeController extends AbstractController
{
    /**
     * @Route("/recipes/{slug}", name="recipe")
     */

    public function show($slug)
    {
        return $this->render('recipes/show.html.twig');
    }

    public function contact(Request $request)
    {
        $defaultData = ['comment' => 'Type your message here'];
        $form = $this->createFormBuilder($defaultData)
            ->add('Name:', TextType::class)
            ->add('Email:', EmailType::class)
            ->add('Comment:', TextareaType::class)
            ->add('Submit:', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
        }

    }
    public function showAction() {

        return new Response("This will be options page:");
    }
    
}
