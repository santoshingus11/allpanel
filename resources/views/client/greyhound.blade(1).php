@extends('web_layout.app')
@section('style')

@endsection
@section('content')
<div class="col-md-10 pxxs-0"><router-outlet></router-outlet><app-sport-list>
        <div class="listing_screen"><!---->
            <div class="w-100 d-flex flex-nowrap overflow-auto gap-2 pt-1 pb-1 top-nav-event-1 d-none d-md-flex"><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1022 1013" class="icon-blink" style="height: 14px;">
                        <path d="M335 330q-26 26-60.5 40T203 384q-21 0-41-4.5T124 366l247-242q25 52 15 109t-51 97zm19-235L94 349q-12-8-22.5-18.5T52 308L312 54q6 4 11.5 8.5T335 73q5 5 10 10.5t9 11.5zm-72-59L35 279q-21-43-18-89.5T46 104q25-40 67-62.5T203 19q20 0 40.5 4.5T282 36zm91 660l67 64 582-580L835 0 253 580l66 64L67 895l-19-18-48 48 92 88 48-48-19-19 252-250z"></path>
                    </svg><!----><span class="blink" style="font-size: 13px;">Kolkata Knight Riders v Sunrisers Hyderabad</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Winterthur v St Gallen</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">FC Zurich v Lugano</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Servette v Young Boys</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">FC Nordsjaelland v Midtjylland</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Sirius v Vasteras SK</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Hacken v Malmo FF</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Djurgardens v Halmstads</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Tromso v Rosenborg</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Genk v Antwerp</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" class="icon-blink" style="height: 14px;">
                        <path d="M512 0Q406 0 313 40q-93 41-162.5 110.5T40 313Q0 406 0 512t40 199q41 93 110.5 162.5T313 984q93 40 199 40t199-40q93-41 162.5-110.5T984 711q40-93 40-199 0-51-10-101-10-49-29-95t-47-88q-28-42-64-78t-78-64q-42-28-88-47t-95-29Q563 0 512 0zM342 73l156 55v164L307 430l-156-50-4-165q38-47 88-83.5T342 73zM117 768q-33-51-52.5-109T42 538l101-131 155 51 73 224-96 132-158-46zm516 199q-29 8-59.5 12t-61.5 4q-31 0-61.5-4T391 967l-93-136 96-133h236l96 133-93 136zm349-429q-3 63-22.5 121T907 768l-158 46-96-132 73-224 155-51 101 131zM873 380l-156 50-191-138V128l156-55q45 17 86.5 44t76.5 62q9 9 17 17.5t15 18.5l-4 165z"></path>
                    </svg><!----><!----><!----><span class="blink" style="font-size: 13px;">Salernitana v Verona</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
                        <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
                    </svg><!----><!----><span class="blink" style="font-size: 13px;">Hugo Gaston v Daniel Elahi Galan</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
                        <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
                    </svg><!----><!----><span class="blink" style="font-size: 13px;">Toby Alex Kodat v Oscar Otte</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
                        <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
                    </svg><!----><!----><span class="blink" style="font-size: 13px;">Yannick Hanfmann v Andy Murray</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
                        <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
                    </svg><!----><!----><span class="blink" style="font-size: 13px;">Emm Navarro v A. Cornet</span></span><!----><span class="text-nowrap d-flex flex-nowrap gap-2 justify-content-between align-items-center text-white bg-dark p-2 rounded" style="cursor: pointer;"><!----><!----><svg fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="-0.1 -0.1 1024.1 1024.1" class="icon-blink" style="height: 14px;">
                        <path d="M874 150q-39-39-83-67-44-29-92-48T601 8q-51-9-101-8l208 209q52 51 77 117 26 65 26 132.5T785 591q-26 65-77 116-52 52-117 78t-132.5 26Q391 811 326 785q-65-25-117-77L0 500q-1 50 8 101 8 50 27 98t48 92q28 44 67 83 75 75 169 113 95 37 193 37t193-37q94-38 169-113t113-169q37-95 37-193t-37-193q-38-94-113-169zM264 653q39 38 89 59t105 20q55 0 105-20.5t89-59.5q39-39 59.5-89T732 458q1-55-20-105t-59-89L401 12q-69 15-133 49.5T150 150q-54 54-88.5 118T12 401l252 252z"></path>
                    </svg><!----><!----><span class="blink" style="font-size: 13px;">Siegemund v Blinkova</span></span><!----><!----></div>
            <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active">
                <div class="games-tabsList">
                    <tabset type="pills nav-fill" class="tab-container">
                        <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs">
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                    <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="/assets/img/icons/4.png"><!----><b>Cricket</b></div><!----><!---->
                                </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                    <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="/assets/img/icons/1.png"><!----><b>Football</b></div><!----><!---->
                                </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                    <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="/assets/img/icons/2.png"><!----><b>Tennis</b></div><!----><!---->
                                </a></li>
                            <li class="nav-item active"><a href="javascript:void(0);" role="tab" class="nav-link " aria-controls="" aria-selected="true" id=""><span></span>
                                    <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="/assets/img/icons/7.png"><!----><b>Horse Racing</b></div><!----><!---->
                                </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="false" id=""><span></span>
                                    <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="/assets/img/icons/4339.png"><!----><b>Greyhound Racing</b></div><!----><!---->
                                </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                    <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="/assets/img/icons/56767.png"><!----><b>Teenpatti</b></div><!----><!---->
                                </a></li>
                            <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span></span>
                                    <div class="d-flex flex-column h-full align-items-center justify-content-center"><img class="img-fluid" src="/assets/img/icons/98788.png"><!----><b>Roulette</b></div><!----><!---->
                                </a></li><!---->
                        </ul>
                        <div>
                            <div class="row mt-2">
                                <div class="col-md-12 col-lg-12 col-12">
                                    <tabset type="pills" _nghost-jbf-c35="" class="tab-container">
                                        <ul role="tablist" class="nav nav-pills" aria-label="Tabs">
                                            <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>GB</span><!----><!----></a></li><!---->
                                        </ul>
                                        <div class="tab-content">
                                            <tab role="tabpanel" aria-labelledby="" class="tab-pane active">
                                                <div class="bet-table horse-table">
                                                    <div class="coupon-card coupon-card-first">
                                                        <div class="card-content">
                                                            <div class="row align-items-center mx-0">
                                                                <div class="col-md-3 col-12"> Oxford </div>
                                                                <div class="col-md-9 col-12">
                                                                    <div class="horse-time-detail"><a href="{{route('greyhound_detail')}}"><span>12:33</span></a><a href="/sport-event/detail/4339/33006407.2118"><span>13:18</span></a><!----></div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mx-0">
                                                                <div class="col-md-3 col-12"> Harlow </div>
                                                                <div class="col-md-9 col-12">
                                                                    <div class="horse-time-detail"><a href="/sport-event/detail/4339/33287504.1746"><span>10:46</span></a><a href="/sport-event/detail/4339/33287504.1804"><span>11:04</span></a><a href="/sport-event/detail/4339/33287504.1824"><span>11:24</span></a><a href="/sport-event/detail/4339/33287504.1842"><span>11:42</span></a><a href="/sport-event/detail/4339/33287504.1858"><span>11:58</span></a><a href="/sport-event/detail/4339/33287504.1916"><span>12:16</span></a><a href="/sport-event/detail/4339/33287504.1934"><span>12:34</span></a><a href="/sport-event/detail/4339/33287504.1952"><span>12:52</span></a><a href="/sport-event/detail/4339/33287504.2009"><span>13:09</span></a><a href="/sport-event/detail/4339/33287504.2026"><span>13:26</span></a><!----></div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mx-0">
                                                                <div class="col-md-3 col-12"> Yarmouth </div>
                                                                <div class="col-md-9 col-12">
                                                                    <div class="horse-time-detail"><a href="/sport-event/detail/4339/33287143.1748"><span>10:48</span></a><a href="/sport-event/detail/4339/33287143.1806"><span>11:06</span></a><a href="/sport-event/detail/4339/33287143.1822"><span>11:22</span></a><a href="/sport-event/detail/4339/33287143.1839"><span>11:39</span></a><a href="/sport-event/detail/4339/33287143.1856"><span>11:56</span></a><a href="/sport-event/detail/4339/33287143.1913"><span>12:13</span></a><a href="/sport-event/detail/4339/33287143.1931"><span>12:31</span></a><a href="/sport-event/detail/4339/33287143.1947"><span>12:47</span></a><a href="/sport-event/detail/4339/33287143.2004"><span>13:04</span></a><a href="/sport-event/detail/4339/33287143.2023"><span>13:23</span></a><!----></div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mx-0">
                                                                <div class="col-md-3 col-12"> Nottingham </div>
                                                                <div class="col-md-9 col-12">
                                                                    <div class="horse-time-detail"><a href="/sport-event/detail/4339/33287154.1753"><span>10:53</span></a><a href="/sport-event/detail/4339/33287154.1811"><span>11:11</span></a><a href="/sport-event/detail/4339/33287154.1827"><span>11:27</span></a><a href="/sport-event/detail/4339/33287154.1844"><span>11:44</span></a><a href="/sport-event/detail/4339/33287154.1901"><span>12:01</span></a><a href="/sport-event/detail/4339/33287154.1919"><span>12:19</span></a><a href="/sport-event/detail/4339/33287154.1936"><span>12:36</span></a><a href="/sport-event/detail/4339/33287154.1954"><span>12:54</span></a><a href="/sport-event/detail/4339/33287154.2011"><span>13:11</span></a><a href="/sport-event/detail/4339/33287154.2028"><span>13:28</span></a><a href="/sport-event/detail/4339/33287154.2046"><span>13:46</span></a><!----></div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mx-0">
                                                                <div class="col-md-3 col-12"> Oxford </div>
                                                                <div class="col-md-9 col-12">
                                                                    <div class="horse-time-detail"><a href="/sport-event/detail/4339/33287162.1756"><span>10:56</span></a><a href="/sport-event/detail/4339/33287162.1814"><span>11:14</span></a><a href="/sport-event/detail/4339/33287162.1831"><span>11:31</span></a><a href="/sport-event/detail/4339/33287162.1851"><span>11:51</span></a><a href="/sport-event/detail/4339/33287162.1909"><span>12:09</span></a><a href="/sport-event/detail/4339/33287162.1926"><span>12:26</span></a><a href="/sport-event/detail/4339/33287162.1943"><span>12:43</span></a><!----></div>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mx-0">
                                                                <div class="col-md-3 col-12"> Kinsley </div>
                                                                <div class="col-md-9 col-12">
                                                                    <div class="horse-time-detail"><a href="/sport-event/detail/4339/33287128.1759"><span>10:59</span></a><a href="/sport-event/detail/4339/33287128.1816"><span>11:16</span></a><a href="/sport-event/detail/4339/33287128.1833"><span>11:33</span></a><a href="/sport-event/detail/4339/33287128.1849"><span>11:49</span></a><a href="/sport-event/detail/4339/33287128.1907"><span>12:07</span></a><a href="/sport-event/detail/4339/33287128.1924"><span>12:24</span></a><a href="/sport-event/detail/4339/33287128.1941"><span>12:41</span></a><a href="/sport-event/detail/4339/33287128.1959"><span>12:59</span></a><a href="/sport-event/detail/4339/33287128.2016"><span>13:16</span></a><!----></div>
                                                                </div>
                                                            </div><!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </tab><!---->
                                        </div>
                                    </tabset>
                                </div>
                            </div>
                        </div>
                    </tabset>
                </div>
            </div>
            <div role="tabpanel" aria-labelledby="inplay-tab" class="tab-pane fade show active ds-none">
                <div class="games-tabsList">
                    <tabset type="pills nav-fill" class="tab-container">
                        <ul role="tablist" class="nav nav-pills nav-fill" aria-label="Tabs"><!----></ul>
                        <div class="tab-content"><!----><!----><!----><!----></div>
                    </tabset>
                </div>
            </div><!---->
        </div><!---->

    </app-sport-list><!---->
</div>

@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection