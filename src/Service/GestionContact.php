<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Twig\Environment;
use App\Repository\MessageRepository;
use Doctrine\Persistence\ManagerRegistry;

class GestionContact {
// documentation : https://swiftmailer.symfony.com/docs/sending.html
    private MailerInterface $mailer;
    private Environment $environnmentTwig;
    private ManagerRegistry $doctrine;
    private MessageRepository $repo;
    
    
    function __construct(MailerInterface $mailer, Environment $environnementTwig, ManagerRegistry $doctrine, MessageRepository $repo) {
        $this->mailer = $mailer;
        $this->environnmentTwig = $environnementTwig;
        $this->doctrine=$doctrine;
        $this->repo=$repo;
    }
    
    public function envoiMailContact(Message $message) {
        $email = (new TemplatedEmail())
                ->from(new Adress('symfony@benoitroche.fr', 'Contact Symfony'))
                ->to($message->getMail())
                ->subject('Nouvelle demande')
                ->text('Bonjour')
                ->attachFromPath('assets/documents/presentation.pdf', 'Présentation')
                ->htmlTemplate('mail/mail.html.twig')
                ->context([
            'message' => $message,
        ]);
        $this->mailer->send($email);
    }
}
