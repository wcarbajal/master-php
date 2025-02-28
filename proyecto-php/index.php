<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css">


  <title>Blog de Videojuegos</title>
</head>

<body>

  <!-- Cabecera -->

  <header id="cabecera">
    <div id="logo">
      <a href="index.php">
        Blog de videojuego
      </a>
    </div>

    <!-- Menu -->
    <nav id="menu">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="categoria1.php">Categoria 1</a></li>
        <li><a href="categoria2.php">Categoria 2</a></li>
        <li><a href="categoria3.php">Categoria 3</a></li>
        <li><a href="categoria4.php">Categoria 4</a></li>
        <li><a href="sobremi.php">Sobre mi</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </nav>

  </header>

  <main id="contenedor">
    <!-- Barra lateraL -->
    <aside id="sidebar">
      <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="post">
          <label for="email">Email</label>
          <input type="email" name="email" id="">

          <label for="password">Contraseña</label>
          <input type="password" name="password" id="">

          <input type="submit" value="Entrar">

        </form>

      </div>

      <div id="register" class="bloque">
        <h3>Registrate</h3>
        <form action="registro.php" method="post">

          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="">

          <label for="apellidos">Apellidos</label>
          <input type="text" name="apellidos" id="">

          <label for="email">Email</label>
          <input type="email" name="email" id="">

          <label for="password">Contraseña</label>
          <input type="password" name="password" id="">

          <input type="submit" value="Registrar">

        </form>

      </div>

    </aside>
    <!-- Caja principal -->
    <section id="principal">

      <h1>Ultimas entradas</h1>

      <article>
        <h2>Titulo de mi entrada</h2>
        <p>Integer fringilla maximus nisl, sed commodo magna pharetra id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur congue massa eu enim bibendum ornare. Morbi vestibulum volutpat tellus vitae maximus. Mauris ut ante id mauris tincidunt interdum. Praesent vitae tincidunt arcu. Vivamus eu orci purus.</p>
      </article>

      <article>
        <h2>Titulo de mi entrada</h2>
        <p>Integer fringilla maximus nisl, sed commodo magna pharetra id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur congue massa eu enim bibendum ornare. Morbi vestibulum volutpat tellus vitae maximus. Mauris ut ante id mauris tincidunt interdum. Praesent vitae tincidunt arcu. Vivamus eu orci purus.</p>
      </article>

      <article>
        <h2>Titulo de mi entrada</h2>
        <p>Integer fringilla maximus nisl, sed commodo magna pharetra id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur congue massa eu enim bibendum ornare. Morbi vestibulum volutpat tellus vitae maximus. Mauris ut ante id mauris tincidunt interdum. Praesent vitae tincidunt arcu. Vivamus eu orci purus.</p>
      </article>

      <article>
        <h2>Titulo de mi entrada</h2>
        <p>Integer fringilla maximus nisl, sed commodo magna pharetra id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur congue massa eu enim bibendum ornare. Morbi vestibulum volutpat tellus vitae maximus. Mauris ut ante id mauris tincidunt interdum. Praesent vitae tincidunt arcu. Vivamus eu orci purus.</p>
      </article>

    </section>


  </main>

  <!-- Pie de página -->

  <footer id="pie">

  <p>Desarrollado por Wuilmer Carbajal &copy </p>

  </footer>

</body>

</html>