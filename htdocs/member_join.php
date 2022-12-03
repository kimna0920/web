<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <div class="wrap">
       <h1>회원가입</h1>
        <form class="member_form" action="process_member_join.php" method="post">
            <div class="input_form">
                <label for="id">아이디</label>
                    <input type="text" name="id" id="id" placeholder="아이디를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="pw">비밀번호</label>
                    <input type="password" name="pw" id="pw" placeholder="비밀번호를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="name">이름</label>
                    <input type="text" name="name" id="name" placeholder="이름를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="hobby">취미</label>
                    <input type="text" name="hobby" id="hobby" placeholder="취미를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="number">학번</label>
                    <input type="number" name="number" id="number" placeholder="학번을입력해주세요">
            </div>
             <div class="input_form">
                <label for="mbti">mbti</label>
                    <input type="text" name="mbti" id="mbti" placeholder="mbti를 입력해주세요">
            </div>
               <div class="btn_box">
                   <input type="submit" value="확인">
                   <input type="reset" value="취소">
               </div>
        </form>
    </div>
</body>
</html>
