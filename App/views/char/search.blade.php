@extends('layout/master')

@section('maincontent')

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
        
        @if(empty($list))

        <div class="notfound-section">
            <h1>검색 결과 없음</h1>
            <p><i class="far fa-times-circle"></i></p>
        </div>

        @else

        <div class="result-section">

            @foreach($list as $items)

                @if($items->level >= 90)

                <div class="chars">
                    <span class="server-name">{{ ${$server} }}</span>
                    <span class="char-level">{{ $items->level }}</span>
                    <div class="img-box">
                        <img src="https://img-api.neople.co.kr/df/servers/cain/characters/{{ $items->characterId }}?zoom=1" alt="characterImg">
                    </div>
                    <div class="char-info">
                        <span class="char-name">{{ $items->characterName }}</span>
                        <span class="job-name">{{ $items->jobGrowName }}</span>
                    </div>
                </div>

                @endif

            @endforeach
        </div>

        @endif

@endsection