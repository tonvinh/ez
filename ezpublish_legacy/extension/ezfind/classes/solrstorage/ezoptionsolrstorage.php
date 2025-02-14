<?php

/**
 * File containing the ezoptionSolrStorage class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.07.0
 * @package ezfind
 */

class ezoptionSolrStorage extends ezdatatypeSolrStorage
{
    /**
     * @param eZContentObjectAttribute $contentObjectAttribute the attribute to serialize
     * @param eZContentClassAttribute $contentClassAttribute the content class of the attribute to serialize
     * @return array
     */
    public static function getAttributeContent( eZContentObjectAttribute $contentObjectAttribute, eZContentClassAttribute $contentClassAttribute )
    {
        $content = $contentObjectAttribute->attribute( 'content' );
        $optionArray = array(
            'name' => $content->attribute( 'name' ),
        );

        foreach ( $content->attribute( 'option_list' ) as $value )
        {
            $optionArray['option_list'][] = array(
                'id' => $value['id'],
                'value' => $value['value'],
                'additional_price' => $value['additional_price'],
                'is_default' => $value['is_default'],
            );
        }

        return array(
            'content' => $optionArray,
            'has_rendered_content' => false,
            'rendered' => null,
        );
    }
}

?>
