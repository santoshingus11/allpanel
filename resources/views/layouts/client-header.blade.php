<style>
    a.navbar-brand img {
    width: auto;
    height: 50px !important;
}
@media only screen and (min-width: 761px) {
.hideForWeb{
    display: none !important;
}
.hideForMob{
    display: block !important;
}
.homeNav{
    padding-left:10px !important;
    padding-right:10px !important;
    margin: 5px !important;
}
.banner{
    background:white;
}
}
@media only screen and (max-width: 760px) {
    .hideForWeb{
    display: block !important;
}
.banner{
    background:black;
    color: white !important;
}
thead > tr > th{
    color: white !important;
}
.home-nav-2{
    background: black !important;
}
.home-nav-2 > div > div > ul > li {
    margin-top:5px;
    border-right: 2px solid white;
}
.hideForMob{
    display: none !important;
}
.homeNav{
    padding-left:10px !important;
    padding-right:10px !important;
    padding-top:5px !important;
    padding-bottom:5px !important;
    margin-left: 5px !important;
    margin-right: 5px !important;
}
}
.navb::-webkit-scrollbar{
    display: none;
}
.navb {
    scrollbar-width: none;
}
html, body{
    overflow-x:hidden;
    width:100%;
}
li > a {
    font-weight: bold !important;
}
li > a > span{
    font-weight: bold !important;
    font-size:15px !important;
}
</style>
<body>
  <div class="fullpage-loader">
    <div class="fullpage-loader__logo">
      <img src="{{asset('frontend/assets/images/logo-login.png')}}" />
    </div>
  </div>
  <div class="main_menu">
    
    <nav class="navbar navbar-expand-lg bg-black ">
      <div class="container-fluid hideForWeb">
          <div class="d-flex">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('frontend/assets/images/logo-login.png')}}"  alt="logo" class="img-fluid" /></a>
            <ul class="navbar-nav  new_menu_color ms-auto  me-3">
               @php
              $role=Auth::guard('client')->user()->first_name;
              $lastlogin=Auth::guard('client')->user()->last_login;
              @endphp
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop" style="text-decoration: underline;">Balance 0.00</a>
            </li>
            <li class="nav-item dropdown caret">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Exposure 0
                 {{$role ?? 'User'}}
              </a>
              
              <ul class="dropdown-menu menu_design_1">
                <li><a class="dropdown-item" href="{{route('my-bets')}}">My Bets</a></li>
                <li><a class="dropdown-item" href="{{route('profit_loss')}}">Betting Profit and Loss</a></li>
                <li><a class="dropdown-item" href="{{route('account_statement')}}">Account Statement</a></li>
                <li><a class="dropdown-item" href="{{route('transferstatement')}}">Transfer Statement</a></li>
                <li><a class="dropdown-item" href="{{route('changepassword')}}">Change Password</a></li>
                <li><a class="dropdown-item" href="{{route('secureauth')}}">Secure Auth</a></li>
                <li><a class="dropdown-item" href="{{route('message')}}">Message</a></li>
                <li class="">
              <a class="dropdown-item" href="{{route('client-logout')}}"><i class="fa-solid fa-person-running"></i>LogOut</a>
            </li>
              </ul>
              
              </div>
              </div>
              
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('frontend/assets/images/logo-login.png')}}"  alt="logo" class="img-fluid" /></a>
          <ul class="navbar-nav  new_menu_color ms-auto  me-3">
               @php
              $role=Auth::guard('client')->user()->first_name;
              $lastlogin=Auth::guard('client')->user()->last_login;
              @endphp
            
            <li class="nav-item">
              <a class="nav-link btn btn-success" style="background: linear-gradient(180deg, #007b15, #138e00); color:white; border: 1px solid white" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop"><i class="fa-solid fa-piggy-bank"></i> Deposit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-danger" style="    background: linear-gradient(180deg, #7b0000, #d10000); color:white; border: 1px solid white" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop"><i class="fa-solid fa-hand-holding-dollar"> </i>Withdraw</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop"><i class="fa-solid fa-search-plus fa-lg"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop"> Rules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop" style="text-decoration: underline;">Balance 0.00</a>
              <span class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop" style="text-decoration: underline;">Exposure 0</span>
            </li>
            <li class="nav-item dropdown caret">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{$role ?? 'User'}}
              </a>
              <ul class="dropdown-menu menu_design_1">
                <li><a class="dropdown-item" href="{{route('my-bets')}}">My Bets</a></li>
                <li><a class="dropdown-item" href="{{route('profit_loss')}}">Betting Profit and Loss</a></li>
                <li><a class="dropdown-item" href="{{route('account_statement')}}">Account Statement</a></li>
                <li><a class="dropdown-item" href="{{route('transferstatement')}}">Transfer Statement</a></li>
                <li><a class="dropdown-item" href="{{route('changepassword')}}">Change Password</a></li>
                <li><a class="dropdown-item" href="{{route('secureauth')}}">Secure Auth</a></li>
                <li><a class="dropdown-item" href="{{route('message')}}">Message</a></li>
                <li class="">
              <a class="dropdown-item" href="{{route('client-logout')}}"><i class="fa-solid fa-person-running"></i>LogOut</a>
            </li>
              </ul>
            </li>
          </ul>
        </div>
         <div class="container-fluid hideForWeb">
            <ul class="navbar-nav  new_menu_color d-flex flex-row justify-content-around">
               <li class="nav-item" style="width:200px !important">
              <a class="nav-link btn btn-success" style="background: linear-gradient(180deg, #007b15, #138e00); color:white; border: 1px solid white" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop"><i class="fa-solid fa-piggy-bank"></i> Deposit</a>
            </li>
            <li class="nav-item" style="width:200px !important">
              <a class="nav-link btn btn-danger" style="    background: linear-gradient(180deg, #7b0000, #d10000); color:white; border: 1px solid white" href="#" data-bs-toggle="modal" data-bs-target="#RulesstaticBackdrop"><i class="fa-solid fa-hand-holding-dollar"> </i>Withdraw</a>
            </li>
              </ul>
        </div>
      </div>
    </nav>
    <div class="Home-pages_marquee" style="background: black;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <marquee class="marquee"><b>
              <div>Greetings, We are happy to announce that we have bring all new security feature for all admin and
                user panels. We request all to make full use of this feature and avoid any fraudulent transaction.
                </b>
              </div>
            </marquee>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg d-none d-md-block" style="background: #8A2BE2;">
      <div class="container-fluid" >
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="" id="navbarSupportedContent" style="max-width: 100%;">
          <ul class="d-flex justify-content-around navb" style="overflow-x: auto;" >
            <li class="nav-item col-auto p-2"><a href="{{route('football-frontend')}}" class="nav-link"> <span class="link-name">HOME</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('tennis-frontend')}}" class="nav-link"> <span class="link-name">IPL 2024</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('cricket-frontend')}}" class="nav-link"> <span class="link-name">LOK SABHA 2024</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('table-tenis-frontend')}}" class="nav-link"> <span class="link-name">CRICKET</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('darts-frontend')}}" class="nav-link">
              <span class="link-name">FOOTBALL</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('badminton-frontend')}}" class="nav-link"> <span class="link-name">TENNIS</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('kabaddi-frontend')}}" class="nav-link"> <span class="link-name">HORSE RACING</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('boxing-frontend')}}" class="nav-link"> <span class="link-name">GREYHOUND RACING</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('arts-frontend')}}" class="nav-link">
              <span class="link-name">KABADI</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('Motor-Sport-frontend')}}" class="nav-link"> <span class="link-name">POLITICS</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('basketball-frontend')}}" class="nav-link">
              <span class="link-name">SPORTS BOOK</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('election2023-frontend')}}" class="nav-link download-apk"> <span class="link-name">CASINO</span></a>
          </li>
          <li class="nav-item col-auto p-2"><a href="{{route('icc2023-frontend')}}" class="nav-link download-apk"> <span class="link-name">INT CASINO</span></a></li>
          <li class="nav-item col-auto p-2"><a href="{{route('lottery-frontend')}}" class="nav-link">
              <span class="link-name">BINARY</span></a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <script>
  const loaderEl = document.getElementsByClassName('fullpage-loader')[0];
document.addEventListener('readystatechange', (event) => {
	// const readyState = "interactive";
	const readyState = "complete";
    
	if(document.readyState == readyState) {
		// when document ready add lass to fadeout loader
		loaderEl.classList.add('fullpage-loader--invisible');
		
		// when loader is invisible remove it from the DOM
		setTimeout(()=>{
			loaderEl.parentNode.removeChild(loaderEl);
		}, 1000)
	}
});
  $(document).ready(function(){
    $('.container').each(function(){
      $(this).addClass('container-fluid');
      $(this).removeClass('container');
    });
  });
</script>