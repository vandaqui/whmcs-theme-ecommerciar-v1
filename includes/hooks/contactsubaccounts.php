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

add_hook('ClientAreaPrimarySidebar', 1, function(MenuItem $primarySidebar)
{
    if(!is_null($primarySidebar->getChild('Account')) && !is_null($primarySidebar->getChild('Account')->getChild('Contacts/Sub-Accounts'))){
    $primarySidebar->getChild('Account')->removeChild('Contacts/Sub-Accounts');
    }
});
