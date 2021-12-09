<?php

namespace App\Controller;

use App\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository( Reservation::class)->findAll();
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }
}
