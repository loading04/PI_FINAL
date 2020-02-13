<?php

namespace BackofficeBundle\Controller;

use BackofficeBundle\Entity\Fournisseur;
use BackofficeBundle\Form\EmployeeType;
use BackofficeBundle\Form\FournisseurType;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class Login extends Controller
{
    public function login()
    {
        return $this->render('login.html.twig');


}