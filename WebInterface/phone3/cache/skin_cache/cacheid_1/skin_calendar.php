<?php
/*--------------------------------------------------*/
/* FILE GENERATED BY INVISION POWER BOARD 3         */
/* CACHE FILE: Skin set id: 1               */
/* CACHE FILE: Generated: Sun, 06 Sep 2009 04:32:03 GMT */
/* DO NOT EDIT DIRECTLY - THE CHANGES WILL NOT BE   */
/* WRITTEN TO THE DATABASE AUTOMATICALLY            */
/*--------------------------------------------------*/

class skin_calendar_1 {

/**
* Construct
*/
function __construct( ipsRegistry $registry )
{
	/* Make object */
	$this->registry   =  $registry;
	$this->DB         =  $this->registry->DB();
	$this->settings   =& $this->registry->fetchSettings();
	$this->request    =& $this->registry->fetchRequest();
	$this->lang       =  $this->registry->getClass('class_localization');
	$this->member     =  $this->registry->member();
	$this->memberData =& $this->registry->member()->fetchMemberData();
	$this->cache      =  $this->registry->cache();
	$this->caches     =& $this->registry->cache()->fetchCaches();
}
	/* -- cal_approve_button --*/
function cal_approve_button($id="",$cal_id="",$event="") {
$IPBHTML = "";
$IPBHTML .= "<li class='post_approve'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;do=calendarEventApprove&amp;modfilter={$this->request['modfilter']}&amp;qt={$event['_quicktime']}&amp;approve=1&amp;md5check={$this->member->form_hash}&amp;cal_id={$cal_id}&amp;event_id=$id", 'public','' ), "", "" ) . "\" title='{$this->lang->words['approve_event']}'>" . $this->registry->getClass('output')->getReplacement("edit_post_icon") . " {$this->lang->words['approve_event']}</a></li>";
return $IPBHTML;
}

/* -- cal_blank_cell --*/
function cal_blank_cell() {
$IPBHTML = "";
$IPBHTML .= "<td class=\"blank\"><!-- no content --></td>";
return $IPBHTML;
}

/* -- cal_date_cell --*/
function cal_date_cell($month_day="",$events="",$cal_date_queued="",$queued=0, $js_id) {
$IPBHTML = "";
$IPBHTML .= "<!--Day-->
" . (($queued != 0) ? ("
<td id='{$js_id}' class=\"moderated\">
	<strong>{$month_day}</strong><a href=\"{$cal_date_queued}\">" . $this->registry->getClass('output')->getReplacement("t_queued") . "</a>
") : ("
<td id='{$js_id}'>
	<strong>{$month_day}</strong>
")) . "
	{$events}
</td>";
return $IPBHTML;
}

/* -- cal_date_cell_today --*/
function cal_date_cell_today($month_day="",$events="",$cal_date_queued="",$queued=0, $js_id) {
$IPBHTML = "";
$IPBHTML .= "<!--Day-->
" . (($queued != 0) ? ("
<td id='{$js_id}' class=\"today moderated\">
 	<strong>{$month_day}: {$this->lang->words['today_title']}</strong> <a href=\"{$cal_date_queued}\">" . $this->registry->getClass('output')->getReplacement("t_queued") . "</a>
") : ("
<td id='{$js_id}' class=\"today\">
	<strong>{$month_day}: {$this->lang->words['today_title']}</strong>
")) . "
	{$events}
</td>";
return $IPBHTML;
}

/* -- cal_day_bit --*/
function cal_day_bit($day="", $id='') {
$IPBHTML = "";
$IPBHTML .= "<td id='{$id}'><strong>{$day}</strong></td>";
return $IPBHTML;
}

/* -- cal_edit_del_button --*/
function cal_edit_del_button($id="",$cal_id="") {
$IPBHTML = "";
$IPBHTML .= "<li class='post_del'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;do=delete&amp;md5check={$this->member->form_hash}&amp;event_id={$id}&amp;cal_id={$cal_id}", 'public','' ), "", "" ) . "' title='{$this->lang->words['calendar_delete_title']}'>" . $this->registry->getClass('output')->getReplacement("delete_post_icon") . " {$this->lang->words['calendar_delete_button']}</a></li>
<li class='post_edit'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;do=edit&amp;cal_id={$cal_id}&amp;event_id={$id}", 'public','' ), "", "" ) . "' title='{$this->lang->words['calendar_edit_title']}'>" . $this->registry->getClass('output')->getReplacement("edit_post_icon") . " {$this->lang->words['calendar_edit_button']}</a></li>";
return $IPBHTML;
}

