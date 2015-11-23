<?php

/**
 *
 * @see XenForo_Model_Attachment
 */
class ThemeHouse_DeleteAttach_Extend_XenForo_Model_Attachment extends XFCP_ThemeHouse_DeleteAttach_Extend_XenForo_Model_Attachment
{

    /**
     * 
     * @see XenForo_Model_Attachment::canDeleteAttachment()
     */
    public function canDeleteAttachment(array $attachment, $tempHash = '', array $viewingUser = null)
    {
        $this->standardizeViewingUserReference($viewingUser);
        
        if (empty($attachment['temp_hash']) || !empty($attachment['content_id'])) {
            if (!XenForo_Permission::hasPermission($viewingUser['permissions'], 'general', 'deleteAttachment')) {
                return false;
            }
        }
        
        return parent::canDeleteAttachment($attachment, $tempHash, $viewingUser);
    } /* END canDeleteAttachment */
}