<?php
require_once('block.mtspecificcategory.php');
function smarty_block_mtspecificfolder($args, $content, &$ctx, &$repeat) {
    $args['class'] = 'folder';
    return smarty_block_mtspecificcategory($args, $content, $ctx, $repeat);
}
?>
