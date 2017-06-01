<?php 
if (! defined('BASEPATH')) exit ('No direct script access allowed');
 
 class Mymodel extends CI_Model{
 	public function Getfoto($table){
 		$data=$this->db->get($table);
 		return $data->result_array();
 	}

 	public function read($table, $where, $id){
 		$data=$this->db->get($table,array($where=>$id) );
 		return $data;
 	}

 	public function InsertData($tableName,$data){
 		$res = $this->db->insert($tableName,$data);
 		return $res;
 	}

 	public function UpdateData($table, $data, $where, $id){
 			return $this->db->update($table, $data, array($where=>$id));
 	}
 	public function DeleteData($table, $where, $id){
 		return $this->db->delete($table,array($where=>$id));
 	}
 }