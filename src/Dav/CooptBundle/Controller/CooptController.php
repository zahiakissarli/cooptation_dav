<?php

namespace Dav\CooptBundle\Controller;

use Dav\CooptBundle\DavCooptBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Dav\CooptBundle\Entity\Cooptation;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;

class CooptController extends Controller
{
    /**
     * @Route("/test")
     */
    public function indexAction()
    {
        echo "test";exit;
    }

    /**
     * @Get("/cooptations")
     */
    public function getCooptsAction(Request $Request){

        $coopts = $this->get('doctrine.orm.entity_manager')
                ->getRepository('DavCooptBundle:Cooptation')
                ->findAll();

        $formatted= [];
        foreach ($coopts as $coopt){
            $formatted[]= [
                'id' => $coopt->getId(),
                'nom' => $coopt->getNom(),
                'prenom' => $coopt->getPrenom(),
                'telephone' => $coopt->getTelephone(),
                'email' => $coopt->getEmail(),
                'societe_groupe' => $coopt->getSocieteGroupe(),
                'domaine_activite' => $coopt->getDomaineActivite(),
                'connaissance_coopt' => $coopt->getConnaissanceCoopt(),
                'pj_cv' => $coopt->getPjCv(),
                'id_user' => $coopt->getIdUser(),
            ];
        }

        return new JsonResponse($formatted);
    }

    /**
     * @Get("/cooptations/{id}")
     */
    public function getOneCooptAction(Request $request){
        $oneCoopt = $this->get('doctrine.orm.entity_manager')
                    ->getRepository('DavCooptBundle:Cooptation')
                    ->find($request->get('id'));

        $formatted[] = [
            'id' => $oneCoopt->getId(),
            'nom' => $oneCoopt->getNom(),
            'prenom' => $oneCoopt->getPrenom(),
            'telephone' => $oneCoopt->getTelephone(),
            'email' => $oneCoopt->getEmail(),
            'societe_groupe' => $oneCoopt->getSocieteGroupe(),
            'domaine_activite' => $oneCoopt->getDomaineActivite(),
            'connaissance_coopt' => $oneCoopt->getConnaissanceCoopt(),
            'pj_cv' => $oneCoopt->getPjCv(),
            'id_user' => $oneCoopt->getIdUser(),
        ];

        return new JsonResponse($formatted);
    }



}
