<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use App\Calculate\CalculatMean;
use App\Repository\RatingProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DefaultController extends AbstractController
{
    public function index(RatingProductRepository $ratingProductRepository)
    {
        $comments = $ratingProductRepository->findAll();

        return $this->render('pages/product.html.twig', [
            'comments' => $comments,
            'avg' => CalculatMean::avgByProduct($comments),
        ]);
    }
}
