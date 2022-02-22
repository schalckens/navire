<?php

namespace App\Controller;

use App\Form\MessageType;
use App\Service\GestionContact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Message;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/message", name="message_")
 */
class MessageController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, GestionContact $gestionContact):Response {
        $message = new Message();
        
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $message = $form->getData();
            
            $gestionContact->envoiMailcontact($message);
            
            return $this->redirectToRoute("home");
        }
        
        return $this->render('message/contact.html.twig', [
                    'form' => $form->createView(),
        ]);
    }
}
