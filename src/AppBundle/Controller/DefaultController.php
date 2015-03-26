<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
       /**
     * @Route("/yolo.html", name="yolo")
     */
    public function yoloAction()
    {
        return $this->render('default/yolo.html.twig');
    }

     /**
     * @Route("/spike.html", name="spike")
     */
    public function spikeAction()
    {
        return $this->render('default/spik.html.twig');
    }
    
 

}
