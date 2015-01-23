<?php
function smarty_block_mtspecificcategory($args, $content, &$ctx, &$repeat) {
    $localvars = array('category', 'conditional');

    if (!isset($content)) {
        $blog = $ctx->stash('blog');
        $blog_id = $ctx->stash('blog_id');
        $class = $blog->class;

        if ($args['id']) {
            if (isset($args['class']) && $args['class'] === 'folder') {
                $cat = $ctx->mt->db()->fetch_folder($args['id']);
            }
            else {
                $cat = $ctx->mt->db()->fetch_category($args['id']);
            }
        }
        elseif (!isset($args['blog_id']) && $class === 'website') {
        }
        else {
            $terms['blog_id'] = ($args['blog_id']) ? $args['blog_id'] : $blog_id;
            $terms['show_empty'] = 1;
            if ($args['label']) {
                $terms['label'] = explode('/', $args['label']);
            }
            if ($args['basename']) {
                $terms['basename'] = $args['basename'];
            }
            if (isset($args['class']) && $args['class'] === 'folder') {
                $cat = $ctx->mt->db()->fetch_folders($terms);
            }
            else {
                $cat = $ctx->mt->db()->fetch_categories($terms);
            }
        }
        if (isset($cat)) {
            if ($args['label'] && count($terms['label']) > 1) {
                $parent_id;
                for ($i = 0; $i < count($terms['label']); $i++) {
                    foreach ($cat as $obj) {
                        if ($terms['label'][$i] != $obj->label) {
                            continue;
                        }
                        if ($i == 0) {
                            $parent_id = $obj->id;
                        }
                        elseif ($parent_id == $obj->parent) {
                            $parent_id = $obj->id;
                            if ($i == (count($terms['label']) - 1)) {
                                $cat = $obj;
                            }
                        }
                    }
                }
            }
            else if (is_array($cat)) {
                $cat = $cat[0];
            }
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
