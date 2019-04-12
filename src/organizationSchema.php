<?php
//URL: https://schema.org/Organization

namespace Franky\Schema;


class organizationSchema extends schema
{
    function __construct() {

        parent::__construct("Organization");
    }


    public function setName($val)
    {
        $this->json["name"] = $val;
    }

    public function setUrl($val)
    {
        $this->json["url"] = $val;
    }



    public function setSameAs($val)
    {
        $this->json["sameAs"][] = $val;
    }

    public function setContactPoint($val)
    {
        $this->json["contactPoint"] = $val;
    }

}


?>
