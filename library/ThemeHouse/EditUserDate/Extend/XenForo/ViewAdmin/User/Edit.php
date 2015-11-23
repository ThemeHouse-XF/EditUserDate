<?php

/**
 * @see XenForo_ViewAdmin_User_Edit
 */
class ThemeHouse_EditUserDate_Extend_XenForo_ViewAdmin_User_Edit extends XFCP_ThemeHouse_EditUserDate_Extend_XenForo_ViewAdmin_User_Edit
{
    /**
     * @see XenForo_ViewAdmin_User_Edit::renderHtml()
     */
    public function renderHtml()
    {
        parent::renderHtml();

        if (isset($this->_params['user']['register_date'])) {
            $this->_params['user']['register_date_month'] = date("n", $this->_params['user']['register_date']);
            $this->_params['user']['register_date_day'] = date("j", $this->_params['user']['register_date']);
            $this->_params['user']['register_date_year'] = date("Y", $this->_params['user']['register_date']);
        }
    } /* END ThemeHouse_EditUserDate_Extend_XenForo_ViewAdmin_User_Edit::renderHtml */
}