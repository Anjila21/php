<?php
class Customer //class class_name
{
    //properties
   public $cust_name;
   public $cust_address;
   public $cust_phone;
   //method
function setdetail($name,$address,$phone)
{
    this->customer =$name.this->customer=$address.this->customer=$phone;
}
function getdetail()
{
    return this->$cust_name.this->$cust_address.this->$cust_phone;
}
}
$c1= new Customer();
$c1->setdetail("Anjila","kalanki",9843045160)
echo $c1->getdetail();