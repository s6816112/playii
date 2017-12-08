<?php

namespace Playii\Exercise\Ex0001;

use yii\web\Application;

/**
 * 说明：
 *
 * - 注释里的Application都是指`yii\web\Application`
 * - 提供了createDummyApplication()方法，可获取Application对象
 */
class Ex
{
    /**
     * 获取Application所有默认组件（Core components）的类名，
     * 返回值为类名的数组，按SORT_REGULAR方式排序。
     *
     * @return array
     */
    public function getSortedCoreComponentClassNames()
    {
        $app = $this->createDummyApplication();
        $coreComponents = $app->coreComponents();
        $mytest = [];
        foreach ($coreComponents as $key => $value) {
            $mytest[] = $value['class'];

        }

        sort($mytest, SORT_REGULAR);
        return $mytest;
    }

    /**
     * 创建一个Application对象
     *
     * @return \yii\web\Application
     */
    protected function createDummyApplication()
    {
        $config = [
            'id' => 'playii-exercise',
            'basePath' => __DIR__,
        ];

        $app = new Application($config);

        return $app;
    }
}