/* -- cal_events_end --*/
function cal_events_end() {
$IPBHTML = "";
$IPBHTML .= "</ul>";
return $IPBHTML;
}

/* -- cal_events_start --*/
function cal_events_start() {
$IPBHTML = "";
$IPBHTML .= "<ul>";
return $IPBHTML;
}

/* -- cal_events_wrap --*/
function cal_events_wrap($event="") {
$IPBHTML = "";
$IPBHTML .= "<li class='cal'>
	<a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$event['event_calendar_id']}&amp;do=showevent&amp;event_id={$event['event_id']}", 'public','' ), "false", "event" ) . "\" title='{$this->lang->words['view_event']}'>{$event['event_title']}</a>
</li>";
return $IPBHTML;
}

/* -- cal_events_wrap_manual --*/
function cal_events_wrap_manual($url="",$text="") {
$IPBHTML = "";
$IPBHTML .= "" . ((strpos( $url, "do=showevent" ) !== false) ? ("
	<li class='cal'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;{$url}", 'public','' ), "false", "event" ) . "\" title='{$this->lang->words['view_event']}'>{$text}</a></li>
") : ("
	<li class='cal'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;{$url}", 'public','' ), "", "" ) . "\" title='{$this->lang->words['view_event']}'>{$text}</a></li>
")) . "";
return $IPBHTML;
}

/* -- cal_events_wrap_range --*/
function cal_events_wrap_range($event="") {
$IPBHTML = "";
$IPBHTML .= "<li class='cal'>
	<a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$event['event_calendar_id']}&amp;do=showevent&amp;event_id={$event['event_id']}", 'public','' ), "false", "event" ) . "\" title='{$this->lang->words['view_event']}'>{$event['event_title']}</a>
</li>";
return $IPBHTML;
}

/* -- cal_events_wrap_recurring --*/
function cal_events_wrap_recurring($event="") {
$IPBHTML = "";
$IPBHTML .= "<li class='cal'>
	<a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$event['event_calendar_id']}&amp;do=showevent&amp;event_id={$event['event_id']}", 'public','' ), "", "" ) . "\" title=\"{$this->lang->words['tbt_recur']}\">{$event['event_title']}</a>
</li>";
return $IPBHTML;
}

/* -- cal_new_row --*/
function cal_new_row($week="") {
$IPBHTML = "";

$this->row_class = ( $this->row_class == 'row1' ) ? 'row2' : 'row1';
$IPBHTML .= "</tr>
<!-- NEW ROW--><tr class='{$this->row_class}'>
	<th class='view_week header' scope='row'>
		<a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$this->request['_cal_id']}&amp;do=showweek&amp;week={$week}", 'public','' ), "false", "cal_week" ) . "\" title=\"{$this->lang->words['view_this_week']}\"><img src=\"{$this->settings['img_url']}/next.png\" alt='{$this->lang->words['icon']}' /></a>
	</th>";
return $IPBHTML;
}

