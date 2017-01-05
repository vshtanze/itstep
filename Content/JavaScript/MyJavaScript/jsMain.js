/**
 * Created by Apsent86 on 05.01.17.
 */


$(document).ready(function(){
    $(".top-news").click(
        function(el){
            var str="http://itstep:81/TestNews.php?id="+el.currentTarget.id;;
            $(location).attr('href',str);}
    );
});