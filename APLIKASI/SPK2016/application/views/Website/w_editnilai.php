<a class="brand" href="<?php echo base_url(); ?>index.php/nilai" > Nilai</a>

	<div class="nav-collapse">
      	<ul class="nav">
        	<li><a href="<?php echo base_url(); ?>index.php/nilai/tambah" class="medium-box"><i class="icon-plus-sign icon-white">
        	</i> Tambah Nilai</a></li>
          <li><a onClick="return confirm('Anda yakin..???');" href="<?php echo base_url(); ?>index.php/nilai/reset" class="medium-box"><i class="icon-remove-circle icon-white">
          </i> Reset Nilai</a></li>
      	</ul>
    </div>

	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <section>


  <form action="<?php echo base_url(); ?>index.php/nilai/edit" method="post" class="form-horizontal">

      
      <input type="hidden" name ="idn" value ="<?php echo $nilai['idNilai']; ?>">

      <div class="control-group">
      <label class="control-label" >Keterangan Nilai</label>
      <div class="controls">
          <input type="text" class="span6" name="Keterangan" placeholder="Edit Keterangan...." value ="<?php echo $nilai['ketNilai']; ?>">
      </div>
      </div>

      <div class="control-group">
      <label class="control-label" >Nilai</label>
      <div class="controls">
          <input type="text" class="span6" name="nilai" placeholder="Edit Nilai...." onkeyup="validAngka(this)" value = "<?php echo $nilai['jumlah']; ?>">
      </div>
      </div>

      <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn btn-primary" name="edit">Edit</button>
        <button type="reset" class="btn">Hapus</button>
      </div>
      </div>


  </form>


  </section>
</div>