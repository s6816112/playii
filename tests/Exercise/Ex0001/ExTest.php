<?php

namespace Playii\Tests\Exercise;

use PHPUnit\Framework\TestCase;
use Playii\Exercise\Ex0001\Ex;

class ExTest extends TestCase
{
    public function testCoreComponentClasses()
    {
        $expected = [
            'yii\log\Dispatcher',
            'yii\web\View',
            'yii\i18n\Formatter',
            'yii\i18n\I18N',
            'yii\swiftmailer\Mailer',
            'yii\web\UrlManager',
            'yii\web\AssetManager',
            'yii\base\Security',
            'yii\web\Request',
            'yii\web\Response',
            'yii\web\Session',
            'yii\web\User',
            'yii\web\ErrorHandler',
        ];
        sort($expected, SORT_REGULAR);

        $ex = new Ex();

        $this->assertEquals(
            $expected,
            $ex->getSortedCoreComponentClassNames()
        );
    }
}
