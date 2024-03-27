<?php $this->layout("components/theme") ?>

<div class="container d-flex align-items-center flex-column ">
    <h2 class="text-center">Testar Email</h2>
    <form class="row mt-3" style="width: 70%;" method="POST" action="<?= $router->route('web.send') ?>">
        <div class="col-12 col-md-7 mt-3">
            <label for="host">Host:</label>
            <input type="text" id="host" name="host" class="form-control">
        </div>
        <div class="col-12 col-md-3 mt-3">
            <label for="security">Tipo de Segurança:</label>
            <select class="form-select" id="security" name="security">
                <option value="none">Nenhuma</option>
                <option value="tls">TLS</option>
                <option value="ssl">SSL</option>
            </select>
        </div>
        <div class="col-12 col-md-2 mt-3">
            <label for="port">Porta:</label>
            <input type="text" id="port" name="port" class="form-control" value="587">
        </div>
        <div class="col-12 col-md-6 mt-3">
            <label for="user">Usuário</label>
            <input type="email" id="user" name="user" class="form-control">
        </div>
        <div class="col-12 col-md-6 mt-3">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="col-12 col-md-6 mt-3">
            <label for="fromName">Nome Destinatário:</label>
            <input type="text" id="fromName" name="fromName" class="form-control">
        </div>
        <div class="col-12 col-md-6 mt-3">
            <label for="mailFrom">E-mail Destinatário:</label>
            <input type="email" id="mailFrom" name="mailFrom" class="form-control">
        </div>

        <div class="col-12 mt-3">
            <label for="mailFrom">Mensagem:</label>
            <textarea name="message" id="message" class="form-control" rows="5">Envio para teste de servidor SMTP</textarea>
        </div>

        <div class="text-center mt-3">
            <button class="btn btn-dark" type="submit" style="width:80px">Enviar</button>
        </div>
        
    </form>
</div>