<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function get_staff()
	{
		$query = $this->db->select()->from('staff')->get();
		if ($query)
		{
			if ($query->num_rows() > 0)
			{
				return $query->result_array();
			}
			else
			{
				log_message('error', $query->num_rows().' rows returned while fetching staff records.');
				return FALSE;				
			}
		}
		else
		{
			log_message('error', 'Could not get staff records.');
			return FALSE;
		}
	}

	public function get_projects()
	{
		$query = $this->db->select()->from('projects')->get();
		if ($query)
		{
			if ($query->num_rows() > 0)
			{
				return $query->result_array();
			}
			else
			{
				log_message('error', $query->num_rows().' rows returned while fetching project records.');
				return FALSE;				
			}
		}
		else
		{
			log_message('error', 'Could not get project records.');
			return FALSE;
		}
	}

}