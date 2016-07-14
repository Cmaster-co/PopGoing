<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/11 0011
 * Time: 23:16
 */

    class incartmodel extends CI_Model{
        function __construct(){
            parent::__construct();
            $this -> load -> database();
        }
        function i_insert($arr){
            $this -> db -> insert('incart',$arr);
        }
        function i_select($user, $product){
            $this -> db -> where('user', $user);
            $this -> db -> where('product', $product);
            $query = $this -> db -> get('incart');
            return $query -> row_array();
        }
        function i_del($id){
            $this -> db -> where('Id', $id);
            $this -> db -> delete('incart');
        }
        function i_select_user($uid){
            $this -> db -> where('user',$uid);
            $query = $this -> db -> get('incart');
            return $query -> result_array();
        }
    }
?>