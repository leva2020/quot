<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
        //$homeJson = file_get_contents($this->container->getParameter('json_home'));
        $homeJson = file_get_contents('http://dev-quot.pantheonsite.io/modulos-home');
        $home = json_decode($homeJson);
        $form = $this->createFormBuilder()
            ->add('correo', 'text', array(
                'required' => true,
                'attr' => array(
                    'placeholder' => 'dirección de correo',
                ),
                'label' => false
            ))            
            ->add('save', 'submit', array(
                'label' => 'Inscribirse',
                'attr' => array(
                    'class' => 'btn btn-newsletter',
                )
            ))
            ->getForm();
        return $this->render('home/index.html.twig', array('home' => $home, 'form' => $form->createView()));
    }

    public function listAction()
    {
      return $this->render('home/product-list.html.twig');
    }

    public function modalAction()
    {
      return $this->render('home/product-list-modal.html.twig');
    }

    public function productToCartAction()
    {
      return $this->render('home/product-to-cart.html.twig');
    }

    public function loginAction()
    {
      return $this->render('home/login.html.twig');
    }

    public function signUpOneAction()
    {
      return $this->render('home/sign-up-one.html.twig');
    }

    public function signUpTwoAction()
    {
      return $this->render('home/sign-up-two.html.twig');
    }

    public function paymentMethodAction()
    {
      return $this->render('home/payment-method.html.twig');
    }

    public function cartItemsAction()
    {
      return $this->render('home/cart-items.html.twig');
    }

    public function productCustomizationAction()
    {
      return $this->render('home/product-customization.html.twig');
    }

    public function productResumeAction()
    {
      return $this->render('home/product-resume.html.twig');
    }
}
