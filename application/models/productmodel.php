<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6 0006
 * Time: 22:41
 */
    class productmodel extends CI_Model{
        function __construct(){
            parent::__construct();
            $this -> load -> database();
        }
        function p_insert($arr){
            $this -> db -> insert('product',$arr);
        }
        function p_update($id, $arr){
            $this -> db -> where('id', $id);
            $this -> db -> update('product', $arr);
        }
        function p_del($id, $arr){
            $this -> db -> where('id', $id);
            $this -> db -> delete('product');
        }
        function p_select($name){
            $this -> db -> where ('name', $name);
            $this -> db -> select('*');
            $query = $this -> db -> get('product');
            return $query -> result();
        }
        function p_select_id($id){
            $query = $this -> db -> get_where('product', array('Id' => $id));
            return $query -> row_array();
        }
        function p_all(){
            $query = $this -> db -> get('product');
            return $query -> result_array();
        }
        function p_select_wh($wh){
            $this -> db -> where_in('user', $wh);
            $query = $this -> db -> get('product');
            return $query -> result_array();
        }
        function p_select_like($str){
            $this -> db -> like('name', $str);
            $query = $this -> db -> get('product');
            return $query -> result_array();
        }
        function p_select_user($user){
            $this -> db -> where('user', $user);
            $query = $this -> db ->get('product');
            return $query -> result_array();
        }
    }
?>