  <title>Lordsexch | Login | Lordsexch | Home</title>
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = '{{ asset('frontend/assets/css/style.css') }}';
    document.head.appendChild(link);
</script>
   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iK7l5i6Tbz5W5l3DbYI99ZXnMOBiEYgHnyJ9vFAK/iWddD9Q5Iw2Gg" crossorigin="anonymous"> --}}
  <style>
    .fullpage-loader {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw;
      overflow: hidden;
      background: #fff;
      z-index: 9999;
      opacity: 1;
      transition: opacity .5s;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .fullpage-loader .fullpage-loader__logo {
      position: relative;
    }

    .fullpage-loader .fullpage-loader__logo:after {
      content: '';
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      animation: shine 2.5s infinite cubic-bezier(0.42, 0, 0.58, 1);
      background: rgba(255, 255, 255, 0.8);
      background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, white 50%, rgba(255, 255, 255, 0) 100%);
      background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, white 50%, rgba(255, 255, 255, 0) 100%);
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, white 50%, rgba(255, 255, 255, 0) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#00ffffff', GradientType=1);
    }

    @keyframes shine {
      0% {
        transform: translateX(-100%) skew(-30deg);
      }

      100% {
        transform: translateX(200%) skew(-30deg);
      }
    }

    .fullpage-loader--invisible {
      opacity: 0;
    }
  </style>