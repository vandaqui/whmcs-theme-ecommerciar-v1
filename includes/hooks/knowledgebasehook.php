<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");
    
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

//Client Area Logged in Support DropDown
add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $secondarySidebar)
{
    if(!is_null($secondarySidebar->getChild('Support'))){
    $secondarySidebar->getChild('Support')->removeChild('Knowledgebase');
    }
});