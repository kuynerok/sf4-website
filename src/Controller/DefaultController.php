<?php
/**
 * Created by PhpStorm.
 * User: Kuynerok
 * Date: 24.02.2018
 * Time: 02:09
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function index()
    {

        return new Response(
            '<html><body></body></html>'
        );
    }
}