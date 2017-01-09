<?php

/**
 * Override or insert variables into the page template.
 */
function olcbartik_process_page(&$variables) {

  if (module_exists('olclangreplace')) {

    // NOTE: Passing a variable to t() is discouraged.
    // We are doing it here as a special case.
    $variables['site_name'] = olclangreplace_replace($variables['site_name']);

  }
  else {

    drupal_set_message('For string replacement of the site name, OLC Bartik theme requires "olclangreplace" module.', 'warning');

  }
  
}

function olcbartik_process_html(&$variables) {

  if (module_exists('olclangreplace')) {

    // NOTE: Passing a variable to t() is discouraged.
    // We are doing it here as a special case.
    $variables['head_title'] = olclangreplace_replace($variables['head_title']);

  }
  else {

    drupal_set_message('For string replacement of the head title, OLC Bartik theme requires "olclangreplace" module.', 'warning');

  }
  
}
