<?php

// Packaged Functions

// Admin Scripts
include( 'PilotDefaults/adminScripts.php' ); // BootStrap Admin StyleSheet

// Helper Functions
include( 'PilotDefaults/Helpers/pilotImage.php' ); // Grab first image

// Short Codes
include('PilotDefaults/ShortCodes/disableAutoP.php'); // Disables wpautop in shortcodes
include('PilotDefaults/ShortCodes/bootstrapGrid.php'); // Shortcodes for Bootstrap Grids in the editor
include('PilotDefaults/ShortCodes/linkButton.php'); // Shortcode for Link Buttons in the editor
include('PilotDefaults/ShortCodes/anchorTag.php'); // Shortcode for Anchor Tags in the editor
include('PilotDefaults/ShortCodes/tables.php'); // Shortcode for Tables in the editor

// Custom Post Types
include('CustomPostTypes/PilotPostType/PilotPostType.php');

/**
 * Uncomment the beginning of the line below to test the example custom post type.
 * This is used to understand how custom post types are generated in Pilot.
 * You can also use this file as a reference for your own custom post types, 
 * just rename and ammend relative to your custom post type.
*/
// include('CustomPostTypes/example.php');


// Add Project Specific items here
