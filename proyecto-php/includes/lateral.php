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
        <form action="actions/registro.php" method="post">

          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="">

          <label for="apellidos">Apellidos</label>
          <input type="text" name="apellidos" id="">

          <label for="email">Email</label>
          <input type="email" name="email" id="">

          <label for="password">Contraseña</label>
          <input type="password" name="password" id="">

          <input type="submit" name="submit" value="Registrar">

        </form>

      </div>

    </aside>