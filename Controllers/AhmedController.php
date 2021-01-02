<?php

class AhmedController
{
    public function index($response)
    {
        $posts = [
            [
                "title" => "Bota",
                "desc" => "Gomaa"
            ]
        ];
        return $response->view('index', ["posts" => $posts]);
    }
}
