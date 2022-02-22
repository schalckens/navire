<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageType;
use App\Service\GestionContact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


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
        return $this->render('message/contact.html.twig', [
            'form' => $form->createView(),
        ]);
   }
   
   /**
    * @Route("/contact", name="contact")
    * @param Request $request
    * @param GestionContact $gestionContact
    * @return Response
    */
   public function contact(Request $request, GestionContact $gestionContact) : Response {
       $message = new Message();
       
       $form = $this->createForm(MessageType::class, $message);
       $form->handleRequest($request);
       
       if($form->isSubmitted() && $form->isValid()){
           $message = $form->getData();
           
           $gestionContact->envoiMailContact($message);
           
           return $this->redirectToRoute("home");
       }
       
        return $this->render('message/contact.html.twig', [
            'form' => $form->createView(),
        ]);
   }
}
