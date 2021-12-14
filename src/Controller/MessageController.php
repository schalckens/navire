<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Message;
use App\Form\MessageType;
use App\Service\GestionContact;


/**
 * @Route("/message",name="message_")
 */
class MessageController extends AbstractController
{
    /*
    public function index(): Response
    {
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
        ]);
    }
    */
   public function envoieMessage() : Response {
       $message = new Message();
       
       $form = $this->createForm(MessageType::class, $message)
                ->add('save', SubmitType::class,  ['label' => 'Create']);
        return $this->render('messaget/contact.html.twig', [
            'form' => $form->createView(),
        ]);
   }
}
