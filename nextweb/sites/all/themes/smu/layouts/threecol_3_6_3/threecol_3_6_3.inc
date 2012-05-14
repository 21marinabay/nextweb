<?php

function smu_threecol_3_6_3_panels_layouts() {
  $items['threecol_3_6_3'] = array(
    'title' => t('3 Column 3-6-3'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'threecol_3_6_3.png',
    'theme' => 'threecol_3_6_3',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'third' => t('Third'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}
