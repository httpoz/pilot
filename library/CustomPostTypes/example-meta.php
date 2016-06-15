<?php
/**
 * Replace "example" with your "post_type"
 */

function example_meta()
{
    add_meta_box(
        "example_meta",
        "Meta Info",
        "example_meta_options",
        "example",
        "normal",
        "default"
    );
}

add_action('admin_init', 'example_meta');

function example_meta_options()
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    }

    $custom = get_post_custom($post->ID);

    // (A) repeat as is necessary for all meta boxes
    if (isset($custom['field'][0])) {
        $field = $custom['field'][0];
    } else {
        $field = '';
    }

    ?>

    <div class="wpdashboard">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" name="field" class="form-control" placeholder="This is a meta field..." value="<?php echo $field; ?>">
                </div>
            </div>
        </div>
    </div>

    <?php

}

/**
 * Save meta fields
 * @return mixed
 */
function example_save_extras()
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post->ID;
    } else {

        // (C) Repeat as is necessary for all meta boxes, match (A)
        if (isset($_POST['field'])) {
            update_post_meta($post->ID, 'field', $_POST['field']);
        }

    }
}

add_action('save_post', 'example_save_extras');