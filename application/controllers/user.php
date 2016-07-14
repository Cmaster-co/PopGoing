<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6 0006
 * Time: 23:18
 */
    if (!defined('BASEPATH')) exit('No direct script access allowed');
ob_start();

    class user extends CI_Controller{
        function index(){
            $this -> load -> library('session');
            $this -> load -> model('productmodel');
            if($this -> session -> userdata('uid')){
                $this ->load -> model('usermodel');
                $user = $this -> usermodel -> u_select_id($this -> session -> userdata('uid'));
                $data['name'] = $user['name'];
            }
            $data['products'] = $this -> productmodel -> p_all();
            $this -> load -> view('Popgoing_home', $data);
        }
        function regist(){
            $this -> load -> view('Popgoing_register');
        }
        function login(){
            $this -> load -> library('session');
            if($this -> session -> userdata('uid')){
                exit("login alreadly");
            }
            $this -> load -> view('Popgoing_login');
        }
        function registP(){
            $this -> load -> library('encrypt');
            $this -> load -> model('usermodel');
            $user = $this -> usermodel -> u_select($_POST['email']);
            if($user){
                echo "EXSIST!!!!";
                exit();
            }
            $passwd = $this -> encrypt -> encode($_POST['passwd']);  //对密码进行加密

            $arr = array('name' => $_POST['username'],
                'passwd' => $passwd,
                'level' => 1,
                'email' => $_POST['email'],
                'more' => "",
            );
            $this -> usermodel -> u_insert($arr);
            header('Location:/index.php');
        }
        function loginP(){
            $this -> load -> library('encrypt');
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            if($this -> session -> userdata('uid')){
                exit("login alreadly");
            }
            $user = $this -> usermodel -> u_select($_POST['email']);
            $passwd = $this -> encrypt -> decode($user['passwd']);
            if($user){
                if($passwd == $_POST['passwd']){
                    $arr = array('uid' => $user['Id']);
                    $this -> session -> set_userdata($arr);
                   // console. "login succeed";
                    if($user['level'] == 1){
                        header('Location:/index.php');
                    }elseif($user['level'] == 4){
                        header('Location:/index.php/admin/index');
                    }elseif($user['level'] == 2){
                        header('Location:/index.php/wh/addmanage');
                    }
                }else{
                    echo "PASSWORD ERROR!";
                    exit();
                }
            }else{
                echo "USER DOESNT EXSIST!";
                exit();
            }
        }
        function logout(){
            $this -> load -> library('session');
            $this -> session -> unset_userdata('uid');
           header('Location:/index.php');
        }
        function checkout(){
            $this -> load -> model('productmodel');
            $this -> load -> library('session');
            $this -> load -> model('usermodel');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                $data['name'] = $user['name'];
                $this -> load -> model('incartmodel');
                $incarts = $this -> incartmodel -> i_select_user($uid);
                $data['incarts'] = array();
                foreach($incarts as $i){
                    array_push($data['incarts'],$this->productmodel->p_select_id($i['product']));
                }
                $this -> load -> view('Popgoing_cart', $data);
            }else{
                echo "login first";
                header('Location:/index.php/login');
            }
        }
        function buy(){
            $this -> load -> model('incartmodel');
            $this -> load -> model('productmodel');
            $this -> load -> model('statementmodel');
            $this -> load -> library('session');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                $data['name'] = $user['name'];
                $this -> load -> model('incartmodel');
                $incarts = $this -> incartmodel -> i_select_user($uid);
                foreach( $incarts as $i){
                    $arr = array(
                        'user' => $i['user'],
                        'product' => $i['product']
                    );
                    $this -> statementmodel -> s_insert($arr);
                    $this -> incartmodel -> i_del($i['Id']);
                }
                echo "buy succeed";
            }else{
                echo "login first";
                header('Location:/index.php/login');
            }
        }
        function delcart($pid){
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            $this -> load -> model('productmodel');
            $user = $this -> session -> userdata('uid');
            if($user) {
                $product = $this -> productmodel ->  p_select_id($pid);
                if($product){
                    $this -> load -> model('incartmodel');
                    $incart = $this -> incartmodel -> i_select($user,$product['Id']);
                    if($incart){
                        $this -> incartmodel -> i_del($incart['Id']);
                        redirect('/checkout');
                    }
                }
            }else{
                echo "login first";
                header('/index.php/login');
                redirect('/index.php/login');
            }
            header('/index.php/checkout');
        }
        function addcart(){
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            $this -> load -> model('productmodel');
            $user = $this -> session -> userdata('uid');
            if($user) {
                $product = $this -> productmodel ->  p_select_id($_POST['p']);
                if($product){
                    $this -> load -> model('incartmodel');
                    $arr = array('user'=> $user,
                        'product'=> $product['Id']);
                    $isincart = $this -> incartmodel -> i_select($user,$product['Id']);
                    if(!$isincart){
                        $this -> incartmodel -> i_insert($arr);
                    }
                    echo "added";
                }
            }else{
                echo "login first";
            }
        }
        function order(){
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            $this -> load -> model('statementmodel');
            $this -> load -> model('productmodel');
            $uid = $this -> session -> userdata('uid');
            if($uid) {
                $user = $this -> usermodel -> u_select_id($uid);
                $data['name'] = $user['name'];
                $orders = $this -> statementmodel -> s_select_user($uid);
                foreach($orders as &$o){
                    $product = $this -> productmodel -> p_select_id($o['product']);
                    $o['name'] = $product['name'];
                    $o['pic'] = $product['pic'];
                    $o['price'] = $product['price'];
                }
                $data['orders'] = $orders;
                $this -> load -> view('Popgoing_order', $data);
            }else{
                echo "login first";
                header('Location:/index.php/login');
            }

        }
        function comment(){
            $this -> load -> model('commentmodel');
            $this -> load -> model('productmodel');
            $this -> load -> model('statementmodel');
            $this -> load -> library('session');
            if($this -> statementmodel -> s_select($this->session->userdata('uid'), $_POST['product'])){
                $arr = array('product' => $_POST['product'],
                    'user' => $this->session->userdata('uid'),
                    'info' => $_POST['info']);
                $this -> commentmodel -> c_insert($arr);
            }
        }
        function modify(){
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            $user = $this -> session -> userdata('uid');
            if($user){
                $arr = array();
                $this -> usermodel -> u_update($user, $arr);
            }
        }
        function follow(){
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            if($this -> session -> userdata('uid')) {
                $user = $this -> usermodel -> u_select_id($_POST['f']);
                if($user['level'] == 2){
                    $this -> load -> model('followmodel');
                    $arr = array('user' => $this -> session -> userdata('uid'),
                        'follow' => $user['Id']
                    );
                    $this -> followmodel -> f_insert($arr);
//                    $a = array('r'=>'followed');
//                    $re = json_encode($a);
//                    echo $re;
                    echo "followed";
                }
            }else{
                echo "login first";
            }
        }
        function unfollow(){
            $this -> load -> model('usermodel');
            $this -> load -> library('session');
            if($this -> session -> userdata('uid')) {
                $user = $this -> usermodel -> u_select_id($_POST['f']);
                if($user['level'] == 2){
                    $this -> load -> model('followmodel');
                    $this -> followmodel -> f_del($this -> session -> userdata('uid'), $user['Id']);
                    echo "unfollowed";
                }
            }else{
                echo "login first";
                header('Location:/index.php/login');
            }
        }
        function search(){
            $this -> load -> model('usermodel');
            $this -> load -> model('productmodel');
            $like = $_POST['like'];
            $products = $this -> productmodel -> p_select_like($like);
            $whs = $this -> usermodel -> u_select_like($like);
            $data['products'] = $products;
            $data['whs'] = $whs;
            $this -> load -> library('session');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                $data['name'] = $user['name'];
            }
            $this -> load -> view('Popgoing_search',$data);
        }
    }

?>