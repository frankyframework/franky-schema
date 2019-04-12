<?php
//URL: https://schema.org/Product

namespace Franky\Schema;


class productSchema extends schema
{
    function __construct() {

        parent::__construct("Product");
    }

    public function setDescription($val)
    {
        $this->json["description"] = $val;
    }
    public function setName($val)
    {
        $this->json["name"] = $val;
    }
    public function setImage($val)
    {
        $this->json["image"] = $val;
    }

    public function setUrl($val)
    {
        $this->json["url"] = $val;
    }

    public function setColor($val)
    {
        $this->json["color"] = $val;
    }

    public function setCategory($val)
    {
        $this->json["category"] = $val;
    }

    public function setAggregateRating($val) //Setea AggregateRating Schema
    {
        $this->json["aggregateRating"][] = $val;
    }

    public function setOffers($val) //Setea Offers Schema
    {
        $this->json["offers"][] = $val;
    }

    public function setReview($val) //Setea Revew Schema
    {
        $this->json["review"][] = $val;
    }


}


?>
