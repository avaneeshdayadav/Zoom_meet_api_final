<?php

    if(isset($_POST['meet_credentials']))
    {
        $topic = test_input($_POST['topicName']);

        $url="launch_meeting.php?topic=".urlencode($topic);
        echo "<script>window.location='$url';</script>";

    }


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }


?>



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
  <link rel="stylesheet" type="text/css" href="css/faq.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="flickity-docs/flickity.min.css" media="screen"/>


  <style>
    
    html,body{
      padding: 0;
      overflow-x: hidden;
    }

    .hideOverflowWhenSideNavOpen {
      overflow: hidden;
    }

    /* The sticky class is added to the navbar with JS when it reaches its scroll position */
    .sticky {
    position: fixed;
    top: 0;
    width: 100%;
    }

    .brandName{
        flex-grow: 25;
    }
    .loginBtn{
        flex-grow: 2.5;
        background-color:transparent;color: white;
    }

    .scrolledLoginBtn{
      flex-grow: 2.5;
      background-color:transparent;color: #6b54ff;
    }
    .loginTxt:hover{
      text-decoration: underline;
    }



    /* SignUp */
      .signUpBtn{
        flex-grow: 2.5;
        text-align: center;
        background-color:white;color: #6b54ff;
        transition-duration: 0.3s;
      }
      .signUpBtn:hover{
        box-shadow: 0 8px 12px 0 rgba(107, 84, 255, 0.2), 0 10px 24px 0 rgba(107, 84, 255, 0.2);
      }
      .scrolledSignUpBtn{
        flex-grow: 2.5;
        text-align: center;
        background-color:#6b54ff;color: white;
        transition-duration: 0.3s;
      }
      .scrolledSignUpBtn:hover{
        box-shadow: 0 8px 12px 0 rgba(107, 84, 255, 0.2), 0 10px 24px 0 rgba(107, 84, 255, 0.2);
      }
    /* SignUp */



    .whiteNav{
        padding:1%;
        background-color: #6b54ff;
        z-index: 45;
        transition-duration: 0.3s;

    }
    .scrolled{
      padding:1%;
      background-color: white;
      z-index: 45;
      transition-duration: 0.3s;
    }

    .whiteNav .navFlexDiv{
      align-items: baseline;
    }
    
    .scrolled .navFlexDiv{
      align-items: baseline;
    }
    
    .navLinks{
        flex-grow: 17.5;
        color: white;
    }
    .scrolledNavLinks{
      flex-grow: 17.5;
      color: black;

    }
    
    .navlinkTxt:hover{
      text-decoration: underline;
      cursor: pointer;
    }
    .scrolledNavLinkTxt:hover{
      text-decoration: underline;
      cursor: pointer;
    }


        .horlineWhite{
          width: 35px;
          height: 4px;
          background-color: white;
          margin: 6px 0;
        }
        .horlineOrange{
          width: 35px;
          height: 4px;
          background-color: #6b54ff;
          margin: 6px 0;

        }

        #hamburgler{
          display: none;
          flex-grow: 2.5;
          float: right;
        }

        #sideNav{
          position:fixed;
          z-index: 100;
          top: 0;
          right: 0;
          width:0%;
          height:100vh;
          background-color: white;
        }


        .transparent{
          position: fixed;background: black;opacity: 0.4;height: 100vh;width: 100vw;z-index: 99;display: none;
        }

        #bannerImg{
          display: block;
        }

        #bannerTxt{
          padding-top: 5rem;
        }

        .bannerRow{
          padding-bottom: 0;
          padding-top: 4%;
        }
        
        .onlineDemoBtn{
          background-color: #6b54ff;
          color: white;
          transition-duration: 0.3s;
        }
        .onlineDemoBtn:hover{
          background-color: white;
          color: #6b54ff;
        }

        .faqs{
          margin-top: 8%;
          background-image: url('img/halfRightWave.png');
          background-color: aqua;
          background-size: 100% 100%;
          background-repeat: no-repeat;
        }

        #subjectDiv{
          overflow: auto;
        }
        /* Hide scrollbar for Chrome, Safari and Opera */
        #subjectDiv::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        #subjectDiv {
          -ms-overflow-style: none;  /* IE and Edge */
          scrollbar-width: none;  /* Firefox */
        }

        .teacherCard{
          border: 1px solid lightgrey;
          padding:2%;
          min-width:30vw;
          max-width: 30vw;
        }

        .acaOrange{
          color:black;
        }
        .sterOrange{
          color: white;
        }
        .acaWhite{
          color:grey;
        }
        .sterWhite{
          color:#6b54ff;
        }


        .teacherCourseRegBtn{
          transition-duration: 0.5s;
          padding:1%;
          text-align: center;
          width:100%;
          
        }

        .sideNavLinks{
          color:gray;
          padding: 5%;
          width: 100%;
          border-top: 1px solid lightgrey;
          border-bottom: 1px solid lightgrey;
          cursor: pointer;
          padding-left: 8%;
          transition-duration: 0.4s;
        }
        .sideNavLinks:hover{
          border-top:1px solid #6b54ff;
          border-bottom:1px solid #6b54ff;
        }


        .sideNavLogout{
          background-color: #6b54ff;
          color: white;
        }

        .sideNavLogout:hover{
          background-color:#00c8eb;
        }

        .brandVideo{
          width: 50vw;
          height: 60vh;
        }

        .text_underline{
          border:2px solid blue;
          border-radius: 25px;
          background-color: blue;
          width: 30%;
          margin-left: 35%;
        }

        .card_head_underline{
          border: 1px solid orange;
          border-radius: 25px;
          background-color: orange;
          width:30%;
        }

        .productCardDescription{
          display: block;
        }

        .productRegLink:hover{
          text-decoration: underline;
        }

        .each_row_of_product_cards{
          text-align: left;padding:1%;
        }
        .tutor_row_div{
          margin-top: 10%;
        }
        .why_choose_div{
          position: absolute;
          z-index: 6;
          top:0;
          padding:5%;
          color: white;
          margin-left: 10%;width: 80%;
          text-align: center;
        }
    @media only screen and (max-width: 768px) {

      .why_choose_div{
        padding: 1%;
      }
      .tutor_row_div{
        margin-top: 1%;
      }

      .each_row_of_product_cards{
        margin-top:-2%;
      }
      .productCardDescription{
        display: block;
      }
      .text_underline{
        width:70%;
        margin-left: 15%;
      }

      .brandVideo{
        width: 80vw;
        height: 30vh;
      }
      .teacherCard{
        min-width: 80vw;
        max-width: 80vw;
      }

      .whiteNav .navFlexDiv{
        align-items: center;
      }
      .scrolled .navFlexDiv{
        align-items: center;
      }

        #hamburgler{
          display: block;
        }

        .navLinks{
          display: none;
        }
        .scrolledNavLinks{
          display: none;
        }

        .loginBtn{
          display: none;
        }
        .scrolledLoginBtn{
          display: none;
        }
        .signUpBtn{
          display: none;
        }
        .scrolledSignUpBtn{
          display: none;
        }

        /* #bannerTxt{
          padding-top: 4rem;
        } */

        .faqs{
          margin-top: 15%;
        }
        /* #banner{
          text-align: center;
        }         */
    }


  </style>

