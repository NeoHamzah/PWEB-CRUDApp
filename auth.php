<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/auth.css" />
    <title>Sewa Kamera</title>
  </head>

  <body>
    <div class="container" id="container">
      <div class="container-form register">
        <form action="auth.php">
          <h1>Register Akun</h1>
          <input type="text" placeholder="Nama" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Register</button>
        </form>
      </div>
      <div class="container-form login">
        <form action="dashboard.php">
          <h1>Login Akun</h1>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">Lupa Password Anda?</a>
          <button>Login</button>
        </form>
      </div>
      <div class="container-toggle">
        <div class="toggle">
          <div class="toggle-panel toggle-right">
            <h1>Selamat Datang Kembali!</h1>
            <p>Masih belum memiliki akun?<br />Silahkan registrasi terlebih dahulu!</p>
            <button class="hidden" id="register">Register</button>
          </div>
          <div class="toggle-panel toggle-left">
            <h1>Halo, Selamat<br />Datang!</h1>
            <p>Sudah memiliki akun?<br />Silahkan login terlebih dahulu!</p>
            <button class="hidden" id="login">Login</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      const container = document.getElementById('container');
      const registerBtn = document.getElementById('register');
      const loginBtn = document.getElementById('login');

      registerBtn.addEventListener('click', () => {
        container.classList.add('active');
      });

      loginBtn.addEventListener('click', () => {
        container.classList.remove('active');
      });
    </script>
  </body>
</html>
