<?php 
/**
 * 函数库文件
 */
// 包含初始化文件

// 敏感词库文件
	// require "include/fliter_words.php";
	
/**
 * 敏感词过滤库
 * @param string $content  需要过滤的内容
 * @param string $words  过滤改变的内容
 * @param str_ireplace
 */
	function fliter_words($content,$words)
	{
		$content=str_ireplace($words,"",$content);
		// " " 替换的内容
		return $content;
	}

/**
 * 截取字符串
 */
	
?>