<section class="form_wrap">

<section class="cantact_info">
    <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>Formulário Filiado ou Associado</h2>
    </section>
</section>

<form action="process_form.php" method="POST" class="form_contact">
    <h2>Enviar uma mensagem</h2>

    <div class="row" style="width: 100%;margin:0;">
        <div class="column" style="padding: 0; padding-right:10px">
            <label for="dewey">Filiado</label>
            <input type="radio" id="dewey" name="tipo" value="Filiado" />
        </div>

        <div class="column" style="padding: 0; padding-left:10px">
            <label for="louie">Associado</label>
            <input type="radio" id="louie" name="tipo" value="Associado" />
        </div>
    </div>   

    <div class="user_info">
        <label for="name">Nome *</label>
        <input type="text" id="name" name="name" required>

        <div class="row" style="width: 100%;margin:0;">
            <div class="column" style="padding: 0; padding-right:10px">
                <label for="cpf">CPF</label>
                <input type="number" id="cpf" name="cpf">
            </div>

            <div class="column" style="padding: 0; padding-left:10px">
                <label for="rg">RG</label>
                <input type="number" id="rg" name="rg">
            </div>
        </div>   

        <label for="address">Endereço</label>
        <input type="text" id="address" name="address">

        <label for="company">Empresa</label>
        <input type="text" id="company" name="company">

        <label for="cnpj">CNPJ</label>
        <input type="number" id="cnpj" name="cnpj">

        <label for="phone">Telefone / Celular</label>
        <input type="text" id="phone" name="phone">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="voter_id">Título de Eleitor</label>
        <input type="number" id="voter_id" name="voter_id">

        <input type="submit" value="Enviar Mensagem" id="btnSend">
    </div>
</form>

</section>