<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6 0006
 * Time: 22:50
 */
    class statementmodel extends CI_Model{
        function __construct(){
            parent::__construct();
            $this -> load -> database();
        }
        function s_insert($arr){
            $this -> db -> insert('statement',$arr);
        }
        function s_select($user, $product){
            $this -> db -> where('user', $user);
            $this -> db -> where('product', $product);
            $query = $this -> db -> get('statement');
            return $query -> row_array();
        }
        function s_select_user($user){
            $this -> db -> where('user', $user);
            $query = $this -> db -> get('statement');
            return $query -> result_array();
        }
    }

?>