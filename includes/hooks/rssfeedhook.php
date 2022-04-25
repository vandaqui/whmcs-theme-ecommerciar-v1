<?php

if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Logged in Sidebar Server Status
add_hook('ClientAreaPrimarySidebar', 1, function(MenuItem $primarySidebar)
{
    if(!is_null($primarySidebar->getChild('Network Status'))){
    $primarySidebar->getChild('Network Status')->removeChild('View RSS Feed');
    }
});