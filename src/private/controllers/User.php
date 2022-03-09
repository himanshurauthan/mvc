<?php
namespace App\Controllers;

use App\Libraries\Controller;

class User extends Controller
{
    public function __construct()
    {
        //empty func
    }

    public function index()
    {
        die("method not defined");
    }

    public function getUser()
    {
        $this->view('pages/addUser');
    }

    public function setUser()
    {
        $this->view('pages/listUser');
    }
}
