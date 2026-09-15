<?php
/* Summary panel beside a text band. The page defines $summaries at the top
   and sets $summary to one entry before requiring this file:
     ['label' => 'Hizmet özeti',
      'blocks' => [['title' => 'Kapsam', 'items' => ['...', '...']], ...]]
   Every block is a list, so the markup never branches. Values are plain
   text; they are escaped here. Adding a page means editing that data, not
   this file and not the CSS. */
?>
<aside class="summary" aria-label="<?= e($summary['label']) ?>">
<?php foreach ($summary['blocks'] as $block): ?>
        <div class="summary__block">
          <h3 class="summary__title"><?= e($block['title']) ?></h3>
          <ul class="summary__list">
<?php foreach ($block['items'] as $item): ?>
            <li><?= e($item) ?></li>
<?php endforeach; ?>
          </ul>
        </div>
<?php endforeach; ?>
      </aside>
