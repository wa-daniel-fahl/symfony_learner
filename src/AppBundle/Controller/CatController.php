<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CatController
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        return new Response('The genus: ' . $genusName);
    }
}