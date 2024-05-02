<?php

namespace App\Controller;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        // findall() - Select * from movies;
        // find() - Select * from movies where id=x;
        // findby() - select * from movies order by id desc;
        /* findOneBy() - select * from movies where id=6 and title='inception'
        order by id desc */
        // count() - select count() from movies where id=1


        //$repository = $this->em->getRepository(Movie::class);

        //$movies = $repository->getClassName();

        //dd($movies);

        return $this->render('index.html.twig');
    }
}
