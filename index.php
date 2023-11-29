<?php get_header();



$context = Timber::context();

Timber::render('/app/views/index.twig', $context);


get_footer();
