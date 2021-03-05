<?php include("partials/head.php")?>

<?php include("partials/homeNav.php")?>

    <main class="container">

        <div class="row" id="principal">
            <div class="col-md-6 text-center my-auto">
                <img src="./img/img1.jpg" alt="img1" id="imagen-principal">
            </div>
            <div class="col-md-6 text-center my-auto">
                <h1 class="font-weight-bold">Experiencia como desarrollador</h1>
                <p>Durante el transcurso de mi carrera realice varios proyectos tanto aplicaciones para escritorio desarrolladas en Java y c#, paginas web desarrolladas en PHP con html5 
                     y aplicaciones moviles desarrolladas en IONIC con angular.</p>
                     <p>En el ambito laboral realice mi practica en El club de los emprendedores, en donde se dedican a medios de comunicación via streaming, produccion multimedia
                         y audiovisiales. Aquí realice paginas web hechas con Wordpress</p>
            </div>
        </div>

        <div class="row flex-row-reverse" id="sobre-mi">
            <div class="col-md-6 text-center my-auto">
                <img src="./img/img5.jpg" alt="img1" id="imagen-dos">
            </div>
            <div class="col-md-6 text-center my-auto">
                <h1 class="font-weight-bold">Sobre mi</h1>
                <p>Mi nombre es Mairon Iturra, tengo 23 años, vivo en Santiago de Chile y acabo de terminar mi carrera de Ingeniería en Informática en el instituto Duoc UC en el año 2020. 
                    Actualmente estoy realizando cursos en udemy sobre Laravel, JavaScript y uno sobre Angular. 
                    Este ultimo lo ocupe en mi portafolio de título donde tuve que realizar una aplicación mobile basada en Angular con ionic.</p>
            </div>
        </div>

        <div class="row" id="proyectos">
            <div class="col-md-6 text-center my-auto">
                <img src="./img/img2.jpg" alt="img1" id="imagen-tres">
            </div>
            <div class="col-md-6 text-center my-auto">
                <h1 class="font-weight-bold">Proyectos</h1>
                <p>En este parrafo hablare sobre el trabajo que realizo.</p>
                <a href="proyectos.html">
                    <button class="btn btn-success" > Ver trabajos</button>
                </a>
                
            </div>
        </div>

        <div class="row flex-row-reverse" id="contacto">
            <div class="col-md-6 text-center my-auto">
                <img src="./img/img4.jpg" alt="img1" id="imagen-cuatro">
            </div>
            <div class="col-md-6 text-center my-auto">
                <h1 class="font-weight-bold">Redes de contacto</h1>
                <p>Actualmente ocupo dos redes GITHUb que es donde tengo mis repositorios con mis proyectos.
                    Y Linkedin que es el medio el cual ocupo en el ambito laboral.</p>
                    <div class="row text-center py-3">
                        <div class="col-md-6">
                            <a href="https://github.com/Cyarth?tab=repositories">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                  </svg>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://www.linkedin.com/in/maironiturra/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                  </svg>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <div id="button-up">
            <i class="fas fa-chevron-up"></i>
        </div>
    </main>

    
<?php include("partials/footer.php")?>