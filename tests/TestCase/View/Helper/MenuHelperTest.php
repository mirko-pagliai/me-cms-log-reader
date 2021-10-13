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

namespace MeCms\LogReader\Test\TestCase\View\Helper;

use MeCms\TestSuite\MenuHelperTestCase;

/**
 * MenuHelperTest class
 * @property \MeCms\LogReader\View\Helper\MenuHelper $Helper
 */
class MenuHelperTest extends MenuHelperTestCase
{
    /**
     * Tests for `logs()` method
     * @test
     */
    public function testLogs(): void
    {
        $this->assertEmpty($this->Helper->logs());

        $this->writeAuthOnSession(['group' => ['name' => 'manager']]);
        $this->assertEmpty($this->Helper->logs());

        $this->writeAuthOnSession(['group' => ['name' => 'admin']]);
        [$links,,, $handledControllers] = $this->Helper->logs();
        $this->assertNotEmpty($links);
        $this->assertEquals(['Logs'], $handledControllers);
    }
}
