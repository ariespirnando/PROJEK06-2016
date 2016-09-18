<a class="brand" href="<?php echo base_url()?>index.php/nilaiMatrik/tambah"> Nilai Matrik</a>

 <div class="nav-collapse">
        <ul class="nav">
          <li><a href="<?php echo base_url()?>index.php/nilaiMatrik/detail" class="medium-box"><i class="icon-list icon-white">
          </i> Detail Nilai</a></li>
          <li><a onClick="return confirm('Anda yakin..???');" href="<?php echo base_url()?>index.php/nilaiMatrik/resetrengking" class="medium-box"><i class="icon-remove-circle icon-white">
          </i> Reset Nilai</a></li>
        </ul>
    </div>

	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

    <section>
    <table width="100%" class="table table-bordered">
      <thead>
        <tr bgcolor='#CCCCCC'>
        <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
        <th colspan="<?php echo $KriteriaJumlah->num_rows(); ?>" class="text-center">Kriteria</th>
        </tr>
        <tr>
        <?php
        foreach ($KriteriaJumlah->result() as $kj) {
          echo "<th bgcolor='#CCCCCC'>$kj->namaKriteria<br/>($kj->tipeKriteria)</th>";
          }
          ?>
        </tr>
        </thead>
        <tbody>
        <?php 

        foreach ($Alternativ->result() as $al) {
          echo "<tr>
          <th>$al->namaKosan</th>";

           $ax= $al->idAlternativ;

           $rownilai = $this->modRangking->rownilaimatrik($ax);

           foreach ($rownilai->result() as $rn) { 
              echo "<td>$rn->nilaiRangking</td>";
           }
           echo "</tr>";
        }

        ?>
        </tbody>
      </table>

    
    </section>
</div>


