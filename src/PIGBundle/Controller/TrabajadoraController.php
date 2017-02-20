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
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $trabajadoras = $repository->findAll();
        return $this->render('PIGBundle:Trabajadoras:index.html.twig',array("trabajadoras"=>$trabajadoras));
    }

    public function borrarAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $connection = $em->getConnection();
      $statement = $connection->prepare("DELETE FROM trabajadora
      WHERE id=" . $id . ";");
      $statement->bindValue('id', 123);
      $statement->execute();

      $statement = $connection->prepare("DELETE FROM serviciosdeunatrabajadora
      WHERE trabajadora_id=" . $id . ";");
      $statement->bindValue('id', 123);
      $statement->execute();

      return $this->redirectToRoute('trabajadoras_index');
    }

    public function TrabajadoraAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $trabajadoras = $repository->findAll();
        return $this->render('PIGBundle:Trabajadoras:all.html.twig',array("trabajadoras"=>$trabajadoras));
    }


    public function TrabajadoraShowAction($id)
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');

      $trabajadora = $repository->findOneById($id);
      $trabajadoras = $repository->findAll();

      $em = $this->getDoctrine()->getManager();
      $connection = $em->getConnection();
      $statement = $connection->prepare("select *
      from trabajadora t,servicio s,serviciosdeunatrabajadora ser
      where t.id=ser.trabajadora_id and s.id=ser.servicio_id and t.id=" . $id . ";");
      $statement->bindValue('id', 123);
      $statement->execute();
      $results = $statement->fetchAll();


      $datos=array($trabajadora,$results,$trabajadoras);

        return $this->render('PIGBundle:Trabajadoras:show.html.twig',array("datos"=>$datos, 'id'=>$id));
    }

    public function nuevaTrabajadoraAction(Request $request)
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $trabajadoras = $repository->findAll();

    	$trabajadora=new Trabajadora();
    	$form= $this->createForm(TrabajadoraType::class);

    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()) {

    		$trabajadora = $form->getData();

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($trabajadora);
    		$em->flush();

    		return $this->redirectToRoute('trabajadoras_index');
    	}

    	return $this->render('PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig',array("trabajadoras"=>$trabajadoras,"formTrabajadoras"=>$form->createView() ));
    }



    public function msgExitoAction()
    {
        return $this->render('PIGBundle:Trabajadoras:msgExito.html.twig');
    }


}
