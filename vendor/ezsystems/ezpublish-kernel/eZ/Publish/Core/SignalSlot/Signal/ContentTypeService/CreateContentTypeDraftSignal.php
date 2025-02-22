<?php
/**
 * CreateContentTypeDraftSignal class
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.07.0
 */

namespace eZ\Publish\Core\SignalSlot\Signal\ContentTypeService;

use eZ\Publish\Core\SignalSlot\Signal;

/**
 * CreateContentTypeDraftSignal class
 * @package eZ\Publish\Core\SignalSlot\Signal\ContentTypeService
 */
class CreateContentTypeDraftSignal extends Signal
{
    /**
     * ContentTypeId
     *
     * @var mixed
     */
    public $contentTypeId;
}
