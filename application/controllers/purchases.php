<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchases extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('product');
        $this->load->model('purchase');
    }
    
    public function delete($id){  
        $this->purchase->delete($id);  
        var_dump($id);
        redirect('/purchases/cart');
    }
    
    public function cart(){
        $view['purchases'] = $this->purchase->get_purchase();
        $this->load->view('cart', $view);
    }  
}