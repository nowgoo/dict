SimpleDict
==========

这是一个简单快速的词库工具，用来从一段文本中找出存在于词库的词语。

特点
----

> - **简单**：纯 PHP 实现，无需安装扩展。
> - **快速**：查找耗时跟词库大小关系不大（我的小破本上查询 40 万的词库轻轻松松），不会一次性加载整个词库，使用时内存占用小（就是生成词库的时候有点费内存）。

使用方法
--------

**准备文本格式的词库**

首先准备一个文本文件，每个词占一行。格式：
> `词语<tab>值`

**生成 SimpleDict 专用词库**

    SimpleDict::make("text_file_path", "output_dict_path");

**使用**

    $dict = new SimpleDict("dict_path");
    $result = $dict->search("some text here...");
    
    /* $result 的格式：
    array(
      'word1' => array('value' => 'value1', 'count' => 'count1'),
      ...
    )*/

