<?php
function joomlaposition_17() {
    $document = JFactory::getDocument();
    $view = $document->view;
    $isPreview  = $GLOBALS['theme_settings']['is_preview'];
    if (isset($GLOBALS['isModuleContentExists']) && false == $GLOBALS['isModuleContentExists'])
        $GLOBALS['isModuleContentExists'] = $view->containsModules('dd-top-3') ? true : false;
?>
    <?php if ($isPreview || $view->containsModules('dd-top-3')) : ?>

    <?php if ($isPreview && !$view->containsModules('dd-top-3')) : ?>
    <!-- empty::begin -->
    <?php endif; ?>
    <div class=" bd-joomlaposition-17 clearfix" <?php echo buildDataPositionAttr('dd-top-3'); ?>>
        <?php echo $view->position('dd-top-3', 'block%joomlaposition_block_17', '17'); ?>
    </div>
    <?php if ($isPreview && !$view->containsModules('dd-top-3')) : ?>
    <!-- empty::end -->
    <?php endif; ?>
    <?php endif; ?>
<?php
}