<?php

class Pages extends Controller
{


    public function __construct()
    {
    }

    public function index()
    {
        if (isLoggedIn()) {
            redirect('posts');
        }

        $data = [
            'title' => 'Posts',
            'description' => 'Building a social network with PHP framework'

        ];

        $this->view('index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts with other users'

        ];
        $this->view('about', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'register',
            'description' => 'register form'

        ];
        $this->view('about', $data);
    }
}