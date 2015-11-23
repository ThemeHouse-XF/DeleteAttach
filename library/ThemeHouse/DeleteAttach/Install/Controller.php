<?php

class ThemeHouse_DeleteAttach_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/delete-attachments-permission.2165/';

    protected function _getPermissionEntries()
    {
        return array(
            'general' => array(
                'deleteAttachment' => array(
                    'permission_group_id' => 'forum', /* 'permission_group_id' */
                    'permission_id' => 'deleteOwnPost', /* 'permission_id' */
                ), /* 'deleteAttachment' */
            ), /* 'general' */
        );
    } /* END _getPermissionEntries */
}