<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>memberCreateFrom</title>
</head>
<body>
   <div class="wrap">
        <form action="process_member_create.php" method="post">
            <div class="input_form">
                <label for="id">아이디: </label>
                <input type="text" id="id" name="id" placeholder="아이디를 입력해주세요">
            </div>
            <div class="input_form">
                <label for="id">비밀번호: </label>
                <input type="password" id="pw" name="pw" placeholder="새 비밀번호를 입력해주세요">
            </div>
            <div class="input_form">
                <label for="id">이름: </label>
                <input type="text" id="name" name="name" placeholder="이름을 입력해주세요">
            </div>
            <div class="input_form">
                <label for="id">취미: </label>
                <input type="text" id="hobby" name="hobby" placeholder="취미를 입력해주세요">
            </div>
            <div class="input_form">
                <label for="id">학번: </label>
                <input type="number" id="num" name="num" placeholder="학번을 입력해주세요">
            </div>
            <div class="input_form">
                <label for="id">MBTI: </label>
                <input type="text" id="mbti" name="mbti" placeholder="MBTI를 입력해주세요">
            </div>
            <div class="btn_box">
                <input type="submit" value="확인">
                <input type="reset" value="취소">
            </div>
        </form>
    </div>
</body>
</html>