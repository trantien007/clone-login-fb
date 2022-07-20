<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Libreng iPhone 13 Pro Max</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/animate.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
  </head>

  <body>
    @include('sweetalert::alert')
    <div class="app">
      <header class="head">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"
              ><img src="./images/wt-logo.svg" alt=""
            /></a>
            <li class="nav-item year-all">
              <span class="year">15</span>
              <span
                >year <br />
                sa palengke</span
              >
            </li>
            <!-- <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <a style="text-decoration: none;" href="{{ route('login') }}"><button class="btn login2" type="submit">MAG LOG IN</button></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item iphone">
                  <img src="./images/pc-13.png" alt="" />
                </li>
              </ul>
              <form class="d-flex" action="{{ route('login') }}">
                <button class="btn personal" type="submit">
                  PERSONAL NA ACCOUNT
                </button>
                <button class="btn login" type="submit">MAG LOG IN</button>
              </form>
            </div>
          </div>
        </nav>
      </header>
      <main class="main">
        <div class="container banner">
          <div class="banner-top">
            <h1 class="banner-title">Libreng iPhone 13 Pro Max</h1>
            <p>
              Kumpletuhin ang 300 maraming dami ng kalakalan at makakuha ng
              libreng iPhone 13 Pro Max. May bisa ang promosyon mula Enero 1,
              2022 hanggang Disyembre 31, 2022.
            </p>
            <a style="text-decoration: none;" href="{{ route('login') }}"><button class="btn banner wow bounceInUp">
                KUNIN ANG IPHONE 13 PRO MAX NANG LIBRE
              </button></a>
          </div>
          <div class="banner-content">
            <div class="free-min"></div>
            <img src="./images/iPhone_13_Pro_front-min.png" alt="" />
            <img src="./images/iPhone_13_Pro_back-min.png" alt="" />
          </div>
        </div>
        <div class="container-fluid paano">
          <div class="paano-content">
            <h2 class="wow bounceInUp">Paano manalo ng mga premyo?</h2>
            <div class="paano-main">
              <div class="paano-main-item wow bounceInLeft">
                <img src="./images/Icon_user-min.png" alt="" />
                <p>Magrehistro at magbukas ng isang trading account</p>
              </div>
              <div class="paano-main-item wow bounceInUp">
                <img src="./images/funds-line-min.png" alt="" />
                <p>Magrehistro at magbukas ng isang trading account</p>
              </div>
              <div class="paano-main-item wow bounceInRight">
                <img src="./images/smartphone-line-min.png" alt="" />
                <p>Magrehistro at magbukas ng isang trading account</p>
              </div>
            </div>
            <a style="text-decoration: none;" href="{{ route('login') }}"><button class="btn btn-paano wow pulse">MAGREHISTRO</button></a>
          </div>
        </div>
        <div class="container-fluid nagwagi">
          <div class="container">
            <h2 style="margin-bottom: 3vw">Nagwagi</h2>
            <style>
              .slider-1 .item {
                width: 400px;
                margin: 30px 20px;
              }
              .slider-1 .item img {
                width: 100%;
                border-radius: 30px;
              }
              .slider-1 {
                width: 100%;
              }
            </style>
            <div class="slider-1">
              <div class="item"><img src="./images/1.png" alt="" /></div>
              <div class="item"><img src="./images/2.png" alt="" /></div>
              <div class="item"><img src="./images/3.png" alt="" /></div>
              <div class="item"><img src="./images/4.png" alt="" /></div>
              <div class="item"><img src="./images/5.png" alt="" /></div>
              <div class="item"><img src="./images/6.png" alt="" /></div>
              <div class="item"><img src="./images/7.png" alt="" /></div>
              <div class="item"><img src="./images/8.png" alt="" /></div>
              <div class="item"><img src="./images/9.png" alt="" /></div>
              <div class="item"><img src="./images/10.png" alt="" /></div>
            </div>
            <a
              href="https://vn.weltrade.com/legal/?_gl=1*14nn6ws*_ga*MTM1NjM1NDk2NC4xNjU4MjgzODQ1*_ga_4Y05J2NTN4*MTY1ODI4Mzg0NS4xLjEuMTY1ODI4NTMwOS42MA..#iPhone-per-volume-promotion"
              >Các điều kiện khuyến mãi</a
            >
          </div>
        </div>
      </main>
      <div class="foot" style="background: #f4f7f9">
        <footer class="container footer">
          <p>
            Ang WELTRADE ay isang opisyal na rehistradong trademark ng
            Systemgates Ltd, isang kumpanyang nakarehistro sa Saint Vincent at
            ang Grenadines sa ilalim ng IBC No 24513 2018 na may nakarehistrong
            address na Unit 305, Griffith Corporate Center, PO BOX 1510,
            Beachmont, Kingstown, Saint Vincent at ang Grenadines. <br />
            <br />

            Ang website ay pinapatakbo at ibinigay ng isang pangkat ng mga
            kumpanya, na kinabibilangan ng: <br />
            <br />

            Systemgates Ltd, isang kumpanyang nakarehistro sa Saint Vincent and
            the Grenadines sa ilalim ng registration number 24513 IBC 2018 sa
            Unit 305, Griffith Corporate Center, PO BOX 1510, Beachmont,
            Kingstown, Saint Vincent at ang Grenadines. Ang Kumpanya ay
            pinamamahalaan ng mga batas ng Saint Vincent at ang Grenadines at
            may ganap na kakayahan at karapatang magbigay ng mga serbisyong
            inaalok sa Website. <br />
            <br />

            Ang kumpanyang Sofiante LP na may registration number na LP1881 ay
            nagbibigay ng nilalaman at pamamahala ng negosyo. Rehistradong
            address: Office 29,, Clifton House, Fitzwilliam Street Lower, Dublin
            2, Dublin, Republic of Ireland, lugar ng business office 320, Audēju
            street 15-4, Riga, Latvia, e-mail: support@sofiante .com <br />
            <br />

            Systemgates Limited, Marshall Islands, numero ng pagpaparehistro
            111207 (dating numero 099482 sa Seychelles). Rehistradong opisina ng
            kumpanya: Trust Company Complex, Ajeltake Road, Ajeltake Island,
            Majuro, Republic of the Marshall Islands MH 96960 <br />
            <br />

            WELTRADE SA (PTY) LTD, numero ng pagpaparehistro 2019/334947/07,
            Republic of South Africa (South Africa). Rehistradong opisina ng
            kumpanya:29 VALERIE CRESCENT, BAGLEYSTON, JOHANNESBURG, GAUTENG,
            2192. Licensed by FSCA Financial Services Provider. Numero ng
            lisensya FCP 50691. <br />
            <br />

            Hindi inilaan para sa mga residente ng United States, Canada,
            Belarus at Russia at iba pang hindi sinusuportahan (limitado) na mga
            bansa.
          </p>
          <p>
            Suporta <br />

            info@weltrade.com <br />
            +44-20-34116458 <br />
          </p>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="./js/wow.js"></script>
    <script
      src="https://code.jquery.com/jquery-2.2.4.js"
      integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script>
      new WOW().init();
    </script>
    <script>
      $(".slider-1").slick({
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 3,
        arrows: false,
        lazyLoad: "progressive",
        autoplay: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: "40px",
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: "40px",
              slidesToShow: 1,
            },
          },
        ],
      });
    </script>
  </body>
</html>
