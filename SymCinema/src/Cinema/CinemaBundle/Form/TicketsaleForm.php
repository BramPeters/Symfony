<?php 
// src/Cinema/CinemaBundle/Form/TicketsaleForm.php
namespace Cinema\CinemaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TicketsaleForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('showing', 'hidden');
        $builder->add('ticketcount', 'choice', array(
            'choices' => array('1' => '1',
                               '2' => '2',
                               '3' => '3',
                               '4' => '4',
                               '5' => '5',
                               '6' => '6',
                               '7' => '7',
                
                )
        ));
    }

    public function getName()
    {
        return 'ticket';
    }

    
    
}