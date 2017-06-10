<?php

class Category_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function create_category()
    {

        $data = array(
            'name' => $this->input->post('name')
        );

        return $this->db->insert('categories', $data);
    }

    public function get_categories()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('categories');
        return $query->result_array();
    }

    public function get_category($id)
    {

        $query = $this->db->get_where('categories', array('id' => $id));
        return $query->row();
    }

    public function get_posts_by_category($category_id)
    {

        $this->db->order_by('posts.id', 'DESC');

        $this->db->join('categories', 'categories.id = posts.category_id');
        $query = $this->db->get_where('posts', array('category_id' => $category_id));
        return $query->result_array();
    }
}