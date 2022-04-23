<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Horizontal Menu
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
   if (!is_null($primaryNavbar->getChild('Network Status'))) {
       $primaryNavbar->removeChild('Network Status');
   }
});

//Client Area Logged in Dropdown
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
   if (!is_null($primaryNavbar->getChild('Support'))) {
       $primaryNavbar->getChild('Support')->removeChild('Network Status');
   }
});

