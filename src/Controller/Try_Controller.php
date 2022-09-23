<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TryController
{
    public function index()
    {
        var_dump('Does it work ?');
        die();
    }

    public function try(Request $request)
    {
        $yo = $request->attributes->get('age');
        var_dump($request);

        return new Response("You have " . $yo . " years old :)");
    }
}
