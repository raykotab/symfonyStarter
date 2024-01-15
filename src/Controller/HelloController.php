<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

    private array $messages = [
        ['message' => "Hello", 'created' => '2023/06/12'],
        ['message' => "Hola", 'created' => '2022/05/12'],
        ['message' => "Hallo", 'created' => '2023/04/12'],
        ['message' => "Hi", 'created' => '2022/03/12'] 
    ];

    #[Route('/{limit<\d+>?3}', name:'app_index')]
    public function index(int $limit): Response
    {
        // return new Response(\implode(
        //     ',',
        //     \array_slice($this->messages, 0, $limit)
        // ));
        return $this->render(
            'hello/index.html.twig',
            [
                'messages' => //\implode(
                    //',',
                    /*\array_slice(*/$this->messages,// 0, $limit)
                //)
                'limit' => $limit
            ]
        );
    }

    #[Route('/messages/{id<\d+>}', name:'app_show_one')]
    public function showOne(int $id): Response
    {
        return $this->render(
            'hello/show_one.html.twig',
            [
                'message' => $this->messages[$id]
            ]
        );
        // return new Response($this->messages[$id]);
    }
}