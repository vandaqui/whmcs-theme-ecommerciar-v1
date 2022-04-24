<?php

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Logged in Sidebar
add_hook('ClientAreaPrimarySidebar', 1, function(MenuItem $primarySidebar)
{
    if(!is_null($primarySidebar->getChild('Client Details'))){
    $primarySidebar->removeChild('Client Details');
    }
});
