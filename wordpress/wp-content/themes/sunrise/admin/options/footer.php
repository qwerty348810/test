<?php
	$options[] = array( "name" => "Footer",
   						"sicon" => "footer.png",
						"type" => "heading");

    $options[] = array( "name" => "Подвал Copyright",
    					"desc" => "Вы можете написать текст в низу сайта об авторских правах",
						"id" => SN."footer_copyright",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Stats",
    					"sicon" => "stats.png",
						"type" => "heading");

    $options[] = array( "name" => "Код статистики",
    					"desc" => "Вы можете использовать Google Analytics или другую статистику",
						"id" => SN."stats",
						"std" => "",
						"type" => "textarea");
?>