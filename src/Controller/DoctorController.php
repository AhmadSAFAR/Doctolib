<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Doctor;
use App\Repository\DoctorRepository;

    /**
     * @Route("/doctor")
     */
class DoctorController extends AbstractController
{
    /**
     * @Route("/{id}", name="doctor_interface", methods={"GET","POST"})
     */
    public function interface(Doctor $doctor)
    {
       return $this->render('doctor/interface.html.twig', [
           'doctor'=>$doctor,
       ]);
    }
}   
