<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predict & Win</title>
    <!-- ============== Bootstrap Css Links =============== -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Datatables CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<style>
    .overlay-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loader img {
        width: 100px;
        height: 100px;
    }

    .outer-box {
        border: 1px solid #EBE3D5;
        width: 100%;
    }

    .flag img {
        width: 35px;
        height: 25px;
    }

    .prediction-section {
        width: 100%;
        height: 100%;
        background: linear-gradient(to left, #e76161, #ffaf9a);
    }

    .prediction-banner {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .prediction-banner img {
        width: 100%;
    }

    .slide-container {
        max-width: 1120px;
        width: 100%;
        padding: 40px 0;
    }

    .slide-content {
        margin: 0 40px;
        /* overflow: hidden; */
    }

    .card {
        /* border-radius: 0px !important; */
        border-radius: 10px;
        background-color: #FFF;
    }

    .image-content,
    .card-content {
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        padding: 10px 0px;
        height: 160px;
    }

    .image-content {
        position: relative;
        row-gap: 5px;
        /* padding: 25px 0; */
    }

    .overlay {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: #610C9F;
        /* border-radius: 25px 25px 0 25px; */
    }

    .overlay::before,
    .overlay::after {
        content: '';
        position: absolute;
        right: 0;
        bottom: -40px;
        height: 40px;
        width: 40px;
        background-color: #610C9F;
    }

    .overlay::after {
        /* border-radius: 0 25px 0 0; */
        background-color: #FFF;
    }

    .card-image {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: #FFF;
        padding: 3px;
    }

    .card-image .card-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #610C9F;
    }

    .name {
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    .description {
        font-size: 14px;
        color: #707070;
        text-align: center;
    }

    .button {
        border: none;
        font-size: 16px;
        color: #FFF;
        padding: 8px 16px;
        background-color: #610C9F;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button:hover {
        background: #265DF2;
    }

    .swiper-navBtn {
        color: #6E93f7;
        transition: color 0.3s ease;
    }

    .swiper-navBtn:hover {
        color: #610C9F;
    }

    .swiper-navBtn::before,
    .swiper-navBtn::after {
        font-size: 38px;
    }

    .swiper-button-next {
        right: 0;
    }

    .swiper-button-prev {
        left: 0;
    }

    .swiper-pagination-bullet {
        background-color: #6E93f7;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #610C9F;
    }

    @media screen and (max-width: 768px) {
        .slide-content {
            margin: 0 10px;
        }

        .swiper-navBtn {
            display: none;
        }
    }

    .options {
        min-height: 150px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .option {
        border: 1px solid gray;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3px 0px;
        cursor: pointer;
    }

    .option.selected {
        border-color: #f03c51;
    }

    .poll-time {
        background-color: #940000;
        padding: 3px 12px;
        position: absolute;
        top: -31px;
        left: 50%;
        transform: translateX(-50%);
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    .polling-buttons {
        display: flex;
        gap: 10px;
    }

    .polling-buttons button {
        width: 100%;
        border: 1px solid white;
        border-radius: 10px;
        padding: 5px 0px;
        color: white;
        font-weight: 600;
        font-size: 20px;
        background-color: transparent;
    }

    .polling-buttons button:hover {
        width: 100%;
        border: 1px solid white;
        border-radius: 10px;
        padding: 5px 0px;
        color: black;
        font-weight: 600;
        font-size: 20px;
        background-color: #ffc107;
    }

    .polling-buttons button:focus {
        outline: none;
        box-shadow: none;
    }

    .reward-heading {
        font-weight: 700;
        font-size: 18px;
        line-height: 22px;
        color: #FFFFFF;
        border-radius: 10px;
        background: #f03c51;
        padding: 8px 15px;
        transform: rotate(-1.81deg);
        display: flex;
        width: fit-content;
        gap: 5px;
        align-items: center;
    }

    .mega-reward-img {
        width: 100%;
        overflow: hidden;
    }

    .mega-reward-img img {
        width: 100%;
    }

    .history-country-flag {
        width: 50px;
        height: 40px;
        overflow: hidden;
        border-radius: 5px;
    }

    .winner-card {
        border-radius: 10px;
        border: 1px solid green;
        background-color: rgb(214, 255, 214);
    }

    .loser-card {
        border-radius: 10px;
        border: 1px solid red;
        background-color: rgb(255, 219, 219);
    }

    .getPrize {
        background-color: green;
        color: white;
        font-weight: 600;
        border-radius: 5px;
        border: none;
        margin-bottom: 13px;
    }

    .confetti-img {
        width: 200px;
        height: 200px;
        object-fit: contain;
    }

    /* .blur-text{
            font-size: 18px;
        } */
    #blurred-text {
        font-size: 24px;
        filter: blur(5px);
        /* Initial blur value */
        /* transition: backdrop-filter 0.3s ease; */
        margin-bottom: 10px;
    }

    .reveal-code-btn {
        border: none;
        border-radius: 10px;
        background-color: rgb(255, 186, 58);
        font-weight: 600;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .not-allowed {
        cursor: not-allowed !important;
        pointer-events: none !important;
    }

    .logBtn {
        padding: 6px 20px;
        background-color: #e76161;
        color: white;
        font-size: 20px;
        font-weight: 600;
        border: none;
        border-radius: 5px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .modal-title{
        color: #e76161;
    }
    .gameRulesImg{
        width: 100%;
        height: 100%;
        overflow:hidden;
    }
    .gameRulesImg img{
        width: 100%;
    }
    ol {
            list-style: none;
            counter-reset: custom-counter;
            padding: 20px 10px;
        }

        li {
            counter-increment: custom-counter;
            margin-bottom: 10px; /* Adjust spacing between list items */
        }

        li::before {
            content: counter(custom-counter);
            font-size: 1.5em; /* Adjust the font size as needed */
            display: inline-block;
            width: 40px; /* Adjust the width of the circle */
            height: 40px; /* Adjust the height of the circle */
            line-height: 40px; /* Center the number vertically */
            text-align: center; /* Center the number horizontally */
            border-radius: 50%; /* Make it a circle */
            margin-right: 10px; /* Adjust spacing between the number and text */
            background: #e761612b;
            color: #e76161;
            font-weight: 600;
            transform: rotate(5deg);
}
</style>

<body>
    <!-- Loader - START -->
    <div class="overlay-loader">
        <div class="loader">
            <img src="{{asset('public/assets/images/loader.gif')}}" alt="Loading...">
        </div>
    </div>
    <!-- Loader - END -->
    <section class="my-5">
        <div class="text-right pr-3">
            <a href="{{url('/login')}}" class="loginBtn">
                <button class="logBtn">LOGIN</button>
            </a>
            <a href="javascript:void(0)" class="d-none logoutBtn" id="logoutBtn">
                <button class="logBtn">LOGOUT</button>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="outer-box">
                        <span style="color:gray;" class="px-3">40th ODI - Maharashtra Cricket Association Stadium • Pune</span>
                        <hr class="m-0">
                        <div class="match-section p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="country-1 d-flex align-items-center mb-2">
                                    <div class="flag">
                                        <img src="{{asset('public/assets/images/pakistan-flag.png')}}" alt>
                                    </div>
                                    <span class="ml-2" style="font-size: 20px;">Pakistan</span>
                                </div>
                                <span style="font-size: 20px;">237/6 <span style="font-size: 18px;" class="ml-2 text-secondary">(42.5)</span></span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="country-2 d-flex align-items-center mb-3">
                                    <div class="flag">
                                        <img src="{{asset('public/assets/images/india-flag.png')}}" alt>
                                    </div>
                                    <span class="ml-2" style="font-size: 20px;">India</span>
                                </div>
                                <!-- <span style="font-size: 20px;">237/6 <span style="font-size: 18px;" class="ml-2 text-secondary">(42.5)</span></span> -->
                                <span style="font-size: 18px; color:gray">Yet to bat</span></span>
                            </div>
                            <p class=" m-0" style="font-weight: 600; font-size:14px;">Pak elected to bat</p>
                            <p class=" m-0" style="font-weight: 600; font-size:14px;">CRR: 5.56</p>
                        </div>
                        <hr class="m-0">
                        <strong class="text-center text-danger d-block" style="font-size: 20px;">Predict & Win<i class="fas fa-fire-alt ml-2" style="color: orange;"></i></strong>
                    </div>
                    <div class="outer-box mt-3">
                        <div class="prediction-section">
                            <div class="prediction-banner">
                                <img class="prediction-banner-img" src="https://staticg.sportskeeda.com/cmc-predictor/v2/desktop-predict-banner-new.png" alt="">
                            </div>
                            <!-- Swiper - START  -->
                            <div class="slide-container swiper">
                                <div class="slide-content">
                                    <div class="card-wrapper swiper-wrapper" id="appendQuestions">

                                    </div>
                                </div>

                                <div class="swiper-button-next swiper-navBtn"></div>
                                <div class="swiper-button-prev swiper-navBtn"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- Swiper - START  -->
                            <div class="polling-buttons py-2 mx-md-5 mx-1">
                                <button data-toggle="modal" data-target="#gameRulesModal">Game Rules</button>
                                <button data-toggle="modal" data-target="#gameRewardsModal">Rewards</button>
                            </div>
                        </div>
                        <div class="reward-section mt-5">
                            <div class="reward-heading">
                                <div class="text-white">Mega Rewards <i class="fas fa-gift ml-2" style="color: white;"></i></div>
                            </div>
                            <div class="mega-reward-img mt-3">
                                <img src="https://staticg.sportskeeda.com/cmc-predictor/v2/desktop-rewards-new.png" alt="">
                            </div>
                        </div>
                        <div class="reward-section mt-5">
                            <div class="reward-heading">
                                <div class="text-white">Daily Rewards <i class="fas fa-gift ml-2" style="color: white;"></i></div>
                            </div>
                            <div class="mega-reward-img mt-3">
                                <img src="https://staticg.sportskeeda.com/cmc-predictor/v2/desktop-daily-reward.png" alt="">
                            </div>
                        </div>
                        <div class="reward-section mt-5">
                            <div class="reward-heading">
                                <div class="text-white">Your Prediction Stats <i class="fas fa-gift ml-2" style="color: white;"></i></div>
                            </div>
                            <!-- history Section - START  -->
                            <div class="col-12 my-4 history-section">
                                <div class="row" id="appendPastPolls">
                                    <p class="m-3">Poll in which you participated will end soon and results will display here.</p>
                                </div>
                            </div>
                            <!-- history Section - END  -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="gameRulesModal" tabindex="-1" role="dialog" aria-labelledby="gameRulesModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title" id="exampleModalLongTitle">Game Rules</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="gameRulesImg px-2">
                    <img class="" src="https://staticg.sportskeeda.com/cmc-predictor/v2/game-rules-modal-banner.png" alt="">
                </div>
                <ol>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Dolores, provident!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Dolores, provident!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Dolores, provident!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Dolores, provident!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Dolores, provident!</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="modal fade" id="gameRewardsModal" tabindex="-1" role="dialog" aria-labelledby="gameRulesModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Game Rewards</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="reward-section mt-2 px-2 py-3">
                            <div class="reward-heading">
                                <div class="text-white">Mega Rewards <i class="fas fa-gift ml-2" style="color: white;"></i></div>
                            </div>
                            <div class="mega-reward-img mt-3">
                                <img src="https://staticg.sportskeeda.com/cmc-predictor/v2/desktop-rewards-new.png" alt="">
                            </div>
                        </div>
                        <div class="reward-section mt-3 px-2 py-3">
                            <div class="reward-heading">
                                <div class="text-white">Daily Rewards <i class="fas fa-gift ml-2" style="color: white;"></i></div>
                            </div>
                            <div class="mega-reward-img mt-3">
                                <img src="https://staticg.sportskeeda.com/cmc-predictor/v2/desktop-daily-reward.png" alt="">
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="getPrizeModal" tabindex="-1" role="dialog" aria-labelledby="gameRulesModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text-center">
                    <img class="confetti-img" src="{{asset('public/assets/images/confetti.png')}}" alt>
                    <h2 class="text-secondary m-0">CONGRATULATIONS</h2>
                </div>
                <div class="text-center">
                    <p class="text-secondary">Redeem your reward</p>
                </div>
                <p id="blurred-text" class="blur-text text-center displayVoucherCode">HGSV8233JHVDC763HJ</p>
                <div class="text-center">
                    <button id="reveal-code-btn" class="reveal-code-btn px-3 py-1">Reveal Voucher
                        Code</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ============= Bootstrap Scripts =========== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".overlay-loader").addClass('d-none');
            // Swiper JS Function - START
            var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: false,
                centerSlide: 'true',
                fade: 'true',
                grabCursor: 'true',
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    1200: {
                        slidesPerView: 3,
                    },
                },
            });
            // Swiper JS Function - END
            // Blur text Function - START 
            const blurredText = document.getElementById('blurred-text');
            const revealCodeBtn = document.getElementById('reveal-code-btn');

            let isHidden = true;

            revealCodeBtn.addEventListener('click', function() {
                if (isHidden) {
                    // Reveal the text
                    blurredText.style.filter = 'none';
                    revealCodeBtn.textContent = 'Hide Code';
                } else {
                    // Hide the text
                    blurredText.style.filter = 'blur(5px)';
                    revealCodeBtn.textContent = 'Reveal Voucher Code';
                }
                isHidden = !isHidden;
            });
            // Blur text Function - END 

            const csrfToken = $('meta[name="csrf-token"]').attr('content');
            var currentDomain = window.location.origin;
            const url = new URL(window.location.href);
            const pollId = url.searchParams.get("pid");
            var user = sessionStorage.getItem("userData")
            user = JSON.parse(user);
            console.log(user);
            myUserId = null;
            if (user != null || user != undefined) {
                var myUserId = user.id;
                if (user == undefined || user == null) {
                    $(".loginBtn").removeClass('d-none');
                    $(".logoutBtn").addClass('d-none');
                    $(".option").addClass('not-allowed');
                } else {
                    $(".loginBtn").addClass('d-none');
                    $(".logoutBtn").removeClass('d-none');
                }
            }
            var apiUrl = currentDomain + '/api/get-user-polls?id=' + myUserId;
            if(pollId != null){
                apiUrl = currentDomain + '/api/get-user-polls?id=' + myUserId + '&pid=' + pollId;
            }
            $("#logoutBtn").click(function() {
                sessionStorage.removeItem('token');
                sessionStorage.removeItem('userData');
                window.location = `{{url('/login')}}`;
            });

            $.ajax({
                type: 'GET',
                url: apiUrl,
                contentType: 'application/json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if (response.status == true) {
                        console.log(response);
                        // For Latest Polls - START
                        let endStatus = '';
                        if (response.data.latestPoll != null) {
                            if (response.data.latestPoll.has_ended == 1) {
                                endStatus = 'Poll Ended'
                            }
                            $(response.data.latestPoll.questions).each(function(i, e) {
                                let cursorStatus = '';
                                if(e.userVote != null){
                                    cursorStatus = 'not-allowed';
                                }
                                let questions = `<div class="card p-2 swiper-slide position-relative">
                                            <strong>#${i+1}: ${e.question}</strong>
                                            <div class="options ${cursorStatus}">
                                                <div class="row px-3">`;
                                $(e.options).each(function(index, value) {
                                    let selection = '';
                                    let display = 'd-none';
                                    if(e.userVote != null){
                                        if(e.userVote.answer == value){
                                            selection = 'selected';
                                            display = '';
                                        }
                                    }
                                    questions += `<div data-id="${e.id}" class="col-md-6 my-1 option position-relative ${selection}">
                                            ${value}
                                            <i class="fas fa-check-circle checkmark ${display}" style="color:#f03c51;position:absolute; right:5px;top:8px;"></i>
                                        </div>`;
                                });
                                questions += `</div>
                                            </div>`;
                                if (endStatus != '') {
                                    questions += `<div class="poll-time d-md-block d-none">
                                                <i class="fas fa-stopwatch mr-2" style="color: white;"></i>
                                                <strong class="text-white">POLL ENDED</strong>
                                            </div>`;
                                }
                                questions += `</div>`;
                                $("#appendQuestions").append(questions);
                            });
                        }
                        // Select Options text - START 
                        const cardContainers = document.querySelectorAll('.card');

                        cardContainers.forEach(cardContainer => {
                            const optionElements = cardContainer.querySelectorAll('.option');

                            optionElements.forEach(option => {
                                option.addEventListener('click', () => {

                                    // // Remove 'selected' class from options within the same card container
                                    // optionElements.forEach(opt => opt.classList.remove('selected'));

                                    // // Add 'selected' class to the clicked option
                                    // option.classList.add('selected');
                                    // Remove 'selected' class from options within the same card container
                                    optionElements.forEach(opt => opt.classList.remove('selected'));

                                    
                                    // Remove 'd-none' class from the checkmark in the same container
                                    const checkmark = option.querySelector('.checkmark');
                                    checkmark.classList.remove('d-none');

                                    // Remove 'd-none' class from other checkmarks in the same container
                                    optionElements.forEach(opt => {
                                        const otherCheckmark = opt.querySelector('.checkmark');
                                        if (opt !== option && !otherCheckmark.classList.contains('d-none')) {
                                            otherCheckmark.classList.add('d-none');
                                        }
                                    });

                                    var selectedOption = option.innerText;
                                    var questionId = option.getAttribute('data-id');

                                    // Call Ajax API for Option Selection 
                                    const data = {
                                        question_id: questionId,
                                        answer: selectedOption,
                                        userId: myUserId
                                    };

                                    $.ajax({
                                        type: 'POST',
                                        url: currentDomain + '/api/cast-vote',
                                        data: JSON.stringify(data),
                                        contentType: 'application/json',
                                        headers: {
                                            'X-CSRF-TOKEN': csrfToken
                                        },
                                        success: function(response) {
                                            if (response.status == false) {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Error',
                                                    text: 'Something went wrong. Please try again in a while.',
                                                })
                                            }else{
                                                // Add 'selected' class to the clicked option
                                                option.classList.add('selected');
                                                const closestOption = option.closest('.options'); // Replace '.your-selector' with the actual selector for your option element
                                                if (closestOption) {
                                                    closestOption.classList.add('not-allowed'); // Replace 'your-class' with the class you want to add
                                                }
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Success',
                                                    text: 'Vote Casted Successfully!',
                                                })
                                            }
                                        },
                                        error: function(xhr) {
                                            // Request failed or returned an error, handle errors here
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                text: xhr.responseJSON.message,
                                            })
                                        }
                                    });
                                });
                            });
                            if (response.data.latestPoll.has_ended == 1 || user == undefined || user == null) {
                                $(".option").addClass('not-allowed');
                            }
                        });
                        // Select Options text - END 
                        // For Latest Polls - END


                        // For Past Polls - START
                        if (response.data.pastPolls.length < 1) {
                            let div = `<p class="text-center m-3">No data! You have not participated in any poll yet.</p>`;
                            $("#appendPastPolls").empty();
                            $("#appendPastPolls").append(div);
                        } else {
                            $(response.data.pastPolls).each(function(i, e) {
                                let card = 'loser-card';
                                let cardBottom = `<div class="mb-3 ml-2"><b>Winner: </b>${e.winner.name}</div>`;
                                if (e.winner_id == myUserId) {
                                    card = 'winner-card';
                                    cardBottom = `<div class="text-center">
                                        <button data-src="${e.voucher_code}" class="getPrize getPrizeBtn">Get Your Prize</button>
                                    </div>`;
                                }
                                let div = `
                                <div class="col-lg-4 col-md-6 col-12 my-1">
                                    <div class="${card}">
                                        <div class="d-flex justify-content-between align-items-center p-2">
                                            <div class="d-flex flex-column align-items-center">
                                                <img class="history-country-flag" src="{{asset('public/assets/images/pakistan-flag.png')}}" alt>
                                                <div class="text-secondary">
                                                    Pakistan
                                                </div>
                                            </div>
                                            <p class="text-secondary">Oct 14, 23</p>
                                            <div class="d-flex flex-column align-items-center">
                                                <img class="history-country-flag" src="{{asset('public/assets/images/india-flag.png')}}" alt>
                                                <div class="text-secondary">
                                                    India
                                                </div>
                                            </div>
                                        </div>
                                        ${cardBottom}
                                    </div>
                                </div>`;
                            $("#appendPastPolls").empty();
                                $("#appendPastPolls").append(div);
                            });
                            $(document).on('click', '.getPrizeBtn', function() {
                                let voucher = $(this).attr('data-src');
                                $(".displayVoucherCode").text(voucher);
                                $("#getPrizeModal").modal('show');
                            })
                        }
                        // For Past Polls - END

                    }
                    $(".overlay-loader").addClass('d-none');
                },
                error: function(xhr) {
                    $(".overlay-loader").addClass('d-none');
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseJSON.message,
                    })
                }
            });
        });
    </script>
</body>

</html>