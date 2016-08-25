<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ravi
 */
class UserBean {
            var $user_id;
            var $user_level;
            var $user_fname;
            var $user_lname;
            var $user_email;
            var $user_password;
            var $user_createdOn;
            
            
            function getUser_id() {
                return $this->user_id;
            }

            function getUser_level() {
                return $this->user_level;
            }

            function getUser_fname() {
                return $this->user_fname;
            }

            function getUser_lname() {
                return $this->user_lname;
            }

            function getUser_email() {
                return $this->user_email;
            }

            function getUser_password() {
                return $this->user_password;
            }

            function getUser_createdOn() {
                return $this->user_createdOn;
            }

            function setUser_id($user_id) {
                $this->user_id = $user_id;
            }

            function setUser_level($user_level) {
                $this->user_level = $user_level;
            }

            function setUser_fname($user_fname) {
                $this->user_fname = $user_fname;
            }

            function setUser_lname($user_lname) {
                $this->user_lname = $user_lname;
            }

            function setUser_email($user_email) {
                $this->user_email = $user_email;
            }

            function setUser_password($user_password) {
                $this->user_password = $user_password;
            }

            function setUser_createdOn($user_createdOn) {
                $this->user_createdOn = $user_createdOn;
            }


            
            
            
            
            
            
}
