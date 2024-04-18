<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reclamation;
use App\Form\AjoutReclamationType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Form\AjoutReponseRType;
use App\Entity\Reponser;
use App\Repository\ReponserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\VarDumper\VarDumper;
use App\Form\UDReponseType;







class ReclamationController extends AbstractController
{

    ########################## Reclamation User ##########################
    #[Route('/ajout/reclamation', name: 'app_ajout_reclamation')]
    public function index(ManagerRegistry $doctrine, Request $request)
    {
        $em = $doctrine->getManager();
        $Reclamation = new Reclamation();
        $Reclamation->setIdu(1);
        $Reclamation->setTemp(new \DateTime());
        $form = $this->createForm(AjoutReclamationType::class, $Reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($Reclamation);
            $em->flush();
            $this->addFlash('succès', 'Votre réclamation est enregistrée avec succès !');

            return $this->redirectToRoute('app_ajout_reclamation');
        } else {
            return $this->render('reclamation/index.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    #[Route('/User/reclamations', name: 'app_list_user_reclamations')]
    public function listUserReclamations(ReclamationRepository $RecRepo): Response
    {
        $idu = 1;
        $reclamations = $RecRepo->findByUserId($idu);
        $reclamations = array_reverse($reclamations);

        return $this->render('reclamation/test.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    #[Route('/reclamation/delete/{id}', name: 'app_delete_reclamation')]
    public function deleteReclamation(ManagerRegistry $doctrine, $id): RedirectResponse
    {
        $em = $doctrine->getManager();

        // Fetch the reclamation to delete from the database
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }

        $em->remove($reclamation);
        $em->flush();

        return $this->redirectToRoute('app_list_user_reclamations');
    }



    #[Route('/reclamation/edit/{id}', name: 'app_edit_reclamation')]
    public function editReclamation(Request $request, ManagerRegistry $doctrine, $id): Response
    {
        $em = $doctrine->getManager();

        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }

        $form = $this->createForm(AjoutReclamationType::class, $reclamation);

        $form->handleRequest($request);
        $reclamation->setIdu(1);
        $reclamation->setTemp(new \DateTime());
        $originalApropos = $reclamation->getApropo();
        $originalTyper = $reclamation->getTyper();

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('app_list_user_reclamations');
        } else {
            $reclamation->setApropo($originalApropos);
            $reclamation->setTyper($originalTyper);
        }

        return $this->render('reclamation/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    ####################################################### reclamation admin#####################################"
    #[Route('/Admin/reclamations', name: 'app_list_reclamations')]
    public function listReclamations(ReclamationRepository $RecRepo): Response
    {

        $reclamations = $RecRepo->findAll();

        return $this->render('reclamation/list_reclamations.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    #[Route('/reclamation/Adelete/{id}', name: 'app_delete_reclamation_admin')]
    public function deleteReclamationAdmin(ManagerRegistry $doctrine, $id): RedirectResponse
    {
        $em = $doctrine->getManager();

        // Fetch the reclamation to delete from the database
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }

        $em->remove($reclamation);
        $em->flush();

        return $this->redirectToRoute('app_list_reclamations');
    }









    ###############################################################################  Reponse User ###############""
    #[Route('/ajout/reponser', name: 'app_ajout_reponser')]
    public function indexRepnse(ManagerRegistry $doctrine, Request $request)
    {
        $em = $doctrine->getManager();
        $Reponser = new Reponser();
        $Reponser->setDateRepr(new \DateTime());
        $form = $this->createForm(AjoutReponserType::class, $Reponser);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($Reponser);
            $em->flush();

            return $this->redirectToRoute('app_ajout_reponser');
        } else {
            return $this->render('reclamation/testreponse.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }
    ###############################################################################  Reponse User ###############""


    #[Route('/reponse/Admin/{id}', name: 'app_mainAdmin_reponse')]
    public function data($id, EntityManagerInterface $entityManager, Request $request)
    {

        $em = $entityManager;
        // Begin a transaction
        $em->beginTransaction();
        // Your existing code
        $Reponser = new Reponser();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        $Listreclamations = $em->getRepository(Reclamation::class)->findAllDistinctWithResponses();

        $reclamationResponses = $em->getRepository(Reponser::class)->findBy(['idR' => $id]);
        $form = $this->createForm(AjoutReponserType::class, $Reponser);
        $form->handleRequest($request);
        
        // This is an AJAX request
        if ($form->isSubmitted() && $form->isValid()) {
            $Reponser = $form->getData();
            $Reponser->setDateRepr(new \DateTime());
            $Reponser->setIdu(1);
            $Reponser->setIdR($reclamation);
            $em->persist($Reponser);
            $em->flush();

            // Commit the transaction if everything is successful
            $em->commit();

            return $this->render('test.html.twig', [
                'reclamationResponses' => $reclamationResponses = $em->getRepository(Reponser::class)->findBy(['idR' => $id]),
                'ListReclamations' => $Listreclamations,
                'form' => $form->createView(),
                'Reclamation' => $reclamation,


            ]);
        } else {
            // This is a regular HTTP request
            return $this->render('test.html.twig', [
                'reclamationResponses' => $reclamationResponses,
                'form' => $form->createView(),
                'ListReclamations' => $Listreclamations,
                'Reclamation' => $reclamation,

            ]);
        }}

       /*
        #[Route('/reponse/edit/{id}', name: 'edit_rep')]
        public function editReclamationResponse(EntityManagerInterface $entityManager ,Request $request, $id): Response
    {
        $em = $entityManager;

        $reclamationResponse = $em->getRepository(Reponser::class)->findBy(['idrr' => $id]);
        $form = $this->createForm(AjoutReponseRType::class, $reclamationResponse);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

            return $this->redirectToRoute('desired_route_after_modification');
        }

        return $this->render('your_template.html.twig', [
            'form' => $form->createView(),
        ]);
    }*/

    #[Route('/reponseA/delete/{id}', name: 'app_delete_reponseA')]
    public function deleteReponsea(ManagerRegistry $doctrine, $id): RedirectResponse
    {
        $em = $doctrine->getManager();

        // Fetch the response to delete from the database
        $rep = $em->getRepository(Reponser::class)->find($id);

        if (!$rep) {
            throw $this->createNotFoundException('Response not found');
        }

        $idR = $rep->getIdR();
        $id=$idR->getIdR();
        
        $em->remove($rep);
        $em->flush();

        return $this->redirectToRoute('app_mainAdmin_reponse', ['id' => $id]);
    }


    #[Route('/response/edit/{id}', name: 'pp_update_response')]
    public function updateMessage($id, Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
    
        // Fetch the response to update from the database
        $rep = $em->getRepository(Reponser::class)->find($id);
        $idR = $rep->getIdR();
        $idRec = $idR->getIdR();
    
        if (!$rep) {
            throw $this->createNotFoundException('Response not found');
        }
    
        // Check if the request is a POST request
        if ($request->isMethod('POST')) {
            // Get the new value from the form data
            $newValue = $request->request->get('newValue');
    
            // Set the new value to the entity
            $rep->setTextr($newValue);
    
            // Persist changes to the database
            $em->flush();
    
            // Redirect to the appropriate route
            return $this->redirectToRoute('app_mainAdmin_reponse', ['id' => $idRec]);
        }
    }
}
