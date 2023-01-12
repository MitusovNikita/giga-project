<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UnitController extends AbstractController
{
    public function index($a, $b)
    {
        $sum = $a + $b;

        return $sum;
    }
}