<?php

namespace Chr\AlphaBundle\Controller;

use Chr\AlphaBundle\Entity\Hair;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Chr\AlphaBundle\Form\Type\HairType;

class FeaturedController extends Controller
{

    public function indexAction($hairtype, $inch = 12, $style = 'straight')
    {

        return $this->render(
            'ChrAlphaBundle:Featured:index.html.twig',
            array(
                'hairtype' => $hairtype,
                'inch' => $inch,
                'style' => $style
            )
        );


    }

    public function overviewAction($hairtype, $inch = 12, $style = 'straight')
    {
        return $this->render(
            'ChrAlphaBundle:Featured:overview.html.twig',
            array(
                'hairtype' => $hairtype,
                'inch' => $inch,
                'style' => $style
            )
        );


    }

    public function addAction($hairtype)
    {

        $hair = new Hair();
        $form = $this->createForm(new HairType(), $hair);
        return $this->render(
            'ChrAlphaBundle:Featured:add.html.twig',
            array(
                'hairtype' => $hairtype,
                'form' => $form->createView(),

            )
        );

    }
}
