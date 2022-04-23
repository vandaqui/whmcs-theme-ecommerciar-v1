<?php

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Horizontal Menu
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
   if (!is_null($primaryNavbar->getChild('Knowledgebase'))) {
       $primaryNavbar->removeChild('Knowledgebase');
   }
});

//Client Area Logged in Dropdown
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
   if (!is_null($primaryNavbar->getChild('Support'))) {
       $primaryNavbar->getChild('Support')->removeChild('Knowledgebase');
   }
});