/* -- cal_show_event --*/
function cal_show_event($event="",$member="",$event_type="",$edit_button="",$approve_button="",$type="",$date_ends="") {
$IPBHTML = "";
$IPBHTML .= "" . ((!$this->settings['disable_lightbox']) ? ("
" . $this->registry->getClass('output')->getTemplate('global')->include_lightbox() . "
") : ("")) . "
" . $this->registry->getClass('output')->getTemplate('global')->include_highlighter(1) . "
<h2 class='maintitle'>{$this->lang->words['event_prefix']} {$event['event_title']}</h2>
<div class='generic_bar'></div>
<div class='post_block " . (($event['event_approved']==0) ? ("moderated") : ("")) . "' id='event_id_{$event['event_id']}'>
	<div class='post_wrap'>
		" . (($member['member_id']) ? ("
			<h3>
		") : ("
			<h3 class='guest'>
		")) . "
				" . (($member['member_id']) ? ("" . (($member['_online']) ? ("
						" . $this->registry->getClass('output')->getReplacement("user_online") . "
					") : ("
						" . $this->registry->getClass('output')->getReplacement("user_offline") . "
					")) . " &nbsp;
							<span class=\"author vcard\"><a class=\"url fn\" href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "showuser={$member['member_id']}", 'public','' ), "{$member['members_seo_name']}", "showuser" ) . "' title='{$this->lang->words['view_profile']}'>{$member['members_display_name']}</a>" . $this->registry->getClass('output')->getTemplate('global')->user_popup($member['member_id'],$member['members_seo_name']) . "</span>") : ("
					{$member['members_display_name']}
				")) . "
			</h3>
		<div class='author_info'>
			" . $this->registry->getClass('output')->getTemplate('global')->userInfoPane($member, $event['event_id'], array()) . "
		</div>
		<div class='post_body'>
			<p class='posted_info'>
				" . (($post['post']['icon_id']) ? ("
					<img src=\"{$this->settings['public_dir']}/style_extra/post_icons/icon{$post['post']['icon_id']}.gif\" alt=\"{$this->lang->words['icon']}\" />&nbsp;
				") : ("")) . "
				<strong class='event'>{$this->lang->words['event_date']} {$event['_start_date']} {$date_ends} {$event['time']} ({$type})</strong>
			</p>
			<div class='post entry-content'>
				{$event['event_content']}
			</div>
		</div>
		<ul class='post_controls'>
			" . ((($this->settings['disable_reportpost'] != 1) and ( $this->memberData['member_id'] )) ? ("
				<li class='report'><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=core&amp;module=reports&amp;rcom=calendar&amp;event_id={$event['event_id']}", 'public','' ), "", "" ) . "' title='{$this->lang->words['report_event']}'>" . $this->registry->getClass('output')->getReplacement("report_post_icon") . " {$this->lang->words['report']}</a></li>
			") : ("")) . "
			<!-- SKINNOTE: Add report link back in -->
			{$approve_button} {$edit_button}
		</ul>
	</div>			
</div>";
return $IPBHTML;
}

/* -- cal_unapprove_button --*/
function cal_unapprove_button($id="",$cal_id="",$event="") {
$IPBHTML = "";
$IPBHTML .= "<li class='post_unapprove'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;do=calendarEventApprove&amp;modfilter={$this->request['modfilter']}&amp;qt={$event['_quicktime']}&amp;approve=0&amp;md5check={$this->member->form_hash}&amp;cal_id={$cal_id}&amp;event_id={$id}", 'public','' ), "", "" ) . "\" title='{$this->lang->words['unapprove_event']}'>" . $this->registry->getClass('output')->getReplacement("edit_post_icon") . " {$this->lang->words['unapprove_event']}</a></li>";
return $IPBHTML;
}

/* -- cal_week_content --*/
function cal_week_content($calendars, $date="",$month="",$year="",$prev="",$next="", $cal_id=1) {
$IPBHTML = "";
$IPBHTML .= "" . $this->registry->getClass('output')->addJSModule("calendar", "0" ) . "
<h2>{$this->lang->words['calendars']}</h2>
<div id='calendar_list' class='left general_box'>
	" . ((is_array( $calendars ) && count( $calendars )) ? ("
	<p><strong>{$this->lang->words['select_calendar']}</strong></p>
	<ol>
		".$this->__f__f5be3ed62dc1f1448c73126eb2817e47($calendars,$date,$month,$year,$prev,$next,$cal_id)."	</ol>
	") : ("")) . "
	<strong>{$this->lang->words['jump_to']}</strong><br />
	<form action=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$this->request['_cal_id']}", 'public','' ), "", "" ) . "\" method=\"post\">
		<fieldset>
			<label for='m' class='hide'>{$this->lang->words['fv_months']}:</label>
			<select name=\"m\" class='input_select'><!--IBF.MONTH_BOX--></select>&nbsp;
			<label for='year' class='hide'>{$this->lang->words['fv_years']}:</label>
			<select name=\"year\" class='input_select'><!--IBF.YEAR_BOX--></select>&nbsp;
			<input type='submit' class='input_submit' value='{$this->lang->words['jmp_go']}' />
		</fieldset>
	</form>
