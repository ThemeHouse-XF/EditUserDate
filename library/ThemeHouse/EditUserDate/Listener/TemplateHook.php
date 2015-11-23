<?php

class ThemeHouse_EditUserDate_Listener_TemplateHook extends ThemeHouse_Listener_TemplateHook {

    protected function _getHooks()
    {
        return array(
            'admin_user_edit_panes',
        );
    } /* END ThemeHouse_EditUserDate_Listener_TemplateHook::_getHooks() */

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $class = get_class();
        $templateHook = new $class($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    } /* END ThemeHouse_EditUserDate_Listener_TemplateHook::templateHook() */

    protected function _adminUserEditPanes()
    {
        $viewParams = $this->_fetchViewParams();
        if (isset($viewParams['user']['user_id']) && $viewParams['user']['user_id']) {
            if (XenForo_Application::$versionId >= 1010400) {
                $pattern = '#<dl class="ctrlUnit">\s*<dt>' . new XenForo_Phrase('joined') . ':.*</dd>\s*</dl>#Us';
                $this->_replaceWithTemplateAtPattern($pattern, "th_admin_user_edit_panes_edituserjoindate");
            } else {
                $pattern = '#<dl class="ctrlUnit">\s*<dt>' . new XenForo_Phrase('avatar') . ':.*</dd>\s*</dl>#Us';
                $this->_appendTemplateAtPattern($pattern, "th_admin_user_edit_panes_edituserjoindate");
            }
        } else {
            $viewParams['user']['register_date_month'] = date('n', XenForo_Application::$time);
            $viewParams['user']['register_date_day'] = date('j', XenForo_Application::$time);
            $viewParams['user']['register_date_year'] = date('Y', XenForo_Application::$time);
            $pattern = '#<dl class="ctrlUnit">\s*<dt><label for="ctrl_password">.*</dd>\s*</dl>#Us';
            $this->_appendTemplateAtPattern($pattern, "th_admin_user_edit_panes_edituserjoindate", $viewParams);
        }
    } /* END ThemeHouse_EditUserDate_Listener_TemplateHook::_adminUserEditPanes() */
}