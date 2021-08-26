// Typing effect for header H1 element //
window.addEventListener('load', function () {
    function createTypewriter(text, id) {
      var i = 0;
      var speed = 90;
  
      function typeWriter(text, id) {
        if (i < text.length) {
          document.getElementById(id).textContent += text.charAt(i);
          i++;
          setTimeout(function () {
            typeWriter(text, id);
          }, speed);
        }
      }
  
      typeWriter(text, id);
    }
  
    $(".links-container").slideUp(0000);
    $(".explanation-text").slideUp(0000);
    createTypewriter("My Name is Alexi Lambrou", "greetings");
    setTimeout(function () {
      createTypewriter("I'm a Web Developer!", "banner-tagline");
    }, 3000);
  }); // Hambuger click effect //
  
  $(".hamburger").click(function () {
    $(".hamburger").toggleClass("is-active");
    $(".links-container").slideToggle();
  }); // Code explanation reveal //
  
  $("#whats-this1").click(function () {
    $("#whats-this1").toggleClass("code-shown");
    $("#explanation1").slideToggle();
  });
  
  $("#whats-this2").click(function () {
    $("#whats-this2").toggleClass("code-shown");
    $("#explanation2").slideToggle();
  });// Projects Hidden boxes //
  
  var _loop = function _loop(i) {
    $("#project-".concat(i)).click(function () {
        $("#hb".concat(i)).slideToggle();
    });
  };
  
  for (var i = 1; i <= 6; i++) {
    _loop(i);
  };

  // The code blocks below will look through the input fields of the contact form and change icons accordingly,
  // to let the user know if they have left any of the inputs empty.

const EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
const characterReg = /^\s*[a-zA-Z0-9,\s]+\s*$/;

let validateString = function validateString(value) {
  if (value.match(characterReg) && value.length > 0) {
    return true;
  } else {
    return false;
  }
}

let validateEmail = function validateEmail(email) {
  if (email.match(EmailRegex) && email.length > 0) {
    return true;
  } else {
    return false;
  }
};

$("#email").on('input', function () {
  let isValid = validateEmail($("#email").val());

  if (isValid) {
    $(".email-cross").removeClass("icon-visible");
    $(".email-cross").addClass("icon-hidden");
    $(".email-neutral").addClass("icon-hidden");
    $(".email-tick").removeClass("icon-hidden");
    $(".email-tick").addClass("icon-visible");

  } else {
    $(".email-tick").removeClass("icon-visible");
    $(".email-tick").addClass("icon-hidden");
    $(".email-neutral").addClass("icon-hidden");
    $(".email-cross").removeClass("icon-hidden");
    $(".email-cross").addClass("icon-visible");
  }
});

$("#first-name-input").on('input', function () {
  let isValid = validateString($("#first-name-input").val());

  if (isValid) {
    $(".fname-cross").addClass("icon-hidden");
    $(".fname-cross").removeClass("icon-visible");
    $(".fname-neutral").addClass("icon-hidden");
    $(".fname-tick").removeClass("icon-hidden");
    $(".fname-tick").addClass("icon-visible");
  } else {
    $(".fname-neutral").addClass("icon-hidden");
    $(".fname-tick").addClass("icon-hidden");
    $(".fname-tick").removeClass("icon-visible");
    $(".fname-cross").removeClass("icon-hidden");
    $(".fname-cross").addClass("icon-visible");
  }
});

$("#last-name-input").on('input', function () {
  let isValid = validateString($("#last-name-input").val());

  if (isValid) {
    $(".lname-cross").addClass("icon-hidden");
    $(".lname-cross").removeClass("icon-visible");
    $(".lname-neutral").addClass("icon-hidden");
    $(".lname-tick").removeClass("icon-hidden");
    $(".lname-tick").addClass("icon-visible");
  } else {
    $(".lname-neutral").addClass("icon-hidden");
    $(".lname-tick").addClass("icon-hidden");
    $(".lname-tick").removeClass("icon-visible");
    $(".lname-cross").removeClass("icon-hidden");
    $(".lname-cross").addClass("icon-visible");
  }
});

$("#subject").on('input', function () {
  let isValid = validateString($("#subject").val());

  if (isValid) {
    $(".subject-cross").addClass("icon-hidden");
    $(".subject-cross").removeClass("icon-visible");
    $(".subject-neutral").addClass("icon-hidden");
    $(".subject-tick").removeClass("icon-hidden");
    $(".subject-tick").addClass("icon-visible");
  } else {
    $(".subject-neutral").addClass("icon-hidden");
    $(".subject-tick").addClass("icon-hidden");
    $(".subject-tick").removeClass("icon-visible");
    $(".subject-cross").removeClass("icon-hidden");
    $(".subject-cross").addClass("icon-visible");
  }
});

// This block will look through the message field for special characters and disable the submit button if any are found.

$("#message").on('input', function () {
  let isValid = validateString($("#message").val());

  if (isValid) {
    $("#message-warning").removeClass("icon-visible");
    $("#message-warning").addClass("icon-hidden");
    $("#btnSubmit").removeClass("btnoff");
    $("#btnSubmit").attr("disabled", false);
  } else {
    $("#message-warning").addClass("icon-visible");
    $("#message-warning").removeClass("icon-hidden");
    $("#btnSubmit").addClass("btnoff");
    $("#btnSubmit").attr("disabled", true);
  }
});

// End of input validation.