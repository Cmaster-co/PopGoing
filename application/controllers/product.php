<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7 0007
 * Time: 10:44
 */
    if (!defined('BASEPATH')) exit('No direct script access allowed');
    class product extends CI_Controller{
        function one_display($id){
            $this -> load -> model('productmodel');
            $this -> load -> library('session');
            if($this -> session -> userdata('uid')){
                $this ->load -> model('usermodel');
                $user = $this -> usermodel -> u_select_id($this -> session -> userdata('uid'));
                $data['name'] = $user['name'];

            }
            $data['product'] = $this -> productmodel -> p_select_id($id);
            $this -> load -> view('Popgoing_prodes', $data);
        }
        function my_wh_products(){
            $this -> load -> model('followmodel');
            $this -> load -> model('productmodel');
            $this -> load -> model('producemodel');
            $this -> load -> library('session');
            $uid = $this -> session -> userdata('uid');
            $this ->load -> model('usermodel');
            $user = $this -> usermodel -> u_select_id($uid);
            $data['name'] = $user['name'];
            if($uid) {
                $wh = $this->followmodel->f_my_follow($uid);
                if($wh) {
                    $data['products'] = $this->productmodel->p_select_wh($wh);
                    foreach($data['products'] as &$p){
                        $u = $this -> usermodel -> u_select_id($p['user']);
                        $p['username'] = $u['name'];
                    }
                    $this->load->view('Popgoing_productshow', $data);
                }else{
                    $this ->load->view('Popgoing_home');
                }
            }else{
                $this -> load -> view('Popgoing_login');
            }
        }
    }
?>