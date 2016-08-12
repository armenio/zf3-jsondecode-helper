<?php
/**
 * Rafael Armenio <rafael.armenio@gmail.com>
 *
 * @link http://github.com/armenio for the source repository
 */

namespace Armenio\JsonDecodeHelper;

/**
 * Class Module
 * @package Armenio\JsonDecodeHelper
 */
class Module
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include dirname(__DIR__) . '/config/module.config.php';
    }
}
