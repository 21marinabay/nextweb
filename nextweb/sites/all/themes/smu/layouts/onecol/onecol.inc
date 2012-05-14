<?php

function smu_onecol_panels_layouts() {
  $items['onecol'] = array(
    'title' => t('1 Column'),
    'category' => t('SMU: 12 Column Grid'),
    'icon' => 'onecol.png',
    'theme' => 'onecol',
    'admin css' => '../panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'bottom' => t('Bottom')
    ),
  );

  return $items;
}

