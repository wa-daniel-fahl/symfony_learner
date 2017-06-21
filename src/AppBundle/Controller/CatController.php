<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 21.06.17
 * Time: 18:25
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CatController
{
    /**
     * @Route("/cat")
     */
    public function showAction()
    {
        return new Response('Neue Kategorien!');
    }
}