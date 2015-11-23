<?php

class ThemeHouse_EditUserDate_Listener_LoadClassController extends ThemeHouse_Listener_LoadClass
{
	/**
	 * Gets the classes that are extended for this add-on. See parent for explanation.
	 *
	 * @return array
	 */
	protected function _getExtends()
	{
		return array(
			'XenForo_ControllerAdmin_User' => 'ThemeHouse_EditUserDate_Extend_XenForo_ControllerAdmin_User', /* END 'XenForo_ControllerAdmin_User' */
		);
	} /* END ThemeHouse_EditUserDate_Listener_LoadClassController::_getExtends */

	public static function loadClassController($class, array &$extend)
	{
		$loadClassController = new ThemeHouse_EditUserDate_Listener_LoadClassController($class, $extend);
		$extend = $loadClassController->run();
	} /* END ThemeHouse_EditUserDate_Listener_LoadClassController::loadClassController */
}