import { Splide } from '@splidejs/splide';
import { Grid } from '@splidejs/splide-extension-grid';
import '@splidejs/splide/css';

let a = 11;

// new Splide( '.splide', {
//     perPage: 1,
//     mediaQuery: 'min',
//     breakpoints: {
//         768: {
//             perPage: 2,
//             gap: '1rem'
//         },
//         1280: {
//             perPage: 3,
//             grid: {
//                 rows: 2,
//                 columns: 3,
//                 gap: {
//                     row: '1rem',
//                     col: '1rem',
//                 }
//             },
//             destroy: a >= 12 ? true : false
//
//         }
//     }
// }).mount({ Grid });

let sliders = document.querySelectorAll('.slider-grid-images .splide');
sliders.forEach(slider => {
    let sliderItems = slider.dataset.itemsCount

    new Splide(slider, {
        arrows: false,
        perPage: 1,
        mediaQuery: 'min',
        breakpoints: {
            768: {
                perPage: 2,
                gap: '1rem'
            },
            1280: {
                perPage: 3,
                grid: {
                    rows: 2,
                    columns: 3,
                    gap: {
                        row: '1rem',
                        col: '1rem',
                    }
                },
                destroy: sliderItems <= 6

            }
        }
    }).mount({ Grid });
})