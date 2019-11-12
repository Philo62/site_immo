<?php
namespace App\Notification;

use App\Entity\Contact;

class ContactNotification {

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        
    }

        public function notify(Contact $contact) {

        }
}