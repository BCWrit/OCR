<?php
/**
 * OCR
 *
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * OCR plugin.
 */
class OCRPlugin extends Omeka_Plugin_AbstractPlugin
{
    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
        'config_form',
        'public_items_show',
        'admin_items_show',
        'public_items_browse_each',
        'admin_items_browse_simple_each'
    );

    /**
     * @var array Filters for the plugin.
     */
    protected $_filters = array('admin_navigation_main');

    /**
     * Add the OCR link to the admin main navigation.
     * 
     * @param array Navigation array.
     * @return array Filtered navigation array.
     */
    public function filterAdminNavigationMain($nav)
    {
        $nav[] = array(
            'label' => __('OCR'),
            'uri' => url('ocr'),
        );
        return $nav;
    }
}
