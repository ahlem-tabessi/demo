<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {   $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repo->findall('titre de l\'article');
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }
    /**
    * @Route ("/", name="home")
    */
    public function home()
    {
    return $this->render('blog/home.html.twig', [
    	'title'=>"bienvenue mes amis",
         'age'=>"12"]);
    }
    /**
    * @Route ("/blog/12", name="blog_show")
    */
    public function show()
    {
    return $this->render('blog/show.html.twig');
    }
}
