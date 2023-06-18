<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('product');
        $this->load->model('purchase');
    }

    public function index(){  
        $info['count'] = count($this->purchase->get_purchase()); 
        $this->load->view('main', $info); 
	}

    public function buy($data){
        $result = $this->product->validate($this->input->post());
        
        if ($this->form_validation->run() == TRUE){
            $info['qty'] = $this->input->post('qty');
            $result = $this->product->get_one($data);
            
                if ($result == NULL){
                    $info['id'] = $data;
                    $msgs = $this->product->insert($info);
                    $this->session->set_flashdata('msgs', $msgs);
                    redirect('/');
                }
                else {
                    $info['id'] = $data;
                    $info['qty'] = $result['qty'] + $info['qty'];
                    $msgs = $this->purchase->update($info);
                    $this->session->set_flashdata('msgs', $msgs);
                    redirect('/');
                } 

            $view['purchases'] = $this->purchase->get();
            $this->load->view('cart', $view);
        }
        else {
            $msgs = $this->product->quantity();
            $this->session->set_flashdata('msgs', $msgs);
            redirect('/');
        }  
    } 
}
?>