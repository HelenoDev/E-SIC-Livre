<?php
/**********************************************************************************
 Sistema e-SIC Livre: sistema de acesso a informação baseado na lei de acesso.
 
 Copyright (C) 2014 Prefeitura Municipal do Natal
 
 Este programa é software livre; você pode redistribuí-lo e/ou
 modificá-lo sob os termos da Licença GPL2.
***********************************************************************************/

error_reporting(E_ERROR);

define("SISTEMA_NOME", "e-SIC Livre"); //nome do sistema para exibição em lugares diversos
define("SISTEMA_CODIGO", "esiclivre"); //codigo para definição da lista de sessão do sistema

// Configurações de banco de dados
define("DBHOST", "localhost");
define("DBUSER", "pmtc_esic");
define("DBPASS", "d#Cou!()<Lhb");
define("DBNAME", "coracoes_esic");

// Definições de e-mail
define("USE_PHPMAILER", false);
define("MAIL_HOST", "mail.gov.br");
define("SMTP_AUTH", false);
define("SMTP_USER", "");
define("SMTP_PWD", "");

// Endereços do site
define("SITELNK", "http://127.0.0.1/esic/");	//endereço principal do site
define("URL_BASE_SISTEMA", "http://127.0.0.1/esic/");	//endereço principal do site

?>