</div>
<div id='current_calendar' class='right calendar_wrap'>
	<div class='topic_controls'>
		<ul class='pagination'>
			<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=showweek&amp;week={$prev['0']}", 'public','' ), "false", "cal_week" ) . "\" title=\"{$prev['month_name']} {$prev['year_id']}\">&larr; {$this->lang->words['week_previous']}</a></li>
			<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=showweek&amp;week={$next['0']}", 'public','' ), "false", "cal_week" ) . "\" title=\"{$next['month_name']} {$next['year_id']}\">{$this->lang->words['week_next']} &rarr;</a></li>
		</ul>
		<ul class='topic_buttons'>
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=newevent&amp;formtype=single", 'public','' ), "", "" ) . "' title='{$this->lang->words['se_normal']}'>" . $this->registry->getClass('output')->getReplacement("cal_single") . " {$this->lang->words['event_add_single']}</a></li>
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=newevent&amp;formtype=range", 'public','' ), "", "" ) . "' title='{$this->lang->words['se_range']}'>" . $this->registry->getClass('output')->getReplacement("cal_ranged") . " {$this->lang->words['event_add_ranged']}</a></li>
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=newevent&amp;formtype=recur", 'public','' ), "", "" ) . "' title='{$this->lang->words['se_recur']}'>" . $this->registry->getClass('output')->getReplacement("cal_recurring") . " {$this->lang->words['event_add_recurring']}</a></li>
		</ul>
	</div>
	<br />
	<h2 class='maintitle'>{$this->lang->words['week_beginning']} {$date} {$month} {$year}</h2>
	<ol id='week_view' class='clear'>
		<!--IBF.DAYS_CONTENT-->
	</ol>
</div>
<div id='mini_calendars' class='left calendar_wrap'>
	<!--PREV.MONTH-->
	<br />
	<!--THIS.MONTH-->	
	<br />
	<!--NEXT.MONTH-->
</div>";
return $IPBHTML;
}


