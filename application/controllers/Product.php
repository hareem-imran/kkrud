<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('product_model','product_model');
        $this->load->library('session');
    }

    function index(){
        $data['product'] = $this->product_model->get_product();
        $this->load->view('product_list_view',$data);
    }

    // add new product
    function add_new(){
        $data['category'] = $this->product_model->get_category()->result();
        $this->load->view('add_product_view', $data);
    }

    // get product by category_id
    function get_category(){
        $category_id = $this->input->post('id',TRUE);
        $data = $this->product_model->get_category($category_id)->result();
        echo json_encode($data);
    }
    //save product to database
    function save_product(){
        $product_name 	= $this->input->post('product_name',TRUE);
        $category_id 	= $this->input->post('category',TRUE);
        $product_image	= $this->input->post('product_image',TRUE);
        $url_slug   =     $this->generate_url_slug($this->input->post('product_name'),'product');
        $this->product_model->save_product($product_name,$category_id,$product_image,$url_slug);
        $this->session->set_flashdata('msg','<div class="alert alert-success">Product Saved</div>');
        redirect('product');
    }

    function get_edit(){
        $product_id = $this->uri->segment(3);
        $data['product_id'] = $product_id;
        $data['category'] = $this->product_model->get_category()->result();
        $get_data = $this->product_model->get_product_by_id($product_id);
        if($get_data->num_rows() > 0){
            $row = $get_data->row_array();
            $data['category_id'] = $row['product_category_id'];
        }
        $this->load->view('edit_product_view',$data);
    }

    function get_data_edit(){
        $product_id = $this->input->post('product_id',TRUE);
        $data = $this->product_model->get_product_by_id($product_id)->result();
        echo json_encode($data);
    }

    //update product to database
    function update_product(){
        $product_id 	= $this->input->post('product_id',TRUE);
        $product_name 	= $this->input->post('product_name',TRUE);
        $category_id 	= $this->input->post('category',TRUE);
        $product_image 	= $this->input->post('product_image',TRUE);
        $this->product_model->update_product($product_id,$product_name,$category_id,$product_image);
        $this->session->set_flashdata('msg','<div class="alert alert-success">Product Updated</div>');
        redirect('recipe');
    }

    //Delete product from Database
    function delete(){
        $product_id = $this->uri->segment(3);
        $this->product_model->delete_product($product_id);
        $this->session->set_flashdata('msg','<div class="alert alert-success">Product Deleted</div>');
        redirect('recipe');
    }
    function generate_url_slug($string,$table,$field='url_slug',$key=NULL,$value=NULL){
        $t =& get_instance();
        $slug = url_title($string);
        $slug = strtolower($slug);
        $i = 0;
        $params = array ();
        $params[$field] = $slug;

        if($key)$params["$key !="] = $value;

        while ($t->db->where($params)->get($table)->num_rows())
        {
            if (!preg_match ('/-{1}[0-9]+$/', $slug ))
                $slug .= '-' . ++$i;
            else
                $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );

            $params [$field] = $slug;
        }
        return $slug;
    }

    function get_product_by_url($url_slug){

        $data = $this->product_model->get_product_by_url($url_slug)->result();
        echo json_encode($data);
        $this->load->view('recipe_template/template',$data, TRUE);


    }
//

}