<?php

namespace Fomalhaut\Bundle\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FomalhautMediaBundle:Default:index.html.twig');
    }
}
