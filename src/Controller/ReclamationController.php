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




class ReclamationController extends AbstractController
{
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
        }}


#[Route('/Admin/reclamations', name: 'app_list_reclamations')]
public function listReclamations(ReclamationRepository $RecRepo): Response
{

    $reclamations = $RecRepo->findAll();

    return $this->render('reclamation/list_reclamations.html.twig', [
        'reclamations' => $reclamations,
    ]);
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
    }else {
        $reclamation->setApropo($originalApropos);
        $reclamation->setTyper($originalTyper);
    }

    return $this->render('reclamation/index.html.twig', [
        'form' => $form->createView(),
    ]);
}
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
    }}

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
/*
#[Route('/reponse/Admin', name: 'app_mainAdmin_reponse')]
public function indexReponseAdmin(ManagerRegistry $doctrine): Response
{
    $em = $doctrine->getManager();

    // Fetch the reclamation to delete from the database
    $reclamations = $em->getRepository(Reclamation::class)->findAll();
    return $this->render('reclamation\ajoutReponseA.html.twig', [
        'reclamations' => $reclamations,
    ]);
}*/


    #[Route('/reponse/Admin/{id}', name: 'app_mainAdmin_reponse')]
    public function data($id, ManagerRegistry $doctrine , Request $request)
    {

        
    $em = $doctrine->getManager();
    $Reponser = new Reponser();
            $Reponser->setDateRepr(new \DateTime());

            $Reponser->setIdu(1);
            $reclamation = $em->getRepository(Reclamation::class)->find($id);
            $Reponser->setIdR($reclamation);
    // Fetch the reclamation to delete from the database
    $reclamationResponses = $em->getRepository(Reponser::class)->findBy(['idR' => $id]);
    $reclamation = $em->getRepository(Reclamation::class)->find($id);
    $form = $this->createForm(AjoutReponserType::class, $Reponser);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($Reponser);
        $em->flush();
        
        return $this->redirectToRoute('app_mainAdmin_reponse', ['id' => $id]);
    }

        return $this->render('reclamation\ajoutReponseA.html.twig', [
            'reclamationResponses' => $reclamationResponses,
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

}

