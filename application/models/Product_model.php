<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    function get_category(){
        $query = $this->db->get('category');
        return $query;
    }
//
//    function get_product($category_id){
//        $query = $this->db->get_where('product', array('product_category_id' => $category_id));
//        return $query;
//    }

    function save_product($product_name,$category_id,$product_image,$url_slug){
        $data = array(
            'product_name' => $product_name,
            'product_image' => $product_image,
            'product_category_id' => $category_id,
            'url_slug'=>$url_slug

        );
        $this->db->insert('product',$data);
    }

    function get_product(){
        $this->db->select('product_id,product_name,product_image,category_name');
        $this->db->from('product');
        $this->db->join('category','product_category_id = category_id','left');
        $query = $this->db->get();
        return $query;
    }

    function get_product_by_id($product_id){
        $query = $this->db->get_where('product', array('product_id' =>  $product_id));
        return $query;
    }

    function update_product($product_id,$product_name,$category_id,$product_image){
        $this->db->set('product_name', $product_name);
        $this->db->set('product_image', $product_image);
        $this->db->set('product_category_id', $category_id);
        $this->db->where('product_id', $product_id);
        $this->db->update('product');
    }

    //Delete Product
    function delete_product($product_id){
        $this->db->delete('product', array('product_id' => $product_id));
    }

    function get_product_by_url($url_slug ){

        $this->db->select('product_name,product_image');
        $query = $this->db->get_where('product', array('url_slug' => $url_slug), 1);
        return $query->row_array();
    }

}