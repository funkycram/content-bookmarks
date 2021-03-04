<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2021 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\content_bookmarks\assets;

use humhub\components\assets\AssetBundle;
use yii\web\View;

class Assets extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@content_bookmarks/resources';

    /**
     * @inheritDoc
     */
    public $js = [
        'js/humhub.content_bookmarks.js',
    ];

    /**
     * @inheritDoc
     */
    public $jsOptions = ['position' => View::POS_END];

    /**
     * @inheritDoc
     */
    public $publishOptions = [
        'forceCopy' => true
    ];
}