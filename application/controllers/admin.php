<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/12 0012
 * Time: 9:43
 */

    class admin extends CI_Controller{
        function index(){
            $this -> load -> library('session');
            $this -> load -> model('usermodel');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                if($user['level'] == 4){
                    //以上是管理员通用框架
                    $data['users'] = $this -> usermodel -> u_select_level(1);
                    $this -> load -> view('popgoing_Musers',$data);
                }
            }
        }
        function whmanage(){
            $this -> load -> library('session');
            $this -> load -> model('usermodel');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                if($user['level'] == 4){
                    //以上是管理员通用框架
                    $data['users'] = $this -> usermodel -> u_select_level(2);
                    $this -> load -> view('popgoing_Mwanghong',$data);
                }
            }
        }
        function producemanage(){
            $this -> load -> library('session');
            $this -> load -> model('usermodel');
            $uid = $this -> session -> userdata('uid');
            if($uid){
                $user = $this -> usermodel -> u_select_id($uid);
                if($user['level'] == 4){
                    //以上是管理员通用框架
                    $data['users'] = $this -> usermodel -> u_select_level(3);
                    $this -> load -> view('popgoing_Mseller',$data);
                }
            }
        }
    }
?>