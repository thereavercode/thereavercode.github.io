<?php
    session_start();
    include ("config.php");

        // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            ZUMO KENYA | Taking your business to the world
        </title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;1,100;1,600&family=Ubuntu:ital,wght@0,300;0,400;1,300;1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css">
</head>

    <body>
        <div class="container_cs">
        <section class="header">
            <nav id="navigation">
                <a href="index.html"><img src=pics\zumo.jpeg></a>
                <h2>ZUMO KENYA</h2>

                <div class="menu" id="menus">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="services.html">SERVICES</a></li>
                        <li><a href="/site/forum/index.php">BLOG</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
                <div class="info">
                    <h3 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h3>
                    <p align="center">
                        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
                        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                    </p>
                    <h1>World's Biggest FinTech</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        <br> Illo, labore! Iure obcaecati, esse nulla enim nostrum sapiente placeat 
                        <br> doloremque cumque dicta. Voluptate inventore error perspiciatis repellendus nemo cum nulla!<br>
                        ZUMO is a company that seeks to provide an online presence for <em>Startups and Established Businesses</em>.               
                    </p>
                    <a href="/site/forum/index.php" class="hero-btn">Visit our Forum</a>
                    
                </div>
            <a id="down-arrow" href="#services"><div></div></a>
        </section>
        <div class="container">
        <!----Services Section---->
        <section class="services" id="services">
            <h1>Services We Offer</h1>
            <p>
                We seek to provide an online presence for startups and established businesses.
            </p>
            <div class="row">
                <div class="services-col">
                    <h3>Web Development</h3>
                    <p>
                        Web Development refers to the design of websites that are displayed on the internet.
                        It usually refers to the user experience aspects of website development rather than software development.
                        Web design used to be focused on designing websites for desktop browsers; 
                        however, since the mid-2010s, design for mobile and tablet browsers has become 
                        ever-increasingly important.
                    </p>
                </div>
                <div class="services-col">
                    <h3>Web Hosting</h3>
                    <p>
                        Web Hosting refers to the design of websites that are displayed on the internet.
                        It usually refers to the user experience aspects of website development rather than software development.
                        Web design used to be focused on designing websites for desktop browsers; 
                        however, since the mid-2010s, design for mobile and tablet browsers has become 
                        ever-increasingly important.
                    </p>
                </div>
                <div class="services-col">
                    <h3>Database Administration</h3>
                    <p>
                        Database Administration refers to the design of websites that are displayed on the internet.
                        It usually refers to the user experience aspects of website development rather than software development.
                        Web design used to be focused on designing websites for desktop browsers; 
                        however, since the mid-2010s, design for mobile and tablet browsers has become 
                        ever-increasingly important.
                    </p>
                </div>
            </div>
        </section>

        <!----Branches---->
        <section class="branches">
            <h1>Our Global Branches</h1>
            <p>
                ZUMO is a company that seeks to provide an online presence.
            </p>

            <div class="row">
                <div class="branches-col">
                    <img src="pics/sample.jpg">
                    <div class="mask">
                        <h3>NAIROBI</h3>
                        <p>
                            ZUMO is a company that seeks to provide an online presence.
                            ZUMO is a company is a company that seeks to provide an online presence online presence.
                        </p>
                    </div>
                </div>
                <div class="branches-col">
                    <img src="pics/sample.jpg">
                    <div class="mask">
                        <h3>MOMBASA</h3>
                        <p>
                            ZUMO is a company that seeks to provide an online presence.
                            ZUMO is a company is a company that seeks to provide an online presence online presence.
                        </p>
                    </div>
                </div>
                <div class="branches-col">
                    <img src="pics/sample.jpg">
                    <div class="mask">
                        <h3>KISUMU</h3>
                        <p>
                            ZUMO is a company that seeks to provide an online presence.
                            ZUMO is a company is a company that seeks to provide an online presence online presence.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!----Adverts And About---->
        <section id="blog-posts">
            <h2>Latest news from <a class="chevron-link" href="blog/">our blog</a></h2>
            <div>
            <a href="https://www.kali.org/blog/kali-linux-2021-3-release/" class="card">
            <div style="background-image:url(https://www.kali.org/blog/kali-linux-2021-3-release/images/banner-2021.3-release.jpg)"></div>
            <h4>Kali Linux 2021.3 Release (OpenSSL, Kali-Tools, Kali Live VM Support, Kali NetHunter Smartwatch)</h4>
            <p>Today we have released the newest version of Kali Linux, 2021.3 (quarter #3), which is now ready for download or updating.
            A summary of the changes since the 2021.2 release from June are:
            OpenSSL - Wide compatibility by default - Keep reading for what that means New Kali-Tools site - Following the footsteps of Kali-Docs, Kali-Tools has had a complete refresh Better VM support in the Live image session - Copy &amp; paste and drag &amp; drop from your machine into a Kali VM by default New tools - From adversary emulation, to subdomain takeover to Wi-Fi attacks Kali NetHunter smartwatch - first of its kind, for TicHunter Pro KDE 5.</p>
            <time datetime="2021-09-14 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i> 14 September 2021</time>
            </a>
            <a href="https://www.kali.org/blog/kali-linux-2021-2-release/" class="card">
            <div style="background-image:url(https://www.kali.org/blog/kali-linux-2021-2-release/images/banner-2021.2-release.jpg)"></div>
            <h4>Kali Linux 2021.2 Release (Kaboxer, Kali-Tweaks, Bleeding-Edge &amp; Privileged Ports)</h4>
            <p>Say hello to Kali Linux 2021.2! This release welcomes a mixture of new items as well as enhancements of existing features, and is ready to be downloaded (from our updated page) or upgraded if you have an existing Kali Linux installation.
            A quick summary of the changelog since the 2021.1 release from February 2021 is:</p>
            <time datetime="2021-06-01 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i> 01 June 2021</time>
            </a>
            <a href="https://www.kali.org/blog/introducing-kaboxer/" class="card">
            <div style="background-image:url(https://www.kali.org/blog/introducing-kaboxer/images/kaboxer-banner-v1.jpg)"></div>
            <h4>Kaboxer - Kali Applications Boxer</h4>
            <p>On and off for the last 18 months we have been working on Kaboxer, and just before Kali 2021.1, it is ready to say “Hello World” (then it will start shipping you applications).
            TL;DR - What is this? What is the name about, Kaboxer? Kali Applications Boxer
            What does that mean?</p>
            <time datetime="2021-05-25 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i> 25 May 2021</time>
            </a>
            <a href="https://www.kali.org/blog/ampere/" class="card">
            <div style="background-image:url(https://www.kali.org/blog/ampere/images/ampere.jpg)"></div>
            <h4>Ampere Hardware &amp; Kali Linux</h4>
            <p>When Ampere partnered with Debian, this caught our eye. We were aware that our current ARM cloud provider was soon ending support for arm64 servers (which we use for our build daemons).
            At Kali Linux, one of the things which is important to us, is that we prefer not having to cross-compile our ARM binaries that we ship in our Kali packages.</p>
            <time datetime="2021-05-05 00:00:00 +0000 UTC"><i class="ti-alarm-clock"></i> 05 May 2021</time>
            </a>
            </div>
        </section>
        </div>


            <section class="footer">
                <div class="contain">
                    <div>
                        <h4>Links</h4>
                        <a href="https://www.kali.org/" rel="noopener" target="_blank">Home</a>
                        <a href="https://www.kali.org/blog/" rel="noopener" target="_blank">Blog</a>
                        <a href="https://forums.kali.org/" rel="noopener" target="_blank">Support Forum</a>
                    </div>
                    <div>
                        <h4>Follow Us</h4>
                        <a href="https://twitter.com/kalilinux" title="Twitter" rel="noopener" target="_blank"><svg viewBox="0 0 24 24" fill="currentcolor" width="24" height="24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717.0-4.92 2.203-4.92 4.917.0.39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475.0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314.0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39.0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054.0 13.999-7.496 13.999-13.986.0-.209.0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"></path></svg>
                        Twitter
                        </a>
                        <a href="https://www.facebook.com/kalilinux" title="Facebook" rel="noopener" target="_blank"><svg viewBox="0 0 24 24" fill="currentcolor" width="24" height="24"><path d="M23.9981 11.9991C23.9981 5.37216 18.626.0 11.9991.0 5.37216.0.0 5.37216.0 11.9991c0 5.9891 4.38789 10.9531 10.1242 11.8533V15.4676H7.07758V11.9991H10.1242V9.35553c0-3.00727 1.7914-4.66839 4.5322-4.66839 1.3128.0 2.686.23435 2.686.23435v2.9529h-1.513C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991h3.3279l-.532 3.4685H13.8739v8.3848C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991z"></path></svg>
                        Facebook
                        </a>
                        <a href="https://gitlab.com/kalilinux" title="GitLab" rel="noopener" target="_blank"><svg viewBox="0 0 24 24" fill="currentcolor" width="24" height="24"><path d="M23.955 13.587l-1.342-4.135-2.664-8.189c-.135-.423-.73-.423-.867.0L16.418 9.45H7.582L4.919 1.263C4.783.84 4.185.84 4.05 1.26L1.386 9.449.044 13.587c-.121.375.014.789.331 1.023L12 23.054l11.625-8.443c.318-.235.453-.647.33-1.024"></path></svg>
                        GitLab
                        </a>
                        <a href="https://github.com/kalilinux" title="GitHub" rel="noopener" target="_blank"><svg viewBox="0 0 24 24" fill="currentcolor" width="24" height="24"><path d="M12 .297c-6.63.0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577.0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93.0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176.0.0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22.0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22.0 1.606-.015 2.896-.015 3.286.0.315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg>
                        GitHub
                        </a>
                        <a href="https://www.microsoft.com/en-us/p/kali-linux/9pkr34tncv07" title="Microsoft Store" rel="noopener" target="_blank"><svg viewBox="0 0 24 24" fill="currentcolor" width="24" height="24"><path d="M11.4 24H0V12.6h11.4V24zM24 24H12.6V12.6H24V24zM11.4 11.4H0V0h11.4v11.4zm12.6.0H12.6V0H24v11.4z"></path></svg>
                        Microsoft Store
                        </a>
                    </div>
                </div>
            </section>
        <!----Script for open/close Menu---->
        <script>
            var menus = document.getElementById("menus");
            function showMenu(){
                menus.style.right = "0";
            }
            function hideMenu(){
                menus.style.right = "-200px";
            }
                //When the user scrolls down 50px from the top of the document, resize the header's font size
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    document.getElementById("navigation").style.height = "50px";
                    document.getElementById("navigation").style.padding = "0.5% 4%";
                    document.getElementById("navigation").style.background = "#20201fe3";
            } else {
                    document.getElementById("navigation").style.height = "100px";
                    document.getElementById("navigation").style.padding = "2% 6%";
                    document.getElementById("navigation").style.background = "transparent";
                }
            }

        </script>
    </div>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61bb32ecc82c976b71c1bfd7/1fn1jtrum';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>

