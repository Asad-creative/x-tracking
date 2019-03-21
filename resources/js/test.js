// $(document).ready(function(){
//     $("#hide").click(function(){
//       $("p").hide();
//     });
//     $("#show").click(function(){
//       $("p").show();
//     });
//   });

$(document).ready(function(){

    setHeight();
    
});

  
  $(window).resize(function() {
    setHeight();
  });


  function setHeight() {
    windowHeight = $(window).height();
    console.log(windowHeight);
    $('.sidebar').css('height', windowHeight);
      

  };
  
var asad = $("body");
var asad1 = $("body");
function rest() {
    alert("asfasd");

    $(asad).height();
    $(asad1).height();

    }    rest();
