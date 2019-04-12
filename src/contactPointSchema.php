<?php
//URL: https://schema.org/ContactPoint

namespace Franky\Schema;


class contactPointSchema extends schema
{
    function __construct() {

        parent::__construct("ContactPoint");
    }


    public function setTelephone($val)
    {
        $this->json["telephone"] = $val;
    }

    public function setContactType($val)
    {
        $this->json["contactType"] = $val;
    }



    public function setContactOption($val)
    {
        $this->json["contactOption"][] = $val;
    }

    public function setAreaServed($val)
    {
        $this->json["areaServed"][] = $val;
    }

}


?>
