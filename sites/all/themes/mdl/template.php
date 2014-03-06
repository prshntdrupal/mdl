<?php
/**
*
* Implement hook_preprocess_html()
*
**/
function mdl_preprocess_html(&$variables){
    // Add information about the content bottom left/right content.
  if (!empty($variables['page']['content-bottom-left']) && !empty($variables['page']['content-bottom-right'])) {
    $variables['classes_array'][] = 'two-content-bottom';
  }
  elseif (!empty($variables['page']['content-bottom-left'])) {
    $variables['classes_array'][] = 'one-content-bottom content-bottom-left';
  }
  elseif (!empty($variables['page']['content-bottom-right'])) {
    $variables['classes_array'][] = 'one-content-bottom content-bottom-right';
  }
  else {
    $variables['classes_array'][] = 'no-content-bottom';
  }
}

/**
*
* Implement hook_preprocess_page()
*
**/
function mdl_preprocess_page(&$variables){
    // Add information about the content bottom left/right content.
  if (drupal_is_front_page()) {
    $variables['title'] = '';
  }
}


/**
*
* Implement theme_breadcrumb()
*
**/
function mdl_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $page_title = drupal_get_title();
  array_push($breadcrumb, $page_title);
  if (!empty($breadcrumb) && drupal_is_front_page() === FALSE) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}


/**
*
* Implement theme_preprocess_search_result()
*
**/
// function mdl_preprocess_search_result(&$variables) {
//   global $language;

//   $result = $variables['result'];
//   $variables['url'] = check_url($result['link']);
//   $variables['title'] = check_plain($result['title']);
//   if (isset($result['language']) && $result['language'] != $language->language && $result['language'] != LANGUAGE_NONE) {
//     $variables['title_attributes_array']['xml:lang'] = $result['language'];
//     $variables['content_attributes_array']['xml:lang'] = $result['language'];
//   }

//   $info = array();
//   if (!empty($result['module'])) {
//     //$info['module'] = check_plain($result['module']);
//   }
//   if (!empty($result['user'])) {
//     //$info['user'] = $result['user'];
//   }
//   if (!empty($result['date'])) {
//     //$info['date'] = format_date($result['date'], 'short');
//   }
//   if (isset($result['extra']) && is_array($result['extra'])) {
//     //$info = array_merge($info, $result['extra']);
//   }
//   // Check for existence. User search does not include snippets.
//   $variables['snippet'] = isset($result['snippet']) ? $result['snippet'] : '';
//   // Provide separated and grouped meta information..
//   //$variables['info_split'] = $info;
//   //$variables['info'] = implode(' - ', $info);
//   $variables['info'] = '';
//   $variables['theme_hook_suggestions'][] = 'search_result__' . $variables['module'];
// }


/**
*
* Implement theme_username()
*
**/
  // function mdl_username($variables) {
  //   global $user;
  //   $user_load = user_load($user->uid);
  //   if (isset($variables['link_path'])) {
  //     // We have a link path, so we should generate a link using l().
  //     // Additional classes may be added as array elements like
  //     // $variables['link_options']['attributes']['class'][] = 'myclass';
  //     if(isset($user_load->field_vendor_id['und'][0]['value']) && strpos($user->mail, 'external') === FALSE) {
  //       $path = 'http://home.intranet.mckinsey.com/profiles/people/' . $user_load->field_vendor_id['und'][0]['value'];
  //       $output =  l($variables['name'] . $variables['extra'], $path, array('absolute' => TRUE, 'attributes' => array('target' => '_blank')));
  //     } else {
  //       $output = l($variables['name'] . $variables['extra'], $variables['link_path'], $variables['link_options']);
  //     }
  //   }
  //   else {
  //     // Modules may have added important attributes so they must be included
  //     // in the output. Additional classes may be added as array elements like
  //     // $variables['attributes_array']['class'][] = 'myclass';
  //     $output = '<span' . drupal_attributes($variables['attributes_array']) . '>' . $variables['name'] . $variables['extra'] . '</span>';
  //   }
  //   return $output;
  // }