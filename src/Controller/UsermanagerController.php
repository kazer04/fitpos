<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TMenu;
use App\Entity\TLanguage;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\TUser;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

class UsermanagerController extends Controller {

    /**
     * @Route("/users/list", name="users_list")
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
     * @Route("/users/add", name="users.add")
     */
    public function add() {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();

        $repositoryTLanguage = $this->getDoctrine()->getRepository(TLanguage::class);
        $TLanguage = $repositoryTLanguage->findAll();

        
         $repositoryTRole = $this->getDoctrine()->getRepository(TRole::class);
        $TRole = $repositoryTRole->findAll();
        return $this->render('usermanager/form.html.twig', [
                    'controller_name' => 'UsermanagerController',
                    'TMenus' => $TMenus,
                    'TUser' => new TUser(),
                    'TLanguage' => $TLanguage,
                    'TRole'=>$TRole
        ]);
    }

    /**
     * @Route("/users/edit", name="users.edit")
     */
    public function edit(Request $request) {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();


        $repositoryTUser = $this->getDoctrine()->getRepository(TUser::class);
        $TUser = $repositoryTUser->find($request->query->get('ID'));

        $repositoryTLanguage = $this->getDoctrine()->getRepository(TLanguage::class);
        $TLanguage = $repositoryTLanguage->findAll();
        
        
         $repositoryTRole = $this->getDoctrine()->getRepository(TRole::class);
        $TRole = $repositoryTRole->findAll();


        //$advert = $repository->find(5);
        return $this->render('usermanager/form.html.twig', [
                    'controller_name' => 'UsermanagerController',
                    'TMenus' => $TMenus,
                    'TUser' => $TUser,
                    'TLanguage' => $TLanguage,
                    'TRole'=>$TRole
        ]);
    }

    /**
     * @Route("/users/delete", name="users.delete")
     */
    public function delete(Request $request, ObjectManager $manager) {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();

        $repositoryTUser = $this->getDoctrine()->getRepository(TUser::class);
        $TUser = $repositoryTUser->find($request->query->get('ID'));
        $manager->remove($TUser);
        $manager->flush();
        return $this->index();
        /*
          $this->render('usermanager/form.html.twig', [
          'controller_name' => 'UsermanagerController',
          'TMenus' => $TMenus
          ]); */
    }

    /**
     * @Route("/api/users/list.json", name="api.users.list.json")
     */
    public function getuserlist() {

        $repository = $this->getDoctrine()->getRepository(TUser::class);
        $Oo = $repository->findAll();
        $serializer = $this->get('serializer');
        $response = $serializer->serialize($Oo, 'json');
        return new Response(
                '{ "aaData": ' . $response . '}'
        );
    }

}
