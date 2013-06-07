<?php
function smarty_block_mtspecificcategory ($args, $content, &$ctx, &$repeat) {
    # ブログの取得
    $blog = $ctx->stash('blog');
    # エントリーの取得
    $entry = $ctx->stash('entry');
    # モディファイアの取得
    $hoge = $args['hoge'];
    return $content;
}
?>
