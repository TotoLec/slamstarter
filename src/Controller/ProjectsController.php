<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/index", name="projects")
     */
    public function index()
    {
    	$projects = array();
        $projects[0] = 'project 1';
        $projects[1] = 'project 2';
        $projects[2] = 'project 3';

        return $this->render('projects/index.html.twig', [
            'projects' => $projects,
        ]);

        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);


    }
}
