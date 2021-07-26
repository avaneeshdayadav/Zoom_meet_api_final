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

    <div class="mainbody">
        <div id="banner" style="background-image: url('img/My_drawing.png'),linear-gradient(to bottom,#6b54ff,#00c8eb);background-size: 100% 100%;background-repeat: no-repeat;">
            <div class="container">
                <div class="row bannerRow">
                    <div id="bannerTxt" class="col-lg-6 col-sm-12 rellax" data-rellax-desktop-speed="-1.6" data-rellax-mobile-speed="4" data-rellax-xs-speed="4">
                        <span style="font-weight: 700;font-size:2.3rem;color: white;text-shadow: 0px 2px 3px black;">India's Best Online Schooling Concept</span><p></p>
                        <span style="font-size:1.5rem;color: white;font-weight: 100;">Expert schooling from I to VIII</span><p></p>
                        <span style="color: white;font-size: 1rem;font-weight: 600;">CBSE&nbsp;&nbsp;|&nbsp;&nbsp;ICSE&nbsp;&nbsp;|&nbsp;&nbsp;State Board</span><p><br></p>
                        <span><button class="btn btn-lg" style="background-color: white;color: #6b54ff;border-radius: 25px;">&nbsp;&nbsp;Browse all courses&nbsp;&nbsp;</button></span>
                    </div>
                    <div id="bannerImg" class="col-lg-6 col-sm-12 rellax" data-rellax-desktop-speed="4" data-rellax-mobile-speed="1.5" data-rellax-xs-speed="1.5" style="padding: 4%;">
                        <img src="img/trophi.png" style="width:100%;padding:2%;">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="jumbotron" style="margin-top: 2%;margin-bottom: 6%;text-align: center;background-color: #00c8eb;background-image:url('img/halfRightWave.png');background-size: 100% 100%;background-repeat: no-repeat;">

          <div style="font-weight: 500;font-size: 1.5rem;text-align: center;vertical-align: middle;padding: 3%;color: grey;"><b>Know us more and know us better. No more blind trusts !</b></div>


          <iframe class="brandVideo" src="https://www.youtube.com/embed/dtoiMKGzw7c?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <video width="320" height="240" controls>
            <source src="videos/addvertise.mp4" type="video/mp4">

            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> 

        </div> -->

        <div id="demoCouncelling" style="padding:1%;padding-top:3%;">
          <div class="row">
            <div class="col-sm-0 col-lg-2"></div>
            <div class="col-sm-12 col-lg-8">
              <div style="font-weight: 500;font-size: 1.5rem;text-align: center;vertical-align: middle;">Start Your Success with <span style="color: grey;">Aca</span><span style="color: #6b54ff;">STER</span>, Get a FREE Online counselling session.</div>
              <div style="text-align: center;padding: 2%;"><button class="btn btn-lg onlineDemoBtn shadow" onclick="location.href = 'live_classes.php'">CREATE LIVE CLASS</button></div>
            </div>
            <div class="col-sm-0 col-lg-2"></div>
          </div>
        </div>



      <div style="margin-top: 6%;">
        <div style="font-size: 1.5rem;font-weight: 600;color:black;text-align: center;">Academic Courses</div>
        <div style="text-align:center;"><div class="text_underline"></div></div>
      </div>

      <div class="jumbotron " style="background-color: white;">
        <div class="row" style="text-align: left;padding:1%">
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/school_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>1-10 all subjects</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/vedic_math_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Vedic Maths</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/olympic-ring-color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Olympiad Preparation</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row each_row_of_product_cards">
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/scholorship_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Scholorship Preparation</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/12th_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>12th Board Exam</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/10th_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>10th Board Exam</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>

      <div style="margin-top: 6%;">
        <div style="font-size: 1.5rem;font-weight: 600;color:black;text-align: center;">Non-Academic Courses</div>
        <div style="text-align:center;"><div class="text_underline"></div></div>
      </div>

      <div class="jumbotron" style="background-color: white;">
        <div class="row" style="text-align: left;padding:1%;">
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/creativity_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Creativity</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/dance_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Dance</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/sing_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Music</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row each_row_of_product_cards">
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/yoga_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Yoga</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/fitness_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Fitness</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card academicsCard shadow" style="padding: 3%;cursor: pointer;">
                <div class="row">
                  <div class="col-4" style="text-align: center;">
                    <img class="icon-circles" src="img/motivation_color.png" alt="No img" style="padding:13px;height: 100px;width: 100px;">
                  </div>
                  <div class="col-8" style="padding:1%">
                    <h5 style="color: grey;"><b>Motivation</b></h5>
                    <div style="padding-top:3%;padding-bottom:4%;"><div class="card_head_underline"></div></div>
                    <div class="productCardDescription" style="text-align:left;color:grey;font-size:0.8rem;">Get to study all your school subjects online with personal teacher.</div>
                    <div style="text-align: left;padding-top: 4%;;"><h6 class="productRegLink" style="color: blue;font-family: 'Lucida Console', Monaco, monospace;">Register</h6></div>
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>

