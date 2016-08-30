			<?php
			if(empty($_GET[act])){
			?>
			<table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th width="5%"><center>No</th>
                      <th valign="top"><center>Cover</th>
					  <th valign="top"><center>Nama Penulis</th>
                      <th valign="top"><center>Judul Jurnal</th>
                      <th valign="top"><center>Waktu Upload</th>
                      <th valign="top" width="10%"><center>View Detail</th>
                      <th valign="top" width="5%"><center>Edisi</th>
                    </tr>
                  </thead>
                  <tbody>

				<?php
					$no=1;
					$sql=mysql_query("select*from penelitian where id_pel=3 limit 30");
					while($data=mysql_fetch_array($sql)){
				?>
                    <tr>
                      <td valign="top"><center><?php echo $no;?></td>
                      <td valign="top"><img src="webadmin/modul/file/<?php echo $data[pel_cover]; ?>"></td>
                      <td valign="top"><?php echo $data[pel_penulis];?></td>
                      <td valign="top"><?php echo $data[pel_judul];?></td>
                      <td valign="top"><?php echo $data[pel_waktu];?></td>
                      <td valign="top"><center><a href="index.php?modul=journal&act=view&id=<?php echo $data[id_m];?>"><img src="webadmin/image/webcam.png"></a></td>
                      <td valign="top"><center><a href="index.php?modul=journal&act=edisi&id=<?php echo $data[id_m];?>"><img src="webadmin/image/book_next.png"></a></td>
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
						<td>Judul Journal</td>
						<td><?php echo $data[pel_judul]; ?></td>
					</tr>
					<tr>
						<td>Penulis</td>
						<td><?php echo $data[pel_penulis]; ?></td>
					</tr>
					<tr>
						<td>Lihat Daftar Edisi</td>
						<td><a class="btn btn-default" href="index.php?modul=journal&act=edisi&id=<?php echo $data[id_m];?>"> VIEW JURNAL EDISI PENUH</a></td>
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
				

				if($_GET[act]=="edisi"){ 
					$sqlx=mysql_query("select*from penelitian where id_m='$_GET[id]'");
					$datax=mysql_fetch_array($sqlx);
					?>
				
				<table class="table table-striped table-hover table-bordered">
					<tr>
							<td colspan="2">Judul Journal</td>
							<td colspan="3"><?php echo $datax[pel_judul]; ?></td>
					</tr>
					<tr>
							<td colspan="2">Ketua Penulis Journal</td>
							<td colspan="3"><?php echo $datax[pel_penulis]; ?></td>
					</tr>
					<tr>
							<td colspan="2">Tanggal Terbit</td>
							<td colspan="3"><?php echo $datax[pel_waktu]; ?> </td>
					</tr>
                 
                    <tr>
                      <th width="5%"><center>No</th>
					  <th valign="top"><center>Nama Penulis Edisi</th>
                      <th valign="top"><center>Judul Edisi Jurnal</th>
                      <th valign="top"><center>Waktu Upload</th>
                      <th valign="top" width="10%"><center>View Detail</th>
                    </tr>
                
                  <tbody>

				<?php
					$no=1;
					$sql=mysql_query("select*from jurnal_pel where id_penelitian=$_GET[id]");
					while($data=mysql_fetch_array($sql)){
				?>
                    <tr>
                      <td valign="top"><center><?php echo $no;?></td>
					  <td valign="top"><?php echo $data[pel_penulis];?></td>
                      <td valign="top"><?php echo $data[pel_judul];?></td>
                      <td valign="top"><?php echo $data[pel_waktu];?></td>
                      <td valign="top"><center><a href="index.php?modul=journal&act=edisiview&id=<?php echo $data[id_m];?>"><img src="webadmin/image/webcam.png"></a></td>
					</tr>
				<?php
				$no++;
					}
				?>
                  </tbody>
                </table>
				<?php
				}
				

				if($_GET[act]=="edisiview"){
					$sql=mysql_query("select*from jurnal_pel where id_m='$_GET[id]'");
					$data=mysql_fetch_array($sql);
				?>

				<table class="table table-striped table-hover table-bordered">
                 <tbody>
					<tr>
						<td>Judul Edisi Jurnal</td>
						<td><?php echo $data[pel_judul]; ?></td>
					</tr>
					<tr>
						<td>Penulis Edisi</td>
						<td><?php echo $data[pel_penulis]; ?></td>
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