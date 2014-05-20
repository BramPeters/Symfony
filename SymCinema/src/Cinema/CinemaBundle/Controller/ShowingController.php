<?php
// src/Cinema/CinemaBundle/Controller/ShowingController.php

namespace Cinema\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Cinema\CinemaBundle\Entity\Ticketsale;   
use Cinema\CinemaBundle\Form\TicketsaleForm;

/**
 * Movie controller.
 */
class ShowingController extends Controller
{
    /**
     * Show a Showing entry
     */
    
    
    public function showAction($id)
    {
        if( !$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){    
 // authenticated (NON anonymous) 
            return $this->render('CinemaCinemaBundle:Page:login.html.twig');
}  else{
        
        $em = $this->getDoctrine()->getManager();

        $showing = $em->getRepository('CinemaCinemaBundle:Showing')->find($id);

        if (!$showing) {
            throw $this->createNotFoundException('Unable to find Showing.');
        }
        
        $task = new Ticketsale();
        $form = $this->createForm(new TicketsaleForm(), $task);
        $request = $this->getRequest();
        if($request->getMethod() == 'POST'){
            $form->bind($this->getRequest());
            
             if ($form->isValid()) {
            
                 $postData = $this->get('request')->request->get('ticket');
                 $ticketcount_value = $postData['ticketcount'];
                 $em2 = $this->getDoctrine()->getManager();
                 $showing = $em2->getRepository('CinemaCinemaBundle:Showing')->find($id);

                 if (!$showing) {
                    throw $this->createNotFoundException(
                    'No showing found for id '.$showing
                    );
                }
                $showing->setSoldtickets($showing->getSoldtickets()+"$ticketcount_value");
                
                //var_dump($task);
                $userid = $this->getUser();
                $task->setShowing($showing);
                $task->setUser($userid);
                $task->setTicketCount($ticketcount_value);
                $em->persist($task);                
                $em->flush();
                $em2->flush();   
            return $this->render('CinemaCinemaBundle:Showing:purchase.html.twig', array(
            'showing'      => $showing,
            
        ));     
                 
            }
        }
        
        return $this->render('CinemaCinemaBundle:Showing:show.html.twig', array(
            'showing'      => $showing,
            'form'      => $form->createView(),
            
        ));
    }
    }
}