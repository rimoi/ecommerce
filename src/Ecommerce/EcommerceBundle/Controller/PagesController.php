<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function pageAction()
    {
        return $this->render('EcommerceBundle:Default:page/layout/page.html.twig');
    }
   
}
