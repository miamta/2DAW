<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
  }

  /**
   * @Route("/miguel", name="index.html.twig")
   */

  public function indexmiguel(Request $request)
  {
      return $this->render('miguel/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
      ]);
}

/**
 * @Route("miguel/RegistrarUsuarios.html.twig", name="../RegistrarUsuarios.html.twig")
 */
public function RegistrarUsers(Request $request)
{
    return $this->render('miguel/RegistrarUsuarios.html.twig', [
        'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
    ]);
}







}