</head>

<body>
  <div class="transparent"></div>

    <!-- white sticky nav -->
        <div class="whiteNav sticky shadow">
            <div class="container">
                <div class="navFlexDiv" style="display:flex;flex-wrap: nowrap;">
                    <div class="brandName"><h3 class="acaOrange" style="font-weight: 900;">Aca<span class="sterOrange">STER</span></h3></div>
                    <div class="navLinks" id="schoolingLink"><span class="navlinkTxt">Schooling </span></div>
                    <div class="navLinks" id="tutoringLink"><span class="navlinkTxt">Tutoring </span></div>
                    <div class="navLinks" id="coursesLink"><span class="navlinkTxt">Courses </span></div>
                    <div class="navLinks" id="enquiryLink"><span class="navlinkTxt">Enquiry </span></div>
                    <div class="loginBtn"><span class="loginTxt btn btn-sm">Login</span></div>
                    <div class="signUpBtn"><span class="btn btn-sm" style="">Sign Up</span></div>
                    <div class="btn btn-sm hamburgler" id="hamburgler" onclick="showSidebar()">
                      <div class="horlineWhite"></div>
                      <div class="horlineWhite"></div>
                      <div class="horlineWhite"></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- white sticky nav -->


    <!-- white side nav -->
    <div id="sideNav" style="overflow-y:auto;">

      <div class="sideNavHead" style="padding: 5%;white-space: nowrap;">
        <div class="loggedInDisplay" style="display: block;">
          <div style="display: flex;align-items: center;align-items: center;">
            <div style="font-size: larger;font-weight: 400;flex-grow: 95;"><span style="color: #6b54ff;">Welcome</span></div>
            <div class="closeBtn btn" style="flex-grow: 3;height: 20px;width: 20px;background-image: url('img/crossIcon.png');background-size: 100% 100%;background-repeat: no-repeat;"><span style=""></span></div>
          </div>
          <div style="font-size: larger;font-weight: 400;">Vivek Sharma</div>  
        </div>
        <div class="generalDisplay" style="display: none;">
          <div style="display: flex;align-items: center;white-space: nowrap;">
            <div style="flex-grow:95"><span class="btn btn-sm btn-link" style="color:gray;">Login</span>&nbsp;<span class="btn btn-sm" style="background-color: #6b54ff;color: white;flex-grow:45;">Sign Up</span></div>
            <div class="closeBtn btn" style="flex-grow: 3;height: 20px;width: 20px;background-image: url('img/crossIcon.png');background-size: 100% 100%;background-repeat: no-repeat;"><span style=""></span></div> 
          </div>
        </div>
      </div>

      <div class="sideNavMenu" style="display: flex;flex-direction: column;white-space: nowrap;text-align: left;">
        <div class="sideNavLinks">Homepage</div>
        <div class="sideNavLinks">Schooling</div>
        <div class="sideNavLinks">Tutoring</div>
        <div class="sideNavLinks">Courses</div>
        <div class="sideNavLinks">Enquiry</div>
      </div>
      <div style="text-align: center;padding-top: 8%;"><div class="btn btn-sm btn-danger sideNavLogout" style="width: 80%;">Logout</div></div>


    </div>
    <!-- white side nav -->



    <div id="demoCouncelling" style="padding:1%;padding:12% 1% 10% 1%;background-image: url('img/My_drawing.png'),linear-gradient(to bottom,#6b54ff,#00c8eb);background-size: 100% 100%;background-repeat: no-repeat;">
        <div class="row">
            <div class="col-sm-0 col-lg-2"></div>
            <div class="col-sm-12 col-lg-8">
                <form method="post">
                    <div style="font-weight: 500;font-size: 1.5rem;text-align: center;vertical-align: middle;color:white;">Provide a topic name and password for your meeting.</div><br>
                    <div style='text-align:center;'>
                      <span style='text-align:center;'><input type='text' placeholder="e.g Python Exam Discussion" style='outline: none;width:40%;padding: 1% 1.5%;border-radius:25px;border-color:white;' name="topicName"  required=""></span>
                      <span style='text-align:center;'><input type='text' placeholder="e.g 123newmeeting" style='outline: none;width:40%;padding: 1% 1.5%;border-radius:25px;border-color:white;' name="meet_pwd"  required=""></span><br>
                    </div>
                    <div style="text-align: center;padding: 2%;"><button type='submit' class="btn btn-lg onlineDemoBtn shadow" name="meet_credentials">GET MEETING CREDENTIALS</button></div>
                </form>
            </div>
            <div class="col-sm-0 col-lg-2"></div>
        </div>
    </div>



    <footer style="background-color: #262521;font-family: Open sans,sans-serif;">
        <div class="container" style="color:white;">
  
        <div class="row" style="padding-top: 2%;">
          
          <div class="col-lg-8 col-sm-12" id="brandName" style="">
            <h3 style="font-weight: 900;color:grey">Aca<span id="namePart" style="color: #6b54ff;">STER</span>
            </h3>
          
            <ul class="" style="list-style-type: none;padding-top: 0.5rem;padding-left: 0%;">
              <li style="float: left;padding:1%;">Icon1</li>
              <li style="float:left;padding:1%;">Icon2</li>
              <li style="float:left;padding:1%;">Icon3</li>
              <li style="float:left;padding:1%;">Icon3</li>
              <li style="float:left;padding:1%;">Icon3</li>
            </ul>
          </div>
  
  
        <div class="col-lg-4 col-sm-12">
            <div style="padding-left:2% ;"> 
            <p>CAll US:+91-9865235874</p> 
            <ul style="list-style-type:none;padding-left: 0%;">
              <li><span>we are open 24X7 to help you</span></li>
              <li><span>Website@brandname.com</span></li>
            </ul>
            </div>     
        </div>
      </div>
  
        <hr style="margin: 0;height: 0.5px;background-color: white;">
  
      <div class="row" style="padding-top: 2%;">
         <div class="col-lg-12 col-sm-12" style="color: #6b54ff;padding-bottom: 0.5rem;">QUICK LINKS</div>
  
         <div class="col-lg-4">
          
          <ul style="list-style-type: none;padding-left: 0;">
           
         
          <li >
           <span>Become A teacher</span><br>
            <span>Benefits</span>
          </li>
      
  
        
            <li  style="padding-top: 1rem;" >
              <span>Privacy Policy</span><br>
              <span>About us</span>
            </li>
          
          
          </ul>
        </div>
  
        <div class="col-lg-4">
          
          <ul style="list-style-type: none;padding-left: 0;">
          <li  >
            <span>why Acaster?</span><br>
            <span>Contact us</span>
          </li>
            <li style="padding-top: 1rem;">
              <span>Terms&Conditions</span><br>
              <span>Acaster Blog</span>
            </li>
          </ul>
        </div>
  
        <div class="col-lg-4">
         
          <ul style="list-style-type: none;padding-left: 0;">
          <li>
           
         
            <span>News</span><br>
            <span>FAQ'S</span>
          </li >
            <li style="padding-top:1rem">
             
              <span>Expert Teacher's</span><br>
              <span>State Boards</span>
              
            </li>
          </ul>
        </div>
          
  
        </div>
  
        <hr style="margin: 0;height: 0.5px;background-color: white;">
        <div class="row">
          <div class="col-lg-12">
  
            <div style="text-align: center;padding: 3%;">© 2020,Acaster.com. All rights reserved.
            </div>
  
          </div>
        </div>
  
  
  
        </div>
        
    </footer>
