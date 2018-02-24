<?php
/**
 * SiteModule AssetBundle
 *
 * @link      https://www.marbles.be
 * @copyright Copyright (c) 2017 marbles
 */

namespace modules\sitemodule\assetbundles\sitemodule;

use craft\redactor\assets\redactor\RedactorAsset;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    marbles
 * @package   SiteModule
 * @since     1.0.0
 * @inheritdoc
 */
class SiteModuleAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Set the path to our AssetBundle source
        $this->sourcePath = '@modules/sitemodule/assetbundles/sitemodule/dist';
        // Declare AssetBundles that must be loaded first
        $this->depends = [
            CpAsset::class,
        ];
        // Add in our CSS
        $this->css = [
            'css/SiteModule.css',
        ];
        // Add in our JS
        $this->js = [
            'js/SiteModule.js',
        ];

        parent::init();
    }
}
