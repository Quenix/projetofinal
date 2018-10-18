$(document).ready(function() {
    $('#olho').on('mouseenter', function(){

        $(this).fadeIn('slow', function(){
            $(this).attr("src", '..\elementos_visuais\logo\olho-c.png');
        });

        setTimeout(function(){
            $('#olho').fadeIn('slow', function(){
                $(this).attr("src", '..\elementos_visuais\logo\olho-a.png');
            });   
        }, 100);
        
    });

    $('#olho').on('mouseleave', function(){

        $(this).fadeIn('slow', function(){
            $(this).attr("src", '..\elementos_visuais\logo\olho-c.png');
        });

        setTimeout(function(){
            $('#olho').fadeIn('slow', function(){
                $(this).attr("src", '..\elementos_visuais\logo\olho-f.png');
            });   
        }, 100);
        
    });
});


function toggle(menu, option) {
    var n = document.getElementById(menu);
     
	if (n.style.display != 'none') {
        
        n.style.display = 'none';
        document.getElementById(option).setAttribute('aria-expanded', 'true');
    }
    else{
  
        n.style.display = '';
        document.getElementById(option).setAttribute('aria-expanded', 'false');
        }
    }
