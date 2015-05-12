<?php
/* metaboxes class */

class Talan_Metabox {
    /*
      metabox = array('id', 'name');
     */

    private $metabox = array();
    private $post_types = array();

    public function __construct($metabox, $post_types) {
        $this->metabox = $metabox;
        $this->post_types = $post_types;

        add_action('add_meta_boxes', array($this, 'add_meta_box'));
        add_action('save_post', array($this, 'save'));
    }

    public function add_meta_box($post_type) {

        if (in_array($post_type, $this->post_types)) {
            if ($this->metabox['id'] == 'uploader') {
                add_meta_box($this->metabox['id'], $this->metabox['name'], array($this, 'uploader_render'), $post_type, 'advanced', 'high');
            } else {
                add_meta_box($this->metabox['id'], $this->metabox['name'], array($this, 'render_metabox_content'), $post_type, 'advanced', 'high');
            }
        }
    }

    public function save($post_id) {
        if (!isset($_POST['talan_inner_custom_box_nonce']))
            return $post_id;
        $nonce = $_POST['talan_inner_custom_box_nonce'];

        if (!wp_verify_nonce($nonce, 'talan_inner_custom_box'))
            return $post_id;

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;

        if ('page' == $_POST['post_type']) {

            if (!current_user_can('edit_page', $post_id))
                return $post_id;
        } else {

            if (!current_user_can('edit_post', $post_id))
                return $post_id;
        }
        $id = $this->metabox['id'];
        $mydata = $this->hadle_data($post_id, $id);
        update_post_meta($post_id, $id, $mydata);
    }

    public function hadle_data($post_id, $id) {
        return $mydata = $_POST[$id];
    }

    function getMetabox() {
        return $this->metabox;
    }

    function setMetabox($metabox) {
        $this->metabox = $metabox;
    }

    public function render_metabox_content($post) {
        // Add an nonce field so we can check for it later.
        wp_nonce_field('talan_inner_custom_box', 'talan_inner_custom_box_nonce');

        // Use get_post_meta to retrieve an existing value from the database.
        $value = get_post_meta($post->ID, $this->metabox['id'], true);

        // Display the form, using the current value.
        echo '<label for="' . $this->metabox['id'] . '">';
        echo $this->metabox['name'];
        echo '</label> ';
        echo '<input type="text" id="' . $this->metabox['id'] . '" name="' . $this->metabox['id'] . '"';
        echo ' value="' . $value . '" size="25" />';
    }

    public function uploader_render($post) {

        wp_nonce_field('talan_inner_custom_box', 'talan_inner_custom_box_nonce');

        // Use get_post_meta to retrieve an existing value from the database.
        $value = get_post_meta($post->ID, $this->metabox['id'], true);
        $values;
        if (!empty($value)) {
            $values = split(';', $value);
        } else {
            $values = null;
        }
        ?>
        <div class="uploader">

            <input id="<?php echo $this->metabox['id']; ?>_text" name="<?php echo $this->metabox['id']; ?>" type="hidden"  value="<? echo $value; ?>"/>
            <input id="<?php echo $this->metabox['id']; ?>_button" class="button button-up" name="uploaded_button" type="button" value="Загрузить" />
            <input id="_delete_button" class="button  button-primary" name="uploaded_button" type="button" value="Очистить" />
            <input type='button' class='button-primary' value='Сохранить' id='save_button' />

            <div class='uploaded'>
                <?php
                if (null != $values) {
                    foreach ($values as $value) {
                        $value = split("_DEL_", $value);
                        $url = $value[0];
                        if (!empty($value))
                            echo "<img src='$url'  style='float:left; margin:10px 5px; width:100px'/>";
                    }
                }
                ?>

            </div>
        </div>

        <?php
    }

}
