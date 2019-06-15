
@include('admin/layouts/layout')
<link rel="stylesheet" href="//unpkg.com/grapesjs/dist/css/grapes.min.css">
<script src="//unpkg.com/grapesjs"></script>
<link rel="stylesheet" href="./grapesjs/dist/css/grapes.min.css">
    <script src="./grapesjs/dist/grapes.js"></script>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="//feather.aviary.com/imaging/v3/editor.js"></script>
<script src="https://static.filestackapi.com/v3/filestack-0.1.10.js"></script>

    <!-- PLUGINS -->
    <script src="./toastr/toastr.js"></script>
    <link rel="stylesheet" href="./toastr/build/toastr.min.css">

    <script src="./grapesjs-blocks-basic/dist/grapesjs-blocks-basic.min.js"></script>
    <meta charset="utf-8">
    <title>GrapesJS</title>
    <style>
       .styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1.25rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #005a57;
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: #428bca;
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}
/* ADD */

    
    </style>
<form name="chartsave" action="/chart/save" method="POST">
@Csrf
<div class="form-group">

<label style="margin-top:10px;margin-bottom:10px;">Nom du chart graphique </label>
<input type="text" name="chartName" class="form-control">
</div>
<div id="gjs">
        
</div>


<script type="text/javascript">
     var prefix = document.getElementsByTagName("div")[0].getAttribute("id");

