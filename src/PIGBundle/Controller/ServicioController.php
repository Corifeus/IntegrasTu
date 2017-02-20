<?php

namespace PIGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIGBundle\Entity\Mantenimiento;
use PIGBundle\Form\MantenimientoType;
use PIGBundle\Entity\Catering;
use PIGBundle\Form\CateringType;
use PIGBundle\Entity\Limpieza;
use PIGBundle\Form\LimpiezaType;
use PIGBundle\Entity\Otro;
use PIGBundle\Form\OtroType;
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


    public function borrarAction($id)
    {
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Servicio');
      $servicio = $repository->find($id);

      switch ($servicio->getTipo()) {
        case 'Limpieza':
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
          $statement = $connection->prepare("DELETE FROM limpieza
          WHERE id_Servicio=" . $id . ";");
          $statement->bindValue('id', 123);
          $statement->execute();
        break;

        case 'Catering':
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
          $statement = $connection->prepare("DELETE FROM catering
          WHERE id_Servicio=" . $id . ";");
          $statement->bindValue('id', 123);
          $statement->execute();
        break;

        case 'Mantenimiento':
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
          $statement = $connection->prepare("DELETE FROM mantenimiento
          WHERE id_Servicio=" . $id . ";");
          $statement->bindValue('id', 123);
          $statement->execute();
        break;

        case 'Otro':
          $em = $this->getDoctrine()->getManager();
          $connection = $em->getConnection();
          $statement = $connection->prepare("DELETE FROM otro
          WHERE id_Servicio=" . $id . ";");
          $statement->bindValue('id', 123);
          $statement->execute();
        break;
      }


      $em = $this->getDoctrine()->getManager();
      $connection = $em->getConnection();
      $statement = $connection->prepare("DELETE FROM servicio
      WHERE id=" . $id . ";");
      $statement->bindValue('id', 123);
      $statement->execute();

      return $this->redirectToRoute('Servicios_index');
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
      $menu = $repository->findAll();

      $repository= $this->getDoctrine()->getRepository('PIGBundle:Servicio');
      $servicios = $repository->findOneById($id);

      switch ($servicios->getTipo()) {
        case 'Limpieza':
          $repository = $this->getDoctrine()->getRepository('PIGBundle:Limpieza');
          $especificaciones = $repository->findAll();
          $tipo = 'Limpieza';
        break;

        case 'Catering':
          $repository= $this->getDoctrine()->getRepository('PIGBundle:Catering');
          $especificaciones = $repository->findAll();
          $tipo = 'Catering';
        break;

        case 'Mantenimiento':
          $repository= $this->getDoctrine()->getRepository('PIGBundle:Mantenimiento');
          $especificaciones = $repository->findAll();
          $tipo = 'Mantenimiento';
        break;

        case 'Otro':
          $repository= $this->getDoctrine()->getRepository('PIGBundle:Otro');
          $especificaciones = $repository->findAll();
          $tipo = 'Otro';
        break;
      }


      $em = $this->getDoctrine()->getManager();
      $connection = $em->getConnection();
      $statement = $connection->prepare("select distinct t.Nombre,t.Apellidos
      from serviciosdeunatrabajadora ser,trabajadora t,servicio s
      where ser.trabajadora_id = t.id and ser.servicio_id=" . $id . ";");
      $statement->bindValue('id', 123);
      $statement->execute();
      $trabajadoras = $statement->fetchAll();


      //Id para comprobación
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Trabajadora');
      $connection = $em->getConnection();
      $statement = $connection->prepare("select id
      from trabajadora;");
      $statement->bindValue('id', 123);
      $statement->execute();
      $trabajadorasTodas = $statement->fetchAll();

      //Id de las asignadas
      $em = $this->getDoctrine()->getManager();
      $connection = $em->getConnection();
      $statement = $connection->prepare("select ser.trabajadora_id
      from serviciosdeunatrabajadora ser
      where ser.servicio_id=" . $id . ";");
      $statement->bindValue('id', 123);
      $statement->execute();
      $asignadas = $statement->fetchAll();


      //Todos los datos de las trabajadoras por si no encuentra resultados
      $repository= $this->getDoctrine()->getRepository('PIGBundle:Servicio');
      $trabajadorasDatos = $repository->findAll();

      $datos=array($menu,$especificaciones,$tipo,$trabajadoras);
      return $this->render('PIGBundle:Servicios:show.html.twig',array("datos"=>$datos, 'id'=>$id));
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


              $tipo=$servicio->getTipo();
              switch($tipo){
                case "Limpieza":
                  $id = $servicio->getId();
                  return $this->redirect('/servicios/newLimpieza/'.$id);
                break;

                case "Catering":
                  $id = $servicio->getId();
                  return $this->redirect('/servicios/newCatering/'.$id);
                  break;

                case "Mantenimiento":
                $id = $servicio->getId();
                return $this->redirect('/servicios/newMantenimiento/'.$id);
                  break;

                case "Otro":
                $id = $servicio->getId();
                return $this->redirect('/servicios/newOtro/'.$id);
                  break;

                default:
                  return $this->render('PIGBundle:Servicios:nuevoservicio.html.twig',array("formServicios"=>$form->createView() ));
                  break;
        }
        //return $this->render('PIGBundle:Limpiezas:nuevoLimpiezas.html.twig',array("formLimpiezas"=>$form->createView() ));
    		return $this->redirectToRoute('Limpiezas_nuevo');
    	}
      //return $this->render('PIGBundle:Otros:nuevoOtros.html.twig',array("formOtros"=>$form->createView() ));
    	return $this->render('PIGBundle:Servicios:nuevoServicio.html.twig',array("formServicios"=>$form->createView() ));

    }



    public function msgExitoAction()
    {
        //return $this->render('PIGBundle:Limpiezas:nuevoLimpiezas.html.twig',array("formLimpiezas"=>$form->createView() ));
        return $this->render('PIGBundle:Servicios:msgExito.html.twig');
    }


}
