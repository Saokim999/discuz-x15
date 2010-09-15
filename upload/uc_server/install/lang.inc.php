<?php

define('UC_VERNAME', '中文版');

$lang = array(

	'SC_GBK' => '簡體中文版',
	'TC_BIG5' => '繁體中文版',
	'SC_UTF8' => '簡體中文 UTF8 版',
	'TC_UTF8' => '繁體中文 UTF8 版',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => SOFT_NAME.' X Cài đặt',
	'agreement_yes' => 'Đồng ý',
	'agreement_no' => 'Không',
	'notset' => 'Unlimited',

	'message_title' => 'Reminder',
	'error_message' => 'Error Message',
	'message_return' => 'Return',
	'return' => 'Return',
	'install_wizard' => 'Setup Wizard',
	'config_nonexistence' => 'Configuration file is not exists',
	'nodir' => 'Thư mục không tồn tại',
	'short_open_tag_invalid' => 'Sorry, please set "short_open_tag" as On in "php.ini", or Discuz cannot be used',
	'redirect' => 'The browser will redirect automatically.<br>If your browser do not redirect automatically, please click here',

	'database_errno_2003' => 'Unable to connect database, please check your database configuration',
	'database_errno_1044' => 'Unable to create new database, please check your database name',
	'database_errno_1045' => 'Không connect được với data, check lại tài khoản và mật khẩu data xem nào!',
	'database_errno_1064' => 'SQL Error',

	'dbpriv_createtable' => 'No "CREATE TABLE" Permission',
	'dbpriv_insert' => 'No "INSERT" Permission',
	'dbpriv_select' => 'No "SELECT" Permission',
	'dbpriv_update' => 'No "UPDATE" Permission',
	'dbpriv_delete' => 'No "DELETE" Permission',
	'dbpriv_droptable' => 'No "DROP TABLE" Permission',

	'db_not_null' => 'You have already installed UCenter. If you continue to install, the orignal data will be cleaned.',
	'db_drop_table_confirm' => 'Continue will clean orignal data, are you sure?',

	'writeable' => 'Được ghi',
	'unwriteable' => 'Chưa được ghi',
	'old_step' => 'Quay lại',
	'new_step' => 'Kế tiếp',

	'database_errno_2003' => 'Unable to connect database, please check your database configuration',
	'database_errno_1044' => 'Unable to create new database, please check your database name',
	'database_errno_1045' => 'Unable to connect database, please check your username and password',

	'step_env_check_title' => 'Bắt đầu cài đặt',
	'step_env_check_desc' => 'Kiểm tra môi trường cài đặt',
	'step_db_init_title' => 'Điền thông số',
	'step_db_init_desc' => 'Cài đặt dữ liệu...',
	
	'step1_file' => 'Filename',
	'step1_need_status' => 'Need',
	'step1_status' => 'Current',
	'not_continue' => 'Please amend those displayed in red, then try again',

	'tips_dbinfo' => 'Điền thông tin database',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'Tài khoản Admin',
	'tips_admininfo_comment' => 'Ghi nhớ mật khẩu của người cài UCenter，Mật khẩu đăng nhập UCenter。',
	'step_ext_info_title' => 'Cài đặt thành công',
	'step_ext_info_desc' => 'Click vào đây để đăng nhập',

	'ext_info_succ' => 'Đã cài thanh công.',
	'install_locked' => 'Installation is locked due to previous installation, if you want to install again, please delete <br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'You must solve the problem above, then continue',

	'step_app_reg_title' => 'Phương pháp cài đặt',
	'step_app_reg_desc' => 'Kiểm tra máy chủ và thiết lập cài đặt UCenter',
	'tips_ucenter' => 'Please fill in related information of UCenter',
	'tips_ucenter_comment' => 'UCenter is a core software of Comsenz. Discuz! Board is required this program. If you have installed UCenter, please fill the Information of UCenter, or please goto <a href="http://www.discuz.com/" target="blank">Comsenz Products Center</a> to download Chinese Simplified UCenter, or goto <a href="http://discuzviet.net">DiscuzViet</a> download Vietnamese UCenter and install it, then continue',

	'advice_mysql_connect' => 'Please make sure to load mysql module correctly',
	'advice_fsockopen' => 'You need to set "allow_url_fopen" as on in "php.ini". Please contact space provider to make sure it is enabled',
	'advice_gethostbyname' => '"gethostbyname" function is needed. Please contact space provider to make sure it is enabled',
	'advice_file_get_contents' => 'You need to set "allow_url_fopen" as on in "php.ini". Please contact space provider to make sure it is enabled',
	'advice_xml_parser_create' => 'This function need XML support in PHP. Please contact space provider to make sure it is enabled',

	'ucurl' => 'UCenter\'s URL',
	'ucpw' => 'UCenter Founder Password',

	'tips_siteinfo' => 'Fill in Site Information',
	'sitename' => 'Site Name',
	'siteurl' => 'Site URL',

	'forceinstall' => 'Force Install',
	'dbinfo_forceinstall_invalid' => 'You may modify talbe prefix to prevent data loss, because current database contains data with same table prefix; force install will delete all previous data.',

	'click_to_back' => 'Click here to return',
	'adminemail' => 'Email',
	'adminemail_comment' => 'Sử dụng để báo cáo lỗi...',
	'dbhost_comment' => 'Thường điền là : localhost',
	'tablepre_comment' => 'Sửa prefix theo ý bạn để có thể cài nhiều discuz trên 1 database (có thể để trống)',
	'forceinstall_check_label' => 'Cứ cài dù sẽ xóa data tương tự trước đó!!!',

	'uc_url_empty' => 'UCenter URL is empty, please return to fill',
	'uc_url_invalid' => 'Invalid URL Format',
	'uc_url_unreachable' => 'UCenter URL may be error, please check',
	'uc_ip_invalid' => 'Unable to connect to this domain, please input the IP',
	'uc_admin_invalid' => 'UCenter Founder\'s Password Error',
	'uc_data_invalid' => 'Connect Faild, please check your UCenter\'s URL ',
	'ucenter_ucurl_invalid' => 'UCenter\'s URL is blank or format error, please check',
	'ucenter_ucpw_invalid' => 'UCenter Founder\'s Password is blank or format error, please check',
	'siteinfo_siteurl_invalid' => 'Site URL is empty or format error, please check',
	'siteinfo_sitename_invalid' => 'Site name is empty or format error, please check',
	'dbinfo_dbhost_invalid' => 'DB Host is empty or format error, please check',
	'dbinfo_dbname_invalid' => 'DB Name is empty or format error, please check',
	'dbinfo_dbuser_invalid' => 'DB username is empty or format error, please check',
	'dbinfo_dbpw_invalid' => 'DB password is empty or format error, please check',
	'dbinfo_adminemail_invalid' => 'System Email is empty or format error, please check',
	'dbinfo_tablepre_invalid' => 'Database Table Prefix is blank or format error, please check',
	'admininfo_username_invalid' => 'Admin Username is blank or format error, please check',
	'admininfo_email_invalid' => 'Admin Email is blank or format error, please check',
	'admininfo_password_invalid' => 'Admin Password is blank',
	'admininfo_password2_invalid' => 'Two Passwords do not match',

	'username' => 'Tên',
	'email' => 'Email',
	'password' => 'Mật khẩu',
	'password_comment' => 'Để trống kìa, điền vào',
	'password2' => 'Xác nhận mật khẩu',

	'admininfo_invalid' => 'Chưa điền hết thông tin admin',
	'dbname_invalid' => 'Điền tên database đi',
	'admin_username_invalid' => 'Tên tài khoản không phù hợn',
	'admin_password_invalid' => 'Mật khẩu xác nhận chả giống trên gì cả?',
	'admin_email_invalid' => 'Email sai rồi',
	'admin_invalid' => 'Please input all informations of admin',
	'admin_exist_password_error' => 'This user is exists, if you want to set it as admin, please input its password',

	'tagtemplates_subject' => 'Subject',
	'tagtemplates_uid' => 'UID',
	'tagtemplates_username' => 'Author',
	'tagtemplates_dateline' => 'Date',
	'tagtemplates_url' => 'Topic URL',

	'uc_version_incorrect' => 'Your UCenter Version is too old, please upgrade it. Vietnamese UCenter:http://code.google.com/p/vietdiscuz/downloads/list, Official:http://www.comsenz.com/',
	'config_unwriteable' => 'Configuration file is unwriteable, please set "config.inc.php" to writeable(777)',

	'install_in_processed' => 'Installing...',
	'install_succeed' => 'Installed successfully, click here to enter forum',
	'license' => '<div class="license"><h1>Discuz! License</h1>

<p>Vietnamese Discuz!X is translated by DiscuzVietNam Community, http://code.google.com/p/discuz-x-viet-nam/.</p>

<p>Copyright (c) 2001-2009, Comsenz (Beijing) Technology Co. Ltd. All rights reserved.</p>

<p>Thank you For choosing Discuz! Forum products. We hope that our efforts can provide you with an efficient fast and strong community forum solutions.</p>

<p>Discuz! English full name is Crossday Discuz! Board.</p>

<p>Comsenz (Beijing) Technology Limited for Discuz! Product developers, in accordance with the law independently owned Discuz! Products Copyright (China State Copyright Bureau Copyright registration number 2006 SR11895).</p>

<p>Comsenz (Beijing) Technology Limited website: http://www.comsenz.com</p>

<p>Discuz! Offical website: http://www.discuz.com.</p>

<p>Discuz! Offical Forum: http://www.discuz.net.</p>

<p>Discuz! Vietnam Supporting Forum: http://www.discuzviet.net & http://traitimyenbai.net.</p>

<p>Discuz! Copyrights in the People\'s Republic of the State Copyright Bureau registration, copyright law and international conventions to protect. Users: Regardless of the individual or organization, profit or not, how to use (Including for the purpose of study and research), will be required to read the agreement carefully, understand, agree and comply with all the terms of this agreement only after using Discuz! Software. 

</p>

<p>The license application and only applies to Discuz! 7.x.x version, Comsenz (Beijing) Technology Limited of the licensing agreement with the power of final interpretation. 

</p>

<h3>I. License Agreement</h3>
<ol>
<li>You can fully comply with the end-user license agreement on the basis of this software will be used for non-commercial purposes without having to pay for software copyright licensing fees.</li>
<li>You can bound by the provisions of the agreement and limits Laws Discuz! Source code (if it was provided) or interface style to suit your site requirements. </li>
<li>Use of this software you have a forum in the construction of all Member information, articles and related information ownership, and commitment to independent of the contents of the article and related legal obligations.</li>
<li>Obtain commercial licenses, you can use the software for commercial applications, based on the type purchased by the authority identified in the technical support period, technical support means and technical support, Since the purchase moment onwards, in the technical support within the period specified by the way has been designated within the scope of the technical support services. Commercial authorized users enjoy views and reflect the power of relevant views Will be a primary consideration, but did not necessarily accept the assurances or guarantees. </li>
</ol>

<h3>II. Bound by the provisions of the agreement and limitations</h3>
<ol>
<li>Has not been authorized commercial before, this software may not be used for commercial purposes (including but not limited to the Company\'s Web site, operating site to return a profit for the head or the website). Authorized the purchase of commercial information please visit http://www.discuz.com note, can also call 8610-51657885[China], 60174324844[Malaysia] for details. 
</li>
<li>Shall not associated with the software business or authorized rental, sale, mortgage or issuing of permits.</li>
<li>In any case, whether they use and whether or landscaping revised and amended to what extent, as long as the use Discuz! The whole or any part without the written permission of the forum pages Page Footer The Discuz! Name and (Beijing) Technology Limited subsidiary website (http://www.comsenz.com, http://www.discuz.com, http://www.discuz.net) Link must be retained, but not removed or amended. 
</li>
<li>prohibited in Discuz! The whole or any part of any development on the basis of a derivative version, revised version or third parties for re-distributed version. </li>
<li>If you failed to comply with the provisions of this Agreement, your mandate will be terminated, the licensee the right to be resumed, and assume corresponding legal responsibility.</li>
</ol>

<h3>III. Limited guarantees and Disclaimer</h3>
<ol>
<li>attached to the software and documents as not to provide any explicit or implied in the form of compensation or guarantees provided. 
</li>
<li>users voluntary use of this software, you must understand the risks of using this software, technical services have not yet purchased products before, we do not provide any form of commitment to technical support, the use of guarantees, Nor have any of this software by the use of the relevant issues arising from the responsibility. </li>
<li>Comsenz (Beijing) Technology Limited use of the wrong forum for software in the construction of articles or information held accountable. </li>
</ol>

<p>relevant Discuz! End-user license agreement, commercial licenses and technical details of the service by the Discuz! Provide exclusive official website. Hong Sing Chong think (Beijing) Technology Limited has not Prior notification, amending licensing agreements and service rates powers, the revised price list on the agreement or on the date of change since the entry into force of the new authorized users.</p>

<p>electronic copy of the authorization form of a written agreement as the two sides signed the agreement as a complete and equivalent legal effect. Once you start the installation Discuz! Defined as fully understood and accepted The provisions of this Agreement, in the enjoyment of the above provisions of the powers conferred by the relevant constraints and limitations. Outside the scope of the license agreement, will be a direct violation of the license agreement and an infringement, We have the right to terminate the mandate at any time, order a stop damage, and retain the power to hold responsible. 
</p></div>',

	'i_agree' => 'I Agree',
	'supportted' => 'Supported',
	'unsupportted' => 'Unsupported',
	'max_size' => 'Support/Max Size',
	'project' => 'Item',
	'ucenter_required' => 'Require',
	'ucenter_best' => 'Best',
	'curr_server' => 'Current',
	'env_check' => 'Check Environment',
	'os' => 'System',
	'php' => 'PHP',
	'attachmentupload' => 'Upload',
	'unlimit' => 'Unlimited',
	'version' => 'Version',
	'gdversion' => 'GD Lib',
	'allow' => 'Allow',
	'unix' => 'Unix',
	'diskspace' => 'DiskSpace',
	'priv_check' => 'Check Permission',
	'func_depend' => 'Check Function',
	'func_name' => 'Name',
	'check_result' => 'Result',
	'suggestion' => 'Suggestion',
	'advice_mysql' => 'Please check your mysql module has been loaded',
	'advice_fopen' => 'you must set "allow_url_fopen" in php.ini as on, please contact your space manager',
	'advice_file_get_contents' => 'you must set "allow_url_fopen" in php.ini as on, please contact your space manager',
	'advice_xml' => 'This function need PHP support XML, please contact space manager to open it',
	'none' => 'None',

	'dbhost' => 'Máy chủ',
	'dbuser' => 'Người dùng DB',
	'dbpw' => 'Mật khẩu DB',
	'dbname' => 'Tên DB',
	'tablepre' => 'Prefix',

	'ucfounderpw' => 'UCenter Founder\'s Password',
	'ucfounderpw2' => 'Repeat Password',

	'create_table' => 'Đang chèn dữ liệu',
	'succeed' => 'OK',
);