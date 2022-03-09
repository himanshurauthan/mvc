<?php
namespace App\Libraries;

class Controller
{

    public function model($model)
    {
        require(APPPATH . '/../private/models/' . $model . '.php');

        return new $model;
    }

    public function view($view, $data = [])
    {
        if (file_exists(APPPATH . '/../private/views/' . $view . '.php')) {
            require(APPPATH . '/../private/views/' . $view . '.php');
        } else {
            die("view does not exists");
        }
    }
}
