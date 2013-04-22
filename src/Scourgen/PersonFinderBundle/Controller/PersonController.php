<?php

namespace Scourgen\PersonFinderBundle\Controller;

use Scourgen\PersonFinderBundle\Entity\Note;
use Scourgen\PersonFinderBundle\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class PersonController extends Controller
{
    /**
     * @Route("/post_new_person",name="post_new_person")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $person = new Person();


        $form = $this->createFormBuilder($person)
            ->add('fullname', 'text')
            ->add('description', 'textarea')
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $person->setSourceDate(new \DateTime('now',new \DateTimeZone('UTC')));
                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->flush();
            }
        } else {

        }
        return array('form' => $form->createView());
    }

    /**
     * @Route("/person/{person_id}",name="person_detail")
     * @Template()
     */
    public function personDetailAction($person_id)
    {
        $odm = $this->getDoctrine()->getManager();

        $person=$odm->getRepository('ScourgenPersonFinderBundle:Person')->find($person_id);

        $note = new Note();


        $form = $this->createFormBuilder($note)
            ->add('author_name', 'text')
            ->add('text', 'textarea')
            ->getForm();

        return array('person'=>$person,'form'=>$form->createView());
    }
}
