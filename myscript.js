
// Typing effect for header H1 element //

window.addEventListener('load', function() {
    
    function createTypewriter(text,id){
        var i = 0;
        var speed = 100;
        
        function typeWriter(text,id) {
            if (i < text.length) {
                document.getElementById(id).innerHTML += text.charAt(i);
                i++;
                setTimeout(function() {typeWriter(text,id)}, speed);
            }
        }
        typeWriter(text,id);
    }
    createTypewriter("My Name is Alexi Lambrou", "greetings");
    setTimeout(function (){createTypewriter("I'm a Web Developer!", "banner-tagline")},3000);
  });
