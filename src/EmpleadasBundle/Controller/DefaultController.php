<?php

namespace EmpleadasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Trabajadora;
use PIGBundle\Form\TrabajadoraType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmpleadasBundle:Default:index.html.twig');
    }


    public function PerfilShowAction($id)
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $trabajadora = $repository->findOneById($id);
        return $this->render('EmpleadasBundle:Default:show.html.twig',array("trabajadora"=>$trabajadora, 'id'=>$id));
    }

    public function horarioAction($id)
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

        return $this->render('EmpleadasBundle:Default:horario.html.twig',array("datos"=>$datos, 'id'=>$id));
    }
}
