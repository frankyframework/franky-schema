<?php
//URL: https://schema.org/Person

namespace Franky\Schema;


class personSchema extends schema
{
    function __construct() {

        parent::__construct("Person");
    }


    public function setName($val)
    {
        $this->json["name"] = $val;
    }

    public function setUrl($val)
    {
        $this->json["url"] = $val;
    }

    public function setEmail($val)
    {
        $this->json["email"] = $val;
    }

    public function setImage($val)
    {
        $this->json["image"] = $val;
    }

    public function setJobTitle($val)
    {
        $this->json["jobTitle"] = $val;
    }

    public function setTelephone($val)
    {
        $this->json["telephone"] = $val;
    }

    public function setAddress($val) // type PostalAddress
    {
        $this->json["address"] = $val;
    }

}


?>
