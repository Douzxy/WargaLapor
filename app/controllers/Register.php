<?php

class Register extends Controller
{
    function index()
    {
        $this->view("frontend/layouts/header");
        $this->view("frontend/auth/register");
        $this->view("frontend/layouts/script");
    }
}
