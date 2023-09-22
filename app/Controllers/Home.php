<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Corrientes soñadora';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/home_view');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function quienes_somos()
    {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function acerca_de()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    public function principal()
    {
        $data['titulo'] = 'Principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/home_view');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    /*
    public function login()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/login');
        echo view('front/footer_view');
        //return view('front/principal_ultimo');
    }
    */
    
}
