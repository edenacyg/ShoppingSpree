<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
    public function insert($data){
        $query = "INSERT INTO purchase (product_id, qty) VALUES (?,?)";
        $values = array($data['id'], $data['qty']);
        $this->db->query($query, $values);
        $data = "Added to cart!";
        return $data;
    }

    public function get_one($data){
        $query = "SELECT * FROM product
                INNER JOIN purchase
                ON product.id = purchase.product_id
                WHERE product_id = $data";
        return $this->db->query($query)->row_array();     
    }

    public function validate(){
        $this->form_validation->set_rules('qty', 'quantity', 'required');
    }

    public function quantity(){
        $data = "Please provide the quantity!";
        return $data;
    }
}
?>