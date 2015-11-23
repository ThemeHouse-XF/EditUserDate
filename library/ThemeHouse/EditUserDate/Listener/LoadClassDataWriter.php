<?php

class ThemeHouse_EditUserDate_Listener_LoadClassDataWriter extends ThemeHouse_Listener_LoadClass
{
	/**
	 * Gets the classes that are extended for this add-on. See parent for explanation.
	 *
	 * @return array
	 */
	protected function _getExtends()
	{
		return array(
			'XenForo_DataWriter_User' => 'ThemeHouse_EditUserDate_Extend_XenForo_DataWriter_User', /* END 'XenForo_DataWriter_User' */
		);
	} /* END ThemeHouse_EditUserDate_Listener_LoadClassDataWriter::_getExtends */

	public static function loadClassDataWriter($class, array &$extend)
	{
		$loadClassDataWriter = new ThemeHouse_EditUserDate_Listener_LoadClassDataWriter($class, $extend);
		$extend = $loadClassDataWriter->run();
	} /* END ThemeHouse_EditUserDate_Listener_LoadClassDataWriter::loadClassDataWriter */
}