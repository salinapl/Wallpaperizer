<?php snippet('wpz-layout', slots: true) ?>
    <?php slot('wpzHeader') ?>
        <style>
            .preview {
                <?php if($file = $page->wzbackground()->toFile()): ?>
                background: url('<?= $file->url() ?>') center/cover no-repeat;
                <?php endif ?>
            }
            .page-logo {
                <?php if($file = $page->wzlogo()->toFile()): ?>
                background: url('<?= $file->url() ?>') no-repeat;
                <?php endif ?>
            }
            <?= $page->wzstyle() ?>
        </style>
    <?php endslot() ?>
    <?php slot() ?>
        <div class="preview <?= $page->wzaspect() ?>">
            <div class="grid-overlay<?php if($page->wzdebug()->isTrue()): ?> grid-overlay-debug<?php endif; ?>">                
                <?php foreach($page->wzentries()->toStructure() as $entry): ?>
                    <!-- grid boxes are just children placed into the CSS grid -->
                    <div class="grid-box box-style browsers" style="--C:<?= $entry->wzcolumn() ?>; --R:<?= $entry->wzrow() ?>; --N:<?= $entry->wzwidth() ?>; --M:<?= $entry->wzheight() ?>; --color01:<?= $entry->wzcolor01() ?>; --color02:<?= $entry->wzcolor02() ?>; --color03:<?= $entry->wzcolor03() ?>; --color04:<?= $entry->wzcolor04() ?>;">
                        <div class="wzlabel"><?= $entry->wzlabel() ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="page-logo"></div>
        </div>
    <?php endslot() ?>
<?php endsnippet() ?>
