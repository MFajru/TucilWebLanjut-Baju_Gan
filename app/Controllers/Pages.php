<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Baju Gan'
        ];
        return view('pages/home', $data);
    }

    public function login()
    {
        return view('pages/login');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function admin()
    {
        return view('pages/admin');
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function gucci()
    {
        $data = [
            'title' => 'Gucci Shirt'
        ];
        return view('pages/gucci', $data);
    }

    public function supreme()
    {
        $data = [
            'title' => 'Supreme Shirt'
        ];
        return view('pages/supreme', $data);
    }

    public function louisvuitton()
    {
        $data = [
            'title' => 'Louis Vuitton Shirt'
        ];
        return view('pages/louisvuitton', $data);
    }

    public function deus()
    {
        $data = [
            'title' => 'Deus Shirt'
        ];
        return view('pages/deus', $data);
    }


    //--------------------------------------------------------------------

}
