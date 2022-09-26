<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TryController
{
    public function index()
    {
        dump('Does it work ?');
        die();
    }

    /**
     * @Route("/test/{age</d+>?0}", name="try", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"}) 
     */

    public function try(Request $request, $age)
    {
        dd($request);

        return new Response("You have " . $age. " years old :)");
    }
}
