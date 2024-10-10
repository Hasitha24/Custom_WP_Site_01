<?php
/**
 * Header File
 * 
 * @package Hasitha
 */
/** The below part until the next dashed line was taken from index.php while taking the rest of the code to footer.php*/ 

?>
<!DOCTYPE html>
<!-- Added this to support the users who speak non-English langugages -->
<html <?php language_attributes(); ?>>
<head>
    <!-- Removed UTF-8 which was here by default and added blog info which displays all the information of the website -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The title will be added later -->
    <title>New WP Theme</title> 
     <!-- the wp_head() is added, so that it  Prints scripts or data in the head tag on the front end.-->
<?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
 <header>Header</header>

