<li class="con_tit">
  <span>번호</span>
  <span>아이디</span>
  <span>제목</span>
  <span>등록일</span>
</li>

<?php
  $page = $_GET["page"];

  if($page == ''){
    $page == 1;
  }

  $view_per_page = 5;
  $from = ($page - 1) * $view_per_page;

  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "SELECT * FROM portfolio ORDER BY portfolio_idx DESC LIMIT $from, $view_per_page";

  $comm_result = mysqli_query($dbConn, $sql);
  while($comm_row = mysqli_fetch_array($comm_result)){
    $portfolio_idx = $comm_row['portfolio_idx'];
    $portfolio_id = mb_substr($comm_row['portfolio_id'],0,2,'utf-8').'*';
    $portfolio_tit = $comm_row['portfolio_tit'];
    $portfolio_reg = $comm_row['portfolio_reg'];
    
  ?>
<li class="con_con">
  <span><?=$portfolio_idx?></span>
  <span><?=$portfolio_id?></span>
  <span><?=$portfolio_tit?></span>
  <span><?=$portfolio_reg?></span>
</li>
<?php } ?>