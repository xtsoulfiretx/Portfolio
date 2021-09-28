<?php 
    ob_start();
        require_once __DIR__ . "/src/includes/bootstrap.php";
        include_once __DIR__ . "/src/includes/post-form.php";
        ?>
<!DOCTYPE html>
    <html lang="en-gb">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Alexi Lambrou - Portfolio</title>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/2617b01a9a.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/objectFitPolyfill@2.3.5/dist/objectFitPolyfill.min.js"></script>
            <link href="Styles/style.css" rel="stylesheet">
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">
        </head>

        <body>
            <div id="homepage" class="wrapper">
                <main>
                    <header id="header-home">
                        <div id="banner">
                            <h1 id="greetings"></h1>
                            <span id="banner-tagline"></span>
                        </div>
                        <div id="scroll-down">
                            <a href="#projects-content">Scroll Down</a>
                            <br>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </header>

                    <section id="projects">
                        <ul id="projects-content">

                            <li id="project-1" class="project">
                                <div class="project-img"><img src="images/Netmatters-site-example.jpg" data-object-fit alt="Screenshot of Netmatters site recreation project"></img></div>
                                <h2>HTML/CSS Reflection</h2>
                                <span class="project-view">View Project
                                <i class="fas fa-arrow-right"></i></span>
                                <div class="hidden-box" id="hb1">
                                    <p>A hand made recreation of the Netmatters homepage using Html, Sass, Javascript and Php.</p>
                                    <button><a href="http://netmatters.alexi-lambrou.netmatters-scs.co.uk/" target="_blank">Click here to see me in use!</a></button>
                                    <button><a href="https://github.com/xtsoulfiretx/html-css-reflection/tree/php" target="_blank">Click here to see my source code!</a></button>
                                </div>
                            </li>

                            <li id="project-2" class="project"> 
                                <div class="project-img"><img src="images/Axure-example.jpg" data-object-fit alt="Screenshot of Axure quote wizard project"></div>
                                <h2>Axure Reflection</h2>
                                <span class="project-view">View Project
                                <i class="fas fa-arrow-right"></i></span>
                                <div class="hidden-box" id="hb2"><p>An example of a store page created in Axure which included logic to handle a simple shopping basket.</p></div>
                            </li>

                            <li id="project-3" class="project">
                                <div class="project-img"><img src="images/Souls-Sanctum.png" data-object-fit alt="Screenshot of Wordpress project"></div>
                                <h2>Wordpress Reflection</h2>
                                <span class="project-view">View Project
                                <i class="fas fa-arrow-right"></i></span>
                                <div class="hidden-box" id="hb3">
                                    <p>A Photography blog made using Wordpress based around my own hobby to paint miniatures.</p>
                                    <button><a href="https://wordpress.alexi-lambrou.netmatters-scs.co.uk/" target="_blank">Click here to see me in use!</a></button>
                                    <button><a href="https://github.com/xtsoulfiretx/wordpress" target="_blank">Click here to see my source code!</a></button>
                                </div>
                            </li>

                            <li id="project-4" class="project">
                                <div class="project-img"><img src="images/Pair-project" data-object-fit alt="Screenshot of Pair-Project project"></div>
                                <h2>Pair's Project</h2>
                                <span class="project-view">View Project
                                <i class="fas fa-arrow-right"></i></span>
                                <div class="hidden-box" id="hb4">
                                    <p>A project made with one other Scion Student over the course of two weeks while also matching a brief.</p>
                                    <button><a href="https://alexi-lambrou.netmatters-scs.co.uk/pair-project/" target="_blank">Click here to see me in use!</a></button>
                                    <button><a href="https://github.com/Daryl-Boyce/Team__Homepage" target="_blank">Click here to see our source code!</a></button>
                            </div>
                            </li>

                            <li id="project-5" class="project">
                                <div class="project-img"><img src="images/Netmatters-site-example.jpg" data-object-fit alt="Screenshot of Netmatters site recreation project"></div>
                                <h2>Project 5</h2>
                                <span class="project-view">View Project
                                <i class="fas fa-arrow-right"></i></span>
                                <div class="hidden-box" id="hb5"><p>I am a placeholder, I will be filled soon but in the meantime i will just pop up from time to time.</p></div>
                            </li>

                            <li id="project-6" class="project">
                                <div class="project-img"><img src="images/Netmatters-site-example.jpg" data-object-fit alt="Screenshot of Netmatters site recreation project"></div>
                                <h2>Project 6</h2>
                                <span class="project-view">View Project
                                <i class="fas fa-arrow-right"></i></span>
                                <div class="hidden-box" id="hb6"><p>I am a placeholder, I will be filled soon but in the meantime i will just pop up from time to time.</p></div>
                            </li>
                        </ul>
                    </section>
                    
                    <section id="contact">

                        <div id="contact-content">
                            <div id="contact-info">
                                <h2>Get in Touch</h2>
                                <span>If you would like to contact me you can either send me a message through this contact form or you can give me a ring on:</span>
                                <a href="+447505554932" title="Call +447505554932"><h3 class="phone-call">07505554932</h3></a>
                                <a href="mailto:alexi.lambrou@gmail.com"><h3>alexi.lambrou&commat;gmail.com</h3></a>
                            </div>

                            <form id="contact-form" method="POST" action="" accept-charset="UTF-8">
                                <input type="hidden" name="action" value="contact-form">
                                <div class="first-line-form-input">
                                    <div class="input-container fname-input">
                                        <input type="text" placeholder="First Name" id="first-name-input" name="first-name-input" class="style-input">
                                        <div class="icon-container">
                                            <i class="fas fa-check-circle fname-tick tick-icon icon-hidden"></i>
                                            <i class="fas fa-minus-circle fname-neutral neutral-icon"></i>
                                            <i class="fas fa-times-circle fname-cross cross-icon icon-hidden"></i>
                                        </div>
                                    </div>
                                    <div class="input-container lname-input">
                                        <input type="text" placeholder="Last Name" id="last-name-input" name="last-name-input" class="style-input">
                                        <div class="icon-container">
                                            <i class="fas fa-check-circle lname-tick tick-icon icon-hidden"></i>
                                            <i class="fas fa-minus-circle lname-neutral neutral-icon"></i>
                                            <i class="fas fa-times-circle lname-cross cross-icon icon-hidden"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-container email-input">
                                    <input type="email" placeholder="Email Address*" id="email" name="email" class="style-input">
                                    <div class="icon-container">
                                        <i class="fas fa-check-circle email-tick tick-icon icon-hidden"></i>
                                        <i class="fas fa-minus-circle email-neutral neutral-icon"></i>
                                        <i class="fas fa-times-circle email-cross cross-icon icon-hidden"></i>
                                    </div>
                                </div>
                                <div class="input-container subject-input">
                                    <input type="text" placeholder="Subject" id="subject" name="subject" class="style-input">
                                    <div class="icon-container">
                                        <i class="fas fa-check-circle subject-tick tick-icon icon-hidden"></i>
                                        <i class="fas fa-minus-circle subject-neutral neutral-icon"></i>
                                        <i class="fas fa-times-circle subject-cross cross-icon icon-hidden"></i>
                                    </div>
                                </div>
                                <textarea placeholder="Message" id="message" name="message" class="style-input" rows="6" style="resize: none;"></textarea>
                                <p id="message-warning" class="icon-hidden">It seems your message is empty or contains special characters,
                                    please adjust your message before submission.
                                </p>
                                <div id="successful-message" class="hidden">
                                    <i class="fas fa-check-circle tick-icon"></i>
                                    <h3>Your Message has been sent!</h3>
                                </div>
                                <div id="failure-message" class="hidden">
                                    <i class="fas fa-times-circle cross-icon"></i>
                                    <h3>Your Message has not been sent</h3>
                                </div>
                                <button id="btnSubmit">Submit</button>
                            </form>

                        </div>
                    </section>
                    <div id="scroll-up">
                        <i class="fas fa-angle-up"></i>
                        <br>
                        <a href="#top">Back to Top</a>
                    </div>
                </main>

                <nav>
                <div id="nav-content"> 
                        <a href="index.php#top" class="nav-initial">
                            <div class="circle-wrap"><h2 class="letters">A.L</h2></div>
                        </a>
                        <ul id="nav-list">
                            <li><a href="about.html">About Me</a></li>
                            <li><a href="#projects-content">My Portfolio</a></li>
                            <li><a href="coding_examples.html">Coding Examples</a></li>
                            <li><a href="scs_scheme.html">SCS Scheme</a></li>
                            <li><a href="index.php#contact" class="contact-nav">Contact Me</a></li>
                        </ul>
                        <ul id="nav-social">
                            <li><a href="https://twitter.com/AlexiLambrou" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/alexi-lambrou-961652143/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://github.com/xtsoulfiretx" target="_blank"><i class="fab fa-github-square"></i></a></li>
                        </ul>
                </div>
                </nav>
                <div id="mobile-nav">
                    <div class="mobile-nav-wrapper">
                            <a href="index.php#top" class="nav-initial">
                                <div class="circle-wrap"><h2 class="letters">A.L</h2></div>
                            </a>
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                                </span>
                            </button>
                    </div>
                    <div class="links-container">
                        <ul class="mobile-nav-links">
                            <li><a href="about.html">About Me</a></li>
                            <li><a href="#projects-content">My Portfolio</a></li>
                            <li><a href="coding_examples.html">Coding Examples</a></li>
                            <li><a href="scs_scheme.html">SCS Scheme</a></li>
                            <li><a href="index.php#contact" class="contact-nav">Contact Me</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </body>
        <script src="myscript.js"></script>
    </html>