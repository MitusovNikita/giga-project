<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Repository\UserRepository;

class TestController extends AbstractController
{
    public function index(UserRepository $userRepository)
    {
        $user = $userRepository
            ->find(1);

        print_r($user);
        die;


        return $this->render('test.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => null,
            'user_last_name' => 'Mitusov',
        ]);
    }
}