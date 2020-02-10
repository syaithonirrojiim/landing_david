<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alien</title>
        <link rel="icon" type="image/icon" href="assets/images/tabicon.ico">

        <link rel="stylesheet" type="text/css" href="">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700,700i|Josefin+Sans:700" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link rel="icon" href="assets/images/alien.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        
    </head>

    <body>
        <div id="index">                                           <!-- Index starts here -->
            <div class="container main">
                <div class="row home">
                    <div id = "index_left" class="col-md-6 left">
                        <img class="img-responsive img-alien" src="assets/images/home.jpg">
                    </div>
                    <div id = "index_right" class="col-md-6 text-center right">
                        <div class="logo">
                            <img src="assets/images/alien.png">
                            <h4>I am Alien</h4>
                        </div>
                        <p class="home-description">
                            I am passionate about design, development and interaction. I really love what I do.
                        </p>
                        <div class="btn-group-vertical custom_btn animated slideinright">
                            <div id="about" class="btn btn-alien">About</div>
                            <div id="work" class="btn btn-alien">Work</div>
                            <div id="contact" class="btn btn-alien">Contact</div>
                        </div>      
                        <div class="social">
                            <a href="http://alienasi.com/sorry" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="http://alienasi.com/sorry" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="mailto:david17dunn@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>                                                      <!-- index ends here -->

        <div id="about_scroll" class="pages ">                      <!-- about strats here  -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 left" id="about_left">
                        <img class="img-responsive img-alien" src="assets/images/about.jpg">
                    </div>

                    <div class="col-md-6 right" id="about_right">
                        <a href="#index" class="btn btn-alien back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>About</h2>
                            <div class="marker">a</div>
                        </div>
                        <p class='subtitle'>Hi, I'm David Dunn (Pen Name). A freelance code-writer, content-writer, and designer.
                        </p>
                        <p class="info">"I am a person who follows the ideas of Marxism. My educational background is Islamic boarding school. I completed my bachelor in Informatics Engineering in 2019 by focusing on Data Science and Software Engineering. Now I am studying and focusing on Agrarian Class Research. Are you interested in working with me? please contact me via the "contact" page."</p>  
                    </div>
                </div>
            </div>            
        </div>                                                                <!-- About ends here -->


        
        <div id="work_scroll" class="pages">                                  <!-- Work starts here -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-6" id="work_left">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item"><img class="img-responsive img-alien" src="assets/images/work.jpg"></div>
                        </div>
                    </div>

                    <div class="col-md-6" id="work_right">
                        <a href="#index" class="btn btn-alien back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>Work</h2>
                            <div class="marker">w</div>
                        </div>
                        <p class='subtitle'>I have some work that I cannot mention here. Because it deals with privacy and security. 
                        </p>
                        <p class="info">I developed a personal blog (alienasi.com), I am an editor and gost-writer who has completed several projects in one of the book publishers in Java. I am also an application developer for class analysis research, <i>first</i> with the parameters of "basic needs" and "basic income" (populist), <i>secondly</i> with the "labor-exploitation index".</p>
                    </div>
                </div>
            </div>    
        </div>                                                                 <!-- Work ends here  -->


        <div id="contact_scroll" class="pages">                             <!-- Contact starts here -->
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 left" id="contact_left">
                        <img class="img-responsive img-alien" src="assets/images/contact.jpg">
                    </div>

                    <div class="col-md-6 right" id="contact_right">
                        <a href="#index" class="btn btn-alien back"> <i class="fa fa-angle-left" aria-hidden="true"></i> Back to Home </a>
                        <div id="watermark">
                            <h2 class="page-title" text-center>Contact</h2>
                            <div class="marker">c</div>
                        </div>
                        <p class='subtitle'>I'm based on the most populous island in Indonesia, not far from the southern sea. Drop me a line.
                        </p>
                        <!-- form -->
                        <form action="mail.php" method="post" class="form_edit"> 
                            	<input type="name" class="form-control" name="name" id="name" placeholder="Name">
                            <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-alien submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>                                                              <!-- Contact ends here -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>