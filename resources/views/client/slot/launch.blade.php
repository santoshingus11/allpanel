
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        html, body, iframe {
            left: 0px;
            top: 0px;
            position: relative;
            display: flex;
            align-items: center;
            background-color: black;
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            border: 0px;
        }
    </style>
    <script>
        function closeGame() {
            window.location.href = "{{url('slot/games') }}";
        }
        window.gclose = closeGame;
        window.close = closeGame;
        window.onmessage = function(event) {
            if (event.data == 'closeGame' || event.data == 'close' || event.data.indexOf("GAME_MODE:LOBBY") >= 0) {
                closeGame();
            }
        }
    </script>
</head>
<body>
    @if (isset($gameUrl))
        <iframe id="frame" src="{{ $gameUrl }}" allowfullscreen></iframe>
    @else
        <p>Game not found.</p>
    @endif
</body>
</html>