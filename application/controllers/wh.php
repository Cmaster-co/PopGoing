<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7 0007
 * Time: 8:18
 */
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class wh extends CI_Controller{
        function whlist(){
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            $data['whs'] = $this -> usermodel -> u_select_all_wh();
            if($this -> session -> userdata('uid')){
                $user = $this -> usermodel -> u_select_id($this -> session -> userdata('uid'));
                $data['name'] = $user['name'];
            }
            if($this -> session -> userdata('uid')){
                $this -> load -> model('followmodel');
                $mywh = $this -> followmodel -> f_followed($this -> session -> userdata('uid'));
                $data['mywh'] = array();
                foreach ($mywh as $m){
                    array_push($data['mywh'],$m['follow']);
                }
            }
            $this -> load -> view('Popgoing_wh',$data);
        }
        function addmanage(){
            $this -> load -> library('session');
            $this -> load -> model('usermodel');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                if($user['level'] == 2){
                    //以上是网红通用框架
                    $this -> load -> view("popgoing_Wpublish");
                }
            }
        }
        function delmanage(){
            $this -> load -> library('session');
            $this -> load -> model('usermodel');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                if($user['level'] == 2){
                    //以上是网红通用框架
                    $this -> load -> model('productmodel');
                    $this -> load -> view("Popgoing_Wdelete");
                }
            }
        }
        function fsmanage(){}
        function commange(){}
        function datainput(){
            $this -> load -> model('productmodel');
            $this -> load -> model('producemodel');
            $this -> load -> library('session');
            $uid = $this -> session -> userdata('uid');
            if($uid) {
                $arr = array('name' => $_POST['name'],
                    'produce' => intval($_POST['produce']),
                    'more' => $_POST['info'],
                    'price' =>floatval( $_POST['price']),
                    'num' => intval($_POST['num']),
                    'pic' => $_FILES["file"]["name"],
                    'user' => $uid);
                $this->productmodel->p_insert($arr);
                echo "add succeed";
                echo $_FILES["file"]["name"];
                header('Location:/index.php/wh/addmanage');
            }
        }
        function datamodify(){}
        function datadel(){}
        function datasearch(){}
    }

?>