function __f__f5be3ed62dc1f1448c73126eb2817e47($calendars, $date="",$month="",$year="",$prev="",$next="", $cal_id=1)
{
	$_ips___x_retval = '';
	foreach( $calendars as $cid => $cal )
	{
		
		$_ips___x_retval .= "
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cid}&amp;do=showweek&amp;week={$this->request['week']}", 'public','' ), "false", "cal_week" ) . "' title=\"{$this->lang->words['view_this_calendar']}\" class='rounded'>{$cal['cal_title']}</a></li>
		
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- cal_week_dayentry --*/
function cal_week_dayentry($wday="",$date="",$month="",$mid="",$year="",$events="",$queued=0) {
$IPBHTML = "";

$this->week_view = ( $this->week_view == 'row1' ) ? 'row2' : 'row1';
$IPBHTML .= " 
<li id='day-{$year}_{$mid}_{$date}' class='day {$this->week_view} " . (($queued != 0) ? ("{$this->lang->words['moderated']}") : ("")) . "'>
	<h3 class='bar'>{$wday}</h3>
	<div>
		<span class='date altrow'>{$date}</span>
		<ul>
			{$events}
		</ul>
	</div>
</li>";
return $IPBHTML;
}

/* -- cal_week_events_wrap --*/
function cal_week_events_wrap($link="",$text="") {
$IPBHTML = "";
$IPBHTML .= "<li class='cal'>
	<a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;$link", 'public','' ), "", "" ) . "\" title='{$this->lang->words['view_event']}'>{$text}</a>
</li>";
return $IPBHTML;
}

/* -- cal_week_events_wrap_range --*/
function cal_week_events_wrap_range($link="",$text="",$ft="",$bg="") {
$IPBHTML = "";
$IPBHTML .= "<div style=\"background-color: $bg; color: $ft; padding: 3px; border: 1px outset $bg; width: 50%;\">
	<a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;$link", 'public','' ), "", "" ) . "' style=\"color: $ft;\">$text</a>
</div>";
return $IPBHTML;
}

/* -- cal_week_monthbar --*/
function cal_week_monthbar($month="",$year="") {
$IPBHTML = "";
$IPBHTML .= "<li class='month_bar header'>
	{$month} {$year}
</li>";
return $IPBHTML;
}

/* -- calendar_rss_range --*/
function calendar_rss_range($event) {
$IPBHTML = "";
$IPBHTML .= "<p>{$event['event_content']}</p>
<br />
<p>{$this->lang->words['c_ranged']}
<br />{$this->lang->words['c_fromcolon']} {$event['_from_month']}/{$event['_from_day']}/{$event['_from_year']}
<br />{$this->lang->words['c_tocolon']} {$event['_to_month']}/{$event['_to_day']}/{$event['_to_year']}</p>";
return $IPBHTML;
}

/* -- calendar_rss_recurring --*/
function calendar_rss_recurring($event) {
$IPBHTML = "";
$IPBHTML .= "<p>{$event['event_content']}</p>
<br />
<p>{$this->lang->words['c_recurring']}
<br />{$this->lang->words['c_fromcolon']} {$event['_from_month']}/{$event['_from_day']}/{$event['_from_year']}
<br />{$this->lang->words['c_tocolon']} {$event['_to_month']}/{$event['_to_day']}/{$event['_to_year']}</p>";
return $IPBHTML;
}

/* -- calendar_rss_single --*/
function calendar_rss_single($event) {
$IPBHTML = "";
$IPBHTML .= "<p>{$event['event_content']}</p>
<br />
<p>{$this->lang->words['c_singleday']} {$event['_from_month']}/{$event['_from_day']}/{$event['_from_year']}</p>";
return $IPBHTML;
}

/* -- calendarBirthdayList --*/
function calendarBirthdayList($rows) {
$IPBHTML = "";

$this->registry->templateStriping['bday'] = array( FALSE, "row1","row2");
$IPBHTML .= "<h2>{$this->lang->words['cal_birthdays']}</h2>
<div class='general_box'>	<ul>
		".$this->__f__5d9c29eb4ad903d71cbb4bab0b20531e($rows)."	</ul>
</div>";
return $IPBHTML;
}


function __f__5d9c29eb4ad903d71cbb4bab0b20531e($rows)
{
	$_ips___x_retval = '';
	foreach( $rows as $r )
	{
		
		$_ips___x_retval .= "
			<li class='" .  IPSLib::next( $this->registry->templateStriping["bday"] ) . "'><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "showuser={$r['uid']}", 'public','' ), "{$r['seoname']}", "showuser" ) . "\">{$r['uname']}</a> " . (($r['age']) ? ("(<strong>{$r['age']}</strong>)") : ("")) . "</li>
		
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- calendarEventForm --*/
function calendarEventForm($code="", $calendar_id="", $formtype="", $event_id='', $event_title='', $form_title='', $event_date='', $event_type='', $groups, $button, $editor) {
$IPBHTML = "";
$IPBHTML .= "" . $this->registry->getClass('output')->addJSModule("calendar", "0" ) . "
<script type='text/javascript'>
	ipb.calendar.inSection = 'form';
</script>
<div class='post_form'>
<form id='postingform' action=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&module=calendar&amp;do={$code}&amp;cal_id={$calendar_id}&amp;formtype={$formtype}&amp;event_id={$event_id}", 'public','' ), "", "" ) . "\" method=\"post\">
	<input type=\"hidden\" name=\"removeattachid\" value=\"\" />
	
	<h2 class='maintitle'>{$form_title}</h2>
	<div class='generic_bar'></div>
	
	<fieldset>
		<h3 class='bar'>{$this->lang->words['event_details']}</h3>
		<ul>
			<li class='field'>
				<label for='event_title'>{$this->lang->words['calendar_title']}</label>
				<input type='text' id='event_title' class='input_text' name='event_title' value=\"{$event_title}\" size='50' maxlength='50' />
			</li>
			
			" . (($formtype == 'single') ? ("
			<li class='field'>
				<label for='e_day'>{$this->lang->words['fv_single']}</label>
				<!-- SKINNOTE: Update this to use the calendar picker? -->
				<select class='input_select' name=\"e_day\" id='e_day'>{$event_date['nd']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"e_month\">{$event_date['nm']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"e_year\">{$event_date['ny']}</select>
			</li>
			") : ("")) . "
			
			" . (($formtype == 'range') ? ("
			<li class='field'>
				<label for='e_day'>{$this->lang->words['fv_single']}</label>
				<select class='input_select' name=\"e_day\" id='e_day'>{$event_date['nd']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"e_month\">{$event_date['nm']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"e_year\">{$event_date['ny']}</select>
			</li>
			<li class='field'>
				<label for='end_day'>{$this->lang->words['fv_range_ends']}</label>
				<select class='input_select' name=\"end_day\" id='end_day'>{$event_date['fd']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"end_month\">{$event_date['fm']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"end_year\">{$event_date['fy']}</select>
			</li>
			") : ("")) . "
			
			" . (($formtype == 'recur') ? ("
			<li class='field'>
				<label for='e_day'>{$this->lang->words['fv_single']}</label>
				<select class='input_select' name=\"e_day\" id='e_day'>{$event_date['nd']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"e_month\">{$event_date['nm']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"e_year\">{$event_date['ny']}</select>
			</li>
			<li class='field'>
				<label for='recur_unit'>{$this->lang->words['fv_recur']}</label>
				{$this->lang->words['fv_recur_every']} 
				<select class='input_select' name=\"recur_unit\" id='recur_unit'>{$event_date['recur_unit']}</select>
				
				{$this->lang->words['fv_until']}
				<select class='input_select' name=\"end_day\">{$event_date['fd']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"end_month\">{$event_date['fm']}</select>&nbsp;&nbsp;
				<select class='input_select' name=\"end_year\">{$event_date['fy']}</select>
			</li>
			") : ("")) . "
			
			" . (($event_type['timestuff']['formtype'] != 'range') ? ("
			<li class='field checkbox'>
				<input class='input_check' type='checkbox' id='set_times' name='set_times' {$event_type['timestuff']['checked']} value='1' /> 
				<label for='set_times'>{$this->lang->words['form_set_times']}</label>
			</li>
			<li class='field time_setting'>
				<label for='timezone'>{$this->lang->words['form_tz']}</label>
				{$event_type['timezone']}
			</li>
			<li class='field time_setting'>
				<label for='tz_start'>{$this->lang->words['form_timestart']}</label>
				<input class='input_text' type='text' size='8' id='tz_start' name='event_timestart' value='{$event_type['timestuff']['timestart']}' />
			</li>
			") : ("")) . "
		</ul>
		<h3 class='bar'>{$this->lang->words['event_options']}</h3>
		<ul>
			<li class='field'>
				<label for='event_calendar_id'>{$this->lang->words['form_whichcal']}</label>
				<select name='event_calendar_id' id='event_calendar_id'>{$event_type['dropdown']}</select>
			</li>
			<li class='field'>
				<label for='e_type'>{$this->lang->words['calendar_event_type']}</label>
				<select name=\"e_type\" id='e_type'>
					<option value=\"public\"{$event_type['pub_select']}>{$this->lang->words['calendar_type_public']}</option>
					<option value=\"private\"{$event_type['priv_select']}>{$this->lang->words['calendar_type_private']}</option>
				</select>
			</li>
			" . (($this->memberData['g_access_cp']) ? ("
			<li class='field type_setting'>
				<label for='e_groups'>{$this->lang->words['calendar_group_filter']}</label>
				<select name=\"e_groups[]\" id='e_groups' size=\"5\" multiple='multiple'>{$groups}</select>
			</li>
			<li class='field checkbox type_setting'>
				<input type='checkbox' id='all_groups' value='1' class='input_check' />
				<label for='all_groups'>{$this->lang->words['all_groups']}</label>
			") : ("")) . "
		</ul>
		<script type='text/javascript'>
			" . (($event_type['timestuff']['divhide'] == 'none') ? ("
			$$('.time_setting').invoke('hide');
			") : ("")) . "
			
			" . (($this->memberData['g_access_cp']) ? ("
			ipb.calendar.hideAdminOptions();
			") : ("")) . "
		</script>
		<h3 class='bar'>{$this->lang->words['event']}</h3>
		<ul>
			<li>{$editor}</li>
			<li class='field checkbox'>
				<input type=\"checkbox\" name=\"enableemo\" class=\"input_check\" value=\"yes\" " . (($event_type['smilies'] == 1) ? ("checked='checked'") : ("")) . " />
				<label for='enableemo'>{$this->lang->words['enable_emo']}</label>
			</li>
		</ul>
	</fieldset>
	<fieldset class='submit'>
		<input class='input_submit' type=\"submit\" value=\"{$button}\" tabindex=\"4\" /> {$this->lang->words['or']} <a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$calendar_id}", 'public','' ), "", "" ) . "' title='{$this->lang->words['cancel']}' class='cancel'>{$this->lang->words['cancel']}</a>
	</fieldset>
