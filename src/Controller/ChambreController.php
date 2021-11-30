<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Chambre;


class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index(): Response
    {
        $em= $this->getDoctrine()->getManager();
        $chambres= $em->getRepository(Chambre::class)->findAll();
        return $this->render('chambre/index.html.twig', [
            'chambres' => $chambres,
        ]);
    }
}
