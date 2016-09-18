<a class="brand" href="<?php echo base_url()?>index.php/kriteria"> Kriteria</a>

	<div class="nav-collapse">
      	<ul class="nav">
        	<li><a href="<?php echo base_url()?>index.php/kriteria/tambahkriteria" class="medium-box"><i class="icon-plus-sign icon-white">
        	</i> Tambah Kriteria</a></li>
          <li><a onClick="return confirm('Anda yakin..???');" href="<?php echo base_url()?>index.php/kriteria/resetkriteria" class="medium-box"><i class="icon-remove-circle icon-white">
          </i> Reset Kriteria</a></li>
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
        <th width="50" align="center">Nama Kriteria</th>
        <th width="20" align="center">Jenis</th>
        <th width="20" align="center">Bobot</th>
        <th width="20" align="center">Operasi</th>
      </tr>
      <?php
        $no=1;
        foreach($Kriteria->result() as $r){
          echo "<tr>
          <td>$no</td>
          <td>$r->namaKriteria</td>
          <td>$r->tipeKriteria</td>
          <td>$r->bobot</td>";
      ?>
      <td>
          <div class="btn-group">
          <a class="btn btn-small" href="<?php echo base_url()?>index.php/kriteria/edit/<?php echo $r->idKriteria; ?>">
              <i class="icon-pencil"></i></a>
          <a onClick="return confirm('Anda yakin..???');" class="btn btn-small" 
          href="<?php echo base_url()?>index.php/kriteria/hapus/<?php echo $r->idKriteria; ?>"><i class="icon-trash"></i></a>
          </div>
          </td>
      </tr>
      <?php
        $no++; }
      ?>

     </thead>
     </table>

</div>
</div>