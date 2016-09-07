<?php

class CustomerBean{
    
    private $customer_fname;
    private $customer_lname;
    private $customer_email;
    private $customer_password;
    private $customer_tp;
    private $customer_mobiel;
    private $customer_company;
    private $customer_address1;
    private $customer_address2;
    private $customer_city;
    private $customer_country;
    
    function getCustomer_fname() {
        return $this->customer_fname;
    }

    function getCustomer_lname() {
        return $this->customer_lname;
    }

    function getCustomer_email() {
        return $this->customer_email;
    }

    function getCustomer_password() {
        return $this->customer_password;
    }

    function getCustomer_tp() {
        return $this->customer_tp;
    }

    function getCustomer_mobiel() {
        return $this->customer_mobiel;
    }

    function getCustomer_company() {
        return $this->customer_company;
    }

    function getCustomer_address1() {
        return $this->customer_address1;
    }

    function getCustomer_address2() {
        return $this->customer_address2;
    }

    function getCustomer_city() {
        return $this->customer_city;
    }

    function getCustomer_country() {
        return $this->customer_country;
    }

    function setCustomer_fname($customer_fname) {
        $this->customer_fname = $customer_fname;
    }

    function setCustomer_lname($customer_lname) {
        $this->customer_lname = $customer_lname;
    }

    function setCustomer_email($customer_email) {
        $this->customer_email = $customer_email;
    }

    function setCustomer_password($customer_password) {
        $this->customer_password = $customer_password;
    }

    function setCustomer_tp($customer_tp) {
        $this->customer_tp = $customer_tp;
    }

    function setCustomer_mobiel($customer_mobiel) {
        $this->customer_mobiel = $customer_mobiel;
    }

    function setCustomer_company($customer_company) {
        $this->customer_company = $customer_company;
    }

    function setCustomer_address1($customer_address1) {
        $this->customer_address1 = $customer_address1;
    }

    function setCustomer_address2($customer_address2) {
        $this->customer_address2 = $customer_address2;
    }

    function setCustomer_city($customer_city) {
        $this->customer_city = $customer_city;
    }

    function setCustomer_country($customer_country) {
        $this->customer_country = $customer_country;
    }






}