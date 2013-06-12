<?php
function smarty_block_mtspecificcategory($args, $content, &$ctx, &$repeat) {
    $localvars = array('category', 'conditional');

    if (!isset($content)) {
        $blog = $ctx->stash('blog');
        $blog_id = $ctx->stash('blog_id');
        $class = $blog->class;

        if ($args['id']) {
            $cat = $ctx->mt->db()->fetch_category($args['id']);
        }
        elseif (!isset($args['blog_id']) && $class === 'website') {
        }
        else {
            $terms['blog_id'] = ($args['blog_id']) ? $args['blog_id'] : $blog_id;
            if ($args['label']) {
                $terms['label'] = $args['label'];
            }
            if ($args['basename']) {
                $terms['basename'] = $args['basename'];
            }
            $cat = $ctx->mt->db()->fetch_categories($terms);
            if (isset($cat)) {
                $cat = $cat[0];
            }
        }
        if (isset($cat)) {
            $ctx->localize($localvars);
            $ctx->stash('conditional', 1);
            $ctx->stash('category', $cat);
        }
        else {
            $repeat = false;
            return '';
        }
    }
    else {
        $ctx->restore($localvars);
    }
    return $content;
}
?>
