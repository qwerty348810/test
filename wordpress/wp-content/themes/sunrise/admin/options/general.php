<?php
$options[] = array( "name" => "General",
						"sicon" => "advancedsettings.png",
                        "type" => "heading");


    $options[] = array( "name" => "Логотип Вашей компании",
                        "desc" => "Вы можете использовать свой собственный логотип компании. Нажмите кнопку 'Загрузить', чтобы и загрузить свой ​​логотип.",
                        "id" => SN."clogo",
                        "std" => "$blogpath/img/logo.png",
                        "type" => "upload");

	$options[] = array( "name" => "Текст в качестве логотипа",
                        "desc" => "Если вы не загрузить свой логотип, этот текст будет отображаться в это место.",
                        "id" => SN."clogo_text",
                        "std" => "Sunrise",
                        "type" => "text");


	$options[] = array( "name" => "Иконка сайта - Favicon",
                        "desc" => "Вы можете использовать свой ​​собственный значок. Нажмите кнопку 'Загрузить', чтобы и загрузить иконку сайта.",
                        "id" => SN."custom_shortcut_favicon",
                        "std" => "",
                        "type" => "upload");
     

?>