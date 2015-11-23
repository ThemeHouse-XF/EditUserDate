<?php

/**
 * @see XenForo_DataWriter_User
 */
class ThemeHouse_EditUserDate_Extend_XenForo_DataWriter_User extends XFCP_ThemeHouse_EditUserDate_Extend_XenForo_DataWriter_User
{
    /**
     * Pre-save handling.
     */
    protected function _preSave()
    {
        parent::_preSave();

        if (isset($GLOBALS['XenForo_ControllerAdmin_User'])) {
            /* @var $controller XenForo_ControllerAdmin_User */
            $controller = $GLOBALS['XenForo_ControllerAdmin_User'];

            $userInput = $controller->getInput()->filter(array(
                'register_date_month' => XenForo_Input::UINT,
                'register_date_day' => XenForo_Input::UINT,
                'register_date_year' => XenForo_Input::UINT,
            ));

            $registerDate = mktime(0, 0, 0, $userInput['register_date_month'], $userInput['register_date_day'], $userInput['register_date_year']);

            $this->set('register_date', $registerDate);
        }
    } /* END ThemeHouse_EditUserDate_Extend_XenForo_DataWriter_User::_preSave */
}