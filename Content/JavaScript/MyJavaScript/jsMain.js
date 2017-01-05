/**
 * Created by Apsent86 on 05.01.17.
 */
var adressOneNews="http://itstep:81/TestNews.php?id=";

$(document).ready(function(){
    $(".top-news").click(
        function(el){
            var str=adressOneNews+el.currentTarget.id;
            $(location).attr('href',str);}
    );
});