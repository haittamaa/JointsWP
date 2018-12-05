<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_theme_file_path('/functions/theme-support.php')); 

// WP Head and other cleanup functions
require_once(get_theme_file_path('/functions/cleanup.php')); 

// Register scripts and stylesheets
require_once(get_theme_file_path('/functions/enqueue-scripts.php')); 

// Register custom menus and menu walkers
require_once(get_theme_file_path('/functions/menu.php')); 

// Register sidebars/widget areas
require_once(get_theme_file_path('/functions/sidebar.php')); 

// Makes WordPress comments suck less
require_once(get_theme_file_path('/functions/comments.php')); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_theme_file_path('/functions/page-navi.php')); 

// Adds support for multiple languages
require_once(get_theme_file_path('/functions/translation/translation.php')); 

// Adds site styles to the WordPress editor
require_once(get_theme_file_path('/functions/editor-styles.php')); 

// Remove 4.2 Emoji Support
require_once(get_theme_file_path('/functions/disable-emoji.php')); 

// Related post function - no need to rely on plugins
// require_once(get_theme_file_path('/functions/related-posts.php')); 

// Use this as a template for custom post types
// require_once(get_theme_file_path('/functions/custom-post-type.php');

// Customize the WordPress login menu
require_once(get_theme_file_path('/functions/login.php')); 

// Customize the WordPress admin
require_once(get_theme_file_path('/functions/admin.php')); 

// Load Caldera custom filters  - replace bootstrap by foundation
//require_once(get_theme_file_path('/functions/caldera-filters.php')); 

// Enable which template file feature
require_once(get_theme_file_path('/functions/which-template.php'));
