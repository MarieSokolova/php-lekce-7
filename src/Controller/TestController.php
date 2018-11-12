<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\PurchaseOrder;
use App\Repository\ProgrammingLanguageRepository;

/**
 * @Route("/test")
 */

class TestController extends AbstractController
{
    /**
     * @Route("/list", name="test_list", methods="GET")
     */
    public function index(ProgrammingLanguageRepository $programmingLanguageRepository): Response
    {
        return $this->render('test/language.html.twig',
            ['ProgrammingLanguageRepository' => $programmingLanguageRepository->findAll()]);
    }
    /**
     * @Route("/known", name="test_known", methods="GET")
     */
    public function known(ProgrammingLanguageRepository $programmingLanguageRepository): Response
    {
        return $this->render('test/known.html.twig',
            ['ProgrammingLanguageRepository' => $programmingLanguageRepository->findKnown()]);
    }
    /**
     * @Route("/{id}", name="test_id", methods="GET")
     */
    public function detail(PurchaseOrder $purchaseOrder): Response
    {
        return $this->render('test/detail.html.twig',
            ['PurchaseOrder' => $purchaseOrder]);
    }
    
}
