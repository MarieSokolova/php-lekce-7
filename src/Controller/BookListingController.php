<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookTListingType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/book/listing")
 */
class BookListingController extends AbstractController
{
     /**
     * @Route("/century", name="book_century", methods="GET")
     */
    public function century(BookRepository $bookRepository): Response
    {
        return $this->render('book_listing/century.html.twig', ['BookRepository' => $bookRepository->findAll()]);
    }
    /**
     * @Route("/author", name="book_author", methods="GET")
     */
    public function author(BookRepository $bookRepository): Response
    {
        return $this->render('book_listing/author.html.twig', ['BookRepository' => $bookRepository->findAll()]);
    }
    /**
     * @Route("/price", name="book_price", methods="GET")
     */
    public function price(BookRepository $bookRepository): Response
    {
        
        $price = $bookRepository->findBy(
        ['id' => [0,1,2, 3,4,5, 6]],
                    ['cena' => 'ASC']);
        return $this->render('book_listing/price.html.twig', ['BookRepository' => $price]);
    }
    /**
     * @Route("/new", name="book_new", methods="GET")
     */
    public function new(BookRepository $bookRepository): Response
    {
        $newBook = $bookRepository->findBy(
        ['rokVydani' =>[2017,2018]]);
        return $this->render('book_listing/new.html.twig', ['BookRepository' => $newBook]);
    }
    
}
