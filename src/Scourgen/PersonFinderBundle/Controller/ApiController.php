<?php

namespace Scourgen\PersonFinderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api")
 * @Template()
 */
class ApiController extends Controller
{
    private function serialize_to_json($data){
        $serializer = $this->container->get('serializer');
        return $serializer->serialize($data,'json');
    }


    /**
     * @Route("/get_person_by_person_id/{person_id}")
     * @ApiDoc(
     *  resource=true,
     *  description="get person by person_id",
     *  filters={
     *      {"name"="person_id", "dataType"="integer"}
     *  }
     * )
     */
    public function getPersonByPersonIdAction($person_id)
    {
        $odm = $this->getDoctrine()->getManager();

        $person=$odm->getRepository('ScourgenPersonFinderBundle:Person')->find($person_id);

        return new Response($this->serialize_to_json($person));
    }

    /**
     * @Route("/get_notes_by_person_id/{person_id}")
     * @ApiDoc(
     *  resource=true,
     *  description="get person by person_id",
     *  filters={
     *      {"name"="person_id", "dataType"="integer"}
     *  }
     * )
     */
    public function getNotesByPersonIdAction($person_id)
    {
        $odm = $this->getDoctrine()->getManager();

        $person=$odm->getRepository('ScourgenPersonFinderBundle:Person')->find($person_id);

        return new Response($this->serialize_to_json($person->getPersonRecords()));

    }
}
