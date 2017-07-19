<?php

    /**
     * Disable the default instance of attachments plugin
     * I use this plugin a lot https://github.com/jchristopher/attachments
     */

    add_filter('attachments_default_instance', '__return_false'); //