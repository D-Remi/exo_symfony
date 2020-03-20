<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleProject extends AbstractController
{
    /* je creé attribut $articles afin de l'appeller dans mes methodes */
    private $articles = [
    1 => [
        'title' => 'titre article 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
        'published' => true
    ],
    2 => [
        'title' => 'titre article 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
        'published' => true
    ],
    3 => [
        'title' => 'titre article 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
        'published' => false
    ],
    4 => [
        'title' => 'titre article 4',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
        'published' => false
    ],
    5 => [
        'title' => 'titre article 5',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
        'published' => true
    ],
    6 => [
        'title' => 'titre article 6',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQMiF_QYKvu_SgiciSMJ7AwfSOl7I_VLJAC_23h9X102-sKZP_3',
        'published' => true
    ]
    ];

    /**
     * @Route("/", name="home")
     */

    public function Home(){

        return $this->render('index.html.twig',[
            /* je fais appel a mon attribut $articles */
            'articles' => $this->articles,
        ]);
    }

    /**
     * @Route("article/{id}", name="article")
     */

    public function HomeArticle($id){
        return $this->render('article.html.twig',[
            /* je fais appel a mon attribut $articles */
            'article' => $this->articles[$id]
        ]);
    }
}