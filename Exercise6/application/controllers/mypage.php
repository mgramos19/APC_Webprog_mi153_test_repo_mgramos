<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mypage extends CI_Controller {
    public function index()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('mypage_view');
    }
public function about()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('about_view');
    }
     public function sites()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('sites_view');
    }
     public function works()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('works_view');
    }
     public function trivia()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('trivia_view');
    }
    
}