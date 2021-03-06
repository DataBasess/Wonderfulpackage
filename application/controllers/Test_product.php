<?php
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
        /*
        $sql_pd = "SELECT p.*, c.name as cname, c.id as cid FROM products p ";
        $sql_pd .= "INNER JOIN product_categories c ";
        $sql_pd .= "ON p.product_categorie_id=c.id ";
        $sql_pd .= "WHERE p.id=$id ";
        */
        //$Query = $this->db->query("SELECT * FROM test_product WHERE product_id= '$product_id'  ");


        $Query = $this->db->query("SELECT p.*, d.* FROM test_product p INNER JOIN day_package d ON p.product_id = d.product_id WHERE p.product_id= '$product_id'  ");
        $row = $Query->row();

        if (isset($row)){
        
        
        $ar=array(            
            "price_kid"    =>$row->price_kid,
            "price_adult"  =>$row->price_adult,
            "price_older"  =>$row->price_older,
            "sunday"       =>$row->sunday,
            "munday"       =>$row->munday,
            "tuesday"      =>$row->tuesday,
            "wednesday"    =>$row->wednesday,
            "thursday"     =>$row->thursday,
            "friday"       =>$row->friday,
            "saturday"     =>$row->saturday,            
            "date_stop"    =>$row->date_stop                    

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
		$this->form_validation->set_rules('category','Category','required');
		$this->form_validation->set_rules('date_start','Date Start','required');
		$this->form_validation->set_rules('date_stop','Date Stop','required');
		$this->form_validation->set_rules('date_refrain','Date Refrain','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'category' => $this->input->post('category'),
				'date_start' => $this->input->post('date_start'),
				'date_stop' => $this->input->post('date_stop'),
				'date_refrain' => $this->input->post('date_refrain'),
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
			$this->form_validation->set_rules('category','Category','required');
			$this->form_validation->set_rules('date_start','Date Start','required');
			$this->form_validation->set_rules('date_stop','Date Stop','required');
			$this->form_validation->set_rules('date_refrain','Date Refrain','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'category' => $this->input->post('category'),
					'date_start' => $this->input->post('date_start'),
					'date_stop' => $this->input->post('date_stop'),
					'date_refrain' => $this->input->post('date_refrain'),
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
