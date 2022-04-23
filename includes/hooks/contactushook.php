<?php

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Horizontal Menu
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
   if (!is_null($primaryNavbar->getChild('Contact Us'))) {
       $primaryNavbar->removeChild('Contact Us');
   }
});