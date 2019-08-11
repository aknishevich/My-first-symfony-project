<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyFirstController extends AbstractController
{
    /**
     * @Route("/{name}", name="my_first")
     */
    public function index($name)
    {
        return $this->render('my_first/index.html.twig', [
            'name'  =>$name,
            'controller_name' => 'MyFirstController',
        ]);
    }
}
