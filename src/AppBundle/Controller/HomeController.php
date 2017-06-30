<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
      return $this->render('home/index.html.twig');
    }

    public function listAction()
    {
      return $this->render('home/product-list.html.twig');
    }
}
