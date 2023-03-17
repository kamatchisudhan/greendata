<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        
     return view('contact');
        
    }
    public function sendmail()
    {
        $validation_rules = [
            [
                'field' => 'name',
              
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'message',
                
                'rules' => 'required|max_length[500]'
            ]
        ];
    
        $this->validate($validation_rules);
    
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');
    
        $email_subject = 'New contact form submission from ' . $name;
        $email_body = "Name: $name\nEmail: $email\n\n$message";
    
        $email = \Config\Services::email();
        $email->setFrom('kamatchisudhan01@gmail.com', 'GreenData');
        $email->setTo('kamatchisudhan01@gmail.com');
        $email->setSubject($email_subject);
        $email->setMessage($email_body);
    
        $email->send();
    
        return redirect()->to('/contact');
    }}
