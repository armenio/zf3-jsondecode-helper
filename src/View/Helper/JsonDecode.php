<?php
/**
 * Rafael Armenio <rafael.armenio@gmail.com>
 *
 * @link http://github.com/armenio for the source repository
 */

namespace Armenio\JsonDecodeHelper\View\Helper;

use Zend\Json\Json as JsonFormatter;
use Zend\View\Helper\AbstractHelper;

/**
 * Class JsonDecode
 * @package Armenio\JsonDecodeHelper\View\Helper
 */
class JsonDecode extends AbstractHelper
{
    /**
     * @param $source
     * @param $objectDecodeType
     * @return mixed
     */
    public function __invoke($source, $objectDecodeType = JsonFormatter::TYPE_ARRAY)
    {
        return JsonFormatter::decode($source, $objectDecodeType);
    }
}
