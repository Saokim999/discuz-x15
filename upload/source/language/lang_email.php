<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php 16661 2010-09-13 01:14:11Z zhengqingpeng $
 */


$lang = array
(
	'hello' => '你好',
	'moderate_member_invalidate' => '否決',
	'moderate_member_delete' => '刪除',
	'moderate_member_validate' => '通過',


	'get_passwd_subject' =>		'取回密碼說明',
	'get_passwd_message' =>		'
<p>{username}，
這封信是由 {bbname} 發送的。</p>

<p>你收到這封郵件，是因為在我們的論壇上這個郵箱地址被登記為用戶郵箱，
且該用戶請求使用 Email 密碼重置功能所致。</p>
<p>
----------------------------------------------------------------------<br />
<strong>重要！</strong><br />
----------------------------------------------------------------------</p>

<p>如果你沒有提交密碼重置的請求或不是我們論壇的註冊用戶，請立即忽略
並刪除這封郵件。只在你確認需要重置密碼的情況下，才繼續閱讀下面的
內容。</p>
<p>
----------------------------------------------------------------------<br />
<strong>密碼重置說明</strong><br />
----------------------------------------------------------------------</p>
</p>
你只需在提交請求後的三天之內，通過點擊下面的鏈接重置你的密碼：<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}</a>
<br />
(如果上面不是鏈接形式，請將地址手工粘貼到瀏覽器地址欄再訪問)</p>

<p>上面的頁面打開後，輸入新的密碼後提交，之後你即可使用新的密碼登錄論壇了。你可以在用戶控制面板中隨時修改你的密碼。</p>

<p>本請求提交者的 IP 為 {clientip}</p>


<p>
此致<br />
</p>
<p>{bbname} 管理團隊.
{siteurl}</p>',


	'email_verify_subject' =>	'Email 地址驗證',
	'email_verify_message' =>	'
<p>{username}，
這封信是由 {bbname}發送的。</p>

<p>你收到這封郵件，是因為在我們論壇的新用戶註冊，或用戶修改 Email 使用
了你的地址。如果你並沒有訪問過我們的論壇，或沒有進行上述操作，請忽
略這封郵件。你不需要退訂或進行其他進一步的操作。</p>
<br />
----------------------------------------------------------------------<br />
<strong>帳號激活說明</strong><br />
----------------------------------------------------------------------<br />

<p>你是我們論壇的新用戶，或在修改你的註冊 Email 時使用了本地址，我們需
要對你的地址有效性進行驗證以避免垃圾郵件或地址被濫用。</p>

<p>你只需點擊下面的鏈接即可激活你的帳號：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(如果上面不是鏈接形式，請將地址手工粘貼到瀏覽器地址欄再訪問)</p>

<p>感謝你的訪問，祝你使用愉快！</p>


<p>
此致<br />

{bbname} 管理團隊.<br />
{siteurl}</p>',

	'add_member_subject' =>		'你被添加成為會員',
	'add_member_message' => 	'
{newusername} ，
這封信是由 {bbname} 發送的。

我是 {adminusername} ，{bbname} 的管理者之一。你收到這封郵件，是因為你
剛剛被添加成為我們論壇的會員，當前 Email 即是我們為你註冊的地址。

----------------------------------------------------------------------
重要！
----------------------------------------------------------------------

如果你對我們的論壇不感興趣或無意成為會員，請忽略這封郵件。

----------------------------------------------------------------------
帳號信息
----------------------------------------------------------------------

論壇名稱：{bbname}
論壇地址：{siteurl}

用戶名：{newusername}
密碼：{newpassword}

從現在起你可以使用你的帳號登錄我們的論壇，祝你使用愉快！



此致

{bbname} 管理團隊.
{siteurl}',


	'birthday_subject' =>		'祝你生日快樂',
	'birthday_message' => 		'
{username}，
這封信是由 {bbname} 發送的。

