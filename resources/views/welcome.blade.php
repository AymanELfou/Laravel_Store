@extends('Master_page')
@section('title','Home')
@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Just another carousel using swiper #swiper.js #scss</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>
<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
 --><style>
 

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

main {
  position: relative;
  min-height: 100vh;
  column-gap: 3rem;
  padding-block: min(20vh, 3rem);
  padding-inline: 2.3em;
  align-items: center;
  justify-content: center;
  background: orangered;
  overflow: hidden;
}
@media screen and (min-width: 960px) {
  main {
    display: flex;
    padding-inline: 0;
  }
}
main .content {
  width: 100%;
  color: #fff;
  position: relative;
  z-index: 2;
  margin-bottom: 3em;
}
@media screen and (min-width: 960px) {
  main .content {
    width: 40%;
    padding-left: 5em;
    margin-bottom: 0;
  }
}
main h2 {
  letter-spacing: 0.8px;
  font-weight: 700;
  font-size: 2.8rem;
  line-height: 1.2;
}
main p {
  font-size: 1rem;
  line-height: 1.8;
  margin-inline: auto;
  margin-top: 10px;
}
main .counter {
  font-weight: 400;
  display: flex;
  align-items: center;
  margin: 2.5em 0 2em 0;
  gap: 2em;
}
main .counter i {
  margin-right: 10px;
}
main .counter span {
  display: block;
  text-transform: capitalize;
  font-size: 0.8rem;
  color: #c1c1c1;
  margin-top: 3px;
}


.swiper-container {
  position: relative;
  overflow: hidden;
  width: 100%;
  right: 0px;
  margin: 0 auto;
}
@media screen and (min-width: 960px) {
  .swiper-container {
    width: 60%;
    right: -60px;
  }
}

.swiper {
  position: relative;
  width: 100%;
  z-index: 2;
}

