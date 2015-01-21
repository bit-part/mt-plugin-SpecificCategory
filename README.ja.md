SpecificCategory プラグイン
=====================

特定のカテゴリ/フォルダのコンテキストをセットする MTSpecificCategory/MTSpecificFolder ブロックタグを提供する Movable Type のプラグインです。

## 使い方

    <mt:SpecificCategory>
      Do something. You can use any category tags.
    </mt:SpecificCategory>

または

    <mt:SpecificFolder>
    Do something. You can use any folder tags.
    </mt:SpecificFolder>

### モディファイア

#### id

カテゴリ/フォルダの ID をセットします。  
このモディファイアをセットした場合は他のモディファイアは不要です。

### blog_id

ブログの ID をセットします。

MTSpecificCategory/MTSpecificFolder タグをウェブサイトのコンテキストで使うときは、必ず blog_id モディファイアをセットする必要があります。

もし blog_id モディファイアをセットせずに MTSpecificCategory/MTSpecificFolder タグを ブログのコンテキストで使った場合は、そのコンテキストのブログ ID が自動的に blog_id モディファイアにセットされます。

### label

カテゴリ/フォルダの名前をセットします。

### basename（スタティック専用）

カテゴリ/フォルダのベースネームをセットします。

---
MT::Lover::[bit part](http://bit-part.net/)
