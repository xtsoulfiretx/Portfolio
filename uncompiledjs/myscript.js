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

    if (window.innerWidth >= 1024) {

    console.log ("test success");
    $("#hb1").slideUp(0000);
    $("#hb2").slideUp(0000);
    $("#hb3").slideUp(0000);
    $("#hb4").slideUp(0000);
    $("#hb5").slideUp(0000);
    $("#hb6").slideUp(0000);
    } else {
        $("#hb1").slideDown(0000);
        $("#hb2").slideDown(0000);
        $("#hb3").slideDown(0000);
        $("#hb4").slideDown(0000);
        $("#hb5").slideDown(0000);
        $("#hb6").slideDown(0000);
        console.log ("test fail");
    }


    $(".links-container").slideUp(0000);
    $(".explanation-text").slideUp(0000);
    createTypewriter("My Name is Alexi Lambrou", "greetings");
    setTimeout(function (){createTypewriter("I'm a Web Developer!", "banner-tagline")},3000);
  });

  $(window).resize(function() {
      if (window.innerWidth >= 1024) {
            $("#hb1").slideUp(0000);
            $("#hb2").slideUp(0000);
            $("#hb3").slideUp(0000);
            $("#hb4").slideUp(0000);
            $("#hb5").slideUp(0000);
            $("#hb6").slideUp(0000);
        } else {
            $("#hb1").slideDown(0000);
            $("#hb2").slideDown(0000);
            $("#hb3").slideDown(0000);
            $("#hb4").slideDown(0000);
            $("#hb5").slideDown(0000);
            $("#hb6").slideDown(0000);
        }
  })


  // Hambuger click effect //

  $(".hamburger").click(function(){
      $(".hamburger").toggleClass("is-active");
      $(".links-container").slideToggle();
  });

  // Code explanation reveal //

  $(".whats-this1").click(function(){
    $(".whats-this1").toggleClass("code-shown");
    $(".explanation1").slideToggle();
  });


  // Projects Hidden boxes //

  for (let i = 1; i <= 6; i++) {
    $(`#project-${i}`).hover(function () {
      if (window.innerWidth >= 1024) {
        $(`#hb${i}`).slideToggle();
        console.log("this should be working")
      } else {
        console.log("fails")
      }
  })
  };

