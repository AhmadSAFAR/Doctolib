<?php
namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;
use App\Repository\PatientRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Doctor;
use App\Repository\DoctorRepository;



    /**
     * @Route("/patient")
     */
class PatientController extends AbstractController
{
     
    /**
     * @Route("/{id}", name="patient_interface", methods={"GET","POST"})
     */
    public function interface(Patient $patient,Request $request, CommentRepository $commentRepository, Doctor $doctor):Response
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
        }

       return $this->render('patient/interface.html.twig', [
           'patient'=>$patient,
           'doctor'=>$doctor,
           'comments' => $commentRepository->findAll(),
           'form' => $form->createView(),
       ]);
    }

    
}   