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
	'mail_footer_content'            => ':appName, venda e compre perto de você. Simples, rápido e eficiente.',
	
	
	// email_verification
	'email_verification_title'       => '[:appName] Verifique seu endereço de e-mail.',
	'email_verification_action'      => 'Verificar endereço de e-mail',
	'email_verification_content_1'   => 'Olá :userName !',
	'email_verification_content_2'   => 'Clique no botão abaixo para verificar seu endereço de e-mail.',
	'email_verification_content_3'   => 'O botão não está funcionando? Cole o seguinte link em seu navegador: <br><a href=":verificationLink">:verificationLink</a>.',
	'email_verification_content_4'   => '<br><br>Você está recebendo este e-mail porque criou recentemente uma nova conta: appName ou adicionou um novo endereço de e-mail. Se não foi você, ignore este e-mail. ',
	'email_verification_content_5'   => '<br><br>Atensiosamente,<br>The :appName Team',
	
	
	// post_activated
	'post_activated_title'             => 'Seu anúncio foi ativado',
	'post_activated_content_1'         => 'Olá, <br><br>seu anúncio<a href=":postUrl">:title</a> foi ativado.',
	'post_activated_content_2'         => '<br>Em breve será examinado por um dos nossos administradores para sua publicação on-line.',
	'post_activated_content_3'         => '<br><br>Você está recebendo este e-mail porque você criou recentemente um novo anúncio no :appName. Se não foi você, ignore este e-mail.',
	'post_activated_content_4'         => '<br><br>Saudações,<br>A equipa do :appName ',
	
	// post_reviewed
	'post_reviewed_title'              => 'Seu anúncio está agora online',
	'post_reviewed_content_1'          => 'Olá, <br><br>O seu anúncio <a href=":postUrl">:title</a> está agora.',
	'post_reviewed_content_2'          => '<br><br>YVocê está recebendo este e-mail porque criou recentemente um novo anúncio no :appName. Se não foi você, ignore este e-mail. ',
	'post_reviewed_content_3'          => '<br><br>Atenciosamente,<br>A equipa do :appName',
	
	
	// post_deleted
	'post_deleted_title'               => 'Seu anúncio foi excluído',
	'post_deleted_content_1'           => 'Olá,<br><br>o seu anúncio  ":title" foi excluído do <a href=":appUrl">:appName</a> em :now.',
	'post_deleted_content_2'           => '<br><br>Obrigado pela sua confiança e até breve,',
	'post_deleted_content_3'           => '<br><br>A equipa do :appName',
	'post_deleted_content_4'           => '<br><br><br>PS: Este é um email automatico, por favor não responda.',
	
	
	// post_seller_contacted
	'post_seller_contacted_title'      => 'O seu anúncio ":title" no :appName',
	'post_seller_contacted_content_1'  => '<strong>Informações de contato :</strong><br>Nome : :name<br>Endereço de e-mail : :email<br>Telefone : :phone<br><br>Este e-mail foi enviado para você sobre o anúncio  ":title" que você publicou no  <a href=":appUrl">:appName</a> : <a href=":postUrl">:postUrl</a>',
	'post_seller_contacted_content_2'  => '<br><br>PS : TA pessoa que entrou em contato com você não conhece seu e-mail, pois não responderá.',
	'post_seller_contacted_content_3'  => '<br><br>Lembre-se de verificar sempre os detalhes da pessoa de contato (nome, endereço, ...) para garantir que você tenha um contato em caso de disputa. Em geral, escolha a entrega do item em mão. <br><br>Tenha cuidado com ofertas atraentes! Tenha cuidado com os pedidos do exterior quando você tiver apenas um e-mail de contato. A transferência bancária pela Western Union ou MoneyGram proposta pode ser artificial. ',
	'post_seller_contacted_content_4'  => '<br><br>Obrigado pela sua confiança e até breve,',
	'post_seller_contacted_content_5'  => '<br><br>A equipa do :appName ',
	'post_seller_contacted_content_6'  => '<br><br><br>PS:  Este é um email automatico, por favor não responda.',
	
	
	// user_deleted
	'user_deleted_title'             => 'Sua conta foi excluída no :appName',
	'user_deleted_content_1'         => 'Olá,<br><br>Sua conta foi excluída no <a href=":appUrl">:appName</a> em :now.',
	'user_deleted_content_2'         => '<br><br>Obrigado pela sua confiança e até breve,',
	'user_deleted_content_3'         => '<br><br>A equipa do :appName ',
	'user_deleted_content_4'         => '<br><br><br>PS: Este é um email automatico, por favor não responda.',
	
	
	// user_activated
	'user_activated_title'           => 'Bem-vindo ao :appName !',
	'user_activated_content_1'       => 'Bem-vindo ao :appName :userName !',
	'user_activated_content_2'       => '<br>Sua conta foi ativada.',
	'user_activated_content_3'       => '<br><br><strong>Nota : A equipa do :appName recomenda que você: </strong> <br> <br> 1 - Tenha sempre cuidado com os anunciantes que se recusam a fazer ver o bem oferecido à venda ou aluguel, <br> 2 - Nunca envie dinheiro pela Western Union ou outro pagamento internacional. <br> <br> Se você tiver alguma dúvida sobre a gravidade de um anunciante, entre em contato connosco imediatamente. Podemos então neutralizar o mais rápido possível e evitar que alguém menos informado se torne a vítima.',
	'user_activated_content_4'       => '<br><br>Se você está recebendo este e-mail é porque criou recentemente uma conta no :appName . Se não fosse você, ignore este e-mail.',
	'user_activated_content_5'       => '<br><br>Atenciosamente,<br>A equipa do :appName ',
	
	
	// reset_password
	'reset_password_title'           => 'Redefinir Password',
	'reset_password_action'          => 'Redefinir Password',
	'reset_password_content_1'       => 'Esqueceu sua password?',
	'reset_password_content_2'       => 'Obter uma nova.',
	'reset_password_content_3'       => 'Se você não solicitou uma reinicialização da password, nenhuma ação adicional é necessária.',
	'reset_password_content_4'       => '<br><br>Atenciosamente,<br>A equipa do :appName ',
	'reset_password_content_5'       => '<br><br>---<br>Se você está tendo problemas para clicar no botão "Redefinir password", copie e cole o URL abaixo em seu navegador:<br> :link',
	
	
	// contact_form
	'contact_form_title'             => 'Nova mensagem do :appName',
	'contact_form_content'           => ':appName - Nova mensagem',
	
	
	// post_report_sent
	'post_report_sent_title'           => 'Novo relatório de abuso',
	'post_report_sent_content'         => 'Novo abuso de relatório - :appName/:countryCode',
	'Post URL'                         => 'Post URL',
	
	
	// post_archived
	'post_archived_title'              => 'Seu anúncio foi arquivado',
	'post_archived_content_1'          => 'Olá,<br><br> o seu anúncio ":title" foi arquivado no :appName em :now.',
	'post_archived_content_2'          => '<br><br>Pode republicar se clickar no link : :repostLink',
	'post_archived_content_3'          => '<br><br>Se você não fizer nada, seu anúncio será excluído permanentemente em :dateDel.',
	'post_archived_content_4'          => '<br><br>Obrigado pela sua confiança e até breve,',
	'post_archived_content_5'          => '<br><br>A equipa do :appName ',
	'post_archived_content_6'          => '<br><br><br>PS: Este é um email automatico, por favor não responda.',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'       => 'O seu anúncio será excluído em: :days dias',
	'post_will_be_deleted_content_1'   => 'Olá,<br><br>O seu anúncio ":title" será excluído em :days dias do :appName.',
	'post_will_be_deleted_content_2'   => '<br><br>Você pode repostá-lo clicando aqui: : :repostLink',
	'post_will_be_deleted_content_3'   => '<br><br> Se você não fizer nada, seu anúncio será excluído permanentemente em :dateDel.',
	'post_will_be_deleted_content_4'   => '<br><br>Obrigado pela sua confiança e até breve,',
	'post_will_be_deleted_content_5'   => '<br><br>A equipa do :appName ',
	'post_will_be_deleted_content_6'   => '<br><br><br>PS: Este é um email automatico, por favor não responda.',
	
	
	// post_notification
	'post_notification_title'          => 'Anúncio novo foi postado',
	'post_notification_content_1'      => 'Olá Admin,<br><br>o utilizador :advertiserName acabou de publicar um anúncio.',
	'post_notification_content_2'      => '<br>O anúncio : :title<br>Publicado em: :now at :time',
	'post_notification_content_3'      => '<br><br>Saudações,<br>A equipa do :appName ',
	
	
	// user_notification
	'user_notification_title'        => 'Novo registro de utilizador',
	'user_notification_content_1'    => 'Olá Admin,<br><br>:name registrou-se.',
	'user_notification_content_2'    => '<br>Registrado em: :now at :time<br>Email: <a href="mailto::email">:email</a>',
	'user_notification_content_3'    => '<br><br>Saudações,<br>A equipa do :appName ',
	
	
	// payment_sent
	'payment_sent_title'             => 'Obrigado pelo seu pagamento',
	'payment_sent_content_1'         => 'Olá,<br><br>Recebemos seu pagamento pelo anúncio ":title".',
	'payment_sent_content_2'         => '<br><h1>Obrigado! </h1>',
	'payment_sent_content_3'         => '<br>Atenciosamente,<br>A equipa do :appName ',
	
	
	// payment_notification
	'payment_notification_title'     => 'Novo pagamento foi enviado',
	'payment_notification_content_1' => 'Olá Admin,<br><br>o utilizador :advertiserName acaba de pagar um pacote para o anúncio ":title".',
	'payment_notification_content_2' => '<br><br><strong> DETALHES DE PAGAMENTO</strong><br><strong>Motivo do pagamento:</strong> Anúncio #:adId - :packageName<br><strong>Valor:</strong> :amount :currency<br><strong>Método de pagamento::</strong> :paymentMethodName',
	'payment_notification_content_3' => '<br><br>Saudações,<br>A equipa do :appName ',
	
	
	// reply_form
	'reply_form_title'               => 'RE: :postTitle',
	'reply_form_content_1'           => 'Olá,<br><br><strong>Você recebeu uma resposta de
 :senderName. Veja a resposta abaixo:</strong><br><br>',
	'reply_form_content_2'           => '<br><br>Saudações,<br>A equipa do :appName ',


];
