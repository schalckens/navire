<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AisShipTypeRepository;

/**
 * @Route("/aisshiptype", name="aisshiptype_")
 */
class AisShipTypeController extends AbstractController
{
//    public function voirTous(): Response {
//        $types = [
//            1 => 'Reserved',
//            2 => 'Wing In Ground',
//            3 => 'Special Category',
//            4 => 'High-Speed Craft',
//            5 => 'Special Category',
//            6 => 'Passenger',
//            7 => 'Cargo',
//            8 => 'Tanker',
//            9 => 'Other',
//        ];
//        return $this->render('aisshiptype/voirtous.html.twig', [
//                    'types' => $types,
//        ]);
//    }
    /**
     * @Route("/voirtous", name="voirtous")
     * @param AisShipTypeRepository $repo
     * @return Response
     */
    public function voirTous(AisShipTypeRepository $repo): Response {
        $types = $repo->findAll();
        return $this->render('aisshiptype/voirtous.html.twig', [
                    'types' => $types,
        ]);
    }
}
