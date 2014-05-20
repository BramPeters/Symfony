<?php
// src/Cinema/CinemaBundle/Controller/MovieController.php

namespace Cinema\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Movie controller.
 */
class MovieController extends Controller
{
    /**
     * Show a Movie entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $movie = $em->getRepository('CinemaCinemaBundle:Movie')->find($id);

        if (!$movie) {
            throw $this->createNotFoundException('Unable to find Movie post.');
        }
        
        $showings = $em->getRepository('CinemaCinemaBundle:Showing')
                   ->getShowingsForMovie($movie->getId());

        return $this->render('CinemaCinemaBundle:Movie:show.html.twig', array(
            'movie'      => $movie,
            'showings'  => $showings,
        ));
    }
}