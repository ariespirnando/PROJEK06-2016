<a class="brand" href="<?php echo base_url()?>index.php/alternativ"> Alternativ</a>

  <div class="nav-collapse">
        <ul class="nav">
          <li><a onClick="return confirm('Anda yakin..???');" href="<?php echo base_url()?>index.php/alternativ/reset" 
          class="medium-box"><i class="icon-remove-circle icon-white">
          </i> Reset Nilai Alternativ</a></li>
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
        <th width="50" align="center">Alternativ</th>
        <th width="20" align="center">Operasi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
    foreach ($Alternativ->result() as $A) {
      echo "<tr>
      <td>$no</td>
      <td>$A->namaKosan</td>";
    ?>
      <td><div class="btn-group">
          <a onClick="return confirm('Anda yakin..???');" class="btn btn-small" 
          href="<?php echo base_url()?>index.php/alternativ/hapus/<?php echo $A->idAlternativ; ?>"><i class="icon-trash"></i></a>
      </div></td>
      </tr>
    <?php $no++;
      } ?>

    </tbody>
    </table>
    </div>
    </section>

    

  </div>