var el = wp.element.createElement,
    registerBlockType = wp.blocks.registerBlockType,
    blockStyle = { backgroundColor: '#900', color: '#fff', padding: '20px' };
    // Specifying my block attributes

{
    images: {
        type: 'array',
        source: 'query'
        selector: 'img',
        query: {
            url: {
                type: 'string',
                source: 'attribute',
                attribute: 'src',
            },
            caption: {
                type: 'string',
                source: 'html',
                attribute: 'figcaption',
            },
        }
    }
}

registerBlockType( 'nox/galleryinfo', {
    title: 'Hello World (Step 1)',

    icon: 'universal-access-alt',

    category: 'layout',

    edit: function() {
        return el( 'p', { style: blockStyle }, 'Hello editor.', images.caption );
    },

    save: function() {
       return el( 'p', { style: blockStyle }, 'Hello saved content', images.caption );

},
} );




