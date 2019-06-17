<?php
// mysql_connect 함수를 이용해서 mysql에 접속한다.
// DB주소에 localhost를 입력하는 이유는 같은 컴퓨터에 웹서버와 
// 데이터베이스가 같이 존재함을 의미한다. ( 즉, 자기자신의 주소에서 데이터베이스를 찾는다 )

$conn = mysql_connect("localhost","blackk","qlxmfek");
mysql_select_db("blackk",$conn);    // mysql_select_db를 이용해서 DB를 선택한다.


// db_info.php를 따로 만든 이유??

// 게시판의 여러 페이지에서 데이터베이스를 이용하게 되기 때문에 
// db_info.php 같은 파일로 따로 MySQL에 접속하는 파일을 만들어 include를 이용해 사용한다.
// 이렇게하면 비밀번호가 바뀌거나 하는 경우에 이 파일 하나만 수정해주면 모두 적용이 된다.
?>
