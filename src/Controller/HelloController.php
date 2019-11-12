<?php


namespace App\Controller;


use App\Entity\Hello;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class HelloController
 * @package App\Controller
 * @Route("/test")
 */
class HelloController extends AbstractController
{

    /**
     * @Route("/")
     * @return Response
     */
    public function test()
    {
        $hello = new Hello();
        $test = $hello->hello();
        dump($test);
        return new Response();
    }
}