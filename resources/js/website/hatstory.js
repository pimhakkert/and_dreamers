import {PageFlip} from 'page-flip';

window.addEventListener('load', () => {
    const element = document.querySelector('#hatstory');
    const settings = {
        width: 550, // base page width
        height: 733, // base page height

        // set threshold values:
        minWidth: 315,
        maxWidth: 1000,
        minHeight: 200,
        maxHeight: 1350,

        showCover: true,
        size: "stretch",
        disableFlipByClick: true,
        maxShadowOpacity: 0.5,
        useMouseEvents: false,
        flippingTime: 600,
        mobileScrollSupport: false
    };

    const pageFlip = new PageFlip(element, settings);

    pageFlip.loadFromHTML(document.querySelectorAll('#hatstory .hatstory-page'));

    const previousButtons = document.querySelectorAll('.hatstory-previous');
    const nextButtons = document.querySelectorAll('.hatstory-next');

    for(let i=0; i<previousButtons.length; i++)
    {
        previousButtons[i].addEventListener('click', () => {
            pageFlip.flipPrev();
        });
    }

    for(let i=0; i<nextButtons.length; i++)
    {
        nextButtons[i].addEventListener('click', () => {
            console.log('next');
            pageFlip.flipNext();
        });
    }

});

