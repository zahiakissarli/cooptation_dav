<?php

namespace Dav\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DavUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
