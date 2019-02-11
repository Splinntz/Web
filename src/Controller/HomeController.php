<?php
/**
 * Created by PhpStorm.
 * User: Antonin Chigot
 * Date: 11/02/2019
 * Time: 10:42
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController
{
    /**
     * @Route("/");
     */
    public function homepage() {
        return new Response ('First page');
    }
}