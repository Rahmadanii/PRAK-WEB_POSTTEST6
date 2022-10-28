<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <nav>
    <div class="layar-dalam">
      <div class="logo">
        <a href=""><img src="img/logo-white.png" class="putih" /></a>
        <a href=""><img src="img/logo-black.png" class="hitam" /></a>
      </div>
      <div class="menu">
        <a href="#" class="tombol-menu">
          <span class="garis"></span>
          <span class="garis"></span>
          <span class="garis"></span>
        </a>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#aboutme">About Me</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
          <br /><br /><br /><br /><br />
          <li>
            <top class="Fitur">Fitur</top>
          </li>
          <li><a href="login.php">Login</a></li>
          <li><a href="hal login.php">Daftar</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="layar-penuh">
    <header id="home">
      <div class="overlay"></div>
      <video autoplay muted loop>
        <source src="img/Travel Vlog.MP4" type="video/mp4" />
      </video>
      <div class="intro">
        <h3>Visit Indonesia</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
          officiis?
        </p>
        <p>
          <a href="" class="tombol">MORE INFO</a>
        </p>
      </div>
    </header>

    <main>
      <section id="aboutme">
        <div class="layar-dalam">
          <h3>About Me</h3>
          <table style="width: 700px">
            <tr>
              <td rowspan="20" width="200px">
                <img src="img/dani.png" width="300px" height="320px border"="1" />
              </td>
            </tr>
            <tr>
              <td><b>Nama Lengkap</b></td>
              <td>:</td>
              <td>Rahmadani</td>
            </tr>
            <tr>
              <td><b>NIM</b></td>
              <td>:</td>
              <td>2009106082</td>
            </tr>
            <tr>
              <td><b>Tempat, Tanggal Lahir</b></td>
              <td>:</td>
              <td>Maliba' 20 Oktober 2002</td>
            </tr>
            <tr>
              <td><b>Jenis kelamin</b></td>
              <td>:</td>
              <td>19 tahun</td>
            </tr>
            <tr>
              <td><b>Agama</b></td>
              <td>:</td>
              <td>Islam</td>
            </tr>
            <tr>
              <td><b>Status</b></td>
              <td>:</td>
              <td>Mahasiswa</td>
            </tr>
          </table>
        </div>
      </section>

      <section id="gallery">
        <div class="layar-dalam"></div>
        <h3>Gallery</h3>
        <div><img src="img/foto1.jpg" /></div>
        <div><img src="img/foto2.jpg" /></div>
        <div><img src="img/foto3.jpg" /></div>
        <div><img src="img/foto4.jpg" /></div>
        <div><img src="img/foto5.jpg" /></div>
        <div><img src="img/foto6.jpg" /></div>
        <div><img src="img/foto7.jpg" /></div>
        <div><img src="img/foto8.jpg" /></div>
      </section>

      <section class="abuabu" id="blog">
        <div class="layar-dalam">
          <h3>Blog</h3>
          <p class="ringkasan">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
            fugit.
          </p>
          <div class="blog">
            <div class="area">
              <div class="gambar" style="background-image: url('img/blog1.jpg')"></div>
              <div class="text">
                <article>
                  <h4><a href="#">How About This?</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Placeat, est omnis? Quas reprehenderit rem nesciunt.
                  </p>
                </article>
              </div>
            </div>
            <div class="area">
              <div class="gambar" style="background-image: url('img/blog2.jpg')"></div>
              <div class="text">
                <article>
                  <h4><a href="#">How About This?</a></h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Placeat, est omnis? Quas reprehenderit rem nesciunt.
                  </p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer id="contact">
      <div class="layar-dalam">
        <div>
          <h5>Info</h5>
          ??????????
        </div>
        <div>
          <h5>Contact</h5>
          ??????????
        </div>
        <div>
          <h5>Help</h5>
          ??????????
        </div>
      </div>
      <div class="layar-dalam">
        <div class="copyright">&copy; 2022 Travelling Indonesia</div>
      </div>
    </footer>
  </div>

  <script src="javascript.js"></script>
  <script src="jQuery.js"></script>
</body>

</html>