</form>
</div>";
return $IPBHTML;
}

/* -- calendarEventsList --*/
function calendarEventsList($events) {
$IPBHTML = "";
$IPBHTML .= "" . $this->registry->getClass('output')->addJSModule("topic", "0" ) . "
<script type=\"text/javascript\">
//<![CDATA[
	function calendar_event_delete(id, cal_id)
	{
		if (confirm('{$this->lang->words['js_del_1']}'))
		{
			 window.location.href = \"{$this->settings['base_url']}app=calendar&amp;module=calendar&amp;do=delete&md5check={$this->member->form_hash}&event_id=\" + id + \"&cal_id=\" + cal_id;
		 }
		 else {
			alert ('{$this->lang->words['js_del_2']}');
		} 
	}
//]]>
</script>
<!--SKINNOTE: I commented this out because we need to show event titles, and this seemed \"prettiest\", but feel free to change -->
<!--<h2>{$this->lang->words['cal_title_events']}</h2>
<div class='generic_bar'></div>-->
{$events}";
return $IPBHTML;
}

/* -- calendarMainContent --*/
function calendarMainContent($calendars, $month="",$year="",$prev="",$next="",$cal_jump="",$cal_id="",$day_words="") {
$IPBHTML = "";
$IPBHTML .= "" . $this->registry->getClass('output')->addJSModule("calendar", "0" ) . "
<h2>{$this->lang->words['calendars']}</h2>
<div id='calendar_list' class='left general_box'>
	" . ((is_array( $calendars ) && count( $calendars )) ? ("
	<p><strong>{$this->lang->words['select_calendar']}</strong></p>
	<ol>
		".$this->__f__3db013440c360862dcf4de666132a2d7($calendars,$month,$year,$prev,$next,$cal_jump,$cal_id,$day_words)."	</ol>
	") : ("")) . "
	<strong>{$this->lang->words['jump_to']}</strong><br />
	<form action=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar", 'public','' ), "", "" ) . "\" method=\"post\">
		<fieldset>
			<input type='hidden' name='cal_id' value='{$this->request['cal_id']}' />
			<label for='m' class='hide'>{$this->lang->words['fv_months']}:</label>
			<select name=\"m\" class='input_select'><!--IBF.MONTH_BOX--></select>&nbsp;
			<label for='year' class='hide'>{$this->lang->words['fv_years']}:</label>
			<select name=\"year\" class='input_select'><!--IBF.YEAR_BOX--></select>&nbsp;
			<input type='submit' class='input_submit' value='{$this->lang->words['jmp_go']}' />
		</fieldset>
	</form>
</div>
<div id='current_calendar' class='right calendar_wrap'>
	<div class='topic_controls'>
		<ul class='pagination'>
			<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;m={$prev['month_id']}&amp;y={$prev['year_id']}", 'public','' ), "", "" ) . "\" title=\"{$prev['month_name']} {$prev['year_id']}\">&larr; {$this->lang->words['month_previous']}</a></li>
			<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;m={$next['month_id']}&amp;y={$next['year_id']}", 'public','' ), "", "" ) . "\" title=\"{$next['month_name']} {$next['year_id']}\">{$this->lang->words['month_next']} &rarr;</a></li>
		</ul>
		<ul class='topic_buttons'>
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=newevent&amp;formtype=single", 'public','' ), "", "" ) . "' title='{$this->lang->words['se_normal']}'>" . $this->registry->getClass('output')->getReplacement("cal_single") . " {$this->lang->words['event_add_single']}</a></li>
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=newevent&amp;formtype=range", 'public','' ), "", "" ) . "' title='{$this->lang->words['se_range']}'>" . $this->registry->getClass('output')->getReplacement("cal_ranged") . " {$this->lang->words['event_add_ranged']}</a></li>
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=newevent&amp;formtype=recur", 'public','' ), "", "" ) . "' title='{$this->lang->words['se_recur']}'>" . $this->registry->getClass('output')->getReplacement("cal_recurring") . " {$this->lang->words['event_add_recurring']}</a></li>
		</ul>
	</div>
	<br />
	
	<table id='calendar_table' class='ipb_table' summary=\"{$this->lang->words['calendar_for']} {$month} {$year}\">
		<caption class='maintitle'>{$month} {$year}</caption>
		<tr class='header'>
				<th class='head_week' scope='col'>&nbsp;</th>
			".$this->__f__1994213cefcc432b305bf52cae490e3b($calendars,$month,$year,$prev,$next,$cal_jump,$cal_id,$day_words)."			<!--IBF.DAYS_CONTENT-->
		</tr>
	</table>
	
	<ul class='pagination'>
		<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=find&amp;what=thismonth", 'public','' ), "", "" ) . "\">{$this->lang->words['aa_cur_month']}</a></li>
		<li><a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cal_id}&amp;do=find&amp;what=thisweek", 'public','' ), "", "" ) . "\">{$this->lang->words['aa_view_week']}</a></li>
	</ul>
