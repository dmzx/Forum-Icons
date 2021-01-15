<?php
/**
*
* @package phpBB Extension - Forum Icons
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\forumicons\migrations;

class forumicons_install extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['forumicons_version']) && version_compare($this->config['forumicons_version'], '1.0.2', '>=');
	}

	static public function depends_on()
	{
		return [
			'\phpbb\db\migration\data\v31x\v311'
		];
	}

	public function update_data()
	{
		return [
			// Add config
			['config.add', ['forumicons_version', '1.0.2']],
			// Add upload directory
			['custom', [[$this, 'upload_directory']]],
		];
	}

	public function upload_directory()
	{
		$directory = 'images/forumicons';

		if (!is_dir($this->phpbb_root_path . $directory))
		{
			@mkdir($this->phpbb_root_path . $directory, 0755);
			@chmod($this->phpbb_root_path . $directory, 0755);

			if (!is_dir($this->phpbb_root_path . $directory))
			{
				$directory = 'forumicons';
			}
		}
	}
}
