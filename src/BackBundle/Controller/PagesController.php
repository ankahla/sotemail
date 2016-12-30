<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
    /**
     * @Route("/pages/presentation", name="presentation")
     */
    public function presentationAction()
    {
        return $this->render('BackBundle:Pages:presentation.html.twig');
    }

    /**
     * @Route("/pages/maitrise", name="maitrise")
     */
    public function maitriseAction()
    {
        return $this->render('BackBundle:Pages:maitrise.html.twig');
    }

    /**
     * @Route("/pages/quality", name="quality")
     */
    public function qualityAction()
    {
        return $this->render('BackBundle:Pages:quality.html.twig');
    }

    /**
     * @Route("/pages/financialData", name="financialData")
     */
    public function fiancialDataAction()
    {
        return $this->render('BackBundle:Pages:financialData.html.twig');
    }

}
