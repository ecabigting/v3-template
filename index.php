<!DOCTYPE html>
<!--
    AUTHOR: Eric Thomas D. Cabigting/ericcabigting@outlook.com
    CREATED DATE: 2016-17-06
    VERSION: v2.00
-->
<HTML>
  <HEAD>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="description" content="Al Dhafra Private Schools - Abu Dhabi, British and American accredited school">
    <meta name="keywords" content="Al Dhafra Private Schools, International School, Education, School, High School, Elementary, Kindergarten, United Arab Emirates, UAE, Abu Dhabi, AUH">
    <meta name="author" content="Eric Thomas D. Cabigting">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="img/favicon.png" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/dps_reset.css">
        <link rel="stylesheet" type="text/css" href="css/fonts-custom.css">
        <link rel="stylesheet" type="text/css" href="css/dps_style.css">
        <!-- <?php echo $title . ' - ';?> -->
        <title>Al Dhafra Private Schools - Abu Dhabi</title>
  </HEAD>
  <BODY>
    <!-- body div -->
    <div class="divMainBody">
      <!-- top head -->
        <div class="divTopHead">
          <!-- <button type="button" class="btn btn-warning btn-top-head dpsRight" ><span class="glyphicon glyphicon-envelope glyp-margin"></span>EMAIL</button> -->
          <button type="button" class="btn btn-warning btn-top-head dpsRight" ><span class="glyphicon glyphicon-lock glyp-margin"></span>SCHOOL MANAGEMENT SYSTEM</button>
        </div>
      <!-- end top head -->
      <!-- mid head -->
        <div class="divMidHead">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 col-md-2">
                  <img src="img/layout/schoollogo.png" class="img-responsive mainLogo" >
                </div>
                <div class="col-xs-12 col-md-10 visible-md-block visible-lg-block headSchoolName" style="text-align:center;padding:1px;">
                  <h1>AL DHAFRA PRIVATE SCHOOL</h1>
                  <h3 style="margin-top:-3px;">British and American Curriculum</h3>
                </div>
              </div>
            </div>
        </div>
      <!-- end mid head -->
      <!-- bottom head -->
        <div class="divBottomHead">
            <img src="img/layout/campus.jpg" Class="imgCampusBanner img-responsive">
        </div>
      <!-- end bottom head -->
      <!-- navbar container -->
      <div class="divNavBarContainer">
        <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
            <div class="container-fluid fuckingNavbarContainer">
                <!-- <a class="navbar-brand" vhref="#">Brand</a> -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar">
                      </span><span class="icon-bar">
                      </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav">
                        <li><a href="/"><span class="glyphicon glyphicon-home" style="font-size:15px;"></span></a>
                        </li>
                        <li><a class="dropdown-toggle" data-toggle="dropdown">ADMISSION</a>
                          <ul class="dropdown-menu" role="menu">
                              <li><?php echo anchor('http://adsict.ethdigitalcampus.com/DCWeb/form/jsp_aaa/olAdmission_Bahrain.jsp?dbConnVar=ADS&portalFlag=adm', 'Online Admission') ?></li>
                              <li><?php echo anchor('admission/required-documents', 'Required Documents') ?></li>
                              <li><?php echo anchor('admission/tuition-fee', 'Tuition Fees') ?></li>
                              <li><?php echo anchor('admission/policy', 'Policy') ?></li>
                          </ul>
		                    </li>
						<li><a class="dropdown-toggle" data-toggle="dropdown">ACTIVITIES</a>
                          <ul class="dropdown-menu" role="menu">
                              <li><?php echo anchor('activities/Handwriting-Competition-Teachers', 'Handwriting Competition(Teachers)') ?></li>
                              <li><?php echo anchor('activities/Handwriting-Competition-Students', 'Handwriting Competition(Students)') ?></li>
                              <li><?php echo anchor('activities/Math-Club', 'Math Club') ?></li>
                              <li><?php echo anchor('activities/Robotics-Club', 'Robotics Club') ?></li>
                              <li><?php echo anchor('activities/Friendly-Football-Tournament', 'Friendly Football Tournament') ?></li>
                              <li><?php echo anchor('http://power-kids.at/?page_id=182', 'Power-Kids By Dr. Eva ©') ?></li>
                          </ul>
						</li>
						<li><a class="dropdown-toggle" data-toggle="dropdown">DOWNLOADS</a>
                          <ul class="dropdown-menu" role="menu">
                              <li><?php echo anchor('download/ADSF-2015-AR.pdf', 'Abu Dhabi Science Festival Info(Arabic)') ?></li>
                              <li><?php echo anchor('download/ADSF-2015-EN.pdf', 'Abu Dhabi Science Festival Info(English)') ?></li>
                              <li><?php echo anchor('download/RegistrationForm.pdf', 'Registration Form') ?></li>
                              <li><?php echo anchor('download/MedicalForm.pdf', 'Registration Medical Form') ?></li>
                              <li><?php echo anchor('download/winvarjac14-15.pdf', 'Winter Varcity Jacket') ?></li>
                              <li><?php echo anchor('download/BookList.pdf', 'Book List 2013 - 2014') ?></li>
                              <li><?php echo anchor('download/SchoolCalendar2015-2016.jpg', 'School Calendar 2015 - 2016') ?></li>
                              <li><?php echo anchor('download/SchoolCalendar2016-2017.jpg', 'School Calendar 2016 - 2017') ?></li>
                              <li><?php echo anchor('download/ParentPortalGuide.pdf', 'Parent Portal Guide') ?></li>
                              <li><?php echo anchor('download/ParentPortalVideo.mp4', 'Parent Portal Video') ?></li>
                              <li><?php echo anchor('download/ParentPortalWeeklyPlanGuide.pdf', 'Parent Portal Weekly Plan Guide') ?></li>
                              <li><?php echo anchor('download/ParentPortalReportCardGuide.pdf', 'Parent Portal Report Card Guide') ?></li>
							  <li><?php echo anchor('download/Consent-Form-Measles-Campaign-Student.docx', 'Consent Form Measles Campaing Students') ?></li>
                              <li><?php echo anchor('download/CIEExam2015-2016-JUNE.pdf', 'IGCSE, AS & AL CIE Exam Timetable 2015-2016') ?></li>
                              <li><?php echo anchor('download/CheckpointCIEExam2015-2016-MAY.pdf', '9IG Checkpoint CIE Exam Timetable 2015-2016') ?></li>
                          </ul>
						</li>
						<li><a class="dropdown-toggle" data-toggle="dropdown">SCHOOL</a>
                          <ul class="dropdown-menu" role="menu">
							  <li><?php echo anchor('contact-us/', 'CONTACT US') ?></li>
							  <li><?php echo anchor('school/message-from-the-principal', 'Message from the Principal') ?></li>
							  <li><?php echo anchor('school/vision-mission-values-beliefs', 'Vision, Mission, Values & Beliefs') ?></li>
							  <li><?php echo anchor('school/objectives', 'Objectives') ?></li>
							  <li><?php echo anchor('school/code-of-conduct', 'Code of Conduct') ?></li>
							  <li><?php echo anchor('school/child-protection-policy-en', 'Child Protection Policy(ENGLISH)') ?></li>
							  <li><?php echo anchor('school/child-protection-policy-ar', 'Child Protection Policy(ARABIC)') ?></li>
							  <li><?php echo anchor('school/tardy-policy-and-procedures', 'Tardy Policy and Procedures') ?></li>
							  <li><?php echo anchor('school/dress-code-policy', 'Dress Code Policy') ?></li>
							  <li><?php echo anchor('school/curriculum', 'Curriculum') ?></li>
							  <li><?php echo anchor('school/schedule', 'School Schedule') ?></li>
							  <li><?php echo anchor('school/gallery', 'Gallery') ?></li>
							  <li><?php echo anchor('school/assessments-policies', 'Assessments Policies') ?></li>
                          </ul>
						</li>
						<li><a class="dropdown-toggle" data-toggle="dropdown">PARENT</a>
                          <ul class="dropdown-menu" role="menu">
                              <li><?php echo anchor('download/ParentPortalGuide.pdf', 'Parent Portal Guide') ?></li>
                              <li><?php echo anchor('download/ParentHandbookDoc.pdf', 'Hand Book') ?></li>
                          </ul>
						</li>
						<li><a class="dropdown-toggle" data-toggle="dropdown">SEN</a>
							<ul class="dropdown-menu" role="menu">
							  <li><?php echo anchor('sen/anti-bullying', 'DPS Anti-Bullying') ?></li>
							  <li><?php echo anchor('sen/policy-and-procedures', 'Policy and Procedures') ?></li>
							  <li><?php echo anchor('sen/wall-of-fame', 'Wall of Fame') ?></li>
							  <li><?php echo anchor('sen/gifted-and-talented-students', 'Gifted and Talented Students') ?></li>
							</ul>
						</li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
      <!-- end navbar container -->
      <!-- main page content -->
      <div class="divMainContentBody">
        <!-- page contents starts here -->
            <!-- slide show stats here -->
                <div id="dps_carousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#dps_carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#dps_carousel" data-slide-to="1"></li>
                    <li data-target="#dps_carousel" data-slide-to="2"></li>
                    <li data-target="#dps_carousel" data-slide-to="3"></li>
                    <li data-target="#dps_carousel" data-slide-to="4"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="img/slideshow/nat001.jpg" alt="...">
                        </div>
                        <div class="item">
                          <img src="img/slideshow/nat002.jpg" alt="...">
                        </div>
                        <div class="item">
                          <img src="img/slideshow/nat003.jpg" alt="...">
                        </div>
                        <div class="item">
                          <img src="img/slideshow/nat004.jpg" alt="...">
                        </div>
                        <div class="item">
                          <img src="img/slideshow/nat005.jpg" alt="...">
                        </div>
                      </div>
                </div>
            <!-- end of slide show -->
            <!-- content for home page -->
                <div class="container-fluid" style="margin-top:5px;color:#000;text-align:center;">
                  <div class="row">
                    <div class="divMsgPrincipal col-xs-12 col-md-8">
                      <h3>Message from the Principal</h3>
                      <hr class="hrForBox1"/>
                    </div>
                    <div class="divRecentEvents col-xs-12 col-md-4">
                      <h3 style="font-size:23px;line-height:26px;">UPCOMING EVENTS</h3>
                      <hr class="hrForBox2"/>
                    </div>
                  </div>
                </div>
            <!-- end content for home page -->
        <!-- end of page contents -->
      </div>
      <!-- end main page content -->
      <!-- start of footer -->
      <div class="divMainFooter">
        <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-8">
                <h3><u>CONTACT US</u></h3>
                <ul class="ulForFooter">
                <li>Address: P.O. Box 25801, ME09 Mohamed Bin Zayed City, Abu Dhabi, UAE</li>
                <li>Phone: 0097126108400 / 0097126108401</li>
                <li>Fax: 0097125599883</li>
                <li>Email: administration@dhafraschools.com</li>
                <li>Website: http://abu-dhabi.dhafraschools.com</li>
                </ul>
              </div>
              <div class="col-xs-12 col-md-4">
                <div class="footerIconsCont">
                  <h3><u>FOLLOW US</u><br></h3>
                  <img src="img/layout/ef-logo.png"/>
                  <img src="img/layout/t-logo.png"/>
                  <img src="img/layout/L-logo.png"/>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- end of footer -->
    </div>
    <!-- end body div -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dps_script.js"></script>
  </BODY>
</HTML>