你收到這封郵件，是因為在我們的論壇上這個郵箱地址被登記為用戶郵箱，
並且按照你填寫的信息，今天是你的生日，很高興能在此時為你獻上一份
生日祝福，我謹代表{bbname}管理團隊，衷心祝福你生日快樂。

如果你並非我們的會員，或今天並非你的生日，可能是有人誤用了你的郵
件地址，或錯誤的填寫了生日信息，本郵件不會多次重複發送，請忽略這
封郵件。



此致

{bbname} 管理團隊.
{siteurl}',

	'email_to_friend_subject' =>	'{$_G[member][username]} 推薦給你: $thread[subject]',
	'email_to_friend_message' =>	'
這封信是由 {$_G[setting][bbname]} 的 {$_G[member][username]} 發送的。

你收到這封郵件，是因為在 {$_G[member][username]} 通過 {$_G[setting][bbname]} 的「推薦給朋友」
功能推薦了如下的內容給你，如果你對此不感興趣，請忽略這封郵件。你不
需要退訂或進行其他進一步的操作。

----------------------------------------------------------------------
信件原文開始
----------------------------------------------------------------------

$message

----------------------------------------------------------------------
信件原文結束
----------------------------------------------------------------------

請注意這封信僅僅是由用戶使用 「推薦給朋友」發送的，不是論壇官方郵件，
論壇管理團隊不會對這類郵件負責。

歡迎你訪問 {$_G[setting][bbname]}
$_G[siteurl]',

	'email_to_invite_subject' =>	'你的朋友 {$_G[member][username]} 發送 {$_G[setting][bbname]} 論壇註冊邀請碼給你',
	'email_to_invite_message' =>	'
$sendtoname,
這封信是由 {$_G[setting][bbname]} 的 {$_G[member][username]} 發送的。

你收到這封郵件，是因為在 {$_G[member][username]} 通過我們論壇的「發送邀請碼給朋友」
功能推薦了如下的內容給你，如果你對此不感興趣，請忽略這封郵件。你不
需要退訂或進行其他進一步的操作。

----------------------------------------------------------------------
信件原文開始
----------------------------------------------------------------------

$message

----------------------------------------------------------------------
信件原文結束
----------------------------------------------------------------------

請注意這封信僅僅是由用戶使用 「發送邀請碼給朋友」發送的，不是論壇官方郵件，
論壇管理團隊不會對這類郵件負責。

歡迎你訪問 {$_G[setting][bbname]}
$_G[siteurl]',


	'moderate_member_subject' =>	'用戶審核結果通知',
	'moderate_member_message' =>	'
<p>{username} ，
這封信是由 {bbname} 發送的。</p>

<p>你收到這封郵件，是因為在我們的論壇上這個郵箱地址被新用戶註冊時所
使用，且管理員設置了需對新用戶進行人工審核，本郵件將通知你提交的
申請的審核結果。</p>

----------------------------------------------------------------------<br />
<strong>註冊信息與審核結果</strong><br />
----------------------------------------------------------------------<br />

用戶名: {username}<br />
註冊時間: {regdate}<br />
提交時間: {submitdate}<br />
提交次數: {submittimes}<br />
註冊原因: {message}<br />
<br />
審核結果: {modresult}<br />
審核時間: {moddate}<br />
審核管理員: {adminusername}<br />
管理員留言: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>審核結果說明</strong><br />
----------------------------------------------------------------------<br />

<p>通過: 你的註冊已通過審核，你已成為我們論壇的正式用戶。</p>

<p>否決: 你的註冊信息不完整，或未滿足我們對新用戶的某些要求，你可以
	  根據管理員留言，<a href="home.php?mod=spacecp&ac=profile" target="_blank">完善你的註冊信息</a>，然後再提交。</p>

<p>刪除：你的註冊由於與我們的要求偏差較大，或我們的論壇新註冊人數已
	  超過預期，申請被徹底否決。你的帳號已從數據庫中刪除，將無法
	  再使用其登錄或提交再次審核，請你諒解。</p>

<br />
<br />
此致<br />
<br />
{bbname} 管理團隊.<br />
{siteurl}',
);

?>