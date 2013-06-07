SpecificCategory Movable Type Plugin
=====================

This is a Movable Type Plugin that provide MTSpecificCategory Block Tag. MTSpecificCategory Tag sets a context of specific category.

## Usage

    <mt:SpecificCategory>
      Do something. You can use any category tags.
    </mt:SpecificCategory>

### Modifiers

#### id

The ID of category.

If you set the id, other modifiers are ignored.

### blog_id

The ID of blog.

When you use MTSpecificCategory tag in website context, you must set the blog_id modifier. If you use MTSpecificCategory tag without setting the blog_id modifier in blog context, it is automatically set a ID of blog of the current context.

### label

The name of cateogry.

### basename

The basename of cateogry.

---
MT::Lover::[bit part](http://bit-part.net/)