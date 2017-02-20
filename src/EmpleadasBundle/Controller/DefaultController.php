<?php

namespace EmpleadasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Trabajadora;
use PIGBundle\Entity\User;
use PIGBundle\Form\TrabajadoraType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('EmpleadasBundle:Default:index.html.twig');
    }


    public function PerfilShowAction()
    {
      $user = $this->getUser();

      $id = $user->getId();
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $trabajadora = $repository->findOneById($id);
        return $this->render('EmpleadasBundle:Default:show.html.twig',array("trabajadora"=>$trabajadora));
    }

    public function horarioAction()
    {
      $user = $this->getUser();

      $id = $user->getId();
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

        return $this->render('EmpleadasBundle:Default:horario.html.twig',array("datos"=>$datos));
    }

    public function loginAction()
    {
      $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('EmpleadasBundle:Default:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
      ));
    }
}
