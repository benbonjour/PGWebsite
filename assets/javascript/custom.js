    (function($){  
        $.fn.juizScrollTo = function(speed){  
            if(!speed) var speed = 'slow';  
       
            return this.each(function(){  
                $(this).click(function(){  
                    var goscroll = false;  
                    var the_hash = $(this).attr("href");  
                    var regex = new RegExp("(.*)\#(.*)","gi");  
                    var the_element = '';  
       
                    if(the_hash.match("\#(.+)")) {  
       
                        the_hash = the_hash.replace(regex,"$2");  
       
                        if($("#"+the_hash).length>0) {  
                            the_element = "#" + the_hash;  
                            goscroll = true;  
                        }  
                        else if($("a[name=" + the_hash + "]").length>0) {  
                            the_element = "a[name=" + the_hash + "]";  
                            goscroll = true;  
                        }  
       
                        if(goscroll) { 

                        	var container = 'html';   

                        	jQuery.browser = {}; 
                        	jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
							if (jQuery.browser.webkit) 
								container = 'body';

                            $(container).animate({  
                                scrollTop:$(the_element).offset().top - 100  
                            }, speed);  

                            return false;  
                        }  
                    }  
                });  
            });  
        };  
    })(jQuery)  
       
    $('a[href^="#"]').juizScrollTo('fast');  
