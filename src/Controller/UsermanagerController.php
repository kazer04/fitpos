<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TMenu;
use App\Entity\TSousMenu;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\TUser;

class UsermanagerController extends Controller {

    /**
     * @Route("/usermanager", name="usermanager")
     */
    public function index() {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();
        return $this->render('usermanager/index.html.twig', [
                    'controller_name' => 'UsermanagerController',
                    'TMenus' => $TMenus
        ]);
    }

    /**
     * @Route("api/usermanager/userlist.json", name="api.usermanager.userlist")
     */
    public function getuserlist() {

        $repository = $this->getDoctrine()->getRepository(TUser::class);
        $TUsers = $repository->findAll();
        $serializer = $this->get('serializer');
        $response = $serializer->serialize($TUsers, 'json');
        return new Response(
               '{ "aaData": '. $response.'}'
        );
    }

}
