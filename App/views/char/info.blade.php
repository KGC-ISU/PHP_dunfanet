@extends('layout/master')

@section('maincontent')

@php
    $status = 0;
@endphp

    <div class="head-section">
        <div class="head-innerbox">
            <div class="chars center-box">
                <span class="box-info">장비</span>
                <div class="side">

                    <!-- 머리어깨 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "머리어깨")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 상의 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "상의")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 하의 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "하의")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 허리 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "허리")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 신발 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "신발")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 크리처 -->                    
                    
                    @if($creature == null) 
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        <img src="https://img-api.neople.co.kr/df/items/{{ $creature->itemId }}" alt="creature">
                    @endif

                </div>
                <div class="side">
                    <!-- 무기 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "무기")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 칭호 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "칭호")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 팔찌 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "팔찌")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 목걸이 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "목걸이")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 보조장비 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "보조장비")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 반지 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "반지")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 귀걸이 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "귀걸이")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 마법석 -->

                    @foreach($equip as $items)
                        @if($status == 0)
                            @if($items->slotName == "마법석")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif
                </div>
            </div>
            <div class="chars">
                <span class="server-name">{{ ${$server} }}</span>
                <span class="char-level">{{ $info->level }}</span>
                <div class="img-box">
                    <img class="char-img" src="https://img-api.neople.co.kr/df/servers/{{ $server }}/characters/{{ $info->characterId }}?zoom=1" alt="characterImg">
                </div>
                <div class="char-info">
                    <span class="char-name">{{ $info->characterName }}</span>
                    <span class="job-name">{{ $info->jobGrowName }}</span>
                </div>
            </div>
            <div class="chars column-box">
                <span class="box-info">아바타</span>
                <div class="columns">
                    <!-- 무기 아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "무기 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 오라 아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "오라 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif
                </div>
                <div class="columns">
                    <!-- 머리 아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "머리 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 모자 아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "모자 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 얼굴 아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "얼굴 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif
                </div>
                <div class="columns">
                    <!-- 목가슴  아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "목가슴 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 상의  아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "상의 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 피부  아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "스킨 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif                    
                </div>
                <div class="columns">
                    <!-- 허리  아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "허리 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 하의  아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "하의 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif

                    <!-- 신발  아바타 -->

                    @foreach($avatar as $items)
                        @if($status == 0)
                            @if($items->slotName == "신발 아바타")
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                @php ($status = 1)
                                @break
                            @endif
                        @endif
                    @endforeach

                    @if($status == 0)
                        <img src="imgs/notfoundicon.png" alt="not-found">
                    @else
                        @php ($status = 0)
                    @endif
                </div>
            </div>
        </div>

        <div class="head-more-info">
            @if($swItem == null)
                <div class="buff-null">
                    <span class="box-info">버프강화</span>
                    <p>스위칭 박스를 적용하지 않은 모험가입니다</p>                    
                </div>
            @else
            <div class="head-switch">
                <span class="box-info">버프강화</span>
                <div class="head-switch-items">
                    <div class="side">
                        <!-- 스위칭 머리어깨 -->                        

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "머리어깨")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif
                        
                        <!-- 스위칭 상의 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "상의")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 하의 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "하의")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 허리 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "허리")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 신발 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "신발")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 크리처 -->                    
                    
                        @if($swCreature == null) 
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @foreach($swCreature as $items)                   
                                <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="creature">
                            @endforeach
                        @endif
                    </div>
                    <div class="side">
                        <!-- 스위칭 무기 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "무기")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 칭호  아바타 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "칭호")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif
                        
                        <!-- 스위칭 팔찌  아바타 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "팔찌")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 목걸이 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "목걸이")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 보조장비 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "보조장비")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 반지 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "반지")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 귀걸이 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "귀걸이")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif

                        <!-- 스위칭 마법석 -->

                        @foreach($swItem as $items)
                            @if($status == 0)
                                @if($items->slotName == "마법석")
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                    @php ($status = 1)
                                    @break
                                @endif
                            @endif
                        @endforeach

                        @if($status == 0)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else
                            @php ($status = 0)
                        @endif
                    </div>
                </div>
                <div class="head-switch-status">
                    <img src="imgs/notfoundicon.png" alt="not">
                    <div class="skill-stat">
                        @if($swInfo->option == null)
                            <span class="skill-name">장기간 동안 접속하지 않은 모험가입니다</span>
                        @else
                            <span class="skill-name">Lv.{{ $swInfo->option->level }} {{ $swInfo->name }}</span>
                            <p>준비 중...</p>
                        @endif
                    </div>                    
                </div>
                <div class="column-box">
                    <div class="columns">
                        @if($swAvatar == null)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else

                            <!-- 무기 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "무기 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                            <!-- 오라 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "오라 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                        @endif
                    </div>
                    <div class="columns">
                        @if($swAvatar == null)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                            <img src="imgs/notfoundicon.png" alt="not-found">
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else

                            <!-- 머리 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "머리 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                            <!-- 모자 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "모자 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                            <!-- 얼굴 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "얼굴 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                        @endif
                    </div>
                    <div class="columns">
                        @if($swAvatar == null)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                            <img src="imgs/notfoundicon.png" alt="not-found">
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else

                            <!-- 목가슴 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "목가슴 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                            <!-- 상의 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "상의 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                            <!-- 피부 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "스킨 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                        @endif                
                    </div>
                    <div class="columns">
                        @if($swAvatar == null)
                            <img src="imgs/notfoundicon.png" alt="not-found">
                            <img src="imgs/notfoundicon.png" alt="not-found">
                            <img src="imgs/notfoundicon.png" alt="not-found">
                        @else

                            <!-- 허리 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "허리 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                            <!-- 하의 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "하의 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                            <!-- 신발 스위칭 아바타 -->

                            @foreach($swAvatar as $items)
                                @if($status == 0)
                                    @if($items->slotName == "신발 아바타")
                                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="weapon">
                                        @php ($status = 1)
                                        @break
                                    @endif
                                @endif
                            @endforeach

                            @if($status == 0)
                                <img src="imgs/notfoundicon.png" alt="not-found">
                            @else
                                @php ($status = 0)
                            @endif

                        @endif
                    </div>
                </div>
            </div>
            @endif 
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
                @foreach($equip as $items)
                <div class="item-info-box">
                    <div class="item-slot">
                        {{ $items->slotName }}
                    </div>
                    <div class="item-img">
                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="">
                    </div>
                    <div class="item-name-enchant">
                        <div class="name">
                            {{ $items->itemName }}
                        </div>
                        <div class="enchants">
                            @if(isset($items->enchant->status))
                                @foreach($items->enchant->status as $enchantStat)
                                    {{ $enchantStat->name }} +{{ $enchantStat->value }} &nbsp
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="item-grade">
                        @if($items->reinforce > 0)
                            +{{ $items->reinforce }} 강화
                        @elseif($items->refine > 0)
                            +{{ $items->refine }} 증폭
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
    
            <div class="main-avatar-section">
                @foreach($avatar as $items)
                <div class="item-info-box">
                    <div class="item-slot">
                        {{ $items->slotName }}
                    </div>
                    <div class="item-img">
                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="">
                    </div>
                    <div class="item-name-enchant">
                        <div class="name">
                            {{ $items->itemName }}
                        </div>
                        <div class="enchants">
                            @foreach($items->emblems as $emb)
                                {{ $emb->itemName }} &nbsp
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="main-buff-section">
                <h3>스위칭 장비</h3>
                @foreach($swItem as $items)
                <div class="item-info-box">
                    <div class="item-slot">
                        {{ $items->slotName }}
                    </div>
                    <div class="item-img">
                        <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="">
                    </div>
                    <div class="item-name-enchant">
                        <div class="name">
                            {{ $items->itemName }}
                        </div>
                        <div class="enchants">
                            @if(isset($items->enchant->status))
                                @foreach($items->enchant->status as $enchantStat)
                                    {{ $enchantStat->name }} +{{ $enchantStat->value }} &nbsp
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="item-grade">
                        @if($items->reinforce > 0)
                            +{{ $items->reinforce }} 강화
                        @elseif($items->refine > 0)
                            +{{ $items->refine }} 증폭
                        @endif
                    </div>
                </div>
                @endforeach
                
                <h3>스위칭 아바타</h3>
                @if($swAvatar == null)
                    
                @else
                    @foreach($swAvatar as $items)
                    <div class="item-info-box">
                        <div class="item-slot">
                            {{ $items->slotName }}
                        </div>
                        <div class="item-img">
                            <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="">
                        </div>
                        <div class="item-name-enchant">
                            <div class="name">
                                {{ $items->itemName }}
                            </div>
                            <div class="enchants">
                                @foreach($items->emblems as $emb)
                                    {{ $emb->itemName }} &nbsp
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
    
            <div class="main-stat-section">
                <div class="stat-inner-box">
                    @foreach($stat as $items)
                        @if($items->name == "히트리커버리")
                        
                        @else
                            <div class="stat-box">
                                <div class="stat-title">
                                    <h3>{{ $items->name }}</h3>
                                </div>
                                <div class="stat-value">
                                    <p>{{ $items->value }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>                
            </div>
    
            <div class="main-insignia-section">
                @if($insignia == null)

                @else 
                    <div class="insignia">                  
                        <div class="flag">
                            <div class="img">
                                <img src="https://img-api.neople.co.kr/df/items/{{ $insignia->itemId }}" alt="flag">
                            </div>
                            <div class="name">
                                <p>{{ $insignia->itemName }}</p>
                            </div>
                            <div class="stat">
                                <p>{{ $insignia->itemAbility }}</p>
                            </div>
                        </div>                   
                    </div>
                    <div class="gem-list">
                        @foreach($insignia->gems as $items)                                        
                            <div class="gem">
                                <div class="img">
                                    <img src="https://img-api.neople.co.kr/df/items/{{ $items->itemId }}" alt="gem">
                                </div>
                                <div class="name">
                                    <p>{{ $items->itemName }}</p>
                                </div>
                                <div class="stat">
                                    <p>{{ $items->itemAbility }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection