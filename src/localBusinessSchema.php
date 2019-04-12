<?php
//URL: https://schema.org/LocalBusiness

namespace Franky\Schema;


class localBusinessSchema extends schema
{
    function __construct() {

        parent::__construct("LocalBusiness");
    }


    public function setName($val)
    {
        $this->json["name"] = $val;
    }

    public function setTelephone($val)
    {
        $this->json["telephone"] = $val;
    }

    public function setDescription($val)
    {
        $this->json["description"] = $val;
    }

    public function setGeo($val)
    {
        $this->json["geo"] = $val;
    }

    public function setAddress($val)
    {
        $this->json["address"] = $val;
    }

    public function setSameAs($val)
    {
        $this->json["sameAs"][] = $val;
    }

    public function setOpeningHours($val)
    {
        $this->json["openingHours"] = $val;
    }

    public function setImage($val)
    {
        $this->json["image"] = $val;
    }

}


?>
