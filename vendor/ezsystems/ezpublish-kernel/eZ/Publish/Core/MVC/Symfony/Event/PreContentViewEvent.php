<?php
/**
 * File containing the PreContentViewEvent class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.07.0
 */

namespace eZ\Publish\Core\MVC\Symfony\Event;

use Symfony\Component\EventDispatcher\Event;
use eZ\Publish\Core\MVC\Symfony\View\ContentViewInterface;

/**
 * The PreContentViewEvent allows you to inject additional parameters to a content view template.
 * To do this, get the ContentView object and add it what you need as params :
 *
 * <code>
 * $contentView = $event->getContentView();
 * // Returns the location when applicable (viewing a location basically)
 * if ( $contentView->hasParameter( 'location' ) )
 *     $location = $contentView->getParameter( 'location' );
 *
 * // Content is always available.
 * $content = $contentView->getParameter( 'content' );
 *
 * // Set your own variables that will be exposed in the template
 * // The following will expose "foo" and "complex" variables in the view template.
 * $contentView->addParameters(
 *     array(
 *         'foo'     => 'bar',
 *         'complex' => $someObject
 *     )
 * );
 * </code>
 */
class PreContentViewEvent extends Event
{
    /**
     * @var \eZ\Publish\Core\MVC\Symfony\View\ContentView
     */
    private $contentView;

    public function __construct( ContentViewInterface $contentView )
    {
        $this->contentView = $contentView;
    }

    /**
     * @return \eZ\Publish\Core\MVC\Symfony\View\ContentView
     */
    public function getContentView()
    {
        return $this->contentView;
    }
}
