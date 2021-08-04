<?php


namespace App\Controller;

use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    /**
     * @Route("/wishes", name="wish_list", methods={"GET"})
     */
    public function list()
    {
        return $this->render('wish/list.html.twig');
    }

    /**
     * @Route("/wishes/detail/{id}", requirements={"id": "\d+"}, name="wish_detail", methods={"GET"})
     */
    public function detail(int $id)
    {
        //récupération de l'identifiant
        return $this->render('wish/detail.html.twig', ['id'=>$id]);
    }

}