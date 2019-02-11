<?php

namespace App\Controller;

use App\Form\CommentForm;
// use App\Entity\Comment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\FormBuilderInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CommentController extends Controller
{
     /**
     * @Route("/comments/new", name="comments")
     */

    public function index()
    {
        $form = $this->createForm(CommentForm::class);

        return $this->render('comments/new.html.twig', [

            'form'=>$form->createView(),
        ]);
    }
}