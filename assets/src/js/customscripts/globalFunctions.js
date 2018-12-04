//- Global Functions
function toggleClass(buttonClass, dataTargetPrefix)
{
    jQuery(buttonClass).click(function ()
    {
        var thisButton = jQuery(this);
        var targetID = thisButton.data(dataTargetPrefix);
        var target = jQuery('#' + dataTargetPrefix + '-' + targetID);
        console.log(target);
        if (jQuery(target).hasClass('active'))
        {
            jQuery(target).removeClass('active');
            jQuery(target).addClass('inactive');
            console.log("was active, now inactive");

        } // if

        else if (jQuery(target).hasClass('inactive'))
        {
            jQuery(target).removeClass('inactive');
            jQuery(target).addClass('active');
            console.log("was inactive, now active");
        } //else
    }); //click event
}//toggleClass
