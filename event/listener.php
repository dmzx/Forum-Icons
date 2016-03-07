<?php
/**
*
* @package phpBB Extension - Forum Icons
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\forumicons\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var string phpBB root path */
	protected $phpbb_root_path;

	/**
	* Constructor
	*
	* @param \phpbb\template\template $template
	* @param $phpbb_root_path
	*
	*/
	public function __construct(\phpbb\template\template $template, $phpbb_root_path)
	{
		$this->template = $template;
		$this->phpbb_root_path = $phpbb_root_path;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_manage_forums_initialise_data'	=> 'acp_manage_forums_initialise_data',
			'core.acp_manage_forums_display_form'		=> 'acp_manage_forums_display_form',
		);
	}

	// Default settings for new forums
	public function acp_manage_forums_initialise_data($event)
	{
		$array = $event['forum_data'];

		$dirslist = ' ';

		$dirs = dir($this->phpbb_root_path . 'images/forumicons/');
		while ($file = $dirs->read())
		{
			if (stripos($file, ".gif") ||	stripos($file, ".png"))
			{
				$dirslist .= "$file ";
			}
		}
		closedir($dirs->handle);
		$dirslist = explode(" ", $dirslist);
		sort($dirslist);

		for ($i = 0; $i < sizeof($dirslist); $i++)
		{
			if ($dirslist[$i] != '')
			{
				$this->template->assign_block_vars('forum_img_file_name', array('FORUM_IMAGE_OPT' => $dirslist[$i]));
			}
		}
		$dirslist = '';

		$event['forum_data'] = $array;
	}

	// ACP forums template output
	public function acp_manage_forums_display_form($event)
	{
		$array = $event['template_data'];
		$array['FORUM_IMAGE_SRC_PATH'] = $this->phpbb_root_path . 'images/forumicons/';
		$array['FORUM_IMAGE_PATH'] = 'images/forumicons/';
		$event['template_data'] = $array;
	}
}
