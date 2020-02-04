<?php
/**
 * Rafael Armenio <rafael.armenio@gmail.com>
 *
 * @link http://github.com/armenio
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
     * @param int $objectDecodeType
     * @return mixed
     */
    public function __invoke($source, $objectDecodeType = JsonFormatter::TYPE_ARRAY)
    {
        return JsonFormatter::decode($source, $objectDecodeType);
    }
}
