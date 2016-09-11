-- phpMyAdmin SQL Dump
-- version 3.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Set 11, 2016 as 03:58 PM
-- Versão do Servidor: 5.0.51
-- Versão do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `maquel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_acajoom_lists`
--

CREATE TABLE IF NOT EXISTS `jos_acajoom_lists` (
  `id` int(10) NOT NULL auto_increment,
  `list_name` varchar(101) NOT NULL default '',
  `list_desc` text NOT NULL,
  `list_type` tinyint(2) NOT NULL default '0',
  `sendername` varchar(64) NOT NULL default '',
  `senderemail` varchar(64) NOT NULL default '',
  `bounceadres` varchar(64) NOT NULL default '',
  `layout` text NOT NULL,
  `template` int(9) NOT NULL default '0',
  `subscribemessage` text NOT NULL,
  `unsubscribemessage` text NOT NULL,
  `unsubscribesend` tinyint(1) NOT NULL default '1',
  `auto_add` tinyint(1) NOT NULL default '0',
  `user_choose` tinyint(1) NOT NULL default '0',
  `cat_id` int(10) NOT NULL default '0',
  `delay_min` int(2) NOT NULL default '0',
  `delay_max` int(2) NOT NULL default '7',
  `follow_up` int(10) NOT NULL default '0',
  `html` tinyint(1) NOT NULL default '1',
  `hidden` tinyint(1) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `createdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `acc_level` int(2) NOT NULL default '0',
  `acc_id` int(11) NOT NULL default '29',
  `notification` tinyint(1) NOT NULL default '0',
  `owner` int(11) NOT NULL default '0',
  `footer` tinyint(1) NOT NULL default '1',
  `notify_id` int(10) NOT NULL default '0',
  `next_date` int(11) NOT NULL default '0',
  `start_date` date NOT NULL,
  `params` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `list_name` (`list_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_acajoom_lists`
--

INSERT INTO `jos_acajoom_lists` (`id`, `list_name`, `list_desc`, `list_type`, `sendername`, `senderemail`, `bounceadres`, `layout`, `template`, `subscribemessage`, `unsubscribemessage`, `unsubscribesend`, `auto_add`, `user_choose`, `cat_id`, `delay_min`, `delay_max`, `follow_up`, `html`, `hidden`, `published`, `createdate`, `acc_level`, `acc_id`, `notification`, `owner`, `footer`, `notify_id`, `next_date`, `start_date`, `params`) VALUES
(1, 'Newsletter Maquel', 'Descri&ccedil;&atilde;o da lista', 1, 'Maquel', 'leonardo@devhouse.com.br', 'leonardo@devhouse.com.br', '<table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width=\\"100%\\" bgcolor=\\"#f1f1f1\\"> <tbody><tr> 	<td align=\\"center\\" valign=\\"top\\">  		<table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width=\\"530\\" bgcolor=\\"#f1f1f1\\"> 			<tbody><tr> 				<td class=\\"hbnr\\" colspan=\\"3\\" bgcolor=\\"#ffffff\\"><img src=\\"components/com_acajoom/templates/default/tpl0_top_header.jpg\\" border=\\"0\\" alt=\\"e Newsletter\\" width=\\"530\\" height=\\"137\\" /></td> 			</tr> 			<tr> 				<td colspan=\\"3\\" bgcolor=\\"#ffffff\\"><img src=\\"components/com_acajoom/templates/default/tpl0_underban.jpg\\" border=\\"0\\" alt=\\".\\" width=\\"530\\" height=\\"22\\" /></td> 			</tr> 			<tr>  				<!-- /// gutter \\\\\\\\\\\\ --> 				<td width=\\"15\\" valign=\\"top\\" bgcolor=\\"#ffffff\\"><img src=\\"components/com_acajoom/templates/default/tpl0_spacer.gif\\" border=\\"0\\" alt=\\"1\\" width=\\"15\\" height=\\"1\\" /></td> 				<!-- \\\\\\\\\\\\ gutter /// -->  				<!-- /// content cell \\\\\\\\\\\\ --> 				<td width=\\"500\\" valign=\\"top\\" bgcolor=\\"#ffffff\\"> 				<br /> 				  <p>&nbsp;</p> 				  <p>Your Subscription:<br /> 				  [SUBSCRIPTIONS] </p> 				  <p>&nbsp;</p> 				</td> 				<!-- \\\\\\\\\\\\ content cell /// --> 				<!-- /// gutter \\\\\\\\\\\\ --> 				<td width=\\"15\\" valign=\\"top\\" bgcolor=\\"#ffffff\\"><img src=\\"components/com_acajoom/templates/default/tpl0_spacer.gif\\" border=\\"0\\" alt=\\"1\\" width=\\"15\\" height=\\"1\\" /> 				</td> 				<!-- \\\\\\\\\\\\ gutter /// -->  			</tr>  <!-- /// footer area with contact info and opt-out link \\\\\\\\\\\\ --> 		<tr> 			<td colspan=\\"3\\" bgcolor=\\"#ffffff\\"><img src=\\"components/com_acajoom/templates/default/tpl0_abovefooter.jpg\\" border=\\"0\\" alt=\\".\\" width=\\"530\\" height=\\"22\\" /></td> 		</tr> 		<tr> 			<td colspan=\\"3\\" align=\\"center\\" valign=\\"middle\\" style=\\"border-top: 1px solid #aeaeae\\" bgcolor=\\"#cacaca\\"> 				<p class=\\"footerText\\"> 				<a href=\\"http://www.ijoobi.com\\"><img src=\\"components/com_acajoom/templates/default/tpl0_powered_by.gif\\" border=\\"0\\" alt=\\"Powered By Joobi\\" width=\\"129\\" height=\\"60\\" /></a></p> 			</td> 		</tr> 	</tbody></table> <!-- \\\\\\\\\\\\ footer area with contact info and opt-out link /// -->   	</td> </tr> </tbody></table> <!-- \\\\\\\\\\\\ Newsletter Powered by Acajoom!  /// -->', 0, '', 'This is a confirmation email that you have been unsubscribed from our list.  We are sorry that you decided to unsubscribe should you decide to re-subscribe you can always do so on our site.  Should you have any question please contact our webmaster.', 1, 2, 0, 0, 0, 0, 0, 1, 1, 1, '2008-10-22 22:23:56', 25, 29, 0, 62, 1, 0, 0, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_acajoom_mailings`
--

CREATE TABLE IF NOT EXISTS `jos_acajoom_mailings` (
  `id` int(11) NOT NULL auto_increment,
  `list_id` int(10) NOT NULL default '0',
  `list_type` tinyint(2) NOT NULL default '0',
  `issue_nb` int(10) NOT NULL default '0',
  `subject` varchar(120) NOT NULL default '',
  `fromname` varchar(64) NOT NULL default '',
  `fromemail` varchar(64) NOT NULL default '',
  `frombounce` varchar(64) NOT NULL default '',
  `htmlcontent` longtext NOT NULL,
  `textonly` longtext NOT NULL,
  `attachments` text NOT NULL,
  `images` text NOT NULL,
  `send_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `delay` int(10) NOT NULL default '0',
  `visible` tinyint(1) NOT NULL default '1',
  `html` tinyint(1) NOT NULL default '1',
  `published` tinyint(1) NOT NULL default '0',
  `createdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `acc_level` int(2) NOT NULL default '0',
  `author_id` int(11) NOT NULL default '0',
  `params` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_acajoom_mailings`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_acajoom_queue`
--

CREATE TABLE IF NOT EXISTS `jos_acajoom_queue` (
  `qid` int(11) NOT NULL auto_increment,
  `type` tinyint(2) NOT NULL default '0',
  `subscriber_id` int(11) NOT NULL default '0',
  `list_id` int(10) NOT NULL default '0',
  `mailing_id` int(11) NOT NULL default '0',
  `issue_nb` int(10) NOT NULL default '0',
  `send_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `suspend` tinyint(1) NOT NULL default '0',
  `delay` int(10) NOT NULL default '0',
  `acc_level` int(2) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `params` text,
  PRIMARY KEY  (`qid`),
  UNIQUE KEY `subscriber_id` (`subscriber_id`,`list_id`,`mailing_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `jos_acajoom_queue`
--

INSERT INTO `jos_acajoom_queue` (`qid`, `type`, `subscriber_id`, `list_id`, `mailing_id`, `issue_nb`, `send_date`, `suspend`, `delay`, `acc_level`, `published`, `params`) VALUES
(1, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', 0, 0, 29, 0, ''),
(2, 1, 2, 1, 0, 0, '0000-00-00 00:00:00', 0, 0, 29, 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_acajoom_stats_details`
--

CREATE TABLE IF NOT EXISTS `jos_acajoom_stats_details` (
  `id` int(11) NOT NULL auto_increment,
  `mailing_id` int(11) NOT NULL default '0',
  `subscriber_id` int(11) NOT NULL default '0',
  `sentdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `html` tinyint(1) NOT NULL default '0',
  `read` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `sub_mail` (`mailing_id`,`subscriber_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_acajoom_stats_details`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_acajoom_stats_global`
--

CREATE TABLE IF NOT EXISTS `jos_acajoom_stats_global` (
  `mailing_id` int(11) NOT NULL default '0',
  `sentdate` datetime NOT NULL default '0000-00-00 00:00:00',
  `html_sent` int(11) NOT NULL default '0',
  `text_sent` int(11) NOT NULL default '0',
  `html_read` int(11) NOT NULL default '0',
  PRIMARY KEY  (`mailing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_acajoom_stats_global`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_acajoom_subscribers`
--

CREATE TABLE IF NOT EXISTS `jos_acajoom_subscribers` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `name` varchar(64) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `receive_html` tinyint(1) NOT NULL default '1',
  `confirmed` tinyint(1) NOT NULL default '0',
  `blacklist` tinyint(1) NOT NULL default '0',
  `timezone` time NOT NULL default '00:00:00',
  `language_iso` varchar(10) NOT NULL default 'eng',
  `subscribe_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `date` (`subscribe_date`),
  KEY `joomlauserid` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `jos_acajoom_subscribers`
--

INSERT INTO `jos_acajoom_subscribers` (`id`, `user_id`, `name`, `email`, `receive_html`, `confirmed`, `blacklist`, `timezone`, `language_iso`, `subscribe_date`, `params`) VALUES
(1, 62, 'Administrator', 'leonardo@devhouse.com.br', 1, 1, 0, '00:00:00', 'eng', '2008-10-22 17:16:06', NULL),
(2, 0, 'Leonardo', 'leo.lima.web@gmail.com', 1, 1, 0, '00:00:00', 'eng', '2008-10-23 08:26:32', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_acajoom_xonfig`
--

CREATE TABLE IF NOT EXISTS `jos_acajoom_xonfig` (
  `akey` varchar(32) NOT NULL default '',
  `text` varchar(254) NOT NULL default '',
  `value` int(11) NOT NULL default '0',
  PRIMARY KEY  (`akey`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_acajoom_xonfig`
--

INSERT INTO `jos_acajoom_xonfig` (`akey`, `text`, `value`) VALUES
('component', 'Acajoom', 0),
('type', 'News', 0),
('version', '3.0.7', 0),
('level', '1', 0),
('emailmethod', 'mail', 0),
('sendmail_from', 'leonardo@devhouse.com.br', 0),
('sendmail_name', 'Maquel Cosméticos', 0),
('sendmail_path', '/usr/sbin/sendmail', 0),
('smtp_host', 'localhost', 0),
('smtp_auth_required', '0', 0),
('smtp_username', '', 0),
('smtp_password', '', 0),
('use_embedded_images', '1', 0),
('confirm_return', 'leonardo@devhouse.com.br', 0),
('upload_url', '/components/com_acajoom/upload', 0),
('enable_statistics', '1', 0),
('statistics_per_subscriber', '1', 0),
('send_data', '1', 0),
('allow_unregistered', '1', 0),
('require_confirmation', '0', 0),
('redirectconfirm', '', 0),
('show_login', '1', 0),
('show_logout', '1', 0),
('send_unsubcribe', '1', 0),
('confirm_fromname', 'Maquel Cosméticos', 0),
('confirm_fromemail', 'leonardo@devhouse.com.br', 0),
('confirm_html', '1', 0),
('time_zone', '0', 0),
('show_archive', '1', 0),
('pause_time', '20', 0),
('emails_between_pauses', '65', 0),
('wait_for_user', '0', 0),
('script_timeout', '60', 0),
('display_trace', '1', 0),
('send_log', '1', 0),
('send_auto_log', '0', 0),
('send_log_simple', '0', 0),
('send_log_closed', '1', 0),
('save_log', '0', 0),
('send_email', '1', 0),
('save_log_simple', '0', 0),
('save_log_file', '/administrator/components/com_acajoom/com_acajoom.log', 0),
('send_log_address', '@acajoom.com', 0),
('option', 'com_sdonkey', 0),
('send_log_name', 'Acajoom Mailing Report', 0),
('homesite', 'http://www.acajoom.com', 0),
('report_site', 'http://www.acajoom.com', 0),
('integration', '0', 0),
('cb_plugin', '1', 0),
('cb_listIds', '0', 0),
('cb_intro', '', 0),
('cb_showname', '1', 0),
('cb_checkLists', '1', 0),
('cb_showHTML', '1', 0),
('cb_defaultHTML', '1', 0),
('cb_integration', '0', 0),
('cb_pluginInstalled', '0', 0),
('cron_max_freq', '10', 0),
('cron_max_emails', '60', 0),
('last_cron', '', 0),
('last_sub_update', '1224721436', 0),
('next_autonews', '', 0),
('show_footer', '1', 0),
('show_signature', '1', 0),
('update_url', 'http://www.acajoom.com/update/', 0),
('date_update', '2008-10-22 22:20:56', 0),
('update_message', '', 0),
('show_guide', '1', 0),
('news1', '0', 0),
('news2', '0', 0),
('news3', '0', 0),
('cron_setup', '0', 0),
('queuedate', '', 0),
('update_avail', '0', 0),
('show_tips', '1', 0),
('update_notification', '1', 0),
('show_lists', '1', 0),
('use_sef', '0', 0),
('listHTMLeditor', '1', 0),
('mod_pub', '0', 0),
('firstmailing', '0', 0),
('nblist', '9', 0),
('license', '', 0),
('token', '', 0),
('maintenance', '', 0),
('admin_debug', '0', 0),
('send_error', '1', 0),
('report_error', '1', 0),
('frequency', '0', 0),
('nb_days', '7', 0),
('date_type', '1', 0),
('arv_cat', '', 0),
('arv_sec', '', 0),
('maintenance_clear', '24', 0),
('maintenance_date', '', 0),
('mail_format', '1', 0),
('showtag', '0', 0),
('show_author', '0', 0),
('addEmailRedLink', '0', 0),
('itemidAca', '999', 0),
('show_jcalpro', '0', 0),
('disabletooltip', '0', 0),
('minisendmail', '0', 0),
('listname0', '', 0),
('listnames0', 'All mailings', 0),
('listype0', '1', 0),
('listshow0', '1', 0),
('classes0', '', 0),
('listlogo0', 'addedit.png', 0),
('totallist0', '', 1),
('act_totallist0', '', 1),
('totalmailing0', '', 0),
('totalmailingsent0', '', 0),
('act_totalmailing0', '', 0),
('totalsubcribers0', '', 1),
('act_totalsubcribers0', '', 1),
('listname1', '_ACA_NEWSLETTER', 0),
('listnames1', '_ACA_MENU_NEWSLETTERS', 0),
('listype1', '1', 0),
('listshow1', '1', 0),
('classes1', 'newsletter', 0),
('listlogo1', 'inbox.png', 0),
('totallist1', '', 1),
('act_totallist1', '', 1),
('totalmailing1', '', 0),
('totalmailingsent1', '', 0),
('act_totalmailing1', '', 0),
('totalsubcribers1', '', 0),
('act_totalsubcribers1', '', 0),
('listname2', '', 0),
('listnames2', '', 0),
('listype2', '', 0),
('listshow2', '', 0),
('classes2', 'autoresponder', 0),
('listlogo2', '', 0),
('totallist2', '', 0),
('act_totallist2', '', 0),
('totalmailing2', '', 0),
('totalmailingsent2', '', 0),
('act_totalmailing2', '', 0),
('totalsubcribers2', '', 0),
('act_totalsubcribers2', '', 0),
('listname3', '', 0),
('listnames3', '', 0),
('listype3', '', 0),
('listshow3', '', 0),
('classes3', '', 0),
('listlogo3', '', 0),
('totallist3', '', 0),
('act_totallist3', '', 0),
('totalmailing3', '', 0),
('totalmailingsent3', '', 0),
('act_totalmailing3', '', 0),
('totalsubcribers3', '', 0),
('act_totalsubcribers3', '', 0),
('listname4', '', 0),
('listnames4', '', 0),
('listype4', '', 0),
('listshow4', '', 0),
('classes4', '', 0),
('listlogo4', '', 0),
('totallist4', '', 0),
('act_totallist4', '', 0),
('totalmailing4', '', 0),
('totalmailingsent4', '', 0),
('act_totalmailing4', '', 0),
('totalsubcribers4', '', 0),
('act_totalsubcribers4', '', 0),
('listname5', '', 0),
('listnames5', '', 0),
('listype5', '', 0),
('listshow5', '', 0),
('classes5', '', 0),
('listlogo5', '', 0),
('totallist5', '', 0),
('act_totallist5', '', 0),
('totalmailing5', '', 0),
('totalmailingsent5', '', 0),
('act_totalmailing5', '', 0),
('totalsubcribers5', '', 0),
('act_totalsubcribers5', '', 0),
('listname6', '', 0),
('listnames6', '', 0),
('listype6', '', 0),
('listshow6', '', 0),
('classes6', '', 0),
('listlogo6', '', 0),
('totallist6', '', 0),
('act_totallist6', '', 0),
('totalmailing6', '', 0),
('totalmailingsent6', '', 0),
('act_totalmailing6', '', 0),
('totalsubcribers6', '', 0),
('act_totalsubcribers6', '', 0),
('listname7', '', 0),
('listnames7', '', 0),
('listype7', '', 0),
('listshow7', '', 0),
('classes7', 'autonews', 0),
('listlogo7', '', 0),
('totallist7', '', 0),
('act_totallist7', '', 0),
('totalmailing7', '', 0),
('totalmailingsent7', '', 0),
('act_totalmailing7', '', 0),
('totalsubcribers7', '', 0),
('act_totalsubcribers7', '', 0),
('listname8', '', 0),
('listnames8', '', 0),
('listype8', '', 0),
('listshow8', '', 0),
('classes8', '', 0),
('listlogo8', '', 0),
('totallist8', '', 0),
('act_totallist8', '', 0),
('totalmailing8', '', 0),
('totalmailingsent8', '', 0),
('act_totalmailing8', '', 0),
('totalsubcribers8', '', 0),
('act_totalsubcribers8', '', 0),
('activelist', '1', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_banner`
--

CREATE TABLE IF NOT EXISTS `jos_banner` (
  `bid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `type` varchar(10) NOT NULL default 'banner',
  `name` varchar(50) NOT NULL default '',
  `imptotal` int(11) NOT NULL default '0',
  `impmade` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `imageurl` varchar(100) NOT NULL default '',
  `clickurl` varchar(200) NOT NULL default '',
  `date` datetime default NULL,
  `showBanner` tinyint(1) NOT NULL default '0',
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(50) default NULL,
  `custombannercode` text,
  PRIMARY KEY  (`bid`),
  KEY `viewbanner` (`showBanner`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_banner`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_bannerclient`
--

CREATE TABLE IF NOT EXISTS `jos_bannerclient` (
  `cid` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL default '',
  `contact` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `extrainfo` text NOT NULL,
  `checked_out` tinyint(1) NOT NULL default '0',
  `checked_out_time` time default NULL,
  `editor` varchar(50) default NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_bannerclient`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_bannerfinish`
--

CREATE TABLE IF NOT EXISTS `jos_bannerfinish` (
  `bid` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL default '0',
  `type` varchar(10) NOT NULL default '',
  `name` varchar(50) NOT NULL default '',
  `impressions` int(11) NOT NULL default '0',
  `clicks` int(11) NOT NULL default '0',
  `imageurl` varchar(50) NOT NULL default '',
  `datestart` datetime default NULL,
  `dateend` datetime default NULL,
  PRIMARY KEY  (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_bannerfinish`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_categories`
--

CREATE TABLE IF NOT EXISTS `jos_categories` (
  `id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `title` varchar(50) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `image` varchar(100) NOT NULL default '',
  `section` varchar(50) NOT NULL default '',
  `image_position` varchar(10) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `editor` varchar(50) default NULL,
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `cat_idx` (`section`,`published`,`access`),
  KEY `idx_section` (`section`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `jos_categories`
--

INSERT INTO `jos_categories` (`id`, `parent_id`, `title`, `name`, `image`, `section`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `editor`, `ordering`, `access`, `count`, `params`) VALUES
(1, 0, 'Home', 'Home', '', '1', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, 'imagefolders=*2*'),
(2, 0, 'Região Sul', 'Região Sul', '', '2', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 5, 0, 0, 'imagefolders=*2*'),
(3, 0, 'Região Norte', 'Região Norte', '', '2', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 4, 0, 0, 'imagefolders=*2*'),
(4, 0, 'Região Nordeste', 'Região Nordeste', '', '2', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 3, 0, 0, 'imagefolders=*2*'),
(5, 0, 'Região Sudoeste', 'Região Sudoeste', '', '2', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 2, 0, 0, 'imagefolders=*2*'),
(6, 0, 'Região Centro-Oeste', 'Região Centro-Oeste', '', '2', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, 'imagefolders=*2*'),
(7, 0, 'Imprensa', 'Imprensa', 'articles.jpg', 'com_docman', 'left', 'Aqui voc&ecirc; encontra documentos e materiais para download.\r\n', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, ''),
(8, 0, 'Notícias', 'Notícias', '', '3', 'left', '', 1, 0, '0000-00-00 00:00:00', NULL, 1, 0, 0, 'imagefolders=*2*');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_cmsapi_configurations`
--

CREATE TABLE IF NOT EXISTS `jos_cmsapi_configurations` (
  `component` varchar(100) NOT NULL,
  `instance` int(10) NOT NULL default '0',
  `configuration` mediumtext NOT NULL,
  PRIMARY KEY  (`component`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jos_cmsapi_configurations`
--

INSERT INTO `jos_cmsapi_configurations` (`component`, `instance`, `configuration`) VALUES
('glossary', 0, 'TzoxOToiY21zYXBpQ29uZmlndXJhdGlvbiI6MjI6e3M6OToiY29tcG9uZW50IjtzOjg6Imdsb3NzYXJ5IjtzOjQ6InV0ZjgiO3M6MToiMCI7czoxMDoiYWRtaW5fdXRmOCI7czoxOiIwIjtzOjEwOiJhbGxvd2VudHJ5IjtpOjA7czoxMToiYXV0b3B1Ymxpc2giO2k6MTtzOjY6Im5vdGlmeSI7aTowO3M6MTI6Im5vdGlmeV9lbWFpbCI7czoyMToiY29udGF0b0BtYXF1ZWwuY29tLmJyIjtzOjk6InRoYW5rdXNlciI7aToxO3M6NzoicGVycGFnZSI7czoyOiIxNSI7czoxMDoicGFnZXNwcmVhZCI7czoxOiI0IjtzOjc6InNvcnRpbmciO3M6MDoiIjtzOjEwOiJzaG93cmF0aW5nIjtzOjA6IiI7czo5OiJhbm9uZW50cnkiO2k6MDtzOjEwOiJoaWRlYXV0aG9yIjtpOjA7czoxNDoic2hvd2NhdGVnb3JpZXMiO2k6MDtzOjk6ImJlZ2lud2l0aCI7czo3OiJub3RoaW5nIjtzOjE5OiJzaG93bnVtYmVyb2ZlbnRyaWVzIjtpOjE7czoxOToic2hvd2NhdGRlc2NyaXB0aW9ucyI7aToxO3M6OToidXNlZWRpdG9yIjtpOjA7czoxMzoic2hvd19hbHBoYWJldCI7aTowO3M6MTM6InN0cmlwX2FjY2VudHMiO2k6MDtzOjg6Imxhbmd1YWdlIjtzOjA6IiI7fQ==');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_components`
--

CREATE TABLE IF NOT EXISTS `jos_components` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `link` varchar(255) NOT NULL default '',
  `menuid` int(11) unsigned NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `admin_menu_link` varchar(255) NOT NULL default '',
  `admin_menu_alt` varchar(255) NOT NULL default '',
  `option` varchar(50) NOT NULL default '',
  `ordering` int(11) NOT NULL default '0',
  `admin_menu_img` varchar(255) NOT NULL default '',
  `iscore` tinyint(4) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `jos_components`
--

INSERT INTO `jos_components` (`id`, `name`, `link`, `menuid`, `parent`, `admin_menu_link`, `admin_menu_alt`, `option`, `ordering`, `admin_menu_img`, `iscore`, `params`) VALUES
(1, 'Banners', '', 0, 0, '', 'Banner Management', 'com_banners', 0, 'js/ThemeOffice/component.png', 0, ''),
(2, 'Administar Banners', '', 0, 1, 'option=com_banners', 'Active Banners', 'com_banners', 1, 'js/ThemeOffice/edit.png', 0, ''),
(3, 'Administar Clientes', '', 0, 1, 'option=com_banners&task=listclients', 'Manage Clients', 'com_banners', 2, 'js/ThemeOffice/categories.png', 0, ''),
(4, 'Web Links', 'option=com_weblinks', 0, 0, '', 'Manage Weblinks', 'com_weblinks', 0, 'js/ThemeOffice/globe2.png', 0, ''),
(5, 'Weblink Itens', '', 0, 4, 'option=com_weblinks', 'View existing weblinks', 'com_weblinks', 1, 'js/ThemeOffice/edit.png', 0, ''),
(6, 'Weblink Categorias', '', 0, 4, 'option=categories&section=com_weblinks', 'Manage weblink categories', '', 2, 'js/ThemeOffice/categories.png', 0, ''),
(7, 'Contatos', 'option=com_contact', 0, 0, '', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/user.png', 1, ''),
(8, 'Administrar Contatos', '', 0, 7, 'option=com_contact', 'Edit contact details', 'com_contact', 0, 'js/ThemeOffice/edit.png', 1, ''),
(9, 'Categoria Contatos', '', 0, 7, 'option=categories&section=com_contact_details', 'Manage contact categories', '', 2, 'js/ThemeOffice/categories.png', 1, ''),
(10, 'Primeira Página', 'option=com_frontpage', 0, 0, '', 'Gerir Artigos da Primeira Página', 'com_frontpage', 0, 'js/ThemeOffice/component.png', 1, ''),
(11, 'Enquetes', 'option=com_poll', 0, 0, 'option=com_poll', 'Manage Polls', 'com_poll', 0, 'js/ThemeOffice/component.png', 0, ''),
(12, 'Notícias Externas', 'option=com_newsfeeds', 0, 0, '', 'News Feeds Management', 'com_newsfeeds', 0, 'js/ThemeOffice/component.png', 0, ''),
(13, 'Administrar Notícias Externas', '', 0, 12, 'option=com_newsfeeds', 'Manage News Feeds', 'com_newsfeeds', 1, 'js/ThemeOffice/edit.png', 0, ''),
(14, 'Administrar Categorias', '', 0, 12, 'option=categories&section=com_newsfeeds', 'Manage Categories', '', 2, 'js/ThemeOffice/categories.png', 0, ''),
(15, 'Login', 'option=com_login', 0, 0, '', '', 'com_login', 0, '', 1, ''),
(16, 'Pesquisar', 'option=com_search', 0, 0, '', '', 'com_search', 0, '', 1, ''),
(17, 'Difusão de Notícias', '', 0, 0, 'option=com_syndicate&hidemainmenu=1', 'Gerir configuração de Difusão dos Sinais Noticiosos', 'com_syndicate', 0, 'js/ThemeOffice/component.png', 0, ''),
(18, 'E-mail em Massa', '', 0, 0, 'option=com_massmail&hidemainmenu=1', 'Enviar e-mail para múltiplos destinatários', 'com_massmail', 0, 'js/ThemeOffice/mass_email.png', 0, ''),
(19, 'swMenuFree', 'option=com_swmenufree', 0, 0, 'option=com_swmenufree', 'swMenuFree', 'com_swmenufree', 0, 'js/ThemeOffice/component.png', 0, ''),
(20, 'Acajoom', 'option=com_acajoom', 0, 0, 'option=com_acajoom', 'Acajoom', 'com_acajoom', 0, '../administrator/components/com_acajoom/images/acajoom_icon.png', 0, ''),
(21, 'Lists', '', 0, 20, 'option=com_acajoom&act=list', 'Lists', 'com_acajoom', 0, '../includes/js/ThemeOffice/edit.png', 0, ''),
(22, 'Subscribers', '', 0, 20, 'option=com_acajoom&act=subscribers', 'Subscribers', 'com_acajoom', 1, '../includes/js/ThemeOffice/users_add.png', 0, ''),
(23, 'Newsletters', '', 0, 20, 'option=com_acajoom&act=mailing&listype=1', 'Newsletters', 'com_acajoom', 2, '../includes/js/ThemeOffice/messaging_inbox.png', 0, ''),
(24, 'Statistics', '', 0, 20, 'option=com_acajoom&act=statistics', 'Statistics', 'com_acajoom', 3, '../includes/js/ThemeOffice/query.png', 0, ''),
(25, 'Configuration', '', 0, 20, 'option=com_acajoom&act=configuration', 'Configuration', 'com_acajoom', 4, '../includes/js/ThemeOffice/menus.png', 0, ''),
(26, 'Import', '', 0, 20, 'option=com_acajoom&act=update', 'Import', 'com_acajoom', 5, '../includes/js/ThemeOffice/restore.png', 0, ''),
(27, 'About', '', 0, 20, 'option=com_acajoom&act=about', 'About', 'com_acajoom', 6, '../includes/js/ThemeOffice/credits.png', 0, ''),
(28, 'JCE Admin', 'option=com_jce', 0, 0, 'option=com_jce', 'JCE Admin', 'com_jce', 0, 'js/ThemeOffice/component.png', 0, ''),
(29, 'JCE Configuration', '', 0, 28, 'option=com_jce&task=config', 'JCE Configuration', 'com_jce', 0, 'js/ThemeOffice/controlpanel.png', 0, ''),
(30, 'JCE Languages', '', 0, 28, 'option=com_jce&task=lang', 'JCE Languages', 'com_jce', 1, 'js/ThemeOffice/language.png', 0, ''),
(31, 'JCE Plugins', '', 0, 28, 'option=com_jce&task=showplugins', 'JCE Plugins', 'com_jce', 2, 'js/ThemeOffice/add_section.png', 0, ''),
(32, 'JCE Layout', '', 0, 28, 'option=com_jce&task=editlayout', 'JCE Layout', 'com_jce', 3, 'js/ThemeOffice/content.png', 0, ''),
(33, 'RSform!', 'option=com_forme', 0, 0, 'option=com_forme', 'RSform!', 'com_forme', 0, '../administrator/components/com_forme/images/logo.gif', 0, ''),
(34, 'VirtueMart', 'option=com_virtuemart', 0, 0, 'option=com_virtuemart', 'VirtueMart', 'com_virtuemart', 0, '../administrator/components/com_virtuemart/menu_icon.png', 0, ''),
(35, 'virtuemart_version', '', 0, 9999, '', '', '', 0, '', 0, 'RELEASE=1.0.15\nDEV_STATUS=stable'),
(36, 'Glossary', 'option=com_glossary', 0, 0, 'option=com_glossary', 'Glossary', 'com_glossary', 0, 'js/ThemeOffice/component.png', 0, ''),
(37, 'DOCman', 'option=com_docman', 0, 0, 'option=com_docman', 'DOCman', 'com_docman', 0, '../administrator/components/com_docman/images/dm_documents_16.png', 0, ''),
(38, 'Home', '', 0, 37, 'option=com_docman&task=cpanel', 'Home', 'com_docman', 0, '../administrator/components/com_docman/images/dm_cpanel_16.png', 0, ''),
(39, 'Files', '', 0, 37, 'option=com_docman&section=files', 'Files', 'com_docman', 1, '../administrator/components/com_docman/images/dm_files_16.png', 0, ''),
(40, 'Documents', '', 0, 37, 'option=com_docman&section=documents', 'Documents', 'com_docman', 2, '../administrator/components/com_docman/images/dm_documents_16.png', 0, ''),
(41, 'Categories', '', 0, 37, 'option=com_docman&section=categories', 'Categories', 'com_docman', 3, '../administrator/components/com_docman/images/dm_categories_16.png', 0, ''),
(42, 'Groups', '', 0, 37, 'option=com_docman&section=groups', 'Groups', 'com_docman', 4, '../administrator/components/com_docman/images/dm_groups_16.png', 0, ''),
(43, 'Licenses', '', 0, 37, 'option=com_docman&section=licenses', 'Licenses', 'com_docman', 5, '../administrator/components/com_docman/images/dm_licenses_16.png', 0, ''),
(44, 'Statistics', '', 0, 37, 'option=com_docman&task=stats', 'Statistics', 'com_docman', 6, '../administrator/components/com_docman/images/dm_stats_16.png', 0, ''),
(45, 'Download Logs', '', 0, 37, 'option=com_docman&section=logs', 'Download Logs', 'com_docman', 7, '../administrator/components/com_docman/images/dm_logs_16.png', 0, ''),
(46, 'Configuration', '', 0, 37, 'option=com_docman&section=config', 'Configuration', 'com_docman', 8, '../administrator/components/com_docman/images/dm_config_16.png', 0, ''),
(47, 'Themes', '', 0, 37, 'option=com_docman&section=themes', 'Themes', 'com_docman', 9, '../administrator/components/com_docman/images/dm_templates_16.png', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_contact_details`
--

CREATE TABLE IF NOT EXISTS `jos_contact_details` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `con_position` varchar(50) default NULL,
  `address` text,
  `suburb` varchar(50) default NULL,
  `state` varchar(20) default NULL,
  `country` varchar(50) default NULL,
  `postcode` varchar(10) default NULL,
  `telephone` varchar(25) default NULL,
  `fax` varchar(25) default NULL,
  `misc` mediumtext,
  `image` varchar(100) default NULL,
  `imagepos` varchar(20) default NULL,
  `email_to` varchar(100) default NULL,
  `default_con` tinyint(1) unsigned NOT NULL default '0',
  `published` tinyint(1) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  `user_id` int(11) NOT NULL default '0',
  `catid` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_contact_details`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_content`
--

CREATE TABLE IF NOT EXISTS `jos_content` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `title_alias` varchar(100) NOT NULL default '',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL default '0',
  `sectionid` int(11) unsigned NOT NULL default '0',
  `mask` int(11) unsigned NOT NULL default '0',
  `catid` int(11) unsigned NOT NULL default '0',
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `created_by` int(11) unsigned NOT NULL default '0',
  `created_by_alias` varchar(100) NOT NULL default '',
  `modified` datetime NOT NULL default '0000-00-00 00:00:00',
  `modified_by` int(11) unsigned NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL default '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL default '0000-00-00 00:00:00',
  `images` text NOT NULL,
  `urls` text NOT NULL,
  `attribs` text NOT NULL,
  `version` int(11) unsigned NOT NULL default '1',
  `parentid` int(11) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `access` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `idx_section` (`sectionid`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_mask` (`mask`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `jos_content`
--

INSERT INTO `jos_content` (`id`, `title`, `title_alias`, `introtext`, `fulltext`, `state`, `sectionid`, `mask`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `parentid`, `ordering`, `metakey`, `metadesc`, `access`, `hits`) VALUES
(1, 'Home', '', '<div class="vertical-text" style="height: 19px; width: 338px">\r\nDESTAQUE\r\n</div>\r\n<img src="http://localhost/maquel/images/stories/balsamo-dreno-therapy-01.png" style="float: right; width: 429px; margin-top: -27px" title="balsamo-dreno-therapy-01.png" alt="balsamo-dreno-therapy-01.png" />\r\n', '', 1, 1, 0, 1, '2008-10-23 12:20:33', 62, '', '2016-09-11 15:14:03', 62, 0, '0000-00-00 00:00:00', '2008-10-23 12:20:10', '0000-00-00 00:00:00', '', '', 'pageclass_sfx=\nback_button=\nitem_title=1\nlink_titles=\nintrotext=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=\nkeyref=\ndocbook_type=', 12, 0, 1, '', '', 0, 0),
(2, 'A HISTÓRIA DA MAQUEL', 'A HISTÓRIA DA MAQUEL', 'Aproveitando a experi&ecirc;ncia de 13 anos na &aacute;rea da beleza profissional, as idealizadoras da Maquel iniciaram os projetos e a execu&ccedil;&atilde;o da linha de produtos no ano de 2003.<br />\r\n<br />\r\nAp&oacute;s anos de conviv&ecirc;ncia com as profissionais de beleza definiu-se como princ&iacute;pio oferecer cosm&eacute;ticos e solu&ccedil;&otilde;es de beleza com credibilidade e certeza de resultados.<br />\r\n<br />\r\nA linha foi iniciada com nove produtos, apenas para tratamentos corporais profissionais. Depois surgiram v&aacute;rios novos produtos com fins est&eacute;ticos como forma de atualiza&ccedil;&atilde;o tecnol&oacute;gica na produ&ccedil;&atilde;o de cosm&eacute;ticos.<br />\r\n<br />\r\nEm 2006 a Maquel lan&ccedil;ou a linha facil. Uma linha b&aacute;sica como primeira etapa, com v&aacute;rios lan&ccedil;amentos subseq&uuml;entes para 2006 e 2007, entre produtos para rosto, corpo e cabelos.<br />\r\n<br />\r\nA Maquel est&aacute; estabelecida em Joinville-SC de onde atende todas as regi&otilde;es do Brasil.\r\n', '', 1, 0, 0, 0, '2008-10-23 20:03:27', 62, '', '2008-10-23 21:30:27', 62, 0, '0000-00-00 00:00:00', '2008-10-23 20:01:57', '0000-00-00 00:00:00', '', '', 'menu_image=-1\nitem_title=1\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=', 1, 0, 0, '', '', 0, 80),
(3, 'VISÃO E MISSÃO', 'VISÃO E MISSÃO', 'Aproveitando a experi&ecirc;ncia de 13 anos na &aacute;rea da beleza profissional, as idealizadoras da Maquel iniciaram os projetos e a execu&ccedil;&atilde;o da linha de produtos no ano de 2003.<br />\r\n<br />\r\nAp&oacute;s anos de conviv&ecirc;ncia com as profissionais de beleza definiu-se como princ&iacute;pio oferecer cosm&eacute;ticos e solu&ccedil;&otilde;es de beleza com credibilidade e certeza de resultados.<br />\r\n<br />\r\nA linha foi iniciada com nove produtos, apenas para tratamentos corporais profissionais. Depois surgiram v&aacute;rios novos produtos com fins est&eacute;ticos como forma de atualiza&ccedil;&atilde;o tecnol&oacute;gica na produ&ccedil;&atilde;o de cosm&eacute;ticos.<br />\r\n<br />\r\nEm 2006 a Maquel lan&ccedil;ou a linha facil. Uma linha b&aacute;sica como primeira etapa, com v&aacute;rios lan&ccedil;amentos subseq&uuml;entes para 2006 e 2007, entre produtos para rosto, corpo e cabelos.<br />\r\n<br />\r\nA Maquel est&aacute; estabelecida em Joinville-SC de onde atende todas as regi&otilde;es do Brasil.\r\n', '', 1, 0, 0, 0, '2008-10-23 21:30:46', 62, '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2008-10-23 21:30:29', '0000-00-00 00:00:00', '', '', 'menu_image=-1\nitem_title=1\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=', 1, 0, 0, '', '', 0, 14),
(4, 'Joinville', 'Termoterapia 22 setembro', '<b><span style="color: #050953">CURSO DO BUMBUM - 15 de outubro</span></b><br />\r\n<blockquote>\r\n	Descri&ccedil;&atilde;o: O curso de terapia &eacute; um curso excelente para voc&ecirc; esteticista que quer saber mais como retirar as gordurinhas localizadas de suas clientes. Elas v&atilde;o amar e voc&ecirc; ser&aacute; super elogiada.\r\n</blockquote>\r\n<blockquote>\r\n	<b><span style="color: #050953">CASA DA MASSAGEM</span></b><br />\r\n	<b><span style="color: #050953">Telefone:</span></b> (47) - 3433-2300<br />\r\n	<span style="color: #595959"><b>Rua: Dr Jo&atilde;o Colin - Centro</b></span>\r\n</blockquote>\r\n', '<p>\r\n<span style="color: #050953"><b>MAIS INFORMA&Ccedil;&Otilde;ES SOBRE O CURSO</b></span>\r\n</p>\r\n<p>\r\n&nbsp;\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas tortor. Nunc pulvinar, massa vitae luctus posuere, quam urna bibendum augue, quis venenatis mi est eu libero. Duis quis orci. Vivamus vitae neque vel augue cursus consequat. Ut lectus diam, fermentum ut, vestibulum malesuada, vulputate eget, nisi. Curabitur mollis velit id erat dictum aliquet. Vestibulum vitae diam congue odio iaculis laoreet. Sed a dolor. Cras nunc odio, fringilla at, vehicula at, convallis aliquam, diam. Duis placerat tempus leo. Suspendisse sed tellus.<br />\r\n<br />\r\nMauris eu massa. Quisque vulputate. Suspendisse potenti. Curabitur a nisi. Etiam auctor, justo a sodales gravida, arcu ipsum iaculis velit, id interdum mauris arcu vitae est. Suspendisse aliquet egestas nibh. Proin vitae erat dignissim massa tempus aliquet. Donec placerat faucibus nunc. Suspendisse erat sapien, commodo vitae, dictum vitae, feugiat ut, sapien. Nulla vulputate accumsan justo. Donec euismod, magna sit amet ullamcorper interdum, lectus velit interdum lacus, accumsan imperdiet turpis erat eget ligula. Donec mollis sem sed velit. In eget neque. Nam sapien tellus, placerat non, dictum quis, interdum quis, nulla. Fusce id est elementum diam bibendum ultricies. Aenean elit nisi, eleifend quis, pulvinar ut, sagittis id, augue. Mauris ligula.<br />\r\n<br />\r\nNunc semper rhoncus eros. Aliquam at neque laoreet est feugiat rhoncus. Donec tempus faucibus orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque lectus. Curabitur dui libero, adipiscing eu, malesuada tempor, tempus non, lacus. Fusce ipsum justo, tempus id, molestie ac, lacinia sed, risus. Vivamus hendrerit ipsum at ipsum. Mauris quis purus et lorem pulvinar egestas. Vivamus id libero at leo mattis semper. Nunc molestie varius mauris. Ut quis metus. Maecenas non nisi. Nam ultricies elit id diam.<br />\r\n<br />\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas suscipit risus et nisl. Quisque elementum augue a nunc. Morbi eget quam. Ut at leo et pede ullamcorper convallis. Vivamus est odio, facilisis eget, scelerisque ut, consequat sed, eros. Mauris in diam. Nulla blandit neque at pede convallis feugiat. Donec leo dolor, venenatis id, sodales lacinia, interdum id, nulla. Sed ut ipsum. Praesent urna nisl, faucibus a, tristique sit amet, ornare eu, nunc. Cras ultrices dui et nisi. Nam non purus. Curabitur augue arcu, interdum at, aliquam vitae, luctus et, odio. Vivamus ac pede eget nunc porta dapibus. Nam commodo mauris eget augue. Maecenas nec leo. Aenean sapien.<br />\r\n<br />\r\nCurabitur risus felis, dignissim vitae, gravida eget, dapibus eget, augue. Sed felis ipsum, aliquam in, imperdiet sit amet, semper vitae, leo. Quisque nec magna. Cras risus. Nunc nec neque. Fusce eleifend. Nam aliquam, leo at ullamcorper tincidunt, mauris nisl pharetra est, at pellentesque urna lacus ut pede. Morbi ac enim eu nibh egestas dictum. Morbi lectus lectus, dictum quis, placerat eget, imperdiet sit amet, sapien. Duis ipsum. Ut eu quam. Morbi suscipit tincidunt sapien. Suspendisse nunc. Mauris ipsum nisl, ultricies sed, tincidunt vitae, ullamcorper nec, felis. Morbi ac quam vel neque feugiat mollis. Aliquam hendrerit venenatis nunc. Donec vestibulum turpis non felis. Mauris elit ipsum, semper vitae, blandit quis, porta sed, magna. \r\n</p>\r\n', 1, 2, 0, 2, '2008-10-30 15:49:54', 62, '', '2008-11-18 14:48:11', 62, 0, '0000-00-00 00:00:00', '2008-10-30 15:48:57', '0000-00-00 00:00:00', '', '', 'pageclass_sfx=\nback_button=\nitem_title=1\nlink_titles=\nintrotext=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=\nkeyref=\ndocbook_type=', 2, 0, 2, '', '', 0, 7),
(5, 'Florianópolis', 'Curso do Bumbum', '<b><span style="color: #050953">TERMO TERAPIA - 22 de setembro</span></b><br />\r\n<blockquote>\r\n	<b><span style="color: #050953">MAQUEL</span></b><br />\r\n	<b><span style="color: #050953">Telefone:</span></b> (47) - 3433-2300<br />\r\n	<span style="color: #595959"><b>Rua: Dr Jo&atilde;o Colin - Centro</b></span>\r\n</blockquote>\r\n', '<p>\r\n<span style="color: #050953"><b>MAIS INFORMA&Ccedil;&Otilde;ES SOBRE O CURSO</b></span>\r\n</p>\r\n<p>\r\n&nbsp;\r\n</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas\r\ntortor. Nunc pulvinar, massa vitae luctus posuere, quam urna bibendum\r\naugue, quis venenatis mi est eu libero. Duis quis orci. Vivamus vitae\r\nneque vel augue cursus consequat. Ut lectus diam, fermentum ut,\r\nvestibulum malesuada, vulputate eget, nisi. Curabitur mollis velit id\r\nerat dictum aliquet. Vestibulum vitae diam congue odio iaculis laoreet.\r\nSed a dolor. Cras nunc odio, fringilla at, vehicula at, convallis\r\naliquam, diam. Duis placerat tempus leo. Suspendisse sed tellus.<br />\r\n<br />\r\nMauris eu massa. Quisque vulputate. Suspendisse potenti. Curabitur a\r\nnisi. Etiam auctor, justo a sodales gravida, arcu ipsum iaculis velit,\r\nid interdum mauris arcu vitae est. Suspendisse aliquet egestas nibh.\r\nProin vitae erat dignissim massa tempus aliquet. Donec placerat\r\nfaucibus nunc. Suspendisse erat sapien, commodo vitae, dictum vitae,\r\nfeugiat ut, sapien. Nulla vulputate accumsan justo. Donec euismod,\r\nmagna sit amet ullamcorper interdum, lectus velit interdum lacus,\r\naccumsan imperdiet turpis erat eget ligula. Donec mollis sem sed velit.\r\nIn eget neque. Nam sapien tellus, placerat non, dictum quis, interdum\r\nquis, nulla. Fusce id est elementum diam bibendum ultricies. Aenean\r\nelit nisi, eleifend quis, pulvinar ut, sagittis id, augue. Mauris\r\nligula.<br />\r\n<br />\r\nNunc semper rhoncus eros. Aliquam at neque laoreet est feugiat rhoncus.\r\nDonec tempus faucibus orci. Vestibulum ante ipsum primis in faucibus\r\norci luctus et ultrices posuere cubilia Curae; Pellentesque lectus.\r\nCurabitur dui libero, adipiscing eu, malesuada tempor, tempus non,\r\nlacus. Fusce ipsum justo, tempus id, molestie ac, lacinia sed, risus.\r\nVivamus hendrerit ipsum at ipsum. Mauris quis purus et lorem pulvinar\r\negestas. Vivamus id libero at leo mattis semper. Nunc molestie varius\r\nmauris. Ut quis metus. Maecenas non nisi. Nam ultricies elit id diam.<br />\r\n<br />\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per\r\ninceptos himenaeos. Maecenas suscipit risus et nisl. Quisque elementum\r\naugue a nunc. Morbi eget quam. Ut at leo et pede ullamcorper convallis.\r\nVivamus est odio, facilisis eget, scelerisque ut, consequat sed, eros.\r\nMauris in diam. Nulla blandit neque at pede convallis feugiat. Donec\r\nleo dolor, venenatis id, sodales lacinia, interdum id, nulla. Sed ut\r\nipsum. Praesent urna nisl, faucibus a, tristique sit amet, ornare eu,\r\nnunc. Cras ultrices dui et nisi. Nam non purus. Curabitur augue arcu,\r\ninterdum at, aliquam vitae, luctus et, odio. Vivamus ac pede eget nunc\r\nporta dapibus. Nam commodo mauris eget augue. Maecenas nec leo. Aenean\r\nsapien.<br />\r\n<br />\r\nCurabitur risus felis, dignissim vitae, gravida eget, dapibus eget,\r\naugue. Sed felis ipsum, aliquam in, imperdiet sit amet, semper vitae,\r\nleo. Quisque nec magna. Cras risus. Nunc nec neque. Fusce eleifend. Nam\r\naliquam, leo at ullamcorper tincidunt, mauris nisl pharetra est, at\r\npellentesque urna lacus ut pede. Morbi ac enim eu nibh egestas dictum.\r\nMorbi lectus lectus, dictum quis, placerat eget, imperdiet sit amet,\r\nsapien. Duis ipsum. Ut eu quam. Morbi suscipit tincidunt sapien.\r\nSuspendisse nunc. Mauris ipsum nisl, ultricies sed, tincidunt vitae,\r\nullamcorper nec, felis. Morbi ac quam vel neque feugiat mollis. Aliquam\r\nhendrerit venenatis nunc. Donec vestibulum turpis non felis. Mauris\r\nelit ipsum, semper vitae, blandit quis, porta sed, magna. \r\n</p>\r\n', 1, 2, 0, 2, '2008-10-30 15:50:23', 62, '', '2008-11-18 14:48:47', 62, 0, '0000-00-00 00:00:00', '2008-10-30 15:50:03', '0000-00-00 00:00:00', '', '', 'pageclass_sfx=\nback_button=\nitem_title=1\nlink_titles=\nintrotext=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=\nkeyref=\ndocbook_type=', 4, 0, 1, '', '', 0, 11),
(7, 'NOSSOS SELOS', 'NOSSOS SELOS', '<p>\r\nO que significam? Os produtos da Maquel tem selos de qualidade. Os selos indicam que os produtos foram testados pela Anvisa, org&atilde;o que regulamenta o setor de cosm&eacute;ticos. Cada selo tem suas caracter&iacute;sticas. Entenda melhor nas descri&ccedil;&otilde;es abaixo:\r\n</p>\r\n<p>\r\n&nbsp;\r\n</p>\r\n<p>\r\n&nbsp;\r\n</p>\r\n<table border="0" cellpadding="4" cellspacing="4">\r\n	<tbody>\r\n		<tr>\r\n			<td valign="top" align="center"><img src="images/stories/selo1.jpg" alt="selo1.jpg" title="selo1.jpg" style="margin: 5px; float: left; width: 75px; height: 75px" width="75" height="75" />\r\n			</td>\r\n			<td>\r\n			<p>\r\n			Termo Spray Anticelulite &eacute; um produto com qualidade atestada! Este selo identifica os produtos <br />\r\n			<br />\r\n			Maquel que passaram por rigorosos testes de efic&aacute;cia em laborat&oacute;rios credenciados pela ANVISA. &Eacute; <br />\r\n			<br />\r\n			garantia que seu tratamento ter&aacute; &oacute;timos resultados!\r\n			</p>\r\n			<p>\r\n			&nbsp;\r\n			</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top" align="center">&nbsp;<img src="images/stories/selo2.jpg" alt="selo2.jpg" title="selo2.jpg" style="margin: 5px; float: left; width: 79px; height: 78px" width="79" height="78" /></td>\r\n			<td>\r\n			<p>\r\n			&nbsp;Conforme a ANVISA a mat&eacute;ria-prima nicotinato de metila possui a&ccedil;&atilde;o vasodilatadora com efeito <br />\r\n			<br />\r\n			rubefacioente, possui a&ccedil;&atilde;o direta na musculatura, &eacute; promotor de penetra&ccedil;&atilde;o e permea&ccedil;&atilde;o cut&acirc;nea <br />\r\n			<br />\r\n			de subst&acirc;ncia incorporadas. Por todas estas caracter&iacute;sticas, o teste de irrita&ccedil;&atilde;o faz-se <br />\r\n			<br />\r\n			necess&aacute;rio para que o cliente fique seguro para o uso do produto.\r\n			</p>\r\n			<p>\r\n			&nbsp;\r\n			</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td valign="top" align="center"><img src="images/stories/selo3.jpg" alt="selo3.jpg" title="selo3.jpg" style="margin: 5px; float: left; width: 84px; height: 83px" width="84" height="83" /></td>\r\n			<td>&nbsp;Termo Spray Anticelulite &eacute; um produto com qualidade atestada! Este selo identifica os produtos <br />\r\n			<br />\r\n			Maquel que passaram por rigorosos testes de efic&aacute;cia em laborat&oacute;rios credenciados pela ANVISA. &Eacute; <br />\r\n			<br />\r\n			garantia que seu tratamento ter&aacute; &oacute;timos resultados!</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', 1, 0, 0, 0, '2008-11-18 15:22:43', 62, '', '2008-11-18 16:47:25', 62, 0, '0000-00-00 00:00:00', '2008-11-18 15:17:08', '0000-00-00 00:00:00', '', '', 'menu_image=-1\nitem_title=1\npageclass_sfx=\nback_button=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=', 1, 0, 0, '', '', 0, 7),
(8, 'Inverno', '', '<img src="http://localhost/maquel/images/stories/noticias.png" style="float: left; margin: 5px; width: 74px; height: 78px" height="78" width="74" title="noticias.png" alt="noticias.png" />\r\nO inverno &eacute; a esta&ccedil;&atilde;o ideal para o cuidado com a pele do rosto.<br /><br />\r\nAproveite esta esta&ccedil;&atilde;o e o sucesso da Linha Face Liss para conhecer o poder dos ativos e produtos Maquel para controle, preven&ccedil;&atilde;o e tratamento da Acne!\r\n', '', 1, 3, 0, 8, '2016-09-10 23:20:53', 62, '', '2016-09-11 00:15:50', 62, 0, '0000-00-00 00:00:00', '2016-09-10 23:18:17', '0000-00-00 00:00:00', '', '', 'pageclass_sfx=\nback_button=\nitem_title=1\nlink_titles=\nintrotext=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=\nkeyref=\ndocbook_type=', 6, 0, 1, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_content_frontpage`
--

CREATE TABLE IF NOT EXISTS `jos_content_frontpage` (
  `content_id` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_content_frontpage`
--

INSERT INTO `jos_content_frontpage` (`content_id`, `ordering`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_content_rating`
--

CREATE TABLE IF NOT EXISTS `jos_content_rating` (
  `content_id` int(11) NOT NULL default '0',
  `rating_sum` int(11) unsigned NOT NULL default '0',
  `rating_count` int(11) unsigned NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_content_rating`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_core_acl_aro`
--

CREATE TABLE IF NOT EXISTS `jos_core_acl_aro` (
  `aro_id` int(11) NOT NULL auto_increment,
  `section_value` varchar(240) NOT NULL default '0',
  `value` varchar(240) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`aro_id`),
  UNIQUE KEY `jos_gacl_section_value_value_aro` (`section_value`(100),`value`(100)),
  KEY `jos_gacl_hidden_aro` (`hidden`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `jos_core_acl_aro`
--

INSERT INTO `jos_core_acl_aro` (`aro_id`, `section_value`, `value`, `order_value`, `name`, `hidden`) VALUES
(10, 'users', '62', 0, 'Administrator', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_core_acl_aro_groups`
--

CREATE TABLE IF NOT EXISTS `jos_core_acl_aro_groups` (
  `group_id` int(11) NOT NULL auto_increment,
  `parent_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `lft` int(11) NOT NULL default '0',
  `rgt` int(11) NOT NULL default '0',
  PRIMARY KEY  (`group_id`),
  KEY `parent_id_aro_groups` (`parent_id`),
  KEY `jos_gacl_parent_id_aro_groups` (`parent_id`),
  KEY `jos_gacl_lft_rgt_aro_groups` (`lft`,`rgt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `jos_core_acl_aro_groups`
--

INSERT INTO `jos_core_acl_aro_groups` (`group_id`, `parent_id`, `name`, `lft`, `rgt`) VALUES
(17, 0, 'ROOT', 1, 22),
(28, 17, 'USERS', 2, 21),
(29, 28, 'Public Frontend', 3, 12),
(18, 29, 'Registered', 4, 11),
(19, 18, 'Author', 5, 10),
(20, 19, 'Editor', 6, 9),
(21, 20, 'Publisher', 7, 8),
(30, 28, 'Public Backend', 13, 20),
(23, 30, 'Manager', 14, 19),
(24, 23, 'Administrator', 15, 18),
(25, 24, 'Super Administrator', 16, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_core_acl_aro_sections`
--

CREATE TABLE IF NOT EXISTS `jos_core_acl_aro_sections` (
  `section_id` int(11) NOT NULL auto_increment,
  `value` varchar(230) NOT NULL default '',
  `order_value` int(11) NOT NULL default '0',
  `name` varchar(230) NOT NULL default '',
  `hidden` int(11) NOT NULL default '0',
  PRIMARY KEY  (`section_id`),
  UNIQUE KEY `value_aro_sections` (`value`),
  UNIQUE KEY `jos_gacl_value_aro_sections` (`value`),
  KEY `hidden_aro_sections` (`hidden`),
  KEY `jos_gacl_hidden_aro_sections` (`hidden`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `jos_core_acl_aro_sections`
--

INSERT INTO `jos_core_acl_aro_sections` (`section_id`, `value`, `order_value`, `name`, `hidden`) VALUES
(10, 'users', 1, 'Users', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_core_acl_groups_aro_map`
--

CREATE TABLE IF NOT EXISTS `jos_core_acl_groups_aro_map` (
  `group_id` int(11) NOT NULL default '0',
  `section_value` varchar(240) NOT NULL default '',
  `aro_id` int(11) NOT NULL default '0',
  UNIQUE KEY `group_id_aro_id_groups_aro_map` (`group_id`,`section_value`,`aro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_core_acl_groups_aro_map`
--

INSERT INTO `jos_core_acl_groups_aro_map` (`group_id`, `section_value`, `aro_id`) VALUES
(25, '', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_core_log_items`
--

CREATE TABLE IF NOT EXISTS `jos_core_log_items` (
  `time_stamp` date NOT NULL default '0000-00-00',
  `item_table` varchar(50) NOT NULL default '',
  `item_id` int(11) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_core_log_items`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_core_log_searches`
--

CREATE TABLE IF NOT EXISTS `jos_core_log_searches` (
  `search_term` varchar(128) NOT NULL default '',
  `hits` int(11) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_core_log_searches`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_docman`
--

CREATE TABLE IF NOT EXISTS `jos_docman` (
  `id` int(11) NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '1',
  `dmname` text NOT NULL,
  `dmdescription` longtext,
  `dmdate_published` datetime NOT NULL default '0000-00-00 00:00:00',
  `dmowner` int(4) NOT NULL default '-1',
  `dmfilename` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `dmurl` text,
  `dmcounter` int(11) default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `approved` tinyint(1) NOT NULL default '0',
  `dmthumbnail` text,
  `dmlastupdateon` datetime default '0000-00-00 00:00:00',
  `dmlastupdateby` int(5) NOT NULL default '-1',
  `dmsubmitedby` int(5) NOT NULL default '-1',
  `dmmantainedby` int(5) default '0',
  `dmlicense_id` int(5) default '0',
  `dmlicense_display` tinyint(1) NOT NULL default '0',
  `access` int(11) unsigned NOT NULL default '0',
  `attribs` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `pub_appr_own_cat_name` (`published`,`approved`,`dmowner`,`catid`,`dmname`(64)),
  KEY `appr_pub_own_cat_date` (`approved`,`published`,`dmowner`,`catid`,`dmdate_published`),
  KEY `own_pub_appr_cat_count` (`dmowner`,`published`,`approved`,`catid`,`dmcounter`),
  KEY `own_pub_appr_cat_id` (`dmowner`,`published`,`approved`,`catid`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `jos_docman`
--

INSERT INTO `jos_docman` (`id`, `catid`, `dmname`, `dmdescription`, `dmdate_published`, `dmowner`, `dmfilename`, `published`, `dmurl`, `dmcounter`, `checked_out`, `checked_out_time`, `approved`, `dmthumbnail`, `dmlastupdateon`, `dmlastupdateby`, `dmsubmitedby`, `dmmantainedby`, `dmlicense_id`, `dmlicense_display`, `access`, `attribs`) VALUES
(1, 7, 'Material Técnico 01', 'Documento de treinamento.\r\n', '2008-11-23 17:34:03', -1, '01.pdf', 1, '', 0, 0, '0000-00-00 00:00:00', 1, '', '2016-09-11 15:57:07', 62, 62, -11, 1, 1, 0, 'crc_checksum=md5_checksum=\nmd5_checksum='),
(2, 7, 'Material Técnico 02', 'Documento de treinamento.\r\n', '2008-11-23 17:34:03', -1, '02.pdf', 1, '', 0, 0, '0000-00-00 00:00:00', 1, '', '2016-09-11 15:57:39', 62, 62, -11, 1, 1, 0, 'crc_checksum=md5_checksum=\nmd5_checksum=');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_docman_groups`
--

CREATE TABLE IF NOT EXISTS `jos_docman_groups` (
  `groups_id` int(11) NOT NULL auto_increment,
  `groups_name` text NOT NULL,
  `groups_description` longtext,
  `groups_access` tinyint(4) NOT NULL default '1',
  `groups_members` text,
  PRIMARY KEY  (`groups_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_docman_groups`
--

INSERT INTO `jos_docman_groups` (`groups_id`, `groups_name`, `groups_description`, `groups_access`, `groups_members`) VALUES
(1, 'Sample Group', 'You can use groups to assign permissions to a group of users.', 1, '62');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_docman_history`
--

CREATE TABLE IF NOT EXISTS `jos_docman_history` (
  `id` int(11) NOT NULL auto_increment,
  `doc_id` int(11) NOT NULL,
  `revision` int(5) NOT NULL default '1',
  `his_date` datetime NOT NULL,
  `his_who` int(11) NOT NULL,
  `his_obs` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_docman_history`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_docman_licenses`
--

CREATE TABLE IF NOT EXISTS `jos_docman_licenses` (
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `license` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_docman_licenses`
--

INSERT INTO `jos_docman_licenses` (`id`, `name`, `license`) VALUES
(1, 'Sample License', 'You can optionally assign licenses to documents.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_docman_log`
--

CREATE TABLE IF NOT EXISTS `jos_docman_log` (
  `id` int(11) NOT NULL auto_increment,
  `log_docid` int(11) NOT NULL,
  `log_ip` text NOT NULL,
  `log_datetime` datetime NOT NULL,
  `log_user` int(11) NOT NULL default '0',
  `log_browser` text,
  `log_os` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_docman_log`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_forme_config`
--

CREATE TABLE IF NOT EXISTS `jos_forme_config` (
  `id` int(11) NOT NULL auto_increment,
  `setting_name` varchar(64) NOT NULL default '',
  `setting_value` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `jos_forme_config`
--

INSERT INTO `jos_forme_config` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'global.register.code', ''),
(2, 'global.update.check', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_forme_data`
--

CREATE TABLE IF NOT EXISTS `jos_forme_data` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `form_id` int(11) NOT NULL default '0',
  `date_added` datetime NOT NULL default '0000-00-00 00:00:00',
  `uip` varchar(15) NOT NULL default '',
  `uid` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  `lang` varchar(10) NOT NULL default 'en',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_forme_data`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_forme_fields`
--

CREATE TABLE IF NOT EXISTS `jos_forme_fields` (
  `id` int(11) NOT NULL auto_increment,
  `form_id` int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `fieldstyle` text NOT NULL,
  `description` text NOT NULL,
  `inputtype` varchar(255) NOT NULL default 'text',
  `default_value` text NOT NULL,
  `params` text NOT NULL,
  `validation_rule` varchar(50) NOT NULL default '',
  `validation_message` varchar(255) NOT NULL default '',
  `ordering` tinyint(4) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `jos_forme_fields`
--

INSERT INTO `jos_forme_fields` (`id`, `form_id`, `name`, `title`, `fieldstyle`, `description`, `inputtype`, `default_value`, `params`, `validation_rule`, `validation_message`, `ordering`, `published`, `checked_out`, `checked_out_time`) VALUES
(1, 1, 'nome', 'Nome', '<tr>\r\n	<td align="right" valign="top">{fieldtitle}{validationsign}</td>\r\n	<td valign="top">{field}</td>\r\n	<td valign="top">{fielddesc}</td>\r\n</tr>\r\n', '', 'text', '', '', 'mandatory', 'Digite o seu nome.', 1, 1, 0, '0000-00-00 00:00:00'),
(2, 1, 'email', 'Email', '<tr>\r\n	<td align="right" valign="top">{fieldtitle}{validationsign}</td>\r\n	<td valign="top">{field}</td>\r\n	<td valign="top">{fielddesc}</td>\r\n</tr>\r\n', '', 'text', '', '', 'email', 'Digite um email válido.', 2, 1, 0, '0000-00-00 00:00:00'),
(3, 1, 'curriculo', 'Currículo', '<tr>\r\n	<td align="right" valign="top">{fieldtitle}{validationsign}</td>\r\n	<td valign="top">{field}</td>\r\n	<td valign="top">{fielddesc}</td>\r\n</tr>\r\n', 'Arquivos pdf ou doc', 'file upload', 'application/msword,application/pdf', '', '', '', 3, 1, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_forme_forms`
--

CREATE TABLE IF NOT EXISTS `jos_forme_forms` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `formstyle` text NOT NULL,
  `fieldstyle` text NOT NULL,
  `thankyou` text NOT NULL,
  `email` text NOT NULL,
  `emailto` text NOT NULL,
  `emailfrom` varchar(255) NOT NULL default '',
  `emailfromname` varchar(255) NOT NULL default '',
  `emailsubject` varchar(255) NOT NULL default '',
  `emailmode` tinyint(4) NOT NULL default '1',
  `return_url` varchar(255) NOT NULL default '',
  `published` tinyint(4) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `lang` varchar(10) NOT NULL,
  `script_process` text NOT NULL,
  `script_display` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_forme_forms`
--

INSERT INTO `jos_forme_forms` (`id`, `name`, `title`, `formstyle`, `fieldstyle`, `thankyou`, `email`, `emailto`, `emailfrom`, `emailfromname`, `emailsubject`, `emailmode`, `return_url`, `published`, `checked_out`, `checked_out_time`, `lang`, `script_process`, `script_display`) VALUES
(1, 'curriculo', 'Envie seu currículo', '<div align="left" style="width:100%" class="componentheading">{formtitle}</div>\r\n<form name="{formname}" id="{formname}" method="post" action="{action}" {enctype}>\r\n	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="forme">\r\n	{formfields}\r\n	</table>\r\n</form>', '<tr>\r\n	<td align="right" valign="top">{fieldtitle}{validationsign}</td>\r\n	<td valign="top">{field}</td>\r\n	<td valign="top">{fielddesc}</td>\r\n</tr>\r\n', 'Agradecemos seu interesse. Entraremos em contato em breve.\r\n', '<p>\r\nUm novo curr&iacute;culo foi cadastrado no site. Veja os dados abaixo:\r\n</p>\r\n<p>\r\n&nbsp;\r\n</p>\r\n', 'marketing@maquel.com.br', 'marketing@maquel.com.br', 'Maquel Cosméticos', '[CURRÍCULO] - Novo currículo cadastrado', 1, 'http://www.maquel.com.br', 1, 0, '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_glossaries`
--

CREATE TABLE IF NOT EXISTS `jos_glossaries` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(120) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `published` tinyint(1) unsigned NOT NULL default '0',
  `isdefault` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `jos_glossaries`
--

INSERT INTO `jos_glossaries` (`id`, `name`, `description`, `published`, `isdefault`) VALUES
(1, 'Glossário de Ativos', '', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_glossary`
--

CREATE TABLE IF NOT EXISTS `jos_glossary` (
  `id` int(10) NOT NULL auto_increment,
  `tletter` char(1) NOT NULL default '',
  `tterm` varchar(40) NOT NULL default '',
  `tdefinition` text NOT NULL,
  `tname` varchar(20) NOT NULL default '',
  `tloca` varchar(60) default NULL,
  `tmail` varchar(60) default NULL,
  `tpage` varchar(150) default NULL,
  `tdate` datetime default NULL,
  `tcomment` text,
  `tedit` enum('y','n') NOT NULL default 'n',
  `teditdate` datetime default NULL,
  `published` tinyint(1) NOT NULL default '0',
  `catid` int(3) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `term` (`tterm`),
  FULLTEXT KEY `tdefinition` (`tdefinition`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `jos_glossary`
--

INSERT INTO `jos_glossary` (`id`, `tletter`, `tterm`, `tdefinition`, `tname`, `tloca`, `tmail`, `tpage`, `tdate`, `tcomment`, `tedit`, `teditdate`, `published`, `catid`, `checked_out`) VALUES
(1, 'A', 'Abacate', 'O abacate, abacado ou pêra-de-advogado é o fruto comestível do abacateiro, que é uma árvore da família da laureáceas, nativa do México ou da América do Sul (Persea americana), hoje extensamente cultivada - incluindo nas Ilhas Canárias e na ilha da Madeira - e muito popular no Brasil.\r\n\r\nSão conhecidas mais de 500 variedades, de três origens diferentes: a guatemalteca, a antilhana e a mexicana. A parte comestível é a polpa verde-amarelada, de consistência mole, que envolve a grande semente. Tem mais de 30% de gorduras (extraída comercialmente da semente, como do mesocarpo do fruto e de aplicação cosmética), é rica em açúcares e vitaminas e possui um dos mais elevados teores de proteínas dentre as frutas. É consumido isoladamente ou em saladas temperadas com molhos, como no guacamole, prato da culinária mexicana, ou como sobremesa, batido com leite e açúcar no Brasil, ou com açúcar e limão, em Moçambique.\r\n\r\nO abacate era amplamente cultivado antes da conquista espanhola, mas só mereceu a atenção dos horticultores no século XIX. O nome nahuatl (asteca) do fruto é ahuacatl (o qual significa testículo - analogia com a sua forma), que originou, em espanhol, a palavra aguacate. O abacate é um fruto arrendondado ou piriforme, de peso médio de 500 a 1.500g. Sua casca varia, em colorido, do verde ao vermelho-escuro, passando pelo pardo, violáceo ou negro. As suas duas principais variedades são a Strong (cor verde) e a Hass (cor roxa). A árvore, o abacateiro, atinge até 15 ou 20 m e cresce melhor em climas quentes.', '', '', '', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', 1, 1, 0),
(2, 'A', 'Abacaxi', 'Abacaxi ou ananás é uma planta monocotiledônea da família das bromeliáceas, subfamília Bromelioideae. Os abacaxizeiros cultivados pertencem à espécie Ananas comosus, que compreende muitas variedades frutíferas. Há também várias espécies selvagens, pertencentes ao mesmo gênero.', '', '', '', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', 0, 1, 0),
(3, 'A', 'Abricó', 'O damasqueiro (Prunus armeniaca, "Armenian plum" em latim, sin. Armeniaca vulgaris Lam.) é uma árvore que atinge de 3m a 10m, da família das rosáceas, de folhas cordiformes ou ovadas, serreadas e com o pecíolo vermelho, flores solitárias ou geminadas, róseas ou brancas, e drupas subglobosas, com um sulco mediano característico, amarelas ou alaranjadas, com polpa carnosa e sucosa.\r\n\r\nÉ conhecida no norte da China desde 2000 a.C., sendo muito cultivada em vários países, com inúmeros híbridos e variedades, principalmente devido à sua madeira dura e pelos frutos, o damasco (também chamado de apricó, abricó, abricô, abricoque, abricote, alberge, albricoque, alpece, alperce, alperche), comestíveis ao natural e internacionalmente consumidos como passas e em doces.', '', '', '', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', 0, 1, 0),
(4, 'A', 'Açai', 'Açaí ou juçara é o fruto da palmeira conhecida como açaizeiro, cujo nome científico é Euterpe oleracea. É uma espécie nativa das várzeas da região amazônica, especificamente dos seguintes países: Venezuela, Colômbia, Equador, Guianas e Brasil (estados do Amazonas, Amapá, Pará, Maranhão e Acre).\r\n\r\nO açaí é um alimento muito importante na dieta dos habitantes da Amazônia, onde seu consumo remonta aos tempos pré-colonial. Hoje em dia é cultivado não só na Região Amazônica, mas em diversos outros estados brasileiros, sendo introduzido no resto do mercado nacional durante os anos oitenta e noventa, com modificações no modo de consumo.', '', '', '', '', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', 0, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_groups`
--

CREATE TABLE IF NOT EXISTS `jos_groups` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_groups`
--

INSERT INTO `jos_groups` (`id`, `name`) VALUES
(0, 'Público'),
(1, 'Registrado'),
(2, 'Especial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_jce_langs`
--

CREATE TABLE IF NOT EXISTS `jos_jce_langs` (
  `id` int(11) NOT NULL auto_increment,
  `Name` varchar(100) NOT NULL default '',
  `lang` varchar(100) NOT NULL default '',
  `published` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `jos_jce_langs`
--

INSERT INTO `jos_jce_langs` (`id`, `Name`, `lang`, `published`) VALUES
(1, 'English', 'en', 0),
(2, 'Brazilian Portuguese', 'pt_br', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_jce_plugins`
--

CREATE TABLE IF NOT EXISTS `jos_jce_plugins` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `plugin` varchar(100) NOT NULL default '',
  `type` varchar(100) NOT NULL default 'plugin',
  `icon` varchar(255) NOT NULL default '',
  `layout_icon` varchar(255) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '18',
  `row` int(11) NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `editable` tinyint(3) NOT NULL default '0',
  `elements` varchar(255) NOT NULL default '',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `plugin` (`plugin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Extraindo dados da tabela `jos_jce_plugins`
--

INSERT INTO `jos_jce_plugins` (`id`, `name`, `plugin`, `type`, `icon`, `layout_icon`, `access`, `row`, `ordering`, `published`, `editable`, `elements`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
(1, 'Context Menu', 'contextmenu', 'plugin', '', '', 18, 0, 0, 0, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(2, 'Directionality', 'directionality', 'plugin', 'ltr,rtl', 'directionality', 18, 3, 8, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(3, 'Emotions', 'emotions', 'plugin', 'emotions', 'emotions', 18, 4, 12, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(4, 'Fullscreen', 'fullscreen', 'plugin', 'fullscreen', 'fullscreen', 18, 4, 6, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(5, 'Paste', 'paste', 'plugin', 'pasteword,pastetext', 'paste', 18, 1, 16, 1, 1, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(6, 'Preview', 'preview', 'plugin', 'preview', 'preview', 18, 4, 1, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(7, 'Tables', 'table', 'plugin', 'tablecontrols', 'buttons', 18, 2, 8, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(8, 'Print', 'print', 'plugin', 'print', 'print', 18, 4, 3, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(9, 'Search Replace', 'searchreplace', 'plugin', 'search,replace', 'searchreplace', 18, 1, 17, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(10, 'Styles', 'style', 'plugin', 'styleprops', 'styleprops', 18, 4, 7, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(11, 'Non-Breaking', 'nonbreaking', 'plugin', 'nonbreaking', 'nonbreaking', 18, 4, 8, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(12, 'Visual Characters', 'visualchars', 'plugin', 'visualchars', 'visualchars', 18, 4, 9, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(13, 'XHTML Xtras', 'xhtmlxtras', 'plugin', 'cite,abbr,acronym,del,ins,attribs', 'xhtmlxtras', 18, 4, 10, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(14, 'Image Manager', 'imgmanager', 'plugin', '', 'imgmanager', 18, 4, 13, 1, 1, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(15, 'Advanced Link', 'advlink', 'plugin', '', 'advlink', 18, 4, 14, 1, 1, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(16, 'Spell Checker', 'spellchecker', 'plugin', 'spellchecker', 'spellchecker', 18, 4, 15, 1, 1, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(17, 'Layers', 'layer', 'plugin', 'insertlayer,moveforward,movebackward,absolute', 'layer', 18, 4, 11, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(18, 'Font ForeColour', 'forecolor', 'command', 'forecolor', 'forecolor', 18, 3, 4, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(19, 'Bold', 'bold', 'command', 'bold', 'bold', 18, 1, 5, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(20, 'Italic', 'italic', 'command', 'italic', 'italic', 18, 1, 6, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(21, 'Underline', 'underline', 'command', 'underline', 'underline', 18, 1, 7, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(22, 'Font BackColour', 'backcolor', 'command', 'backcolor', 'backcolor', 18, 3, 5, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(23, 'Unlink', 'unlink', 'command', 'unlink', 'unlink', 18, 2, 11, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(24, 'Font Select', 'fontselect', 'command', 'fontselect', 'fontselect', 18, 3, 2, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(25, 'Font Size Select', 'fontsizeselect', 'command', 'fontsizeselect', 'fontsizeselect', 18, 3, 3, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(26, 'Style Select', 'styleselect', 'command', 'styleselect', 'styleselect', 18, 3, 1, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(27, 'New Document', 'newdocument', 'command', 'newdocument', 'newdocument', 18, 1, 4, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(28, 'Help', 'help', 'command', 'help', 'help', 18, 1, 3, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(29, 'StrikeThrough', 'strikethrough', 'command', 'strikethrough', 'strikethrough', 18, 1, 12, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(30, 'Indent', 'indent', 'command', 'indent', 'indent', 18, 1, 11, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(31, 'Outdent', 'outdent', 'command', 'outdent', 'outdent', 18, 1, 10, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(32, 'Undo', 'undo', 'command', 'undo', 'undo', 18, 1, 1, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(33, 'Redo', 'redo', 'command', 'redo', 'redo', 18, 1, 2, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(34, 'Horizontal Rule', 'hr', 'command', 'hr', 'hr', 18, 2, 1, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(35, 'HTML', 'html', 'command', 'code', 'code', 18, 1, 13, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(36, 'Numbered List', 'numlist', 'command', 'numlist', 'numlist', 18, 1, 9, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(37, 'Bullet List', 'bullist', 'command', 'bullist', 'bullist', 18, 1, 8, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(38, 'Clipboard Actions', 'clipboard', 'command', 'cut,copy,paste', 'clipboard', 18, 1, 16, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(39, 'Subscript', 'sub', 'command', 'sub', 'sub', 18, 2, 2, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(40, 'Superscript', 'sup', 'command', 'sup', 'sup', 18, 2, 3, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(41, 'Visual Aid', 'visualaid', 'command', 'visualaid', 'visualaid', 18, 3, 7, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(42, 'Character Map', 'charmap', 'command', 'charmap', 'charmap', 18, 3, 6, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(43, 'Justify Full', 'full', 'command', 'justifyfull', 'justifyfull', 18, 2, 7, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(44, 'Justify Center', 'center', 'command', 'justifycenter', 'justifycenter', 18, 2, 5, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(45, 'Justify Left', 'left', 'command', 'justifyleft', 'justifyleft', 18, 2, 6, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(46, 'Justify Right', 'right', 'command', 'justifyright', 'justifyright', 18, 2, 4, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(47, 'Remove Format', 'removeformat', 'command', 'removeformat', 'removeformat', 18, 1, 15, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(48, 'Anchor', 'anchor', 'command', 'anchor', 'anchor', 18, 2, 9, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(49, 'Format Select', 'formatselect', 'command', 'formatselect', 'formatselect', 18, 3, 9, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(50, 'Image', 'image', 'command', 'image', 'image', 18, 4, 1, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', ''),
(51, 'Link', 'link', 'command', 'link', 'link', 18, 4, 1, 1, 0, '', 1, 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_mambots`
--

CREATE TABLE IF NOT EXISTS `jos_mambots` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `element` varchar(100) NOT NULL default '',
  `folder` varchar(100) NOT NULL default '',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `ordering` int(11) NOT NULL default '0',
  `published` tinyint(3) NOT NULL default '0',
  `iscore` tinyint(3) NOT NULL default '0',
  `client_id` tinyint(3) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_folder` (`published`,`client_id`,`access`,`folder`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `jos_mambots`
--

INSERT INTO `jos_mambots` (`id`, `name`, `element`, `folder`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
(1, 'MOS: Imagem', 'mosimage', 'content', 0, -10000, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(2, 'MOS: Paginação', 'mospaging', 'content', 0, 10000, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(3, 'Inclusão de Plugins Antigos', 'legacybots', 'content', 0, 1, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(4, 'SEF em Artigos', 'mossef', 'content', 0, 3, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(5, 'MOS: Votação', 'mosvote', 'content', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(6, 'Procurar Conteúdo', 'content.searchbot', 'search', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(7, 'Procurar Weblinks', 'weblinks.searchbot', 'search', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(8, 'Suporte de Código', 'moscode', 'content', 0, 2, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(9, 'Editor não WYSIWYG', 'none', 'editors', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(10, 'Editor WYSIWYG TinyMCE', 'tinymce', 'editors', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', 'theme=advanced'),
(11, 'MOS: Botão de Imagem', 'mosimage.btn', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(12, 'MOS: Botão de Quebra de Página', 'mospage.btn', 'editors-xtd', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(13, 'Procurar Contatos', 'contacts.searchbot', 'search', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(14, 'Procurar Categorias', 'categories.searchbot', 'search', 0, 4, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(15, 'Procurar Seções', 'sections.searchbot', 'search', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(16, 'Proteção de Email', 'mosemailcloak', 'content', 0, 5, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(17, 'GeSHi', 'geshi', 'content', 0, 5, 0, 0, 0, 0, '0000-00-00 00:00:00', ''),
(18, 'Procurar Notícias Externas', 'newsfeeds.searchbot', 'search', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(19, 'Posicionador de Módulos', 'mosloadposition', 'content', 0, 6, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(20, 'Acajoom Content Bot', 'acajoombot', 'acajoom', 0, 0, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(21, 'JCE Editor Mambot', 'jce', 'editors', 0, 3, 1, 0, 0, 0, '0000-00-00 00:00:00', 'editor_width=500\neditor_height=600\neditor_state=mceEditor\ncompression=0\nrelative_url=1\neditor_toggle=[show/hide]\ntext_direction=ltr\ncharset=iso-8859-1\ntable_inline=0\ncontent_css=0\ncontent_css_custom=editor_content.css\nnewlines=0\ntoolbar=top\nverify_html=0\nfix_table_elements=1\nfix_list_elements=1\nmambot_mode=0\nentity_encoding=named\nfont_size_type=length\ninvalid_elements=applet\nextended_elements=\nevent_elements=td,img,a\nallow_script=18\nhtml_height=550\nhtml_width=750\npreview_height=550\npreview_width=750\ntemplate_colors='),
(23, 'sIFR mambot', 'bot_sifr', 'system', 0, 1, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(24, 'DOCman Standard Buttons', 'standardbuttons', 'docman', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', 'download=1\nview=1\ndetails=1\nedit=1\nmove=1\ndelete=1\nupdate=1\nreset=1\ncheckout=1\napprove=1\npublish=1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_menu`
--

CREATE TABLE IF NOT EXISTS `jos_menu` (
  `id` int(11) NOT NULL auto_increment,
  `menutype` varchar(25) default NULL,
  `name` varchar(100) default NULL,
  `link` text,
  `type` varchar(50) NOT NULL default '',
  `published` tinyint(1) NOT NULL default '0',
  `parent` int(11) unsigned NOT NULL default '0',
  `componentid` int(11) unsigned NOT NULL default '0',
  `sublevel` int(11) default '0',
  `ordering` int(11) default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `pollid` int(11) NOT NULL default '0',
  `browserNav` tinyint(4) default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `utaccess` tinyint(3) unsigned NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `componentid` (`componentid`,`menutype`,`published`,`access`),
  KEY `menutype` (`menutype`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `jos_menu`
--

INSERT INTO `jos_menu` (`id`, `menutype`, `name`, `link`, `type`, `published`, `parent`, `componentid`, `sublevel`, `ordering`, `checked_out`, `checked_out_time`, `pollid`, `browserNav`, `access`, `utaccess`, `params`) VALUES
(1, 'mainmenu', 'Home', 'index.php?option=com_frontpage', 'components', 1, 0, 10, 0, 8, 0, '0000-00-00 00:00:00', 0, 0, 0, 3, 'menu_image=-1\npageclass_sfx=-home\nheader=Welcome to the Frontpage\npage_title=0\nback_button=0\nleading=1\nintro=0\ncolumns=1\nlink=0\norderby_pri=\norderby_sec=front\npagination=0\npagination_results=0\nimage=1\nsection=0\nsection_link=0\ncategory=0\ncategory_link=0\nitem_title=0\nlink_titles=\nreadmore=0\nrating=0\nauthor=0\ncreatedate=0\nmodifydate=0\npdf=0\nprint=0\nemail=0\nunpublished=0'),
(2, 'mainmenu', 'A Maquel', 'http://www.google.com', 'url', -2, 0, 0, 0, 16, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(3, 'mainmenu', 'OPCAO 1', 'http://www.google.com', 'url', -2, 2, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(4, 'mainmenu', 'OPCAO 2', 'http://www.google.com', 'url', -2, 2, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(5, 'mainmenu', 'OPCAO 3', 'http://www.google.com', 'url', -2, 2, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(6, 'mainmenu', 'OPCAO 4', 'http://www.google.com', 'url', -2, 2, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(7, 'mainmenu', 'SUBOPCAO 1', 'http://www.google.com', 'url', -2, 5, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(8, 'mainmenu', 'SUBOPCAO 2', 'http://www.google.com', 'url', -2, 5, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(9, 'mainmenu', 'Produtos', 'http://www.google.com', 'url', -2, 0, 0, 0, 7, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(10, 'mainmenu', 'Onde Comprar', 'http://www.google.com', 'url', 0, 0, 0, 0, 13, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(11, 'mainmenu', 'Cursos', 'http://www.google.com', 'url', -2, 0, 0, 0, 11, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(12, 'mainmenu', 'Espaço Estéticassss', 'http://www.google.com', 'url', -2, 0, 0, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(13, 'mainmenu', 'Distribuidor', 'http://www.google.com', 'url', -2, 0, 0, 0, 6, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(14, 'mainmenu', 'Loja Virtual', 'http://www.google.com', 'url', -2, 0, 0, 0, 5, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(15, 'mainmenu', 'Blog', 'http://www.google.com', 'url', -2, 0, 0, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(16, 'mainmenu', 'Imprensa', 'http://www.google.com', 'url', -2, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(17, 'mainmenu', 'Contato', 'http://www.google.com', 'url', -2, 0, 0, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(18, 'mainmenu', 'A Maquel', '', 'separator', 1, 0, 0, 0, 10, 0, '0000-00-00 00:00:00', 0, 3, 0, 0, 'menu_image=-1'),
(19, 'mainmenu', 'História', 'index.php?option=com_content&task=view&id=2', 'content_typed', 1, 18, 2, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\nunique_itemid=0'),
(20, 'amaquel', 'História', 'index.php?option=com_content&task=view&id=2', 'content_typed', 1, 0, 2, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\nunique_itemid=0'),
(21, 'amaquel', 'Visão e Missão', 'index.php?option=com_content&task=view&id=3', 'content_typed', 1, 0, 3, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\nunique_itemid=0'),
(22, 'mainmenu', 'Visão e Missão', 'index.php?option=com_content&task=view&id=3', 'content_typed', 1, 18, 3, 0, 2, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\nunique_itemid=0'),
(23, 'mainmenu', 'Cursos', 'index.php?option=com_content&task=view&id=5', 'content_item_link', -2, 0, 5, 0, 9, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\nunique_itemid=0'),
(24, 'mainmenu', 'Cursos', 'index.php?option=com_content&task=blogsection&id=2', 'content_blog_section', 1, 0, 2, 0, 14, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\npageclass_sfx=\nback_button=\nheader=Os Cursos da Maquel\npage_title=1\nleading=1\nintro=4\ncolumns=2\nlink=4\norderby_pri=\norderby_sec=\npagination=2\npagination_results=1\nimage=1\ndescription=1\ndescription_image=0\ncategory=0\ncategory_link=0\nitem_title=1\nlink_titles=\nreadmore=\nrating=\nauthor=\ncreatedate=\nmodifydate=\npdf=\nprint=\nemail=\nunpublished=0\nsectionid=2'),
(25, 'amaquel', 'Nossos Selos', 'index.php?option=com_content&task=view&id=7', 'content_typed', 1, 0, 7, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\nunique_itemid=0'),
(26, 'mainmenu', 'Nossos Selos', 'index.php?option=com_content&task=view&id=7', 'content_typed', 1, 18, 7, 0, 3, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1\nunique_itemid=0'),
(27, 'amaquel', 'Envie seu currículo', 'index.php?option=com_forme&fid=1', 'url', 1, 0, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(28, 'mainmenu', 'Envie seu currículo', 'index.php?option=com_forme&fid=1', 'url', 1, 18, 0, 0, 4, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'menu_image=-1'),
(29, 'mainmenu', 'Produtos', 'index.php?option=com_virtuemart&page=shop.browse&category_id=1', 'components', 1, 0, 34, 0, 12, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, ''),
(30, 'mainmenu', 'Glossary', 'index.php?option=com_glossary', 'components', 0, 0, 36, 0, 17, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, ''),
(31, 'mainmenu', 'Glossário de Ativos', 'index.php?option=com_glossary', 'components', 1, 33, 36, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, ''),
(32, 'mainmenu', 'Imprensa', 'index.php?option=com_docman', 'components', 1, 0, 37, 0, 18, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 'cat_id=7'),
(33, 'mainmenu', 'Espaço Estética', '', 'separator', 1, 0, 0, 0, 15, 0, '0000-00-00 00:00:00', 0, 3, 0, 0, 'menu_image=-1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_messages`
--

CREATE TABLE IF NOT EXISTS `jos_messages` (
  `message_id` int(10) unsigned NOT NULL auto_increment,
  `user_id_from` int(10) unsigned NOT NULL default '0',
  `user_id_to` int(10) unsigned NOT NULL default '0',
  `folder_id` int(10) unsigned NOT NULL default '0',
  `date_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `state` int(11) NOT NULL default '0',
  `priority` int(1) unsigned NOT NULL default '0',
  `subject` varchar(230) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_messages`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_messages_cfg`
--

CREATE TABLE IF NOT EXISTS `jos_messages_cfg` (
  `user_id` int(10) unsigned NOT NULL default '0',
  `cfg_name` varchar(100) NOT NULL default '',
  `cfg_value` varchar(255) NOT NULL default '',
  UNIQUE KEY `idx_user_var_name` (`user_id`,`cfg_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_messages_cfg`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_modules`
--

CREATE TABLE IF NOT EXISTS `jos_modules` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `ordering` int(11) NOT NULL default '0',
  `position` varchar(10) default NULL,
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `module` varchar(50) default NULL,
  `numnews` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `showtitle` tinyint(3) unsigned NOT NULL default '1',
  `params` text NOT NULL,
  `iscore` tinyint(4) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`,`access`),
  KEY `newsfeeds` (`module`,`published`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Extraindo dados da tabela `jos_modules`
--

INSERT INTO `jos_modules` (`id`, `title`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `published`, `module`, `numnews`, `access`, `showtitle`, `params`, `iscore`, `client_id`) VALUES
(1, 'Enquete', '', 1, 'inset', 0, '0000-00-00 00:00:00', 0, 'mod_poll', 0, 0, 1, 'cache=0\nmoduleclass_sfx=', 0, 0),
(2, 'Menu Usuários', '', 9, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 1, 1, 'menutype=usermenu', 1, 0),
(3, 'Menu Principal', '', 7, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=mainmenu', 1, 0),
(4, 'Login', '', 10, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_login', 0, 0, 1, '', 1, 0),
(5, 'Difusão de Notícias', '', 12, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_rssfeed', 0, 0, 1, '', 1, 0),
(6, 'Últimas Notícias', '', 3, 'user1', 0, '0000-00-00 00:00:00', 0, 'mod_latestnews', 0, 0, 1, '', 1, 0),
(7, 'Estatísticas', '', 11, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_stats', 0, 0, 1, 'serverinfo=1\nsiteinfo=1\ncounter=1\nincrease=0\nmoduleclass_sfx=', 0, 0),
(8, 'Usuários On-line', '', 2, 'right', 0, '0000-00-00 00:00:00', 0, 'mod_whosonline', 0, 0, 1, 'online=1\nusers=1\nmoduleclass_sfx=', 0, 0),
(9, 'Popular', '', 3, 'user2', 0, '0000-00-00 00:00:00', 0, 'mod_mostread', 0, 0, 1, '', 0, 0),
(10, 'Escolher Tema', '', 5, 'inset', 0, '0000-00-00 00:00:00', 0, 'mod_templatechooser', 0, 0, 1, 'title_length=20\nshow_preview=1\npreview_width=140\npreview_height=90\nmoduleclass_sfx=', 0, 0),
(11, 'Arquivo', '', 13, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_archive', 0, 0, 1, '', 1, 0),
(12, 'Seções', '', 14, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_sections', 0, 0, 1, 'count=5\nmoduleclass_sfx=', 1, 0),
(13, 'Notícias', '', 1, 'user1', 0, '0000-00-00 00:00:00', 1, 'mod_newsflash', 0, 0, 1, 'catid=8\nstyle=random\nimage=0\nlink_titles=\nreadmore=0\nitem_title=0\nitems=1\ncache=0\nmoduleclass_sfx=', 0, 0),
(14, 'Itens Relacionados', '', 15, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_related_items', 0, 0, 1, '', 0, 0),
(15, 'Procurar', '', 1, 'user4', 0, '0000-00-00 00:00:00', 1, 'mod_search', 0, 0, 0, 'moduleclass_sfx=\ncache=0\nset_itemid=\nwidth=20\ntext= \nbutton=1\nbutton_pos=right\nbutton_text=Buscar', 0, 0),
(16, 'Imagens Aleatórias', '', 5, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_random_image', 0, 0, 1, '', 0, 0),
(17, 'Top Menu', '', 1, 'user3', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 0, 'menutype=topmenu\nmenu_style=list_flat\nmenu_images=n\nmenu_images_align=left\nexpand_menu=n\nclass_sfx=-nav\nmoduleclass_sfx=\nindent_image1=0\nindent_image2=0\nindent_image3=0\nindent_image4=0\nindent_image5=0\nindent_image6=0', 1, 0),
(18, 'Banners', '', 1, 'banner', 0, '0000-00-00 00:00:00', 0, 'mod_banners', 0, 0, 0, 'banner_cids=\nmoduleclass_sfx=\n', 1, 0),
(19, 'Componente', '', 2, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_components', 0, 99, 1, '', 1, 1),
(20, 'Popular', '', 3, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_popular', 0, 99, 1, '', 0, 1),
(21, 'Últimos', '', 4, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_latest', 0, 99, 1, '', 0, 1),
(22, 'Menus', '', 5, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_stats', 0, 99, 1, '', 0, 1),
(23, 'Mensagens Não Lidas', '', 1, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_unread', 0, 99, 1, '', 1, 1),
(24, 'Usuários Online', '', 2, 'header', 0, '0000-00-00 00:00:00', 1, 'mod_online', 0, 99, 1, '', 1, 1),
(25, 'Menu Completo', '', 2, 'top', 0, '0000-00-00 00:00:00', 1, 'mod_fullmenu', 0, 99, 1, '', 1, 1),
(26, 'Caminho de Navegação', '', 1, 'pathway', 0, '0000-00-00 00:00:00', 1, 'mod_pathway', 0, 99, 1, '', 1, 1),
(27, 'Barra', '', 1, 'toolbar', 0, '0000-00-00 00:00:00', 1, 'mod_toolbar', 0, 99, 1, '', 1, 1),
(28, 'Mensagem de Sistema', '', 1, 'inset', 0, '0000-00-00 00:00:00', 1, 'mod_mosmsg', 0, 99, 1, '', 1, 1),
(29, 'Ícones Rápidos', '', 1, 'icon', 0, '0000-00-00 00:00:00', 1, 'mod_quickicon', 0, 99, 1, '', 1, 1),
(30, 'Outro Menu', '', 8, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 0, 'menutype=othermenu\nmenu_style=vert_indent\ncache=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nclass_sfx=\nmoduleclass_sfx=\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=', 0, 0),
(31, 'Wrapper', '', 16, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_wrapper', 0, 0, 1, '', 0, 0),
(32, 'Logado', '', 0, 'cpanel', 0, '0000-00-00 00:00:00', 1, 'mod_logged', 0, 99, 1, '', 0, 1),
(33, 'MenuHorizontal', '', 1, 'top', 0, '0000-00-00 00:00:00', 1, 'mod_swmenufree', 0, 0, 0, 'menutype=mainmenu\nmenustyle=transmenu\nmoduleID=33\nlevels=0\nparentid=0\nparent_level=0\nhybrid=0\nactive_menu=1\ntables=0\ncssload=0\nsub_indicator=1\nselectbox_hack=0\npadding_hack=0\nauto_position=0\nshow_shadow=0\ncache=0\ncache_time=1 hour\nmoduleclass_sfx=-menuhorizontal\neditor_hack=0\ntemplate=All\nlanguage=\ncomponent=All\n', 0, 0),
(34, 'Rodape', 'Todos os direitos reservados para Maquel | Email: maquel@maquel.com.br | Joinville (47) 3027-5552 | Desenvolvido por <a href="http://www.devhouse.com.br" target="_blank">DevHouse</a>\r\n', 1, 'footer', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 0, 'moduleclass_sfx=-rodape\ncache=0\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0),
(35, 'INFORMATIVO', '', 3, 'right', 0, '0000-00-00 00:00:00', 1, 'mod_acajoom', 0, 0, 1, 'listids=0\nred_url=\nlinear=0\nintrotext=Receba notícias da Maquel no seu email\nshowlistname=0\ndefaultchecked=1\nshownamefield=1\nfieldsize=\nposttext=\nreceivehtmldefault=1\nshowreceivehtml=0\nbutton_text=\nbutton_img=\nbutton_text_change=\nbutton_img_change=\nmoduleclass_sfx=\nmod_align=\ncache=0', 0, 0),
(36, 'CURSOS', '<img src="images/stories/cursos.jpg" alt="cursos.jpg" title="cursos.jpg" border="0" />\r\n', 1, 'right', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 1, 'moduleclass_sfx=\ncache=0\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0),
(44, 'Latest docs', '', 2, 'dmcpanel', 0, '0000-00-00 00:00:00', 1, 'mod_docman_latest', 0, 2, 1, '', 2, 1),
(37, 'OPINIÕES', '<div style="padding: 5px">\r\nEnvie sua opini&atilde;o. Ela &eacute; muito importante para n&oacute;s. Voc&ecirc; pode enviar sugest&otilde;es e coment&aacute;rios.\r\n</div>\r\n<div style="padding: 5px">\r\nMande-nos um email para opiniao@maquel.com.br\r\n</div>\r\n', 4, 'right', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 1, 'moduleclass_sfx=\ncache=0\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0),
(38, 'Simple Select Box', '', 6, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_simple_select_box', 0, 0, 1, 'width=\nheight=\npretext=text\nprepos=1\nalign=center\ndirection=ltr\nitem0=\nitem1=ijkjkj\nlink1=www.google.com\nitem2=ewewew\nlink2=www.google.com\nitem3=\nlink3=\nitem4=\nlink4=\nitem5=\nlink5=\nitem6=\nlink6=\nitem7=\nlink7=\nitem8=\nlink8=\nitem9=\nlink9=\nitem10=\nlink10=\nitem11=\nlink11=\nitem12=\nlink12=\nitem13=\nlink13=\nitem14=\nlink14=\nitem15=\nlink15=\nitem16=\nlink16=\nitem17=\nlink17=\nitem18=\nlink18=\nitem19=\nlink19=\nitem20=\nlink20=\nitem21=\nlink21=\nitem22=\nlink22=\nitem23=\nlink23=\nitem24=\nlink24=\nitem25=\nlink25=\nitem26=\nlink26=\nitem27=\nlink27=\nitem28=\nlink28=\nitem29=\nlink29=\nitem30=\nlink30=', 0, 0),
(39, 'Menu_AMaquel', '', 5, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_mainmenu', 0, 0, 0, 'class_sfx=\nmoduleclass_sfx=\nmenutype=amaquel\nmenu_style=vert_indent\nfull_active_id=0\ncache=0\nmenu_images=0\nmenu_images_align=0\nexpand_menu=0\nactivate_parent=0\nindent_image=0\nindent_image1=\nindent_image2=\nindent_image3=\nindent_image4=\nindent_image5=\nindent_image6=\nspacer=\nend_spacer=', 0, 0),
(40, 'Espaçador Menu', '<p>\r\n&nbsp;\r\n</p>\r\n', 4, 'left', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 0, 'moduleclass_sfx=\ncache=0\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0),
(41, 'Navegação Cursos', '', 3, 'left', 0, '0000-00-00 00:00:00', 1, 'mod_contentdropdownnav', 0, 0, 0, 'sectionID=2\ntextoAntesCategoria=Escolha a Região\ntextoAntesConteudo=Escolha a Cidade', 0, 0),
(42, 'Beleza Inteligente', '<img src="images/stories/beleza_inteligente.jpg" alt="beleza_inteligente.jpg" title="beleza_inteligente.jpg" style="margin: 5px; float: left; width: 159px; height: 719px" width="159" height="719" />\r\n', 4, 'inset', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 0, 'moduleclass_sfx=\ncache=0\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0),
(43, 'Menu_Estética', '', 2, 'left', 0, '0000-00-00 00:00:00', 0, 'mod_mainmenu', 0, 0, 1, 'menutype=estetica', 0, 0),
(45, 'Top docs', '', 3, 'dmcpanel', 0, '0000-00-00 00:00:00', 1, 'mod_docman_top', 0, 2, 1, '', 2, 1),
(46, 'Latest logs', '', 4, 'dmcpanel', 0, '0000-00-00 00:00:00', 1, 'mod_docman_logs', 0, 2, 1, '', 2, 1),
(47, 'News', '', 0, 'dmcpanel', 0, '0000-00-00 00:00:00', 1, 'mod_docman_news', 0, 2, 1, '', 2, 1),
(48, 'Unapproved', '', 1, 'dmcpanel', 0, '0000-00-00 00:00:00', 1, 'mod_docman_approval', 0, 2, 1, '', 2, 1),
(49, 'Espaço Estética', '<img src="http://localhost/maquel/images/stories/estetica.png" style="float: left; margin-bottom: 4px" width="190" title="estetica.png" alt="estetica.png" />\r\n<br />\r\n&Aacute;rea reservada para voc&ecirc; profissional, confira nossos protocolos e dicas.\r\n<br />\r\n<br />\r\n<span style="font-weight: bold; color: #7c467a">Protocolos</span>\r\n<br /><br />\r\n<img src="http://localhost/maquel/images/stories/protocolo.jpg" style="float: left; margin-right: 4px; width: 70px" width="70" title="protocolo.jpg" alt="protocolo.jpg" />\r\nConhe&ccedil;a os nossos procedimentos est&eacute;ticos pr&aacute;ticos para o seu dia-a-dia!&nbsp;\r\n', 2, 'user1', 0, '0000-00-00 00:00:00', 1, '', 0, 0, 1, 'moduleclass_sfx=\ncache=0\nfirebots=1\nrssurl=\nrsstitle=1\nrssdesc=1\nrssimage=1\nrssitems=3\nrssitemdesc=1\nword_count=0\nrsscache=3600', 0, 0),
(50, 'Featured Products', '', 1, 'user2', 0, '0000-00-00 00:00:00', 1, 'mod_virtuemart_featureprod', 0, 0, 0, 'max_items=2\nshow_price=0\nshow_addtocart=0\ndisplay_style=vertical\nproducts_per_row=1\ncategory_id=\ncache=0\nmoduleclass_sfx=-produtos\nclass_sfx=', 0, 0),
(51, 'Latest products', '', 2, 'user2', 0, '0000-00-00 00:00:00', 0, 'mod_virtuemart_latestprod', 0, 0, 1, 'max_items=2\nshow_price=1\nshow_addtocart=1\ndisplay_style=vertical\nproducts_per_row=1\ncategory_id=\ncache=0\nmoduleclass_sfx=\nclass_sfx=', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_modules_menu`
--

CREATE TABLE IF NOT EXISTS `jos_modules_menu` (
  `moduleid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`moduleid`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_modules_menu`
--

INSERT INTO `jos_modules_menu` (`moduleid`, `menuid`) VALUES
(1, 1),
(2, 0),
(3, 0),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(6, 4),
(6, 27),
(6, 36),
(8, 1),
(9, 1),
(9, 2),
(9, 4),
(9, 27),
(9, 36),
(10, 1),
(12, 0),
(13, 1),
(15, 0),
(17, 0),
(18, 0),
(30, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 18),
(39, 19),
(39, 20),
(39, 21),
(39, 22),
(39, 25),
(39, 26),
(39, 27),
(39, 28),
(40, 18),
(40, 19),
(40, 20),
(40, 21),
(40, 22),
(40, 25),
(40, 26),
(40, 27),
(40, 28),
(41, 24),
(42, 29),
(43, 0),
(49, 1),
(50, 1),
(51, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_newsfeeds`
--

CREATE TABLE IF NOT EXISTS `jos_newsfeeds` (
  `catid` int(11) NOT NULL default '0',
  `id` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `filename` varchar(200) default NULL,
  `published` tinyint(1) NOT NULL default '0',
  `numarticles` int(11) unsigned NOT NULL default '1',
  `cache_time` int(11) unsigned NOT NULL default '3600',
  `checked_out` tinyint(3) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `published` (`published`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_newsfeeds`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_polls`
--

CREATE TABLE IF NOT EXISTS `jos_polls` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `voters` int(9) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL default '0',
  `access` int(11) NOT NULL default '0',
  `lag` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_polls`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_poll_data`
--

CREATE TABLE IF NOT EXISTS `jos_poll_data` (
  `id` int(11) NOT NULL auto_increment,
  `pollid` int(4) NOT NULL default '0',
  `text` text NOT NULL,
  `hits` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pollid` (`pollid`,`text`(1))
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_poll_data`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_poll_date`
--

CREATE TABLE IF NOT EXISTS `jos_poll_date` (
  `id` bigint(20) NOT NULL auto_increment,
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `vote_id` int(11) NOT NULL default '0',
  `poll_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `poll_id` (`poll_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_poll_date`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_poll_menu`
--

CREATE TABLE IF NOT EXISTS `jos_poll_menu` (
  `pollid` int(11) NOT NULL default '0',
  `menuid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`pollid`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_poll_menu`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_sections`
--

CREATE TABLE IF NOT EXISTS `jos_sections` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `image` varchar(100) NOT NULL default '',
  `scope` varchar(50) NOT NULL default '',
  `image_position` varchar(10) NOT NULL default '',
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) unsigned NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `access` tinyint(3) unsigned NOT NULL default '0',
  `count` int(11) NOT NULL default '0',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `idx_scope` (`scope`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `jos_sections`
--

INSERT INTO `jos_sections` (`id`, `title`, `name`, `image`, `scope`, `image_position`, `description`, `published`, `checked_out`, `checked_out_time`, `ordering`, `access`, `count`, `params`) VALUES
(1, 'Home', 'Home', '', 'content', 'left', 'fdsafdsafdsa\r\n', 1, 0, '0000-00-00 00:00:00', 3, 0, 2, 'imagefolders=*1*'),
(2, 'Cursos', 'Os Cursos da Maquel', '', 'content', 'left', 'Atualize-se no mercado, fa&ccedil;a um dos cursos e descubra truques dicas e aprendizados que elevam o seu conhecimento e a melhoria da pr&aacute;tica.\r\n', 1, 0, '0000-00-00 00:00:00', 2, 0, 5, 'imagefolders=*1*'),
(3, 'Notícias', 'Notícias', '', 'content', 'left', '', 1, 0, '0000-00-00 00:00:00', 1, 0, 1, 'imagefolders=*1*');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_session`
--

CREATE TABLE IF NOT EXISTS `jos_session` (
  `username` varchar(50) default '',
  `time` varchar(14) default '',
  `session_id` varchar(200) NOT NULL default '0',
  `guest` tinyint(4) default '1',
  `userid` int(11) default '0',
  `usertype` varchar(50) default '',
  `gid` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`session_id`),
  KEY `whosonline` (`guest`,`usertype`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_session`
--

INSERT INTO `jos_session` (`username`, `time`, `session_id`, `guest`, `userid`, `usertype`, `gid`) VALUES
('admin', '1473620259', '87dba30a41dd6283d6f9ea127c5ee3df', 1, 62, 'Super Administrator', 0),
('', '1473620275', '4b758e2dc34f6aeb99a9909289f1b328', 1, 0, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_stats_agents`
--

CREATE TABLE IF NOT EXISTS `jos_stats_agents` (
  `agent` varchar(255) NOT NULL default '',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_stats_agents`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_swmenufree_config`
--

CREATE TABLE IF NOT EXISTS `jos_swmenufree_config` (
  `id` int(11) NOT NULL default '0',
  `main_top` smallint(8) default '0',
  `main_left` smallint(8) default '0',
  `main_height` smallint(8) default '20',
  `sub_border_over` varchar(30) default '0',
  `main_width` smallint(8) default '100',
  `sub_width` smallint(8) default '100',
  `main_back` varchar(7) default '#4682B4',
  `main_over` varchar(7) default '#5AA7E5',
  `sub_back` varchar(7) default '#4682B4',
  `sub_over` varchar(7) default '#5AA7E5',
  `sub_border` varchar(30) default '#FFFFFF',
  `main_font_size` smallint(8) default '0',
  `sub_font_size` smallint(8) default '0',
  `main_border_over` varchar(30) default '0',
  `sub_font_color` varchar(7) default '#000000',
  `main_border` varchar(30) default '#FFFFFF',
  `main_font_color` varchar(7) default '#000000',
  `sub_font_color_over` varchar(7) default '#FFFFFF',
  `main_font_color_over` varchar(7) default '#FFFFFF',
  `main_align` varchar(8) default 'left',
  `sub_align` varchar(8) default 'left',
  `sub_height` smallint(7) default '20',
  `position` varchar(10) default 'absolute',
  `orientation` varchar(20) default NULL,
  `font_family` varchar(50) default 'Arial',
  `font_weight` varchar(10) default 'normal',
  `font_weight_over` varchar(10) default 'normal',
  `level2_sub_top` int(11) default '0',
  `level2_sub_left` int(11) default '0',
  `level1_sub_top` int(11) NOT NULL default '0',
  `level1_sub_left` int(11) NOT NULL default '0',
  `main_back_image` varchar(100) default NULL,
  `main_back_image_over` varchar(100) default NULL,
  `sub_back_image` varchar(100) default NULL,
  `sub_back_image_over` varchar(100) default NULL,
  `specialA` varchar(50) default '80',
  `main_padding` varchar(40) default '0px 0px 0px 0px',
  `sub_padding` varchar(40) default '0px 0px 0px 0px',
  `specialB` varchar(100) default '50',
  `sub_font_family` varchar(50) default 'Arial',
  `extra` mediumtext,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_swmenufree_config`
--

INSERT INTO `jos_swmenufree_config` (`id`, `main_top`, `main_left`, `main_height`, `sub_border_over`, `main_width`, `sub_width`, `main_back`, `main_over`, `sub_back`, `sub_over`, `sub_border`, `main_font_size`, `sub_font_size`, `main_border_over`, `sub_font_color`, `main_border`, `main_font_color`, `sub_font_color_over`, `main_font_color_over`, `main_align`, `sub_align`, `sub_height`, `position`, `orientation`, `font_family`, `font_weight`, `font_weight_over`, `level2_sub_top`, `level2_sub_left`, `level1_sub_top`, `level1_sub_left`, `main_back_image`, `main_back_image_over`, `sub_back_image`, `sub_back_image_over`, `specialA`, `main_padding`, `sub_padding`, `specialB`, `sub_font_family`, `extra`) VALUES
(1, 0, 0, 0, '0px none #11B8F4', 0, 0, '#050855', '#373977', '#050855', '#373977', '0px none #FFFFFF', 11, 11, '0px none #FFC819', '#FFFFFF', '0px none #FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', 'center', 'left', 0, 'center', 'horizontal/down', 'Verdana, Arial, Helvetica, sans-serif', 'normal', 'normal', 0, 0, 0, 0, '', '', '', '', '85', '11px 5px 11px 5px ', '8px 18px 8px 18px ', '300', 'Verdana, Arial, Helvetica, sans-serif', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_templates_menu`
--

CREATE TABLE IF NOT EXISTS `jos_templates_menu` (
  `template` varchar(50) NOT NULL default '',
  `menuid` int(11) NOT NULL default '0',
  `client_id` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`template`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_templates_menu`
--

INSERT INTO `jos_templates_menu` (`template`, `menuid`, `client_id`) VALUES
('maquel', 0, 0),
('joomla_admin', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_template_positions`
--

CREATE TABLE IF NOT EXISTS `jos_template_positions` (
  `id` int(11) NOT NULL auto_increment,
  `position` varchar(10) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `jos_template_positions`
--

INSERT INTO `jos_template_positions` (`id`, `position`, `description`) VALUES
(1, 'left', ''),
(2, 'right', ''),
(3, 'top', ''),
(4, 'bottom', ''),
(5, 'inset', ''),
(6, 'banner', ''),
(7, 'header', ''),
(8, 'footer', ''),
(9, 'newsflash', ''),
(10, 'legals', ''),
(11, 'pathway', ''),
(12, 'toolbar', ''),
(13, 'cpanel', ''),
(14, 'user1', ''),
(15, 'user2', ''),
(16, 'user3', ''),
(17, 'user4', ''),
(18, 'user5', ''),
(19, 'user6', ''),
(20, 'user7', ''),
(21, 'user8', ''),
(22, 'user9', ''),
(23, 'advert1', ''),
(24, 'advert2', ''),
(25, 'advert3', ''),
(26, 'icon', ''),
(27, 'debug', ''),
(28, 'dmcpanel', 'DOCman');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_users`
--

CREATE TABLE IF NOT EXISTS `jos_users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `username` varchar(25) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `password` varchar(100) NOT NULL default '',
  `usertype` varchar(25) NOT NULL default '',
  `block` tinyint(4) NOT NULL default '0',
  `sendEmail` tinyint(4) default '0',
  `gid` tinyint(3) unsigned NOT NULL default '1',
  `registerDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL default '',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `usertype` (`usertype`),
  KEY `idx_name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Extraindo dados da tabela `jos_users`
--

INSERT INTO `jos_users` (`id`, `name`, `username`, `email`, `password`, `usertype`, `block`, `sendEmail`, `gid`, `registerDate`, `lastvisitDate`, `activation`, `params`) VALUES
(62, 'Administrator', 'admin', 'marketing@maquel.com.br', '9b97b71f93d353d2789ff161aa670c65:radPD3TDv6IaTUQO', 'Super Administrator', 0, 1, 25, '2008-10-22 17:16:06', '0000-00-00 00:00:00', '', 'editor=\nexpired=\nexpired_time=');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_usertypes`
--

CREATE TABLE IF NOT EXISTS `jos_usertypes` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `mask` varchar(11) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_usertypes`
--

INSERT INTO `jos_usertypes` (`id`, `name`, `mask`) VALUES
(0, 'superadministrator', ''),
(1, 'administrator', ''),
(2, 'editor', ''),
(3, 'user', ''),
(4, 'author', ''),
(5, 'publisher', ''),
(6, 'manager', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_affiliate`
--

CREATE TABLE IF NOT EXISTS `jos_vm_affiliate` (
  `affiliate_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `active` char(1) NOT NULL default 'N',
  `rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`affiliate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Used to store affiliate user entries' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_affiliate`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_affiliate_sale`
--

CREATE TABLE IF NOT EXISTS `jos_vm_affiliate_sale` (
  `order_id` int(11) NOT NULL default '0',
  `visit_id` varchar(32) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `rate` int(2) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores orders that affiliates have placed';

--
-- Extraindo dados da tabela `jos_vm_affiliate_sale`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_auth_user_vendor`
--

CREATE TABLE IF NOT EXISTS `jos_vm_auth_user_vendor` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  KEY `idx_auth_user_vendor_user_id` (`user_id`),
  KEY `idx_auth_user_vendor_vendor_id` (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Maps a user to a vendor';

--
-- Extraindo dados da tabela `jos_vm_auth_user_vendor`
--

INSERT INTO `jos_vm_auth_user_vendor` (`user_id`, `vendor_id`) VALUES
(62, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_category`
--

CREATE TABLE IF NOT EXISTS `jos_vm_category` (
  `category_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `category_name` varchar(128) NOT NULL default '',
  `category_description` text,
  `category_thumb_image` varchar(255) default NULL,
  `category_full_image` varchar(255) default NULL,
  `category_publish` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `category_browsepage` varchar(255) NOT NULL default 'browse_1',
  `products_per_row` tinyint(2) NOT NULL default '1',
  `category_flypage` varchar(255) default NULL,
  `list_order` int(11) default NULL,
  PRIMARY KEY  (`category_id`),
  KEY `idx_category_vendor_id` (`vendor_id`),
  KEY `idx_category_name` (`category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Product Categories are stored here' AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_vm_category`
--

INSERT INTO `jos_vm_category` (`category_id`, `vendor_id`, `category_name`, `category_description`, `category_thumb_image`, `category_full_image`, `category_publish`, `cdate`, `mdate`, `category_browsepage`, `products_per_row`, `category_flypage`, `list_order`) VALUES
(1, 1, 'Produtos Maquel', '', '', '', 'Y', 1227042360, 1227042360, 'browse_1', 1, 'shop.flypage', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_category_xref`
--

CREATE TABLE IF NOT EXISTS `jos_vm_category_xref` (
  `category_parent_id` int(11) NOT NULL default '0',
  `category_child_id` int(11) NOT NULL default '0',
  `category_list` int(11) default NULL,
  KEY `category_xref_category_parent_id` (`category_parent_id`),
  KEY `category_xref_category_child_id` (`category_child_id`),
  KEY `idx_category_xref_category_list` (`category_list`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Category child-parent relation list';

--
-- Extraindo dados da tabela `jos_vm_category_xref`
--

INSERT INTO `jos_vm_category_xref` (`category_parent_id`, `category_child_id`, `category_list`) VALUES
(0, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_country`
--

CREATE TABLE IF NOT EXISTS `jos_vm_country` (
  `country_id` int(11) NOT NULL auto_increment,
  `zone_id` int(11) NOT NULL default '1',
  `country_name` varchar(64) default NULL,
  `country_3_code` char(3) default NULL,
  `country_2_code` char(2) default NULL,
  PRIMARY KEY  (`country_id`),
  KEY `idx_country_name` (`country_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Country records' AUTO_INCREMENT=240 ;

--
-- Extraindo dados da tabela `jos_vm_country`
--

INSERT INTO `jos_vm_country` (`country_id`, `zone_id`, `country_name`, `country_3_code`, `country_2_code`) VALUES
(1, 1, 'Afghanistan', 'AFG', 'AF'),
(2, 1, 'Albania', 'ALB', 'AL'),
(3, 1, 'Algeria', 'DZA', 'DZ'),
(4, 1, 'American Samoa', 'ASM', 'AS'),
(5, 1, 'Andorra', 'AND', 'AD'),
(6, 1, 'Angola', 'AGO', 'AO'),
(7, 1, 'Anguilla', 'AIA', 'AI'),
(8, 1, 'Antarctica', 'ATA', 'AQ'),
(9, 1, 'Antigua and Barbuda', 'ATG', 'AG'),
(10, 1, 'Argentina', 'ARG', 'AR'),
(11, 1, 'Armenia', 'ARM', 'AM'),
(12, 1, 'Aruba', 'ABW', 'AW'),
(13, 1, 'Australia', 'AUS', 'AU'),
(14, 1, 'Austria', 'AUT', 'AT'),
(15, 1, 'Azerbaijan', 'AZE', 'AZ'),
(16, 1, 'Bahamas', 'BHS', 'BS'),
(17, 1, 'Bahrain', 'BHR', 'BH'),
(18, 1, 'Bangladesh', 'BGD', 'BD'),
(19, 1, 'Barbados', 'BRB', 'BB'),
(20, 1, 'Belarus', 'BLR', 'BY'),
(21, 1, 'Belgium', 'BEL', 'BE'),
(22, 1, 'Belize', 'BLZ', 'BZ'),
(23, 1, 'Benin', 'BEN', 'BJ'),
(24, 1, 'Bermuda', 'BMU', 'BM'),
(25, 1, 'Bhutan', 'BTN', 'BT'),
(26, 1, 'Bolivia', 'BOL', 'BO'),
(27, 1, 'Bosnia and Herzegowina', 'BIH', 'BA'),
(28, 1, 'Botswana', 'BWA', 'BW'),
(29, 1, 'Bouvet Island', 'BVT', 'BV'),
(30, 1, 'Brazil', 'BRA', 'BR'),
(31, 1, 'British Indian Ocean Territory', 'IOT', 'IO'),
(32, 1, 'Brunei Darussalam', 'BRN', 'BN'),
(33, 1, 'Bulgaria', 'BGR', 'BG'),
(34, 1, 'Burkina Faso', 'BFA', 'BF'),
(35, 1, 'Burundi', 'BDI', 'BI'),
(36, 1, 'Cambodia', 'KHM', 'KH'),
(37, 1, 'Cameroon', 'CMR', 'CM'),
(38, 1, 'Canada', 'CAN', 'CA'),
(39, 1, 'Cape Verde', 'CPV', 'CV'),
(40, 1, 'Cayman Islands', 'CYM', 'KY'),
(41, 1, 'Central African Republic', 'CAF', 'CF'),
(42, 1, 'Chad', 'TCD', 'TD'),
(43, 1, 'Chile', 'CHL', 'CL'),
(44, 1, 'China', 'CHN', 'CN'),
(45, 1, 'Christmas Island', 'CXR', 'CX'),
(46, 1, 'Cocos (Keeling) Islands', 'CCK', 'CC'),
(47, 1, 'Colombia', 'COL', 'CO'),
(48, 1, 'Comoros', 'COM', 'KM'),
(49, 1, 'Congo', 'COG', 'CG'),
(50, 1, 'Cook Islands', 'COK', 'CK'),
(51, 1, 'Costa Rica', 'CRI', 'CR'),
(52, 1, 'Cote D''Ivoire', 'CIV', 'CI'),
(53, 1, 'Croatia', 'HRV', 'HR'),
(54, 1, 'Cuba', 'CUB', 'CU'),
(55, 1, 'Cyprus', 'CYP', 'CY'),
(56, 1, 'Czech Republic', 'CZE', 'CZ'),
(57, 1, 'Denmark', 'DNK', 'DK'),
(58, 1, 'Djibouti', 'DJI', 'DJ'),
(59, 1, 'Dominica', 'DMA', 'DM'),
(60, 1, 'Dominican Republic', 'DOM', 'DO'),
(61, 1, 'East Timor', 'TMP', 'TP'),
(62, 1, 'Ecuador', 'ECU', 'EC'),
(63, 1, 'Egypt', 'EGY', 'EG'),
(64, 1, 'El Salvador', 'SLV', 'SV'),
(65, 1, 'Equatorial Guinea', 'GNQ', 'GQ'),
(66, 1, 'Eritrea', 'ERI', 'ER'),
(67, 1, 'Estonia', 'EST', 'EE'),
(68, 1, 'Ethiopia', 'ETH', 'ET'),
(69, 1, 'Falkland Islands (Malvinas)', 'FLK', 'FK'),
(70, 1, 'Faroe Islands', 'FRO', 'FO'),
(71, 1, 'Fiji', 'FJI', 'FJ'),
(72, 1, 'Finland', 'FIN', 'FI'),
(73, 1, 'France', 'FRA', 'FR'),
(74, 1, 'France, Metropolitan', 'FXX', 'FX'),
(75, 1, 'French Guiana', 'GUF', 'GF'),
(76, 1, 'French Polynesia', 'PYF', 'PF'),
(77, 1, 'French Southern Territories', 'ATF', 'TF'),
(78, 1, 'Gabon', 'GAB', 'GA'),
(79, 1, 'Gambia', 'GMB', 'GM'),
(80, 1, 'Georgia', 'GEO', 'GE'),
(81, 1, 'Germany', 'DEU', 'DE'),
(82, 1, 'Ghana', 'GHA', 'GH'),
(83, 1, 'Gibraltar', 'GIB', 'GI'),
(84, 1, 'Greece', 'GRC', 'GR'),
(85, 1, 'Greenland', 'GRL', 'GL'),
(86, 1, 'Grenada', 'GRD', 'GD'),
(87, 1, 'Guadeloupe', 'GLP', 'GP'),
(88, 1, 'Guam', 'GUM', 'GU'),
(89, 1, 'Guatemala', 'GTM', 'GT'),
(90, 1, 'Guinea', 'GIN', 'GN'),
(91, 1, 'Guinea-bissau', 'GNB', 'GW'),
(92, 1, 'Guyana', 'GUY', 'GY'),
(93, 1, 'Haiti', 'HTI', 'HT'),
(94, 1, 'Heard and Mc Donald Islands', 'HMD', 'HM'),
(95, 1, 'Honduras', 'HND', 'HN'),
(96, 1, 'Hong Kong', 'HKG', 'HK'),
(97, 1, 'Hungary', 'HUN', 'HU'),
(98, 1, 'Iceland', 'ISL', 'IS'),
(99, 1, 'India', 'IND', 'IN'),
(100, 1, 'Indonesia', 'IDN', 'ID'),
(101, 1, 'Iran (Islamic Republic of)', 'IRN', 'IR'),
(102, 1, 'Iraq', 'IRQ', 'IQ'),
(103, 1, 'Ireland', 'IRL', 'IE'),
(104, 1, 'Israel', 'ISR', 'IL'),
(105, 1, 'Italy', 'ITA', 'IT'),
(106, 1, 'Jamaica', 'JAM', 'JM'),
(107, 1, 'Japan', 'JPN', 'JP'),
(108, 1, 'Jordan', 'JOR', 'JO'),
(109, 1, 'Kazakhstan', 'KAZ', 'KZ'),
(110, 1, 'Kenya', 'KEN', 'KE'),
(111, 1, 'Kiribati', 'KIR', 'KI'),
(112, 1, 'Korea, Democratic People''s Republic of', 'PRK', 'KP'),
(113, 1, 'Korea, Republic of', 'KOR', 'KR'),
(114, 1, 'Kuwait', 'KWT', 'KW'),
(115, 1, 'Kyrgyzstan', 'KGZ', 'KG'),
(116, 1, 'Lao People''s Democratic Republic', 'LAO', 'LA'),
(117, 1, 'Latvia', 'LVA', 'LV'),
(118, 1, 'Lebanon', 'LBN', 'LB'),
(119, 1, 'Lesotho', 'LSO', 'LS'),
(120, 1, 'Liberia', 'LBR', 'LR'),
(121, 1, 'Libyan Arab Jamahiriya', 'LBY', 'LY'),
(122, 1, 'Liechtenstein', 'LIE', 'LI'),
(123, 1, 'Lithuania', 'LTU', 'LT'),
(124, 1, 'Luxembourg', 'LUX', 'LU'),
(125, 1, 'Macau', 'MAC', 'MO'),
(126, 1, 'Macedonia, The Former Yugoslav Republic of', 'MKD', 'MK'),
(127, 1, 'Madagascar', 'MDG', 'MG'),
(128, 1, 'Malawi', 'MWI', 'MW'),
(129, 1, 'Malaysia', 'MYS', 'MY'),
(130, 1, 'Maldives', 'MDV', 'MV'),
(131, 1, 'Mali', 'MLI', 'ML'),
(132, 1, 'Malta', 'MLT', 'MT'),
(133, 1, 'Marshall Islands', 'MHL', 'MH'),
(134, 1, 'Martinique', 'MTQ', 'MQ'),
(135, 1, 'Mauritania', 'MRT', 'MR'),
(136, 1, 'Mauritius', 'MUS', 'MU'),
(137, 1, 'Mayotte', 'MYT', 'YT'),
(138, 1, 'Mexico', 'MEX', 'MX'),
(139, 1, 'Micronesia, Federated States of', 'FSM', 'FM'),
(140, 1, 'Moldova, Republic of', 'MDA', 'MD'),
(141, 1, 'Monaco', 'MCO', 'MC'),
(142, 1, 'Mongolia', 'MNG', 'MN'),
(143, 1, 'Montserrat', 'MSR', 'MS'),
(144, 1, 'Morocco', 'MAR', 'MA'),
(145, 1, 'Mozambique', 'MOZ', 'MZ'),
(146, 1, 'Myanmar', 'MMR', 'MM'),
(147, 1, 'Namibia', 'NAM', 'NA'),
(148, 1, 'Nauru', 'NRU', 'NR'),
(149, 1, 'Nepal', 'NPL', 'NP'),
(150, 1, 'Netherlands', 'NLD', 'NL'),
(151, 1, 'Netherlands Antilles', 'ANT', 'AN'),
(152, 1, 'New Caledonia', 'NCL', 'NC'),
(153, 1, 'New Zealand', 'NZL', 'NZ'),
(154, 1, 'Nicaragua', 'NIC', 'NI'),
(155, 1, 'Niger', 'NER', 'NE'),
(156, 1, 'Nigeria', 'NGA', 'NG'),
(157, 1, 'Niue', 'NIU', 'NU'),
(158, 1, 'Norfolk Island', 'NFK', 'NF'),
(159, 1, 'Northern Mariana Islands', 'MNP', 'MP'),
(160, 1, 'Norway', 'NOR', 'NO'),
(161, 1, 'Oman', 'OMN', 'OM'),
(162, 1, 'Pakistan', 'PAK', 'PK'),
(163, 1, 'Palau', 'PLW', 'PW'),
(164, 1, 'Panama', 'PAN', 'PA'),
(165, 1, 'Papua New Guinea', 'PNG', 'PG'),
(166, 1, 'Paraguay', 'PRY', 'PY'),
(167, 1, 'Peru', 'PER', 'PE'),
(168, 1, 'Philippines', 'PHL', 'PH'),
(169, 1, 'Pitcairn', 'PCN', 'PN'),
(170, 1, 'Poland', 'POL', 'PL'),
(171, 1, 'Portugal', 'PRT', 'PT'),
(172, 1, 'Puerto Rico', 'PRI', 'PR'),
(173, 1, 'Qatar', 'QAT', 'QA'),
(174, 1, 'Reunion', 'REU', 'RE'),
(175, 1, 'Romania', 'ROM', 'RO'),
(176, 1, 'Russian Federation', 'RUS', 'RU'),
(177, 1, 'Rwanda', 'RWA', 'RW'),
(178, 1, 'Saint Kitts and Nevis', 'KNA', 'KN'),
(179, 1, 'Saint Lucia', 'LCA', 'LC'),
(180, 1, 'Saint Vincent and the Grenadines', 'VCT', 'VC'),
(181, 1, 'Samoa', 'WSM', 'WS'),
(182, 1, 'San Marino', 'SMR', 'SM'),
(183, 1, 'Sao Tome and Principe', 'STP', 'ST'),
(184, 1, 'Saudi Arabia', 'SAU', 'SA'),
(185, 1, 'Senegal', 'SEN', 'SN'),
(186, 1, 'Seychelles', 'SYC', 'SC'),
(187, 1, 'Sierra Leone', 'SLE', 'SL'),
(188, 1, 'Singapore', 'SGP', 'SG'),
(189, 1, 'Slovakia (Slovak Republic)', 'SVK', 'SK'),
(190, 1, 'Slovenia', 'SVN', 'SI'),
(191, 1, 'Solomon Islands', 'SLB', 'SB'),
(192, 1, 'Somalia', 'SOM', 'SO'),
(193, 1, 'South Africa', 'ZAF', 'ZA'),
(194, 1, 'South Georgia and the South Sandwich Islands', 'SGS', 'GS'),
(195, 1, 'Spain', 'ESP', 'ES'),
(196, 1, 'Sri Lanka', 'LKA', 'LK'),
(197, 1, 'St. Helena', 'SHN', 'SH'),
(198, 1, 'St. Pierre and Miquelon', 'SPM', 'PM'),
(199, 1, 'Sudan', 'SDN', 'SD'),
(200, 1, 'Suriname', 'SUR', 'SR'),
(201, 1, 'Svalbard and Jan Mayen Islands', 'SJM', 'SJ'),
(202, 1, 'Swaziland', 'SWZ', 'SZ'),
(203, 1, 'Sweden', 'SWE', 'SE'),
(204, 1, 'Switzerland', 'CHE', 'CH'),
(205, 1, 'Syrian Arab Republic', 'SYR', 'SY'),
(206, 1, 'Taiwan', 'TWN', 'TW'),
(207, 1, 'Tajikistan', 'TJK', 'TJ'),
(208, 1, 'Tanzania, United Republic of', 'TZA', 'TZ'),
(209, 1, 'Thailand', 'THA', 'TH'),
(210, 1, 'Togo', 'TGO', 'TG'),
(211, 1, 'Tokelau', 'TKL', 'TK'),
(212, 1, 'Tonga', 'TON', 'TO'),
(213, 1, 'Trinidad and Tobago', 'TTO', 'TT'),
(214, 1, 'Tunisia', 'TUN', 'TN'),
(215, 1, 'Turkey', 'TUR', 'TR'),
(216, 1, 'Turkmenistan', 'TKM', 'TM'),
(217, 1, 'Turks and Caicos Islands', 'TCA', 'TC'),
(218, 1, 'Tuvalu', 'TUV', 'TV'),
(219, 1, 'Uganda', 'UGA', 'UG'),
(220, 1, 'Ukraine', 'UKR', 'UA'),
(221, 1, 'United Arab Emirates', 'ARE', 'AE'),
(222, 1, 'United Kingdom', 'GBR', 'GB'),
(223, 1, 'United States', 'USA', 'US'),
(224, 1, 'United States Minor Outlying Islands', 'UMI', 'UM'),
(225, 1, 'Uruguay', 'URY', 'UY'),
(226, 1, 'Uzbekistan', 'UZB', 'UZ'),
(227, 1, 'Vanuatu', 'VUT', 'VU'),
(228, 1, 'Vatican City State (Holy See)', 'VAT', 'VA'),
(229, 1, 'Venezuela', 'VEN', 'VE'),
(230, 1, 'Viet Nam', 'VNM', 'VN'),
(231, 1, 'Virgin Islands (British)', 'VGB', 'VG'),
(232, 1, 'Virgin Islands (U.S.)', 'VIR', 'VI'),
(233, 1, 'Wallis and Futuna Islands', 'WLF', 'WF'),
(234, 1, 'Western Sahara', 'ESH', 'EH'),
(235, 1, 'Yemen', 'YEM', 'YE'),
(236, 1, 'Yugoslavia', 'YUG', 'YU'),
(237, 1, 'Democratic Republic of Congo', 'DRC', 'DC'),
(238, 1, 'Zambia', 'ZMB', 'ZM'),
(239, 1, 'Zimbabwe', 'ZWE', 'ZW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_coupons`
--

CREATE TABLE IF NOT EXISTS `jos_vm_coupons` (
  `coupon_id` int(16) NOT NULL auto_increment,
  `coupon_code` varchar(32) NOT NULL default '',
  `percent_or_total` enum('percent','total') NOT NULL default 'percent',
  `coupon_type` enum('gift','permanent') NOT NULL default 'gift',
  `coupon_value` decimal(12,2) NOT NULL default '0.00',
  PRIMARY KEY  (`coupon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Used to store coupon codes' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_coupons`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_creditcard`
--

CREATE TABLE IF NOT EXISTS `jos_vm_creditcard` (
  `creditcard_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `creditcard_name` varchar(70) NOT NULL default '',
  `creditcard_code` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`creditcard_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Used to store credit card types' AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `jos_vm_creditcard`
--

INSERT INTO `jos_vm_creditcard` (`creditcard_id`, `vendor_id`, `creditcard_name`, `creditcard_code`) VALUES
(1, 1, 'Visa', 'VISA'),
(2, 1, 'MasterCard', 'MC'),
(3, 1, 'American Express', 'amex'),
(4, 1, 'Discover Card', 'discover'),
(5, 1, 'Diners Club', 'diners'),
(6, 1, 'JCB', 'jcb'),
(7, 1, 'Australian Bankcard', 'australian_bc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_csv`
--

CREATE TABLE IF NOT EXISTS `jos_vm_csv` (
  `field_id` int(11) NOT NULL auto_increment,
  `field_name` varchar(128) NOT NULL default '',
  `field_default_value` text,
  `field_ordering` int(3) NOT NULL default '0',
  `field_required` char(1) default 'N',
  PRIMARY KEY  (`field_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Holds all fields which are used on CVS Ex-/Import' AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `jos_vm_csv`
--

INSERT INTO `jos_vm_csv` (`field_id`, `field_name`, `field_default_value`, `field_ordering`, `field_required`) VALUES
(1, 'product_sku', '', 1, 'Y'),
(2, 'product_s_desc', '', 5, 'N'),
(3, 'product_desc', '', 6, 'N'),
(4, 'product_thumb_image', '', 7, 'N'),
(5, 'product_full_image', '', 8, 'N'),
(6, 'product_weight', '', 9, 'N'),
(7, 'product_weight_uom', 'KG', 10, 'N'),
(8, 'product_length', '', 11, 'N'),
(9, 'product_width', '', 12, 'N'),
(10, 'product_height', '', 13, 'N'),
(11, 'product_lwh_uom', '', 14, 'N'),
(12, 'product_in_stock', '0', 15, 'N'),
(13, 'product_available_date', '', 16, 'N'),
(14, 'product_discount_id', '', 17, 'N'),
(15, 'product_name', '', 2, 'Y'),
(16, 'product_price', '', 4, 'N'),
(17, 'category_path', '', 3, 'Y'),
(18, 'manufacturer_id', '', 18, 'N'),
(19, 'product_tax_id', '', 19, 'N'),
(20, 'product_sales', '', 20, 'N'),
(21, 'product_parent_sku', '0', 21, 'N'),
(22, 'attribute', '', 22, 'N'),
(23, 'custom_attribute', '', 23, 'N'),
(24, 'attributes', '', 24, 'N'),
(25, 'attribute_values', '', 25, 'N'),
(26, 'product_discount', '', 26, 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_currency`
--

CREATE TABLE IF NOT EXISTS `jos_vm_currency` (
  `currency_id` int(11) NOT NULL auto_increment,
  `currency_name` varchar(64) default NULL,
  `currency_code` char(3) default NULL,
  PRIMARY KEY  (`currency_id`),
  KEY `idx_currency_name` (`currency_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Used to store currencies' AUTO_INCREMENT=158 ;

--
-- Extraindo dados da tabela `jos_vm_currency`
--

INSERT INTO `jos_vm_currency` (`currency_id`, `currency_name`, `currency_code`) VALUES
(1, 'Andorran Peseta', 'ADP'),
(2, 'United Arab Emirates Dirham', 'AED'),
(3, 'Afghanistan Afghani', 'AFA'),
(4, 'Albanian Lek', 'ALL'),
(5, 'Netherlands Antillian Guilder', 'ANG'),
(6, 'Angolan Kwanza', 'AOK'),
(7, 'Argentinian Austral', 'ARA'),
(9, 'Australian Dollar', 'AUD'),
(10, 'Aruban Florin', 'AWG'),
(11, 'Barbados Dollar', 'BBD'),
(12, 'Bangladeshi Taka', 'BDT'),
(14, 'Bulgarian Lev', 'BGL'),
(15, 'Bahraini Dinar', 'BHD'),
(16, 'Burundi Franc', 'BIF'),
(17, 'Bermudian Dollar', 'BMD'),
(18, 'Brunei Dollar', 'BND'),
(19, 'Bolivian Boliviano', 'BOB'),
(20, 'Brazilian Real', 'BRL'),
(21, 'Bahamian Dollar', 'BSD'),
(22, 'Bhutan Ngultrum', 'BTN'),
(23, 'Burma Kyat', 'BUK'),
(24, 'Botswanian Pula', 'BWP'),
(25, 'Belize Dollar', 'BZD'),
(26, 'Canadian Dollar', 'CAD'),
(27, 'Swiss Franc', 'CHF'),
(28, 'Chilean Unidades de Fomento', 'CLF'),
(29, 'Chilean Peso', 'CLP'),
(30, 'Yuan (Chinese) Renminbi', 'CNY'),
(31, 'Colombian Peso', 'COP'),
(32, 'Costa Rican Colon', 'CRC'),
(33, 'Czech Koruna', 'CZK'),
(34, 'Cuban Peso', 'CUP'),
(35, 'Cape Verde Escudo', 'CVE'),
(36, 'Cyprus Pound', 'CYP'),
(40, 'Danish Krone', 'DKK'),
(41, 'Dominican Peso', 'DOP'),
(42, 'Algerian Dinar', 'DZD'),
(43, 'Ecuador Sucre', 'ECS'),
(44, 'Egyptian Pound', 'EGP'),
(46, 'Ethiopian Birr', 'ETB'),
(47, 'Euro', 'EUR'),
(49, 'Fiji Dollar', 'FJD'),
(50, 'Falkland Islands Pound', 'FKP'),
(52, 'British Pound', 'GBP'),
(53, 'Ghanaian Cedi', 'GHC'),
(54, 'Gibraltar Pound', 'GIP'),
(55, 'Gambian Dalasi', 'GMD'),
(56, 'Guinea Franc', 'GNF'),
(58, 'Guatemalan Quetzal', 'GTQ'),
(59, 'Guinea-Bissau Peso', 'GWP'),
(60, 'Guyanan Dollar', 'GYD'),
(61, 'Hong Kong Dollar', 'HKD'),
(62, 'Honduran Lempira', 'HNL'),
(63, 'Haitian Gourde', 'HTG'),
(64, 'Hungarian Forint', 'HUF'),
(65, 'Indonesian Rupiah', 'IDR'),
(66, 'Irish Punt', 'IEP'),
(67, 'Israeli Shekel', 'ILS'),
(68, 'Indian Rupee', 'INR'),
(69, 'Iraqi Dinar', 'IQD'),
(70, 'Iranian Rial', 'IRR'),
(73, 'Jamaican Dollar', 'JMD'),
(74, 'Jordanian Dinar', 'JOD'),
(75, 'Japanese Yen', 'JPY'),
(76, 'Kenyan Schilling', 'KES'),
(77, 'Kampuchean (Cambodian) Riel', 'KHR'),
(78, 'Comoros Franc', 'KMF'),
(79, 'North Korean Won', 'KPW'),
(80, '(South) Korean Won', 'KRW'),
(81, 'Kuwaiti Dinar', 'KWD'),
(82, 'Cayman Islands Dollar', 'KYD'),
(83, 'Lao Kip', 'LAK'),
(84, 'Lebanese Pound', 'LBP'),
(85, 'Sri Lanka Rupee', 'LKR'),
(86, 'Liberian Dollar', 'LRD'),
(87, 'Lesotho Loti', 'LSL'),
(89, 'Libyan Dinar', 'LYD'),
(90, 'Moroccan Dirham', 'MAD'),
(91, 'Malagasy Franc', 'MGF'),
(92, 'Mongolian Tugrik', 'MNT'),
(93, 'Macau Pataca', 'MOP'),
(94, 'Mauritanian Ouguiya', 'MRO'),
(95, 'Maltese Lira', 'MTL'),
(96, 'Mauritius Rupee', 'MUR'),
(97, 'Maldive Rufiyaa', 'MVR'),
(98, 'Malawi Kwacha', 'MWK'),
(99, 'Mexican Peso', 'MXP'),
(100, 'Malaysian Ringgit', 'MYR'),
(101, 'Mozambique Metical', 'MZM'),
(102, 'Nigerian Naira', 'NGN'),
(103, 'Nicaraguan Cordoba', 'NIC'),
(105, 'Norwegian Kroner', 'NOK'),
(106, 'Nepalese Rupee', 'NPR'),
(107, 'New Zealand Dollar', 'NZD'),
(108, 'Omani Rial', 'OMR'),
(109, 'Panamanian Balboa', 'PAB'),
(110, 'Peruvian Inti', 'PEI'),
(111, 'Papua New Guinea Kina', 'PGK'),
(112, 'Philippine Peso', 'PHP'),
(113, 'Pakistan Rupee', 'PKR'),
(114, 'Polish Zloty', 'PLZ'),
(116, 'Paraguay Guarani', 'PYG'),
(117, 'Qatari Rial', 'QAR'),
(118, 'Romanian Leu', 'RON'),
(119, 'Rwanda Franc', 'RWF'),
(120, 'Saudi Arabian Riyal', 'SAR'),
(121, 'Solomon Islands Dollar', 'SBD'),
(122, 'Seychelles Rupee', 'SCR'),
(123, 'Sudanese Pound', 'SDP'),
(124, 'Swedish Krona', 'SEK'),
(125, 'Singapore Dollar', 'SGD'),
(126, 'St. Helena Pound', 'SHP'),
(127, 'Sierra Leone Leone', 'SLL'),
(128, 'Somali Schilling', 'SOS'),
(129, 'Suriname Guilder', 'SRG'),
(130, 'Sao Tome and Principe Dobra', 'STD'),
(131, 'Russian Ruble', 'RUB'),
(132, 'El Salvador Colon', 'SVC'),
(133, 'Syrian Potmd', 'SYP'),
(134, 'Swaziland Lilangeni', 'SZL'),
(135, 'Thai Bath', 'THB'),
(136, 'Tunisian Dinar', 'TND'),
(137, 'Tongan Pa''anga', 'TOP'),
(138, 'East Timor Escudo', 'TPE'),
(139, 'Turkish Lira', 'TRL'),
(140, 'Trinidad and Tobago Dollar', 'TTD'),
(141, 'Taiwan Dollar', 'TWD'),
(142, 'Tanzanian Schilling', 'TZS'),
(143, 'Uganda Shilling', 'UGS'),
(144, 'US Dollar', 'USD'),
(145, 'Uruguayan Peso', 'UYP'),
(146, 'Venezualan Bolivar', 'VEB'),
(147, 'Vietnamese Dong', 'VND'),
(148, 'Vanuatu Vatu', 'VUV'),
(149, 'Samoan Tala', 'WST'),
(150, 'Democratic Yemeni Dinar', 'YDD'),
(151, 'Yemeni Rial', 'YER'),
(152, 'New Yugoslavia Dinar', 'YUD'),
(153, 'South African Rand', 'ZAR'),
(154, 'Zambian Kwacha', 'ZMK'),
(155, 'Zaire Zaire', 'ZRZ'),
(156, 'Zimbabwe Dollar', 'ZWD'),
(157, 'Slovak Koruna', 'SKK');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_function`
--

CREATE TABLE IF NOT EXISTS `jos_vm_function` (
  `function_id` int(11) NOT NULL auto_increment,
  `module_id` int(11) default NULL,
  `function_name` varchar(32) default NULL,
  `function_class` varchar(32) default NULL,
  `function_method` varchar(32) default NULL,
  `function_description` text,
  `function_perms` varchar(255) default NULL,
  PRIMARY KEY  (`function_id`),
  KEY `idx_function_module_id` (`module_id`),
  KEY `idx_function_name` (`function_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Used to map a function alias to a ''real'' class::function' AUTO_INCREMENT=169 ;

--
-- Extraindo dados da tabela `jos_vm_function`
--

INSERT INTO `jos_vm_function` (`function_id`, `module_id`, `function_name`, `function_class`, `function_method`, `function_description`, `function_perms`) VALUES
(1, 1, 'userAdd', 'ps_user', 'add', '', 'admin,storeadmin'),
(2, 1, 'userDelete', 'ps_user', 'delete', '', 'admin,storeadmin'),
(3, 1, 'userUpdate', 'ps_user', 'update', '', 'admin,storeadmin'),
(4, 1, 'adminPasswdUpdate', 'ps_user', 'update_admin_passwd', 'Updates Site Administrator Password', 'admin'),
(31, 2, 'productAdd', 'ps_product', 'add', '', 'admin,storeadmin'),
(6, 1, 'functionAdd', 'ps_function', 'add', '', 'admin'),
(7, 1, 'functionUpdate', 'ps_function', 'update', '', 'admin'),
(8, 1, 'functionDelete', 'ps_function', 'delete', '', 'admin'),
(9, 1, 'userLogout', 'ps_user', 'logout', '', 'none'),
(10, 1, 'userAddressAdd', 'ps_user_address', 'add', '', 'admin,storeadmin,shopper,demo'),
(11, 1, 'userAddressUpdate', 'ps_user_address', 'update', '', 'admin,storeadmin,shopper'),
(12, 1, 'userAddressDelete', 'ps_user_address', 'delete', '', 'admin,storeadmin,shopper'),
(13, 1, 'moduleAdd', 'ps_module', 'add', '', 'admin'),
(14, 1, 'moduleUpdate', 'ps_module', 'update', '', 'admin'),
(15, 1, 'moduleDelete', 'ps_module', 'delete', '', 'admin'),
(16, 1, 'userLogin', 'ps_user', 'login', '', 'none'),
(17, 3, 'vendorAdd', 'ps_vendor', 'add', '', 'admin'),
(18, 3, 'vendorUpdate', 'ps_vendor', 'update', '', 'admin,storeadmin'),
(19, 3, 'vendorDelete', 'ps_vendor', 'delete', '', 'admin'),
(20, 3, 'vendorCategoryAdd', 'ps_vendor_category', 'add', '', 'admin'),
(21, 3, 'vendorCategoryUpdate', 'ps_vendor_category', 'update', '', 'admin'),
(22, 3, 'vendorCategoryDelete', 'ps_vendor_category', 'delete', '', 'admin'),
(23, 4, 'shopperAdd', 'ps_shopper', 'add', '', 'none'),
(24, 4, 'shopperDelete', 'ps_shopper', 'delete', '', 'admin,storeadmin'),
(25, 4, 'shopperUpdate', 'ps_shopper', 'update', '', 'admin,storeadmin,shopper'),
(26, 4, 'shopperGroupAdd', 'ps_shopper_group', 'add', '', 'admin,storeadmin'),
(27, 4, 'shopperGroupUpdate', 'ps_shopper_group', 'update', '', 'admin,storeadmin'),
(28, 4, 'shopperGroupDelete', 'ps_shopper_group', 'delete', '', 'admin,storeadmin'),
(29, 5, 'orderSearch', 'ps_order', 'find', '', 'admin,storeadmin,demo'),
(30, 5, 'orderStatusSet', 'ps_order', 'order_status_update', '', 'admin,storeadmin'),
(32, 2, 'productDelete', 'ps_product', 'delete', '', 'admin,storeadmin'),
(33, 2, 'productUpdate', 'ps_product', 'update', '', 'admin,storeadmin'),
(34, 2, 'productCategoryAdd', 'ps_product_category', 'add', '', 'admin,storeadmin'),
(35, 2, 'productCategoryUpdate', 'ps_product_category', 'update', '', 'admin,storeadmin'),
(36, 2, 'productCategoryDelete', 'ps_product_category', 'delete', '', 'admin,storeadmin'),
(37, 2, 'productPriceAdd', 'ps_product_price', 'add', '', 'admin,storeadmin'),
(38, 2, 'productPriceUpdate', 'ps_product_price', 'update', '', 'admin,storeadmin'),
(39, 2, 'productPriceDelete', 'ps_product_price', 'delete', '', 'admin,storeadmin'),
(40, 2, 'productAttributeAdd', 'ps_product_attribute', 'add', '', 'admin,storeadmin'),
(41, 2, 'productAttributeUpdate', 'ps_product_attribute', 'update', '', 'admin,storeadmin'),
(42, 2, 'productAttributeDelete', 'ps_product_attribute', 'delete', '', 'admin,storeadmin'),
(43, 7, 'cartAdd', 'ps_cart', 'add', '', 'none'),
(44, 7, 'cartUpdate', 'ps_cart', 'update', '', 'none'),
(45, 7, 'cartDelete', 'ps_cart', 'delete', '', 'none'),
(46, 10, 'checkoutComplete', 'ps_checkout', 'add', '', 'shopper,storeadmin,admin'),
(47, 1, 'setLanguage', 'ps_module', 'set_language', '', 'none'),
(48, 8, 'paymentMethodUpdate', 'ps_payment_method', 'update', '', 'admin,storeadmin'),
(49, 8, 'paymentMethodAdd', 'ps_payment_method', 'add', '', 'admin,storeadmin'),
(50, 8, 'paymentMethodDelete', 'ps_payment_method', 'delete', '', 'admin,storeadmin'),
(51, 5, 'orderDelete', 'ps_order', 'delete', '', 'admin,storeadmin'),
(52, 11, 'addTaxRate', 'ps_tax', 'add', '', 'admin,storeadmin'),
(53, 11, 'updateTaxRate', 'ps_tax', 'update', '', 'admin,storeadmin'),
(54, 11, 'deleteTaxRate', 'ps_tax', 'delete', '', 'admin,storeadmin'),
(55, 10, 'checkoutValidateST', 'ps_checkout', 'validate_shipto', '', 'none'),
(59, 5, 'orderStatusUpdate', 'ps_order_status', 'update', '', 'admin,storeadmin'),
(60, 5, 'orderStatusAdd', 'ps_order_status', 'add', '', 'storeadmin,admin'),
(61, 5, 'orderStatusDelete', 'ps_order_status', 'delete', '', 'admin,storeadmin'),
(62, 1, 'currencyAdd', 'ps_currency', 'add', 'add a currency', 'storeadmin,admin'),
(63, 1, 'currencyUpdate', 'ps_currency', 'update', '        update a currency', 'storeadmin,admin'),
(64, 1, 'currencyDelete', 'ps_currency', 'delete', 'delete a currency', 'storeadmin,admin'),
(65, 1, 'countryAdd', 'ps_country', 'add', 'Add a country ', 'storeadmin,admin'),
(66, 1, 'countryUpdate', 'ps_country', 'update', 'Update a country record', 'storeadmin,admin'),
(67, 1, 'countryDelete', 'ps_country', 'delete', 'Delete a country record', 'storeadmin,admin'),
(68, 2, 'product_csv', 'ps_csv', 'upload_csv', '', 'admin'),
(110, 7, 'waitingListAdd', 'zw_waiting_list', 'add', '', 'none'),
(111, 13, 'addzone', 'ps_zone', 'add', 'This will add a zone', 'admin,storeadmin'),
(112, 13, 'updatezone', 'ps_zone', 'update', 'This will update a zone', 'admin,storeadmin'),
(113, 13, 'deletezone', 'ps_zone', 'delete', 'This will delete a zone', 'admin,storeadmin'),
(114, 13, 'zoneassign', 'ps_zone', 'assign', 'This will assign a country to a zone', 'admin,storeadmin'),
(115, 1, 'writeConfig', 'ps_config', 'writeconfig', 'This will write the configuration details to phpshop.cfg.php', 'admin'),
(116, 12839, 'carrierAdd', 'ps_shipping', 'add', '', 'admin,storeadmin'),
(117, 12839, 'carrierDelete', 'ps_shipping', 'delete', '', 'admin,storeadmin'),
(118, 12839, 'carrierUpdate', 'ps_shipping', 'update', '', 'admin,storeadmin'),
(119, 12839, 'rateAdd', 'ps_shipping', 'rate_add', '', 'admin,storeadmin'),
(120, 12839, 'rateUpdate', 'ps_shipping', 'rate_update', '', 'admin,shopadmin'),
(121, 12839, 'rateDelete', 'ps_shipping', 'rate_delete', '', 'admin,storeadmin'),
(122, 10, 'checkoutProcess', 'ps_checkout', 'process', '', 'shopper,storeadmin,admin,demo'),
(123, 5, 'downloadRequest', 'ps_order', 'download_request', 'This checks if the download request is valid and sends the file to the browser as file download if the request was successful, otherwise echoes an error', 'admin,storeadmin,shopper'),
(124, 98, 'affiliateAdd', 'ps_affiliate', 'add', '', 'admin,storeadmin'),
(125, 98, 'affiliateUpdate', 'ps_affiliate', 'update', '', 'admin,storeadmin'),
(126, 98, 'affiliateDelete', 'ps_affiliate', 'delete', '', 'admin,storeadmin'),
(127, 98, 'affiliateEmail', 'ps_affiliate', 'email', '', 'admin,storeadmin'),
(128, 99, 'manufacturerAdd', 'ps_manufacturer', 'add', '', 'admin,storeadmin'),
(129, 99, 'manufacturerUpdate', 'ps_manufacturer', 'update', '', 'admin,storeadmin'),
(130, 99, 'manufacturerDelete', 'ps_manufacturer', 'delete', '', 'admin,storeadmin'),
(131, 99, 'manufacturercategoryAdd', 'ps_manufacturer_category', 'add', '', 'admin,storeadmin'),
(132, 99, 'manufacturercategoryUpdate', 'ps_manufacturer_category', 'update', '', 'admin,storeadmin'),
(133, 99, 'manufacturercategoryDelete', 'ps_manufacturer_category', 'delete', '', 'admin,storeadmin'),
(134, 7, 'addReview', 'ps_reviews', 'process_review', 'This lets the user add a review and rating to a product.', 'admin,storeadmin,shopper,demo'),
(135, 7, 'productReviewDelete', 'ps_reviews', 'delete_review', 'This deletes a review and from a product.', 'admin,storeadmin'),
(136, 8, 'creditcardAdd', 'ps_creditcard', 'add', 'Adds a Credit Card entry.', 'admin,storeadmin'),
(137, 8, 'creditcardUpdate', 'ps_creditcard', 'update', 'Updates a Credit Card entry.', 'admin,storeadmin'),
(138, 8, 'creditcardDelete', 'ps_creditcard', 'delete', 'Deletes a Credit Card entry.', 'admin,storeadmin'),
(139, 2, 'changePublishState', 'vmAbstractObject.class', 'handlePublishState', 'Changes the publish field of an item, so that it can be published or unpublished easily.', 'admin,storeadmin'),
(140, 2, 'export_csv', 'ps_csv', 'export_csv', 'This function exports all relevant product data to CSV.', 'admin,storeadmin'),
(141, 2, 'reorder', 'ps_product_category', 'reorder', 'Changes the list order of a category.', 'admin,storeadmin'),
(142, 2, 'discountAdd', 'ps_product_discount', 'add', 'Adds a discount.', 'admin,storeadmin'),
(143, 2, 'discountUpdate', 'ps_product_discount', 'update', 'Updates a discount.', 'admin,storeadmin'),
(144, 2, 'discountDelete', 'ps_product_discount', 'delete', 'Deletes a discount.', 'admin,storeadmin'),
(145, 8, 'shippingmethodSave', 'ps_shipping_method', 'save', '', 'admin,storeadmin'),
(146, 2, 'uploadProductFile', 'ps_product_files', 'add', 'Uploads and Adds a Product Image/File.', 'admin,storeadmin'),
(147, 2, 'updateProductFile', 'ps_product_files', 'update', 'Updates a Product Image/File.', 'admin,storeadmin'),
(148, 2, 'deleteProductFile', 'ps_product_files', 'delete', 'Deletes a Product Image/File.', 'admin,storeadmin'),
(149, 12843, 'couponAdd', 'ps_coupon', 'add_coupon_code', 'Adds a Coupon.', 'admin,storeadmin'),
(150, 12843, 'couponUpdate', 'ps_coupon', 'update_coupon', 'Updates a Coupon.', 'admin,storeadmin'),
(151, 12843, 'couponDelete', 'ps_coupon', 'remove_coupon_code', 'Deletes a Coupon.', 'admin,storeadmin'),
(152, 12843, 'couponProcess', 'ps_coupon', 'process_coupon_code', 'Processes a Coupon.', 'admin,storeadmin,shopper,demo'),
(153, 2, 'ProductTypeAdd', 'ps_product_type', 'add', 'Function add a Product Type and create new table product_type_<id>.', 'admin'),
(154, 2, 'ProductTypeUpdate', 'ps_product_type', 'update', 'Update a Product Type.', 'admin'),
(155, 2, 'ProductTypeDelete', 'ps_product_type', 'delete', 'Delete a Product Type and drop table product_type_<id>.', 'admin'),
(156, 2, 'ProductTypeReorder', 'ps_product_type', 'reorder', 'Changes the list order of a Product Type.', 'admin'),
(157, 2, 'ProductTypeAddParam', 'ps_product_type_parameter', 'add_parameter', 'Function add a Parameter into a Product Type and create new column in table product_type_<id>.', 'admin'),
(158, 2, 'ProductTypeUpdateParam', 'ps_product_type_parameter', 'update_parameter', 'Function update a Parameter in a Product Type and a column in table product_type_<id>.', 'admin'),
(159, 2, 'ProductTypeDeleteParam', 'ps_product_type_parameter', 'delete_parameter', 'Function delete a Parameter from a Product Type and drop a column in table product_type_<id>.', 'admin'),
(160, 2, 'ProductTypeReorderParam', 'ps_product_type_parameter', 'reorder_parameter', 'Changes the list order of a Parameter.', 'admin'),
(161, 2, 'productProductTypeAdd', 'ps_product_product_type', 'add', 'Add a Product into a Product Type.', 'admin,storeadmin'),
(162, 2, 'productProductTypeDelete', 'ps_product_product_type', 'delete', 'Delete a Product from a Product Type.', 'admin,storeadmin'),
(163, 1, 'stateAdd', 'ps_country', 'addState', 'Add a State ', 'storeadmin,admin'),
(164, 1, 'stateUpdate', 'ps_country', 'updateState', 'Update a state record', 'storeadmin,admin'),
(165, 1, 'stateDelete', 'ps_country', 'deleteState', 'Delete a state record', 'storeadmin,admin'),
(166, 2, 'csvFieldAdd', 'ps_csv', 'add', 'Add a CSV Field ', 'storeadmin,admin'),
(167, 2, 'csvFieldUpdate', 'ps_csv', 'update', 'Update a CSV Field', 'storeadmin,admin'),
(168, 2, 'csvFieldDelete', 'ps_csv', 'delete', 'Delete a CSV Field', 'storeadmin,admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_manufacturer`
--

CREATE TABLE IF NOT EXISTS `jos_vm_manufacturer` (
  `manufacturer_id` int(11) NOT NULL auto_increment,
  `mf_name` varchar(64) default NULL,
  `mf_email` varchar(255) default NULL,
  `mf_desc` text,
  `mf_category_id` int(11) default NULL,
  `mf_url` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`manufacturer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Manufacturers are those who create products' AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_vm_manufacturer`
--

INSERT INTO `jos_vm_manufacturer` (`manufacturer_id`, `mf_name`, `mf_email`, `mf_desc`, `mf_category_id`, `mf_url`) VALUES
(1, 'Maquel', 'marketing@maquel.com.br', 'Maquel\r\n', 1, 'http://www.maquel.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_manufacturer_category`
--

CREATE TABLE IF NOT EXISTS `jos_vm_manufacturer_category` (
  `mf_category_id` int(11) NOT NULL auto_increment,
  `mf_category_name` varchar(64) default NULL,
  `mf_category_desc` text,
  PRIMARY KEY  (`mf_category_id`),
  KEY `idx_manufacturer_category_category_name` (`mf_category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Manufactorers are assigned to these categories' AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_vm_manufacturer_category`
--

INSERT INTO `jos_vm_manufacturer_category` (`mf_category_id`, `mf_category_name`, `mf_category_desc`) VALUES
(1, '-default-', 'This is the default manufacturer category');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_module`
--

CREATE TABLE IF NOT EXISTS `jos_vm_module` (
  `module_id` int(11) NOT NULL auto_increment,
  `module_name` varchar(255) default NULL,
  `module_description` text,
  `module_perms` varchar(255) default NULL,
  `module_publish` char(1) default NULL,
  `list_order` int(11) default NULL,
  PRIMARY KEY  (`module_id`),
  KEY `idx_module_name` (`module_name`),
  KEY `idx_module_list_order` (`list_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='VirtueMart Core Modules, not: Joomla modules' AUTO_INCREMENT=12844 ;

--
-- Extraindo dados da tabela `jos_vm_module`
--

INSERT INTO `jos_vm_module` (`module_id`, `module_name`, `module_description`, `module_perms`, `module_publish`, `list_order`) VALUES
(1, 'admin', '<h4>ADMINISTRATIVE USERS ONLY</h4>\r\n\r\n<p>Only used for the following:</p>\r\n<OL>\r\n\r\n<LI>User Maintenance</LI>\r\n<LI>Module Maintenance</LI>\r\n<LI>Function Maintenance</LI>\r\n</OL>\r\n', 'admin', 'Y', 1),
(2, 'product', '<p>Here you can adminster your online catalog of products.  The Product Administrator allows you to create product categories, create new products, edit product attributes, and add product items for each attribute value.</p>', 'storeadmin,admin', 'Y', 4),
(3, 'vendor', '<h4>ADMINISTRATIVE USERS ONLY</h4>\r\n<p>Here you can manage the vendors on the phpShop system.</p>', 'admin', 'N', 12),
(4, 'shopper', '<p>Manage shoppers in your store.  Allows you to create shopper groups.  Shopper groups can be used when setting the price for a product.  This allows you to create different prices for different types of users.  An example of this would be to have a ''wholesale'' group and a ''retail'' group. </p>', 'admin,storeadmin', 'Y', 4),
(5, 'order', '<p>View Order and Update Order Status.</p>', 'admin,storeadmin', 'Y', 5),
(6, 'msgs', 'This module is unprotected an used for displaying system messages to users.  We need to have an area that does not require authorization when things go wrong.', 'none', 'N', 99),
(7, 'shop', 'This is the Washupito store module.  This is the demo store included with the phpShop distribution.', 'none', 'Y', 99),
(8, 'store', '', 'storeadmin,admin', 'Y', 2),
(9, 'account', 'This module allows shoppers to update their account information and view previously placed orders.', 'shopper,storeadmin,admin,demo', 'N', 99),
(10, 'checkout', '', 'none', 'N', 99),
(11, 'tax', 'The tax module allows you to set tax rates for states or regions within a country.  The rate is set as a decimal figure.  For example, 2 percent tax would be 0.02.', 'admin,storeadmin', 'Y', 8),
(12, 'reportbasic', 'The report basic module allows you to do queries on all orders.', 'admin,storeadmin', 'Y', 7),
(13, 'zone', 'This is the zone-shipping module. Here you can manage your shipping costs according to Zones.', 'admin,storeadmin', 'N', 9),
(12839, 'shipping', '<h4>Shipping</h4><p>Let this module calculate the shipping fees for your customers.<br>Create carriers for shipping areas and weight groups.</p>', 'admin,storeadmin', 'Y', 10),
(98, 'affiliate', 'administrate the affiliates on your store.', 'storeadmin,admin', 'N', 99),
(99, 'manufacturer', 'Manage the manufacturers of products in your store.', 'storeadmin,admin', 'Y', 6),
(12842, 'help', 'Help Module', 'admin,storeadmin', 'Y', 13),
(12843, 'coupon', 'Coupon Management', 'admin,storeadmin', 'Y', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_orders`
--

CREATE TABLE IF NOT EXISTS `jos_vm_orders` (
  `order_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `vendor_id` int(11) NOT NULL default '0',
  `order_number` varchar(32) default NULL,
  `user_info_id` varchar(32) default NULL,
  `order_total` decimal(15,2) NOT NULL default '0.00',
  `order_subtotal` decimal(15,5) default NULL,
  `order_tax` decimal(10,2) default NULL,
  `order_tax_details` text NOT NULL,
  `order_shipping` decimal(10,2) default NULL,
  `order_shipping_tax` decimal(10,2) default NULL,
  `coupon_discount` decimal(12,2) NOT NULL default '0.00',
  `order_discount` decimal(12,2) NOT NULL default '0.00',
  `order_currency` varchar(16) default NULL,
  `order_status` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `ship_method_id` varchar(255) default NULL,
  `customer_note` text NOT NULL,
  `ip_address` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`order_id`),
  KEY `idx_orders_user_id` (`user_id`),
  KEY `idx_orders_vendor_id` (`vendor_id`),
  KEY `idx_orders_order_number` (`order_number`),
  KEY `idx_orders_user_info_id` (`user_info_id`),
  KEY `idx_orders_ship_method_id` (`ship_method_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Used to store all orders' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_orders`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_order_history`
--

CREATE TABLE IF NOT EXISTS `jos_vm_order_history` (
  `order_status_history_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `order_status_code` char(1) NOT NULL default '0',
  `date_added` datetime NOT NULL default '0000-00-00 00:00:00',
  `customer_notified` int(1) default '0',
  `comments` text,
  PRIMARY KEY  (`order_status_history_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores all actions and changes that occur to an order' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_order_history`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_order_item`
--

CREATE TABLE IF NOT EXISTS `jos_vm_order_item` (
  `order_item_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) default NULL,
  `user_info_id` varchar(32) default NULL,
  `vendor_id` int(11) default NULL,
  `product_id` int(11) default NULL,
  `order_item_sku` varchar(64) NOT NULL default '',
  `order_item_name` varchar(64) NOT NULL default '',
  `product_quantity` int(11) default NULL,
  `product_item_price` decimal(15,5) default NULL,
  `product_final_price` decimal(12,2) NOT NULL default '0.00',
  `order_item_currency` varchar(16) default NULL,
  `order_status` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `product_attribute` text,
  PRIMARY KEY  (`order_item_id`),
  KEY `idx_order_item_order_id` (`order_id`),
  KEY `idx_order_item_user_info_id` (`user_info_id`),
  KEY `idx_order_item_vendor_id` (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores all items (products) which are part of an order' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_order_item`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_order_payment`
--

CREATE TABLE IF NOT EXISTS `jos_vm_order_payment` (
  `order_id` int(11) NOT NULL default '0',
  `payment_method_id` int(11) default NULL,
  `order_payment_code` varchar(30) NOT NULL default '',
  `order_payment_number` blob,
  `order_payment_expire` int(11) default NULL,
  `order_payment_name` varchar(255) default NULL,
  `order_payment_log` text,
  `order_payment_trans_id` text NOT NULL,
  KEY `idx_order_payment_order_id` (`order_id`),
  KEY `idx_order_payment_method_id` (`payment_method_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='The payment method that was chosen for a specific order';

--
-- Extraindo dados da tabela `jos_vm_order_payment`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_order_status`
--

CREATE TABLE IF NOT EXISTS `jos_vm_order_status` (
  `order_status_id` int(11) NOT NULL auto_increment,
  `order_status_code` char(1) NOT NULL default '',
  `order_status_name` varchar(64) default NULL,
  `list_order` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  PRIMARY KEY  (`order_status_id`),
  KEY `idx_order_status_list_order` (`list_order`),
  KEY `idx_order_status_vendor_id` (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='All available order statuses' AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `jos_vm_order_status`
--

INSERT INTO `jos_vm_order_status` (`order_status_id`, `order_status_code`, `order_status_name`, `list_order`, `vendor_id`) VALUES
(1, 'P', 'Pending', 1, 1),
(2, 'C', 'Confirmed', 2, 1),
(3, 'X', 'Cancelled', 3, 1),
(4, 'R', 'Refunded', 4, 1),
(5, 'S', 'Shipped', 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_order_user_info`
--

CREATE TABLE IF NOT EXISTS `jos_vm_order_user_info` (
  `order_info_id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `address_type` char(2) default NULL,
  `address_type_name` varchar(32) default NULL,
  `company` varchar(64) default NULL,
  `title` varchar(32) default NULL,
  `last_name` varchar(32) default NULL,
  `first_name` varchar(32) default NULL,
  `middle_name` varchar(32) default NULL,
  `phone_1` varchar(32) default NULL,
  `phone_2` varchar(32) default NULL,
  `fax` varchar(32) default NULL,
  `address_1` varchar(64) NOT NULL default '',
  `address_2` varchar(64) default NULL,
  `city` varchar(32) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `country` varchar(32) NOT NULL default 'US',
  `zip` varchar(32) NOT NULL default '',
  `user_email` varchar(255) default NULL,
  `extra_field_1` varchar(255) default NULL,
  `extra_field_2` varchar(255) default NULL,
  `extra_field_3` varchar(255) default NULL,
  `extra_field_4` char(1) default NULL,
  `extra_field_5` char(1) default NULL,
  `bank_account_nr` varchar(32) NOT NULL default '',
  `bank_name` varchar(32) NOT NULL default '',
  `bank_sort_code` varchar(16) NOT NULL default '',
  `bank_iban` varchar(64) NOT NULL default '',
  `bank_account_holder` varchar(48) NOT NULL default '',
  `bank_account_type` enum('Checking','Business Checking','Savings') NOT NULL default 'Checking',
  PRIMARY KEY  (`order_info_id`),
  KEY `idx_order_info_order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores the BillTo and ShipTo Information at order time' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_order_user_info`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_payment_method`
--

CREATE TABLE IF NOT EXISTS `jos_vm_payment_method` (
  `payment_method_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `payment_method_name` varchar(255) default NULL,
  `payment_class` varchar(50) NOT NULL default '',
  `shopper_group_id` int(11) default NULL,
  `payment_method_discount` decimal(12,2) default NULL,
  `list_order` int(11) default NULL,
  `payment_method_code` varchar(8) default NULL,
  `enable_processor` char(1) default NULL,
  `is_creditcard` tinyint(1) NOT NULL default '0',
  `payment_enabled` char(1) NOT NULL default 'N',
  `accepted_creditcards` varchar(128) NOT NULL default '',
  `payment_extrainfo` text NOT NULL,
  `payment_passkey` blob NOT NULL,
  PRIMARY KEY  (`payment_method_id`),
  KEY `idx_payment_method_vendor_id` (`vendor_id`),
  KEY `idx_payment_method_name` (`payment_method_name`),
  KEY `idx_payment_method_list_order` (`list_order`),
  KEY `idx_payment_method_shopper_group_id` (`shopper_group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='The payment methods of your store' AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `jos_vm_payment_method`
--

INSERT INTO `jos_vm_payment_method` (`payment_method_id`, `vendor_id`, `payment_method_name`, `payment_class`, `shopper_group_id`, `payment_method_discount`, `list_order`, `payment_method_code`, `enable_processor`, `is_creditcard`, `payment_enabled`, `accepted_creditcards`, `payment_extrainfo`, `payment_passkey`) VALUES
(1, 1, 'Purchase Order', '', 6, '0.00', 4, 'PO', 'N', 0, 'Y', '', '', ''),
(2, 1, 'Cash On Delivery', '', 5, '-2.00', 5, 'COD', 'N', 0, 'Y', '', '', ''),
(3, 1, 'Credit Card', 'ps_authorize', 5, '0.00', 0, 'AN', 'Y', 0, 'Y', '1,2,6,7,', '', ''),
(4, 1, 'PayPal', 'ps_paypal', 5, '0.00', 0, 'PP', 'P', 0, 'Y', '', '\n<?php\n$url = "https://www.paypal.com/cgi-bin/webscr";\n$tax_total = $db->f("order_tax") + $db->f("order_shipping_tax");\n$discount_total = $db->f("coupon_discount") + $db->f("order_discount");\n$post_variables = Array(\n"cmd" => "_xclick",\n"business" => PAYPAL_EMAIL,\n"receiver_email" => PAYPAL_EMAIL,\n"item_name" => $VM_LANG->_PHPSHOP_ORDER_PRINT_PO_NUMBER.": ". $db->f("order_id"),\n"order_id" => $db->f("order_id"),\n"invoice" => $db->f("order_number"),\n"amount" => round( $db->f("order_subtotal")+$tax_total-$discount_total, 2),\n"shipping" => sprintf("%.2f", $db->f("order_shipping")),\n"currency_code" => $_SESSION[''vendor_currency''],"first_name" => $dbbt->f(''first_name''),\n"last_name" => $dbbt->f(''last_name''),\n"address_street" => $dbbt->f(''address_1''),\n"address_zip" => $dbbt->f(''zip''),\n"address_city" => $dbbt->f(''city''),\n"address_state" => $dbbt->f(''state''),\n"address_country" => $dbbt->f(''country''),\n"image_url" => $vendor_image_url,\n"return" => SECUREURL ."index.php?option=com_virtuemart&page=checkout.result&order_id=".$db->f("order_id"),\n"notify_url" => SECUREURL ."administrator/components/com_virtuemart/notify.php",\n"cancel_return" => SECUREURL ."index.php",\n"undefined_quantity" => "0",\n"test_ipn" => PAYPAL_DEBUG,\n"pal" => "NRUBJXESJTY24",\n"no_shipping" => "1",\n"no_note" => "1"\n);\nif( $page == "checkout.thankyou" ) {\n$query_string = "?";\nforeach( $post_variables as $name => $value ) {\n$query_string .= $name. "=" . urlencode($value) ."&";\n}\nmosRedirect( $url . $query_string );\n} else {\n\necho ''<form action="''.$url.''" method="post" target="_blank">'';\necho ''<input type="image" name="submit" src="http://images.paypal.com/images/x-click-but6.gif" border="0" alt="Make payments with PayPal, it is fast, free, and secure!" />'';\n\nforeach( $post_variables as $name => $value ) {\necho ''<input type="hidden" name="''.$name.''" value="''.$value.''" />'';\n}\n\necho ''</form>'';\n\n}\n?>', ''),
(5, 1, 'PayMate', 'ps_paymate', 5, '0.00', 0, 'PM', 'P', 0, 'N', '', '<script type="text/javascript" language="javascript">\n  function openExpress(){\n	var url = ''https://www.paymate.com.au/PayMate/ExpressPayment?mid=<?php echo PAYMATE_USERNAME.\n	  "&amt=".$db->f("order_total").\n	  "&currency=".$_SESSION[''vendor_currency''].\n	  "&ref=".$db->f("order_id").\n	  "&pmt_sender_email=".$user->email.\n	  "&pmt_contact_firstname=".$user->first_name.\n	  "&pmt_contact_surname=".$user->last_name.\n	  "&regindi_address1=".$user->address_1.\n	  "&regindi_address2=".$user->address_2.\n	  "&regindi_sub=".$user->city.\n	  "&regindi_pcode=".$user->zip;?>''\n	var newWin = window.open(url, ''wizard'', ''height=640,width=500,scrollbars=0,toolbar=no'');\n	self.name = ''parent'';\n	newWin.focus();\n  }\n  </script>\n  <div align="center">\n  <p>\n  <a href="javascript:openExpress();">\n  <img src="https://www.paymate.com.au/homepage/images/butt_PayNow.gif" border="0" alt="Pay with Paymate Express">\n  <br />click here to pay your account</a>\n  </p>\n  </div>', ''),
(6, 1, 'WorldPay', 'ps_worldpay', 5, '0.00', 0, 'WP', 'P', 0, 'N', '', '<form action="https://select.worldpay.com/wcc/purchase" method="post">\n						  <input type=hidden name="testMode" value="100"> \n						  <input type="hidden" name="instId" value="<?php echo WORLDPAY_INST_ID ?>" />\n						  <input type="hidden" name="cartId" value="<?php echo $db->f("order_id") ?>" />\n						  <input type="hidden" name="amount" value="<?php echo $db->f("order_total") ?>" />\n						  <input type="hidden" name="currency" value="<?php echo $_SESSION[''vendor_currency''] ?>" />\n						  <input type="hidden" name="desc" value="Products" />\n						  <input type="hidden" name="email" value="<?php echo $user->email?>" />\n						  <input type="hidden" name="address" value="<?php echo $user->address_1?>&#10<?php echo $user->address_2?>&#10<?php echo\n						  $user->city?>&#10<?php echo $user->state?>" />\n						  <input type="hidden" name="name" value="<?php echo $user->title?><?php echo $user->first_name?>. <?php echo $user->middle_name?><?php echo $user->last_name?>" />\n						  <input type="hidden" name="country" value="<?php echo $user->country?>"/>\n						  <input type="hidden" name="postcode" value="<?php echo $user->zip?>" />\n						  <input type="hidden" name="tel"  value="<?php echo $user->phone_1?>">\n						  <input type="hidden" name="withDelivery"  value="true">\n						  <br />\n						  <input type="submit" value ="PROCEED TO PAYMENT PAGE" />\n						  </form>', ''),
(7, 1, '2Checkout', 'ps_twocheckout', 5, '0.00', 0, '2CO', 'P', 0, 'N', '', '<?php\n	$q  = "SELECT * FROM #__users WHERE user_info_id=''".$db->f("user_info_id")."''"; \n	$dbbt = new ps_DB;\n	$dbbt->setQuery($q);\n	$dbbt->query();\n	$dbbt->next_record(); \n	// Get ship_to information\n	if( $db->f("user_info_id") != $dbbt->f("user_info_id")) {\n	  $q2  = "SELECT * FROM #__vm_user_info WHERE user_info_id=''".$db->f("user_info_id")."''"; \n	  $dbst = new ps_DB;\n	  $dbst->setQuery($q2);\n	  $dbst->query();\n	  $dbst->next_record();\n	}\n	else  {\n	  $dbst = $dbbt;\n	}\n			\n	//Authnet vars to send\n	$formdata = array (\n	 ''x_login'' => TWOCO_LOGIN,\n	 ''x_email_merchant'' => ((TWOCO_MERCHANT_EMAIL == ''True'') ? ''TRUE'' : ''FALSE''),\n			 \n	 // Customer Name and Billing Address\n	 ''x_first_name'' => $dbbt->f("first_name"),\n	 ''x_last_name'' => $dbbt->f("last_name"),\n	 ''x_company'' => $dbbt->f("company"),\n	 ''x_address'' => $dbbt->f("address_1"),\n	 ''x_city'' => $dbbt->f("city"),\n	 ''x_state'' => $dbbt->f("state"),\n	 ''x_zip'' => $dbbt->f("zip"),\n	 ''x_country'' => $dbbt->f("country"),\n	 ''x_phone'' => $dbbt->f("phone_1"),\n	 ''x_fax'' => $dbbt->f("fax"),\n	 ''x_email'' => $dbbt->f("email"),\n	\n	 // Customer Shipping Address\n	 ''x_ship_to_first_name'' => $dbst->f("first_name"),\n	 ''x_ship_to_last_name'' => $dbst->f("last_name"),\n	 ''x_ship_to_company'' => $dbst->f("company"),\n	 ''x_ship_to_address'' => $dbst->f("address_1"),\n	 ''x_ship_to_city'' => $dbst->f("city"),\n	 ''x_ship_to_state'' => $dbst->f("state"),\n	 ''x_ship_to_zip'' => $dbst->f("zip"),\n	 ''x_ship_to_country'' => $dbst->f("country"),\n	\n	 ''x_invoice_num'' => $db->f("order_number"),\n	 ''x_receipt_link_url'' => SECUREURL."2checkout_notify.php"\n	 );\n	 \n	if( TWOCO_TESTMODE == "Y" )\n	  $formdata[''demo''] = "Y";\n	\n	 $version = "2";\n	 $url = "https://www2.2checkout.com/2co/buyer/purchase";\n	 $formdata[''x_amount''] = number_format($db->f("order_total"), 2, ''.'', '''');\n	\n	 //build the post string\n	 $poststring = '''';\n	 foreach($formdata AS $key => $val){\n	   $poststring .= "<input type=''hidden'' name=''$key'' value=''$val'' />\n	";\n	 }\n	\n	?>\n	<form action="<?php echo $url ?>" method="post" target="_blank">\n	<?php echo $poststring ?>\n	<p>Click on the Image below to pay...</p>\n	<input type="image" name="submit" src="https://www.2checkout.com/images/buy_logo.gif" border="0" alt="Make payments with 2Checkout, it''s fast and secure!" title="Pay your Order with 2Checkout, it''s fast and secure!" />\n	</form>', ''),
(8, 1, 'NoChex', 'ps_nochex', 5, '0.00', 0, 'NOCHEX', 'P', 0, 'N', '', '<form action="https://www.nochex.com/nochex.dll/checkout" method=post target="_blank"> \n											<input type="hidden" name="email" value="<?php echo NOCHEX_EMAIL ?>" />\n											<input type="hidden" name="amount" value="<?php printf("%.2f", $db->f("order_total"))?>" />\n											<input type="hidden" name="ordernumber" value="<?php $db->p("order_id") ?>" />\n											<input type="hidden" name="logo" value="<?php echo $vendor_image_url ?>" />\n											<input type="hidden" name="returnurl" value="<?php echo SECUREURL ."index.php?option=com_virtuemart&amp;page=checkout.result&amp;order_id=".$db->f("order_id") ?>" />\n											<input type="image" name="submit" src="http://www.nochex.com/web/images/paymeanimated.gif"> \n											</form>', ''),
(9, 1, 'Credit Card (PayMeNow)', 'ps_paymenow', 5, '0.00', 0, 'PN', 'Y', 0, 'N', '1,2,3,', '', ''),
(10, 1, 'eWay', 'ps_eway', 5, '0.00', 0, 'EWAY', 'Y', 0, 'N', '', '', ''),
(11, 1, 'eCheck.net', 'ps_echeck', 5, '0.00', 0, 'ECK', 'B', 0, 'N', '', '', ''),
(12, 1, 'Credit Card (eProcessingNetwork)', 'ps_epn', 5, '0.00', 0, 'EPN', 'Y', 0, 'N', '1,2,3,', '', ''),
(13, 1, 'iKobo', '', 5, '0.00', 0, 'IK', 'P', 0, 'N', '', '<form action="https://www.iKobo.com/store/index.php" method="post"> \n  <input type="hidden" name="cmd" value="cart" />Click on the image below to Pay with iKobo\n  <input type="image" src="https://www.ikobo.com/merchant/buttons/ikobo_pay1.gif" name="submit" alt="Pay with iKobo" /> \n  <input type="hidden" name="poid" value="USER_ID" /> \n  <input type="hidden" name="item" value="Order: <?php $db->p("order_id") ?>" /> \n  <input type="hidden" name="price" value="<?php printf("%.2f", $db->f("order_total"))?>" /> \n  <input type="hidden" name="firstname" value="<?php echo $user->first_name?>" /> \n  <input type="hidden" name="lastname" value="<?php echo $user->last_name?>" /> \n  <input type="hidden" name="address" value="<?php echo $user->address_1?>&#10<?php echo $user->address_2?>" /> \n  <input type="hidden" name="city" value="<?php echo $user->city?>" /> \n  <input type="hidden" name="state" value="<?php echo $user->state?>" /> \n  <input type="hidden" name="zip" value="<?php echo $user->zip?>" /> \n  <input type="hidden" name="phone" value="<?php echo $user->phone_1?>" /> \n  <input type="hidden" name="email" value="<?php echo $user->email?>" /> \n  </form> >', ''),
(14, 1, 'iTransact', '', 5, '0.00', 0, 'ITR', 'P', 0, 'N', '', '<?php\n  //your iTransact account details\n  $vendorID = "XXXXX";\n  global $vendor_name;\n  $mername = $vendor_name;\n  \n  //order details\n  $total = $db->f("order_total");$first_name = $user->first_name;$last_name = $user->last_name;$address = $user->address_1;$city = $user->city;$state = $user->state;$zip = $user->zip;$country = $user->country;$email = $user->email;$phone = $user->phone_1;$home_page = $mosConfig_live_site."/index.php";$ret_addr = $mosConfig_live_site."/index.php";$cc_payment_image = $mosConfig_live_site."/components/com_virtuemart/shop_image/ps_image/cc_payment.jpg";\n  ?>\n  <form action="https://secure.paymentclearing.com/cgi-bin/mas/split.cgi" method="POST"> \n		<input type="hidden" name="vendor_id" value="<?php echo $vendorID; ?>" />\n		<input type="hidden" name="home_page" value="<?php echo $home_page; ?>" />\n		<input type="hidden" name="ret_addr" value="<?php echo $ret_addr; ?>" />\n		<input type="hidden" name="mername" value="<?php echo $mername; ?>" />\n		<!--Enter text in the next value that should appear on the bottom of the order form.-->\n		<INPUT type="hidden" name="mertext" value="" />\n		<!--If you are accepting checks, enter the number 1 in the next value.  Enter the number 0 if you are not accepting checks.-->\n		<INPUT type="hidden" name="acceptchecks" value="0" />\n		<!--Enter the number 1 in the next value if you want to allow pre-registered customers to pay with a check.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="allowreg" value="0" />\n		<!--If you are set up with Check Guarantee, enter the number 1 in the next value.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="checkguar" value="0" />\n		<!--Enter the number 1 in the next value if you are accepting credit card payments.  Enter the number zero if not.-->\n		<INPUT type="hidden" name="acceptcards" value="1">\n		<!--Enter the number 1 in the next value if you want to allow a separate mailing address for credit card orders.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="altaddr" value="0" />\n		<!--Enter the number 1 in the next value if you want the customer to enter the CVV number for card orders.  Enter the number 0 if not.-->\n		<INPUT type="hidden" name="showcvv" value="1" />\n		\n		<input type="hidden" name="1-desc" value="Order Total" />\n		<input type="hidden" name="1-cost" value="<?php echo $total; ?>" />\n		<input type="hidden" name="1-qty" value="1" />\n		<input type="hidden" name="total" value="<?php echo $total; ?>" />\n		<input type="hidden" name="first_name" value="<?php echo $first_name; ?>" />\n		<input type="hidden" name="last_name" value="<?php echo $last_name; ?>" />\n		<input type="hidden" name="address" value="<?php echo $address; ?>" />\n		<input type="hidden" name="city" value="<?php echo $city; ?>" />\n		<input type="hidden" name="state" value="<?php echo $state; ?>" />\n		<input type="hidden" name="zip" value="<?php echo $zip; ?>" />\n		<input type="hidden" name="country" value="<?php echo $country; ?>" />\n		<input type="hidden" name="phone" value="<?php echo $phone; ?>" />\n		<input type="hidden" name="email" value="<?php echo $email; ?>" />\n		<p><input type="image" alt="Process Secure Credit Card Transaction using iTransact" border="0" height="60" width="210" src="<?php echo $cc_payment_image; ?>" /> </p>\n		</form>', ''),
(15, 1, 'Dankort / PBS', 'ps_pbs', 5, '0.00', 0, 'PBS', 'P', 0, 'N', '', '', ''),
(16, 1, 'Verisign PayFlow Pro', 'ps_pfp', 5, '0.00', 0, 'PFP', 'Y', 0, 'Y', '1,2,6,7,', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product` (
  `product_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) NOT NULL default '0',
  `product_parent_id` int(11) NOT NULL default '0',
  `product_sku` varchar(64) NOT NULL default '',
  `product_s_desc` varchar(255) default NULL,
  `product_desc` text,
  `product_thumb_image` varchar(255) default NULL,
  `product_full_image` varchar(255) default NULL,
  `product_publish` char(1) default NULL,
  `product_weight` decimal(10,4) default NULL,
  `product_weight_uom` varchar(32) default 'pounds.',
  `product_length` decimal(10,4) default NULL,
  `product_width` decimal(10,4) default NULL,
  `product_height` decimal(10,4) default NULL,
  `product_lwh_uom` varchar(32) default 'inches',
  `product_url` varchar(255) default NULL,
  `product_in_stock` int(11) default NULL,
  `product_available_date` int(11) default NULL,
  `product_availability` varchar(56) NOT NULL default '',
  `product_special` char(1) default NULL,
  `product_discount_id` int(11) default NULL,
  `ship_code_id` int(11) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `product_name` varchar(64) default NULL,
  `product_sales` int(11) NOT NULL default '0',
  `attribute` text,
  `custom_attribute` text NOT NULL,
  `product_tax_id` tinyint(2) NOT NULL default '0',
  `product_unit` varchar(32) default NULL,
  `product_packaging` int(11) default NULL,
  PRIMARY KEY  (`product_id`),
  KEY `idx_product_vendor_id` (`vendor_id`),
  KEY `idx_product_product_parent_id` (`product_parent_id`),
  KEY `idx_product_sku` (`product_sku`),
  KEY `idx_product_ship_code_id` (`ship_code_id`),
  KEY `idx_product_name` (`product_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='All products are stored here.' AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `jos_vm_product`
--

INSERT INTO `jos_vm_product` (`product_id`, `vendor_id`, `product_parent_id`, `product_sku`, `product_s_desc`, `product_desc`, `product_thumb_image`, `product_full_image`, `product_publish`, `product_weight`, `product_weight_uom`, `product_length`, `product_width`, `product_height`, `product_lwh_uom`, `product_url`, `product_in_stock`, `product_available_date`, `product_availability`, `product_special`, `product_discount_id`, `ship_code_id`, `cdate`, `mdate`, `product_name`, `product_sales`, `attribute`, `custom_attribute`, `product_tax_id`, `product_unit`, `product_packaging`) VALUES
(1, 1, 0, '001', 'Chamado de \\"Efeito Cinderela\\". Ação firmadora e tensora imediata. Possui ativos avançados que agem diretamente na profundidade das rugas, melhorando e suavizando as linhas de expressão. ', '', '5ebc21e1d64a4444c11e0ec92b1bb444.jpg', 'e7a9085a89f5d419705dae25ae0f9a8f.jpg', 'Y', '0.0000', 'Kg', '0.0000', '0.0000', '0.0000', 'Cm', '', 0, -75600, '', 'N', 0, NULL, 1227044536, 1227045111, 'Serum Intensive', 0, '', '', 2, 'Un', 0),
(2, 1, 0, '002', 'Formulado especialmente para proteção e prevenção da pele contra agentes agressores. Protege contra os raios UVA e UVB, sem perda hídrica, e hidratando a face.', '', 'c2c41616dc8013878b568ef192e6774c.jpg', 'dffb7c318b00fa9017c5fbd444497217.jpg', 'Y', '0.0000', 'Kg', '0.0000', '0.0000', '0.0000', 'Cm', '', 0, 1226973600, '', 'N', 0, NULL, 1227045093, 1227045093, 'Gel Creme Bloqueador Solar Fps 30', 0, '', '', 2, 'Un', 0),
(3, 1, 0, '003', 'O Gel Facial Bio Ácido Vegetal contém um complexo de alfa-hidroxiácidos que promove renovação celular e ajuda no clareamento de manchas causadas por pigmentação excessiva.', '', '864a353f33d9cec6f89bec5a6e0d64f7.jpg', 'c54dcbae2b6633bec53777f6685d2243.jpg', 'Y', '0.0000', 'Kg', '0.0000', '0.0000', '0.0000', 'Cm', '', 0, -75600, '', 'N', 0, NULL, 1227045327, 1227045327, 'Gel Bio Ácido', 0, '', '', 2, 'Un', 0),
(4, 1, 0, '004', 'Ação rápida e eficiente em tratamentos destinados à firmeza elasticidade da pele. Confere hidratação profunda. O Cafeisilane C ajuda na permeabilidade e espalhabilidade do produto, além de ser antioxidante.', '', '1398ca5ff850c535af3b438056e56015.jpg', 'e34d86c83beea6ad87fa285092080fac.jpg', 'Y', '0.0000', 'Kg', '0.0000', '0.0000', '0.0000', 'Cm', '', 0, 1226973600, '', 'Y', 0, NULL, 1227045597, 1473615081, 'Creme DMAE CORPO ', 0, '', '', 2, 'Un', 0),
(5, 1, 0, '005', 'Possui princípios ativos que conferem elasticidade e flexibilidade à pelo. Hidrata restaurando o equilíbrio hídrico da face e suaviza linhas de expressão.', '', 'a2e52c0208c85ac79d391b8420fd5649.jpg', '6a07beffdc8eebca196b0fce994b5500.jpg', 'Y', '0.0000', 'Kg', '0.0000', '0.0000', '0.0000', 'Cm', '', 0, 1226973600, '', 'N', 0, NULL, 1227047308, 1227047475, 'Máscara Hidroplástica', 0, '', '', 2, 'Un', 0),
(6, 1, 0, '006', 'Resultados na primeira aplicação. Ativos destinados a hidratar, revitalizar, nutrir e melhorar a aparência da pele.', '', '3b16e5a20ce8d76090b810509588d320.jpg', '5487c53031c0a4bd8858478c37baff6d.jpg', 'Y', '0.0000', 'Kg', '0.0000', '0.0000', '0.0000', 'Cm', '', 0, -75600, '', 'Y', 0, NULL, 1227047455, 1473615135, 'Máscará de Cereja com Turmalina', 0, '', '', 2, 'Un', 0),
(7, 1, 0, '007', 'Quando aplicade sobre a pele, provoca hiperemia, ou seja aquece e deixa vermelho o local. Esse efeito é uma vasodilatação da derme e dura de 10 a 40 minutos.', '', 'f8960b049746fdc9b222c01d4e292a51.jpg', '7b9f15efde9bff21cefe28ad6a016938.jpg', 'Y', '0.0000', 'Kg', '0.0000', '0.0000', '0.0000', 'Cm', '', 0, 1226973600, '', 'N', 0, NULL, 1227047595, 1227047595, 'Termo Spray Anticelulite', 0, '', '', 2, 'Un', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_attribute`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_attribute` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_value` char(255) NOT NULL default '',
  KEY `idx_product_attribute_product_id` (`product_id`),
  KEY `idx_product_attribute_name` (`attribute_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores attributes + their specific values for Child Products';

--
-- Extraindo dados da tabela `jos_vm_product_attribute`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_attribute_sku`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_attribute_sku` (
  `product_id` int(11) NOT NULL default '0',
  `attribute_name` char(255) NOT NULL default '',
  `attribute_list` int(11) NOT NULL default '0',
  KEY `idx_product_attribute_sku_product_id` (`product_id`),
  KEY `idx_product_attribute_sku_attribute_name` (`attribute_name`),
  KEY `idx_product_attribute_list` (`attribute_list`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Attributes for a Parent Product used by its Child Products';

--
-- Extraindo dados da tabela `jos_vm_product_attribute_sku`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_category_xref`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_category_xref` (
  `category_id` int(11) NOT NULL default '0',
  `product_id` int(11) NOT NULL default '0',
  `product_list` int(11) default NULL,
  KEY `idx_product_category_xref_category_id` (`category_id`),
  KEY `idx_product_category_xref_product_id` (`product_id`),
  KEY `idx_product_category_xref_product_list` (`product_list`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Maps Products to Categories';

--
-- Extraindo dados da tabela `jos_vm_product_category_xref`
--

INSERT INTO `jos_vm_product_category_xref` (`category_id`, `product_id`, `product_list`) VALUES
(1, 1, NULL),
(1, 2, NULL),
(1, 3, NULL),
(1, 4, NULL),
(1, 5, NULL),
(1, 6, NULL),
(1, 7, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_discount`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_discount` (
  `discount_id` int(11) NOT NULL auto_increment,
  `amount` decimal(12,2) NOT NULL default '0.00',
  `is_percent` tinyint(1) NOT NULL default '0',
  `start_date` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  PRIMARY KEY  (`discount_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Discounts that can be assigned to products' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_product_discount`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_download`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_download` (
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `order_id` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  `download_max` int(11) NOT NULL default '0',
  `download_id` varchar(32) NOT NULL default '',
  `file_name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`download_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Active downloads for selling downloadable goods';

--
-- Extraindo dados da tabela `jos_vm_product_download`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_files`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_files` (
  `file_id` int(19) NOT NULL auto_increment,
  `file_product_id` int(11) NOT NULL default '0',
  `file_name` varchar(128) NOT NULL default '',
  `file_title` varchar(128) NOT NULL default '',
  `file_description` mediumtext NOT NULL,
  `file_extension` varchar(128) NOT NULL default '',
  `file_mimetype` varchar(64) NOT NULL default '',
  `file_url` varchar(254) NOT NULL default '',
  `file_published` tinyint(1) NOT NULL default '0',
  `file_is_image` tinyint(1) NOT NULL default '0',
  `file_image_height` int(11) NOT NULL default '0',
  `file_image_width` int(11) NOT NULL default '0',
  `file_image_thumb_height` int(11) NOT NULL default '50',
  `file_image_thumb_width` int(11) NOT NULL default '0',
  PRIMARY KEY  (`file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Additional Images and Files which are assigned to products' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_product_files`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_mf_xref`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_mf_xref` (
  `product_id` int(11) default NULL,
  `manufacturer_id` int(11) default NULL,
  KEY `idx_product_mf_xref_product_id` (`product_id`),
  KEY `idx_product_mf_xref_manufacturer_id` (`manufacturer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Maps a product to a manufacturer';

--
-- Extraindo dados da tabela `jos_vm_product_mf_xref`
--

INSERT INTO `jos_vm_product_mf_xref` (`product_id`, `manufacturer_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_price`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_price` (
  `product_price_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `product_price` decimal(12,5) default NULL,
  `product_currency` char(16) default NULL,
  `product_price_vdate` int(11) default NULL,
  `product_price_edate` int(11) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `price_quantity_start` int(11) unsigned NOT NULL default '0',
  `price_quantity_end` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`product_price_id`),
  KEY `idx_product_price_product_id` (`product_id`),
  KEY `idx_product_price_shopper_group_id` (`shopper_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Holds price records for a product' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_product_price`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_product_type_xref`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_product_type_xref` (
  `product_id` int(11) NOT NULL default '0',
  `product_type_id` int(11) NOT NULL default '0',
  KEY `idx_product_product_type_xref_product_id` (`product_id`),
  KEY `idx_product_product_type_xref_product_type_id` (`product_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Maps products to a product type';

--
-- Extraindo dados da tabela `jos_vm_product_product_type_xref`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_relations`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_relations` (
  `product_id` int(11) NOT NULL default '0',
  `related_products` text,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_vm_product_relations`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_reviews`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_reviews` (
  `product_id` varchar(255) NOT NULL default '',
  `comment` text NOT NULL,
  `userid` int(11) NOT NULL default '0',
  `time` int(11) NOT NULL default '0',
  `user_rating` tinyint(1) NOT NULL default '0',
  `review_ok` int(11) NOT NULL default '0',
  `review_votes` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jos_vm_product_reviews`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_type`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_type` (
  `product_type_id` int(11) NOT NULL auto_increment,
  `product_type_name` varchar(255) NOT NULL default '',
  `product_type_description` text,
  `product_type_publish` char(1) default NULL,
  `product_type_browsepage` varchar(255) default NULL,
  `product_type_flypage` varchar(255) default NULL,
  `product_type_list_order` int(11) default NULL,
  PRIMARY KEY  (`product_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_product_type`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_type_parameter`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_type_parameter` (
  `product_type_id` int(11) NOT NULL default '0',
  `parameter_name` varchar(255) NOT NULL default '',
  `parameter_label` varchar(255) NOT NULL default '',
  `parameter_description` text,
  `parameter_list_order` int(11) NOT NULL default '0',
  `parameter_type` char(1) NOT NULL default 'T',
  `parameter_values` varchar(255) default NULL,
  `parameter_multiselect` char(1) default NULL,
  `parameter_default` varchar(255) default NULL,
  `parameter_unit` varchar(32) default NULL,
  PRIMARY KEY  (`product_type_id`,`parameter_name`),
  KEY `idx_product_type_parameter_product_type_id` (`product_type_id`),
  KEY `idx_product_type_parameter_parameter_order` (`parameter_list_order`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Parameters which are part of a product type';

--
-- Extraindo dados da tabela `jos_vm_product_type_parameter`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_product_votes`
--

CREATE TABLE IF NOT EXISTS `jos_vm_product_votes` (
  `product_id` int(255) NOT NULL default '0',
  `votes` text NOT NULL,
  `allvotes` int(11) NOT NULL default '0',
  `rating` tinyint(1) NOT NULL default '0',
  `lastip` varchar(50) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores all votes for a product';

--
-- Extraindo dados da tabela `jos_vm_product_votes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_shipping_carrier`
--

CREATE TABLE IF NOT EXISTS `jos_vm_shipping_carrier` (
  `shipping_carrier_id` int(11) NOT NULL auto_increment,
  `shipping_carrier_name` char(80) NOT NULL default '',
  `shipping_carrier_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_carrier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Shipping Carriers as used by the Standard Shipping Module' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_shipping_carrier`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_shipping_rate`
--

CREATE TABLE IF NOT EXISTS `jos_vm_shipping_rate` (
  `shipping_rate_id` int(11) NOT NULL auto_increment,
  `shipping_rate_name` varchar(255) NOT NULL default '',
  `shipping_rate_carrier_id` int(11) NOT NULL default '0',
  `shipping_rate_country` text NOT NULL,
  `shipping_rate_zip_start` varchar(32) NOT NULL default '',
  `shipping_rate_zip_end` varchar(32) NOT NULL default '',
  `shipping_rate_weight_start` decimal(10,3) NOT NULL default '0.000',
  `shipping_rate_weight_end` decimal(10,3) NOT NULL default '0.000',
  `shipping_rate_value` decimal(10,2) NOT NULL default '0.00',
  `shipping_rate_package_fee` decimal(10,2) NOT NULL default '0.00',
  `shipping_rate_currency_id` int(11) NOT NULL default '0',
  `shipping_rate_vat_id` int(11) NOT NULL default '0',
  `shipping_rate_list_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`shipping_rate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Shipping Rates, used by the Standard Shipping Module' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_shipping_rate`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_shopper_group`
--

CREATE TABLE IF NOT EXISTS `jos_vm_shopper_group` (
  `shopper_group_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `shopper_group_name` varchar(32) default NULL,
  `shopper_group_desc` text,
  `shopper_group_discount` decimal(5,2) NOT NULL default '0.00',
  `show_price_including_tax` tinyint(1) NOT NULL default '1',
  `default` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`shopper_group_id`),
  KEY `idx_shopper_group_vendor_id` (`vendor_id`),
  KEY `idx_shopper_group_name` (`shopper_group_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Shopper Groups that users can be assigned to' AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `jos_vm_shopper_group`
--

INSERT INTO `jos_vm_shopper_group` (`shopper_group_id`, `vendor_id`, `shopper_group_name`, `shopper_group_desc`, `shopper_group_discount`, `show_price_including_tax`, `default`) VALUES
(5, 1, '-default-', 'This is the default shopper group.', '0.00', 1, 1),
(6, 1, 'Gold Level', 'Gold Level phpShoppers.', '0.00', 1, 0),
(7, 1, 'Wholesale', 'Shoppers that can buy at wholesale.', '0.00', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_shopper_vendor_xref`
--

CREATE TABLE IF NOT EXISTS `jos_vm_shopper_vendor_xref` (
  `user_id` int(11) default NULL,
  `vendor_id` int(11) default NULL,
  `shopper_group_id` int(11) default NULL,
  `customer_number` varchar(32) default NULL,
  KEY `idx_shopper_vendor_xref_user_id` (`user_id`),
  KEY `idx_shopper_vendor_xref_vendor_id` (`vendor_id`),
  KEY `idx_shopper_vendor_xref_shopper_group_id` (`shopper_group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Maps a user to a Shopper Group of a Vendor';

--
-- Extraindo dados da tabela `jos_vm_shopper_vendor_xref`
--

INSERT INTO `jos_vm_shopper_vendor_xref` (`user_id`, `vendor_id`, `shopper_group_id`, `customer_number`) VALUES
(62, 1, 5, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_state`
--

CREATE TABLE IF NOT EXISTS `jos_vm_state` (
  `state_id` int(11) NOT NULL auto_increment,
  `country_id` int(11) NOT NULL default '1',
  `state_name` varchar(64) default NULL,
  `state_3_code` char(3) default NULL,
  `state_2_code` char(2) default NULL,
  PRIMARY KEY  (`state_id`),
  UNIQUE KEY `state_3_code` (`state_3_code`,`state_2_code`),
  KEY `idx_country_id` (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='States that are assigned to a country' AUTO_INCREMENT=209 ;

--
-- Extraindo dados da tabela `jos_vm_state`
--

INSERT INTO `jos_vm_state` (`state_id`, `country_id`, `state_name`, `state_3_code`, `state_2_code`) VALUES
(1, 223, 'Alabama', 'ALA', 'AL'),
(2, 223, 'Alaska', 'ALK', 'AK'),
(3, 223, 'Arizona', 'ARZ', 'AZ'),
(4, 223, 'Arkansas', 'ARK', 'AR'),
(5, 223, 'California', 'CAL', 'CA'),
(6, 223, 'Colorado', 'COL', 'CO'),
(7, 223, 'Connecticut', 'CCT', 'CT'),
(8, 223, 'Delaware', 'DEL', 'DE'),
(9, 223, 'District Of Columbia', 'DOC', 'DC'),
(10, 223, 'Florida', 'FLO', 'FL'),
(11, 223, 'Georgia', 'GEA', 'GA'),
(12, 223, 'Hawaii', 'HWI', 'HI'),
(13, 223, 'Idaho', 'IDA', 'ID'),
(14, 223, 'Illinois', 'ILL', 'IL'),
(15, 223, 'Indiana', 'IND', 'IN'),
(16, 223, 'Iowa', 'IOA', 'IA'),
(17, 223, 'Kansas', 'KAS', 'KS'),
(18, 223, 'Kentucky', 'KTY', 'KY'),
(19, 223, 'Louisiana', 'LOA', 'LA'),
(20, 223, 'Maine', 'MAI', 'ME'),
(21, 223, 'Maryland', 'MLD', 'MD'),
(22, 223, 'Massachusetts', 'MSA', 'MA'),
(23, 223, 'Michigan', 'MIC', 'MI'),
(24, 223, 'Minnesota', 'MIN', 'MN'),
(25, 223, 'Mississippi', 'MIS', 'MS'),
(26, 223, 'Missouri', 'MIO', 'MO'),
(27, 223, 'Montana', 'MOT', 'MT'),
(28, 223, 'Nebraska', 'NEB', 'NE'),
(29, 223, 'Nevada', 'NEV', 'NV'),
(30, 223, 'New Hampshire', 'NEH', 'NH'),
(31, 223, 'New Jersey', 'NEJ', 'NJ'),
(32, 223, 'New Mexico', 'NEM', 'NM'),
(33, 223, 'New York', 'NEY', 'NY'),
(34, 223, 'North Carolina', 'NOC', 'NC'),
(35, 223, 'North Dakota', 'NOD', 'ND'),
(36, 223, 'Ohio', 'OHI', 'OH'),
(37, 223, 'Oklahoma', 'OKL', 'OK'),
(38, 223, 'Oregon', 'ORN', 'OR'),
(39, 223, 'Pennsylvania', 'PEA', 'PA'),
(40, 223, 'Rhode Island', 'RHI', 'RI'),
(41, 223, 'South Carolina', 'SOC', 'SC'),
(42, 223, 'South Dakota', 'SOD', 'SD'),
(43, 223, 'Tennessee', 'TEN', 'TN'),
(44, 223, 'Texas', 'TXS', 'TX'),
(45, 223, 'Utah', 'UTA', 'UT'),
(46, 223, 'Vermont', 'VMT', 'VT'),
(47, 223, 'Virginia', 'VIA', 'VA'),
(48, 223, 'Washington', 'WAS', 'WA'),
(49, 223, 'West Virginia', 'WEV', 'WV'),
(50, 223, 'Wisconsin', 'WIS', 'WI'),
(51, 223, 'Wyoming', 'WYO', 'WY'),
(52, 38, 'Alberta', 'ALB', 'AB'),
(53, 38, 'British Columbia', 'BRC', 'BC'),
(54, 38, 'Manitoba', 'MAB', 'MB'),
(55, 38, 'New Brunswick', 'NEB', 'NB'),
(56, 38, 'Newfoundland and Labrador', 'NFL', 'NL'),
(57, 38, 'Northwest Territories', 'NWT', 'NT'),
(58, 38, 'Nova Scotia', 'NOS', 'NS'),
(59, 38, 'Nunavut', 'NUT', 'NU'),
(60, 38, 'Ontario', 'ONT', 'ON'),
(61, 38, 'Prince Edward Island', 'PEI', 'PE'),
(62, 38, 'Quebec', 'QEC', 'QC'),
(63, 38, 'Saskatchewan', 'SAK', 'SK'),
(64, 38, 'Yukon', 'YUT', 'YT'),
(65, 222, 'England', 'ENG', 'EN'),
(66, 222, 'Northern Ireland', 'NOI', 'NI'),
(67, 222, 'Scotland', 'SCO', 'SD'),
(68, 222, 'Wales', 'WLS', 'WS'),
(69, 13, 'Australian Capital Territory', 'ACT', 'AT'),
(70, 13, 'New South Wales', 'NSW', 'NW'),
(71, 13, 'Northern Territory', 'NOT', 'NT'),
(72, 13, 'Queensland', 'QLD', 'QL'),
(73, 13, 'South Australia', 'SOA', 'SA'),
(74, 13, 'Tasmania', 'TAS', 'TA'),
(75, 13, 'Victoria', 'VIC', 'VI'),
(76, 13, 'Western Australia', 'WEA', 'WA'),
(77, 138, 'Aguascalientes', 'AGS', 'AG'),
(78, 138, 'Baja California Norte', 'BCN', 'BN'),
(79, 138, 'Baja California Sur', 'BCS', 'BS'),
(80, 138, 'Campeche', 'CAM', 'CA'),
(81, 138, 'Chiapas', 'CHI', 'CS'),
(82, 138, 'Chihuahua', 'CHA', 'CH'),
(83, 138, 'Coahuila', 'COA', 'CO'),
(84, 138, 'Colima', 'COL', 'CM'),
(85, 138, 'Distrito Federal', 'DFM', 'DF'),
(86, 138, 'Durango', 'DGO', 'DO'),
(87, 138, 'Guanajuato', 'GTO', 'GO'),
(88, 138, 'Guerrero', 'GRO', 'GU'),
(89, 138, 'Hidalgo', 'HGO', 'HI'),
(90, 138, 'Jalisco', 'JAL', 'JA'),
(91, 138, 'MÃ©xico (Estado de)', 'EDM', 'EM'),
(92, 138, 'MichoacÃ¡n', 'MCN', 'MI'),
(93, 138, 'Morelos', 'MOR', 'MO'),
(94, 138, 'Nayarit', 'NAY', 'NY'),
(95, 138, 'Nuevo LeÃ³n', 'NUL', 'NL'),
(96, 138, 'Oaxaca', 'OAX', 'OA'),
(97, 138, 'Puebla', 'PUE', 'PU'),
(98, 138, 'QuerÃ©taro', 'QRO', 'QU'),
(99, 138, 'Quintana Roo', 'QUR', 'QR'),
(100, 138, 'San Luis PotosÃ­', 'SLP', 'SP'),
(101, 138, 'Sinaloa', 'SIN', 'SI'),
(102, 138, 'Sonora', 'SON', 'SO'),
(103, 138, 'Tabasco', 'TAB', 'TA'),
(104, 138, 'Tamaulipas', 'TAM', 'TM'),
(105, 138, 'Tlaxcala', 'TLX', 'TX'),
(106, 138, 'Veracruz', 'VER', 'VZ'),
(107, 138, 'YucatÃ¡n', 'YUC', 'YU'),
(108, 138, 'Zacatecas', 'ZAC', 'ZA'),
(109, 30, 'Acre', 'ACR', 'AC'),
(110, 30, 'Alagoas', 'ALG', 'AL'),
(111, 30, 'AmapÃ¡', 'AMP', 'AP'),
(112, 30, 'Amazonas', 'AMZ', 'AM'),
(113, 30, 'BahÃ­a', 'BAH', 'BA'),
(114, 30, 'CearÃ¡', 'CEA', 'CE'),
(115, 30, 'Distrito Federal', 'DFB', 'DF'),
(116, 30, 'Espirito Santo', 'ESS', 'ES'),
(117, 30, 'GoiÃ¡s', 'GOI', 'GO'),
(118, 30, 'MaranhÃ£o', 'MAR', 'MA'),
(119, 30, 'Mato Grosso', 'MAT', 'MT'),
(120, 30, 'Mato Grosso do Sul', 'MGS', 'MS'),
(121, 30, 'Minas GeraÃ­s', 'MIG', 'MG'),
(122, 30, 'ParanÃ¡', 'PAR', 'PR'),
(123, 30, 'ParaÃ­ba', 'PRB', 'PB'),
(124, 30, 'ParÃ¡', 'PAB', 'PA'),
(125, 30, 'Pernambuco', 'PER', 'PR'),
(126, 30, 'PiauÃ­', 'PIA', 'PI'),
(127, 30, 'Rio Grande do Norte', 'RGN', 'RN'),
(128, 30, 'Rio Grande do Sul', 'RGS', 'RS'),
(129, 30, 'Rio de Janeiro', 'RDJ', 'RJ'),
(130, 30, 'RondÃ´nia', 'RON', 'RO'),
(131, 30, 'Roraima', 'ROR', 'RR'),
(132, 30, 'Santa Catarina', 'SAC', 'SC'),
(133, 30, 'Sergipe', 'SER', 'SE'),
(134, 30, 'SÃ£o Paulo', 'SAP', 'SP'),
(135, 30, 'Tocantins', 'TOC', 'TO'),
(136, 44, 'Anhui', 'ANH', 'AN'),
(137, 44, 'Beijing', 'BEI', 'BE'),
(138, 44, 'Fujian', 'FUJ', 'FJ'),
(139, 44, 'Gansu', 'GAN', 'GU'),
(140, 44, 'Guangdong', 'GUA', 'GU'),
(141, 44, 'Guangxi Zhuang', 'GUZ', 'GZ'),
(142, 44, 'Guizhou', 'GUI', 'GI'),
(143, 44, 'Hainan', 'HAI', 'HA'),
(144, 44, 'Hebei', 'HEB', 'HE'),
(145, 44, 'Heilongjiang', 'HEI', 'HG'),
(146, 44, 'Henan', 'HEN', 'HN'),
(147, 44, 'Hubei', 'HUB', 'HI'),
(148, 44, 'Hunan', 'HUN', 'HU'),
(149, 44, 'Jiangsu', 'JIA', 'JI'),
(150, 44, 'Jiangxi', 'JIX', 'JX'),
(151, 44, 'Jilin', 'JIL', 'JN'),
(152, 44, 'Liaoning', 'LIA', 'LI'),
(153, 44, 'Nei Mongol', 'NML', 'NM'),
(154, 44, 'Ningxia Hui', 'NIH', 'NH'),
(155, 44, 'Qinghai', 'QIN', 'QI'),
(156, 44, 'Shaanxi', 'SHA', 'SH'),
(157, 44, 'Shandong', 'SNG', 'SG'),
(158, 44, 'Shanghai', 'SHH', 'SI'),
(159, 44, 'Shanxi', 'SHX', 'SX'),
(160, 44, 'Sichuan', 'SIC', 'SN'),
(161, 44, 'Tianjin', 'TIA', 'TI'),
(162, 44, 'Xinjiang Uygur', 'XIU', 'XU'),
(163, 44, 'Xizang', 'XIZ', 'XI'),
(164, 44, 'Yunnan', 'YUN', 'YU'),
(165, 44, 'Zhejiang', 'ZHE', 'ZH'),
(166, 151, 'Bonaire', 'BNR', 'BN'),
(167, 151, 'Curacao', 'CUR', 'CR'),
(168, 175, 'Alba', 'ABA', 'AB'),
(169, 175, 'Arad', 'ARD', 'AR'),
(170, 175, 'Arges', 'ARG', 'AG'),
(171, 175, 'Bacau', 'BAC', 'BC'),
(172, 175, 'Bihor', 'BIH', 'BH'),
(173, 175, 'Bistrita-Nasaud', 'BIS', 'BN'),
(174, 175, 'Botosani', 'BOT', 'BT'),
(175, 175, 'Braila', 'BRL', 'BL'),
(176, 175, 'Brasov', 'BRA', 'BR'),
(177, 175, 'Bucuresti', 'BUC', 'IF'),
(178, 175, 'Buzau', 'BUZ', 'BU'),
(179, 175, 'Calarasi', 'CAL', 'CL'),
(180, 175, 'Caras Severin', 'CRS', 'CS'),
(181, 175, 'Cluj', 'CLJ', 'CJ'),
(182, 175, 'Constanta', 'CST', 'CT'),
(183, 175, 'Covasna', 'COV', 'CV'),
(184, 175, 'Dambovita', 'DAM', 'DV'),
(185, 175, 'Dolj', 'DLJ', 'DJ'),
(186, 175, 'Galati', 'GAL', 'GL'),
(187, 175, 'Giurgiu', 'GIU', 'GR'),
(188, 175, 'Hargita', 'HRG', 'HR'),
(189, 175, 'Hunedoara', 'HUN', 'HN'),
(190, 175, 'Ialomita', 'IAL', 'IL'),
(191, 175, 'Iasi', 'IAS', 'IS'),
(192, 175, 'Ilfov', 'ILF', 'IF'),
(193, 175, 'Maramures', 'MAR', 'MM'),
(194, 175, 'Mehedinti', 'MEH', 'MH'),
(195, 175, 'Mures', 'MUR', 'MS'),
(196, 175, 'Neamt', 'NEM', 'NT'),
(197, 175, 'Olt', 'OLT', 'OT'),
(198, 175, 'Prahova', 'PRA', 'PR'),
(199, 175, 'Salaj', 'SAL', 'SJ'),
(200, 175, 'Satu Mare', 'SAT', 'ST'),
(201, 175, 'Sibiu', 'SIB', 'SB'),
(202, 175, 'Suceava', 'SUC', 'SV'),
(203, 175, 'Teleorman', 'TEL', 'TL'),
(204, 175, 'Timis', 'TIM', 'TM'),
(205, 175, 'Tulcea', 'TUL', 'TL'),
(206, 175, 'Valcea', 'VAL', 'VL'),
(207, 175, 'Vaslui', 'VAS', 'VS'),
(208, 175, 'Vreancea', 'VRA', 'VR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_tax_rate`
--

CREATE TABLE IF NOT EXISTS `jos_vm_tax_rate` (
  `tax_rate_id` int(11) NOT NULL auto_increment,
  `vendor_id` int(11) default NULL,
  `tax_state` varchar(64) default NULL,
  `tax_country` varchar(64) default NULL,
  `mdate` int(11) default NULL,
  `tax_rate` decimal(10,4) default NULL,
  PRIMARY KEY  (`tax_rate_id`),
  KEY `idx_tax_rate_vendor_id` (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='The tax rates for your store' AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `jos_vm_tax_rate`
--

INSERT INTO `jos_vm_tax_rate` (`tax_rate_id`, `vendor_id`, `tax_state`, `tax_country`, `mdate`, `tax_rate`) VALUES
(2, 1, 'CA', 'USA', 964565926, '0.0825');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_user_info`
--

CREATE TABLE IF NOT EXISTS `jos_vm_user_info` (
  `user_info_id` varchar(32) NOT NULL default '',
  `user_id` int(11) NOT NULL default '0',
  `address_type` char(2) default NULL,
  `address_type_name` varchar(32) default NULL,
  `company` varchar(64) default NULL,
  `title` varchar(32) default NULL,
  `last_name` varchar(32) default NULL,
  `first_name` varchar(32) default NULL,
  `middle_name` varchar(32) default NULL,
  `phone_1` varchar(32) default NULL,
  `phone_2` varchar(32) default NULL,
  `fax` varchar(32) default NULL,
  `address_1` varchar(64) NOT NULL default '',
  `address_2` varchar(64) default NULL,
  `city` varchar(32) NOT NULL default '',
  `state` varchar(32) NOT NULL default '',
  `country` varchar(32) NOT NULL default 'US',
  `zip` varchar(32) NOT NULL default '',
  `user_email` varchar(255) default NULL,
  `extra_field_1` varchar(255) default NULL,
  `extra_field_2` varchar(255) default NULL,
  `extra_field_3` varchar(255) default NULL,
  `extra_field_4` char(1) default NULL,
  `extra_field_5` char(1) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `perms` varchar(40) NOT NULL default 'shopper',
  `bank_account_nr` varchar(32) NOT NULL default '',
  `bank_name` varchar(32) NOT NULL default '',
  `bank_sort_code` varchar(16) NOT NULL default '',
  `bank_iban` varchar(64) NOT NULL default '',
  `bank_account_holder` varchar(48) NOT NULL default '',
  `bank_account_type` enum('Checking','Business Checking','Savings') NOT NULL default 'Checking',
  PRIMARY KEY  (`user_info_id`),
  KEY `idx_user_info_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Customer Information, BT = BillTo and ST = ShipTo';

--
-- Extraindo dados da tabela `jos_vm_user_info`
--

INSERT INTO `jos_vm_user_info` (`user_info_id`, `user_id`, `address_type`, `address_type_name`, `company`, `title`, `last_name`, `first_name`, `middle_name`, `phone_1`, `phone_2`, `fax`, `address_1`, `address_2`, `city`, `state`, `country`, `zip`, `user_email`, `extra_field_1`, `extra_field_2`, `extra_field_3`, `extra_field_4`, `extra_field_5`, `cdate`, `mdate`, `perms`, `bank_account_nr`, `bank_name`, `bank_sort_code`, `bank_iban`, `bank_account_holder`, `bank_account_type`) VALUES
('1d120c8005d6e838e5b4fb8963bd708d', 62, 'BT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', 'US', '', 'leonardo@devhouse.com.br', NULL, NULL, NULL, NULL, NULL, 1224706566, 0, 'shopper', '', '', '', '', '', 'Checking');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_vendor`
--

CREATE TABLE IF NOT EXISTS `jos_vm_vendor` (
  `vendor_id` int(11) NOT NULL auto_increment,
  `vendor_name` varchar(64) default NULL,
  `contact_last_name` varchar(32) NOT NULL default '',
  `contact_first_name` varchar(32) NOT NULL default '',
  `contact_middle_name` varchar(32) default NULL,
  `contact_title` varchar(32) default NULL,
  `contact_phone_1` varchar(32) NOT NULL default '',
  `contact_phone_2` varchar(32) default NULL,
  `contact_fax` varchar(32) default NULL,
  `contact_email` varchar(255) default NULL,
  `vendor_phone` varchar(32) default NULL,
  `vendor_address_1` varchar(64) NOT NULL default '',
  `vendor_address_2` varchar(64) default NULL,
  `vendor_city` varchar(32) NOT NULL default '',
  `vendor_state` varchar(32) NOT NULL default '',
  `vendor_country` varchar(32) NOT NULL default 'US',
  `vendor_zip` varchar(32) NOT NULL default '',
  `vendor_store_name` varchar(128) NOT NULL default '',
  `vendor_store_desc` text,
  `vendor_category_id` int(11) default NULL,
  `vendor_thumb_image` varchar(255) default NULL,
  `vendor_full_image` varchar(255) default NULL,
  `vendor_currency` varchar(16) default NULL,
  `cdate` int(11) default NULL,
  `mdate` int(11) default NULL,
  `vendor_image_path` varchar(255) default NULL,
  `vendor_terms_of_service` text NOT NULL,
  `vendor_url` varchar(255) NOT NULL default '',
  `vendor_min_pov` decimal(10,2) default NULL,
  `vendor_freeshipping` decimal(10,2) NOT NULL default '0.00',
  `vendor_currency_display_style` varchar(64) NOT NULL default '',
  PRIMARY KEY  (`vendor_id`),
  KEY `idx_vendor_name` (`vendor_name`),
  KEY `idx_vendor_category_id` (`vendor_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Vendors manage their products in your store' AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jos_vm_vendor`
--

INSERT INTO `jos_vm_vendor` (`vendor_id`, `vendor_name`, `contact_last_name`, `contact_first_name`, `contact_middle_name`, `contact_title`, `contact_phone_1`, `contact_phone_2`, `contact_fax`, `contact_email`, `vendor_phone`, `vendor_address_1`, `vendor_address_2`, `vendor_city`, `vendor_state`, `vendor_country`, `vendor_zip`, `vendor_store_name`, `vendor_store_desc`, `vendor_category_id`, `vendor_thumb_image`, `vendor_full_image`, `vendor_currency`, `cdate`, `mdate`, `vendor_image_path`, `vendor_terms_of_service`, `vendor_url`, `vendor_min_pov`, `vendor_freeshipping`, `vendor_currency_display_style`) VALUES
(1, 'Washupito''s Tiendita', 'Owner', 'Demo', 'Store', 'Mr.', '555-555-1212', '555-555-1212', '555-555-1212', 'marketing@maquel.com.br', '555-555-1212', '100 Washupito Avenue, N.W.', '', 'Lake Forest', 'CA', 'USA', '92630', 'Washupito''s Tiendita', '<p>We have the best tools for do-it-yourselfers.  Check us out! </p>\r\n		<p>We were established in 1969 in a time when getting good tools was expensive, but the quality was good.  Now that only a select few of those authentic tools survive, we have dedicated this store to bringing the experience alive for collectors and master mechanics everywhere.</p>\r\n		<p>You can easily find products selecting the category you would like to browse above.</p>', 0, '', 'c19970d6f2970cb0d1b13bea3af3144a.png', 'USD', 950302468, 968309845, 'shop_image/', '<h5>You haven''t configured any terms of service yet. Click <a href=administrator/index2.php?page=store.store_form&option=com_virtuemart>here</a> to change this text.</h5>', 'http://localhost/maquel', '0.00', '0.00', '1|$|2|.| |2|1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_vendor_category`
--

CREATE TABLE IF NOT EXISTS `jos_vm_vendor_category` (
  `vendor_category_id` int(11) NOT NULL auto_increment,
  `vendor_category_name` varchar(64) default NULL,
  `vendor_category_desc` text,
  PRIMARY KEY  (`vendor_category_id`),
  KEY `idx_vendor_category_category_name` (`vendor_category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='The categories that vendors are assigned to' AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `jos_vm_vendor_category`
--

INSERT INTO `jos_vm_vendor_category` (`vendor_category_id`, `vendor_category_name`, `vendor_category_desc`) VALUES
(6, '-default-', 'Default');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_visit`
--

CREATE TABLE IF NOT EXISTS `jos_vm_visit` (
  `visit_id` varchar(255) NOT NULL default '',
  `affiliate_id` int(11) NOT NULL default '0',
  `pages` int(11) NOT NULL default '0',
  `entry_page` varchar(255) NOT NULL default '',
  `exit_page` varchar(255) NOT NULL default '',
  `sdate` int(11) NOT NULL default '0',
  `edate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`visit_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Records the visit of an affiliate';

--
-- Extraindo dados da tabela `jos_vm_visit`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_waiting_list`
--

CREATE TABLE IF NOT EXISTS `jos_vm_waiting_list` (
  `waiting_list_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `notify_email` varchar(150) NOT NULL default '',
  `notified` enum('0','1') default '0',
  `notify_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`waiting_list_id`),
  KEY `product_id` (`product_id`),
  KEY `notify_email` (`notify_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Stores notifications, users waiting f. products out of stock' AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_vm_waiting_list`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_vm_zone_shipping`
--

CREATE TABLE IF NOT EXISTS `jos_vm_zone_shipping` (
  `zone_id` int(11) NOT NULL auto_increment,
  `zone_name` varchar(255) default NULL,
  `zone_cost` decimal(10,2) default NULL,
  `zone_limit` decimal(10,2) default NULL,
  `zone_description` text NOT NULL,
  `zone_tax_rate` int(11) NOT NULL default '0',
  PRIMARY KEY  (`zone_id`),
  KEY `zone_id` (`zone_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='The Zones managed by the Zone Shipping Module' AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `jos_vm_zone_shipping`
--

INSERT INTO `jos_vm_zone_shipping` (`zone_id`, `zone_name`, `zone_cost`, `zone_limit`, `zone_description`, `zone_tax_rate`) VALUES
(1, 'Default', '6.00', '35.00', 'This is the default Shipping Zone. This is the zone information that all countries will use until you assign each individual country to a Zone.', 2),
(2, 'Zone 1', '1000.00', '10000.00', 'This is a zone example', 2),
(3, 'Zone 2', '2.00', '22.00', 'This is the second zone. You can use this for notes about this zone', 2),
(4, 'Zone 3', '11.00', '64.00', 'Another usefull thing might be details about this zone or special instructions.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jos_weblinks`
--

CREATE TABLE IF NOT EXISTS `jos_weblinks` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `catid` int(11) NOT NULL default '0',
  `sid` int(11) NOT NULL default '0',
  `title` varchar(250) NOT NULL default '',
  `url` varchar(250) NOT NULL default '',
  `description` varchar(250) NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL default '0',
  `published` tinyint(1) NOT NULL default '0',
  `checked_out` int(11) NOT NULL default '0',
  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL default '0',
  `archived` tinyint(1) NOT NULL default '0',
  `approved` tinyint(1) NOT NULL default '1',
  `params` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `catid` (`catid`,`published`,`archived`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `jos_weblinks`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
