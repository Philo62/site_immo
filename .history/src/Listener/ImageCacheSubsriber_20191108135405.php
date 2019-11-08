<?php

use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\PreUpdateEventArgs;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class ImageCacheSubsriber implements EventSubscriber {

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
        dump
    }
}