<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('WOOHoo my frist symphony page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){

        $comments = [
            'I ate a normal rock once. Itdod NOT taste like bacon!',
            'Wooohooo I\'m going on an all-asteriod diet',
            'I like bacon too! Buy ssome from my site! bakinsomebacon.com',
        ];

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-',' ', $slug)),
            'comments' => $comments
        ]);
    }
}