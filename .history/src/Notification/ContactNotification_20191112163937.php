<?php
namespace App\Notification;

use App\Entity\Contact;

class ContactNotification {

    public function __construct(\Swift)
    {
        
    }

        public function notify(Contact $contact) {

        }
}