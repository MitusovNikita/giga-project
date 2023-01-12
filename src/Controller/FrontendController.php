<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FrontendController extends AbstractController
{
    public function index()
    {
        return $this->render('js.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'btn_name' => 'Кнопка',
//            'user_last_name' => 'Mitusov',
        ]);
    }
}