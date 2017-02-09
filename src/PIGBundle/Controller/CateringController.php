<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Catering;
use PIGBundle\Form\CateringType;
use Symfony\Component\HttpFoundation\Request;

class CateringController extends Controller
{
    public function indexAction()
    {
        $repository= $this->getDoctrine()->getRepository('PIGBundle:Catering');
        $caterings = $repository->findAll();
        return $this->render('PIGBundle:Caterings:index.html.twig',array("caterings"=>$caterings));
    }



    public function cateringAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Catering');
      $caterings = $repository->findAll();
        return $this->render('PIGBundle:Caterings:all.html.twig',array("caterings"=>$caterings));
    }



    public function nuevoCateringAction(Request $request)
    {
    	$catering=new Catering();
    	$form= $this->createForm(CateringType::class);

    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {

    		$catering = $form->getData();

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($catering);
    		$em->flush();

    		return $this->redirectToRoute('caterings_exito');
    	}

    	return $this->render('PIGBundle:Caterings:nuevoCaterings.html.twig',array("formCaterings"=>$form->createView() ));
    }



    public function msgExitoAction()
    {
        return $this->render('PIGBundle:Caterings:msgExito.html.twig');
    }


}
