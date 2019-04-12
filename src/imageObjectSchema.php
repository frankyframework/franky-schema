<?php
//URL: https://schema.org/ImageObject

namespace Franky\Schema;


class imageObjectSchema extends schema
{
    function __construct() {

        parent::__construct("ImageObject");
    }

    public function setAuthor($val)
    {

       $this->json["author"] = $val;

    }

    public function setContentLocation($val)
    {

       $this->json["contentLocation"] = $val;

    }

    public function setContentUrl($val)
    {
        $this->json["contentUrl"] = $val;
    }

    public function setDatePublished($val)
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



}
?>
