<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Repository\AdRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdController extends AbstractController
{
    /**
     * @Route("/ads", name="ads_index")
     */
    public function index(AdRepository $repo)
    {
        // $repo = $this->getDoctrine()->getRepository(Ad::class);  (plus besoin, on passe l'info en paramètre)

        $ads = $repo->findAll();

        return $this->render('ad/index.html.twig', [
            'controller_name' => 'AdController',
            'ads' => $ads,
        ]);
    }

    /**
     * Permet d'afficher une seule annonce
     * 
     * @Route("/ads/{slug}", name="ads_show")
     * 
     * return Response
     */
    public function show(Ad $ad) {
        // Je récupère l'annonce qui correspond au slug
        // $ad = $repo->findOneBySlug($slug);    ===> Remplacé par @ParamConverter

        return $this->render('ad/show.html.twig', [
            'ad' => $ad,
        ]);
    }
}
