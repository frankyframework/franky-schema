<?php
//URL: https://schema.org/Person

namespace Franky\Schema;


class postalAddressSchema extends schema
{
    function __construct() {

        parent::__construct("PostalAddress");
    }


    public function setAddressLocality($val)
    {
        $this->json["addressLocality"] = $val;
    }

    public function setAddressRegion($val)
    {
        $this->json["addressRegion"] = $val;
    }



    public function setPostalCode($val)
    {
        $this->json["postalCode"] = $val;
    }

    public function setStreetAddress($val) // type PostalAddress
    {
        $this->json["streetAddress"] = $val;
    }

}


?>
