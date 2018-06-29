<?php $tipoleypatentes = $this->class04oficina->getTodasLeyPatentes(); ?>



<form method="POST" action="?c=class04oficina&m=editarLeyPatentes">
 <div class="form-group">
            <label for="id">Código Trámite</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $this->class04oficina->getAtributo('PU04IDTRA');?>" readonly> 

            
            <?php  $idtramite = $this->class04oficina->getAtributo('PU04IDTRA'); ?>
          </div>
          <?php foreach( $tipoleypatentes as $tipoleypatente): ?>
          <?php $isCheck = $this->class04oficina->tieneLeyPatentes($idtramite, $tipoleypatente['pu45idley']);?>
          <div class="checkbox">
            <label>
            <input type="checkbox"  name="idtipoleypatentes<?php echo $tipoleypatente['pu45idley']; ?>"
             <?php if($isCheck['total27']) {echo "checked";} ?>
            /> <?php echo $tipoleypatente['pu45descripcion'] ;?>
            </label>
          </div>
          <?php endforeach; ?>
          <button type="submit" class="btn btn-success">Guardar</button>
          <br>
</form>