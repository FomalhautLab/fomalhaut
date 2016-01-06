<?php

namespace Fomalhaut\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FomalhautUserBundle:Default:index.html.twig');
    }
}
