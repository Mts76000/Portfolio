<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/flexslider/flexslider.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>Portfolio</title>
</head>
<body tabindex="0">

<section class="section" id="header">
    <div class="wrap">

        <div class="nav">
            <div class="logo"><h1>Mts</h1></div>

            <div id="mySidenav" class="sidenav ">
                <a class="closeBtn"  class="close">×</a>
                <ul>
                    <li><a href="#header"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><a href="#info"><i class="fa-solid fa-circle-info"></i> Abouts</a></li>
                    <li><a href="#work"><i class="fa-solid fa-code"></i> Works</a></li>
                    <li><a href="#contact"> <i class="fa-solid fa-address-card"></i> Contact</a></li>

                </ul>
                <div class="switch-container">
                    <label class="switch switch-burger">
                        <input type="checkbox" />
                        <span>
                    <div class="icon-container">
                    <i class="fas fa-moon"></i> <!-- Icône de la lune -->
                        <i class="fas fa-sun"></i> <!-- Icône du soleil -->
                </div>
                </span>
                    </label>
                </div>
            </div>

            <a class="openBtn">
  <span class="burger-icon">
   <i class="fa-solid fa-bars"></i>
  </span>
            </a>
            <div class="nav-lien">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#header">Home</a></li>
                        <li><a href="#info">Abouts</a></li>
                        <li><a href="#work">Works</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="line"></div>
            </div>
            <label class="switch">
                <input type="checkbox" />
                <span>
                    <div class="icon-container">
                    <i class="fas fa-moon"></i> <!-- Icône de la lune -->
                        <i class="fas fa-sun"></i> <!-- Icône du soleil -->
                </div>
                </span>

            </label>
        </div>

        <div class="intro">
            <div class="left">
                <div class="intro-text" data-aos="zoom-in-up" data-aos-anchor="#example-anchor"   data-aos-duration="2000">
                    <h2 >Hello</h2>
                    <h2>I’m Mathis Lamotte a</h2>
                    <h2>Web <span id="changement" class="text-gray">developer</span>  👋🏻</h2>
                </div>
                <a class="intro-bouton" data-aos="fade-up"  data-aos-duration="2000" href="#info">See More</a>
            </div>
        </div>
    </div>
    <div class="full-end" >
        <div class="end" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="750">
            <div class="notification" id="notification">
                <p><i class="fas fa-info-circle"></i> Use your keyboard arrows or click on the navigation bar.</p>
            </div>

            <ul class="social-icons">
                <li class="rond"><a href="https://github.com/Mts76000" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                <li class="rond"><a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="rond"><a href="https://www.linkedin.com/in/mathis-lamotte-a386a6264/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>

        </div>
    </div>
</section>

<section class="section" id="info">
    <div class="wrap">

        <div class="nav">


            <div class="nav-lien">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#header">Home</a></li>
                        <li><a href="#info">Abouts</a></li>
                        <li><a href="#work">Works</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="line"></div>
            </div>
            <label class="switch">
                <input type="checkbox" />
                <span>
                    <div class="icon-container">
                    <i class="fas fa-moon"></i> <!-- Icône de la lune -->
                        <i class="fas fa-sun"></i> <!-- Icône du soleil -->
                </div>
                </span>

            </label>
        </div>

        <div class="about">
            <div class="box1">
                <img src="asset/img/School.png" alt="School experience">
            </div>
            <div class="box2">
                <img src="asset/img/School.png" alt="School experience">
            </div>
            <div class="box3">
                <img src="asset/img/Work.png" alt="Work experience">
            </div>
        </div>

        <div class="end">
            <ul class="social-icons">
                <li class="rond"><a href=""><i class="fa-brands fa-github"></i></a></li>
                <li class="rond"><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li class="rond"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
           <div class="nav-bouton">
            <a class="top nav-bouton" href="#header"><img src="asset/img/top.png" alt=""></a>
            <a class="down nav-bouton" href="#work"><img src="asset/img/down.png" alt=""></a>
           </div>
        </div>


    </div>
