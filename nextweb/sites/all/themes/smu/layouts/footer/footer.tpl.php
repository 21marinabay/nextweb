<div class="panel-display p-footer clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
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
      <div class="panel-panel p-middle-first grid-4 alpha">
        <div class="inside"><?php print $content['first']; ?></div>
      </div>
      <div class="panel-panel p-middle-second grid-4">
        <div class="inside"><?php print $content['second']; ?></div>
      </div>
      <div class="panel-panel p-middle-third grid-4 omega">
        <div class="inside"><?php print $content['third']; ?></div>
      </div>
    </div>
    <div class="p-middle grid-12 alpha omega">
      <div class="panel-panel p-middle-fourth grid-4 alpha">
        <div class="inside"><?php print $content['fourth']; ?></div>
      </div>
      <div class="panel-panel p-middle-fifth grid-4">
        <div class="inside"><?php print $content['fifth']; ?></div>
      </div>
      <div class="panel-panel p-middle-sixth grid-4 omega">
        <div class="inside"><?php print $content['sixth']; ?></div>
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
