<?php

class ThemeHouse_DeleteAttach_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_DeleteAttach' => array(
                'model' => array(
                    'XenForo_Model_Attachment',
                ), /* END 'model' */
            ), /* END 'ThemeHouse_DeleteAttach' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_DeleteAttach_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */
}