<?php

namespace App\Controllers;

class myhome extends BaseController
{
   
    public function index()
    {
        $data = [
            'tittle' => 'Sweet DCups | Home'  
        ];     
        return view ('sweet/home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'Sweet DCups | About Us'  
        ]; 
        echo view('template/header', $data);
        echo view('sweet/about');
        echo view('template/footer');
    }
    
    public function location()
    {
        $data = [
            'tittle' => 'Sweet DCups | Location'  
        ];
        return view ('sweet/location', $data);
    }

    public function menu()
    {
        $data = [
            'tittle' => 'Sweet DCups | Menu'  
        ];
        return view ('sweet/menu', $data);
    }

    public function testimony()
    {
        $data = [
            'tittle' => 'Sweet DCups | Testimony'  
        ];
        echo view('template/header', $data);
        echo view('sweet/testimony');
        echo view('template/footer');
    }

}