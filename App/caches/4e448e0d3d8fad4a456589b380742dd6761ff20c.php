<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DunFa</title>
    <script src="js/app.js"></script>
</head>
<body>
    <header class="small-header">
        <div class="container">
            <ul class="head-nav">
                <li><a href="/">메인</a></li>
                <li><a href="/item.html">아이템</a></li>
                <li><a>더보기</a></li>
                <li><a href="https://developers.neople.co.kr/" target="_blank">API</a></li>
                <li><a href="http://df.nexon.com/df/home" target="_blank">던파</a></li>                
            </ul>
        </div>
    </header>

    <?php echo $__env->yieldContent('maincontent'); ?>

    <footer class="sub-foot">
        <a href="https://developers.neople.co.kr/"><img src="imgs/neople.png" alt="neople"></a>
        <div class="foot-box">
            <a href="javascript:about();">About</a>
            <span>/</span>
            <a href="#">Update</a>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\dev\xampp-portable-win32-7.3.0-0-VC15\xampp\htdocs\App\views/layout/master.blade.php ENDPATH**/ ?>