<?php
/**
 * Created by PhpStorm.
 * User: Antonin Chigot
 * Date: 11/02/2019
 * Time: 11:31
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article
{
    /**
     * @Route("/article/{article}");
     * @param $article
     * @return Response
     */
    public function list($article) {
        return new Response ('First article : '.$article.'');
    }
}