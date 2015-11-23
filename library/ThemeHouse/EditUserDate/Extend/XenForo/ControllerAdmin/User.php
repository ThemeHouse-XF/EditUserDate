<?php

/**
 * @see XenForo_ControllerAdmin_User
 */
class ThemeHouse_EditUserDate_Extend_XenForo_ControllerAdmin_User extends XFCP_ThemeHouse_EditUserDate_Extend_XenForo_ControllerAdmin_User
{
    /**
     * @see XenForo_ControllerAdmin_User::actionSave()
     */
    public function actionSave()
    {
        $GLOBALS['XenForo_ControllerAdmin_User'] = $this;

        return parent::actionSave();
    } /* END ThemeHouse_EditUserDate_Extend_XenForo_ControllerAdmin_User::actionSave */

    /**
    * @see XenForo_ControllerAdmin_User::actionValidateField()
    */
    public function actionValidateField()
    {
        $this->_assertPostOnly();

        $field = $this->_getFieldValidationInputParams();

        if ($field['name'] == 'register_date_day' or $field['name'] == 'register_date_year') {
            return $this->responseRedirect(
                XenForo_ControllerResponse_Redirect::SUCCESS,
                '',
                new XenForo_Phrase('redirect_field_validated', array('name' => $field['name'], 'value' => $field['value']))
            );
        } else  {
            return parent::actionValidateField();
        }
    } /* END ThemeHouse_EditUserDate_Extend_XenForo_ControllerAdmin_User::actionValidateField */
}