<?php
function byu_ge_preprocess_node(&$variables) {
  $filepath = variable_get('file_public_path', conf_path() . '/files/');
  if ($variables['type'] == 'student_page' || $variables['type'] == 'faculty_page') {
    $variables['image'] = $filepath . $variables['field_image'][0]['filename'];
    $variables['href'] = '?q=node/' . $variables['nid'];
  }

  if ($variables['type'] == 'contact') {
    $variables['filepath'] = $filepath;
    if (isset($variables['field_image'])) {
      $variables['image'] = $filepath . $variables['field_image'][0]['filename'];
    }
    $variables['position'] = $variables['field_position'][0]['value'];
    $variables['description'] = $variables['body'][0]['value'];
    $variables['phone'] = $variables['field_phone'][0]['value'];
    $variables['email'] = $variables['field_e_mail'][0]['value'];
    $variables['location'] = $variables['field_room_number'][0]['value'];
  }

  if ($variables['type'] == 'office_contact') {
    $variables['phone'] = $variables['field_phone'][0]['value'];
    $variables['email'] = $variables['field_e_mail'][0]['value'];
    $variables['location'] = $variables['field_room_number'][0]['value'];
  }

  if ($variables['type'] == 'social_media_links') {
    $variables['facebook'] = !empty($variables['field_facebook']) ? $variables['field_facebook'][0]['url'] : '';
    $variables['twitter'] = !empty($variables['field_twitter']) ? $variables['field_twitter'][0]['url'] : '';
    $variables['instagram'] = !empty($variables['field_instagram']) ? $variables['field_instagram'][0]['url'] : '';
    $variables['youtube'] = !empty($variables['field_youtube']) ? $variables['field_youtube'][0]['url'] : '';
    $variables['pinterest'] = !empty($variables['field_pinterest']) ? $variables['field_pinterest'][0]['url'] : '';
    $variables['googleplus'] = !empty($variables['field_google_plus']) ? $variables['field_google_plus'][0]['url'] : '';
    $variables['linkedin'] = !empty($variables['field_linkedin']) ? $variables['field_linkedin'][0]['url'] : '';
    $variables['rss'] = !empty($variables['field_rss']) ? $variables['field_rss'][0]['url'] : '';
    $variables['snapchat'] = !empty($variables['field_snapchat']) ? $variables['field_snapchat'][0]['url'] : '';
  }

  if ($variables['type'] == 'foundation_document') {
    $variables['href'] = $variables['field_doc_link'][0]['url'];
    $variables['cardColor'] = $variables['field_color'][0]['value'];
  }

  if ($variables['type'] == 'front_page_link') {
    $variables['href'] = '?q=' . $variables['field_page_link'][0]['value'];
    $variables['image'] = $filepath . $variables['field_image'][0]['filename'];
  }
}

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