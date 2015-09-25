<?php
    function Greetings ($hours) {
        $hours = 2100;
        if ($hours <= 2400 && $hours >= 2000){
            return "Good night!";
        }
        if ($hours >= 0600 && $hours < 1200) {
            return "Good morning!";
        }
        if ($hours >=1200 && $hours < 1500) {
            return "Good afternoon!";
        }
        if ($hours >= 1500 && $hours < 2000) {
            return "Good evening!";
        }
    }
print "<p>" . Greetings($hours) . "</p>";