<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class contact {

    /**
     * @vvar string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100) 
     */
    private $firstname;

    /**
     * @vvar string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100) 
     */
    
}
