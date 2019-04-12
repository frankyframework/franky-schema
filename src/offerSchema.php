<?php
//URL: https://schema.org/Offer

namespace Franky\Schema;


class offerSchema extends schema
{
    function __construct() {

        parent::__construct("Offer");
    }

    public function setAvailability($val)
    {
        if($val)
        {
            $this->json["availability"] = "http://schema.org/InStock";
        }
    }
    public function setPrice($val)
    {
        $this->json["price"] = $val;
    }
    public function setPriceCurrency($val)
    {
        $this->json["priceCurrency"] = $val;
    }
    public function setUrl($val)
    {
        $this->json["url"] = $val;
    }

}


?>
