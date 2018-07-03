<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Emails Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used by the Mail notifications.
	|
	*/
	
	// mail_footer
	'mail_footer_content'            => ':appName, продавайте и покупайте с нами. Просто, быстро и эффективно.',
	
	
	// email_verification
	'email_verification_title'       => '[:appName] Пожалуйста подтвердите ваш адрес электронной почты.',
	'email_verification_action'      => 'Подтвердите адрес электронной почты',
	'email_verification_content_1'   => 'Здравствуйте :userName !',
	'email_verification_content_2'   => 'Нажмите кнопку ниже, чтобы подтвердить свой адрес электронной почты..',
	'email_verification_content_3'   => 'Кнопка не работает? Вставьте следующую ссылку в свой браузер.:<br><a href=":verificationLink">:verificationLink</a>.',
	'email_verification_content_4'   => '<br><br>You’re Вы получили это письмо, потому что недавно вы создали новый:appName аккаунт или добавили новый адрес электронной почты. Если это не вы, пожалуйста, проигнорируйте это письмо.',
	'email_verification_content_5'   => '<br><br>Kind С уважением,<br>The :appName Команда',
	
	
	// post_activated
	'post_activated_title'             => 'Ваше объявление активировано',
	'post_activated_content_1'         => 'Здравствуйте, <br><br>Ваше объявление <a href=":postUrl">:title</a> было активировано.',
	'post_activated_content_2'         => '<br>Вскоре оно будет рассмотрено одним из наших администраторов для его публикации на сайте.',
	'post_activated_content_3'         => '<br><br>Вы получили это письмо, потому что недавно разместили новое объявление на :appName. Если это не вы, пожалуйста, проигнорируйте это письмо.',
	'post_activated_content_4'         => '<br><br>Kind С уважением,<br>The :appName Команда',
	
	// post_reviewed
	'post_reviewed_title'              => 'Ваше объявление сейчас в сети',
	'post_reviewed_content_1'          => 'Здравствуйте, <br><br>Ваше объявление <a href=":postUrl">:title</a> уже в сети.',
	'post_reviewed_content_2'          => '<br><br>Вы получили это письмо, потому что недавно разместили новое объявление на :appName. Если это не вы, пожалуйста, проигнорируйте это письмо.',
	'post_reviewed_content_3'          => '<br><br>Kind С уважением,<br>The :appName Команда',
	
	
	// post_deleted
	'post_deleted_title'               => 'Ваше объявление было удалено',
	'post_deleted_content_1'           => 'Здравствуйте,<br><br>Ваше объявление ":title"Было удалено с <a href=":appUrl">:appName</a> в :now.',
	'post_deleted_content_2'           => '<br><br>Спасибо за ваше доверие и скоро увидимся,',
	'post_deleted_content_3'           => '<br><br>Ваша:appName Команда',
	'post_deleted_content_4'           => '<br><br><br>PS: Это автоматическая электронная почта, пожалуйста, не отвечайте.',
	
	
	// post_seller_contacted
	'post_seller_contacted_title'      => 'Ваше объявление ":title" на :appName',
	'post_seller_contacted_content_1'  => '<strong>Контактная информация :</strong><br>Имя : :name<br>Электронный адрес : :email<br>Номер телефона : :phone<br><br>Это письмо было отправлено вам по поводу объявления ":title" you filed on <a href=":appUrl">:appName</a> : <a href=":postUrl">:postUrl</a>',
	'post_seller_contacted_content_2'  => '<br><br>PS : Лицо, связавшееся с вами, не знает вашу электронную почту, поскольку вы не будете отвечать.',
	'post_seller_contacted_content_3'  => '<br><br>Не забудьте всегда проверять информацию своего контактного лица (имя, адрес, ...), чтобы убедиться, что у вас есть контакт в случае открытия спора. По умолчанию, выберите поставку товара лично в руки.<br><br>Остерегайтесь заманчивых предложений! Будьте осторожны с запросами из-за рубежа, когда у вас есть только контактный адрес. Банковский перевод, предложенный Western Union или MoneyGram, может быть несуществующим.',
	'post_seller_contacted_content_4'  => '<br><br>Спасибо за ваше доверие и скоро увидимся,',
	'post_seller_contacted_content_5'  => '<br><br>Ваша :appName Команда',
	'post_seller_contacted_content_6'  => '<br><br><br>PS: Это автоматическая электронная почта, пожалуйста, не отвечайте.',
	
	
	// user_deleted
	'user_deleted_title'             => 'Ваша учетная запись была удалена :appName',
	'user_deleted_content_1'         => 'Здравствуйте,<br><br>Ваша учетная запись была удалена с <a href=":appUrl">:appName</a> at :now.',
	'user_deleted_content_2'         => '<br><br>Спасибо за ваше доверие и скоро увидимся,',
	'user_deleted_content_3'         => '<br><br>Ваша :appName Команда',
	'user_deleted_content_4'         => '<br><br><br>PS: Это автоматическая электронная почта, пожалуйста, не отвечайте.',
	
	
	// user_activated
	'user_activated_title'           => 'Добро пожаловать :appName !',
	'user_activated_content_1'       => 'Добро пожаловать :appName :userName !',
	'user_activated_content_2'       => '<br>Ваша учетная запись активирована.',
	'user_activated_content_3'       => '<br><br><strong>Помните : :appName Наша команда рекомендует чтоб Вы:</strong><br><br>1 - Всегда остерегались рекламодателей, которые отказываются показывать вам хорошее предложение для продажи или аренды,<br>2 -Никогда не отправляйте деньги через Western Union или другой международный мандат.<br><br>Если у вас есть сомнения относительно серьезности рекламодателя, немедленно свяжитесь с нами. Мы сделаем все возможное чтоб защитить вас чтоб вы не стали жертвой обмана.',
	'user_activated_content_4'       => '<br><br>Вы получаете это письмо, потому что недавно создали новый:appName акаунт. Если это не вы, пожалуйста, проигнорируйте это письмо.',
	'user_activated_content_5'       => '<br><br>С уважением,<br>Ваша :appName Команда',
	
	
	// reset_password
	'reset_password_title'           => 'Сбросить пароль',
	'reset_password_action'          => 'Сбросить пароль',
	'reset_password_content_1'       => 'Забыли пароль?',
	'reset_password_content_2'       => 'Создайте новый пароль.',
	'reset_password_content_3'       => 'Если вы не запросили сброс пароля, никаких дополнительных действий не требуется.',
	'reset_password_content_4'       => '<br><br>С Уважением,<br>:appName',
	'reset_password_content_5'       => '<br><br>---<br>Если у вас возникли проблемы с нажатием кнопки «Сбросить пароль», скопируйте и вставьте URL-адрес ниже в свой веб-браузер:<br> :link',
	
	
	// contact_form
	'contact_form_title'             => 'Новое сообщение от :appName',
	'contact_form_content'           => ':appName - Новое сообщение',
	
	
	// post_report_sent
	'post_report_sent_title'           => 'Новый отчет о злоупотреблениях',
	'post_report_sent_content'         => 'Новый отчет о злоупотреблениях - :appName/:countryCode',
	'Post URL'                         => 'Вставьте URL',
	
	
	// post_archived
	'post_archived_title'              => 'Ваше объявление было заархивировано',
	'post_archived_content_1'          => 'Здравствуйте,<br><br>Ваше объявление ":title" было заархивировано с :appName в :now.',
	'post_archived_content_2'          => '<br><br>Вы можете отправить его, нажав здесь. : <a href=":repostLink">:repostLink</a>',
	'post_archived_content_3'          => '<br><br>Если вы ничего не сделаете, ваше объявление будет удалено навсегда :dateDel.',
	'post_archived_content_4'          => '<br><br>Спасибо за ваше доверие и скоро увидимся,',
	'post_archived_content_5'          => '<br><br>Ваша :appName Команда',
	'post_archived_content_6'          => '<br><br><br>ПС: Это автоматическая электронная почта, пожалуйста, не отвечайте.',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'       => 'Ваше объявление будет удалено через :days days',
	'post_will_be_deleted_content_1'   => 'Здравствуйте,<br><br>Ваше объявление ":title" будет удалено через :days days с :appName.',
	'post_will_be_deleted_content_2'   => '<br><br>Вы можете отправить его, нажав здесь. : <a href=":repostLink">:repostLink</a>',
	'post_will_be_deleted_content_3'   => '<br><br>Если вы ничего не сделаете, ваше объявление будет удалено навсегда :dateDel.',
	'post_will_be_deleted_content_4'   => '<br><br>Спасибо за ваше доверие и скоро увидимся,',
	'post_will_be_deleted_content_5'   => '<br><br>Ваша :appName Команда',
	'post_will_be_deleted_content_6'   => '<br><br><br>PS: Это автоматическая электронная почта, пожалуйста, не отвечайте.',
	
	
	// post_notification
	'post_notification_title'          => 'Новое объявление опубликовано',
	'post_notification_content_1'      => 'Привет, Admin,<br><br>Пользователь :advertiserName только что опубликовал новое объявление.',
	'post_notification_content_2'      => '<br>Название объявления: :title<br>опубликовано на: :now at :time',
	'post_notification_content_3'      => '<br><br>С Уважением,<br>Ваша :appName Команда',
	
	
	// user_notification
	'user_notification_title'        => 'Регистрация нового пользователя',
	'user_notification_content_1'    => 'Привет, Admin,<br><br>:name только что зарегистрировался.',
	'user_notification_content_2'    => '<br>Зарегистрировано: :now по :time<br>Электронному адресу: <a href="mailto::email">:email</a>',
	'user_notification_content_3'    => '<br><br>С Уважением,<br>Ваша :appName Команда',
	
	
	// payment_sent
	'payment_sent_title'             => 'Спасибо за ваш платеж!',
	'payment_sent_content_1'         => 'Здравствуйте,<br><br>Мы получили оплату за объявление ":title".',
	'payment_sent_content_2'         => '<br><h1>Спасибо !</h1>',
	'payment_sent_content_3'         => '<br>С Уважением,<br>Ваша :appName Команда',
	
	
	// payment_notification
	'payment_notification_title'     => 'Новый платеж отправлен',
	'payment_notification_content_1' => 'Привет, Admin,<br><br>Пользователь :advertiserName только что заплатил пакет за ее объявление ":title".',
	'payment_notification_content_2' => '<br><br><strong>ДЕТАЛИ ОПЛАТЫ</strong><br><strong>Причина оплаты:</strong> Объявление #:adId - :packageName<br><strong>Сумма:</strong> :amount :currency<br><strong>Способ оплаты:</strong> :paymentMethodName',
	'payment_notification_content_3' => '<br><br>С Уважением,<br>Ваша :appName Команда',
	
	
	// reply_form
	'reply_form_title'               => ':subject',
	'reply_form_content_1'           => 'Здравствуйте,<br><br><strong>Вы получили ответ от: :senderName. Смотрите Сообщение ниже:</strong><br><br>',
	'reply_form_content_2'           => '<br><br>С Уважением,<br>Ваша :appName Команда',


];
