<?php
/**
 * @file views-view-summary-unformatted.tpl.php
 * Default simple view template to display a group of summary lines
 *
 * This wraps items in a span if set to inline, or a div if not.
 *
 * @ingroup views_templates
 */

/* 
Original link (with strtolower)
    <a href="<?php print strtolower($row->url); ?>"<?php print !empty($row_classes[$id]) ? ' class="' . $row_classes[$id] . '"' : ''; ?>><?php print $row->link; ?></a>
*/

?>
<?php foreach ($rows as $id => $row): ?>
  <?php print (!empty($options['inline']) ? '<span' : '<div') . ' class="views-summary views-summary-unformatted">'; ?>
    <?php if (!empty($row->separator)) { print $row->separator; } ?>
    <?php

      $mylink = $row->link;
      if (!empty($options['count'])) { $mylink .= ' (' . $row->count . ')'; }

      $myurl = $row->url;

      if (preg_match('#^/[A-z0-9-_]+/\d{6}$#', $myurl)) {
        $myurlpieces = explode('/', $myurl);
        $myyear = substr($myurlpieces[2], 0, 4);
        $mymonth = substr($myurlpieces[2], 4, 2);
        $myurl = '/' . $myurlpieces[1] . '/'. $myyear . '/' . $mymonth;
      } elseif (preg_match('#^/[A-z0-9-_]+/\d{4}-\d{2}$#', $myurl)) {
        $myurlpieces = explode('/', $myurl);
        $myyear = substr($myurlpieces[2], 0, 4);
        $mymonth = substr($myurlpieces[2], 5, 2);
        $myurl = '/' . $myurlpieces[1] . '/'. $myyear . '/' . $mymonth;
      }

    ?>
    <?php print l($mylink, substr(strtolower($myurl), 1)); ?>
  <?php print !empty($options['inline']) ? '</span>' : '</div>'; ?>
<?php endforeach; ?>