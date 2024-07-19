<div class="custom-link-p">
  <?php foreach ($block->links()->toBlocks() as $link) : ?>
    <?php snippet('blocks/custom-link', ['block' => $link]); ?>
  <?php endforeach; ?>
</div>
