<div class="panel-display p-onecol-nogrid clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
  <div class="p-top-wrapper">
    <div class="p-top">
      <div class="panel-panel">
        <div class="inside"><?php print $content['top']; ?></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="p-middle-wrapper">
    <div class="p-middle">
      <div class="panel-panel">
        <div class="inside"><?php print $content['first']; ?></div>
      </div>
    </div>
  </div>
  <?php if ($content['bottom']): ?>
  <div class="p-bottom-wrapper">
    <div class="p-bottom">
      <div class="panel-panel">
        <div class="inside"><?php print $content['bottom']; ?></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>
