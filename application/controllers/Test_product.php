﻿<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Test_product extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Test_product_model');
    } 

    /*
     * Listing of test_product
     */
    function index()
    {
        $data['test_product'] = $this->Test_product_model->get_all_test_product();

        $data['_view'] = 'test_product/index';
        $this->load->view('layouts/main',$data);
    }

    function get($product_id)
    {   
        // check if the test_product exists before trying to edit it
        //$data['test_product'] = $this->Test_product_model->get_test_product($product_id);
        $Query = $this->db->query("SELECT * FROM test_product WHERE product_id= '$product_id'  ");
        $row = $Query->row();
        if (isset($row)){
        
        $ar=array(

            "price_kid"    =>$row->price_kid,
            "price_adult"  =>$row->price_adult,
            "price_older"  =>$row->price_older

            );
            echo json_encode($ar);
        }
        
        
    }

    

    /*
     * Adding a new test_product
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('product_name','Product Name','required|max_length[250]');
		$this->form_validation->set_rules('price_kid','Price Kid','required|numeric');
		$this->form_validation->set_rules('price_adult','Price Adult','required|numeric');
		$this->form_validation->set_rules('price_older','Price Older','required|numeric');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'product_name' => $this->input->post('product_name'),
				'price_kid' => $this->input->post('price_kid'),
				'price_adult' => $this->input->post('price_adult'),
				'price_older' => $this->input->post('price_older'),
            );
            
            $test_product_id = $this->Test_product_model->add_test_product($params);
            redirect('test_product/index');
        }
        else
        {            
            $data['_view'] = 'test_product/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a test_product
     */
    function edit($product_id)
    {   
        // check if the test_product exists before trying to edit it
        $data['test_product'] = $this->Test_product_model->get_test_product($product_id);
        
        if(isset($data['test_product']['product_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('product_name','Product Name','required|max_length[250]');
			$this->form_validation->set_rules('price_kid','Price Kid','required|numeric');
			$this->form_validation->set_rules('price_adult','Price Adult','required|numeric');
			$this->form_validation->set_rules('price_older','Price Older','required|numeric');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'product_name' => $this->input->post('product_name'),
					'price_kid' => $this->input->post('price_kid'),
					'price_adult' => $this->input->post('price_adult'),
					'price_older' => $this->input->post('price_older'),
                );

                $this->Test_product_model->update_test_product($product_id,$params);            
                redirect('test_product/index');
            }
            else
            {
                $data['_view'] = 'test_product/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The test_product you are trying to edit does not exist.');
    } 

    /*
     * Deleting test_product
     */
    function remove($product_id)
    {
        $test_product = $this->Test_product_model->get_test_product($product_id);

        // check if the test_product exists before trying to delete it
        if(isset($test_product['product_id']))
        {
            $this->Test_product_model->delete_test_product($product_id);
            redirect('test_product/index');
        }
        else
            show_error('The test_product you are trying to delete does not exist.');
    }
    
}