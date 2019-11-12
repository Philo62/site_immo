<?php
namespace App\Notification;

use Twig\Environment;
use App\Entity\Contact;

class ContactNotification {

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        
    }

        public function notify(Contact $contact) {

        }
}