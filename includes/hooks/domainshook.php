<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Horizontal Menu Domains > Register Domain
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
   if (!is_null($primaryNavbar->getChild('Domains'))) {
       $primaryNavbar->getChild('Domains')->removeChild('Register a New Domain');
   }
});


//Client Area Horizontal Menu Domains > Search Domain
add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar) {
   if (!is_null($primaryNavbar->getChild('Domains'))) {
       $primaryNavbar->getChild('Domains')->removeChild('Domain Search');
   }
});

//Client Area My Domains > Register a New Domain
add_hook('ClientAreaSecondarySidebar', 1, function (MenuItem $secondarySidebar)
{
   if (!is_null($secondarySidebar->getChild('My Domains Actions'))) {
               $secondarySidebar->getChild('My Domains Actions')->removeChild('Register a New Domain');
   }
});

//Client Area Available Addons > Register a New Domain
add_hook('ClientAreaSecondarySidebar', 2, function (MenuItem $secondarySidebar)
{
   if (!is_null($secondarySidebar->getChild('Actions'))) {
               $secondarySidebar->removeChild('Actions');
   }
});

?>


<?php
 
use WHMCS\View\Menu\Item;

// This hook will remove the Register a New Domain panel from the client area
add_hook('ClientAreaHomepagePanels', 1, function (Item $homePagePanels) {
    if (!is_null($homePagePanels->getChild('Register a New Domain'))) {
        $homePagePanels->removeChild('Register a New Domain');
    }
});