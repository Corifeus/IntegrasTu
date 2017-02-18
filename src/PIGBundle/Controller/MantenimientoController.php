<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Mantenimiento;
use PIGBundle\Form\MantenimientoType;
use Symfony\Component\HttpFoundation\Request;

class MantenimientoController extends Controller
{
    public function indexAction()
    {
        $repository= $this->getDoctrine()->getRepository('PIGBundle:mantenimiento');
        $mantenimientos = $repository->findAll();
        return $this->render('PIGBundle:Mantenimientos:index.html.twig',array("mantenimientos"=>$mantenimientos));
    }



    public function mantenimientoAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:mantenimiento');
      $mantenimientos = $repository->findAll();
        return $this->render('PIGBundle:Mantenimientos:all.html.twig',array("mantenimientos"=>$mantenimientos));
    }



    public function nuevoMantenimientoAction(Request $request)
    {
      $mantenimiento=new Mantenimiento();
      $form= $this->createForm(MantenimientoType::class);

      $form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {
          $mantenimiento = $form->getData();
          $em = $this->getDoctrine()->getManager();

          $em->persist($mantenimiento);
          $em->flush();
      		return $this->redirectToRoute('Servicios_index');
    	}

    	return $this->render('PIGBundle:Mantenimientos:nuevoMantenimientos.html.twig',array("formMantenimientos"=>$form->createView() ));
    }



    public function msgExitoAction()
    {
        return $this->render('PIGBundle:Mantenimientos:msgExito.html.twig');
    }


}
