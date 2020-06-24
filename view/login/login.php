<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s6 offset-s3">
                <h2 class="center"><i class="medium material-icons">account_circle</i>Iniciar Sesion</h2>
                <div class="row">
                    <form class="col s12" action="?c=<?php echo base64_encode('')?>" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix form-icon">mail</i>
                                <input type="email" name="email" id="email" class="validacion">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix form-icon">vpn_key</i>
                                <input type="password" name="clave" id="clave" class="validacion">
                                <label for="clave">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn-large"><i class="material-icons right">send</i>Entar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>