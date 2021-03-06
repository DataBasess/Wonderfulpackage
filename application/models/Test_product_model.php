<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Test_product_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get test_product by product_id
     */
    function get_test_product($product_id)
    {
        return $this->db->get_where('test_product',array('product_id'=>$product_id))->row_array();
    }
    
    /*
     * Get all test_product
     */
    function get_all_test_product()
    {
        return $this->db->get('test_product')->result_array();
    }
    
    /*
     * function to add new test_product
     */
    function add_test_product($params)
    {
        $this->db->insert('test_product',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update test_product
     */
    function update_test_product($product_id,$params)
    {
        $this->db->where('product_id',$product_id);
        $response = $this->db->update('test_product',$params);
        if($response)
        {
            return "test_product updated successfully";
        }
        else
        {
            return "Error occuring while updating test_product";
        }
    }
    
    /*
     * function to delete test_product
     */
    function delete_test_product($product_id)
    {
        $response = $this->db->delete('test_product',array('product_id'=>$product_id));
        if($response)
        {
            return "test_product deleted successfully";
        }
        else
        {
            return "Error occuring while deleting test_product";
        }
    }
}
