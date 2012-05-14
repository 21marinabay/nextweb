<div class="panel-display p-threecol-3-6-3 clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
  <div class="p-top-wrapper">
    <div class="p-top grid-12 alpha omega">
      <div class="panel-panel">
        <div class="inside"><?php print $content['top']; ?></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="p-middle-wrapper">
    <div class="p-middle grid-12 alpha omega">
      <div class="panel-panel grid-3 alpha">
        <div class="inside"><?php print $content['first']; ?></div>
      </div>
      <div class="panel-panel grid-6">
        <div class="inside"><?php print $content['second']; ?></div>
      </div>
      <div class="panel-panel grid-3 omega">
        <div class="inside"><?php print $content['third']; ?></div>
      </div>
    </div>
  </div>
  <?php if ($content['bottom']): ?>
  <div class="p-bottom-wrapper">
    <div class="p-bottom grid-12 alpha omega">
      <div class="panel-panel">
        <div class="inside"><?php print $content['bottom']; ?></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>
