<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route(path="", name="default_home")
     * @Route(path="/home")
     */
    public function home() {

        // Génération d'un tableau
        $users = [];

        // compact('users'); <=> ['users' => $users];
        // compact('users', 'products'); <=> ['users' => $users, 'products' => $products];

        return $this->render('default/home.html.twig');
    }

    /**
     * @Route(path="/contact", name="default_contact")
     */
    public function contact(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route(path="/about-us", name="default_about_us")
     */
    public function aboutUs(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('default/about-us.html.twig');
    }

    /**
     * @Route(path="/legal-stuff", name="default_legal_stuff")
     */
    public function legalStuff(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('default/legal-stuff.html.twig');
    }
}
