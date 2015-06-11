<?php

namespace Chr\AlphaBundle\Controller;


// This namespace includes "use Symfony\Component\HttpFoundation\Response;" if we wanted to output response and not render
// it to a TWIG template
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

    public function byinchAction($hairtype, $inch, $style = 'Straight')
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