<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akin na Lisensya mo</title>
    <link rel="icon" type="image/x-icon" href="media/mad.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="preload" href="media/scream.mp3" as="audio" type="audio/mpeg" />
  </head>

  <body>
    <header>
      <nav>
        <div class="navlogo">
          <img id="navlogo" src="media/images.jpg" alt="John Pork" />
        </div>
        <div class="navlinks">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="tetris.html">Game</a>
          <a onclick="surprise()">Surprise</a>
        </div>
      </nav>
    </header>

    <main>
      <div class="surprise" id="surprise">
        <span id="close"
          ><i class="fa-solid fa-xmark" onclick="closeSurprise()"></i
        ></span>
        <img src="media/jumpscare.jpg" draggable="false">
        <audio src="media/scream.mp3" id="scream" preload="auto" loop></audio>
      </div>

      <section class="content1">
        <aside class="video">
          <video controls>
            <source src="media/Akin na.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </aside>

        <article class="desc">
          <h1 id="home">AKIN NA ANG LISENSYA MO!😡</h1>
          <p>
            Akin na lisensya mo 🤨🤨 Akin na lisensya mo 😐 Akin na lisensya mo
            😠 Akin na yung lisensya mo 😡😡 AKIN NA 🤨😡😡😡 TITIGNAN KO
            LISENSYA MO 😡😡 NAKADRUGS 💊 KAPA 🤨 AKIN YUNG LISENSYA MO 😔😔
            TITIGNAN KO LISENSYA MO 👀 TITIGNAN KO 👁👁 PULANG PULA 🔴🟥 MATA
            👀MO NAKA DRUGS KA? 🤨🤨 ME MGA SAKAY AKO DON KAHIT BIDYOHAN 🎥 MO
            AKO DYAN IKAW ANG WALA SA LINYA PAPATAYIN MO PAMILYA KO ☠️☠️ GAGO KA
            😠 AKIN NA LISENSYA MO 😡😡 AKIN NA LISENSYA MOOOOO 🤬🤬 PAPATAYIN
            MO KAMI? 😔 PAPATAYIN MO KAMI???😡 BAT PULANG PULA MATA MO? 🤨🤨
            NAKADRUGS KA BA? 🤨 AKIN NA LISENSYA MO😡 WAG MOKO BIDYOHAN 🎥 BIDYO
            MOKO NANG IBIDYO 🎥 PAPATAYIN MO PAMILYA KO 😡NAINTINDIHAN MOKO?
            🤨AKIN NA LIS🤨ENSYA MO😡😡 BANGAG KA BA? 🤨SABOG KA NO?🤨 SABOG KA
            NO? 🤨GINITGIT MO KAMI DI MO NAKIKITA YON?😠 PINATAY MO KAMI AH
            ☠️AKO WALA SA LINYA?🤨 GAGO AY PUTANG 😠AKIN NA LISENSYA MO AKIN NA
            LISENYSA MO BA— 🥺 Akin na lisensya mo 🥺 Nanginginig na ako sayo 😠
            Akin na—😠🫳
          </p>
        </article>
      </section>

      <section class="marching">
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
        <img id="soldiers" src="media/marching.gif" alt="forward, march!" />
      </section>

      <section class="order">
        <h1 id="sec-title"> Nagugutom ka? </h1>

        
      </section>
    </main>

    <footer></footer>
  </body>
  <script>
    function surprise() {
      const surprise = document.getElementById("surprise");
      surprise.style.top = `${window.scrollY}px`; // so the popup shows wherever the window is on the website
      surprise.classList.add("active");
      document.documentElement.classList.add("active");

      const scream = document.getElementById("scream");
      scream.currentTime = 0;
      scream.play();
    }

    function closeSurprise() {
      const surprise = document.getElementById("surprise");
      surprise.classList.remove("active");
      surprise.style.top = "";
      document.documentElement.classList.remove("active"); // documentElement is the <html> tag.
      
      const scream = document.getElementById("scream");
      scream.pause();
      scream.currentTime = 0;
    }
  </script>
</html>
