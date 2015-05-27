<?php

namespace Chr\AlphaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

class BrowseController extends Controller
{
    public function indexAction($hairtype, $inch = 12, $style = 'straight')
    {

        return $this->render(
            'ChrAlphaBundle:Browse:index.html.twig',
            array('hairtype' => $hairtype,
                  'inch'     => $inch,
                  'style'    => $style
                )
        );


    }

    public function byinchAction($hairtype, $inch, $style = 'Straight, Curly, and Wavy')
    {
        return $this->render(
            'ChrAlphaBundle:Browse:byinch.html.twig',
            array('hairtype' => $hairtype,
                'inch'     => $inch,
                'style'    => $style
            )
        );



    }

    public function byinchandstyleAction($hairtype, $inch, $style)
    {

        return $this->render(
            'ChrAlphaBundle:Browse:byinchandstyle.html.twig',
            array('hairtype' => $hairtype,
                'inch'     => $inch,
                'style'    => $style
            )
        );



    }

    public function topratedhairAction($hairtype)
    {
        return $this->render(
        'ChrAlphaBundle:Browse:topratedhair.html.twig',
            array('hairtype' => $hairtype)
        );



    }






}