</div>
<div id='mini_calendars' class='left calendar_wrap'>
	<!--PREV.MONTH-->
	<br />
	<!--NEXT.MONTH-->
</div>		
<br />";
return $IPBHTML;
}


function __f__3db013440c360862dcf4de666132a2d7($calendars, $month="",$year="",$prev="",$next="",$cal_jump="",$cal_id="",$day_words="")
{
	$_ips___x_retval = '';
	foreach( $calendars as $cid => $cal )
	{
		
		$_ips___x_retval .= "
			<li><a href='" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$cid}&amp;m={$this->request['m']}&amp;y={$this->request['y']}", 'public','' ), "", "" ) . "' title=\"{$this->lang->words['view_this_calendar']}\" class='rounded'>{$cal['cal_title']}</a></li>
		
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

function __f__1994213cefcc432b305bf52cae490e3b($calendars, $month="",$year="",$prev="",$next="",$cal_jump="",$cal_id="",$day_words="")
{
	$_ips___x_retval = '';
	foreach( $day_words as $day )
	{
		
		$_ips___x_retval .= "
				<th scope='col'>{$day}</th>
			
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- mini_cal_blank_cell --*/
function mini_cal_blank_cell() {
$IPBHTML = "";
$IPBHTML .= "<td class='blank'><!-- no content --></td>";
return $IPBHTML;
}

/* -- mini_cal_date_cell --*/
function mini_cal_date_cell($month_day="",$events="") {
$IPBHTML = "";
$IPBHTML .= "<td>
	{$month_day}
</td>";
return $IPBHTML;
}

/* -- mini_cal_date_cell_today --*/
function mini_cal_date_cell_today($month_day="",$events="") {
$IPBHTML = "";
$IPBHTML .= "<td class=\"today\">
	<strong>{$month_day}</strong>
</td>";
return $IPBHTML;
}

/* -- mini_cal_mini_wrap --*/
function mini_cal_mini_wrap($month="",$mid="",$year="",$events="",$day_words="") {
$IPBHTML = "";

$this->mini_cal = 'row2';
$IPBHTML .= "<!-- <a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&module=calendar&amp;cal_id={$this->request['_cal_id']}&amp;m={$mid}&amp;y=$year", 'public','' ), "", "" ) . "\"> -->	
<h3 class='maintitle'>{$month} {$year}</h3>
<table class='mini_cal'>
	<tr class='header'>
		<th class='head_week'>&nbsp;</th>
		".$this->__f__d6ef75c64bd4fbf9d0af5b37cd8fa121($month,$mid,$year,$events,$day_words)."		{$events}
	</tr>
</table>";
return $IPBHTML;
}


function __f__d6ef75c64bd4fbf9d0af5b37cd8fa121($month="",$mid="",$year="",$events="",$day_words="")
{
	$_ips___x_retval = '';
	foreach( $day_words as $day )
	{
		
		$_ips___x_retval .= "
			<th>" . IPSText::mbsubstr( $day, 0, 1 ) . "</th>
		
";
	}
	$_ips___x_retval .= '';
	return $_ips___x_retval;
}

/* -- mini_cal_new_row --*/
function mini_cal_new_row($week="") {
$IPBHTML = "";

$this->mini_cal = ( $this->mini_cal == 'row1' ) ? 'row2' : 'row1';
		$this->request['_cal_id'] = ( $this->request['_cal_id'] ) ? $this->request['_cal_id'] : 1;
$IPBHTML .= "</tr>
	<!-- NEW ROW-->
	<tr class='{$this->mini_cal}'>
	<th class='view_week header'>
		<a href=\"" . $this->registry->getClass('output')->formatUrl( $this->registry->getClass('output')->buildUrl( "app=calendar&amp;module=calendar&amp;cal_id={$this->request['_cal_id']}&amp;do=showweek&amp;week={$week}", 'public','' ), "false", "cal_week" ) . "\" title='{$this->lang->words['view_this_week']}' ><img src=\"{$this->settings['img_url']}/next.png\" alt='{$this->lang->words['icon']}' /></a>
	</th>";
return $IPBHTML;
}



}

/*--------------------------------------------------*/
/* END OF FILE                                      */
/*--------------------------------------------------*/

?>