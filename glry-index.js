/**
 * WordPress dependencies
 */
import '@wordpress/core-data';
import {
    registerBlockType,
    setDefaultBlockName,
    setFreeformContentHandlerName,
    setUnregisteredTypeHandlerName,
} from '@wordpress/blocks';

/**
 * Internal dependencies
 */

import * as nox-gallery from './nox-gallery';


export const registerCoreBlocks = () => {
    [
        // Common blocks are grouped at the top to prioritize their display
        // in various contexts — like the inserter and auto-complete components.
       
        gallery,
      
    ].forEach( ( block ) => {
        if ( ! block ) {
            return;
        }
        const { name, settings } = block;
        registerBlockType( name, settings );
    } );
};
