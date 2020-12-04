<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('category_model','category_model');
        $this->load->library('session');
    }

    function index(){
        $data['category'] = $this->category_model->get_category();
        $this->load->view('category_list_view',$data);
    }


    // add new category
    function add_new(){
        $data['category'] = $this->category_model->get_category()->result();
        $this->load->view('add_category_view', $data);
    }

    //save category to database
    function save_category(){
        $category_name 	= $this->input->post('category_name',TRUE);
        $category_image	= $this->input->post('category_image',TRUE);
        $this->category_model->save_category($category_name,$category_image);
        $this->session->set_flashdata('msg','<div class="alert alert-success">Category Saved</div>');
        redirect('category');
    }

    function get_edit(){
        $category_id = $this->uri->segment(3);
        $data['category_id'] = $category_id;
        $get_data = $this->category_model->get_category_by_id($category_id);
        if($get_data->num_rows() > 0){
            $row = $get_data->row_array();

        }
        $this->load->view('edit_category_view',$data);
    }

    function get_data_edit(){
        $category_id = $this->input->post('category_id',TRUE);
        $data = $this->category_model->get_category_by_id($category_id)->result();
        echo json_encode($data);
    }

    //update category to database
    function update_category(){
        $category_id 	= $this->input->post('category_id',TRUE);
        $category_name 	= $this->input->post('category_name',TRUE);
        $category_image 	= $this->input->post('category_image',TRUE);
        $this->category_model->update_category($category_id,$category_name,$category_image);
        $this->session->set_flashdata('msg','<div class="alert alert-success">Category Updated</div>');
        redirect('category');
    }

    //Delete category from Database
    function delete(){
        $category_id = $this->uri->segment(3);
        $this->category_model->delete_category($category_id);
        $this->session->set_flashdata('msg','<div class="alert alert-success">Category Deleted</div>');
        redirect('recipe');
    }

}