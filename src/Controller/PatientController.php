<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;
use App\Repository\PatientRepository;


    /**
     * @Route("/patient")
     */
class PatientController extends AbstractController
{
    /**
     * @Route("/{id}", name="patient_interface", methods={"GET","POST"})
     */
    public function interface(Patient $patient)
    {
       return $this->render('patient/interface.html.twig', [
           'patient'=>$patient,
       ]);
    }
}   