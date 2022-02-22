<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/aisshiptype", name="aisshiptype_")
 */
class AisShipTypeController extends AbstractController
{
    /**
     * @Route("/voirtous", name="voirtous")
     */
    public function voirTous(): Response {
        $types = [
            1 => 'Reserved',
            2 => 'Wing In Ground',
            3 => 'Special Category',
            4 => 'High-Speed Craft',
            5 => 'Special Category',
            6 => 'Passenger',
            7 => 'Cargo',
            8 => 'Tanker',
            9 => 'Other',
        ];
        return $this->render('aisshiptype/voirtous.html.twig', [
                    'types' => $types,
        ]);
    }
}
