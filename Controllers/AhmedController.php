<?php

class AhmedController
{
    public function index($response)
    {
        $posts = [
            [
                "title" => "Ahmed",
                "desc" => "Hashem"
            ]
        ];
        return $response->view('index', ["posts" => $posts]);
    }
}
