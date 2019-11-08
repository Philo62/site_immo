<?php
namespace App\Listener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class ImageCacheSubscriber implements EventSubscriber {

    /**
     * @var CacheManager
     */
    private $cacheManager;

    /**
     * @var UploaderHelper
     */
    private $uploaderHelper;

    public function __construct(CacheManager $cacheManager, UploaderHelper $uploaderHelper)
    {
        $this->cacheManager = $cacheManager;
        $this->uploaderHelper = $uploaderHelper;

    }

    public function getSubscribedEvents()
    {
            return [
                'preRemove',
                'preUpdate'
            ];
    }
    public function preRemove(PreFlushEventArgs $args) {

    }
    
    public function preUpdate(PreUpdateEventArgs $args) {
        if ($args->getEnt
    }
}