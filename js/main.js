// JavaScript Document

jQuery(document).ready(function($) {

$(function() {
        $('ul.sub-menu').hide();

        $('.has-popout-menu').hover(
            function() {            
                $('ul.sub-menu', this).stop().animate({
                    width: 'toggle',
                    opacity: 'toggle',
					marginLeft: "6em"
                } /* [, duration in ms] */);
            }
        );
    });

});