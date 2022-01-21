        <div id="container">
            <p>Cadastre-se:</p>
            <?php include_once './includes/reg-control.php'; ?>
            <form method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <input type="email" name="email" id="email" placeholder="E-mail">
                <input type="password" name="pass" maxlength="8" id="passs" placeholder="Crie uma senha (8 caracteres)">
                <input type="text" name="mes" list="mes" id="mess" placeholder="Mês de aniversário">
                <datalist id="mes">
                    <option value="">Escolha o mês:</option>
                </datalist>
                <input type="text" name="dia" id="diaa" list="dia" placeholder="Dia do aniversário">
                <datalist id="dia">
                    <option value="">Escolha o dia:</option>
                </datalist>
                <input type="text" name="cpf" id="cpf" placeholder="CPF">
                <input type="text" name="tel" id="tel" placeholder="(31)99999-9999">
                <input type="text" name="cep" id="cep" placeholder="CEP">
                <a href="#" id="link_cep"><span>Não sei meu CEP</span></a>
                <input type="text" name="log" id="log" placeholder="Logradouro">
                <input type="text" name="num" placeholder="Número">
                <input type="text" name="compl" placeholder="Complemento">
                <input type="text" name="bairro" placeholder="Bairro">
                <input type="text" name="estado" list="estado" placeholder="Estados">
                <datalist id="estado">
                    <option value="">Estado:</option>
                </datalist>
                <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                <span id="termos">
                    O uso de nosso site e aplicativo é regulado por nossos <a href="#">Termos de Uso</a>.
                </span>
                <div class="submit">
                    <input type="submit" id="continue" value="CONTINUAR">
                </div>
            </form>
            <div class="submit">
                <a href="./index.php"><button id="back">VOLTAR</button></a>
            </div>
        </div>
        <script src="./js/register.js"></script>