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
	'mail_footer_content'            => ':appName, ซื้อและขายใกล้บ้านคุณ ง่าย สะดวกและรวดเร็ว',
	
	
	// email_verification
	'email_verification_title'       => '[:appName] กรุณายืนยันที่อยู่อีเมลของคุณด้วย',
	'email_verification_action'      => 'ยืนยันที่อยู่อีเมล',
	'email_verification_content_1'   => 'สวัสดี คุณ :userName !',
	'email_verification_content_2'   => 'คลิกปุ่มข้างล่างนี้เพื่อยืนยันอีเมลของคุณ',
	'email_verification_content_3'   => 'ปุ่มไม่ทำงาน? วางลิงค์ด้านล่างนี้บนเว็บไซต์ของคุณ:<br><a href=":verificationLink">:verificationLink</a>.',
	'email_verification_content_4'   => '<br><br>คุณได้รับอีเมลนี้เพราะได้สร้างบัญชี :appName ใหม่หรือเพิ่งได้เพิ่มที่อยู่อีเมลใหม่ ถ้าหากนี่ไม่ใช่คุณ ก็ไม่ต้องไปสนใจ',
	'email_verification_content_5'   => '<br><br>เรียน <br>ทีม :appName',
	
	
	// post_activated
	'post_activated_title'             => 'โฆษณาของคุณถูกเปิดใช้งานแล้ว',
	'post_activated_content_1'         => 'สวัสดี โฆษณา<a href=”:postUrl”>:title</a>ของคุณได้ถูกเปิดใช้งานแล้ว',
	'post_activated_content_2'         => '<br>เจ้าหน้าที่ของเราจะตรวจสอบให้ในเร็วๆนี้ครับ/ค่ะ',
	'post_activated_content_3'         => '<br><br>คุณได้รับอีเมลนี้เพราะเพิ่งได้สร้างบัญชีใหม่บน :appName  ถ้าหากนี่ไม่ใช่คุณ โปรดละเว้นอีเมลนี้',
	'post_activated_content_4'         => '<br><br>เรียน <br>ทีม :appName',
	
	// post_reviewed
	'post_reviewed_title'              => 'โฆษณาของคุณกำลังออนไลน์อยู่',
	'post_reviewed_content_1'          => 'สวัสดี โฆษณา<a href=":postUrl">:title</a> ของคุณกำลังออนไลน์อยู่',
	'post_reviewed_content_2'          => '<br><br>คุณได้รับอีเมลนี้เพราะเพิ่งได้สร้างบัญชีใหม่บน :appName  ถ้าหากนี่ไม่ใช่คุณ โปรดละเว้นอีเมลนี้',
	'post_reviewed_content_3'          => '<br><br>เรียน <br>ทีม :appName',
	
	
	// post_deleted
	'post_deleted_title'               => 'โฆษณาคุณได้ถูกลบแล้ว',
	'post_deleted_content_1'           => 'สวัสดี โฆษณา ":title" ของคุณได้ถูกลบจาก <a href=":countryDomain">:appName</a> แล้วในขณะนี้',
	'post_deleted_content_2'           => '<br><br>ขอบคุณที่เชื่อถือพวกเรา แล้วพบกันใหม่อีกครั้ง',
	'post_deleted_content_3'           => '<br><br>เรียน <br>ทีม :appName',
	'post_deleted_content_4'           => '<br><br><br>ปล. นี่เป็นเพียงอีเมลที่ส่งมาโดยอัตโนมัติ กรุณาอย่าตอบกลับ',
	
	
	// post_seller_contacted
	'post_seller_contacted_title'      => 'โฆษณา ":title" ของคุณบน :app_name',
	'post_seller_contacted_content_1'  => '<strong>ข้อมูลติดต่อ :</strong><br>ชื่อ-นามสกุล: :name<br>อีเมล : :email<br>เบอร์โทร: :phone<br><br>อีเมลนี้ได้ถูดส่งไปยังคุณเกี่ยวกับโฆษณา":title" ที่คุณสร้างขึ้น <a href=":countryDomain">:domain</a> : <a href=":postUrl">:postUrl</a>',
	'post_seller_contacted_content_2'  => '<br><br>ปล. คนที่ได้ติดต่อคุณไม่ทราบอีเมลของคุณ ซึ่งคุณจะไม่ตอบกลับ',
	'post_seller_contacted_content_3'  => '<br><br>อย่าลืมตรวจสอบให้ละเอียดทุกครั้งก่อนติดต่อบุคคลใดๆ (ชื่อ,ที่อยู่,...) เพื่อให้แน่ใจว่าคุณมีหมายเลขติดต่อเผื่อฉุกเฉินโดยทั่วไปแล้ว ควรเลือกวิธีส่งรายการสินค้าไว้ก่อน<br><br>โปรดระวังการเสนอขายที่ล่อลวง! อย่าตอบรับคำขอจากต่างประเทศโดยที่ทราบเพียงที่อยู่อีเมลอย่างเดียว เพราะการโอนเงินผ่าน western union หรือ MoneyGram อาจเป็นการหลอกลวงก็ได้',
	'post_seller_contacted_content_4'  => '<br><br>ขอบคุณที่เชื่อถือพวกเรา แล้วพบกันใหม่อีกครั้ง',
	'post_seller_contacted_content_5'  => '<br><br>ทีม :appName',
	'post_seller_contacted_content_6'  => '<br><br><br>ปล. นี่เป็นเพียงอีเมลที่ส่งมาโดยอัตโนมัติ กรุณาอย่าตอบกลับ',
	
	
	// user_deleted
	'user_deleted_title'             => 'บัญชีของคุณถูกลบบน :app_name แล้ว',
	'user_deleted_content_1'         => 'สวัสดี บัญชีของคุณถูกลบจาก <a href=":appUrl">:appName</a> แล้วใน :now',
	'user_deleted_content_2'         => '<br><br>ขอบคุณที่เชื่อถือพวกเรา แล้วพบกันใหม่อีกครั้ง',
	'user_deleted_content_3'         => '<br><br>ทีม :appName',
	'user_deleted_content_4'         => '<br><br><br>ปล. นี่เป็นเพียงอีเมลที่ส่งมาโดยอัตโนมัติ กรุณาอย่าตอบกลับ',
	
	
	// user_activated
	'user_activated_title'           => 'ยินดีต้อนรับสู่ :appName!',
	'user_activated_content_1'       => 'ยินดีต้อนรับสู่ :appName :userName !',
	'user_activated_content_2'       => '<br>บัญชีของคุณถูกเปิดใช้งานแล้ว',
	'user_activated_content_3'       => '<br><br><strong>ปล. ทีม :appName  แนะนำให้คุณ:</strong><br><br>1- อย่าไปเชื่อโฆษณาที่ทำให้คุณไม่สามารถเห็นรายได้จากการขายหรือเช่า<br>2- ห้ามมีการโอนเงินผ่าน western union หรือไปต่างประเทศใดๆทั้งสิ้น<br><br>ถ้าหากคุณรู้สึกลังเลกับคำโฆษณา โปรดติดต่อพวกเราโดยด่วน พวกเราจะพยายามแก้ไขและป้องกันไม่ให้ใครถูกหลอกโดยเด็ดขาด',
	'user_activated_content_4'       => '<br><br>คุณได้รับอีเมลนี้เพราะเพิ่งได้สร้างบัญชีใหม่บน :appName  ถ้าหากนี่ไม่ใช่คุณ โปรดละเว้นอีเมลนี้',
	'user_activated_content_5'       => '<br><br>เรียน <br>ทีม :appName',
	
	
	// reset_password
	'reset_password_title'           => 'รีเซ็ตรหัสผ่านของคุณ',
	'reset_password_action'          => 'รีเซ็ตรหัสผ่าน',
	'reset_password_content_1'       => 'ลืมรหัสผ่าน?',
	'reset_password_content_2'       => 'ไปทำใหม่กันเถอะ',
	'reset_password_content_3'       => 'ถ้าหากไม่ได้ส่งคำขอการรีเซ็ตรหัสผ่าน ก็ไม่สามารถดำเนินการต่อได้',
	'reset_password_content_4'       => '<br><br>เรียน <br>:appName',
	'reset_password_content_5'       => '<br><br>---<br>ถ้าหากคุณมีปัญหาในการกดปุ่ม “รีเซ็ตรหัสผ่าน” กรุณาคัดลอกลิงก์ด้านล่างนี้และวางไว้บนเว็บไซต์ของคุณ: <br> :link',
	
	
	// contact_form
	'contact_form_title'             => 'ข้อความใหม่จาก :appName',
	'contact_form_content'           => ':appName - ข้อความใหม่',
	
	
	// post_report_sent
	'post_report_sent_title'           => 'การรายงานการละเมิดใหม่',
	'post_report_sent_content'         => 'การรายงานการละเมิดใหม่ - :appName/:countryCode',
	'Post URL'                         => 'โพสต์ลิงค์ URL',
	
	
	// post_archived
	'post_archived_title'              => 'โฆษณาของคุณได้ถูกจัดเก็บแล้ว',
	'post_archived_content_1'          => 'สวัสดี โฆษณา :title ของคุณได้ถูกทำสำเนาแล้วจาก :appName ในขณะนี้ :now',
	'post_archived_content_2'          => '<br><br>คุณสามารถรีโพสต์โดยการคลิกที่นี่: <a href=":repostLink">:repostLink</a>',
	'post_archived_content_3'          => '<br><br>ถ้าหากคุณไม่ได้ทำอะไรเลย โฆษณาของคุณก็จะถูกลบไปอย่างถาวร ในวันที่ :dateDel',
	'post_archived_content_4'          => '<br><br>ขอบคุณที่เชื่อถือพวกเรา แล้วพบกันใหม่อีกครั้ง',
	'post_archived_content_5'          => '<br><br>ทีม :appName',
	'post_archived_content_6'          => '<br><br><br>ปล. นี่เป็นเพียงแค่อีเมลอัตโนมัติ ไม่จำเป็นต้องตอบกลับ',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'       => 'โฆษณาของคุณจะถูกลบใน :days วัน',
	'post_will_be_deleted_content_1'   => 'Hello,<br><br>Your ad ":title" will be deleted in :days days from :appName.',
	'post_will_be_deleted_content_2'   => '<br><br>คุณสามารถรีโพสต์ได้โดยการคลิกที่นี่: <a href=":repostLink">:repostLink</a>',
	'post_will_be_deleted_content_3'   => '<br><br>ถ้าหากคุณไม่ได้ทำอะไรเลย โฆษณาของคุณก็จะถูกลบไปอย่างถาวร ในวันที่ :dateDel',
	'post_will_be_deleted_content_4'   => '<br><br>ขอบคุณที่เชื่อถือพวกเรา แล้วพบกันใหม่อีกครั้ง',
	'post_will_be_deleted_content_5'   => '<br><br>ทีม :appName',
	'post_will_be_deleted_content_6'   => '<br><br><br>ปล. นี่เป็นเพียงแค่อีเมลอัตโนมัติ ไม่จำเป็นต้องตอบกลับ',
	
	
	// post_notification
	'post_notification_title'          => 'New ad has been posted',
	'post_notification_content_1'      => 'Hello Admin,<br><br>The user :advertiserName has just posted a new ad.',
	'post_notification_content_2'      => '<br>The ad title: :title<br>Posted on: :now at :time',
	'post_notification_content_3'      => '<br><br>Kind Regards,<br>The :appName Team',
	
	
	// user_notification
	'user_notification_title'        => 'New User Registration',
	'user_notification_content_1'    => 'Hello Admin,<br><br>:name has just registered.',
	'user_notification_content_2'    => '<br>Registered on: :now at :time<br>Email: <a href="mailto::email">:email</a>',
	'user_notification_content_3'    => '<br><br>Kind Regards,<br>The :appName Team',
	
	
	// payment_sent
	'payment_sent_title'             => 'ขอบคุณที่ชำระเงิน',
	'payment_sent_content_1'         => 'สวัสดี พวกเราได้รับการชำระเงินสำหรับโฆษณา ":title" เรียบร้อยแล้ว',
	'payment_sent_content_2'         => '<br><h1>ขอบคุณครับ</h1>',
	'payment_sent_content_3'         => '<br>เรียน <br>ทีม :appName',
	
	
	// payment_notification
	'payment_notification_title'     => 'New payment has been sent',
	'payment_notification_content_1' => 'Hello Admin,<br><br>The user :advertiserName has just paid a package for her ad ":title".',
	'payment_notification_content_2' => '<br><br><strong>THE PAYMENT DETAILS</strong><br><strong>Reason of the payment:</strong> Ad #:adId - :packageName<br><strong>Amount:</strong> :amount :currency<br><strong>Payment Method:</strong> :paymentMethodName',
	'payment_notification_content_3' => '<br><br>Kind Regards,<br>The :appName Team',
	
	
	// reply_form
	'reply_form_title'               => 'RE: :postTitle',
	'reply_form_content_1'           => 'สวัสดี <br><br><strong> คุณได้รับการตอบกลับจาก: :senderName. ดูได้ตามด้านล่างนี้:</strong><br><br>',
	'reply_form_content_2'           => '<br><br>เรียน <br>ทีม :appName',


];
