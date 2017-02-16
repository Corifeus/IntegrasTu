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