<script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="DataTables/ColReorder-1.5.2/js/dataTables.colReorder.min.js"></script>
<script src="DataTables/rellax-master/rellax.min.js"></script>


<script>

    // // Accepts any class name
    // var rellax = new Rellax('.rellax');


    function showSidebar()
    {
      $("#sideNav").animate({
          width: "70vw"
      });

      $('.transparent').css('display','block');
      $('html').addClass("hideOverflowWhenSideNavOpen");
    }

    $(".closeBtn").click(function(){
        $("#sideNav").animate({
            width: 0
        });
        $('.transparent').css('display','none');
        $('html').removeClass("hideOverflowWhenSideNavOpen");

  	});

    $(".transparent").click(function(){
    		$("#sideNav").animate({
          width: 0
        });
        $('.transparent').css('display','none');
        $('html').removeClass("hideOverflowWhenSideNavOpen");

    });


    $( window ).resize(function() {
      if($("#sideNav").css("width")=='0')
      {
        $$('.transparent').css('display','none');
      }
      if (document.documentElement.clientWidth > 800 )
      {
        $("#sideNav").css("width","0");
        $('.transparent').css('display','none');
        $('html').removeClass("hideOverflowWhenSideNavOpen");

      }
      // else if (document.documentElement.clientWidth < 800 )
      // {
      //   $("#sideNav").css("width","0");
      //   $('.transparent').css('display','none');
      //   $('html').removeClass("hideOverflowWhenSideNavOpen");

      // }

    });
    

    $(function () {
  $(document).scroll(function () {
    var $banner = $('#banner');

    var $nav = $(".whiteNav");
    var $navLinks = $('.navLinks')
    var $navLinkTxt = $('.navLinkTxt');
    var $loginBtn = $('.loginBtn');
    var $signUpBtn = $('.signUpBtn');
    var $acaOrange = $('.acaOrange');
    var $sterOrange = $('.sterOrange');
    var $horlineWhite = $('.horlineWhite');
    
	$nav.toggleClass('scrolled', $(this).scrollTop() > $banner.height());
    $navLinks.toggleClass('scrolledNavLinks', $(this).scrollTop() > $banner.height());
    $navLinkTxt.toggleClass('scrolledNavLinkTxt', $(this).scrollTop() > $banner.height());
    $loginBtn.toggleClass('scrolledLoginBtn',$(this).scrollTop() > $banner.height());
    $signUpBtn.toggleClass('scrolledSignUpBtn',$(this).scrollTop() > $banner.height());
    $acaOrange.toggleClass('acaWhite',$(this).scrollTop() > $banner.height());
    $sterOrange.toggleClass('sterWhite',$(this).scrollTop() > $banner.height());
    $horlineWhite.toggleClass('horlineOrange',$(this).scrollTop() > $banner.height());
    
	});
});

</script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
</html>