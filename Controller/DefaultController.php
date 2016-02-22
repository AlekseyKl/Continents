<?php

namespace ContinentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContinentsBundle:Default:index.html.twig');
    }
}
