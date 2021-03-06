<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Blamer;

use Herzult\Bundle\ForumBundle\Blamer\AbstractSecurityBlamer;

class PostBlamer extends AbstractSecurityBlamer
{
    public function blame($object)
    {
        $object->setAuthor($this->security->getToken()->getUser());
    }
}