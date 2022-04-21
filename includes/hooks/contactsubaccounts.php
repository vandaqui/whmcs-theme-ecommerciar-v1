<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaSecondaryNavbar', 1, function (MenuItem $secondaryNavbar)
{
   if (!is_null($secondaryNavbar->getChild('Account'))) {
               $secondaryNavbar->getChild('Account')
                               ->removeChild('Contacts');
   }
});

add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $secondarySidebar)
{
   if (!is_null($secondarySidebar->getChild('Client Contacts'))) {
               $secondarySidebar->removeChild('Client Contacts');
   }
});