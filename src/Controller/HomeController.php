<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

        /**
     * @Route("/hello/{prenom}/age/{age}", name="hello", requirements={"age"="\d+"})
     * Requirement indique que $age doit etre un number. On passe à la définition de multi route pour autoriser de ne pas avoir toute l'url
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom" )
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0){

            return $this->render(
                'hello.html.twig',
                [
                    'prenom' => $prenom,
                    'age' => $age
                ]
            );
        }

    /**
     * @Route("/", name="homepage")
     *
     * @return void
     */
    public function home(){

    $prenoms = ["lior" => 31, "joseph" => 17, "anne" => 11];
        return $this->render(
            'home.html.twig',
            [
                'title' => 'Bonjour à tous!' ,
                'age' => 17,
                'tableau' => $prenoms
            ]
        );
    }

}

?>