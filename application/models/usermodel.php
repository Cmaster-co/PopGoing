<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6 0006
 * Time: 22:13
 */
    class usermodel extends CI_Model{
        function __construct(){
            parent::__construct();
            $this -> load -> database();
        }
        function u_select_level($level){
            $this -> db -> where('level', $level);
            $query = $this -> db -> get('user');
            return $query -> result_array();
        }
        function u_insert($arr){
            $this -> db -> insert('user',$arr);
        }
        function u_update($id, $arr){
            $this -> db -> where('id', $id);
            $this -> db -> update('user', $arr);
        }
        function u_del($id, $arr){
            $this -> db -> where('id', $id);
            $this -> db -> delete('user');
        }
        function u_select($email){
            $this -> db -> where ('email', $email);
            $this -> db -> select('*');
            $query = $this -> db -> get('user');
            return $query -> row_array();
        }
        function u_select_id($id){
            $this -> db -> where('Id', $id);
            $query = $this -> db -> get('user');
            return $query -> row_array();
        }
        function u_select_all_wh(){
            $this -> db -> where ('level', 2);
            $this -> db -> select('*');
            $query = $this -> db -> get('user');
            return $query -> result_array();
        }
        function u_select_like($str){
            $this -> db -> where('level', 2);
            $this -> db -> like('name', $str);
            $query = $this -> db -> get('user');
            return $query -> result_array();
        }
    }
?>