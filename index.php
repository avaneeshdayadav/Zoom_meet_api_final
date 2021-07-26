<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- <link rel="stylesheet" href="css/attendence.css"> -->
  <link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-4-4.1.1/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap4.min.css" />

  <style>

    
    .watchNowBtn{
    color: white;background-color: transparent;border: 1px solid white;padding:0.3%;
    text-align: center;
    border-radius: 5px;
    }
    .watchNowBtn:hover{
    color: black;background-color: white;border: 1px solid white;
    }

    /* The sticky class is added to the navbar with JS when it reaches its scroll position */
    .sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index:3;
    }

    .sticky + .mainBody {
        padding-top:6%;
    }

    #brandName{
        flex-grow: 95;
    }
    #loginBtn{
        flex-grow: 2.5;
        background-color: white;color: black;
    }
    #purpleNeonBtn{
        flex-grow: 2.5;
        text-align: center;
        background-color: #00c8eb;color: white;box-shadow: 0 8px 12px 0 rgba(0, 200, 235, 0.2), 0 10px 24px 0 rgba(0, 200, 235, 0.2);
    }

    .purpleBtn{
        flex-grow: 2.5;
        background-color: #00c8eb;color: white;
    }

    .purpleOulineBtn{
        background-color: white;color: #00c8eb;border: 1px solid #00c8eb;
    }
    #slogan{
        font-size: 250%;
        font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;
    }
    .cardContent{
        margin-top: 4%;color: grey;width: 100%;
        /* margin-bottom: 3%; */
    }
    #animatedPart{
        display: block;
    }

    #whiteNav{
        padding:1%;padding-top:2%;background-color: white;
    }


    .btn-grad {
        background-image: linear-gradient(to right, #403B4A 0%, #E7E9BB  51%, #403B4A  100%);
        transition: 0.5s;
        background-size: 200% auto;

    }
    .btn-grad:hover {
        background-position: right center; /* change the direction of the change here */
    }
         

    /* @keyframes example {
    0%   {}
    25%  {}
    50%  {}
    75%  {}
    100% {}
    }
    #cp{
        position: relative;
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
    }
 */
    
    @media only screen and (max-width: 768px) {

        #slogan{
            font-size: 150%;
        }
        .cardContent{
            width: 100%;
        }
        #animatedPart{
            display: none;
        }
        #whiteNav{
            padding:2%;
            padding-bottom: 3%;
            padding-top: 4%;
        }
        .sticky + .mainBody {
            padding-top:16%;
        }


        
    }
  </style>

</head>

<body>

    <!-- Blue Nav -->
        <div id="blueNav" style="background-image: linear-gradient(to right, #3b4187 , #11a8d6);">
            <div class="container" style="padding: 0.9%;;">
                <span style="color: white;">Demo Lectures &nbsp;</span>
                <span class="watchNowBtn"><small>Watch Now</small></span>
                <span style="float: right;color: white;">website@brandname.com</span>
            </div>
        </div>
    <!-- Blue Nav -->

    <!-- white sticky nav -->
        <div id="whiteNav">
            <div class="container">
                <div style="display:flex;flex-wrap: nowrap;align-items: baseline;">
                    <div id="brandName"><h3 style="font-weight: 900;color:grey">Brand <span id="namePart" style="color: #00c8eb;">Name</span></h3></div>
                    <div id="loginBtn"><span class="btn btn-sm">Login</span></div>
                    <div id="purpleNeonBtn"><span class="btn btn-sm" style="">Sign Up</span></div>
                </div>
            </div>
        </div>
    <!-- white sticky nav -->

    <div class="mainBody" style="background-image: linear-gradient(to right, #fff7fe , white);"> 
        <div class="container" style="margin-top: 4%;">

            <div class="row">
                <div class="col-sm-12 col-lg-8">

                    <div class="row">
                        <div class="col-12">
                            <span id="slogan" style="color: darkgrey;font-weight: 800;">Stand with best experts of the world. Let your future rest in safe hands.</span>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 7%;">
                        <div class="col-sm-12 col-xs-12 col-lg-6">
                            <div style="font-weight: 900;font-size:1.5rem;font-family: 'Lucida Console', Monaco, monospace;color:#3b3939">Schooling</div>
                            <div class="cardContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo laboriosam qui beatae minus officiis! Illum deserunt odio.</div><p><br></p>
                            <div ><span class="btn purpleBtn"><a href="schooling.html" style="text-decoration: none;color: white;">School with us</a></span></div><p><br></p><br>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div style="font-weight: 900;font-size:1.5rem;font-family: 'Lucida Console', Monaco, monospace;;color:#3b3939">One To One Lectures</div>
                            <div class="cardContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo laboriosam qui beatae minus officiis! Illum deserunt odio.</div><p><br></p>
                            <div>
                                <span class="btn purpleBtn">
                                    <a href="one_to_one_k122.php" style="text-decoration: none;color: white;">K12</a>
                                </span>&nbsp;&nbsp;
                                <span class="btn purpleBtn">
                                    <a href="#" style="text-decoration: none;color: white;">Higher</a>
                                </span>

                            </div><p><br></p><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div style="font-weight: 900;font-size:1.5rem;font-family: 'Lucida Console', Monaco, monospace;;color:#3b3939">Courses</div>
                            <div class="cardContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo laboriosam qui beatae minus officiis! Illum deserunt odio.</div><p><br></p>
                            <div><span class="btn purpleOulineBtn">Browse courses</span></div><p><br></p><br>
                        </div>
                    </div>
                </div>
            
                <div id="animatedPart" class="col-sm-12 col-lg-4" style="">
                    <h1>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Worried about your exams ?", "Tired of searching tutors ?", "No more worries about your future now !", "You are always in safe hands with us." ]' style="text-align: center;color: #00c8eb;font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;font-size:170%;font-weight:900;">
                            <span class="wrap"></span>
                        </a>
                    </h1>         
                </div>
            </div>

            <div class="row"  style="margin-top: 12%;margin-bottom: 12%;color: grey;">
                <div class="col-12">
                    <small>Copyright @2020 <i>website@gmail.com</i></small><br>
                    <small>Privacy Policy</small>
                </div>
            </div><p></p>

            <hr>
            <div style="display: flex;">
                <button id="purpleTheme" class="btn btn-sm" style="background-color: #00c8eb;color: white;" onclick="changeTheme(this)">Lightblue</button>
                <button id="greenTheme" class="btn btn-sm" style="background-color: #25b04a;color: white;" onclick="changeTheme(this)">Green</button>
                <button id="redTheme" class="btn btn-sm" style="background-color: #b02525;color:white;" onclick="changeTheme(this)">Reddish</button>
                <button id="gradientTheme" class="btn btn-sm btn-grad" onclick="changeTheme(this)">Gradient</button>
            </div>
        </div>
    </div> 




