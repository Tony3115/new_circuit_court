<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function panier(SessionInterface $session, ProduitRepository $produitRepository): Response
    {
        $panier = $session->get('panier', []);
        $produits = $produitRepository->findBy(['id' => array_keys($panier)]);

        return $this->render('panier/index.html.twig', [
            'produits' => $produits,
            'panier' => $panier,
        ]);
    }

    #[Route('/panier/add/{id}', name: 'app_panier_add')]
    public function addToPanier($id, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        $panier[$id] = ($panier[$id] ?? 0) + 1;
        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/remove/{id}', name: 'app_panier_remove')]
    public function removeFromPanier($id, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        if (isset($panier[$id])) {
            unset($panier[$id]);
        }
        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }
}
