<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: block_pic.php 10104 2010-05-06 11:59:12Z xupeng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class block_pic {
	var $setting = array();
	function block_pic() {
		$this->setting = array(
			'picids'	=> array(
				'title' => 'piclist_picids',
				'type' => 'text',
				'value' => ''
			),
			'uids'	=> array(
				'title' => 'piclist_uids',
				'type' => 'text',
				'value' => ''
			),
			'aids'	=> array(
				'title' => 'piclist_aids',
				'type' => 'text',
				'value' => ''
			),
			'titlelength' => array(
				'title' => 'piclist_titlelength',
				'type' => 'text',
				'default' => 40
			),
			'orderby' => array(
				'title' => 'piclist_orderby',
				'type' => 'mradio',
				'value' => array(
					array('dateline', 'piclist_orderby_dateline'),
					array('hot', 'piclist_orderby_hot')
				),
				'default' => 'dateline'
			),
			'hours' => array(
				'title' => 'piclist_hours',
				'type' => 'mradio',
				'value' => array(
					array('', 'piclist_hours_nolimit'),
					array('1', 'piclist_hours_hour'),
					array('24', 'piclist_hours_day'),
					array('168', 'piclist_hours_week'),
					array('720', 'piclist_hours_month'),
					array('8760', 'piclist_hours_year'),
				),
				'default' => ''
			),
			'startrow' => array(
				'title' => 'piclist_startrow',
				'type' => 'text',
				'default' => 0
			),
		);
	}

	function name() {
		return lang('blockclass', 'blockclass_pic_script_pic');
	}

	function blockclass() {
		return array('pic', lang('blockclass', 'blockclass_space_pic'));
	}

	function fields() {
		return array(
				'url' => array('name' => lang('blockclass', 'blockclass_pic_field_url'), 'formtype' => 'text', 'datatype' => 'string'),
				'title' => array('name' => lang('blockclass', 'blockclass_pic_field_title'), 'formtype' => 'title', 'datatype' => 'title'),
				'pic' => array('name' => lang('blockclass', 'blockclass_pic_field_pic'), 'formtype' => 'pic', 'datatype' => 'pic'),
				'summary' => array('name' => lang('blockclass', 'blockclass_pic_field_summary'), 'formtype' => 'summary', 'datatype' => 'summary'),
				'uid' => array('name' => lang('blockclass', 'blockclass_pic_field_uid'), 'formtype' => 'text', 'datatype' => 'int'),
				'username' => array('name' => lang('blockclass', 'blockclass_pic_field_username'), 'formtype' => 'text', 'datatype' => 'string'),
				'dateline' => array('name' => lang('blockclass', 'blockclass_pic_field_dateline'), 'formtype' => 'date', 'datatype' => 'date'),
				'viewnum' => array('name' => lang('blockclass', 'blockclass_pic_field_viewnum'), 'formtype' => 'text', 'datatype' => 'int'),
				'click1' => array('name' => lang('blockclass', 'blockclass_pic_field_click1'), 'formtype' => 'text', 'datatype' => 'int'),
				'click2' => array('name' => lang('blockclass', 'blockclass_pic_field_click2'), 'formtype' => 'text', 'datatype' => 'int'),
				'click3' => array('name' => lang('blockclass', 'blockclass_pic_field_click3'), 'formtype' => 'text', 'datatype' => 'int'),
				'click4' => array('name' => lang('blockclass', 'blockclass_pic_field_click4'), 'formtype' => 'text', 'datatype' => 'int'),
				'click5' => array('name' => lang('blockclass', 'blockclass_pic_field_click5'), 'formtype' => 'text', 'datatype' => 'int'),
				'click6' => array('name' => lang('blockclass', 'blockclass_pic_field_click6'), 'formtype' => 'text', 'datatype' => 'int'),
				'click7' => array('name' => lang('blockclass', 'blockclass_pic_field_click7'), 'formtype' => 'text', 'datatype' => 'int'),
				'click8' => array('name' => lang('blockclass', 'blockclass_pic_field_click8'), 'formtype' => 'text', 'datatype' => 'int'),
			);
	}

	function getsetting() {
		global $_G;
		$settings = $this->setting;

		return $settings;
	}

	function cookparameter($parameter) {
		return $parameter;
	}

	function getdata($style, $parameter) {
		global $_G;

		$parameter = $this->cookparameter($parameter);
		$picids		= !empty($parameter['picids']) ? explode(',', $parameter['picids']) : array();
		$uids		= !empty($parameter['uids']) ? explode(',', $parameter['uids']) : array();
		$aids		= !empty($parameter['aids']) ? explode(',', $parameter['aids']) : array();
		$startrow	= isset($parameter['startrow']) ? intval($parameter['startrow']) : 0;
		$items		= isset($parameter['items']) ? intval($parameter['items']) : 10;
		$hours		= isset($parameter['hours']) ? intval($parameter['hours']) : '';
		$titlelength = isset($parameter['titlelength']) ? intval($parameter['titlelength']) : 40;
		$orderby	= isset($parameter['orderby']) && in_array($parameter['orderby'],array('dateline', 'viewnum', 'replynum', 'hot')) ? $parameter['orderby'] : 'dateline';

		$bannedids = !empty($parameter['bannedids']) ? explode(',', $parameter['bannedids']) : array();

		$list = array();
		$wheres = array();
		if($picids) {
			$wheres[] = 'pic.picid IN ('.dimplode($picids).')';
		}
		if($uids) {
			$wheres[] = 'pic.uid IN ('.dimplode($uids).')';
		}
		if($aids) {
			$wheres[] = 'pic.albumid IN ('.dimplode($aids).')';
		}
		if($hours) {
			$timestamp = TIMESTAMP - 3600 * $hours;
			$wheres[] = "pic.dateline >= '$timestamp'";
		}
		if($bannedids) {
			$wheres[] = 'pic.picid NOT IN ('.dimplode($bannedids).')';
		}
		$wheresql = $wheres ? implode(' AND ', $wheres) : '1';
		$sql = "SELECT pic.* FROM ".DB::table('home_pic')." pic LEFT JOIN ".DB::table('home_album')." album ON pic.albumid=album.albumid WHERE $wheresql AND album.friend='0' ORDER BY pic.$orderby DESC";
		$query = DB::query($sql." LIMIT $startrow,$items;");
		while($data = DB::fetch($query)) {
			$list[] = array(
				'id' => $data['picid'],
				'idtype' => 'picid',
				'title' => cutstr($data['title'], $titlelength, ''),
				'url' => "home.php?mod=space&do=album&uid=$data[uid]&picid=$data[picid]",
				'pic' => $data['remote'] >= 2 ? 'forum/'.$data['filepath'] : 'album/'.$data['filepath'],
				'picflag' => ($data['remote'] == 1 || $data['remote'] == 3) ? '2' : '1',
				'summary' => '',
				'fields' => array(
					'fulltitle' => $data['title'],
					'uid'=>$data['uid'],
					'username'=>$data['username'],
					'dateline'=>$data['dateline'],
					'replynum'=>$data['replynum'],
					'click1'=>$data['click1'],
					'click2'=>$data['click2'],
					'click3'=>$data['click3'],
					'click4'=>$data['click4'],
					'click5'=>$data['click5'],
					'click6'=>$data['click6'],
					'click7'=>$data['click7'],
					'click8'=>$data['click8'],
				)
			);
		}
		return array('html' => '', 'data' => $list);
	}
}

?>