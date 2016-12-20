<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{

    /**
     * @Route("/productLines", name="productLines")
     */
    public function productLinesAction()
    {
        return $this->render('BackBundle:Products:productLines.html.twig');
    }

    /**
     * @Route("/productLines/{id}/show", name="productLinesShow")
     */
    public function productLinesShowAction($id)
    {
        return $this->render('BackBundle:Products:productLinesShow.html.twig');
    }

    /**
     * @Route("/productLines/{id}/edit", name="productLinesEdit")
     */
    public function productLinesEditAction($id)
    {
        return $this->render('BackBundle:Products:productLinesEdit.html.twig');
    }

    /**
     * @Route("/productLines/new", name="productLinesNew")
     */
    public function productLinesNewAction()
    {
        return $this->render('BackBundle:Products:productLinesNew.html.twig');
    }

    /**
     * @Route("/productSeries", name="productSeries")
     */
    public function productSeriesAction()
    {
        return $this->render('BackBundle:Products:productSeries.html.twig');
    }

    /**
     * @Route("/productSeries/{id}/show", name="productSeriesShow")
     */
    public function productSeriesShowAction($id)
    {
        return $this->render('BackBundle:Products:productSeriesShow.html.twig');
    }

    /**
     * @Route("/productSeries/{id}/edit", name="productSeriesEdit")
     */
    public function productSeriesEditAction($id)
    {
        return $this->render('BackBundle:Products:productSeriesEdit.html.twig');
    }

    /**
     * @Route("/productSeries/new", name="productSeriesNew")
     */
    public function productSeriesNewAction()
    {
        return $this->render('BackBundle:Products:productSeriesNew.html.twig');
    }

	/**
     * @Route("/products", name="products")
     */
    public function productsAction()
    {
        return $this->render('BackBundle:Products:products.html.twig');
    }

    /**
     * @Route("/product/{id}/show", name="productShow")
     */
    public function productShowAction($id)
    {
        return $this->render('BackBundle:Products:productShow.html.twig');
    }

    /**
     * @Route("/product/{id}/edit", name="productEdit")
     */
    public function productEditAction($id)
    {
        return $this->render('BackBundle:Products:productEdit.html.twig');
    }

    /**
     * @Route("/product/new", name="productNew")
     */
    public function productNewAction()
    {
        return $this->render('BackBundle:Products:productNew.html.twig');
    }
}
