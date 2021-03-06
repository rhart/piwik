<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package Piwik_Annotations
 */
use Piwik\Plugin;

/**
 * Annotations plugins. Provides the ability to attach text notes to
 * dates for each sites. Notes can be viewed, modified, deleted or starred.
 *
 * @package Piwik_Annotations
 */
class Piwik_Annotations extends Plugin
{
    /**
     * @see Piwik_Plugin::getListHooksRegistered
     */
    public function getListHooksRegistered()
    {
        return array(
            'AssetManager.getCssFiles' => 'getCssFiles',
            'AssetManager.getJsFiles'  => 'getJsFiles'
        );
    }

    /**
     * Adds css files for this plugin to the list in the event notification.
     */
    public function getCssFiles(&$cssFiles)
    {
        $cssFiles[] = "plugins/Annotations/stylesheets/annotations.less";
    }

    /**
     * Adds js files for this plugin to the list in the event notification.
     */
    public function getJsFiles(&$jsFiles)
    {
        $jsFiles[] = "plugins/Annotations/javascripts/annotations.js";
    }
}
