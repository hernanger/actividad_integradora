<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <h2 class="text-center">Recuperar Contraseña</h2>
            <!--mensaje de error --->
            <?php if (session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                    <?=(session()->getFlashdata('msg'))?>
                </div>
            <?php endif;?>
            <!--Inicio formulario Recuperar Contraseña --->
            <form method="post" action="<?php echo base_url('/enviar-recuperacion')?>">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico">
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary">Enviar enlace de recuperación</button>
            </form>
        </div>
    </div>
</div>