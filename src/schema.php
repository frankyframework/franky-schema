<?php
namespace Franky\Schema;

abstract class schema
{

    protected $json;


    function __construct($type) {
        $this->json = array("@type" => $type);

    }

    function get($context=true)
    {

        if($context)
        {   $html ='<script type="application/ld+json">';
            $this->json["@context"] = "http://schema.org";
            $html .= json_encode($this->json);
            $html .= '</script>';
        }
        else
        {
             $html = json_encode($this->json);
        }

        return $html;
    }

}


?>
