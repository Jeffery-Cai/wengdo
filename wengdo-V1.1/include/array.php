<?php 
/**
 * 数组库文件
 */
	// guestbook 留言版  - 数组
	$dz_guestbook=array(
		array(
			"guestbook_id"=>"1",
			"guestbook_name"=>"1213",
			"guestbook_title"=>"",
			"guestbook_email"=>"123",
			"guestbook_content"=>"dsad",
			"guestbook_addtime"=>date('Y-m-d')
		),
		array(
			"guestbook_id"=>"2",
			"guestbook_name"=>"侠客 ",
			"guestbook_title"=>"",
			"guestbook_email"=>"12312312@qq.com",
			"guestbook_content"=>"世界上一成不变的东西，只有任何事物都是在不断变化的这条真理。世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的这条真理",
			"guestbook_addtime"=>"2014-10-10"
		),
		array(
			"guestbook_id"=>"3",
			"guestbook_name"=>"剑客 ",
			"guestbook_title"=>"",
			"guestbook_email"=>"12312321@qq.com",
			"guestbook_content"=>"世界上一成不变的东西，只有任何事物都是在不断变化的这条真理。世界上一成不变的东西，只有任何事物都是在不断变化的这条真理。世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的这条真理。世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的这条真理世界上一成不变的东西，只有任何事物都是在不断变化的",
			"guestbook_addtime"=>"2014-10-10"
		),
	);

	//新闻中心页面  - 数组
	$news=array(
		array(
			"news_id"=>"1",
			"news_title"=>"10岁",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"439",
			),
		array(
			"news_id"=>"2",
			"news_title"=>"探究黑洞",
			"news_author"=>"牛顿",
			"news_date"=>"2011-04-04",
			"news_click"=>"111",
			),
		array(
			"news_id"=>"3",
			"news_title"=>"跟我比",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"139",
			),
		array(
			"news_id"=>"4",
			"news_title"=>"你们都是",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"739",
			),
		array(
			"news_id"=>"5",
			"news_title"=>"原始人",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"639",
			),
		array(
			"news_id"=>"6",
			"news_title"=>"探究黑洞",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"539",
			),
		array(
			"news_id"=>"7",
			"news_title"=>"探究黑洞",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"439",
			),
		array(
			"news_id"=>"8",
			"news_title"=>"探究黑洞",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"339",
			),
		array(
			"news_id"=>"9",
			"news_title"=>"探究黑洞",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"239",
			),
		array(
			"news_id"=>"10",
			"news_title"=>"探究黑洞",
			"news_author"=>"霍金",
			"news_date"=>"2015-06-01",
			"news_click"=>"139",
			),
		);

	$news_slice=array_slice($news,0,7);
	// $news_slice=array_multisort($news);
	// 截取
	//0代表下标为0开始，后面最后五个，到了末尾的时候就不取了
	// var_dump($news_slice);

?>