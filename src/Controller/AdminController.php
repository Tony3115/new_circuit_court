<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function adminIndex(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/produit', name: 'admin_produit_index', methods: ['GET'])]
    public function index(Request $request, ProduitRepository $produitRepository, CategoryRepository $categoryRepository): Response

    {
        $user = $this->getUser();

        if ($this->isGranted('ROLE_ADMIN')) {
            $produits = $produitRepository->findAll();
        } elseif ($this->isGranted('ROLE_MARAICHER')) {
            $produits = $produitRepository->findBy(['user' => $user]);
        } else {
            $produits = $produitRepository->findAll();
        }

        return $this->render('admin/produit.html.twig', [
            'produits' => $produits,
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
