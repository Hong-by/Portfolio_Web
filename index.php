<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Good BY Portfolio!</title>

  <link rel="shortcut icon" href="img/logo/favicon.ico" type="image/x-icon">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/9881703c17.js" crossorigin="anonymous"></script>
  <!-- Reset CSS Style Code Link -->
  <link rel="stylesheet" href="css/reset.css">
  <!-- Main Css Style Code Link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animation.css">
  <!-- Media CSS Style Code Link -->
  <link rel="stylesheet" href="css/media.css">
  <!-- wow animation Plugin -->
  <link rel="stylesheet" href="lib/css/animate.css">
</head>

<body>
  <div class="wrap">
    <header>
      <div class="center">
        <div class="logo">
          <h1>BY.</h1>
        </div>
        <div class="gnb">
          <ul>
            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#project"><i class="fas fa-laptop-code"></i> Project</a></li>
            <li><a href="#about"><i class="far fa-user"></i> About</a></li>
            <li><a href="#"><i class="far fa-file-alt"></i> Resume</a></li>
          </ul>
        </div>

        <!-- Mobile Menu Icon -->
        <div class="menu_ico">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <nav class="mobile_Menu">
        <div class="center">
          <ul>
            <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#project"><i class="fas fa-laptop-code"></i> Project</a></li>
            <li><a href="#about"><i class="far fa-user"></i> About</a></li>
            <li><a href="#"><i class="far fa-file-alt"></i> Resume</a></li>
          </ul>
        </div>
      </nav>
      <div class="overlay"></div>
    </header>
    <!-- End of header -->
    <section class="landing" id="home">
      <div class="landing-wrap">
        <div class="left">
          <p class="left-font">Portfolio 2021</p>
        </div>
        <div class="center">
          <div id="landing_video">
            <div class="typing-effect">
              <div class="typing-txt">
                <ul>
                  <li>#UI/UX #Front-end</li>
                  <li>#HTML5 #CSS3</li>
                  <li>#Javascript #PHP</li>
                </ul>
              </div>
              <p class="typing"></p>
            </div>

            <!-- <p class="left-font">Portfolio 2021</p> -->
            <video id="background_video" src="img/landing/landing_video.mp4" autoplay loop muted></video>
          </div>
          <div class="main_tit">
            <h2>안녕하세요.</h2>
            <h2>UI/UX Developer 홍범영입니다.</h2>
            <p>사용자 친화적이며 최적화된 인터페이스를 개발을 목표로 하고 있습니다.
              앞으로 더 많은 프로젝트에 참여함으로써 성장하는 개발자가 되겠습니다.</p>
          </div>
        </div>
        <div class="right">
          <p class="right-font">hby033@naver.com</p>
        </div>
      </div>
      <div class="landing-bottom"></div>
    </section>
    <!-- End of Landing Section -->
    <section class="project wow fadeInUp" id="project">
      <div class="center">
        <div class="sec_tit">
          <h2>Project</h2>
        </div>
        <div class="project_contants">
          <div class="contant con_img wow fadeInUp" data-wow-offset="30">
            <a href="http://hby033.dothome.co.kr/zay/index.php"><img src="img/portfolio/zay.JPG" alt=""></a>
          </div>
          <div class="contant con_txt wow fadeInUp" data-wow-offset="200">
            <h3>Database Project</h3>
            <p>php를 활용해 구축된 전자 상거래 홈페이지 입니다.<br> 데이터베이스를 통해 상품 등록, 장바구니, 회원관리 등 기능을 제공합니다.</p>
            <div class="language">
              <ul>
                <li><i class="fab fa-html5"></i>
                  <p>HTML5</p>
                </li>
                <li><i class="fab fa-css3-alt"></i>
                  <p>CSS3</p>
                </li>
                <li><i class="fab fa-js-square"></i>
                  <p>Javascript</p>
                </li>
                <li><i class="fab fa-php"></i>
                  <p>PHP</p>
                </li>
                <li><i class="fas fa-database"></i>
                  <p>mySQL</p>
                </li>
              </ul>
            </div>
            <div class="con_link">
              <em><a href="https://github.com/Hong-by/Database-Project"><i class="fab fa-github"></i> git</a></em>
              <em><a href="http://hby033.dothome.co.kr/zay/index.php"><i class="fas fa-external-link-alt"></i>
                  View</a></em>
            </div>
          </div>
          <div class="contant con_txt wow fadeInUp" data-wow-offset="200">
            <h3>go Camping</h3>
            <p>한국 관광공사의 고캠핑 API를 활용하여 만든 go camping입니다.
              주변 캠핑장 검색 및 캠핑장 이름으로 캠핑장을 검색할 수 있는 기능을 적용하였으며 검색 결과에 따른 상세페이지를 구현하였습니다.</p>
            <div class="language">
              <ul>
                <li><i class="fab fa-html5"></i>
                  <p>HTML5</p>
                </li>
                <li><i class="fab fa-css3-alt"></i>
                  <p>CSS3</p>
                </li>
                <li><i class="fab fa-js-square"></i>
                  <p>Javascript</p>
                </li>
                <li><i class="fab fa-php"></i>
                  <p>PHP</p>
                </li>
              </ul>
            </div>
            <div class="con_link">
              <em><a href="https://github.com/Hong-by/API_Project"><i class="fab fa-github"></i> git</a></em>
              <em><a href="https://dabipyeung.com/APIProject/bumyeung/API_project/"><i
                    class="fas fa-external-link-alt"></i>
                  View</a></em>
            </div>
          </div>
          <div class="contant con_img wow fadeInUp" data-wow-offset="30">
            <a href="https://dabipyeung.com/APIProject/bumyeung/API_project/" class="gocamping"><img
                src="img/portfolio/gocamping.png" alt=""></a>
          </div>
          <div class="contant con_img wow fadeInUp" data-wow-offset="30">
            <a href="http://hby033.dothome.co.kr/schedule/index.php"><img src="img/portfolio/schedule.JPG" alt=""></a>
          </div>
          <div class="contant con_txt wow fadeInUp" data-wow-offset="200">
            <h3>Schedule</h3>
            <p>Database 기반으로 Schedule API를 구축하였습니다.</br>인증번호 : 1q2w3e4r </p>
            <div class="language">
              <ul>
                <li><i class="fab fa-html5"></i>
                  <p>HTML5</p>
                </li>
                <li><i class="fab fa-css3-alt"></i>
                  <p>CSS3</p>
                </li>
                <li><i class="fab fa-js-square"></i>
                  <p>Javascript</p>
                </li>
                <li><i class="fab fa-php"></i>
                  <p>PHP</p>
                </li>
                <li><i class="fas fa-database"></i>
                  <p>mySQL</p>
                </li>
              </ul>
            </div>
            <div class="con_link">
              <em><a href="https://github.com/Hong-by/Portfolio_process"><i class="fab fa-github"></i> git</a></em>
              <em><a href="http://hby033.dothome.co.kr/schedule/index.php"><i class="fas fa-external-link-alt"></i>
                  View</a></em>
            </div>
          </div>
          <div class="contant con_txt wow fadeInUp" data-wow-offset="200">
            <h3>Renewal Page 01</h3>
            <p>첫 번째 Renewal Project로 테슬라 홈페이지를 리뉴얼 했습니다. scroll Event와 wow plugin 등 활용한 가능한 간단한 기능을 구현하였습니다.</p>
            <div class="language">
              <ul>
                <li><i class="fab fa-html5"></i>
                  <p>HTML5</p>
                </li>
                <li><i class="fab fa-css3-alt"></i>
                  <p>CSS3</p>
                </li>
                <li><i class="fab fa-js-square"></i>
                  <p>Javascript</p>
                </li>
              </ul>
            </div>
            <div class="con_link">
              <em><a href="https://github.com/Hong-by/Renewal-Tesla"><i class="fab fa-github"></i> git</a></em>
              <em><a href="http://hby033.dothome.co.kr/renewal/"><i class="fas fa-external-link-alt"></i> View</a></em>
            </div>
          </div>
          <div class="contant con_img wow fadeInUp" data-wow-offset="30">
            <a href="http://hby033.dothome.co.kr/renewal/"><img src="img/portfolio/renewal01.JPG" alt=""></a>
          </div>
          <div class="contant con_img wow fadeInUp" data-wow-offset="30">
            <a href="http://hby033.dothome.co.kr/mammoth"><img src="img/portfolio/renewal02.JPG" alt=""></a>
          </div>
          <div class="contant con_txt wow fadeInUp" data-wow-offset="200">
            <h3>Renewal Page 02</h3>
            <p>두 번째 Renewal Project로 맘모스 커피 홈페이지를 리뉴얼했습니다. fullpage plugin을 기반으로 제작하였습니다.</p>
            <div class="language">
              <ul>
                <li><i class="fab fa-html5"></i>
                  <p>HTML5</p>
                </li>
                <li><i class="fab fa-css3-alt"></i>
                  <p>CSS3</p>
                </li>
                <li><i class="fab fa-js-square"></i>
                  <p>Javascript</p>
                </li>
              </ul>
            </div>
            <div class="con_link">
              <em><a href="https://github.com/Hong-by/mammoth"><i class="fab fa-github"></i> git</a></em>
              <em><a href="http://hby033.dothome.co.kr/mammoth"><i class="fas fa-external-link-alt"></i> View</a></em>
            </div>
          </div>

        </div>
        <div class="load_more">
          <button type="button">더보기</button>
        </div>
    </section>
    <section class="about" id="about">
      <div class="center">
        <div class="sec_tit">
          <h2>About Me</h2>
        </div>
        <div class="profile_contants">
          <div class="profile">
            <div class="profile_tit">
              <p><i class="far fa-address-card"></i> contact</p>
            </div>
            <div class="profile_con">
              <h2>홍범영</h2>
              <h3>Homg BumYeong</h3>
              <ul>
                <li><i class="far fa-envelope"></i> hby033@naver.com</li>
                <li><i class="fas fa-mobile-alt"></i> +82.10.3337.1363</li>
                <li><i class="fab fa-github"></i> github.com/Hong-by</li>
                <li><a href="">Resume</a></li>
              </ul>
            </div>
          </div>
          <div class="education profile">
            <div class="profile_tit">
              <p><i class="far fa-address-card"></i> Education</p>
            </div>
            <div class="profile_con">
              <ul>
                <li><i class="fas fa-school"></i> 스마트 웹디자인(UI/UX)콘텐츠개발(웹퍼블리셔) 교육 과정 수료</li>
                <li><i class="fas fa-graduation-cap"></i> 성결대학교 경영학과 졸업 2017.08</li>
                <li><i class="fas fa-graduation-cap"></i> 신일정보산업고등학교 졸업 2011.02</li>
              </ul>
            </div>
          </div>
          <div class="experience profile">
            <div class="profile_tit">
              <p><i class="fas fa-user-tie"></i> Experience</p>
            </div>
            <div class="profile_con">
              <ul>
                <li><i class="fas fa-briefcase"></i> (주)팀크리에이티브 / 기획 2019.4 ~ 2021.04</li>
                <li><i class="fas fa-briefcase"></i> (주)와우인터렉티브 / 기획 2017.09 ~ 2018.09</li>
              </ul>
            </div>
          </div>
          <div class="skill">
            <div class="skill_tit">
              <h3>Skill</h3>
            </div>
            <div class="skill_con">
              <div class="skill_item">
                <img src="img/lang/html5.png" alt="">
                <p>HTML5</p>
              </div>
              <div class="skill_item">
                <img src="img/lang/css3.png" alt="">
                <p>CSS3</p>
              </div>
              <div class="skill_item">
                <img src="img/lang/javascript.png" alt="">
                <p>Javascript</p>
              </div>
              <div class="skill_item">
                <img src="img/lang/php.png" alt="">
                <p>PHP</p>
              </div>
            </div>
          </div>
        </div>
        <div class="sec_tit">
          <h2>Contact</h2>
        </div>

        <div class="contact">
          <form class="write_form" action="/portfolio_web/php/contact_insert.php" name="write_form" method="post">
            <div class="writer">
              <div class="writer_item">
                <label for="write_user">작성자</label>
                <input type="text" placeholder="작성자" name="write_user" id="write_user">
              </div>
              <div class="writer_item">
                <label for="write_phone">연락처</label>
                <input type="text" placeholder="연락처을 입력해주세요" name="write_phone" id="write_phone">
              </div>
              <div class="writer_item">
                <label for="write_email">이메일</label>
                <input type="text" placeholder="이메일을 입력해주세요" name="write_email" id="write_email">
              </div>
            </div>
            <div class="write_tit">
              <label for="write_input">제목</label>
              <input type="text" id="write_input" placeholder="제목을 입력해 주세요." name="write_input">
            </div>
            <div class="write_con">
              <textarea placeholder="포트폴리오가 마음에 드신다면 내용을 입력해 주세요." name="write_con"></textarea>
            </div>
            <div class="button">
              <button type="submit">글쓰기</button>
            </div>
          </form>
        </div>
        <div class="con_table">
          <ul class="con_row">

            <!-- ajax load here -->


          </ul>
        </div>
        <div class="paging">
          <span class="angle_double first"><i class="fa fa-angle-double-left"></i></span>
          <span class="prev angle"><i class="fa fa-angle-left"></i></span>

          <?php
              include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
              $sql_paging = "SELECT * FROM portfolio" ;

              $paging_result = mysqli_query($dbConn, $sql_paging);
              $total_record = mysqli_num_rows($paging_result);
              $paging_num = 5;

              if($total_record % $paging_num == 0){
                $total_page = floor($total_record / $paging_num);
              } else {
                $total_page = floor($total_record / $paging_num + 1);
              }

              for($i = 1; $i <= $total_page; $i++){
            ?>

          <span class="num" onclick="getPage(<?=$i?>)"><?=$i?></span>

          <?php
              }
            ?>
          <span class="next angle"><i class="fa fa-angle-right"></i></span>
          <span class="angle_double last"><i class="fa fa-angle-double-right"></i></span>
        </div>

      </div>
    </section>
    <footer>
      <div class="center">
        <div class="footer">
          <p>Designed and Developed by Hong BumYeong</p>
        </div>
        <div class="footer">
          <p>Copyright &copy; 2021 BY Hong</p>
        </div>
        <div class="footer">
          <p><a href="https://github.com/Hong-by"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/by.hong/"><i class="fab fa-instagram"></i></a>
          </p>
        </div>
      </div>
    </footer>
  </div>


  <!-- Jquery CDN Link -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <!-- Main Javascript Code Link -->
  <script src="js/main.js"></script>
  <script src="js/jqueyr.js"></script>
  <script src="js/jq.con_ajax.js"></script>
  <!-- wow animation plugin -->
  <script src="lib/js/wow.js"></script>
  <script>
  new WOW().init();
  </script>

</body>

</html>