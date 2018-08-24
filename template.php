<?php

function byu_ge_preprocess_views_view(&$variables) {
  $path = 'sites/all/themes/byu_ge/';
  switch ($variables['name']) {
    case 'students':
    case 'faculty':
      drupal_add_css($path . 'css/circle-card.css');
      drupal_add_js($path . 'js/content.js');
      break;
    case 'contact_us':
      drupal_add_css($path . 'css/contact-card.css');
      drupal_add_js($path . 'js/content.js');
      break;
    case 'core_curriculum':
    case 'course_outcomes':
      drupal_add_css($path . 'css/course-outcomes.css');
      break;
    case 'foundation_documents':
      drupal_add_css($path . 'css/foundation-docs.css');
      break;
    case 'front_page_links':
      drupal_add_css($path . 'css/front-links.css');
      break;
    case 'ge_office_contact':
      drupal_add_css($path . 'css/office-contact.css');
      break;
  }
}

function byu_ge_preprocess_views_view_field(&$variables) {
  $variables['filepath'] = variable_get('file_public_path', conf_path() . '/files');
}