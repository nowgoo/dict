dict
====

一个简单快速的词库，用来从一段文本中找出存在于词库的词语。

1. prepare a text file, format:
   word1<tab>value1
   word2<tab>value2
   ...

 2. make a dictionary file:
   SimpleDict::make("text_file_path", "output_dict_path");

 3. play with it!
  $dict = new SimpleDict("dict_path");
  $result = $dict->search("some text here...");

 $result format:
   array(
     'word1' => array('value' => 'value1', 'count' => 'count1'),
     ...
   )
