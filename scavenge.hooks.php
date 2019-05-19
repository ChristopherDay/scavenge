<?php
    new hook("actionMenu", function ($user) {
    	if ($user->checkTimer("scavenge")) {
	        return array(
	            "url" => "?page=scavenge", 
	            "text" => "Scavenge", 
	            "sort" => 10000
	        );
	    }
    });
?>