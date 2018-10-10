<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TMenu;
use App\Entity\TLanguage;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\TRole;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

class RoleController extends Controller
{
    /**
     * @Route("/roles/list", name="roles")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();
        return $this->render('role/index.html.twig', [
            'controller_name' => 'RoleController',
            'TMenus' => $TMenus
        ]);
    }
    
    
        /**
     * @Route("/roles/add", name="roles.add")
     */
    public function add() {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();

        
        return $this->render('role/form.html.twig', [
                    'controller_name' => 'RoleController',
                    'TMenus' => $TMenus,
                    'TRole'=>new TRole()
        ]);
    }

    
    /**
     * @Route("/roles/edit", name="roles.edit")
     */
    public function edit(Request $request) {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();

        $repositoryTUser = $this->getDoctrine()->getRepository(TRole::class);
        $Oo = $repositoryTUser->find($request->query->get('ID'));

        return $this->render('role/form.html.twig', [
                    'controller_name' => 'RoleController',
                    'TMenus' => $TMenus,
                    'TRole'=>$Oo
        ]);
    }
    /**
     * @Route("/roles/delete", name="roles.delete")
     */
    public function delete(Request $request, ObjectManager $manager) {
        $repository = $this->getDoctrine()->getRepository(TMenu::class);
        $TMenus = $repository->findAll();

        $repositoryTUser = $this->getDoctrine()->getRepository(TRole::class);
        $Oo = $repositoryTUser->find($request->query->get('ID'));
        $manager->remove($Oo);
        $manager->flush();
        return $this->index();
        /*
          $this->render('usermanager/form.html.twig', [
          'controller_name' => 'UsermanagerController',
          'TMenus' => $TMenus
          ]); */
    }

    
    /**
     * @Route("/api/roles/list.json", name="api.roles.list.json")
     */
    public function getrolelist() {

        $repository = $this->getDoctrine()->getRepository(TRole::class);
        $Oo = $repository->findAll();
        $serializer = $this->get('serializer');
        $response = $serializer->serialize($Oo, 'json');
        return new Response(
                '{ "aaData": ' . $response . '}'
        );
    }
}
