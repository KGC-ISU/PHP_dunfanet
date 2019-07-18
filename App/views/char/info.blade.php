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
            <div class="head-switch">
                <span class="box-info">버프강화</span>
                <div class="head-switch-items">
                    <div class="side">
                        <!-- 머리어깨 -->                        

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
                        
                        <!-- 상의 -->

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

                        <!-- 하의 -->

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

                        <!-- 허리 -->

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

                        <!-- 신발  아바타 -->

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
                    </div>
                    <div class="side">
                        <!-- 무기 -->

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

                        <!-- 칭호  아바타 -->

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
                        
                        <!-- 팔찌  아바타 -->

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

                        <!-- 목걸이  아바타 -->

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

                        <!-- 보조장비  아바타 -->

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

                        <!-- 반지  아바타 -->

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

                        <!-- 귀걸이  아바타 -->

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

                        <!-- 마법석  아바타 -->

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
                            <span class="skill-name">스위칭박스를 사용하지 않는 모험가입니다</span>
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

                        <!-- 오라 아바타 -->

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

                        <!-- 머리 아바타 -->

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

                        <!-- 모자 아바타 -->

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

                        <!-- 얼굴 아바타 -->

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

                        <!-- 목가슴  아바타 -->

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

                        <!-- 상의 아바타 -->

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

                        <!-- 피부  아바타 -->

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

                        <!-- 허리  아바타 -->

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

                        <!-- 하의  아바타 -->

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

                        <!-- 신발  아바타 -->

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
        </div>
    </div>

@endsection