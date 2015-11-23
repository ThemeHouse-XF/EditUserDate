<?php

class ThemeHouse_EditUserDate_Install_Controller extends ThemeHouse_Install
{
    protected function _postInstall()
    {
        $this->_db->query('
			INSERT IGNORE INTO xf_phrase
				(language_id, title, phrase_text, global_cache, addon_id, version_id, version_string)
			VALUES
				(0, \'joined\', \'Joined\', 0, \'\', 0, \'\')
		');
    } /* END ThemeHouse_EditUserDate_Install_Controller::_postInstall */
}