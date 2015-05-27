<?php

namespace Chr\AlphaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{

    public function indexAction()
    {
        return $this->render('ChrAlphaBundle:Homepage:index.html.twig');
    }
}