<?php

class Users_model extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
	}
    
    public function create_data_function($table, $data)
    {
        $this->db->insert($table, $data);
    }


    public function no_double_username($username)
    {
        $this->db->where('username', $username);
        $result = $this->db->get('table_user');

            if($result->num_rows() > 0)
            {
                return FALSE;
            }
            else
            {
                return TRUE;
            }

    }

    public function user_exists()
    {
        $this->db->where('user_account', $this->input->post('username'));
        $this->db->where('user_password', md5($this->input->post('password')));
        $result = $this->db->get('table_user');

        if($result->num_rows == 1)
        {
            return TRUE;
        }
    }
    
    
    public function fetch_data_function($table, $id)
    {
        $query = $this->db->select('*')
                          ->from($table)
                          ->order_by($id, 'asc')
                          ->get();
        
        return $query->result();
    }


    public function fetch_moviedata_genres($table, $id)
    {
        $query = $this->db->select('movie_category')
                          ->from($table)
                          ->order_by($id, 'asc')
                          ->get();
        
        return $query->result();
    }


    public function fetch_data_function_where($table, $id, $column)
    {
        $query = $this->db->select('*')
                          ->from($table)
                          ->where($column, $id)
                          ->order_by($column, 'asc')
                          ->get();
        
        return $query->result();
    }

    public function delete_data_function($table, $column, $id)
    {
        $this->db->where($column, $id);
        $this->db->delete($table); 
    }


    public function update_data_function($table, $data, $column, $movie_id)
    {
        $this->db->where($column, $movie_id);
        $this->db->update($table, $data);
    }

    public function borrow_dvd_function($table, $table2, $table3, $column, $movie_id, $for_table_borrowers, $for_table_payments, $no_copies)
    {

    $query = mysql_query("SELECT * FROM table_movies WHERE movie_id='$movie_id'");
    while($row=mysql_fetch_array($query)){
        $current_stock=$row['no_copies'];
    }
        

        $borrow_value = $this->input->post($no_copies);

        $current = $current_stock - $borrow_value;

        $this->db->query("UPDATE $table
                          SET $no_copies = '$current'
                          WHERE $column = '$movie_id'");

        $this->db->insert($table2, $for_table_borrowers);

        $this->db->insert($table3, $for_table_payments);

    }


    public function return_dvd_function($table, $dvd_status, $borrow_id)
    {

        $this->db->query("UPDATE $table
                          SET $dvd_status = 'PENDING'
                          WHERE borrow_id = '$borrow_id'");


    }


    public function return_dvd_function2($table, $table2, $column, $movie_id, $borrow_id, $user_id, $dvd_status, $payment_status)
    {

    $query = mysql_query("SELECT * FROM table_movies WHERE movie_id='$movie_id'");
    while($row=mysql_fetch_array($query)){
        $current_stock=$row['no_copies'];
    }

    $query2 = mysql_query("SELECT * FROM table_borrowers WHERE borrow_id='$borrow_id'");
    while($rows=mysql_fetch_array($query2)){
        $no_copies = $rows['no_copies'];
    }

        

        $current = $current_stock + $no_copies;

        $this->db->query("UPDATE table_movies
                          SET no_copies = '$current'
                          WHERE movie_id = '$movie_id'");

        $this->db->query("UPDATE $table2
                          SET $dvd_status = 'RETURNED'
                          WHERE borrow_id = '$borrow_id'");




    }


}