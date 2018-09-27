<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="inicio")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/contacto/", name="contact")
     */
    public function contactoAction(Request $request)
    {
      $number = random_int(0, 100);

       return new Response(
           '<html><body>Lucky number: '.$number.'</body></html>'

    };
    /**
     * @Route("/miguel/", name="mike")
     */
    public function miguelAction(Request $request)
    {
      $number = random_int(0, 100);

       return new Response(
           '<html><body>Lucky number: '.$number.'</body></html>'

    };
}
