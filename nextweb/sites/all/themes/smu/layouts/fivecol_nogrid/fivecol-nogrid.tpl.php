<div class="panel-display p-fivecol-nogrid clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
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
      <div class="panel-panel">
        <div class="inside"><?php print $content['second']; ?></div>
      </div>
      <div class="panel-panel">
        <div class="inside"><?php print $content['third']; ?></div>
      </div>
      <div class="panel-panel">
        <div class="inside"><?php print $content['fourth']; ?></div>
      </div>
      <div class="panel-panel">
        <div class="inside"><?php print $content['fifth']; ?></div>
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