<?php

namespace Dav\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DavUserBundle:Default:index.html.twig');
    }
}
