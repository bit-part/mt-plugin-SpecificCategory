SpecificCategory Movable Type Plugin
=====================

This is a Movable Type Plugin that provide MTSpecificCategory/MTSpecificFolder Block Tag. MTSpecificCategory/MTSpecificFolder Tag sets a context of specific category/folder.

## Usage

    <mt:SpecificCategory>
      Do something. You can use any category tags.
    </mt:SpecificCategory>

or

    <mt:SpecificFolder>
    Do something. You can use any folder tags.
    </mt:SpecificFolder>

### Modifiers

#### id

The ID of category/folder.

If you set the id, other modifiers are ignored.

### blog_id

The ID of blog.

When you use MTSpecificCategory/MTSpecificFolder tag in website context, you must set the blog_id modifier. If you use MTSpecificCategory/MTSpecificFolder tag without setting the blog_id modifier in blog context, it is automatically set a ID of blog of the current context.

### label

The name of category/folder.

### basename (Only Static Publishing)

The basename of category/folder.

---
MT::Lover::[bit part](http://bit-part.net/)