var editor = grapesjs.init({
    height: '510px',
    container: '#gjs',
    fromElement: 1,
    showOffsets: 1,
    avoidInlineStyle: 1,
    width: 'auto',
    storageManager: { autoload: 0 },
    styleManager: {
        clearProperties: 1
    },
    plugins: ['gjs-blocks-basic'],
pluginsOpts: {
        'gjs-blocks-basic': {},
        aviaryOpts: {
            key: '1'
        },
        blocksBasicOpts: {
            flexGrid: 1
        },
        customStyleManager: [{
            name: 'General',
            buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom'],

            properties: [{
                name: 'Alignment',
                property: 'float',
                type: 'radio',
                defaults: 'none',
                list: [{
                        value: 'none',
                        className: 'fa fa-times'
                    },
                    {
                        value: 'left',
                        className: 'fa fa-align-left'
                    },
                    {
                        value: 'right',
                        className: 'fa fa-align-right'
                    }
                ],
            },
            {
                property: 'position',
                type: 'select'
            }
        ],
    }, {
        name: 'Dimension',
        open: false,
        buildProps: ['width', 'flex-width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
        properties: [{
            id: 'flex-width',
            type: 'integer',
            name: 'Width',
            units: ['px', '%'],
            property: 'flex-basis',
            toRequire: 1,
        }, {
            property: 'margin',
            properties: [{
                    name: 'Top',
                    property: 'margin-top'
                },
                {
                    name: 'Right',
                    property: 'margin-right'
                },
                {
                    name: 'Bottom',
                    property: 'margin-bottom'
                },
                {
                    name: 'Left',
                    property: 'margin-left'
                }
            ],
        }, {
            property: 'padding',
            properties: [{
                    name: 'Top',
                    property: 'padding-top'
                },
                {
                    name: 'Right',
                    property: 'padding-right'
                },
                {
                    name: 'Bottom',
                    property: 'padding-bottom'
                },
                {
                    name: 'Left',
                    property: 'padding-left'
                }
            ],
        }],
    }, {
        name: 'Typography',
        open: false,
        buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-align', 'text-decoration', 'text-shadow'],
        properties: [{
                name: 'Font',
                property: 'font-family'
            },
            {
                name: 'Weight',
                property: 'font-weight'
            },
            {
                name: 'Font color',
                property: 'color'
            },
            {
                property: 'text-align',
                type: 'radio',
                defaults: 'left',
                list: [{
                        value: 'left',
                        name: 'Left',
                        className: 'fa fa-align-left'
                    },
                    {
                        value: 'center',
                        name: 'Center',
                        className: 'fa fa-align-center'
                    },
                    {
                        value: 'right',
                        name: 'Right',
                        className: 'fa fa-align-right'
                    },
                    {
                        value: 'justify',
                        name: 'Justify',
                        className: 'fa fa-align-justify'
                    }
                ],
            }, {
                property: 'text-decoration',
                type: 'radio',
                defaults: 'none',
                list: [{
                        value: 'none',
                        name: 'None',
                        className: 'fa fa-times'
                    },
                    {
                        value: 'underline',
                        name: 'underline',
                        className: 'fa fa-underline'
                    },
                    {
                        value: 'line-through',
                        name: 'Line-through',
                        className: 'fa fa-strikethrough'
                    }
                ],
            }, {
                property: 'text-shadow',
                properties: [{
                        name: 'X position',
                        property: 'text-shadow-h'
                    },
                    {
                        name: 'Y position',
                        property: 'text-shadow-v'
                    },
                    {
                        name: 'Blur',
                        property: 'text-shadow-blur'
                    },
                    {
                        name: 'Color',
                        property: 'text-shadow-color'
                    }
                ],
            }
        ],
    }, {
        name: 'Decorations',
        open: false,
        buildProps: ['opacity', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
        properties: [{
            type: 'slider',
            property: 'opacity',
            defaults: 1,
            step: 0.01,
            max: 1,
            min: 0,
        }, {
            property: 'border-radius',
            properties: [{
                    name: 'Top',
                    property: 'border-top-left-radius'
                },
                {
                    name: 'Right',
                    property: 'border-top-right-radius'
                },
                {
                    name: 'Bottom',
                    property: 'border-bottom-left-radius'
                },
                {
                    name: 'Left',
                    property: 'border-bottom-right-radius'
                }
            ],
        }, {
            property: 'box-shadow',
            properties: [{
                    name: 'X position',
                    property: 'box-shadow-h'
                },
                {
                    name: 'Y position',
                    property: 'box-shadow-v'
                },
                {
                    name: 'Blur',
                    property: 'box-shadow-blur'
                },
                {
                    name: 'Spread',
                    property: 'box-shadow-spread'
                },
                {
                    name: 'Color',
                    property: 'box-shadow-color'
                },
                {
                    name: 'Shadow type',
                    property: 'box-shadow-type'
                }
            ],
        }, {
            property: 'background',
            properties: [{
                    name: 'Image',
                    property: 'background-image'
                },
                {
                    name: 'Repeat',
                    property: 'background-repeat'
                },
                {
                    name: 'Position',
                    property: 'background-position'
                },
                {
                    name: 'Attachment',
                    property: 'background-attachment'
                },
                {
                    name: 'Size',
                    property: 'background-size'
                }
            ],
        }, ],
    },
     {
        name: 'Flex',
        open: false,
        properties: [{
            name: 'Flex Container',
            property: 'display',
            type: 'select',
            defaults: 'block',
            list: [{
                    value: 'block',
                    name: 'Disable'
                },
                {
                    value: 'flex',
                    name: 'Enable'
                }
            ],
        }, {
            name: 'Flex Parent',
            property: 'label-parent-flex',
            type: 'integer',
        }, {
            name: 'Direction',
            property: 'flex-direction',
            type: 'radio',
            defaults: 'row',
            list: [{
                value: 'row',
                name: 'Row',
                className: 'icons-flex icon-dir-row',
                title: 'Row',
            }, {
                value: 'row-reverse',
                name: 'Row reverse',
                className: 'icons-flex icon-dir-row-rev',
                title: 'Row reverse',
            }, {
                value: 'column',
                name: 'Column',
                title: 'Column',
                className: 'icons-flex icon-dir-col',
            }, {
                value: 'column-reverse',
                name: 'Column reverse',
                title: 'Column reverse',
                className: 'icons-flex icon-dir-col-rev',
            }],
        }, {
            name: 'Justify',
            property: 'justify-content',
            type: 'radio',
            defaults: 'flex-start',
            list: [{
                value: 'flex-start',
                className: 'icons-flex icon-just-start',
                title: 'Start',
            }, {
                value: 'flex-end',
                title: 'End',
                className: 'icons-flex icon-just-end',
            }, {
                value: 'space-between',
                title: 'Space between',
                className: 'icons-flex icon-just-sp-bet',
            }, {
                value: 'space-around',
                title: 'Space around',
                className: 'icons-flex icon-just-sp-ar',
            }, {
                value: 'center',
                title: 'Center',
                className: 'icons-flex icon-just-sp-cent',
            }],
        }, {
            name: 'Align',
            property: 'align-items',
            type: 'radio',
            defaults: 'center',
            list: [{
                value: 'flex-start',
                title: 'Start',
                className: 'icons-flex icon-al-start',
            }, {
                value: 'flex-end',
                title: 'End',
                className: 'icons-flex icon-al-end',
            }, {
                value: 'stretch',
                title: 'Stretch',
                className: 'icons-flex icon-al-str',
            }, {
                value: 'center',
                title: 'Center',
                className: 'icons-flex icon-al-center',
            }],
        }, {
            name: 'Flex Children',
            property: 'label-parent-flex',
            type: 'integer',
        }, {
            name: 'Order',
            property: 'order',
            type: 'integer',
            defaults: 0,
            min: 0
        }, {
            name: 'Flex',
            property: 'flex',
            type: 'composite',
            properties: [{
                name: 'Grow',
                property: 'flex-grow',
                type: 'integer',
                defaults: 0,
                min: 0
            }, {
                name: 'Shrink',
                property: 'flex-shrink',
                type: 'integer',
                defaults: 0,
                min: 0
            }, {
                name: 'Basis',
                property: 'flex-basis',
                type: 'integer',
                units: ['px', '%', ''],
                unit: '',
                defaults: 'auto',
            }],
        }, {
            name: 'Align',
            property: 'align-self',
            type: 'radio',
            defaults: 'auto',
            list: [{
                value: 'auto',
                name: 'Auto',
            }, {
                value: 'flex-start',
                title: 'Start',
                className: 'icons-flex icon-al-start',
            }, {
                value: 'flex-end',
                title: 'End',
                className: 'icons-flex icon-al-end',
            }, {
                value: 'stretch',
                title: 'Stretch',
                className: 'icons-flex icon-al-str',
            }, {
                value: 'center',
                title: 'Center',
                className: 'icons-flex icon-al-center',
            }],
        }]
    }]
},
assetManager: {
    assets: [
     'http://placehold.it/350x250/78c5d6/fff/image1.jpg',
     // Pass an object with your properties
     {
       type: 'image',
       src: 'http://placehold.it/350x250/459ba8/fff/image2.jpg',
       height: 350,
       width: 250
     },
     {
       // As the 'image' is the base type of assets, omitting it will
       // be set as `image` by default
       src: 'http://placehold.it/350x250/79c267/fff/image3.jpg',
       height: 350,
       width: 250
     },
    ],
  }

});


var pn = editor.Panels;
var modal = editor.Modal;
/*editor.Commands.add('canvas-clear', function() {
if (confirm('Are you sure to clean the canvas?')) {
    var comps = editor.DomComponents.clear();
    setTimeout(function() {
        localStorage.clear()
    }, 0)
}
});*/




// Simple warn notifier
var origWarn = console.warn;
toastr.options = {
closeButton: true,
preventDuplicates: true,
showDuration: 250,
hideDuration: 150
};
console.warn = function(msg) {
if (msg.indexOf('[undefined]') == -1) {
    toastr.warning(msg);
}
origWarn(msg);
};


// Add and beautify tooltips
[
['sw-visibility', 'Show Borders'],
['preview', 'Preview'],
['fullscreen', 'Fullscreen'],
['export-template', 'Export'],
['undo', 'Undo'],
['redo', 'Redo'],
['gjs-open-import-webpage', 'Import'],
['canvas-clear', 'Clear canvas']
]
.forEach(function(item) {
pn.getButton('options', item[0]).set('attributes', {
    title: item[1],
    'data-tooltip-pos': 'bottom'
});
});
[
['open-sm', 'Style Manager'],
['open-layers', 'Layers'],
['open-blocks', 'Blocks']
]
.forEach(function(item) {
pn.getButton('views', item[0]).set('attributes', {
    title: item[1],
    'data-tooltip-pos': 'bottom'
});
});
var titles = document.querySelectorAll('*[title]');

for (var i = 0; i < titles.length; i++) {
var el = titles[i];
var title = el.getAttribute('title');
title = title ? title.trim() : '';
if (!title)
    break;
el.setAttribute('data-tooltip', title);
el.setAttribute('title', '');
}

// Show borders by default
pn.getButton('options', 'sw-visibility').set('active', 1);





// Do stuff on load
editor.on('load', function() {
localStorage.clear();
//var $ = grapesjs.$;


// Move Ad
//$('#gjs').append($('.ad-cont'));
});




//window.editor = editor;
</script>

      <style>

            #gjs {
  border: 3px solid #444;
}

/* Reset some default styling */
.gjs-cv-canvas {
  top: 0;
  width: 100%;
  height: 100%;
}
.gjs-block-svg {
    width: 50%;
}

.gjs-block-svg-path {
  fill: white;
}

        </style>
        
        <textarea name="htmlcode" id="htmlcode" style="display:none"></textarea>
        <textarea id="csscode" name="csscode" style="display:none"></textarea>
        
        <input class="favorite styled" type="submit" value="Enregistrer" onclick="SetHtmlToTextarea()">
        
        </form>
        <script>
        editor.clear();
        function SetHtmlToTextarea(){
            $('#htmlcode').val(editor.getHtml());
            $('#csscode').val(editor.getCss());
        }
        
        </script>
@include('admin/layouts/nav')
