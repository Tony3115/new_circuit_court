<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Controller de page Accueil',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'Controller de page Contact',
        ]);
    }

    #[Route('/phpmail', name: 'app_phpmail')]
    public function phpmail(): Response
    {
        //configuration
        $mail = new PHPMailer(true);
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'whisker.o2switch.net';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sato4773';                     //SMTP username
        $mail->Password   = "ny5F-wwhJ-vGL!";                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;

        //envoi du mail
        $mail->setFrom('circuit_court@gmail.com', 'Mailer');
        $mail->addAddress('pelicarpa@hotmail.fr', 'Joe User');

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Test avec PHPMails';
        $mail->Body    = 'Message recu';

        $mail->send();

        return $this->render(
            'home/email.html.twig',
            [
                'controller_name' => 'envoi réussi',
            ],
        );
    }

    #[Route('/service', name: 'app_service')]
    public function service(MessageGenerator $msg): Response
    {
        // Simulation 
        $success = (bool) random_int(0, 1);

        return $this->render(
            'home/email.html.twig',
            [
                'controller_name' => $msg->getMessage($success),
            ],
        );
    }
}
