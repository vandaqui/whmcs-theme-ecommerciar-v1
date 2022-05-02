<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Available Addons > Register a New Domain
add_hook('ClientAreaSecondarySidebar', 2, function (MenuItem $secondarySidebar)
{
   if (!is_null($secondarySidebar->getChild('Choose Currency'))) {
               $secondarySidebar->removeChild('Choose Currency');
   }
});