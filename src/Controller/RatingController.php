<?php

// src/Controller/RatingController.php
namespace App\Controller;

use App\Entity\RatingProduct;
use App\Form\RatingProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RatingController extends AbstractController
{
    /**
     * @Route("/form/rating", name="rating_add")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RatingProductType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if(null === $this->getUser()) {
                return $this->redirectToRoute('app_login');
            }
            /** @var  $rating RatingProduct */
            $rating = $form->getData();
            $rating->setUser($this->getUser());
            $entityManager->persist($rating);
            $entityManager->flush();
            $this->addFlash('success', 'your product has been added successfully');
            return $this->redirectToRoute('index');
        }

        return $this->renderForm('rating/new.html.twig', [
            'form' => $form,
        ]);
    }
}
