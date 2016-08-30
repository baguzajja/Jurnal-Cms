
<?php

$modul = "user";
$nama = "User";

	switch($_GET[act])
	{
		default:
		echo "<h3>Management User</h3>";
		echo "<form action=?modul=$modul&act=tambah method=post id=tombol>
				<input type=submit value='Add User' class='btn btn-info'>
			</form>";
		echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
				<tr>
					<th>NO</th>
					<th>Name</th>
					<th>Username</th>
					<th>Akses</th>
					<th>EDIT</th>
					<th>DEL</th>
				</tr>";
		$sql = mysql_query("SELECT*from user");
		$no = 1;
		while ($data = mysql_fetch_array($sql))
		{
			echo "<tr id=$bg>
				<td width=5%; align=center>$no</td>
				<td>$data[nama]</td>
				<td>$data[username]</td>
				<td>";
					if($data[akses]==0){
						echo"Administrator";
					}else if($data[akses]==1){
						echo"Dosen";
					}else{
						echo"Mahasiswa";
					}
				echo"</td>
				<td align=center width=4%;><a href=?modul=$modul&act=edit&id=$data[username]><img src=image/page_edit.png border=0></a></td>
				<td align=center width=4%><a href=./modul/xuser.php?modul=$modul&act=delete&id=$data[username] onClick=\"return confirm('Delete Record $data[nm_nagari]??')\"><img src=image/del.png border=0></a></td>
				</tr>";
			$no++;
		} 
		echo "</table>";
		break;

		case "tambah":
			
			echo "<form action=./modul/xuser.php?modul=$modul&act=simpan method=post onSubmit=\"return validuser(this)\">";
			echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
				<tr><th colspan=2>ENTRY NEW USER</th>
				<tr><td>Access Account</td><td><select name=id_akses>";
				
					echo "<option value=0>Administrator</option>";
					echo "<option value=1>Dosen</option>";
					echo "<option value=2>Mahaiswa</option>";
				echo "</select></td></tr>
				<tr><td>Name Account</td><td><input type=text name=nm_user size=50></td></tr>
				<tr><td>User Name</td><td><input type=text name=un_user></td></tr>
				<tr><td>Password</td><td><input type=text name=ps_user></td></tr>
				<tr><td align=right colspan=2 id=tombol><input type=submit class='btn btn-info' value=Save onClick=\"return confirm('Saving Record..?')\">
                                <input type=button value=Cancel class='btn btn-danger' onClick=\"self.history.back()\">
			      </form>
				</table>";
		break;

		case "edit":
			
			$sql = mysql_query("SELECT *FROM user WHERE username = '$_GET[id]'");
			while ($data = mysql_fetch_array($sql))
			{
				echo "<form action=./modul/xuser.php?modul=$modul&act=update method=post onSubmit=\"return validedituser(this)\">";
				echo "<input type=hidden name=id_user value=\"$data[username]\">";
				echo "<table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
				<tr><th colspan=2>UPDATE USER ACCOUNT</th>
				<tr><td>Access Account</td><td><select name=id_akses>";
					echo "<option value=0>Administrator</option>";
					echo "<option value=1>Dosen</option>";
					echo "<option value=2>Mahaiswa</option>";
					echo "</select></td></tr>
				<tr><td>Name Account</td><td><input type=text name=nm_user size=50 value=\"$data[nama]\"></td></tr>
				<tr><td>User Name</td><td><input type=text name=un_user value=\"$data[username]\"></td></tr>
				<tr><td>Password</td><td><input type=text name=ps_user> (* Kosongkan Password Jika Tidak Dirubah</td></tr>
				<tr><td align=right colspan=2 id=tombol><input type=submit class='btn btn-info' value=Update onClick=\"return confirm('Update Record..?')\">
                                <input type=button value=Cancel class='btn btn-danger' onClick=\"self.history.back()\">
			      </form>
				</table>";
				
			}
		break;

		
		

		
	}

	

?>
