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
    $this->cust_name = $name;
    $this->cust_address = $address;
    $this->cust_phone = $phone;
}
function getdetail()
{
    return $this->cust_name . $this->cust_address . $this->cust_phone;
}
}
$c1= new Customer();
$c1->setdetail("abc","xyz",12345678);
echo $c1->getdetail();
