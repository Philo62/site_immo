/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
import '../css/app.css';

global.$ = global.jQuery = $;
// any CSS you require will output into a single css file (app.css in this case)

require('../css/app.css');
require('select2')
$('select').select2()

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

import noUiSlider from 'nouislider'
import 'nouislider/distribute/nouislider.css'
/**
const slider = document.getElementById('price-slider');

if (slider) {
    const min= document.getElementById('min')
    const max= document.getElementById('max')
    const range = noUiSlider.create(slider, {
        
        start: [0, 100],
        connect: true,
        step: 10,
        orientation: 'horizontal',
        range: {
            'min': 0,
            'max': 1000
        }
    })


    range.on('slide', function (values, handle) {
        if (handle === 0) {

            min.value = Math.round(values[0])
        }
        if (handle === 1) {

            max.value = Math.round(values[1])
        }
        console.log(values, handle)
    })
}
 */
const slider = document.getElementById('price-slider');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});


