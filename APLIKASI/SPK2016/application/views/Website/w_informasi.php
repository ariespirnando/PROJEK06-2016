<a class="brand" href="<?php echo base_url();?>index.php/informasi"> Informasi</a>


	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  <section>
    <div class="table-responsive">
    <table class="table table-condensed table-bordered">
    <thead>
      <tr bgcolor='#CCCCCC'>
        <th width="40"align="center">No</th>
        <th width="150" align="center">Foto</th>
        <th width="240" align="center">Merek Handphone</th>
        <th width="190" align="center">Harga</th>
        <th width="900" align="center">Informasi</th> 
        <th width="180" align="center">Operasi</th> 
      </tr>
    </thead>
    <tbody>
      <?php
        $no=1+$this->uri->segment(3);
        foreach($info->result() as $r){
          echo "
          <tr>
          <td>$no</td>";
      ?>
        <td><img class="image" width="300" height="700"src="<?php 
            echo base_url(); ?>assets/img/Kosan/<?php echo $r->Gambar?>">
        </td>
      <?php
        echo"
          <td>$r->namaKosan</td>
          <td>Rp. $r->Harga</td>
          <td>$r->Informasi</td>";
      ?>
          <td>
          <div class="btn-group">
          <a class="btn btn-small" href="<?php echo base_url()?>index.php/informasi/input/<?php echo $r->idKosan; ?>"> Alternativ |
              <i class="icon-plus"></i></a>
          </div>
        </td>
        </tr>
      <?php
        $no++;
        }
      ?>

    </tbody>
    </table>
    </div>
  </section>
  <?php echo $paging; ?>
</div>