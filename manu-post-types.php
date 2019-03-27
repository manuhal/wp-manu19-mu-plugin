<?php
   //register or create custom post type
   function manu_post_types(){
 
     //CAMPUS post type  
     register_post_type('campus', array(
       'menu_icon' => 'dashicons-location-alt',
       'has_archive' => true,
       'rewrite' => array( 'slug' => 'campuses'), //this is for url-based archive link, like http://..../events
       'public' => true, // these posts will be available for all users / public
       'supports' => array('title', 'editor', 'excerpt'), //if we don't specify 'supports' arg, title' and 'editor' will automatically supported. but since now we specify it (to add excerpt), we need to add title & editor as well 
       'labels' => array( 
                     'name' => 'Campuses', 
                     'add_new_item' => 'Add New Campus',
                     'edit_item' => 'Edit Campus',
                     'all_items' => 'All Campuses',
                     'singular_name' => 'Campus',
                   ),
     ));
       
     //EVENT post type  
     register_post_type('event', array(
       'menu_icon' => 'dashicons-calendar-alt',
       'has_archive' => true,
       'rewrite' => array( 'slug' => 'events'), //this is for url-based archive link, like http://..../events
       'public' => true,
       'supports' => array('title', 'editor', 'excerpt'), //if we don't specify 'supports' arg, title' and 'editor' will automatically supported. but since now we specify it (to add excerpt), we need to add title & editor as well 
       'labels' => array( 
                     'name' => 'Events', 
                     'add_new_item' => 'Add New Event',
                     'edit_item' => 'Edit Event',
                     'all_items' => 'All Events',
                     'singular_name' => 'Event',
                   ),
     ));
     
     //PROGRAM post type  
     register_post_type('program', array(
       'menu_icon' => 'dashicons-awards',
       'has_archive' => true,
       'rewrite' => array( 'slug' => 'programs'),
       'public' => true,
      //  'supports' => array('title', 'editor', 'excerpt'), //if we don't specify 'supports' arg, title' and 'editor' will automatically supported. but since now we specify it (to add excerpt), we need to add title & editor as well 
       'labels' => array( 
                     'name' => 'Programs', 
                     'add_new_item' => 'Add New Program',
                     'edit_item' => 'Edit Program',
                     'all_items' => 'All Programs',
                     'singular_name' => 'Program',
                   ),
     ));
     
     //PROFESSOR post type  
     register_post_type('professor', array(
       'supports' => array('title', 'editor', 'thumbnail'), //if we don't specify 'supports' arg, title' and 'editor' will automatically supported. but since now we specify it (to add excerpt), we need to add title & editor as well 
       'menu_icon' => 'dashicons-welcome-learn-more',
    //   'has_archive' => true, //no need archive for professor
    //   'rewrite' => array( 'slug' => 'professors'), //also no need, since we don't need archive for professor
       'public' => true,
       'labels' => array( 
                     'name' => 'Professors', 
                     'add_new_item' => 'Add New Professor',
                     'edit_item' => 'Edit Professor',
                     'all_items' => 'All Professors',
                     'singular_name' => 'Professor',
                   ),
     ));
     
   }
  
   //create / register custom post type
   add_action('init', 'manu_post_types');
   
   //see more detail about register_post_type() function here:
   //https://developer.wordpress.org/reference/functions/register_post_type/ 
   //https://codex.wordpress.org/Function_Reference/register_post_type



?>