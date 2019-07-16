<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DunFa</title>
    <script src="js/app.js"></script>
</head>
<body>
    <header class="main-header">
        <div class="filter"></div>
        <div class="container">
            <ul class="head-nav">
                <li class="active"><a href="/">메인</a></li>
                <li><a href="/item">아이템</a></li>
                <li><a href="https://developers.neople.co.kr/" target="_blank">API</a></li>
                <li><a href="http://df.nexon.com/df/home" target="_blank">던파</a></li>
                <li><a>더보기</a></li>
            </ul>
        </div>
        <div class="inner-box">
            <p class="sub-title">쉽고 간편해요!</p>
            <p class="main-title">던전앤파이터 캐릭터 검색</p>
            <div class="search-box">
                <form action="/char" id="search-form" method="post">
                    <div class="select-box">
                        <label for="server-select">카인</label>
                        <select name="server" id="server-select">                        
                            <option value="cain" selected>카인</option>
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

    <?php echo $__env->yieldContent('maincontent'); ?>

    <footer class="main-foot">
        <a href="https://developers.neople.co.kr/"><img src="/imgs/neople.png" alt="neople"></a>
        <div class="foot-box">
            <a href="javascript:about();">About</a>
            <span>/</span>
            <a href="#">Update</a>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\dev\xampp-portable-win32-7.3.0-0-VC15\xampp\htdocs\App\views/layout/masterMain.blade.php ENDPATH**/ ?>