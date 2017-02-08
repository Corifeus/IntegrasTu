<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Trabajadora;
use PIGBundle\Form\TrabajadoraType;
use Symfony\Component\HttpFoundation\Request;

class TrabajadoraController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIGBundle:Trabajadoras:index.html.twig');
    }



    public function TrabajadoraAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $trabajadoras = $repository->findAll();
        return $this->render('PIGBundle:Trabajadoras:all.html.twig',array("trabajadoras"=>$trabajadoras));
    }



    public function nuevaTrabajadoraAction(Request $request)
    {
    	$trabajadora=new Trabajadora();
    	$form= $this->createForm(TrabajadoraType::class);

    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {

    		$trabajadora = $form->getData();

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($trabajadora);
    		$em->flush();

    		return $this->redirectToRoute('trabajadoras_exito');
    	}

    	return $this->render('PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig',array("formTrabajadoras"=>$form->createView() ));
    }



    public function msgExitoAction()
    {
        return $this->render('PIGBundle:Trabajadoras:msgExito.html.twig');
    }


}
