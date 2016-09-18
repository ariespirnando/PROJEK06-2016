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
	<section>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/Grafik/js/jquery.min.js"></script>
    <style type="text/css">
${demo.css}
    </style>
    <script type="text/javascript">
$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Rangking Akhir Alternativ'
        },
        subtitle: {
            text: 'Sistem Pendukung Keputusan Pemilihan Tempat Tinggal Mahasiswa (SEGILIMA)'
        },
        xAxis: {
            categories: ['Alternatif']
        },
        yAxis: {
          title: {
            text: 'Jumlah Nilai'
          }
        },
        legend: {
            enabled: true
        },

        series:            
              [
              <?php
              foreach($Alternativ->result() as $a){
                    ?>
                    {
                        name: '<?php echo $a->namaKosan; ?>',
                        data: [<?php echo $a->hasilAlternativ; ?>]
                    },
                    <?php } ?>
              ]
        }); 
    });
</script>
<script src="<?php echo base_url(); ?>assets/Grafik/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/Grafik/js/data.js"></script>
<script src="<?php echo base_url(); ?>assets/Grafik/js/themes/grid-light.js"></script>
<script src="<?php echo base_url(); ?>assets/Grafik/js/drilldown.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>	
	</section>
</div>