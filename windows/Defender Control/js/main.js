$( document ).ready(function() {
 var link = $("#link"),
     counter = $("#counter");
 link.on('click', function(e) {
  e.preventDefault();
  var ajax = $.ajax({
   method : 'post',
   url : 'likes.php',
   dataType : 'text',
   data : { 'count' : 1 }
  });
  ajax.done(function(data){
   data = JSON.parse(data);
   counter.html(parseInt(data));
  }) ;
 });
});

function OnLoad() {
            var subm = document.getElementById("link");

            subm.onclick = function() {
                localStorage["submit20"]++;
                document.getElementById('link').style.opacity=0;
                document.getElementById('like').style.opacity=0;
                alert("Спасибо за ваш лайк!");
            }

            if( localStorage.getItem("submit20") === null ) {
                localStorage.setItem("submit20", 0);
            } else if (localStorage["submit20"] >= 1) {
                subm.disabled = true;
                document.getElementById('link').style.backgroundColor= '#818181';
            }
};
        window.onload = OnLoad;