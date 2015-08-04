<?php
/*
 * Demo
 *
 * @link https://github.com/MyKings/dict
 * @author MyKings <xsseroot@gmail.com> 
 *
 */

# 引入关键词过滤插件
require './SimpleDict.php';

# 要转换的 text 文本库, 注意文件格式一定要是 utf-8。
$inputFile = './badword.txt';

# 转换完的二进制词库
$ouputDict = './badword.bin';

# 生成二进制词库
SimpleDict::make($inputFile, $ouputDict);

# 生成一个
$dict = new SimpleDict($ouputDict);

# 需要检测的字符串
$test_str = "阿扁推翻爱液横流,成人电影";

# 检测出来的返回值
$result = $dict->search($test_str);

# 打印检测结果
print_r($result);

?>
