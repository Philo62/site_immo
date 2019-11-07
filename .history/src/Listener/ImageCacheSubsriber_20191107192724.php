<?php

use Doctrine\Common\EventSubscriber;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class ImageCacheSubsriber implements EventSubscriber {
    
    public function __construct(CacheManager $cacheManager, UploaderHelper $uploaderHelper)
    {
        
    }

    public function getSubscribedEvents()
    {
            return [
                'preRemove',
                'preUpdate'
            ];
    }
}