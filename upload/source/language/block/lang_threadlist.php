<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php 16009 2010-08-31 00:18:31Z monkey $
 */

$lang = array
(
	'threadlist_fids' => '所在版塊',
	'threadlist_fids_comment' => '設置允許參與新帖調用的版塊，可以按住 CTRL 多選，全選或全不選均為不做限制',
	'threadlist_uids' => '樓主UID',
	'threadlist_uids_comment' => '設置要樓主UID，多個UID請用半角逗號「,」隔開。',
	'threadlist_startrow' => '起始數據行數',
	'threadlist_startrow_comment' => '如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'threadlist_items' => '顯示數據條數',
	'threadlist_items_comment' => '設置一次顯示的主題條目數，請設置為大於 0 的整數',
	'threadlist_titlelength' => '標題最大字節數',
	'threadlist_titlelength_comment' => '設置當標題長度超過本設定時，是否將標題自動縮減到本設定中的字節數，0 為不自動縮減',
	'threadlist_fnamelength' => '標題最大字節數包含版塊名稱',
	'threadlist_fnamelength_comment' => '設置標題長度是否將所在版塊名稱的長度一同計算在內',
	'threadlist_summarylength' => '主題簡短內容文字數',
	'threadlist_summarylength_comment' => '設置主題簡短內容的文字數，0 為使用默認值 255',
	'threadlist_tids' => '指定主題',
	'threadlist_tids_comment' => '設置要指定顯示的主題 tid ，多個 tid 請用半角逗號「,」隔開。注意: 留空為不進行任何過濾',
	'threadlist_keyword' => '標題關鍵字',
	'threadlist_keyword_comment' => '設置標題包含的關鍵字。注意: 留空為不進行任何過濾； 關鍵字中可使用通配符 *； 匹配多個關鍵字全部，可用空格或 AND 連接。如 win32 AND unix； 匹配多個關鍵字其中部分，可用 | 或 OR 連接。如 win32 OR unix',
	'threadlist_typeids' => '主題分類ID',
	'threadlist_typeids_comment' => '輸入主題分類ID，多個 ID 之間用半角逗號「,」隔開。',
	'threadlist_typeids_all' => '全部的主題分類',
	'threadlist_sortids' => '分類信息',
	'threadlist_sortids_comment' => '設置特定分類信息的主題。注意: 全選或全不選均為不進行任何過濾',
	'threadlist_sortids_all' => '全部的分類信息',
	'threadlist_digest' => '精華主題過濾',
	'threadlist_digest_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'threadlist_digest_0' => '普通主題',
	'threadlist_digest_1' => '精華 I',
	'threadlist_digest_2' => '精華 II',
	'threadlist_digest_3' => '精華 III',
	'threadlist_stick' => '置頂主題過濾',
	'threadlist_stick_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'threadlist_stick_0' => '普通主題',
	'threadlist_stick_1' => '置頂 I',
	'threadlist_stick_2' => '置頂 II',
	'threadlist_stick_3' => '置頂 III',
	'threadlist_special' => '特殊主題過濾',
	'threadlist_special_comment' => '設置特定的主題範圍。注意: 全選或全不選均為不進行任何過濾',
	'threadlist_special_1' => '投票主題',
	'threadlist_special_2' => '商品主題',
	'threadlist_special_3' => '懸賞主題',
	'threadlist_special_4' => '活動主題',
	'threadlist_special_5' => '辯論主題',
	'threadlist_special_0' => '普通主題',
	'threadlist_special_reward' => '懸賞主題過濾',
	'threadlist_special_reward_comment' => '設置特定類型的懸賞主題',
	'threadlist_special_reward_0' => 'Tất cả',
	'threadlist_special_reward_1' => '已解決',
	'threadlist_special_reward_2' => '未解決',
	'threadlist_recommend' => '推薦主題過濾',
	'threadlist_viewmod' => '文章模式查看',
	'threadlist_recommend_comment' => '設置是否只顯示推薦的主題',
	'threadlist_picrequired' => '必須含圖片附件',
	'threadlist_picrequired_comment' => '設置是否只顯示含有圖片附件的主題',
	'threadlist_orderby' => '主題排序方式',
	'threadlist_orderby_comment' => '設置以哪一字段或方式對主題進行排序',
	'threadlist_orderby_lastpost' => '按最後回復時間倒序排序',
	'threadlist_orderby_dateline' => '按發佈時間倒序排序',
	'threadlist_orderby_replies' => '按回複數倒序排序',
	'threadlist_orderby_views' => '按瀏覽次數倒序排序',
	'threadlist_orderby_heats' => '按熱度倒序排序',
	'threadlist_orderby_recommends' => '按主題評價倒序排序',
	'threadlist_orderby_hourviews' => '按指定時間內瀏覽次數倒序排序',
	'threadlist_orderby_todayviews' => '按當天瀏覽次數倒序排序',
	'threadlist_orderby_weekviews' => '按本周瀏覽次數倒序排序',
	'threadlist_orderby_monthviews' => '按當月瀏覽次數倒序排序',
	'threadlist_orderby_hours' => '指定時間(小時)',
	'threadlist_orderby_hours_comment' => '指定時間內瀏覽次數倒序排序的時間值',
	'threadlist_orderby_todayhots' => '按當天累計售出數倒序排序',
	'threadlist_orderby_weekhots' => '按本周累計售出數倒序排序',
	'threadlist_orderby_monthhots' => '按當月累計售出數倒序排序',
	'threadlist_lastpost' => '最後更新時間',
	'threadlist_lastpost_nolimit' => '不限制',
	'threadlist_lastpost_hour' => '1小時內',
	'threadlist_lastpost_day' => '24小時內',
	'threadlist_lastpost_week' => '7天內',
	'threadlist_lastpost_month' => '1個月內',
	'threadlist_price_add' => ' 附加 ',
	'threadlist_place' => '活動地點',
	'threadlist_class' => '活動類型',
	'threadlist_gender' => '性別要求',
	'threadlist_gender_0' => '不限',
	'threadlist_gender_1' => '男',
	'threadlist_gender_2' => '女',
	'threadlist_orderby_weekstart' => '按一周內活動開始時間排序',
	'threadlist_orderby_monthstart' => '按一月內活動開始時間排序',
	'threadlist_orderby_weekexp' => '按一周內報名截止時間排序',
	'threadlist_orderby_monthexp' => '按一月內報名截止時間排序',
);

?>