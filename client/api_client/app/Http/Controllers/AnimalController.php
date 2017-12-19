<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 19-12-2017
 * Time: 13:26
 */

namespace App\Http\Controllers;


class AnimalController extends Controller
{
    //localhost (and port number) needs to be changed to the ip of the server.
    private $BASE_URI = "http://localhost:8000/api/";

    public function show()
    {
        $uri = $this->BASE_URI . "dieren";
        $response = \Httpful\Request::get($uri)->send();

        echo 'Er zijn ' . count($response->body) . " dieren in de database.";
    }
}