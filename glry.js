function wpse298225GallerySaveElement( element, blockType, attributes ) {
    if ( blockType.name !== 'core/gallery' ) {
        return element;
    }

    var newElement = wp.element.createElement(
        'ul',
        {
            'className': 'wp-block-gallery my-gallery',
        },
        attributes.images.map(
            function( image ) {
                return wp.element.createElement(
                    'li',
                    {
                        'className': 'blocks-gallery-item my-gallery-item',
                    },
                    wp.element.createElement(
                        'img',
                        {
                            'src': image.url,
                        }
                    )
                )
            }
        )
    )

    return newElement
}
