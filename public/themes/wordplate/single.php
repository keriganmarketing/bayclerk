<?php
$headerImageData = get_field('header_image');

bladerunner('views.pages.single',[
    'headerImage' => $headerImageData['url'],
    'headline'    => get_field('headline'),
    'post'        => $post
]);