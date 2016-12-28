<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CatalogsController extends Controller
{

    /**
     * @Route("/catalog/new", name="catalogNew")
     */
    public function catalogNewAction()
    {
        return $this->render('BackBundle:Catalogs:catalogNew.html.twig');
    }

    /**
     * @Route("/catalog", name="catalog")
     */
    public function catalogAction()
    {
        return $this->render('BackBundle:Catalogs:catalog.html.twig');
    }

    /**
     * @Route("/catalog/{id}/show", name="catalogShow")
     */
    public function catalogShowAction($id)
    {
        return $this->render('BackBundle:Catalogs:catalogShow.html.twig');
    }

    /**
     * @Route("/catalog/{id}/edit", name="catalogEdit")
     */
    public function catalogEditAction($id)
    {
        return $this->render('BackBundle:Catalogs:catalogEdit.html.twig');
    }

    /**
     * @Route("/catalogSeries", name="catalogSeries")
     */
    public function catalogSeriesAction()
    {
        return $this->render('BackBundle:Catalogs:catalogSeries.html.twig');
    }

    /**
     * @Route("/catalogSeries/{id}/show", name="catalogSeriesShow")
     */
    public function catalogSeriesShowAction($id)
    {
        return $this->render('BackBundle:Catalogs:catalogSeriesShow.html.twig');
    }

    /**
     * @Route("/catalogSeries/{id}/edit", name="catalogSeriesEdit")
     */
    public function catalogSeriesEditAction($id)
    {
        return $this->render('BackBundle:Catalogs:catalogSeriesEdit.html.twig');
    }

	/**
     * @Route("/catalogs", name="catalogs")
     */
    public function catalogsAction()
    {
        return $this->render('BackBundle:Catalogs:catalogs.html.twig');
    }
}