<div style="background-repeat: no-repeat;background-image: url('img/upper_right_wave.png');background-size: 100% 100%;background-color: #00c8eb;">
  <div class="container">

    <div class="row" style="padding:0;">
  
      <div class="col-sm-12 col-lg-5">
        <div style="color: grey;font-family: 'Lucida Console', Monaco, monospace;padding:2% 0 2% 0;">KNOW YOUR TUTORS</div>
        <div style="font-weight: 600;font-size: 1.5rem;">Each course you take is well planned and designed by these teachers.</div>
        <div style="color:grey;padding:2% 0 2% 0;line-height: 1.8;">
          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
          <p>Explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is</p>
          <p style="padding:5% 0 5% 0"><button class="btn btn-sm btn-outline-info" style="border-radius:25px;">SEE THEM ALL</button></p>
        </div>
      </div>
  
      <div class="col-sm-12 col-lg-7">
        <div class="row tutor_row_div">
          <div class="col-sm-12 col-lg-4" style="display: flex;flex-direction: column;align-items: center;">
            <div style="background-image: url('img/tutor1.png');width:200px;height: 200px;background-size: 100% 100%;background-repeat: no-repeat;"></div><p></p>
            <div><b>Steve Rogers</b></div><p><br></p>
          </div>
          <div class="col-sm-12 col-lg-4" style="display: flex;flex-direction: column;align-items: center;">
            <div style="background-image: url('img/tutor2.png');width:200px;height: 200px;background-size: 100% 100%;background-repeat: no-repeat;"></div><p></p>
            <div><b>Chris Evans</b></div><p><br></p>
          </div>
          <div class="col-sm-12 col-lg-4" style="display: flex;flex-direction: column;align-items: center;">
            <div style="background-image: url('img/tutor3.png');width:200px;height: 200px;background-size: 100% 100%;background-repeat: no-repeat;"></div><p></p>
            <div><b>Black Widow</b></div><p><br></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div style="position: relative;background-image: url('img/laptop_table.png');background-repeat: no-repeat;background-size: 100% 100%;height: 60vh;background-attachment: fixed;">
  <div style="position: absolute;top:0;background-image:linear-gradient(to right,darkblue,lightblue);opacity: 0.7;z-index: 3;;height: 60vh;color: white;width: 100vw;">
  </div>
  <div class="why_choose_div">
    <h1>Why should you choose Acaster as your coaching institute?</h1><br>
    <div style=""><h5>Take our hand and be ready to see a different educational world.</h5></div>
    <button class="btn btn-sm btn-light">Know More</button><br>
  </div>
</div>

      <div class="row faqs">
        <div class="col-lg-9 mx-auto">
          <div style="font-size: 1.5rem;font-weight: 600;color:black;padding-left:3%;margin-bottom: 3%;">FAQ's :</div>
          <div id="accordionExample" class="accordion shadow">
    
            <!-- Accordion item 1 -->
            <div class="card">
              <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2" style="line-height: 1.6;">Can I ask doubts on personal phone of teachers ?</a></h6>
              </div>
              <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                </div>
              </div>
            </div>
    
            <!-- Accordion item 2 -->
            <div class="card">
              <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2" style="line-height: 1.6;">Is there any time when offers are flashed on courses ?</a></h6>
              </div>
              <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                </div>
              </div>
            </div>
    
            <!-- Accordion item 3 -->
            <div class="card">
              <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2" style="line-height: 1.6;">Why to join your coaching ?</a></h6>
              </div>
              <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                </div>
              </div>
            </div>

            <!-- Accordion item y -->
            <div class="card">
              <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2" style="line-height: 1.6;">Do you charge for demoCouncelling ?</a></h6>
              </div>
              <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                <div class="card-body p-5">
                  <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </div>

      <p><br><br></p>

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
    </div>

<script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="DataTables/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="DataTables/ColReorder-1.5.2/js/dataTables.colReorder.min.js"></script>
<script src="DataTables/rellax-master/rellax.min.js"></script>


<script>

    // Accepts any class name
    var rellax = new Rellax('.rellax');


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