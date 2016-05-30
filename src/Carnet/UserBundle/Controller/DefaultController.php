<?php

namespace Carnet\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name="salut :-)";
        return $this->render('CarnetUserBundle:Default:index.html.twig', array('name' => $name));
    }

}
