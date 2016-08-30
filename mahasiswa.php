			<?php
			if(empty($_GET[act])){
			?>
			<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th>Nama Mahasiswa</th>
                      <th>Judul Penelitian</th>
                      <th>Waktu Upload</th>
                      <th width="10%">View Detail</th>
                    </tr>
                  </thead>
                  <tbody>

				<?php
					$no=1;
					$sql=mysql_query("select*from penelitian where id_pel=2 limit 30");
					while($data=mysql_fetch_array($sql)){
				?>
                    <tr>
                      <td><center><?php echo $no;?></td>
                      <td><?php echo $data[pel_penulis];?></td>
                      <td><?php echo $data[pel_judul];?></td>
                      <td><?php echo $data[pel_waktu];?></td>
                      <td><center><a href="index.php?modul=penelitianmahasiswa&act=view&id=<?php echo $data[id_m];?>"><img src="webadmin/image/webcam.png"></a></td>
					</tr>
				<?php
				$no++;
					}
				?>
                  </tbody>
                </table>
				<?php
				}


				if($_GET[act]=="view"){
					$sql=mysql_query("select*from penelitian where id_m=$_GET[id]");
					$data=mysql_fetch_array($sql);
				?>

				<table class="table table-striped table-hover table-bordered">
                 <tbody>
					<tr>
						<td>Judul Penelitian</td>
						<td><?php echo $data[pel_judul]; ?></td>
					</tr>
					<tr>
						<td>Penulis</td>
						<td><?php echo $data[pel_judul]; ?></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><b>ABSTRAK</b><?php echo $data[pel_abstrak]; ?></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><object data="webadmin/modul/files/<?php echo $data[file]; ?>" type="application/pdf" width="80%" height="600"></object></td>
					</tr>
					
                  </tbody>
                </table>
				<?php
				}
				?>