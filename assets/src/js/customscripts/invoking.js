
// Look for .hamburger
var hamburger = document.querySelector(".hamburger");
// On click
hamburger.addEventListener("click", function ()
{
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu

});

// everything that has to be run after domReady
domReady(function ()
{
    //- Slab Text stuff
    jQuery(".slabtarget").slabText({
        // Don't slabtext the headers if the viewport is under 768px
        "viewportBreakpoint": 768
    });

    //- Parallax.js
    var sceneElements = document.querySelectorAll('.parallaxin');

    // ...then loop over the scene elements and create the Parallax instances
    var parallaxScenes = [];
    for (var i = 0; i < sceneElements.length; i++)
    {
        parallaxScenes.push(new Parallax(sceneElements[i]))
    }


    var sceneElements = document.querySelectorAll('.parallaxin2');

    // ...then loop over the scene elements and create the Parallax instances
    var parallaxScenes = [];
    for (var i = 0; i < sceneElements.length; i++)
    {
        parallaxScenes.push(new Parallax(sceneElements[i]))
    }

    //This steals iframes
    jQuery('p:has(iframe)').css('padding', '0 !important');

});



//- Hamburger Bootstrap Collapse code
(function ()
{
    var d = document,
        accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
        setAria,
        setAccordionAria,
        switchAccordion,
        touchSupported = ('ontouchstart' in window),
        pointerSupported = ('pointerdown' in window);

    skipClickDelay = function (e)
    {
        e.preventDefault();
        e.target.click();
    }

    setAriaAttr = function (el, ariaType, newProperty)
    {
        el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function (el1, el2, expanded)
    {
        switch (expanded)
        {
            case "true":
                setAriaAttr(el1, 'aria-expanded', 'true');
                setAriaAttr(el2, 'aria-hidden', 'false');
                break;
            case "false":
                setAriaAttr(el1, 'aria-expanded', 'false');
                setAriaAttr(el2, 'aria-hidden', 'true');
                break;
            default:
                break;
        }
    };
    //function
    switchAccordion = function (e)
    {

        e.preventDefault();
        var thisAnswer = e.target.parentNode.nextElementSibling;
        var thisQuestion = e.target;
        if (thisAnswer.classList.contains('is-collapsed'))
        {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        } else
        {
            setAccordionAria(thisQuestion, thisAnswer, 'false');
        }
        thisQuestion.classList.toggle('is-collapsed');
        thisQuestion.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('is-collapsed');
        thisAnswer.classList.toggle('is-expanded');

        thisAnswer.classList.toggle('animateIn');
    };
    for (var i = 0, len = accordionToggles.length; i < len; i++)
    {
        if (touchSupported)
        {
            accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
        }
        if (pointerSupported)
        {
            accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
        }
        accordionToggles[i].addEventListener('click', switchAccordion, false);
    }
})();


//-Lazy Loader
jQuery(function ()
{
    //target each gallery to add lazy load functionality
    jQuery('.gallery').each(function ()
    {
        // set the rel for each gallery
        jQuery(this).find(".gallery-icon a").attr('data-fancybox', 'group-' + jQuery(this).attr('id'));
    });

    //remove wonky attritubutes added by stuff
    jQuery('img').each(function ()
    {
        jQuery(this).removeAttr('width');
        jQuery(this).removeAttr('height');
    }); //this removes attributes from gallery images. #FUBAR
});

// this sets lazy loading settings
jQuery('.lazy').lazy({
    effect: "fadeIn",
    effectTime: 300,
    threshold: 500,
    enableThrottle: false

});
