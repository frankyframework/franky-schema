<?php
//URL: https://schema.org/ItemList

namespace Franky\Schema;


class itemListSchema extends schema
{
    function __construct() {

        parent::__construct("ItemList");
    }

    public function setUrl($val)
    {

       $this->json["url"] = $val;

    }

    public function setNumberOfItems($val)
    {

       $this->json["numberOfItems"] = $val;

    }

    public function setItemListElement($val) // Other Schema Ej: Product,ListItem,Text
    {
        $this->json["itemListElement"][] = $val;
    }


}
?>