<script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="DataTables/ColReorder-1.5.2/js/dataTables.colReorder.min.js"></script>

<script>

    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("whiteNav");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction()
    {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
            navbar.classList.add("shadow")
            
        } else {
            navbar.classList.remove("sticky");
            navbar.classList.remove("shadow");
        }
    }

    function changeTheme(evt)
    {

        var theme=$(evt).attr("id")
        if(theme=="redTheme")
        {
            $("body").find("#purpleNeonBtn").css("background-color","#c23636")
            $("body").find("#purpleNeonBtn").css("box-shadow","0 8px 12px 0 rgba(166, 63, 63, 0.2), 0 10px 24px 0 rgba(166, 63, 63, 0.2)")
            $("body").find(".purpleBtn").css("background-color","#c23636")
            $("body").find(".purpleOulineBtn").css("color","#c23636")
            $("body").find(".purpleOulineBtn").css("border","1px solid #c23636")
            $("body").find("#namePart").css("color","#c23636")
            $("body").find(".mainBody").css("background-image","linear-gradient(to right, #fff7f7 , white)")
            $("body").find(".typewrite").css("color","#c23636")

        }
        else if(theme=="purpleTheme")
        {
            $("body").find("#purpleNeonBtn").css("background-color","#00c8eb")
            $("body").find("#purpleNeonBtn").css("box-shadow","0 8px 12px 0 rgba(188, 41, 214, 0.2), 0 10px 24px 0 rgba(188, 41, 214, 0.2)")
            $("body").find(".purpleBtn").css("background-color","#00c8eb")
            $("body").find(".purpleOulineBtn").css("color","#00c8eb")
            $("body").find(".purpleOulineBtn").css("border","1px solid #00c8eb")
            $("body").find("#namePart").css("color","#00c8eb")
            $("body").find(".mainBody").css("background-image","linear-gradient(to right, #fff7fe , white)")
            $("body").find(".typewrite").css("color","#00c8eb")

        }
        else if(theme=="greenTheme")
        {
            $("body").find("#purpleNeonBtn").css("background-color","#54cf44")
            $("body").find("#purpleNeonBtn").css("box-shadow","0 8px 12px 0 rgba(84, 207, 68, 0.2), 0 10px 24px 0 rgba(84, 207, 68, 0.2)")
            $("body").find(".purpleBtn").css("background-color","#54cf44")
            $("body").find(".purpleOulineBtn").css("color","#54cf44")
            $("body").find(".purpleOulineBtn").css("border","1px solid #54cf44")
            $("body").find("#namePart").css("color","#54cf44")
            $("body").find(".mainBody").css("background-image","linear-gradient(to right, #f8fcf7 , white)")
            $("body").find(".typewrite").css("color","#54cf44")

        }
        else if(theme=="gradientTheme")
        {
            $("body").find("#purpleNeonBtn").css("background-image","linear-gradient(to right, #f280d8, #6cb6e0)")
            $("body").find("#purpleNeonBtn").css("background-size","200% auto")
            $("body").find("#purpleNeonBtn").css("box-shadow","0 8px 12px 0 rgba(242, 128, 216, 0.2), 0 10px 24px 0 rgba(108, 182, 224, 0.2)")
            $("body").find(".purpleBtn").css("background-image","linear-gradient(to right, #f280d8 10%, #6cb6e0)")
            $("body").find(".purpleOulineBtn").css({"background": "linear-gradient(to right, #f280d8 0%, #6cb6e0 100%)", "-webkit-background-clip": "text", "-webkit-text-fill-color": "transparent"})
            $("body").find(".purpleOulineBtn").css({"border": "1px solid transparent", "border-image": "linear-gradient(to right, #f280d8, #6cb6e0)", "border-image-slice": "1","border-radius":"10px"})
            $("body").find("#namePart").css({"background": "linear-gradient(to right, #f280d8 0%, #6cb6e0 100%)", "-webkit-background-clip": "text", "-webkit-text-fill-color": "transparent"})
            $("body").find(".mainBody").css("background-image","linear-gradient(to right, #f8f5fa , white)")
            $("body").find(".typewrite").css({"background": "linear-gradient(to right, #f280d8 0%, #6cb6e0 100%)", "-webkit-background-clip": "text", "-webkit-text-fill-color": "transparent"})



        }

        
    }





var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };



</script>
</body>
</html>