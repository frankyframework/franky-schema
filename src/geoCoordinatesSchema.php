<?php
//URL: https://schema.org/GeoCoordinates

namespace Franky\Schema;


class geoCoordinatesSchema extends schema
{
    function __construct() {

        parent::__construct("GeoCoordinates");
    }


    public function setLatitude($val)
    {
        $this->json["latitude"] = $val;
    }

    public function setLongitude($val)
    {
        $this->json["longitude"] = $val;
    }



}


?>
