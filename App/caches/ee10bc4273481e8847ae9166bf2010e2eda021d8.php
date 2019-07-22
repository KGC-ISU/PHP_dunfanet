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

                    <!-- 크리처 -->                    
                    
                    <?php if($creature == null): ?> 
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    <?php else: ?>
                        <img src="https://img-api.neople.co.kr/df/items/<?php echo e($creature->itemId); ?>" alt="creature">
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
            <?php if($swItem == null): ?>
                <div class="buff-null">
                    <span class="box-info">버프강화</span>
                    <p>스위칭 박스를 적용하지 않은 모험가입니다</p>                    
                </div>
            <?php else: ?>
            <div class="head-switch">
                <span class="box-info">버프강화</span>
                <div class="head-switch-items">
                    <div class="side">
                        <!-- 스위칭 머리어깨 -->                        

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
                        
                        <!-- 스위칭 상의 -->

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

                        <!-- 스위칭 하의 -->

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

                        <!-- 스위칭 허리 -->

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

                        <!-- 스위칭 신발 -->

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

                        <!-- 스위칭 크리처 -->                    
                    
                        <?php if($swCreature == null): ?> 
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        <?php else: ?>
                            <?php $__currentLoopData = $swCreature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="creature">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="side">
                        <!-- 스위칭 무기 -->

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

                        <!-- 스위칭 칭호  아바타 -->

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
                        
                        <!-- 스위칭 팔찌  아바타 -->

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

                        <!-- 스위칭 목걸이 -->

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

                        <!-- 스위칭 보조장비 -->

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

                        <!-- 스위칭 반지 -->

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

                        <!-- 스위칭 귀걸이 -->

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

                        <!-- 스위칭 마법석 -->

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
                            <span class="skill-name">장기간 동안 접속하지 않은 모험가입니다</span>
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

                            <!-- 오라 스위칭 아바타 -->

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

                            <!-- 머리 스위칭 아바타 -->

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

                            <!-- 모자 스위칭 아바타 -->

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

                            <!-- 얼굴 스위칭 아바타 -->

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

                            <!-- 목가슴 스위칭 아바타 -->

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

                            <!-- 상의 스위칭 아바타 -->

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

                            <!-- 피부 스위칭 아바타 -->

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

                            <!-- 허리 스위칭 아바타 -->

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

                            <!-- 하의 스위칭 아바타 -->

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

                            <!-- 신발 스위칭 아바타 -->

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
            <?php endif; ?> 
        </div>
    </div>

    <section id="main-section">
        <div class="select-info">
            <span class="item active" data-number="0">아이템</span>
            <span class="avatar" data-number="1">아바타</span>
            <span class="switch" data-number="2">버프 강화</span>
            <span class="stat" data-number="3">스탯</span>
            <span class="insignia" data-number="4">휘장</span>
        </div>

        <div class="main-inner-box">
            <div class="main-item-section active">
                <?php $__currentLoopData = $equip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-info-box">
                    <div class="item-slot">
                        <?php echo e($items->slotName); ?>

                    </div>
                    <div class="item-img">
                        <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="">
                    </div>
                    <div class="item-name-enchant">
                        <div class="name">
                            <?php echo e($items->itemName); ?>

                        </div>
                        <div class="enchants">
                            <?php if(isset($items->enchant->status)): ?>
                                <?php $__currentLoopData = $items->enchant->status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enchantStat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($enchantStat->name); ?> +<?php echo e($enchantStat->value); ?> &nbsp
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="item-grade">
                        <?php if($items->reinforce > 0): ?>
                            +<?php echo e($items->reinforce); ?> 강화
                        <?php elseif($items->refine > 0): ?>
                            +<?php echo e($items->refine); ?> 증폭
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    
            <div class="main-avatar-section">
                <?php $__currentLoopData = $avatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-info-box">
                    <div class="item-slot">
                        <?php echo e($items->slotName); ?>

                    </div>
                    <div class="item-img">
                        <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="">
                    </div>
                    <div class="item-name-enchant">
                        <div class="name">
                            <?php echo e($items->itemName); ?>

                        </div>
                        <div class="enchants">
                            <?php $__currentLoopData = $items->emblems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($emb->itemName); ?> &nbsp
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
            <div class="main-buff-section">
                <h3>스위칭 장비</h3>
                <?php $__currentLoopData = $swItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-info-box">
                    <div class="item-slot">
                        <?php echo e($items->slotName); ?>

                    </div>
                    <div class="item-img">
                        <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="">
                    </div>
                    <div class="item-name-enchant">
                        <div class="name">
                            <?php echo e($items->itemName); ?>

                        </div>
                        <div class="enchants">
                            <?php if(isset($items->enchant->status)): ?>
                                <?php $__currentLoopData = $items->enchant->status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enchantStat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($enchantStat->name); ?> +<?php echo e($enchantStat->value); ?> &nbsp
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="item-grade">
                        <?php if($items->reinforce > 0): ?>
                            +<?php echo e($items->reinforce); ?> 강화
                        <?php elseif($items->refine > 0): ?>
                            +<?php echo e($items->refine); ?> 증폭
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <h3>스위칭 아바타</h3>
                <?php if($swAvatar == null): ?>
                    
                <?php else: ?>
                    <?php $__currentLoopData = $swAvatar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item-info-box">
                        <div class="item-slot">
                            <?php echo e($items->slotName); ?>

                        </div>
                        <div class="item-img">
                            <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="">
                        </div>
                        <div class="item-name-enchant">
                            <div class="name">
                                <?php echo e($items->itemName); ?>

                            </div>
                            <div class="enchants">
                                <?php $__currentLoopData = $items->emblems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($emb->itemName); ?> &nbsp
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
    
            <div class="main-stat-section">
                <div class="stat-inner-box">
                    <?php $__currentLoopData = $stat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($items->name == "히트리커버리"): ?>
                        
                        <?php else: ?>
                            <div class="stat-box">
                                <div class="stat-title">
                                    <h3><?php echo e($items->name); ?></h3>
                                </div>
                                <div class="stat-value">
                                    <p><?php echo e($items->value); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>                
            </div>
    
            <div class="main-insignia-section">
                <?php if($insignia == null): ?>

                <?php else: ?> 
                    <div class="insignia">                  
                        <div class="flag">
                            <div class="img">
                                <img src="https://img-api.neople.co.kr/df/items/<?php echo e($insignia->itemId); ?>" alt="flag">
                            </div>
                            <div class="name">
                                <p><?php echo e($insignia->itemName); ?></p>
                            </div>
                            <div class="stat">
                                <p><?php echo e($insignia->itemAbility); ?></p>
                            </div>
                        </div>                   
                    </div>
                    <div class="gem-list">
                        <?php $__currentLoopData = $insignia->gems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                        
                            <div class="gem">
                                <div class="img">
                                    <img src="https://img-api.neople.co.kr/df/items/<?php echo e($items->itemId); ?>" alt="gem">
                                </div>
                                <div class="name">
                                    <p><?php echo e($items->itemName); ?></p>
                                </div>
                                <div class="stat">
                                    <p><?php echo e($items->itemAbility); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\dev\xampp-portable-win32-7.3.0-0-VC15\xampp\htdocs\App\views/char/info.blade.php ENDPATH**/ ?>