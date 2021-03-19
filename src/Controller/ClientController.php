<?php

namespace App\Controller;

use App\Metier\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use App\Form;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class ClientController extends AbstractController {

    

    /**
     * @Route("/client", name="client")
     */
    public function formCreerClient(Request $request) {

        $unclient = new Client();
        $form = $this->createForm(Form\ClientFormRegisterType::class,$unclient);
        return $this->render('client/creer_client.html.twig',
                       array('form'=>$form->createView())
        );
    }

}
