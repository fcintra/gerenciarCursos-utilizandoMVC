<?php include __DIR__ . '/../inicio-html.php'; ?>
<style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>

<div class="container">
    <div class="row">
        <div class="card-login">
            <div class="card">
                <div class="card-header">
                    Acesse sua conta
                </div>
                <div class="card-body">
                    <form action="/realiza-login" method="post">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>
                        <button class="btn btn-primary">
                            Entrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include __DIR__ . '/../fim-html.php'; ?>