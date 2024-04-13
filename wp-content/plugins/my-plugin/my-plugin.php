<?php
/* Plugin Name: My Plugin
    * Description: My Plugin does awesome things.
    * Author: kupu
*/

wp_register_style('my-plugin-style', plugins_url('my-plugin.css', __FILE__));

register_block_style('core/quote', array(
    'name' => 'quote-blue',
    'label' => 'blue quote',
    'style_handle' => 'my-plugin-style',
));
