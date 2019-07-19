<?php $__env->startSection('maincontent'); ?>

    <div class="re-search-box">
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
        
        <?php if(empty($list)): ?>

        <div class="notfound-section">
            <h1>검색 결과 없음</h1>
            <p><i class="far fa-times-circle"></i></p>
        </div>

        <?php else: ?>

        <div class="result-section">

            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($items->level >= 90): ?>

                <div class="chars" onclick="location.href='/charinfo?id=<?php echo e($items->characterId); ?>&server=<?php echo e($server); ?>'">
                    <span class="server-name"><?php echo e(${$server}); ?></span>
                    <span class="char-level"><?php echo e($items->level); ?></span>
                    <div class="img-box">
                        <img src="https://img-api.neople.co.kr/df/servers/<?php echo e($server); ?>/characters/<?php echo e($items->characterId); ?>?zoom=1" alt="characterImg">
                    </div>
                    <div class="char-info">
                        <span class="char-name"><?php echo e($items->characterName); ?></span>
                        <span class="job-name"><?php echo e($items->jobGrowName); ?></span>
                    </div>
                </div>

                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\xampp-portable-win32-7.3.0-0-VC15\xampp\htdocs\App\views/char/search.blade.php ENDPATH**/ ?>