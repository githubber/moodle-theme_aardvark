<?php

/**
 * @package		theme_aardvark
 * @author		Shaun Daubney
 * @license		http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_aardvark_get_html_for_settings($OUTPUT, $PAGE);

$regionmainbox = 'span9 desktop-first-column';
$regionmain = 'span8 pull-right';
$sidepre = 'span4 desktop-first-column';
$sidepost = 'span3 pull-right';

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>

<?php require('head.php'); ?>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php require('header.php'); ?>

<div id="page" class="container-fluid">
    <?php echo $OUTPUT->full_header(); ?>
    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>

	<?php require('footer.php'); ?>

</body>
</html>
