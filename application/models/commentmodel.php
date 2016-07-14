<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7 0007
 * Time: 15:32
 */

    class commentmodel extends CI_Model{
        function __construct(){
            parent::__construct();
            $this -> load -> database();
        }
        function c_insert($arr){
            $this -> db -> insert('comment',$arr);
        }
        function c_select($product){
            $this -> db -> where('product',$product);
            $query = $this -> db -> get('comment');
            return $query -> result_array();
        }
    }