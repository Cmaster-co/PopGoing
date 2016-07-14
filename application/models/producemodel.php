<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6 0006
 * Time: 22:48
 */
    class producemodel extends CI_Model{
        function __construct(){
            parent::__construct();
            $this -> load -> database();
        }
        function pe_insert($arr){
            $this -> db -> insert('produce',$arr);
        }
        function pe_update($id, $arr){
            $this -> db -> where('id', $id);
            $this -> db -> update('produce', $arr);
        }
        function pe_del($id, $arr){
            $this -> db -> where('id', $id);
            $this -> db -> delete('produce');
        }
        function pe_select($name){
            $this -> db -> where ('name', $name);
            $this -> db -> select('*');
            $query = $this -> db -> get('produce');
            return $query -> result();
        }
        function pe_select_user($uid){
            $this -> db -> where ('user', $uid);
            $this -> db -> select('*');
            $query = $this -> db -> get('produce');
            return $query -> row_array();
        }
    }
?>