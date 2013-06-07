package SpecificCategory::Tags;
use strict;
use MT;
use MT::Category;

# Block Tags
sub hdlr_specificcategory {
    my ($ctx, $args, $cond) = @_;

    my $blog = $ctx->stash('blog');
    my $blog_id = $ctx->stash('blog_id');
    my $class = $blog->{column_values}{class};

    my (%terms, %args);

    if ($args->{id}) {
        $terms{id} = $args->{id};
    } elsif (!defined $args->{blog_id} and $class eq 'website') {
        return $ctx->error(MT->translate('MTSpecificCategory must be used with blog_id modifier in a website context.'));
    } else {
        $terms{blog_id} = ($args->{blog_id}) ? $args->{blog_id} : $blog_id;
        $terms{label} = $args->{label} if $args->{label};
        $terms{basename} = $args->{basename} if $args->{basename};
    }

    my $cat = MT::Category->load(\%terms, {limit => 1})
        or return MT::Template::Context::_hdlr_pass_tokens_else(@_);

    my $res = '';
    my $tokens = $ctx->stash('tokens');
    my $builder = $ctx->stash('builder');

    local $ctx->{__stash}{category} = $cat;
    local $ctx->{__stash}{blog_id} = $cat->blog_id;
    local $ctx->{__stash}{blog}    = MT::Blog->load( $cat->blog_id );
    defined(my $out = $builder->build($ctx, $tokens, $cond))
        or return $ctx->error($builder->errstr);
    $res .= $out;
    return $res;
}

1;