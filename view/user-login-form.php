<div class="container">
    <div id="div_body">
        <?php include_once './includes/log-control.php'; ?>
        <div id="div_social">
            <div class="div_span"><span class="span_title">Entrar com uma Rede Social</span></div>
            <div id="span_social">
                <img src="./icons/google.png" alt="">
                <span>Entrar com o Google</span>
            </div>
        </div>
        <div id="master">
            <div id="div_form" class="middle">
                <form action="./user.php" method="post">
                    <div class="div_span"><span class="span_title">Entrar como cliente</span></div>
                    <input class="input" type="text" placeholder="Digite o CPF ou e-mail" name="user" id="user">
                    <input class="input" type="password" placeholder="Senha" name="pass" id="pass">
                    <div id="div_termos">
                        <span id="termos">
                            O uso de nosso site e aplicativo é regulado por nossos <a href="#">Termos de Uso</a>.
                        </span>
                    </div>
                    <input id="form_btn" type="submit" value="ENTRAR">
                </form>
            </div>
            <div id="div_reg" class="middle">
                <div class="div_span"><span class="span_title">Criar uma nova conta</span></div>
                <div id="sub_titlep"><span>Vantagens de ser um de nossos clientes</span></div>
                <div id="div_sub">
                    <div class="div_cartao">
                        <img src="./icons/cartao.png" class="sub_img">
                        <span class="sub_span">Salvar Cartões</span>
                    </div>
                    <div class="div_cartao">
                        <img src="./icons/ingressos.png" class="sub_img">
                        <span class="sub_span">Comprar rápido</span>
                    </div>
                    <div class="div_cartao">
                        <img src="./icons/coracao.png" class="sub_img">
                        <span class="sub_span">Favoritar cinemas</span>
                    </div>
                    <div class="div_cartao">
                        <img src="./icons/ticket.png" class="sub_img">
                        <span class="sub_span">Retirar pelo App</span>
                    </div>
                </div>
                <div id="div_link_reg">
                    <a id="link_reg" href="?id=2" id="reg_btn">CRIAR CONTA</a>
                </div>
        </div>
    </div>
</div>