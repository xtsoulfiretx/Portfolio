
// Typing effect for header H1 element //

window.addEventListener('load', function() {
    
    function createTypewriter(text,id){
        var i = 0;
        var speed = 90;
        
        function typeWriter(text,id) {
            if (i < text.length) {
                document.getElementById(id).innerHTML += text.charAt(i);
                i++;
                setTimeout(function() {typeWriter(text,id)}, speed);
            }
        }
        typeWriter(text,id);
    }
    $(".links-container").slideUp(0000);
    createTypewriter("My Name is Alexi Lambrou", "greetings");
    setTimeout(function (){createTypewriter("I'm a Web Developer!", "banner-tagline")},3000);
  });

  // Hambuger click effect //

  $(".hamburger").click(function(){
      $(".hamburger").toggleClass("is-active");
      $(".links-container").slideToggle();
  });
