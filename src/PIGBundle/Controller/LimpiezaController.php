<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Limpieza;
use PIGBundle\Form\LimpiezaType;
use Symfony\Component\HttpFoundation\Request;

class LimpiezaController extends Controller
{
    public function indexAction()
    {
        $repository= $this->getDoctrine()->getRepository('PIGBundle:Limpieza');
        $limpiezas = $repository->findAll();
        return $this->render('PIGBundle:Limpiezas:index.html.twig',array("limpiezas"=>$limpiezas));
    }



    public function limpiezaAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Limpieza');
      $limpiezas = $repository->findAll();
        return $this->render('PIGBundle:Limpiezas:all.html.twig',array("limpiezas"=>$limpiezas));
    }



    public function nuevoLimpiezaAction(Request $request)
    {
      $limpieza=new Limpieza();
      $form= $this->createForm(LimpiezaType::class);

      $form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {
          $limpieza = $form->getData();
          $em = $this->getDoctrine()->getManager();

          $em->persist($limpieza);
          $em->flush();
      		return $this->render('PIGBundle:Default:index.html.twig');
    	}

    	return $this->render('PIGBundle:Limpiezas:nuevoLimpiezas.html.twig',array("formLimpiezas"=>$form->createView() ));
    }



    public function msgExitoAction()
    {
        return $this->render('PIGBundle:limpiezas:msgExito.html.twig');
    }


}
