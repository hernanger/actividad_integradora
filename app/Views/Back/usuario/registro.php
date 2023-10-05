<!-- registro-->
<br>
<?php $validation = \config\services::validation();?>
<form class="row g-3 mx-auto" style="width: 90%;"  method="post" action="<?php echo base_url('/enviar-form')?>">
  <?=csrf_field();?>
  <?=csrf_field();?>
  <?php if (!empty (session()->getFlashdata('fail'))):?>
  <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif?>
      <?php if (!empty (session()->getFlashdata('success'))):?>
       <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
       <?php endif?>
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nombre</label>
    <input name='nombre' type="text" class="form-control" id="validationDefault01" value="" required>
    <?php if ($validation->getError('nombre')){?>
      <div class="alert alert-danger mt-2">
        <?=$error=$validation->getError('nombre');?>
      </div>
    <?php } ?>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Apellido</label>
    <input name='apellido'type="text" class="form-control" id="validationDefault02" value="" required>
    <?php if ($validation->getError('apellido')){?>
      <div class="alert alert-danger mt-2">
        <?=$error=$validation->getError('apellido');?>
      </div>
    <?php } ?>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Nombre de usuario</label>
    <input name='usuario' type="text" class="form-control" id="validationDefault02" value="" required>
    <?php if ($validation->getError('usuario')){?>
      <div class="alert alert-danger mt-2">
        <?=$error=$validation->getError('usuario');?>
      </div>
    <?php } ?>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Email</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input name='email' type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
      <?php if ($validation->getError('email')){?>
      <div class="alert alert-danger mt-2">
        <?=$error=$validation->getError('email');?>
      </div>
    <?php } ?>
    </div>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Contraseña</label>
    <input name='pass' type="password" class="form-control" id="inputPassword4">
    <?php if ($validation->getError('pass')){?>
      <div class="alert alert-danger mt-2">
        <?=$error=$validation->getError('pass');?>
      </div>
    <?php } ?>
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Ver contraseña</label>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Aceptar los términos y condiciones
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-outline-primary" type="submit">Guardar</button>
    <button class="btn btn-outline-danger" type="reset" onclick="location.href='<?php echo base_url('/');?>'">Cancelar</button>
  </div>
</form>