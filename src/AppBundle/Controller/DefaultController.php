<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/examples", schemes={"http", "https"}, methods={"GET"})
 */
class DefaultController extends Controller
{
    /**
     * @Route("/test1/test2")
     * @Route(
     *     "/{username}",
     *     requirements= {"username"=".*"},
     *     schemes={"http", "https"},
     *     name="homepage"
     * )
     */
    public function indexAction(Request $request, $username ="")
    {
        return new Response(
            $this->renderView('default/index.html.twig', [
                'myVar' => $username
            ]),
            Response::HTTP_NOT_FOUND
        );
    }
}
