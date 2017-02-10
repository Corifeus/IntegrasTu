<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Servicio;
use PIGBundle\Form\ServicioType;
use Symfony\Component\HttpFoundation\Request;

class ServicioController extends Controller
{
    public function indexAction()
    {
        $repository= $this->getDoctrine()->getRepository('PIGBundle:Servicio');
        $servicios = $repository->findAll();
        return $this->render('PIGBundle:Servicios:index.html.twig',array("servicios"=>$servicios));
    }



    public function servicioAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Servicio');
      $servicios = $repository->findAll();
        return $this->render('PIGBundle:Servicios:all.html.twig',array("servicios"=>$servicios));
    }

    public function servicioShowAction($id)
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Servicio');
      $servicios = $repository->findAll();
        return $this->render('PIGBundle:Servicios:show.html.twig',array("servicios"=>$servicios, 'id'=>$id));
    }



    public function nuevoServicioAction(Request $request)
    {
    	$servicio=new Servicio();
    	$form= $this->createForm(ServicioType::class);

    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {

    		$servicio = $form->getData();

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($servicio);
    		$em->flush();

    		return $this->redirectToRoute('Servicios_exito');
    	}

    	return $this->render('PIGBundle:Servicios:nuevoservicio.html.twig',array("formServicios"=>$form->createView() ));
    }



    public function msgExitoAction()
    {
        return $this->render('PIGBundle:Servicios:msgExito.html.twig');
    }


}
