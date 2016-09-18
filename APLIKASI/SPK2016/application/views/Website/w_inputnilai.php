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


  <form action="<?php echo base_url(); ?>index.php/nilai/tambah" method="post" class="form-horizontal">

      <div class="control-group">
      <label class="control-label" >Keterangan Nilai</label>
      <div class="controls">
          <input type="text" class="span6" name="Keterangan" placeholder="Keterangan....">
      </div>
      </div>

      <div class="control-group">
      <label class="control-label" >Nilai</label>
      <div class="controls">
          <input type="text" class="span6" name="nilai" placeholder="Nilai...." onkeyup="validAngka(this)">
      </div>
      </div>

      <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        <button type="reset" class="btn">Hapus</button>
      </div>
      </div>


  </form>


  </section>
</div>