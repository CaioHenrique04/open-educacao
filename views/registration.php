<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/registration.css">
    <title>Cadastro - Projeto Open Educação</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <main>
        <section class="inside-main-left">
            <div class="inside-main-left-div">
                <h1>Projeto Open Educação</h1>
                <p>Estudante ensina estudante. <br>O Futuro da Educação.</p>
                <img src="../images/Imagem Login.svg" alt="">
            </div>
        </section>
        <section class="inside-main-right">
            <div class="inside-main-right-div">
                <form action="../models/model_registration.php" method="post">
                    <div class="form-texts">
                        <h2>Cadastro: <strong>Open Educação</strong></h2>
                    </div>
                    <div class="div-label-input">
                        <div class="div-label-input-responsive">
                            <label for="first-name">Primeiro nome:</label>
                            <input type="text" name="first-name" id="first-name">
                        </div>
                        <div class="div-label-input-responsive">
                            <label for="surname">Sobrenome:</label>
                            <input type="text" name="surname" id="surname">
                        </div>
                    </div>
                    <div class="div-label-input">
                        <div class="div-label-input-responsive">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="div-label-input-responsive">
                            <label for="ra">Usuário:</label>
                            <input type="text" name="ra" id="ra">
                        </div>
                    </div>
                    <div class="div-label-input">
                        <div class="div-label-input-responsive" style="display: flex; flex-direction: column;">
                            <label for="password">Senha:</label>
                            <input type="password" name="password" id="password">

                        </div>
                        <button style="margin-top: 20px;" class="registration-button" type="submit">Cadastrar</button>
                    </div>


                </form>
            </div>
        </section>
    </main>
    <!--- Secure Site Seal - DO NOT EDIT --->
    <span id="ss_img_wrapper_115-55_image_en">
        <a href="http://www.alphassl.com/ssl-certificates/wildcard-ssl.html" target="_blank" title="SSL Certificates">
            <img alt="Wildcard SSL Certificates" border=0 id="ss_img" src="//seal.alphassl.com/SiteSeal/images/alpha_noscript_115-55_en.gif" title="SSL Certificate">
        </a>
    </span>
    <script type="text/javascript" src="//seal.alphassl.com/SiteSeal/alpha_image_115-55_en.js"></script>
    <!--- Secure Site Seal - DO NOT EDIT --->
</body>

</html>