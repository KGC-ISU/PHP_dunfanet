<?php $__env->startSection('maincontent'); ?>

<?php
    $status = 0;
?>

    <div class="head-section">
        <div class="head-innerbox">
            <div class="chars center-box">
                <span class="box-info">장비</span>
                <div class="side">

                    <!-- 머리어깨 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "머리어깨"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 상의 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "상의"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 하의 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "하의"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 허리 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "허리"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 신발 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "신발"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>




                </div>
                <div class="side">
                    <!-- 무기 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "무기"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 칭호 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "칭호"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 팔찌 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "팔찌"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 목걸이 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "목걸이"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 보조장비 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "보조장비"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 반지 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "반지"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 귀걸이 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "귀걸이"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 마법석 -->

                    <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "마법석"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="chars">
                <span class="server-name"><?php echo e(${$server}); ?></span>
                <span class="char-level"><?php echo e($info->level); ?></span>
                <div class="img-box">
                    <img class="char-img" src="https://img-api.neople.co.kr/df/servers/<?php echo e($server); ?>/characters/<?php echo e($info->characterId); ?>?zoom=1" alt="characterImg">
                </div>
                <div class="char-info">
                    <span class="char-name"><?php echo e($info->characterName); ?></span>
                    <span class="job-name"><?php echo e($info->jobGrowName); ?></span>
                </div>
            </div>
            <div class="chars column-box">
                <span class="box-info">아바타</span>
                <div class="columns">
                    <!-- 무기 아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "무기 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 오라 아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "오라 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>
                </div>
                <div class="columns">
                    <!-- 머리 아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "머리 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 모자 아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "모자 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 얼굴 아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "얼굴 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>
                </div>
                <div class="columns">
                    <!-- 목가슴  아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "목가슴 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 상의  아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "상의 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 피부  아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "스킨 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>                    
                </div>
                <div class="columns">
                    <!-- 허리  아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "허리 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 하의  아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "하의 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>

                    <!-- 신발  아바타 -->

                    <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($status == 0): ?>
                            <?php if($items->slotName == "신발 아바타"): ?>
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                <?php ($status = 1); ?>
                                <?php break; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($status == 0): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <?php ($status = 0); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="head-more-info">
            <div class="head-switch">
                <span class="box-info">버프강화</span>
                <div class="head-switch-items">
                    <div class="side">
                        <!-- 머리어깨 -->                        

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "머리어깨"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>
                        
                        <!-- 상의 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "상의"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 하의 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "하의"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 허리 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "허리"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 신발  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "신발"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>
                    </div>
                    <div class="side">
                        <!-- 무기 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "무기"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 칭호  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "칭호"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>
                        
                        <!-- 팔찌  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "팔찌"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 목걸이  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "목걸이"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 보조장비  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "보조장비"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 반지  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "반지"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 귀걸이  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "귀걸이"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 마법석  아바타 -->

                        <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "마법석"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="head-switch-status">
                    <img src="imgs/notfoundicon.png" alt="not">
                    <div class="skill-stat">
                        <?php if($swInfo->option == null): ?>
                            <span class="skill-name">스위칭박스를 사용하지 않는 모험가입니다</span>
                        <?php else: ?>
                            <span class="skill-name">Lv.<?php echo e($swInfo->option->level); ?> <?php echo e($swInfo->name); ?></span>
                            <p>준비 중...</p>
                        <?php endif; ?>
                    </div>                    
                </div>
                <div class="column-box">
                <div class="columns">
                    <?php if($swAvatar == null): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>

                        <!-- 무기 스위칭 아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "무기 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 오라 아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "오라 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
                <div class="columns">
                    <?php if($swAvatar == null): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                        <img src="imgs/notfoundicon.png" alt="not-found">
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>

                        <!-- 머리 아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "머리 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 모자 아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "모자 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 얼굴 아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "얼굴 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
                <div class="columns">
                    <?php if($swAvatar == null): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                        <img src="imgs/notfoundicon.png" alt="not-found">
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>

                        <!-- 목가슴  아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "목가슴 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 상의 아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "상의 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 피부  아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "스킨 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                    <?php endif; ?>                
                </div>
                <div class="columns">
                    <?php if($swAvatar == null): ?>
                        <img src="imgs/notfoundicon.png" alt="not-found">
                        <img src="imgs/notfoundicon.png" alt="not-found">
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>

                        <!-- 허리  아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "허리 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 하의  아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "하의 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                        <!-- 신발  아바타 -->

                        <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($status == 0): ?>
                                <?php if($items->slotName == "신발 아바타"): ?>
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="weapon">
                                    <?php ($status = 1); ?>
                                    <?php break; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php if($status == 0): ?>
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php ($status = 0); ?>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
                </div>
            </div> 
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\xampp\htdocs\App\views/char/info.blade.php ENDPATH**/ ?>