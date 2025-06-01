<?php

/*
 * This file is part of the light/yii2-swagger.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace light\swagger;

use yii\web\AssetBundle;

/**
 * Assets bundle for swagger-ui.
 */
class SwaggerUIAsset extends AssetBundle
{
    public $js = [
        'swagger-ui-bundle.js',
        'swagger-ui-standalone-preset.js',
    ];

    public $css = [
        'swagger-ui.css'
    ];

    public $depends = [];

    public function init() {
        $this->basePath = '@webroot/appAssets/swagger-ui';
        $this->baseUrl = $_ENV['APP_ASSETS_BASE_URL'] . '/swagger-ui';
    }
}
