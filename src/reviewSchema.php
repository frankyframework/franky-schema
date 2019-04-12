<?php
//URL: https://schema.org/Review

namespace Franky\Schema;


class reviewSchema extends schema
{
    function __construct() {

        parent::__construct("Review");
    }

    public function setAuthor($val)
    {

         $this->json["author"] = $val;

    }
    public function setDatePublished($val) // yyyy-mm-dd
    {
        $this->json["datePublished"] = $val;
    }
    public function setDescription($val)
    {
        $this->json["description"] = $val;
    }
    public function setName($val)
    {
        $this->json["name"] = $val;
    }

    public function setReviewRatinge($val) // Rating Schema
    {
        $this->json["reviewRating"] = $val;
    }

}


?>
