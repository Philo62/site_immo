<?php

use Doctrine\Common\EventSubscriber;

class ImageCacheSubsriber implements EventSubscriber {
    
    public function __construct(CacheManager $cacheManager, UploaderHelper $uploaderHelper0)
    {
        
    }

    public function getSubscribedEvents()
    {
            return [
                'preRemove',
                'preUPdate'

            ]
    }
}