<?php
namespace App\Notification;

use App\Entity\Contact;

class ContactNotification {

    public function __construct(\Swift_Mailer $mailer, Environment $rederer)
    {
        
    }

        public function notify(Contact $contact) {

        }
}