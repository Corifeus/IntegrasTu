<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Otro;
use PIGBundle\Form\OtroType;
use PIGBundle\Entity\Servicio;
use PIGBundle\Form\ServicioType;
use Symfony\Component\HttpFoundation\Request;

class OtroController extends Controller
{
    public function indexAction()
    {
        $repository= $this->getDoctrine()->getRepository('PIGBundle:Otro');
        $otros = $repository->findAll();
        return $this->render('PIGBundle:Otros:index.html.twig',array("otros"=>$otros));
    }



    public function otroAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Otro');
      $otros = $repository->findAll();
        return $this->render('PIGBundle:Otros:all.html.twig',array("otros"=>$otros));
    }



    public function nuevoOtroAction(Request $request)
    {

      $otro=new Otro();
      $form= $this->createForm(OtroType::class);


      $form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {
          $otro = $form->getData();
          $em = $this->getDoctrine()->getManager();

          $em->persist($otro);
          $em->flush();
      		return $this->render('PIGBundle:Default:index.html.twig');
    	}


    	return $this->render('PIGBundle:Otros:nuevoOtros.html.twig',array("formOtros"=>$form->createView() ));
    }
  

    public function msgExitoAction()
    {
        return $this->render('PIGBundle:Otros:msgExito.html.twig');
    }



}
