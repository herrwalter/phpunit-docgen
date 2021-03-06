<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * ToHtmlTest.php
 *
 * LICENSE: This source file is created by the company around Mike Pretzlaw
 * located in Germany also known as rmp-up. All its contents are proprietary
 * and under german copyright law. Consider this file as closed source and/or
 * without the permission to reuse or modify its contents.
 * This license is available through the world-wide-web at the following URI:
 * https://mike-pretzlaw.de/license-generic.txt . If you did not receive a copy
 * of the license and are unable to obtain it through the web, please send a
 * note to mail@mike-pretzlaw.de so we can mail you a copy.
 *
 * @package    phpunit-docgen
 * @copyright  2019 Mike Pretzlaw
 * @license    https://mike-pretzlaw.de/license-generic.txt
 * @link       https://project.mike-pretzlaw.de/phpunit-docgen
 * @since      2019-06-09
 */

declare(strict_types=1);

namespace Pretzlaw\PHPUnit\DocGen\Test\DocComment;

use Pretzlaw\PHPUnit\DocGen\Parser;
use Pretzlaw\PHPUnit\DocGen\Test\TestCase;

/**
 * Html
 *
 * This part should be turned into markdown.
 *
 * It contains an enumeration:
 *
 * 1. One
 * 2. Two
 * 3. Four
 *
 * And an itemization:
 *
 * * Itemi
 * * zation
 *
 * @copyright  2019 Mike Pretzlaw (https://mike-pretzlaw.de)
 * @since      2019-06-09
 */
class ToHtmlTest extends TestCase
{
    public function testHeading()
    {
        $html = $this->classComment()->html();

        static::assertContains('<h1>Html</h1>', $html);
        static::assertContains('<li>One</li>', $html);
        static::assertContains('<li>Itemi</li>', $html);
    }
}