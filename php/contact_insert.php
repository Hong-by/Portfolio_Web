<?php

$write_user = $_POST['write_user'];
$write_phone = $_POST['write_phone'];
$write_email = $_POST['write_email'];
$write_input = $_POST['write_input'];
$write_con = addslashes($_POST['write_con']);
$write_reg = date("Y-m-d");

// echo $write_user, $write_phone, $write_email, $write_input, $write_con, $write_reg;
include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
$sql = "INSERT INTO portfolio(
  portfolio_id,
  portfolio_phone,
  portfolio_email,
  portfolio_tit,
  portfolio_con,
  portfolio_reg
) VALUES (
  '{$write_user}',
  '{$write_phone}',
  '{$write_email}',
  '{$write_input}',
  '{$write_con}',
  '{$write_reg}'
)";


mysqli_query($dbConn, $sql);

echo "
  <script>
    alert('게시글 입력이 완료되었습니다.');
    location.href = '/portfolio_web/index.php';
  </script>
";
?>