<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DunFa</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
</head>
<body>
    <header>
        <div class="filter"></div>
        <div class="container">
            <ul class="head-nav">
                <li class="active"><a href="/">메인</a></li>
                <li><a href="/char.html">캐릭터</a></li>
                <li><a href="/item.html">아이템</a></li>
                <li><a href="https://developers.neople.co.kr/" target="_blank">API</a></li>
                <li><a href="http://df.nexon.com/df/home" target="_blank">던파</a></li>
            </ul>
        </div>
        <div class="inner-box">
            <p class="sub-title">쉽고 간편해요!</p>
            <p class="main-title">던전앤파이터 캐릭터 검색</p>
            <div class="search-box">
                <form action="/" id="search-form">
                    <div class="select-box">
                        <label for="server-select">전체</label>
                        <select name="server" id="server-select">
                            <option value="all" selected>전체</option>
                            <option value="cain">카인</option>
                            <option value="diregie">디레지에</option>
                            <option value="siroco">시로코</option>
                            <option value="prey">프레이</option>
                            <option value="casillas">카시야스</option>
                            <option value="hilder">힐더</option>
                            <option value="anton">안톤</option>
                            <option value="bakal">바칼</option>
                        </select>
                    </div>                    
                    <input type="text" name="name" id="char-name" placeholder="캐릭터 닉네임을 입력해주세요">
                    <input type="submit" value="검색" id="search-btn">
                </form>
            </div>
        </div>
    </header>

    <section class="more-info">
        <div class="box more-item">
            <p class="title"><i class="fas fa-angle-double-right"></i> 아이템 검색</p>
            <div class="border"></div>
            <div class="content">
                <div class="icon-img">

                </div>
                <a href="#" class="goto-btn">검색하러가기</a>
            </div>
        </div>
        <div class="box notice">
            <p class="title"><i class="fas fa-angle-double-right"></i> 본서버 공지사항</p>
            <div class="border"></div>
            <div class="content">
                기능 구현중...
            </div>
        </div>
        <div class="box notice">
            <p class="title"><i class="fas fa-angle-double-right"></i> 퍼스트서버 공지사항</p>
            <div class="border"></div>
            <div class="content">
                기능 구현중...
            </div>
        </div>
    </section>

    <footer>
        <a href="https://developers.neople.co.kr/"><img src="/imgs/neople.png" alt="neople"></a>
        <div class="foot-box">
            <a href="javascript:about();">About</a>
            <span>/</span>
            <a href="#">Update</a>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\dev\xampp\htdocs\App\views/layout/master.blade.php ENDPATH**/ ?>