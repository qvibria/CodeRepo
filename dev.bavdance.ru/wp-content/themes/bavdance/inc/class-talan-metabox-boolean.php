<?php

/* metaboxes class */

require_once 'class-talan-metabox.php';

class Talan_Metabox_Boolean extends Talan_Metabox {

    public function render_metabox_content($post) {
        // Add an nonce field so we can check for it later.
        wp_nonce_field('talan_inner_custom_box', 'talan_inner_custom_box_nonce');
        $metabox = $this->getMetabox();
        // Use get_post_meta to retrieve an existing value from the database.
        $value = get_post_meta($post->ID, $metabox['id'], true);

        // Display the form, using the current value.
       
        echo '<input type="checkbox" id="' . $metabox['id'] . '" name="' . $metabox['id'] . '"';
        if ($value == "yes")
            echo "checked='checked'";
        echo ' value="' . $value . '" /> Дв';
    }

    public function hadle_data($post_id, $id) {
        return $additional = isset($_POST[$id]) ? "yes" : "no";
    }

}
