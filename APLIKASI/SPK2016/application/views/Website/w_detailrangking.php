<a class="brand" href="<?php echo base_url()?>index.php/rangking/index"> Ranking</a>

    <div class="nav-collapse">
        <ul class="nav">
          <li><a href="<?php echo base_url()?>index.php/rangking/detail" class="medium-box"><i class="icon-list icon-white">
          </i> Detail Rangking</a></li>
        </ul>
    </div>

	</div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->

    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#nilai" aria-controls="milai" role="tab" data-toggle="tab">Nilai Matrik</a></li>
      <li role="presentation"><a href="#normalisasi" aria-controls="normalisasi" role="tab" data-toggle="tab">Normalisasi</a></li>
      <li role="presentation"><a href="#hasil" aria-controls="hasil" role="tab" data-toggle="tab">Hasil Akhir</a></li>
    </ul>

    <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="nilai">
        <br/>
        <h4>Nilai Matrik</h4>
        <table class="table table-bordered">
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
    </div>

    <div role="tabpanel" class="tab-pane" id="normalisasi">
    <br/>
      <h4>Normalisasi</h4>
      <table class="table table-bordered">
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
              echo "<td>$rn->nilaiNormalisasi</td>";
           }
           echo "</tr>";
        }
        ?>
        <tr bgcolor="#CCCCCC">
        <td><b>Bobot Kriteria</b></td>
        <?php
        foreach ($KriteriaJumlah->result() as $kj) {
          echo "<td>$kj->bobot</td>";
          }
        ?>
        </tr>
        </tbody>
      </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="hasil">
    <br/>
      <h4>Hasil Akhir</h4>
      <table class="table table-bordered">
      <thead>
        <tr bgcolor='#CCCCCC'>
        <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
        <th colspan="<?php echo $KriteriaJumlah->num_rows(); ?>" class="text-center">Kriteria</th>
        <th rowspan="2" style="vertical-align: middle" class="text-center" bgcolor="#CCCCCC">Hasil</th>
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
              echo "<td>$rn->bobotNormalisasi</td>";
           }
           echo "<td bgcolor='#CCCCCC'>$al->hasilAlternativ</td>
           </tr>";

        }
        ?>
        
        </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>


