<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/", name="to_do_list")
     */
    public function index()
    {
        return $this->render('to_do_list/index.html.twig', [
            'controller_name' => 'ToDoListController',
        ]);
    }

    /**
     * @Route("/create", name="create_task", method={"POST"})
     */
    public function create()
    {
        exit('to do: create a new task!');
    }

    /**
     * @Route("/switch-status", name="switch_status")
     */
    public function switchStatus()
    {
        exit('to do: switch status of the task!');
    }
}
