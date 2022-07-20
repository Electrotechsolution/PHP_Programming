<?php
class test
{
    public $name = "test";
    public $age = "20";
    public $email = "sk@gmail.com";
    public $phone = "0123456789";
    public $address = "Dhaka";


    public function Name()
    {
        return $this->name;
    }

    public function Age()
    {
        return $this->age;
    }
    public function Email()
    {
        return $this->email;
    }

    public function Phone()
    {
        return $this->phone;
    }

    
}
$obj = new test();
echo $obj->Name();
echo "</br>";
echo $obj->Age();
echo "</br>";
echo $obj->Email();
echo "</br>";
echo $obj->Phone();

?>