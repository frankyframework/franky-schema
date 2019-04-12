<?php
//URL: https://schema.org/AggregateRating

namespace Franky\Schema;


class aggregateRatingSchema extends schema
{
    function __construct() {

        parent::__construct("AggregateRating");
    }

    public function setRatingValue($val)
    {
        $this->json["ratingValue"] = $val;
    }
    public function setReviewCount($val)
    {
        $this->json["reviewCount"] = $val;
    }
    public function setBestRating($val)
    {
        $this->json["bestRating"] = $val;
    }

}


?>
