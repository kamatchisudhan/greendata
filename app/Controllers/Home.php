<?php

namespace App\Controllers;

use Faker\Extension\Helper;

class Home extends BaseController
{ 
    
    public function index()
    {  
        echo view('home');
    }
    public function about()
    {  
        return view('about');
    }
    public function service()
    {
        return view('mobileapp');
    }
    public function web()
    {
        return view('webapp');
    }
    public function softdev()
    {
        return view('softdev');
    }
    public function softrain()
    {
        return view('softrain');
    }
    public function softest()
    {
        return view('softest');
    }
    public function contract()
    {
        return view('contract');
    }
    public function product()
    {
        return view('products');
    }
    // public function contact()
    // {
    //     return view('contact');
    // }
    public function welcome_messege()
    {
        return view('welcome_messege');
    }
        
}
 