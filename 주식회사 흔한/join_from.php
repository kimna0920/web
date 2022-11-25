<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEUNHAM &#58; &#58; Join</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a0fdef4e51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="inner">
            <h1><a href="index.php">HEUNHAM</a></h1>
            <ul id="gnb">
                <li><a href="#">DEPARTMENT</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">YOUTUBE</a></li>
                <li><a href="#">COMMUNITY</a></li>
                <li><a href="#">LOCATION</a></li>
            </ul>
            <ul class="util">
                <li><a href="#">Contact</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="join_from.php">Join</a></li>
                <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
    </header>
    <div class="join_section">
        <div class="join_from">
            <form action="process_join.php" method="post">
                <div class="input_form">
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" placeholder="please enter your ID." required>
                </div>
                <div class="input_form">
                    <label for="pw">Password</label>
                    <input type="password" id="pw" name="pw" placeholder="please enter your password." required>
                </div>
                <div class="input_form">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="please enter your Name." required>
                </div>
                <div class="input_form">
                    <label for="phone">Phone</label>
                    <select name="first_num" id="phone">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="016">016</option>
                        <option value="017">017</option>
                        <option value="018">018</option>
                        <option value="019">019</option>
                    </select> &#45;
                    <input type="text" id="phone" name="second_num" maxlength="4"> &#45;
                    <input type="text" id="phone" name="third_num" maxlength="4">
                </div>
                <div class="input_form">
                    <label for="email">E&#45;mail</label>
                    <input type="text" id="phone" name="first_addr"> &#64;
                    <select name="second_addr" id="email">
                        <option value="naver.com">naver.com</option>
                        <option value="gmail.com">gmail.com</option>
                        <option value="daum.com">daum.com</option>
                        <option value="hanmail.net">hanmail.net</option>
                    </select>
                </div>
                <div class="input_from">
                    <label for="gender">Gender</label>
                    <input type="radio" id="gender" name="gender" value="male"> Male
                    <input type="radio" id="gender" name="gender" value="female"> Female
                </div>
                <div class="input_form">
                    <label for="age">Age</label>
                    <select name="age" id="age">
                        <option value="10대 미만">0 &#126; 9</option>
                        <option value="10대">10 &#126; 20</option>
                        <option value="20대">20 &#126; 30</option>
                        <option value="30대">30 &#126; 40</option>
                        <option value="40대">40 &#126; 50</option>
                        <option value="50대">50 &#126; 60</option>
                        <option value="60대">60 &#126; 70</option>
                        <option value="70대">70 &#126; 80</option>
                    </select>
                </div>
                <div class="input_form">
                    <label for="job">Job</label>
                    <select name="job" id="job">
                        <option value="회사원">회사원</option>
                        <option value="사업가">사업가</option>
                        <option value="공무원">공무원</option>
                        <option value="프리랜서">프리랜서</option>
                        <option value="학생">학생</option>
                        <option value="주부">주부</option>
                        <option value="무직">무직</option>
                    </select>
                </div>
                <div class="input_from">
                    <label for="Interests">Interests</label>
                    <input type="checkbox" id="interests" name="interests[]" value="programming">Programming
                    <input type="checkbox" id="interests" name="interests[]" value="design">Design
                    <input type="checkbox" id="interests" name="interests[]" value="education">Education
                    <input type="checkbox" id="interests" name="interests[]" value="marketing">Marketing
                    <input type="checkbox" id="interests" name="interests[]" value="etc">Etc
                </div>
                <div class="input_from">
                    <label for="agree">agree</label>
                    <input type="checkbox" id="agree" name="agree" value="1" required>Agree to the collection and use of personal information.
                </div>
                <div class="btn_box">
                    <input type="submit" value="Join">
                    <input type="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
</body>
</html>