<?php 
/* metaboxes class*/

class Talan_Metabox_Boolean extends Talan_Metabox{
    public function render_metabox_content($post) {
        // Add an nonce field so we can check for it later.
		wp_nonce_field( 'talan_inner_custom_box', 'talan_inner_custom_box_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta( $post->ID, $this->metabox['id'], true );

		// Display the form, using the current value.
		echo '<label for="'.$this->metabox['id'].'">';
		echo $this->metabox['name'];
		echo '</label> ';
                
		echo '<input type="checkbox" id="'.$this->metabox['id'].'" name="'.$this->metabox['id'].'"';
                if($value['additional'][0] == "additional") echo "checked";
                echo ' value="additional"  /> Да';
    }
    
    public function handle_data($id, $post_id) {
      
		$mydata =  isset($_POST[$id]) ? "additional" : "main" ;
		update_post_meta( $post_id, $id, $mydata );


    }



}