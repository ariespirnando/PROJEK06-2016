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

  <form action="<?php echo base_url(); ?>index.php/nilaiMatrik/tambah" method="post" class="form-horizontal">

  		<div class="control-group">
			<label class="control-label" >Memilih Alternativ</label>
			<div class="controls">
			  <select name="Alternativ" class="chzn-select" style="width:180px;" tabindex="2">
			  	<?php
                foreach ($alternativ->result() as $a)
                {
                    echo "<option value='$a->idAlternativ'>$a->namaKosan</option>";
                }
                ?>
            </select>
			</div>
		  </div>
		<div class="control-group">
		   <label class="control-label" >Input Nilai Kriteria</label>
			<div class="controls">

				<table>
					<thead>
						<tr>
							<th width="170" align="left"></th>
							<th width="50"></th>
						</tr>
					</thead>
					<tbody>
					<?php
                	foreach ($Kriteria->result() as $k)
                	{
                		echo "<tr>
                		<td>$k->namaKriteria ($k->tipeKriteria)</td><input type='hidden' name='kriteria[]' value = '$k->idKriteria' />
                		<td>
                      <select name='nilai[]' class='chzn-select' style='width:180px;'' tabindex='2'>";
                        foreach ($nilai->result() as $n){
                        echo "<option value='$n->jumlah'>$n->ketNilai</option>";
                        }
                    echo "</select></td>";
                  }
                	?>
                	</tbody>
                </table>
            </div>
		</div>

		<div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
			  <button type="reset" class="btn">Hapus</button>
			</div>
		</div>
  </form>

</div>