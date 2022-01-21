<?php
$valor = 'idre';

include 'traducir.php';


$idioma = $valor;

?>
<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BJRZUM.iN</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /*'Dosis', sans-serif;*/
        * {
            font-family: 'Raleway', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        :root {
  --gris--negro: #111;
  --gris-gris: #333;
  ---negro: #000;
}

.header {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  height: auto;
  min-height: 100vh;
  background-color: #000;
  background-image: linear-gradient(to left, #000, #222);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1;
}
nav {
  display: inline-block;
  width: 100%;
}

h1 {
  color: #fff;
  font-size: 2.5rem;
  font-weight: 500;
  display: inline-block;
  width: 100%;
  margin-top: 1em;
}
.h1__pointer {
  color: #48e;
  font-family: "Dosis", sans-serif;
  font-size: 2em;
}
.h1__mod {
  color: #48e;
  font-family: "Dosis", sans-serif;
  font-size: 2em;
}

.nav__container {
  display: flex;
  color: #fff;
  width: 100%;
  justify-content: center;
  align-items: center;
}

/*PENDIENTE*/
#form__nav {
  position: relative;
}
.nav__text__mas {
  background-color: #000;
  border-radius: 5px;
  position: absolute;
  top: 70px;
  left: 0;
  display: inline-block;
  width: 100%;
  overflow: hidden;
  display: none;
}
.nav__text__mas--active {
  display: inline-block;
}

input[type="submit"] {
  background-color: var(--gris--negro);
  border: none;
  color: #fff;
  padding: 1em;
  text-decoration: none;
  font-size: 1em;
  display: inline-block;
  width: 100%;
  border-bottom: 1px solid #444a;
}
input[type="submit"]:hover {
  background-color: transparent;
  cursor: pointer;
}
.contacto__programador {
  background-color: var(--gris--negro);
  border: none;
  color: #fff;
  padding: 1em;
  text-decoration: none;
  font-size: 1em;
  display: inline-block;
  width: 100%;
}
.contacto__programador:hover {
  background-color: transparent;
  cursor: pointer;
}

/* ////////////////////*/

.bi-chevron-down,
.bi-chevron-right {
  color: #fff;
  font-size: 2em;
}
.nav__items {
  display: inline-block;
  position: relative;
  padding: 1em;
  width: 20%;
  min-width: 150px;
  background-color: #fff3;
  text-align: center;
}
.nav__items:hover {
  background-color: #fff1;
  cursor: pointer;
}
.nav__items:nth-child(1) {
  border-bottom-left-radius: 5px;
  border-top-left-radius: 5px;
}
.nav__items:nth-child(2) {
  border-bottom-right-radius: 5px;
  border-top-right-radius: 5px;
}
.bi-chevron-double-down {
  font-size: 2.5em;
  color: #fff;
  cursor: pointer;
}
.header__iconBottom {
  animation-name: mover;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}
.header__iconBottom:hover {
  animation-name: none;
}
.header__iconBottom:hover .bi-chevron-double-up {
  color: #48e;
}
@keyframes mover {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

.main {
  display: inline-block;
  width: 100%;
  height: 3000px;
}

/*barco*/

.barco {
  display: inline-block;
  width: 100%;
  position: relative;
  height: 100px;
  overflow: hidden;
  border-bottom: 1px solid #444a;
  color: #fff;
}
.barco img {
  width: 100px;
  height: 100%;
  position: absolute;
  left: calc(100% + 100px);
}
.barco__texto {
  display: inline-block;
  position: absolute;
  top: 0;
  text-align: center;
  color: #fff;
  font-size: 1.1em;
  font-weight: 500;
  width: 100px;
  left: calc(100% + 200px);
  font-family: "Dosis", sans-serif;
}

/*SECCION*/

.section {
  display: inline-block;
  width: 100%;
  height: auto;
  min-height: 100vh;
  background-color: #000;
  position: fixed;
  top: 100%;
  left: 0;
  z-index: 100;
  transition: all 1s;
}
.section--active {
  top: 0;
}
.bi-chevron-double-up {
  font-size: 2.5em;
  color: #fff;
  cursor: pointer;
  display:inline-block;
  margin-bottom:100px;
}

.container__goes {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-template-rows: repeat(2, 1fr);
  grid-column-gap: 0px;
  grid-row-gap: 0px;
  width: 100%;
  height:auto;
  min-height: calc(100vh - 100px);
}
.goe:nth-child(1){grid-area: 1 / 1 / 2 / 2;}
.goe:nth-child(2){grid-area: 1 / 2 / 2 / 3;}
.goe:nth-child(3){grid-area: 2 / 1 / 3 / 2;}
.goe:nth-child(4){ grid-area: 2 / 2 / 3 / 3;}
.goe{

  display: inline-block;
  width: 100%;
  height: 100%;
}

.goes__items{
  display: flex;
  width: 100%;
  height: 100%;
  background-color: transparent;
  position: relative;
  overflow: hidden;
  justify-content: center;
  align-items: center;
}
.goes__link{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  color:#fff;
  font-size: 2.5em;

}
.goes__link i{
  display: inline-block;
}

.goes__items:hover{
  background-color: #fff3;
  cursor: pointer;
}
.section__iconTop{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: .5em;
}
.iconT{
  position:relative;
  display: inline-block;
  animation-name: mover;
  animation-duration: 1s;
  animation-iteration-count: infinite;
}
.iconT:hover{
  animation-name: none;
  
}
.bi-chevron-double-down:hover{
  color: #48e;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container__key">
        <header class="header">
            <div class="header__logo">
                <h1>BJRZUM<span class="h1__pointer">.</span><span class="h1__mod">i</span>N</h1>
            </div>
            <nav class="nav">
                <div class="nav__container">
                    <div class="nav__text nav__items">
                        <i class="bi bi-chevron-down"></i>
                        <div class="nav__text__mas">
                            <div class="cambiar__idioma">
                                <form action="http://www.bjrzum.in/es/index.php" method="post" id="form__nav">
                                    <input type="hidden" name="idioma" value="<?php echo $idioma; ?>">
                                    <input type="submit" name="submit" value="<?php
                                                                                if ($idioma == 'espanol') {
                                                                                    echo $texto_espanol__nav__valueInputSubmit;
                                                                                } else if ($idioma == 'idre') {
                                                                                    echo $texto_idre__nav__valueInputSubmit;
                                                                                } else {
                                                                                    echo 'Idioma IDRE';
                                                                                }
                                                                                ?>" class="cambiar__idioma__btn">

                                </form>
                            </div>
                            <a href="contacto.html" class="contacto__programador">
                                <?php
                                if ($idioma == 'espanol') {
                                    echo $texto_espanol__nav__a;
                                } else if ($idioma == 'idre') {
                                    echo $texto_idre__nav__a;
                                } else {
                                    echo 'Contactar al Programador';
                                }

                                ?>
                            </a>
                        </div>
                    </div>
                    <a href="cuentos.php" class="nav__link nav__items">
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </nav>
            <div class="barco">
                <img src="svg/barco.svg" alt="barco" type="image/svg+xml" class="barco__img">
                <p class="barco__texto">
                    <?php
                    if ($idioma == 'espanol') {
                        echo $texto_espanol_barco;
                    } else if ($idioma == 'idre') {
                        echo $texto_idre_barco;
                    } else {
                        echo 'Navega por la Imaginación.';
                    }
                    ?>
                </p>
            </div>
            <div class="header__iconBottom">
                <i class="bi bi-chevron-double-up"></i>
            </div>
        </header>
        <section class="section">
            <div class="section__container">
                <div class="section__iconTop">
                    <div class="iconT">
                        <i class="bi bi-chevron-double-down"></i>
                    </div>
                </div>
                <div class="container__goes">
                    <div class="goe">
                        <div class="goes__items">
                            <a href="" class="goes__link"> <i class="bi bi-github"></i></a>
                        </div>
                    </div>
                    <div class="goe">
                        <div class="goes__items">
                            <a href="" class="goes__link"> <i class="bi bi-globe2"></i></a>
                        </div>
                    </div>
                    <div class="goe">
                        <div class="goes__items">
                            <a href="" class="goes__link"> <i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="goe">
                        <div class="goes__items">
                            <a href="" class="goes__link"> <i class="bi bi-person-workspace"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <main class="main">

        </main>
    </div>
    <script src="scripts/index.js"></script>
</body>

</html>