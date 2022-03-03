<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/navire", name="navire_")
 */
class NavireController extends AbstractController
{
    
//    public function index(): Response
//    {
//        return $this->render('navire/index.html.twig', [
//            'controller_name' => 'NavireController',
//        ]);
//    }
//    
//    /**
//     * @Route("/voirtous", name="voirtous")
//     * @param NavireRepository $repo
//     * @return Response
//     */
//    public function voirTous(NavireRepository $repo): Response {
//        $types = $repo->findAll();
//        return $this->render('navire/voirtous.html.twig', [
//                    'types' => $types,
//        ]);
//    }
//    
//    public function trouverNavire(Request $request, NavireRepository $repo) {
//        return 0;
//    }

}