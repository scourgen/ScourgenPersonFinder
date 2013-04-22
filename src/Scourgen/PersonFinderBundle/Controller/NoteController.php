<?php

namespace Scourgen\PersonFinderBundle\Controller;

use Scourgen\PersonFinderBundle\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;

class NoteController extends Controller
{
    /**
     * @Route("/note",name="note_index")
     * @Template()
     */
    public function indexAction()
    {

    }


    /**
     * @Route("/note/post_new/person_id/{person_id}",name="note_post_new")
     * @Template()
     */
    public function postNewNoteAction($person_id)
    {
        $note = new Note();
        $request = $this->getRequest();
        $em=$this->getDoctrine()->getManager();

        $form = $this->createFormBuilder($note)
            ->add('author_name', 'text')
            ->add('text', 'textarea')
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                $note->setSourceDate(new \DateTime('now'));
                $note->setPerson($em->getReference('ScourgenPersonFinderBundle:Person', $person_id));
                $em = $this->getDoctrine()->getManager();
                $em->persist($note);
                $em->flush();
                return new RedirectResponse($this->generateUrl('person_detail',array('person_id'=>$person_id)));

            }
        } else {

        }
        return array('form' => $form->createView());
    }
}
