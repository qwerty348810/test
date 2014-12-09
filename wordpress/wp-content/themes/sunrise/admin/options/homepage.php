<?php
      $options[] = array( "name" => "Homepage",
      					"sicon" => "user-home.png",
                        "type" => "heading");


      $options[] = array( "name" => "Картинка в шапке",
                        "desc" => "Изображение заголовка, который появится на главной странице",
                        "id" => SN."homebackground",
                        "std" => "$blogpath/img/homebackground.jpg",
                        "type" => "upload");

      $options[] = array( "name" => "Текст приветствия",
                        "id" => SN."intro_text",
                        "std" => "<h2>Добро пожаловать в наш бар!</h2><p>Место где вы хотите быть с друзьями</p>",
                        "type" => "textarea");

      $options[] = array( "name" => "Текст заголовка для Лучшеих записей",
                        "id" => SN."featured_header_text",
                        "std" => "Популярное",
                        "type" => "text");


      $options[] = array( "name" => "Показывать Boxes",
                        "id" => SN."show_infoboxes",
                        "desc" => "Включить Boxes",
                        "type" => "checkbox",
                        "std" => 1,
                        "class" => "tiny", //mini, tiny, small
                        "options" => array('1')
                        );

      $options[] = array( "name" => "Infobox Изображение 1",
                        "desc" => "Infobox изображения на главной странице",
                        "id" => SN."infobox_image_1",
                        "std" => "$blogpath/img/ico_coffee.png",
                        "type" => "upload");
      $options[] = array( "name" => "Infobox Текст 1",
                        "id" => SN."infobox_text_1",
                        "std" => "<h3>Импортное кофе</h3><p>Попробуйте различные сорта импортного кофе.</p> ",
                        "type" => "textarea");
      $options[] = array( "name" => "Infobox Изображение 2",
                        "desc" => "Infobox изображения на главной странице",
                        "id" => SN."infobox_image_2",
                        "std" => "$blogpath/img/ico_music.png",
                        "type" => "upload");
       $options[] = array( "name" => "Infobox Текст 2",
                        "id" => SN."infobox_text_2",
                        "std" => "<h3>Отличная Музыка </h3> <p>Наши ди-джеи будут развлекать вас, как никогда раньше.</p> ",
                        "type" => "textarea");
      $options[] = array( "name" => "Infobox Изображение 3",
                        "desc" => "Infobox изображения на главной странице",
                        "id" => SN."infobox_image_3",
                        "std" => "$blogpath/img/ico_food.png",
                        "type" => "upload");
       $options[] = array( "name" => "Infobox Текст 3",
                        "id" => SN."infobox_text_3",
                        "std" => "<h3>Прекрасная Кухня</h3><p>У нас вы можете найти все популярные виды блюд, и попробовать фирменные.</p>",
                        "type" => "textarea");
      $options[] = array( "name" => "Infobox Изображение 4",
                        "desc" => "Infobox изображения на главной странице",
                        "id" => SN."infobox_image_4",
                        "std" => "$blogpath/img/ico_service.png",
                        "type" => "upload");
       $options[] = array( "name" => "Infobox Текст 4",
                        "id" => SN."infobox_text_4",
                        "std" => "<h3>Хороший персонал</h3><p>Вы никогда не забудите нашу улыбку и профессиональное отношение.</p>",
                        "type" => "textarea");


?>