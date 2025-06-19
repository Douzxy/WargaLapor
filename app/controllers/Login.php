<?php

class Login extends Controller
{
    function index()
    {
        $this->view("frontend/layouts/header");
        $this->view("frontend/auth/login");
        $this->view("frontend/layouts/script");
    }
}
