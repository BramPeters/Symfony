<?php

// src/Cinema/CinemaBundle/Controller/PageController.php

namespace Cinema\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller {

    public function indexAction() {
        
    if(isset($_GET["date"]) && $_GET["date"] !== null){
        $date=$_GET["date"];
    }else{
        $date="2014-05-06";
    }

        $currentDay=date("Y-m-d", strtotime('+1 day'));      
        $tomorrow = date("Y-m-d", strtotime('+2 day'));
        
        $em = $this->getDoctrine()
                ->getManager();

        $todaysMovies = $em->getRepository('CinemaCinemaBundle:Showing')
                ->getShowingsForToday($currentDay, $tomorrow);
        
        
        return $this->render('CinemaCinemaBundle:Page:index.html.twig', array(
                    'movies' => $todaysMovies
        ));
    }

    public function aboutAction() {
        return $this->render('CinemaCinemaBundle:Page:about.html.twig');
    }
    
    public function loginAction()
{        
    return $this->render('CinemaCinemaBundle:Page:login.html.twig');
}

    public function MovieListAction() {
        $em = $this->getDoctrine()
                ->getManager();

        $movies = $em->getRepository('CinemaCinemaBundle:Movie')
                ->getAllMovies();

        return $this->render('CinemaCinemaBundle:Page:movielist.html.twig', array(
                    'movies' => $movies
        ));
    }

    public function sidebarAction() {
        
        $currentDay=date("Y-m-d");        
        $tomorrow = date("Y-m-d", strtotime('+1 day'));
        
        $em = $this->getDoctrine()
                ->getManager();

        $todaysMovies = $em->getRepository('CinemaCinemaBundle:Showing')
                ->getShowingsForToday($currentDay, $tomorrow);
        
        //var_dump($todaysMovies);

        return $this->render('CinemaCinemaBundle:Page:sidebar.html.twig', array(
                    'todaysMovies' => $todaysMovies
        ));
    }

}