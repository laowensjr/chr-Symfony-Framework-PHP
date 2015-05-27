<?php

namespace Chr\AlphaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('ChrAlphaBundle:Default:index.html.twig');
    }
}
