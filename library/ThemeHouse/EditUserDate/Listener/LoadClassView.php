<?php

class ThemeHouse_EditUserDate_Listener_LoadClassView extends ThemeHouse_Listener_LoadClass
{
	/**
	 * Gets the classes that are extended for this add-on. See parent for explanation.
	 *
	 * @return array
	 */
	protected function _getExtends()
	{
		return array(
			'XenForo_ViewAdmin_User_Edit' => 'ThemeHouse_EditUserDate_Extend_XenForo_ViewAdmin_User_Edit', /* END 'XenForo_ViewAdmin_User_Edit' */
		);
	} /* END ThemeHouse_EditUserDate_Listener_LoadClassView::_getExtends */

	public static function loadClassView($class, array &$extend)
	{
		$loadClassView = new ThemeHouse_EditUserDate_Listener_LoadClassView($class, $extend);
		$extend = $loadClassView->run();
	} /* END ThemeHouse_EditUserDate_Listener_LoadClassView::loadClassView */
}