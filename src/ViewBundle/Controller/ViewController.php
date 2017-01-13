<?php

namespace ViewBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewController extends Controller{
    /**
     * @Route("/", name="index")
     * @Template(":default:index.html.twig")
     */
    public function getIndex() {
        return null;
    }
    /**
     * @Route("/page2", name="page2")
     * @Template(":default:page2.html.twig")
     */
    public function getPage2() {
        return null;
    }
}
