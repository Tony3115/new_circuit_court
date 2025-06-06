<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\Produit1Type;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produit')]
class ProduitController extends AbstractController
{

    #[Route('/search', name: 'app_produit_search', methods: ['GET'])]
    public function search(Request $request, ProduitRepository $produitRepository): Response
    {
        $query = $request->query->get('query');

        // Vérifie si un terme de recherche a été fourni
        if ($query) {
            $produits = $produitRepository->createQueryBuilder('p')
                ->where('p.name LIKE :query')
                ->setParameter('query', '%' . $query . '%')
                ->getQuery()
                ->getResult();
        } else {
            $produits = [];
        }

        return $this->render('produit/search.html.twig', [
            'produits' => $produits,
            'query' => $query
        ]);
    }


    #[Route('/', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/index.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MARAICHER')) {
            throw $this->createAccessDeniedException('Accès refusé');
        }

        $produit = new Produit();
        $form = $this->createForm(Produit1Type::class, $produit);
        $form->handleRequest($request);

        $path = $this->getParameter('app.dir.public') . 'uploads/';


        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form['image']->getData();

            if ($file) {
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                $newName = 'uploads/' . $originalName . '-' . uniqid() . '-' . $file->guessExtension();

                $produit->setImage($newName);

                try {
                    $file->move($path, $newName);
                } catch (FileException $e) {
                    echo $e->getMessage();
                }
            }

            // **Assigner automatiquement le user**
            $produit->setUser($this->getUser());

            $entityManager->persist($produit);
            $entityManager->flush();

            //ajout de flash message 
            $this->addFlash('success', 'Produit ajoutée avec succès');

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MARAICHER')) {
            throw $this->createAccessDeniedException('Accès refusé');
        }

        $path = $this->getParameter('app.dir.public') . 'uploads/';

        $form = $this->createForm(Produit1Type::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();

            if ($file) {
                $newFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '-' . uniqid() . '.' . $file->guessExtension();

                try {
                    $file->move($path, $newFileName);
                    $produit->setImage('uploads/' . $newFileName);
                } catch (FileException $e) {
                    echo $e->getMessage();
                }
            }
            $entityManager->flush();

            //ajout de flash message 
            $this->addFlash('success', 'Mise à jour réussi');

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MARAICHER')) {
            throw $this->createAccessDeniedException('Accès refusé');
        }
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();

            //ajout de flash message 
            $this->addFlash('success', 'Produit effacé');
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
}
