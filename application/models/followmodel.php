<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7 0007
 * Time: 14:55
 */
    class followmodel extends CI_Model{
        function __construct(){
            parent::__construct();
            $this -> load -> database();
        }
        function f_insert($arr){
            $this -> db -> insert('follow',$arr);
        }
        function f_del($id, $f){
            $this -> db -> where('id', $id);
            $this -> db -> where('follow', $f);
            $this -> db -> delete('follow');
        }
        function f_my_follow($uid){
            $this -> db -> where('user', $uid);
            $query = $this -> db -> get('follow');
            return $query -> row_array();
        }
        function f_followed($uid){
            $this -> db -> where('user', $uid);
            $this -> db -> select('follow');
            $query = $this -> db -> get('follow');
            return $query -> result_array();
        }
    }