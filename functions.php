<?php
    /**
     * Do not edit anything in this file unless you know what you're doing
     */

    /**
     * Pilot requirements
     *
     * The $pilot_requirements array determines the code library required
     * by the theme.
     *
     * Please note that missing files will produce a fatal error.
     */
    $pilot_requirements = [
      'etc/setup.php', // theme setup
      'etc/includes.php'
    ];

    array_walk($pilot_requirements, function ($file) {
        if (!locate_template($file, true, true)) {
            trigger_error(sprintf(__('Error locating %s, a required file for Pilot.',
              'pilotpress'), $file), E_USER_ERROR);
        }
    });