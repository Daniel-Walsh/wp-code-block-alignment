wp.hooks.addFilter(
    'blocks.registerBlockType',
    'code-block-alignment/danwalsh',
    function( settings, name ) {
        if ( name === 'core/code' ) {
            return lodash.assign( {}, settings, {
                supports: lodash.assign( {}, settings.supports, {
                    align: ['wide', 'center'], 
                } ),
                attributes: lodash.assign( {}, settings.attributes, {
                    align: {
                        type: 'string',
                        default: 'wide'
                    },
                } ),
            } );
        }
        return settings;
    }
);