</section>

<section class="section" id="work">
    <div class="wrap">

        <div class="nav">

            <div class="nav-lien">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#header">Home</a></li>
                        <li><a href="#info">Abouts</a></li>
                        <li><a href="#work">Works</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="line"></div>
            </div>
            <label class="switch">
                <input type="checkbox" />
                <span></span>
            </label>
        </div>

        <div class="flexslider" id="diaporama1">
            <ul class="slides">
                <li>
                    <img src="https://picsum.photos/id/78/50/20" alt="">

                </li>
                <li>
                    <img src="https://picsum.photos/id/67/50/20" alt="">

                </li>
                <li>
                    <img src="https://picsum.photos/id/568/50/20" alt="">

                </li>

            </ul>
        </div>

        <div class="end">
            <ul class="social-icons">
                <li class="rond"><a href=""><i class="fa-brands fa-github"></i></a></li>
                <li class="rond"><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li class="rond"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
            <a class="top" href="#header"><img src="asset/img/top.png" alt=""></a>
        </div>


    </div>
</section>

<section class="section" id="contact">
    <div class="wrap">

        <div class="nav">

            <div class="nav-lien">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#header">Home</a></li>
                        <li><a href="#info">Abouts</a></li>
                        <li><a href="#work">Works</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="line"></div>
            </div>
            <label class="switch">
                <input type="checkbox" />
                <span>
                    <div class="icon-container">
                    <i class="fas fa-moon"></i> <!-- Icône de la lune -->
                        <i class="fas fa-sun"></i> <!-- Icône du soleil -->
                </div>
                </span>

            </label>
        </div>
        <div class="contact">

        <div class="contact-info">
            <h3>Contact Info</h3>
            <div class="mail">
                <i class="fa-regular fa-envelope"></i>
                <div class="contact-text">
                <h4>Mail</h4>
                <a href="mailto:lamottemathis@gmail.com" >lamottemathis@gmail.com</a>
                </div>
            </div>
            <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <div class="contact-text">
                <h4>Phone</h4>
                <p>06.37.77.93.61</p>
                </div>
            </div>
            <div class="city">
                <i class="fa-solid fa-city"></i>
                <div class="contact-text">
                <h4>City</h4>
                <p>Rouen</p>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <h3>Contact Me</h3>
            <div class="wrap-form">
                <form action=""  method="post">
                    <input type="text" name="name" id="name" placeholder="Name *">
                    <input type="text"  name="email" id="email" placeholder="Email *">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message *"></textarea>
                    <button type="submit" value="Send Message">Send Message</button>
                </form>
            </div>
        </div>
        </div>
            <div class="end">
            <div class="nav-bouton">
                <a class="top nav-bouton noactive" href="#header"><img src="asset/img/top.png" alt=""></a>
                <a class="down nav-bouton noactive" href="#footer"><img src="asset/img/down.png" alt=""></a>
                <a class=" nav-bouton-active" href="#footer"><img src="asset/img/up-black.png" alt=""></a>
                <a class=" nav-bouton-active" href="#footer"><img src="asset/img/down-black.png" alt=""></a>

            </div>
        </div>

    </div>
</section>

<footer class="section" id="footer">
    <div class="wrap">
        <div class="footer">
            <p>© 2023 All rights reserved.</p>
            <a class="footer-lien" href="#header">back to top</a>
            <div class="end">
                <ul class="social-icons">
                    <li class="rond"><a href=""><i class="fa-brands fa-github"></i></a></li>
                    <li class="rond"><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="rond"><a href=""><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="asset/flexslider/jquery.flexslider-min.js"></script>
<script src="asset/flexslider/jquery.flexslider.js"></script>
<script src="asset/js/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init();
</script>
</body>
</html>
