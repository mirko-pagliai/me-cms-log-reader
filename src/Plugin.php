<?php
declare(strict_types=1);

/**
 * This file is part of me-cms-log-reader.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright   Copyright (c) Mirko Pagliai
 * @link        https://github.com/mirko-pagliai/me-cms
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */

namespace MeCms\LogReader;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use MeCms\Plugin as MeCms;

/**
 * Plugin class
 */
class Plugin extends BasePlugin
{
    /**
     * Load all the application configuration and bootstrap logic
     * @param \Cake\Core\PluginApplicationInterface $app The host application
     * @return void
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
        if (!$app->getPlugins()->has('MeCms')) {
            $app->addPlugin(MeCms::class);
        }

        parent::bootstrap($app);
    }
}
