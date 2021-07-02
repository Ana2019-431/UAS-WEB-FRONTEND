    var count = 0;
    $(document).ready(function($) {
    $('form').submit(function() {
    if ($('.input').val() !== '') {
        var newTask = $('.input').val();
        count++;
        $("#count").text("Jumlah : "+count);
        var newLi = $('<li>' + newTask + '</li>');
        newLi.on('click', function() {
            $(this).remove();
            count--;
        $("#count").text("Jumlah : "+count); // Attach the event handler before adding the element
        });
        $('ul').prepend(newLi); // To put the new task at the top of the list
        $('.input').val('');
        return false; // So the change persists
    }
    });
    $('ul').sortable(); // Because what good is a to-do list that you can't sort? :)
    });

function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
    }
    
    function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
    }
    
    var temp = getCookie('name'); 
    $(document).ready(function() {
        $('body').css("background-color", temp);
            if(temp == 'white'){
            $('.kiri').css("background-color","pink");
            $('.kiri').css("color","black");
            $('nav').css("background-color", "black");
            $('nav').css("color","black");
            $('.kanan').css("background-color","#d6e0f0");
            $('.kanan').css("color","black");
            $('header').css("background-color","aqua");
            $('header').css("color","black");
            $('.tengah').css("background-color","white");
            $('.tengah').css("color","black");
            $('footer').css("background-color","chartreuse");
            $('footer').css("color","black");
     
        }else{
            $('.kiri').css("background-color","grey");
            $('.kiri').css("color","white");
            $('nav').css("background-color", "black");
            $('nav').css("color","white");
            $('.kanan').css("background-color","grey");
            $('.kanan').css("color","white");
            $('header').css("background-color","grey");
            $('header').css("color","white");
            $('.tengah').css("background-color","black");
            $('.tengah').css("color","white");
            $('footer').css("background-color","black");
            $('footer').css("color","white");
    
       
        }
        $("input[type='checkbox']").prop('checked', (temp == 'black'));
    });
    
       $(document).on("click", '#save-btn', function(){
        if(temp == 'black'){
            $('.kiri').css("background-color","pink");
            $('.kiri').css("color","black");
            $('nav').css("background-color", "black");
            $('nav').css("color","black");
            $('.kanan').css("background-color","#d6e0f0");
            $('.kanan').css("color","black");
            $('header').css("background-color","aqua");
            $('header').css("color","black");
            $('.tengah').css("background-color","white");
            $('.tengah').css("color","black");
            $('footer').css("background-color","chartreuse");
            $('footer').css("color","black");
            temp = 'white';
        }else{
            $('.kiri').css("background-color","red");
            $('.kiri').css("color","white");
            $('nav').css("background-color", "red");
            $('nav').css("color","white");
            $('.kanan').css("background-color","red");
            $('.kanan').css("color","white");
            $('header').css("background-color","red");
            $('header').css("color","white");
            $('.tengah').css("background-color","red");
            $('.tengah').css("color","white");
            $('footer').css("background-color","red");
            $('footer').css("color","white");
            temp = 'black';
        }
        $('body').css("background-color", temp);
        
        
    
        createCookie('name', temp, 5);
    });