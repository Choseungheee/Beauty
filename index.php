<?
session_start();
?>
<?
    if(! $userid){
       echo("
             <script>
             window.alert('로그인 후 이용해주세요');
             location.href = '../login/login_form.php';
             </script>
           ");
       exit();
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="euc-kr">
<script>
</script>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form name="board" method=post action="board_modify.php">
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
    <tr>
        <td height=20 align=center bgcolor=#999999>
        <font color=white><B>글 쓰 기</B></font>
        </td>
    </tr>
    <tr>
        <td bgcolor=white>&nbsp;
        <table>
        어서오세요! <?=$userid?> 님
            <tr>
                <td width=60 align=left >내용</td>
                <td align=left >
                    <TEXTAREA name=content cols=65 rows=15></TEXTAREA>
                </td>
            </tr>
            <tr>
                <td colspan=10 align=center>
                    <INPUT type=submit value="글 저장하기">
                    &nbsp;&nbsp;
                    <INPUT type=reset value="다시 쓰기">
                    &nbsp;&nbsp;
                    <INPUT type=button value="되돌아가기"
                    onclick="history.back(-1)"> <!--버튼이 클릭되었을때 발생하는 이벤트로 자바스크립트를 실행함. 이렇게 하면 바로 이전페이지로 감-->
                </td>
            </tr>
        </TABLE>
</td>
</tr>
</table>
</form>
</center>
</body>
</html>
</html>

<?
session_start();
?>
<meta charset="euc-kr">
<?
   $board = $content;

   include "dbconn.php";       // dbconn.php 파일을 불러옴

   $sql = "select * from member where id='$userid'";

   $sql = "update member set board='$board'";

   mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
   mysql_close();                // DB 연결 끊기

   echo ("<meta http-equiv='Refresh' content='1; URL=../index.php'>");
   //1초후에 index.php로 이동함.
?>
<center>
<font size=2>정상적으로 저장되었습니다.</font>
