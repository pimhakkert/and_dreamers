import {PageFlip} from './page-flip';

window.addEventListener('load', () => {
    const element = document.querySelector('#hatstory');
    const settings = {
        width: 500, // base page width
        height: 700, // base page height

        // set threshold values:
        minWidth: 225,
        maxWidth: 1500,
        minHeight: 200,
        maxHeight: 700,

        showCover: true,
        size: "stretch",
        disableFlipByClick: true,
        maxShadowOpacity: 0.5,
        useMouseEvents: false,
        flippingTime: 750,
        mobileScrollSupport: false
    };

    const pageFlip = new PageFlip(element, settings);

    pageFlip.loadFromHTML(document.querySelectorAll('#hatstory .hatstory-page'));

    const previousButtons = document.querySelectorAll('.hatstory-previous');
    const nextButtons = document.querySelectorAll('.hatstory-next');

    for (let i = 0; i < previousButtons.length; i++) {
        previousButtons[i].addEventListener('click', () => {
            flipPrev(pageFlip);
        });
    }

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener('click', () => {
            flipNext(pageFlip);
        });
    }

    document.querySelector('#mobile-prev').addEventListener('click', () => {
        flipPrev(pageFlip);
    });

    document.querySelector('#mobile-next').addEventListener('click', () => {
        flipNext(pageFlip);
    });

    function flipPrev(pageFlip)
    {
        // document.body.classList.add('noscroll');
        pageFlip.flipPrev();
    }

    function flipNext(pageFlip)
    {
        // document.body.classList.add('noscroll');
        pageFlip.flipNext();
    }

    pageFlip.on('flip', (e) => {
            document.body.classList.remove('noscroll');
        }
    );
});


