
// Typing effect for header H1 element //

window.addEventListener('load', function() {
    
    function createTypewriter(text,id){
        var i = 0;
        var speed = 90;
        
        function typeWriter(text,id) {
            if (i < text.length) {
                document.getElementById(id).textContent += text.charAt(i);
                i++;
                setTimeout(function() {typeWriter(text,id)}, speed);
            }
        }
        typeWriter(text,id);
    }
    $("#hb1").slideUp(0000);
    $("#hb2").slideUp(0000);
    $("#hb3").slideUp(0000);
    $("#hb4").slideUp(0000);
    $("#hb5").slideUp(0000);
    $("#hb6").slideUp(0000);
    $(".links-container").slideUp(0000);
    $(".explanation-text").slideUp(0000);
    createTypewriter("My Name is Alexi Lambrou", "greetings");
    setTimeout(function (){createTypewriter("I'm a Web Developer!", "banner-tagline")},3000);
  });

  // Hambuger click effect //

  $(".hamburger").click(function(){
      $(".hamburger").toggleClass("is-active");
      $(".links-container").slideToggle();
  });

  // Code explanation reveal //

  $(".show-code").click(function(){
    $(".show-code").toggleClass("code-shown");
    $(".explanation-text").slideToggle();
  });

  // Projects Hidden boxes //

  $("#project-1").hover(
      function() {
          $("#hb1").slideToggle();
      }
  );

  $("#project-2").hover(
    function() {
        $("#hb2").slideToggle();
    }
);

$("#project-3").hover(
    function() {
        $("#hb3").slideToggle();
    }
);

$("#project-4").hover(
    function() {
        $("#hb4").slideToggle();
    }
);

$("#project-5").hover(
    function() {
        $("#hb5").slideToggle();
    }
);

$("#project-6").hover(
    function() {
        $("#hb6").slideToggle();
    }
);
