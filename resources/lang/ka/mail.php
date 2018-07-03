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
	'mail_footer_content'            => ':appName - გამორჩეული განცხადებები. <br> :appName - როდესაც გინდა რაღაც შეცვალო.',
	
	
	// email_verification
	'email_verification_title'       => '[:appName] E-mail მისამართის დადასტურება',
	'email_verification_action'      => 'დაადასტურეთ თქვენი E-mail მისამართი',
	'email_verification_content_1'   => 'მოგესალმებით :userName !',
	'email_verification_content_2'   => 'დააწკაპეთ ქვემოთ მდებარე ღილაკს, რათა დაადასტუროთ თქვენი E-mail მისამართი.',
	'email_verification_content_3'   => 'თუ ღილაკზე დაწკაპებით არაფერი შეიცვალა, შემდეგი ბმული დააკოპირეთ და ჩასვით თქვენი ბრაუზერის სამისამართო ველში:<br><a href=":verificationLink">:verificationLink</a>',
	'email_verification_content_4'   => '<br><br>თქვენ მიიღეთ ეს წერილი, რადგან ცოტა ხნის წინ დარეგისტრირდით საიტზე :appName ან დაამატეთ ახალი E-mail მისამართი. თუ ეს თქვენ არ გაგიკეთებიათ, ყურადღებას ნუ მიაქცევთ ამ წერილს.',
	'email_verification_content_5'   => '<br><br>საუკეთესო სურვილებით,  <br>:appName',
	
	
	// post_activated
	'post_activated_title'             => 'თქვენი განცხადება აქტივირებულია',
	'post_activated_content_1'         => 'მოგესალმებით, <br><br>თქვენი განცხადება <a href=":postUrl">:title</a> აქტივირებულია.',
	'post_activated_content_2'         => '<br>გამოქვეყნების წინ თქვენს განცხადებას გადახედავს ჩვენი ადმინისტრატორი.',
	'post_activated_content_3'         => '<br><br>თქვენ მიიღეთ ეს წერილი, რადგან ცოტა ხნის წინ განათავსეთ ახალი განცხადება საიტზე :appName. თუ ეს თქვენ არ გაგიკეთებიათ, ყურადღებას ნუ მიაქცევთ ამ წერილს.',
	'post_activated_content_4'         => '<br><br>საუკეთესო სურვილებით,<br> :appName',
	
	// post_reviewed
	'post_reviewed_title'              => 'თქვენი განცხადება გამოქვეყნებულია წარმატებით',
	'post_reviewed_content_1'          => 'მოგესალმებით, <br><br>თქვენი განცხადება <a href=":postUrl">:title</a> გამოქვეყნებულია წარმატებით.',
	'post_reviewed_content_2'          => '<br><br>თქვენ მიიღეთ ეს წერილი, რადგან ცოტა ხნის წინ განათავსეთ ახალი განცხადება საიტზე :appName. თუ ეს თქვენ არ გაგიკეთებიათ, ყურადღებას ნუ მიაქცევთ ამ წერილს.',
	'post_reviewed_content_3'          => '<br><br>საუკეთესო სურვილებით,<br> :appName ',
	
	
	// post_deleted
	'post_deleted_title'               => 'თქვენი განცხადება წარმატებით წაიშალა',
	'post_deleted_content_1'           => 'მოგესალმებით,<br><br>თქვენი განცხადება ":title" წარმატებით წაიშალა.',
	'post_deleted_content_2'           => '<br><br>მადლობა ნდობისთვის. კიდევ შემოგვიარეთ.',
	'post_deleted_content_3'           => '<br><br> :appName',
	'post_deleted_content_4'           => '<br><br><br>PS: ეს არის სისტემის მიერ შექმნილი წერილი. ნუ გასცემთ პასუხს ამ წერილზე.',
	
	
	// post_seller_contacted
	'post_seller_contacted_title'      => 'თქვენი განცხადება ":title" საიტზე  :appName',
	'post_seller_contacted_content_1'  => '<strong>საკონტაქტო ინფორმაცია :</strong><br>სახელი : :name<br>E-mail : :email<br>ტელეფონი : :phone<br><br>გიკავშირდებით თქვენი განცხადების ":title" თაობაზე, რომელიც თქვენ გამოაქვეყნეთ საიტზე <a href=":appUrl">:appName</a> : <a href=":postUrl">:postUrl</a>',
	'post_seller_contacted_content_2'  => '<br><br>PS : მომხმარებელმა, რომელიც დაგიკავშირდათ, არ იცის თქვენი საკონტაქტო E-mail მისამართი, რადგან ჩვენ ის განცხადებაში არ ჩავწერეთ თქვენი უსაფრთხოების გამო.  მომხმარებელმა გამოგიგზავნათ თავისი საკონტაქტო მონაცემები. დაუკავშირდით მას, თუ მისი შეთავაზება თქვენთვის საინტერესოა. ',
	'post_seller_contacted_content_3'  => '<br><br>არ დაგავიწყდეთ ყოველთვის გადაამოწმოთ ინფორმაცია მასზე, ვინც დაგეკონტაქტათ (სახელი, მისამართი, ...), რათა დაზღვეული იყოთ გაუგებრობისგან დავის გაჩენის შემთხვევაში. .<br><br>მოერიდეთ არაადეკვატურ შეთავაზებებს! ნუ გადარიცხავთ ფულს  Western Union-ით ან სხვა სისტემით, თუ დარწმუნებული არ ხართ ამაში.',
	'post_seller_contacted_content_4'  => '<br><br>გმადლობთ ნდობისთვის. იმედი გვაქვს, რომ კიდევ გვესტუმრებით.',
	'post_seller_contacted_content_5'  => '<br><br>საუკეთესო სურვილებით  <br> :appName',
	'post_seller_contacted_content_6'  => '<br><br><br>PS: ეს არის სისტემის მიერ შექმნილი წერილი. ნუ გასცემთ პასუხს ამ წერილზე.',
	
	
	// user_deleted
	'user_deleted_title'             => 'თქვენი ექაუნთი საიტზე :appName გაუქმებულია .' ,
	'user_deleted_content_1'         => 'მოგესალმებით,<br><br>თქვენი ექაუნთი საიტზე <a href=":appUrl">:appName</a>  :now  გაუქმებულია და ყველა ჩანაწერი წაშლილია.',
	'user_deleted_content_2'         => '<br><br>გმადლობთ ნდობისთვის. იმედი გვაქვს, რომ მალე ისევ შემოგვიერთდებით,',
	'user_deleted_content_3'         => '<br><br> :appName',
	'user_deleted_content_4'         => '<br><br><br>PS:  ეს არის სისტემის მიერ შექმნილი წერილი. ნუ გასცემთ პასუხს ამ წერილზე.',
	
	
	// user_activated
	'user_activated_title'           => 'კეთილი იყოს თქვენი მობრძანება საიტზე :appName !',
	'user_activated_content_1'       => ':userName, კეთილი იყოს თქვენი მობრძანება საიტზე :appName  !',
	'user_activated_content_2'       => '<br>თქვენი ექაუნთი აქტივირებულია.',
	'user_activated_content_3'       => '<br><br><strong>შენიშვნა : :appName გირჩევთ:</strong><br><br>1 - ყოველთვის მოერიდეთ ისეთ გამყიდველებს, რომლებიც საშუალებას არ გაძლევენ დაათვალიეროთ ის, რაზეც განცხადებაშია საუბარი,<br>2 - არასდროს გააგზავნოთ ფული Western Union-ით ან სხვა საერთაშორისო სისტემებით.<br><br> თუ თქვენ გაქვთ რაიმე ეჭვი რეკლამის სერიოზულობის შესახებ, დაგვიკავშირდით დაუყოვნებლივ. ჩვენ მაშინვე მოვახდენთ რეაგირებას ამაზე, რათა ვინმე არ აღმოჩნდეს მოტყუებული.',
	'user_activated_content_4'       => '<br><br>თქვენ მიიღეთ ეს წერილი, რადგან ცოტა ხნის წინ დაარეგისტრირეთ ახალი ექაუნთი საიტზე :appName. თუ ეს თქვენ არ გაგიკეთებიათ, ნუ მიაქცევთ ყურადღებას ამ წერილს.',
	'user_activated_content_5'       => '<br><br>საუკეთესო სურვილებით,<br>:appName',
	
	
	// reset_password
	'reset_password_title'           => 'შეცვალეთ თქვენი პაროლი',
	'reset_password_action'          => 'პაროლის შეცვლა',
	'reset_password_content_1'       => 'დაგავიწყდათ პაროლი?',
	'reset_password_content_2'       => 'მიიღეთ ახალი პაროლი.',
	'reset_password_content_3'       => 'თუ თქვენ არ მოგითხოვიათ პაროლის შეცვლა, მაშინ არც არაფერია გასაკეთებელი.',
	'reset_password_content_4'       => '<br><br>საუკეთესო სურვილებით,<br>:appName',
	'reset_password_content_5'       => '<br><br>---<br>თუ ღილაკი "პაროლის შეცვლა" არ რეაგირებს დაწკაპებაზე, დააკოპირეთ ქვემოთ მითითებული ბმული  და ჩასვით ის თქვენი ბრაუზერის სამისამართო ველში:<br> :link',
	
	
	// contact_form
	'contact_form_title'             => 'ახალი შეტყობინება  :appName',
	'contact_form_content'           => ':appName - ახალი შეტყობინება',
	
	
	// post_report_sent
	'post_report_sent_title'           => 'არაკეთილსინდისიერების შესახებ რეპორტი',
	'post_report_sent_content'         => 'არაკეთილსინდისიერების შესახებ - :appName/:countryCode',
	'Post URL'                         => 'პოსტის URL',
	
	
	// post_archived
	'post_archived_title'              => 'თქვენი განცხადება გადაიგზავნა არქივში',
	'post_archived_content_1'          => 'მოგესალმებთ,<br><br>თქვენი განცხადება ":title" გადაიგზავნა ჩვენს არქივში. :appName, :now.',
	'post_archived_content_2'          => '<br><br>თქვენ შეგიძლიათ ეს განცხადება ხელახლა გამოაქვეყნოთ 7 დღის განმავლობაში, ამისთვის გამოიყენეთ ეს ბმული : :repostLink',
	'post_archived_content_3'          => '<br><br>თუ არაფერს მოიმოქმედებთ, თქვენი განცხადება წაიშლება. ვადა: :dateDel.',
	'post_archived_content_4'          => '<br><br>გმადლობთ ნდობისთვის და იმედი გვაქვს, რომ მალე ისევ გვინახულებთ,',
	'post_archived_content_5'          => '<br><br> :appName',
	'post_archived_content_6'          => '<br><br><br>PS: ეს არის სისტემის მიერ შექმნილი წერილი. ნუ გასცემთ პასუხს ამ წერილზე.',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'       => 'თქვენი განცხადება წაიშლება :days დღეში',
	'post_will_be_deleted_content_1'   => 'მოგესალმებით,<br><br>თქვენი განცხადება ":title" წაიშლება :days დღეში საიტიდან :appName.',
	'post_will_be_deleted_content_2'   => '<br><br>თქვენ შეგიძლიათ ხელახლა გამოაქვეყნოთ ეს განცხადება ამ ბმულზე დაწკაპებით : :repostLink',
	'post_will_be_deleted_content_3'   => '<br><br>თუ არაფერს მოიმოქმედებთ, თქვენი განცხადება წაიშლება. ვადა: :dateDel.',
	'post_will_be_deleted_content_4'   => '<br><br>გმადლობთ ნდობისთვის და იმედი გვაქვს, რომ მალე ისევ გვესტუმრებით.',
	'post_will_be_deleted_content_5'   => '<br><br> :appName',
	'post_will_be_deleted_content_6'   => '<br><br><br>PS: ეს არის სისტემის მიერ შექმნილი წერილი. ნუ გასცემთ პასუხს ამ წერილზე.',
	
	
	// post_notification
	'post_notification_title'          => 'ახალი განცხადება',
	'post_notification_content_1'      => 'მოგესალმებით Admin,<br><br>ცოტა ხნის წინ მომხმარებელმა :advertiserName ახალი განცხადება გამოაქვეყნა.',
	'post_notification_content_2'      => '<br>განცხადების სათაურია: :title<br>გამოქვეყნებულია: :now :time',
	'post_notification_content_3'      => '<br><br>საუკეთესო სურვილებით,<br>:appName',
	
	
	// user_notification
	'user_notification_title'        => 'ახალი რეგისტრაცია',
	'user_notification_content_1'    => 'მოგესალმებით Admin,<br><br>ცოტა ხნის წინ რეგისტრაცია გაიარა მომხმარებელმა :name.',
	'user_notification_content_2'    => '<br>რეგისტრირებულია: :now :time<br>Email: <a href="mailto::email">:email</a>',
	'user_notification_content_3'    => '<br><br>საუკეთესო სურვილებით<br>:appName',
	
	
	// payment_sent
	'payment_sent_title'             => 'გმადლობთ გადახდისთვის!',
	'payment_sent_content_1'         => 'მოგესალმებით,<br><br>ჩვენ მივიღეთ თქვენს მიერ გადმორიცხული თანხა. განცხადების სათაურია ":title".',
	'payment_sent_content_2'         => '<br><h1>გმადლობთ ნდობისთვის!</h1>',
	'payment_sent_content_3'         => '<br>საუკეთესო სურვილებით,<br> :appName ',
	
	
	// payment_notification
	'payment_notification_title'     => 'ახალი გადახდა',
	'payment_notification_content_1' => 'მოგესალმებით Admin,<br><br>მომხმარებელმა :advertiserName გადაიხადა საფასური განცხადებისთვის":title".',
	'payment_notification_content_2' => '<br><br><strong>გადახდის დეტალები</strong><br><strong>დანიშნულება:</strong> განცხადება #:adId - :packageName<br><strong>თანხა:</strong> :amount :currency<br><strong>გადახდის მეთოდი:</strong> :paymentMethodName',
	'payment_notification_content_3' => '<br><br>საუკეთესო სურვილებით,<br>:appName',
	
	
	// reply_form
	'reply_form_title'               => 'RE: :postTitle',
	'reply_form_content_1'           => 'მოგესალმებით,<br><br><strong>თქვენ  მიიღეთ პასუხი მომხმარებლისგან: :senderName. პასუხი  იხილეთ ქვემოთ:</strong><br><br>',
	'reply_form_content_2'           => '<br><br>საუკეთესო სურვილებით,<br> :appName',


];
