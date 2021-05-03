<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
/**
 * @Route("/api", name="api_")
 */
class APIController extends AbstractController
{
    /**
     * @Route("/articles/liste", name="liste", methods={"GET"})
     */
    public function liste(ArticlesRepository $articlesRepo)
    {
        return $this->json($articlesRepo->findall(),200,[], ['groups'=>'article:read']);
    }
    /**
     * @Route("/article/{id}", name="article", methods={"GET"})
     */
    public function getArticle(int $id,ArticlesRepository $articleRepo,SerializerInterface $serializer)
    {
        $article = $articleRepo->find($id);
        $data = $serializer->serialize($article,'json');
        return new Response($data,200,['Content-Type' => 'application/json']); 
    }
}
