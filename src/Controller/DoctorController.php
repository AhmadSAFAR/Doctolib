<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Doctor;
use App\Repository\DoctorRepository;
use App\Entity\Patient;
use App\Repository\PatientRepository;

    /**
     * @Route("/doctor")
     */
class DoctorController extends AbstractController
{
    /**
     * @Route("/{id}", name="doctor_interface", methods={"GET","POST"})
     */
    public function interface(Doctor $doctor, Patient $patient)
    {
       return $this->render('doctor/interface.html.twig', [
           'doctor'=>$doctor,
           'patient'=>$patient,
       ]);
    }
}   
