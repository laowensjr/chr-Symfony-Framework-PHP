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

    public function overviewAction($hairtype='all', $inch = 12, $style = 'straight')
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

    public function addAction($hairtype, Request $request)
    {

        $hair = new Hair();
        $hair->setHairtype($hairtype);
        $form = $this->createForm(new HairType(), $hair);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

          //Some pre persist methods exist in the hair entity

            $em->persist($hair);
            $em->flush();

            return $this->redirectToRoute('hairsuccess', array('hairtype'=> $hairtype));
        }


        return $this->render(
            'ChrAlphaBundle:Featured:add.html.twig',
            array(
                'hairtype' => $hairtype,
                'form' => $form->createView(),

            )
        );


    }

    public function successAction($hairtype){

        return $this->render(
            'ChrAlphaBundle:Featured:success.html.twig',
            array(
                'hairtype' => $hairtype,


            )
        );
    }





}
