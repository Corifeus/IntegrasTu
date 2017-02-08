<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Cliente;
use PIGBundle\Form\ClienteType;
use Symfony\Component\HttpFoundation\Request;

class ClienteController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIGBundle:Clientes:index.html.twig');
    }



    public function ClienteAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Cliente');
      $clientes = $repository->findAll();
        return $this->render('PIGBundle:Clientes:all.html.twig',array("clientes"=>$clientes));
    }



    public function nuevoClienteAction(Request $request)
    {
    	$cliente=new Cliente();
    	$form= $this->createForm(ClienteType::class);

    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {

    		$cliente = $form->getData();

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($cliente);
    		$em->flush();

    		return $this->redirectToRoute('clientes_exito');
    	}

    	return $this->render('PIGBundle:Clientes:nuevoCliente.html.twig',array("formClientes"=>$form->createView() ));
    }



    public function msgExitoAction()
    {
        return $this->render('PIGBundle:Clientes:msgExito.html.twig');
    }


}
