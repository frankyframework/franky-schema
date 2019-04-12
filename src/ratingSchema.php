<?php
//URL: https://schema.org/Rating

namespace Franky\Schema;


class ratingSchema extends schema
{
    function __construct() {

        parent::__construct("Rating");
    }

    public function setBestRating($val)
    {

            $this->json["bestRating"] = $val;
    }
    public function setRatingValue($val) // yyyy-mm-dd
    {
        $this->json["ratingValue"] = $val;
    }
    public function setWorstRating($val)
    {
        $this->json["worstRating"] = $val;
    }

}


?>
