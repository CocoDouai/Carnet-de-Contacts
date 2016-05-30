<?php

namespace Carnet\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Carnet\ContactBundle\Entity\Adresse;
use Carnet\ContactBundle\Form\AdresseType;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    
    
    public function indexAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $adresses = $em->getRepository('CarnetContactBundle:Adresse')->findAll();
        
               
        return $this->render('CarnetContactBundle:Default:index.html.twig', array(
            'adresses' => $adresses,
        
        ));
    }
    
    public function ajouterAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $a = new Adresse();
        
        $form = $this->createForm(new AdresseType(), $a);
        
        $request = $this->getRequest();
        if($request->isMethod('POST')){
            $form->bind($request);
            
            $a = $form->getData();
            $em->persist($a);
            $em->flush();
            
            return $this->redirect($this->generateUrl("carnet_contact_afficher", array(
                'id' => $a->getId(),
            ))
          );
        }
        
        return $this->render('CarnetContactBundle:Default:ajouter.html.twig', array(
            'form' => $form->createView(),
        
        ));
    }
    
    public function supprimerAction(Adresse $adresse){
        $em = $this->getDoctrine()->getEntityManager();
        
        $em->remove($adresse);
        $em->flush();
        
        return $this->redirect($this->generateUrl('carnet_contact_homepage'));
    }
    
    public function afficherAction(Adresse $adresse){
                    
        return $this->render('CarnetContactBundle:Default:afficher.html.twig', array(
            'adresse' => $adresse,
            ));
    }
    
    public function editerAction(Adresse $adresse)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $form = $this->createForm(new AdresseType(), $adresse);
        
        $request = $this->getRequest();
        if($request->isMethod('POST')){
            $form->bind($request);
            
            $a = $form->getData();
            $em->persist($a);
            $em->flush();
            
            return $this->redirect($this->generateUrl("carnet_contact_afficher", array(
                'id' => $adresse->getId(),
            ))
          );
        
        }
        
        return $this->render('CarnetContactBundle:Default:editer.html.twig', array(
            'form' => $form->createView(),
            'id' => $adresse->getId(),
        
        ));
    }
}
