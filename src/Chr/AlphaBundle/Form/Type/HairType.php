<?php
// src/Chr/AlphaBundle/Form/Type/HairType.php

namespace Chr\AlphaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HairType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
    ->add('inch', 'choice', array('choices' => array('twelve' => '12', 'fourteen' => '14','sixteen' => '16','eighteen' => '18', 'twenty' => '20','twentytwo' => '22',
        'twentyfour' => '24', 'twentysix' => '26','twentyeight' => '28', 'thirty' => '30'),
    ))
->add('style', 'choice', array('choices' => array('straight' => 'Straight', 'wavy' => 'Wavy','curly' => 'Curly'),
    'expanded' => true,'multiple' => false,
    ))
->add('featuredHairPic','file', array('label'  => 'Featured Hair Picture',
    ))
->add('featuredHairHeading','text', array('label'  => 'Featured Hair Heading',
    ))
->add('featuredHairSummary','textarea', array('label'  => 'Featured Hair Summary',
    ))
->add('featuredHairPrice', 'money', array('currency'=> 'USD', 'label' => 'Featured Hair Price',
    ))
->add('featuredHairVendor','text', array('label'  => 'Featured Hair Vendor',
    ))
->add('featuredHairPosition', 'choice', array('choices' => array('one' => '1', 'two' => '2','three' => '3'),
    'expanded' => true,'multiple' => false,
    'label'  => 'Featured Hair Position',
    ))

->add('save', 'submit');
}

public function getName()
{
return 'hair';
}

public function configureOptions(OptionsResolver $resolver)
{
    //its automatically guesses by the name, (ie HairType and Hair Entity are related) but this function just ensures this is the class used for the underlying data
    $resolver->setDefaults(array(
        'data_class' => 'Chr\AlphaBundle\Entity\Hair',
    ));
}


}