<?php
/**
*
* @package phpBB Extension - Forum Icons
* @copyright (c) 2021 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\forumicons\migrations;

class forumicons extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\dmzx\forumicons\migrations\forumicons_install',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['forumicons_version', '1.0.3']],
		];
	}
}
