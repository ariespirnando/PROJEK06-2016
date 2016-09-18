<a class="brand" href="<?php echo base_url(); ?>index.php/nilai"> Nilai</a>

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
    <div class="table-responsive">
    <table class="table table-condensed table-bordered">
    <thead>
      <tr bgcolor='#CCCCCC'>
        <th width="20"align="center">No</th>
        <th width="50" align="center">Keterangan</th>
        <th width="20" align="center">Nilai</th>
        <th width="20" align="center">Operasi</th>

      </tr>
      <?php
        $no=1;
        foreach($nilai->result() as $r){
          echo "<tr>
          <td>$no</td>
          <td>$r->ketNilai</td>
          <td>$r->jumlah</td>";
      ?>
      	  <td>
      	  <div class="btn-group">
          <a class="btn btn-small" href="<?php echo base_url()?>index.php/nilai/edit/<?php echo $r->idNilai; ?>">
              <i class="icon-pencil"></i></a>
          <a class="btn btn-small" onClick="return confirm('Anda yakin..???');"
          href="<?php echo base_url()?>index.php/nilai/hapus/<?php echo $r->idNilai; ?>"><i class="icon-trash"></i></a>
          </div>
      	  </td>
      </tr>
      <?php
      	$no++; }
      ?>

    </thead>
    </table>
  </div>
</section>
</div>