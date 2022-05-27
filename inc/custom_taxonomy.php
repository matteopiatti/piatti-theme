<?php

function reg_cat() {
         register_taxonomy_for_object_type('category','projects');
}
add_action('init', 'reg_cat');