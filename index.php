<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas de Informação</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>

        <a href="#" class="logo"> <span> Sistemas </span> de Informação <span>.</span></a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">Sobre o curso</a>
            <a href="#estagios">Estágios</a>
            <a href="#comentarios">Comentários</a>
            <a href="#cadastro">Cadastro</a>
        </nav>

        <div class="icons">
            <a href="https://api.whatsapp.com/send?phone=5519999999999&text=Texto%20aqui"
            target="_blank"
            style="position:fixed;bottom:20px;right:30px;">
            <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
            </a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>
    </header>

    <!-- home section starts -->
    <section class="home" id="home">

        <div class="content">
            <h3>Sistemas de Informação</h3>
            <span>
                <?php
                setlocale(LC_TIME, 'pt_BR.UTF-8');
                $dataAtual = strftime('%A, %e de %B de %Y');
                echo $dataAtual;
                ?>
            </span>
            <br>
            <a href="#" class="btn">Saiba mais</a>
        </div>


    </section>

    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about" id="about">

        <h1 class="heading"> <span> Sobre </span> o curso </h1>

        <div class="row">
            <div class="imgg">
                <img src="images/about-vid.png" alt="">
                <h3>UFSC</h3>
            </div>

            <div class="content">
                <h3>O que é Sistemas de Informação?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti blanditiis repellat cupiditate veniam.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti blanditiis repellat cupiditate veniam.</p>
                <a href="#" class="btn">Saiba mais</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- icons section starts -->

    <section class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <div class="info">
                <h3>Networking</h3>
                <span>conheça novas pessoas</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <div class="info">
                <h3>Tecnologias</h3>
                <span>conheça novas tecnologias</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <div class="info">
                <h3>Mercado</h3>
                <span>área em alta</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-4.png" alt="">
            <div class="info">
                <h3>Software</h3>
                <span>desenvolva softwares ágeis</span>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- estagios section starts -->

    <section class="estagios" id="estagios">

        <h1 class="heading"> Quero <span>estagiar</span></h1>
        <div class="box-container">
            <div class="box">
                <span class="discount">Bolsa</span>
                <div class="image">
                    <img src="images/img-1.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Inscrever-se</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Lapesd</h3>
                    <div class="price"> UFSC <span>- 12/03/2023</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">Bolsa</span>
                <div class="image">
                    <img src="images/img-2.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Inscrever-se</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>LabSec</h3>
                    <div class="price"> UFSC <span>- 12/03/2023</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">Bolsa</span>
                <div class="image">
                    <img src="images/img-3.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Inscrever-se</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>LEA</h3>
                    <div class="price"> UFSC <span>- 15/03/2023</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">Bolsa</span>
                <div class="image">
                    <img src="images/img-4.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Inscrever-se</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>LISHA</h3>
                    <div class="price"> UFSC <span>- 23/03/2023</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">Bolsa</span>
                <div class="image">
                    <img src="images/img-5.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Inscrever-se</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>LSC</h3>
                    <div class="price"> UFSC <span>- 06/03/2023</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">Bolsa</span>
                <div class="image">
                    <img src="images/img-6.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Inscrever-se</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Bridge</h3>
                    <div class="price"> UFSC <span>- 02/04/2023</span></div>
                </div>
            </div>
           
        </div>

    </section>
    <!-- estagios section ends -->


    <!-- comentarios section starts -->

    <section class="comentarios" id="comentarios">

        <h1 class="heading"> Comentários <span>alunos</span></h1>
        <div class="box-container">

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis expedita rem delectus esse saepe consequatur libero quam quo, aut a? Laboriosam minus aliquam quam tempora voluptatem facere quasi excepturi voluptas!</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>bolsista LSC</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis expedita rem delectus esse saepe consequatur libero quam quo, aut a? Laboriosam minus aliquam quam tempora voluptatem facere quasi excepturi voluptas!</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>liana silva</h3>
                        <span>bolsista LabSec</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis expedita rem delectus esse saepe consequatur libero quam quo, aut a? Laboriosam minus aliquam quam tempora voluptatem facere quasi excepturi voluptas!</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>matteo ferrari</h3>
                        <span>bolsista LISHA</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>
        </div>

    </section>
    <!-- comentarios section ends -->

    <!-- cadastro section starts -->

    <section class="cadastro" id="cadastro">
        <h1 class="heading"> Cadastro <span> para mais informações  </span></h1>

        <div class="row">

            <form method="POST" action="cadastro.php">
                <div><input type="text" name="nome" placeholder="Nome" class="box"></div>
                <div><input type="email" name="email" placeholder="E-mail" class="box"></div>
                <div><input type="text" name="mensagem" placeholder="Mensagem" class="box"></div>
                <div class="btn-container">
                    <input type="submit" name="acao" value="Cadastrar" class="btn">
                    <a href="listar_usuarios.php" class="btn">Mostrar usuários cadastrados</a>
                </div>
                
            </form>

        </div>
    </section>
    <!-- cadastro section ends -->
    
    <!-- footer section starts -->
    <footer>
        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>Links</h3>
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">estágios</a>
                    <a href="#">comentarios</a>
                    <a href="#">cadastro</a>
                </div>

                <div class="box">
                    <h3>Extra links</h3>
                    <a href="#">minha conta</a>
                    <a href="#">meus favoritos</a>
                    <a href="#"></a>
                </div>

                <div class="box">
                    <h3>Localização</h3>
                    <a href="#">florianópolis-SC</a>
                    
                </div>

                <div class="box">
                    <h3>Contato</h3>
                    <a href="#">+123-7898</a>
                    <a href="#">corregedoria@gmail.com</a>
                </div>

            </div>
        </section>
    </footer>
    <!-- footer section ends -->

</body>
</html>