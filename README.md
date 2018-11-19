Adding plugin event to JSSupportTicket component
=====================

## Controllers

This directory only contains original controllers on which i had mofications to trigger Joomla plugins events

See **'history'** of each controllers to see the added code:
https://github.com/garstud/JSSupportTicket/commits/master/com_jssupportticket/controllers/ticket.php

## Plugins

This directory contains a plugin example to see how to enhance JSSupportTicket with events.


## How to use this ?

To use the proposed plugins, you need to add the events that have been added in the ticket controller.
After that, zip, install and publish the plugin in your joomla, it will responds to your action in your tickets !

The current version of the demo plugin "helloticket" will just display a popin that tell you the event fired and the context which triggered the event !

![rendering of the plugin](/docs/captures/display1.png "rendering of the plugin")
