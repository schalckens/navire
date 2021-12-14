<?php

namespace App\Service;

use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Twig\Environment;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\MessageRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;


class GestionContact {
    //documentation : https://swiftmailer.symfony.com/docs/sending.html
    private MailerInterface $mailer;
    private Environment $environnementTwig;
    private ManagerRegistry $doctrine;
    private MessageRepository $repo;
    
    function __construct(MailerInterface $mailer, Environment $environnementTwig, ManagerRegistry $doctrine, MessageRepository $repo) {
        $this->mailer = $mailer;
        $this->environnementTwig = $environnementTwig;
        $this->doctrine = $doctrine;
        $this->repo = $repo;
    }
    
    
    public function envoiMailContact(Message $message) {
        $email = (new TemplatedEmail())
                ->from(new Address('symfony@benoitroche.fr', 'Contact Symfony'))
                ->to($message->getMail())
                ->subject('Nouvelle demande')
                ->text('Bonjour')
                ->htmlTemplate('mail/mail.html.twig')
                ->context([
                    'message' => $message,
                ]);
        $this->mailer->send($email);
    }
    
}
