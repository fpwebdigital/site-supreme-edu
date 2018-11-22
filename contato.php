<?php include("include/nav.php"); ?>
    <?php include("include/header.php"); ?>
        <?php include("include/logotel.php"); ?>



        
            <div id="linhas"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div id="bg_titulos"><h1 class="titulo_branco">CONTATO</h1></div>

                    </div>
                </div>
                </div>
            <!-- Conteúdo -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div id="q_conteudo">
                            <p class="texto_corrido esquerdo"><strong>Unidade Bras Cubas:</strong><br>Rua Francisco Afonso de Mello 267, Bras Cubas<br>Mogi das Cruzes - São Paulo/SP</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14631.22033499998!2d-46.22252087294534!3d-23.53951197071934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce77c2381a29d5%3A0x96f9c536e0ca3a63!2sRua+Francisco+Affonso+de+Melo%2C+267+-+Vila+Bras+Cubas%2C+Mogi+das+Cruzes+-+SP%2C+08740-310!5e0!3m2!1spt-BR!2sbr!4v1528724384847" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>

                    </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                     <div id="q_conteudo">
                         <h2 class="titulo_marrom2 esquerdo">Entre em contato por telefone, mande um e-mail ou faça uma visita.</h2>
                     <form method="post" action="faleconosco.php" enctype="multipart/form-data">
                      <div id="bg_input"><input id="nome" type="text" name="nome" class="input-inputprincipal" placeholder="Nome" required autofocus></div>
                      <div id="bg_input"><input id="email2" type="email" name="email" class="input-inputprincipal" placeholder="E-mail" required></div>
                         <div id="bg_input"><input id="telefone2" type="text" name="telefone" class="input-inputprincipal" placeholder="Telefone" required></div>
                         <div id="bg_input"><input id="celular" type="text" name="celular" class="input-inputprincipal" placeholder="Celular" required></div>
                         <div id="bg_input"><textarea id="mensagem" type="text" name="mensagem" class="input-inputarea" placeholder="Mensagem" required></textarea></div>
                         <div id="bg_input_bt"> <input type="submit" class="btn2 btn2-6 btn2-6b" value="ENVIAR" /></div>
                    </form>
                     
           
                     </div>  
                    </div>
                </div>   
</div>
<?php include("include/footer.php"); ?>