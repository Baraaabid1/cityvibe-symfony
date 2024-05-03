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
use ConsoleTVs\Profanity\Builder;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;






class ReclamationController extends AbstractController
{


    #[Route('/testexcel', name: 'test_excel')]
    public function createExcel(): Response
    {
        $customHeaders = ['Titre', 'Type', 'A propo', 'Contenu'];

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $columnIndex = 'A';
        foreach ($customHeaders as $header) {
            $sheet->setCellValue($columnIndex++ . '1', $header);
        }
        $location = 'C:/Users/baraa/OneDrive/Desktop/exel/reclamations.xlsx';
        $writer = new Xlsx($spreadsheet);
        $writer->save($location);
        return $this->redirectToRoute('app_list_reclamations');   
     }

    #[Route('/first-line-chart-data-endpoint', name: 'first_line_chart_data')]
    public function firstLineChartData(ReclamationRepository $reclamationRepository): JsonResponse
    {
        $reclamationsData = $reclamationRepository->findReclamationsByDayLast7Days();
        
        // Extract days and totals
        $days = $reclamationsData['days'];
        $totals = $reclamationsData['totals'];
        
        // Return the data and labels as JSON response
        return $this->json(['data' => $totals, 'labels' => $days]);
    }
    
    #[Route('/bar-chart-data-endpoint', name: 'bar_chart_data')]
    public function barChartData(ReclamationRepository $reclamationRepository): JsonResponse
    {
        $reclamationsByType = $reclamationRepository->getReclamationsCountByType();

        // Extract types and totals
        $types = array_keys($reclamationsByType);
        $totals = array_values($reclamationsByType);
        
        // Return the type and total as JSON response
        return $this->json(['labels' => $types, 'data' => $totals]);
    }
    
    #[Route('/second-line-chart-data-endpoint', name: 'second_line_chart_data')]
    public function secondLineChartData(ReclamationRepository $reclamationRepository): JsonResponse
    {
         // Get counts of reclamations by type
    $reclamationCounts = $reclamationRepository->countReclamationsByApropo();
    
    // Initialize data and labels arrays
    $data = [];
    $labels = [];
    
    // Iterate through reclamation counts
    foreach ($reclamationCounts as $reclamation) {
        $labels[] = $reclamation['apropo'];
        $data[] = $reclamation['count'];
    }
    
    // Return the data and labels as JSON response
    return $this->json(['data' => $data, 'labels' => $labels]);
}


    #[Route('/testemail', name: 'testemail')]
    public function testEmailSending(): Response
    {
        $recipientEmail = 'baraaabid33@gmail.com';

       
            // Create the email
            $email = (new Email())
                ->from('abidbaraa33@gmail.com')
                ->to($recipientEmail)
                ->subject('Test Email')
                ->text('This is a test email sent from Symfony Mailer.');
    
            $transport = Transport::fromDsn('smtp://abidbaraa33@gmail.com:bqrbahgxphjmlgpl@smtp.gmail.com:587');
            $mailer = new Mailer($transport);
            $mailer->send($email);
    
            return new Response('Test email sent successfully!');
      
    }


