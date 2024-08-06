<?php 
 if(empty($allGames)){
  $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL,"https://ujala11games.com/api/cricket/game-list");
        // Execute
        $result=curl_exec($ch);
        // Will dump a beauty json <3
        $response=json_decode($result, true);
      
        curl_close($ch);
        
        //get all games list
        $chr = curl_init();
        // Disable SSL verification
        curl_setopt($chr, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($chr, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($chr, CURLOPT_URL,"https://ujala11games.com/api/get-all-games-list");
        // Execute
        $allGameresult=curl_exec($chr);
        // Will dump a beauty json <3
        $allGames=json_decode($allGameresult, true);
        
        curl_close($chr);
 }
 ?>
 
 <div class="w-100 d-flex flex-nowrap overflow-auto gap-2 pt-1 pb-1 top-nav-event d-md-none">
    
              @if(!empty($allGames['crickets']))
              @foreach($allGames['crickets'] as $c)
            <a href="{{route('Cricket-details',$c['id'])}}">
     <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded">
     <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
                <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
                </path>
              </svg>
              <span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span>
                </span>
                </a>
                 @endforeach
                 @endif
                 @if(!empty($allGames['footballs']))
              @foreach($allGames['footballs'] as $c)
            <a href="{{route('Football-Details',$c['id'])}}">
     <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded">
     <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
                <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
                </path>
              </svg>
              <span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span>
                </span>
                </a>
                 @endforeach
                 @endif
                 @if(!empty($allGames['tennises']))
              @foreach($allGames['tennises'] as $c)
            <a href="{{route('tenis_detail',$c['id'])}}">
     <span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded">
     <svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
                <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z">
                </path>
              </svg>
              <span class="blink" style="font-size: 13px;">{{$c['game_title']}}</span>
                </span>
                </a>
                 @endforeach
                 @endif
              </div>