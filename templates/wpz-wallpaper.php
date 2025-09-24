<?php snippet('wpz-layout', slots: true) ?>
    <?php slot('wpzHeader') ?>
        <style>
            :root{
                --color1:<?= $page->wzcolor1default() ?>;
                --color2:<?= $page->wzcolor2default() ?>;
                --color3:<?= $page->wzcolor3default() ?>;
                --color4:<?= $page->wzcolor4default() ?>;
                --entry-border:<?= $page->wzdefaultborder() ?>px;
            }
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
            .grid-box::before {
                border-radius: <?= $page->wzdefaultradius() ?>px;
                backdrop-filter: blur(<?= $page->wzdefaultblur() ?>px);
            }
            .page-logo{
                top: <?= $page->wzlogopostop() ?>px;
                right: <?= $page->wzlogoposright() ?>px;
                bottom: <?= $page->wzlogoposbottom() ?>px;
                left: <?= $page->wzlogoposleft() ?>px;
            }
            <?= $page->wzstyle() ?>
        </style>
    <?php endslot() ?>
    <?php slot() ?>
        <div id="preview" class="preview <?= $page->wzaspect() ?>">
            <div class="grid-overlay<?php if($page->wzdebug()->isTrue()): ?> grid-overlay-debug<?php endif; ?>">                
                <?php foreach($page->wzentries()->toStructure() as $entry): ?>
                    <?php
                        $styles = [
                        "--C:" . htmlspecialchars($entry->wzcolumn()->value(), ENT_QUOTES) . ";",
                        "--R:" . htmlspecialchars($entry->wzrow()->value(), ENT_QUOTES) . ";",
                        "--N:" . htmlspecialchars($entry->wzwidth()->value(), ENT_QUOTES) . ";",
                        "--M:" . htmlspecialchars($entry->wzheight()->value(), ENT_QUOTES) . ";"
                        ];

                        for ($i = 1; $i <= 8; $i++) {
                        $key = sprintf('wzcolor%02d', $i); // wzcolor01, wzcolor02...
                        if ($entry->{$key}()->isNotEmpty()) {
                            $styles[] = "--color{$i}:" . htmlspecialchars($entry->{$key}()->value(), ENT_QUOTES) . ";";
                        }
                        }

                        $styleAttr = implode(' ', $styles);
                    ?>
                    <div class="grid-box box-style browsers" style="<?= $styleAttr ?>">
                        <div class="wzlabel"><?= $entry->wzlabel() ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php if($file = $page->wzlogo()->toFile()): ?>
            <?php
                // gather values safely (cast to int for pixel values)
                $wztop    = $page->wzlogopostop();
                $wzright  = $page->wzlogoposright();
                $wzbottom = $page->wzlogoposbottom();
                $wzleft   = $page->wzlogoposleft();

                $styles = [];

                // append only when the field is not empty
                if ($wztop->isNotEmpty()) {
                $styles[] = 'top: ' . (int)$wztop->value() . 'px;';
                }
                if ($wzright->isNotEmpty()) {
                $styles[] = 'right: ' . (int)$wzright->value() . 'px;';
                }
                if ($wzbottom->isNotEmpty()) {
                $styles[] = 'bottom: ' . (int)$wzbottom->value() . 'px;';
                }
                if ($wzleft->isNotEmpty()) {
                $styles[] = 'left: ' . (int)$wzleft->value() . 'px;';
                }

                $styleAttr = $styles ? ' style="' . implode(' ', $styles) . '"' : ' style="display:none;"';
            ?>
            <img class="page-logo" <?= $styleAttr ?> src="<?= $file->url() ?>"/>
        <?php endif ?>
        </div>
    <?php endslot() ?>
<?php endsnippet() ?>