.swiper-slide {
  width: 10rem;
  height: 24rem;
  display: flex;
  flex-direction: column;
  align-items: self-start;
  position: relative;
  border-radius: 12px;
  box-shadow: -1px 5px 15px #0000001f;
  text-align: center;
  opacity: 0.4;
  transition: opacity 0.4s ease-in;
}
.swiper-slide span {
  display: inline-block;
  background: #9926e1;
  border-radius: 0 50px 50px 0;
  text-transform: capitalize;
  padding: 12px 20px;
  letter-spacing: 0.5px;
  font-weight: 500;
  position: absolute;
  top: 2em;
  left: 0;
  color: #fff;
}
.swiper-slide h3 {
  color: #fff;
  font-size: 1.3rem;
  line-height: 1.4;
  margin-bottom: 0.625rem;
  letter-spacing: 0.8px;
  position: relative;
  word-wrap: break-word;
}
@media screen and (min-width: 800px) {
  .swiper-slide h3 {
    font-size: 1.8rem;
  }
}
.swiper-slide p {
  color: #fff;
  line-height: 1.6;
  font-size: 0.8rem;
}
.swiper-slide--one {
  background: #0f2027;
  background: linear-gradient(to bottom, #2c536400, #203a4303, #0f2027cc), url("{{ asset('imgs/souris_razer.jpg') }}") no-repeat 50% 50%/cover;
}
.swiper-slide--one h3 {
  font-family: "Courgette", cursive;
  font-weight: 300;
}
.swiper-slide--two {
  background: linear-gradient(to bottom, #2c536400, #203a4303, #0f2027cc), url("https://imgs.search.brave.com/EMwq_-jkQH2xaia2UTDh2ysYsqlJDvTL3YC1-sRzJfs/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5tYXRlcmllbC5u/ZXQvcjI1MC9vcHJv/ZHVjdHMvQVIyMDE2/MDkxMzAxNjlfZzEu/anBn") no-repeat 50% 50%/cover;
}
.swiper-slide--two h3 {
  font-family: "Noto Serif Vithkuqi", serif;
  font-weight: 300;
}
.swiper-slide--three {
  background: url("https://imgs.search.brave.com/9VIXhH5UiaZZwQIxwYJ9pweY9DJC6fFoL-iiTS52DUI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjE2eVUtSnUyVEwu/anBn") no-repeat 50% 50%/cover;
}
.swiper-slide--four {
  background: url("https://imgs.search.brave.com/UtM9zulM_tymcTySNraXqTFa10INg7brNQmwD3rfu8k/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9mci5z/aG9wcGluZy5yYWt1/dGVuLmNvbS9waG90/by8xNTAxNjMwNDM5/X01MLmpwZw") no-repeat 50% 50%/cover;
}
.swiper-slide--five {
  background: url("https://imgs.search.brave.com/8bilV_TmpD2YEWYA2-YdYbkEbVG5-CCqG4V3qsk9D58/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/c2JzaW5mb3JtYXRp/cXVlLmNvbS8zMTgz/L3R1bmlzaWUvaG9t/ZS9zb3VyaXMtZ2Ft/ZXItcmVkcmFnb24t/cHJlZGF0b3ItbTYx/Mi1yZ2ItdHVuaXNp/ZS5qcGc") no-repeat 50% 50%/cover;
}
.swiper-slide--six {
  background: linear-gradient(to bottom, #2c536400, #203a4303, #0f2027cc), url("https://imgs.search.brave.com/NHxJbPB091senwiUQb9bRdtoixffvuDBH0bPkByZs4Q/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMuZm5hYy1zdGF0/aWMuY29tL211bHRp/bWVkaWEvSW1hZ2Vz/L0I1L0I1L0Q3L0Yw/LzE1NzgzODYxLTE1/MDUtMTU0MC0xL3Rz/cDIwMjAxMDMwMTIw/NzMyL0Nhc3F1ZS1k/ZS1qZXUtZGUtYmFl/LXN0ZXJlby1IdW50/ZXJzcGlkZXItVjEt/cG91ci1QQy1QUzQt/U2xpbS1Qcm8tYXZl/Yy1taWNyby1CbGV1/LmpwZyM5NWJiYWIz/MS1mNTFmLTRiMTAt/YTJiMS1hMmVkNTVh/M2IyMTA") no-repeat 50% 50%/cover;
}
.swiper-slide--six h3 {
  font-family: "Chonburi", cursive;
  font-weight: 400;
}

.swiper-slide-active {
  display: grid;
  opacity: 1;
}

.swiper-pagination {
  position: relative;
  bottom: -0.313rem;
  text-align: center;
  margin-top: 35px;
  width: auto;
}
.swiper-pagination-bullet {
  border-radius: 0;
  width: 1.5rem;
  height: 0.25rem;
  background: #fff;
}
.swiper-pagination-bullet-active {
  background: #fff;
}

.circle {
  position: absolute;
  bottom: -5em;
  left: -8em;
  width: clamp(150px, 40vw, 400px);
  height: clamp(150px, 40vw, 400px);
  background: gray;
  border-radius: 50%;
  z-index: 1;
  opacity: 0.7;
}

</style>


</head>
<body>
<main>
  
  <div class="content">
    <h2>Welcome to Online Gaming Store</h2>
    <p> Welcome to Games Store, your go-to for premium gaming peripherals like mice, headsets, and keyboards. Whether you're a dedicated gamer or seeking the perfect gift, we've got it all. Elevate your gaming with style and precision  explore Games Store for top-tier gear!</p>
    <b><a href="/CardsProd" style="background-color: black; color: white; border-radius: 12px; padding: 15px;width: 120px;text-decoration: none;margin-top: 10px;font-family: Verdana, Geneva, Tahoma, sans-serif;">Buy Now!</a></b>
  </div>

  <div class="swiper-container">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">

          
          
        </div>
        <div class="swiper-slide swiper-slide--two">
          
          

        </div>
        <div class="swiper-slide swiper-slide--three">
          

        </div>
        <div class="swiper-slide swiper-slide--four">
          

        </div>
        <div class="swiper-slide swiper-slide--five">
          

        </div>
        <div class="swiper-slide swiper-slide--six">
          
          

        </div>

      </div>

    </div>

    <div class="swiper-pagination"></div>
  </div>
      
  <div class="circle"></div>
  
</main>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script><script >
    

var swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabCursor: true,
  spaceBetween: 30,
  centeredSlides: false,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 1,
    slideShadows: false
  },
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  keyboard: {
    enabled: true
  },
  mousewheel: {
    thresholdDelta: 70
  },
  breakpoints: {
    460: {
      slidesPerView: 3
    },
    768: {
      slidesPerView: 3
    },
    1024: {
      slidesPerView: 3
    },
    1600: {
      slidesPerView: 3.6
    }
  }
});
  </script>

</body>
</html>


@endsection