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



    public function TrabajadoraAllAction()
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $trabajadoras = $repository->findAll();
        return $this->render('PIGBundle:Trabajadoras:all.html.twig',array("trabajadoras"=>$trabajadoras));
    }


    public function TrabajadoraHorarioAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $query = $em->createQuery(
          'SELECT distinct s.Fecha
          FROM trabajadora_servicio t,trabajadora tra,servicio s
          WHERE tra.id > :identificador
          order by s.Fecha asc;'
      )->setParameter('identificador', $id);

      $horario = $query->getResult();
      return $this->render('PIGBundle:Trabajadoras:horario.html.twig',array("horarios"=>$horario));
    }


    public function TrabajadoraShowAction($id)
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');

      $query = "select distinct s.Fecha from trabajadora_servicio t,trabajadora tra,servicio s where tra.id=" . $id . " order by s.Fecha asc;";

      $trabajadoras = $repository->findAll();
        return $this->render('PIGBundle:Trabajadoras:show.html.twig',array("trabajadoras"=>$trabajadoras, 'id'=>$id));
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