    ########################## Reclamation User ##########################
    #[Route('/ajout/reclamation', name: 'app_ajout_reclamation')]
    public function index(ManagerRegistry $doctrine, Request $request,  MailerInterface $mailer)
    {
        $em = $doctrine->getManager();
        $Reclamation = new Reclamation();
        $Reclamation->setIdu(2);
        $Reclamation->setTemp(new \DateTime());
        $form = $this->createForm(AjoutReclamationType::class, $Reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($Reclamation);
            $em->flush();
            $this->addFlash('succès', 'Votre réclamation est enregistrée avec succès !');
            

            if ($Reclamation->getTyper() === 'Réclamation Urgente') {
                $recipientEmail = 'baraaabid33@gmail.com';

                $email = (new Email())
                ->from('abidbaraa33@gmail.com')
                ->to($recipientEmail)
                ->subject('Reclamation Urgente deposee')
                ->text('Nous vous informons qu\'une réclamation urgente a été déposée. Votre attention immédiate est requise.
                Merci de prendre les mesures nécessaires pour résoudre ce problème dans les plus brefs délais.
                Cordialement
            ');
    
            $transport = Transport::fromDsn('smtp://abidbaraa33@gmail.com:bqrbahgxphjmlgpl@smtp.gmail.com:587');
            $mailer = new Mailer($transport);
            $mailer->send($email);
            }
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
        $idu = 2;
        $reclamations = $RecRepo->findByUserId($idu);
        $reclamations = array_reverse($reclamations);
        
        foreach ($reclamations as $reclamation) {
            $reclamation->setTitrer(Builder::blocker($reclamation->getTitrer())->filter());
            $reclamation->setContenu(Builder::blocker($reclamation->getContenu())->filter());
        }

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
        $reclamation->setIdu(2);
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
        foreach ($reclamations as $reclamation) {
            $reclamation->setTitrer(Builder::blocker($reclamation->getTitrer())->filter());
            $reclamation->setContenu(Builder::blocker($reclamation->getContenu())->filter());
        }

        return $this->render('reclamation/list_reclamations.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }



    #[Route('/Admin/reclamationsDESC', name: 'app_list_reclamationsDESC')]
    public function listReclamationsDESC(ReclamationRepository $RecRepo): Response
    {

        $reclamations = $RecRepo->findAllDesc();
        foreach ($reclamations as $reclamation) {
            $reclamation->setTitrer(Builder::blocker($reclamation->getTitrer())->filter());
            $reclamation->setContenu(Builder::blocker($reclamation->getContenu())->filter());
        }

        return $this->render('reclamation/list_reclamations.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    #[Route('/filter-reclamations', name: 'filter_reclamations')]
    public function filterReclamations(Request $request, ReclamationRepository $RecRepo): Response
    { 
        $filterType = $request->request->get('filter_type');
    
        $reclamations = $this->getDoctrine()
            ->getRepository(Reclamation::class)
            ->findBy(['typer' => $filterType]);

        // Serialize reclamations to JSON
        $reclamationsArray = [];
        foreach ($reclamations as $reclamation) {
            
            $reclamationsArray[] = [
                'titrer' => $reclamation->getTitrer(),
                'temp' => $reclamation->getTemp()->format('Y-m-d H:i:s'),
                'typer' => $reclamation->getTyper(),
                'Apropo' => $reclamation->getApropo(),
                'contenu' => $reclamation->getContenu(),
                $reclamation->setTitrer(Builder::blocker($reclamation->getTitrer())->filter()),
            $reclamation->setContenu(Builder::blocker($reclamation->getContenu())->filter())
                // Add other properties as needed
            ];
        }

        return new JsonResponse( $reclamationsArray);
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

    #[Route('/adminstat/reclamations', name: 'recstat')]
    public function statreclamations(): Response
    {
    
        return $this->render('reclamation/recstat.html.twig');     
    }

    #[Route('/admin/savereclamation/{id}', name: 'saveReclamation')]
    public function saveRec(ManagerRegistry $doctrine, $id): Response
    {
        $em = $doctrine->getManager();

        $reclamation = $em->getRepository(Reclamation::class)->find($id);

        $location = 'C:/Users/baraa/OneDrive/Desktop/exel/reclamations.xlsx';
        $spreadsheet = IOFactory::load($location);

        $sheet = $spreadsheet->getActiveSheet();

        $row = $sheet->getHighestRow() + 1;
        $sheet->setCellValue('A' . $row, $reclamation->getTitrer());
        $sheet->setCellValue('B' . $row, $reclamation->getTyper());
        $sheet->setCellValue('C' . $row, $reclamation->getApropo());
        $sheet->setCellValue('D' . $row, $reclamation->getContenu());
      
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save($location);

    
        return $this->redirectToRoute('app_list_reclamations');    }










    ###############################################################################  Reponse User ###############""
    #[Route('/ajout/reponser/{id}', name: 'app_ajout_reponser')]
    public function indexRepnse(ReclamationRepository $RecRepo ,ManagerRegistry $doctrine, Request $request , $id, EntityManagerInterface $entityManager)
    {
        
        $em = $entityManager;
        // Begin a transaction
        $em->beginTransaction();
        // Your existing code
        $Reponser = new Reponser();
        $rec = $em->getRepository(Reclamation::class)->find($id);

        $Listreclamations =  $RecRepo->findByUserId($rec->getIdu(2));
        $rec->setTitrer(Builder::blocker($rec->getTitrer())->filter());

        $reclamationResponses = $em->getRepository(Reponser::class)->findBy(['idR' => $id]);
        foreach ($Listreclamations as $reclamation) {
            $reclamation->setTitrer(Builder::blocker($reclamation->getTitrer())->filter());
            $reclamation->setContenu(Builder::blocker($reclamation->getContenu())->filter());
        }
        foreach ($reclamationResponses as $reponse) {
            $reponse->setTextr(Builder::blocker($reponse->getTextr())->filter());
        }

        $form = $this->createForm(AjoutReponserType::class, $Reponser);
        $form->handleRequest($request);
        
        // This is an AJAX request
        if ($form->isSubmitted() && $form->isValid()) {
            $Reponser = $form->getData();
            $Reponser->setDateRepr(new \DateTime());
            $Reponser->setIdu($rec->getIdu());
            $Reponser->setIdR($rec);
            $em->persist($Reponser);
            $em->flush();

            // Commit the transaction if everything is successful
            $em->commit();
            $form = $this->createForm(AjoutReponserType::class);


            return $this->render('reclamation/testreponse.html.twig', [
                'reclamationResponses' => $reclamationResponses = $em->getRepository(Reponser::class)->findBy(['idR' => $id]),
                'ListReclamations' => $Listreclamations,
                'form' => $form->createView(),
                'Rec' => $rec,


            ]);
        } else {
            // This is a regular HTTP request
            return $this->render('reclamation/testreponse.html.twig', [
                'reclamationResponses' => $reclamationResponses,
                'form' => $form->createView(),
                'ListReclamations' => $Listreclamations,
                'Rec' => $rec,

            ]);
        }}


        #[Route('/user/search/reclamations', name: 'searchconvuser')]
        public function searchconvuser(Request $request , ReclamationRepository $RecRepo): JsonResponse
    {
        $searchTerm = $request->query->get('title');
        $idu = 2;

        // Search for reclamations by title
        $reclamations = $RecRepo->findByTitleAndIdu($searchTerm, $idu);
    
        // Return the search results as JSON response
        return $this->json($reclamations);
    }


        
        #[Route('/reponse/delete/{id}', name: 'app_delete_reponse')]
        public function deleteReponse(ManagerRegistry $doctrine, $id): RedirectResponse
        {
            $em = $doctrine->getManager();
        
            // Fetch the response to delete from the database
            $rep = $em->getRepository(Reponser::class)->find($id);
        
            if (!$rep) {
                throw $this->createNotFoundException('Response not found');
            }
        
            // Store the parent ID before deletion
            $idR = $rep->getIdR();
            $idrec = $idR->getIdR();
            
            $em->remove($rep);
            $em->flush();
        
            // Redirect to the correct route with the correct parameter
            return $this->redirectToRoute('app_ajout_reponser', ['id' => $idrec]);
        }
        
    #[Route('/responseuser/edit/{id}', name: 'app_update_response_user')]
    public function updateMessageuser($id, Request $request, ManagerRegistry $doctrine): Response
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
            return $this->redirectToRoute('app_ajout_reponser', ['id' => $idRec]);
        }
    }


    ###############################################################################  Reponse admminn ###############""


    #[Route('/reponse/Admin/{id}', name: 'app_mainAdmin_reponse')]
    public function data($id, EntityManagerInterface $entityManager, Request $request)
    {

        $em = $entityManager;
        // Begin a transaction
        $em->beginTransaction();
        // Your existing code
        $Reponser = new Reponser();
        $rec = $em->getRepository(Reclamation::class)->find($id);
        $rec->setTitrer(Builder::blocker($rec->getTitrer())->filter());



        $Listreclamations = $em->getRepository(Reclamation::class)->findAllDistinctWithResponses();

        $reclamationResponses = $em->getRepository(Reponser::class)->findBy(['idR' => $id]);

        foreach ($Listreclamations as $reclamation) {
            $reclamation->setTitrer(Builder::blocker($reclamation->getTitrer())->filter());
            $reclamation->setContenu(Builder::blocker($reclamation->getContenu())->filter());
        }

        foreach ($reclamationResponses as $reponse) {
            $reponse->setTextr(Builder::blocker($reponse->getTextr())->filter());
        }
        $form = $this->createForm(AjoutReponserType::class, $Reponser);
        $form->handleRequest($request);
        
        // This is an AJAX request
        if ($form->isSubmitted() && $form->isValid()) {
            $Reponser = $form->getData();
            $Reponser->setDateRepr(new \DateTime());
            $Reponser->setIdu(1);
            $Reponser->setIdR($rec);
            $em->persist($Reponser);

            // Commit the transaction if everything is successful
            $em->commit();
            $form = $this->createForm(AjoutReponserType::class);
            $em->flush();

            $reclamationResponses = $em->getRepository(Reponser::class)->findBy(['idR' => $id]);

            // Optionally, you can loop through the responses to apply any necessary modifications
            foreach ($reclamationResponses as $reponse) {
                $reponse->setTextr(Builder::blocker($reponse->getTextr())->filter());
            }
            
            // Render the template with the updated response list
            return $this->render('test.html.twig', [
                'reclamationResponses' => $reclamationResponses,
                'ListReclamations' => $Listreclamations,
                'form' => $form->createView(),
                'Rec' => $rec,
            ]);
        } else {
            // This is a regular HTTP request
            return $this->render('test.html.twig', [
                'reclamationResponses' => $reclamationResponses,
                'form' => $form->createView(),
                'ListReclamations' => $Listreclamations,
                'Rec' => $rec,

            ]);
        }}


        
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


    
    #[Route('/search/reclamations', name: 'searchconv')]
    public function searchconv(Request $request , ReclamationRepository $RecRepo): JsonResponse
{
    $searchTerm = $request->query->get('title');

    // Search for reclamations by title
    $reclamations = $RecRepo->findByTitle($searchTerm);

    // Return the search results as JSON response
    return $this->json($reclamations);
}
}
