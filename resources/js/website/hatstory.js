import {PageFlip} from 'page-flip';

window.addEventListener('load', () => {
    const element = document.querySelector('#hatstory');
    const settings = {
        width: 500, // base page width
        height: 600, // base page height

        // set threshold values:
        minWidth: 225,
        maxWidth: 600,
        minHeight: 200,
        maxHeight: 600,

        showCover: true,
        size: "stretch",
        disableFlipByClick: true,
        maxShadowOpacity: 0.5,
        useMouseEvents: false,
        flippingTime: 600,
        mobileScrollSupport: false
    };

    console.log(settings);

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
            pageFlip.flipNext();
        });
    }

    document.querySelector('#mobile-prev').addEventListener('click', () => {
        pageFlip.flipPrev();
    });

    document.querySelector('#mobile-next').addEventListener('click', () => {
        pageFlip.flipNext();
    });

});

