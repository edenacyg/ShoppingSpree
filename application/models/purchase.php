<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Model {

    public function get(){
        $query = "SELECT * FROM purchase
                INNER JOIN product
                ON product.id = purchase.product_id";
        return $this->db->query($query)->result_array();
    }

    public function update($data){
        $id = $data['id'];
        $qty = $data['qty'];
        $query = "UPDATE purchase
                SET qty = $qty
                WHERE product_id = $id";
        $this->db->query($query);
        $data = "Updated!";
        return $data;
    }

    public function get_purchase(){
        $query = "SELECT * FROM product
                INNER JOIN purchase
                ON product.id = purchase.product_id";
        return $this->db->query($query)->result_array();
    }

    public function delete($data){
        $query = "DELETE FROM purchase
                WHERE id = $data";
        return $this->db->query($query);
    }
}
?>