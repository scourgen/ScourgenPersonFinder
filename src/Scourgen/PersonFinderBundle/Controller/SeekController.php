<?php

namespace Scourgen\PersonFinderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class SeekController extends Controller
{
    /**
     * @Route("/seek",name="seek_index")
     * @Template()
     */
    public function indexAction()
    {
        $form = $this->createFormBuilder()
            ->add('name')->getForm();

        return array('form'=>$form->createView());
    }


    /**
     * @Route("/seek/search",name="seek_search")
     */
    public function searchAction(){
        $request = $this->getRequest();

        $form_value=$request->get('form');

        $odm = $this->getDoctrine()->getManager();
        $persons=$odm->getRepository('ScourgenPersonFinderBundle:Person')->findPersonByName($form_value['name']);
        if(count($persons)>0){
            return new RedirectResponse($this->generateUrl('seek_list',array('name'=>$form_value['name'])));
        }else{
            return new RedirectResponse($this->generateUrl('seek_person_not_found'));
        }
    }
    /**
     * @Route("/seek/person_not_found",name="seek_person_not_found")
     * @Template()
     */
    public function personNotFoundAction(){
        return array();
    }

    /**
     * @Route("/seek/list/name/{name}",name="seek_list")
     * @Template()
     */
    public function listAction($name){
        $odm = $this->getDoctrine()->getManager();
        $persons=$odm->getRepository('ScourgenPersonFinderBundle:Person')->findPersonByName($name);
        return array('name'=>$name,'persons'=>$persons);
    }
}
