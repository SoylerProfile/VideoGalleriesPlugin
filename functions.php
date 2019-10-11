<?php

require __DIR__ . '/config.php';

// includes
require __DIR__ . '/includes/class-videosurfpro-activator.php';
use includes\Videosurfpro_Activator;

// admin
require __DIR__ . '/admin/class-videosurfpro-admin.php';
use admin\Videosurfpro_Admin;

// ************************************************************ //

function videosurfpro_activation() {
    Videosurfpro_Activator::activate();
}

function videosurfpro_uninstall() {
    // uninstall the plugin and drop all tables
}

// ------------------------------------------------------------ //

// Admin menu
function videosurfpro_admin_menu() {
    Videosurfpro_Admin::add_plugin_admin_menu();
}

function videosurfpro_display_admin_menu_main() {
    Videosurfpro_Admin::videosurfpro_display_admin_menu_main();
}

function videosurfpro_display_submenu_all_videos() {
    Videosurfpro_Admin::videosurfpro_display_submenu_all_videos();
}

function videosurfpro_display_submenu_all_categories() {
    Videosurfpro_Admin::videosurfpro_display_submenu_all_categories();
}

function videosurfpro_display_submenu_all_galleries() {
    Videosurfpro_Admin::videosurfpro_display_submenu_all_galleries();
}

function videosurfpro_display_submenu_add_video() {
    Videosurfpro_Admin::videosurfpro_display_submenu_add_video();
}

function videosurfpro_display_submenu_advertisement() {
    Videosurfpro_Admin::videosurfpro_display_submenu_advertisement();
}

function videosurfpro_display_submenu_providers() {
    Videosurfpro_Admin::videosurfpro_display_submenu_providers();
}

function videosurfpro_display_submenu_faq() {
    Videosurfpro_Admin::videosurfpro_display_submenu_faq();
}

// ------------------------------------------------------------ //