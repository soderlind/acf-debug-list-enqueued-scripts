

# ACF DEBUG: List Enqueued Scripts Field

Adds a 'ACF DEBUG: List Enqueued Scripts' field type for the [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/) WordPress plugin.

-----------------------

### Overview

For debug purpose, list enqueued scripts. 

### Compatibility

This add-on will work with:

* version 4 and up
* version 3 and bellow


### Installation

This add-on can be treated as both a WP plugin and a theme include.

**Install as Plugin**

1. Copy the 'acf-debug_list_enqueued_scripts' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

**Include within theme**

1.	Copy the 'acf-debug_list_enqueued_scripts' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
2.	Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-debug_list_enqueued_scripts.php file)

```php
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
	include_once('acf-debug_list_enqueued_scripts/acf-debug_list_enqueued_scripts.php');
}
```

### More Information

Please read the readme.txt file for more information