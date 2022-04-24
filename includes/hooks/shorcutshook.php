<?php

use WHMCS\View\Menu\Item as MenuItem;

//Client Area Logged in Sidebar
add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $secondarySidebar)
{
    if(!is_null($secondarySidebar->getChild('Client Shortcuts'))){
    $secondarySidebar->removeChild('Client Shortcuts');
    }
});
