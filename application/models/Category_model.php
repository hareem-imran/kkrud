<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{



    function save_category($category_name,$category_image){
        $data = array(
            'category_name' => $category_name,
            'category_image' => $category_image,

        );
        $this->db->insert('category',$data);
    }

    function get_category(){
        $this->db->select('category_id,category_name,category_image');
        $this->db->from('category');
        $query = $this->db->get();
        return $query;
    }

    function get_category_by_id($category_id){
        $query = $this->db->get_where('category', array('category_id' =>  $category_id));
        return $query;
    }

    function update_category($category_id,$category_name,$category_image){
        $this->db->set('category_name', $category_name);
        $this->db->set('category_image', $category_image);
        $this->db->where('category_id', $category_id);
        $this->db->update('category');
    }

    //Delete Category
    function delete_category($category_id){
        $this->db->delete('category', array('category_id' => $category_id));
    }

}