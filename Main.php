<form action="Proses.php" method="POST">
  <label for="nama_lengkap">Nama Lengkap:</label>
  <input type="text" name="nama_lengkap" id="nama_lengkap"><br>

  <label for="tempat_lahir">Tempat Lahir:</label>
  <input type="text" name="tempat_lahir" id="tempat_lahir"><br>

  <label for="tanggal_lahir">Tanggal Lahir:</label>
  <select name="tanggal" id="tanggal_lahir">
    <?php
    for ($i = 1; $i <= 31; $i++) {
      echo "<option value='$i'>$i</option>";
    }
    ?>
  </select>
  <select name="bulan" id="bulan_lahir">
    <?php
    $bulan = array(
      "Januari", "Februari", "Maret", "April", "Mei", "Juni",
      "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    );
    for ($i = 0; $i < count($bulan); $i++) {
      echo "<option value='" . ($i + 1) . "'>$bulan[$i]</option>";
    }
    ?>
  </select>
  <select name="tahun" id="tahun_lahir">
    <?php
    for ($i = 1970; $i <= 2023; $i++) {
      echo "<option value='$i'>$i</option>";
    }
    ?>
  </select>
  <br>

  <label for="alamat_rumah">Alamat Rumah:</label>
  <textarea name="alamat_rumah" id="alamat_rumah"></textarea><br>

  <label>Jenis Kelamin:</label>
  <input type="radio" name="jenis_kelamin" value="pria" id="jenis_kelamin_pria">
  <label for="jenis_kelamin_pria">Pria</label>
  <input type="radio" name="jenis_kelamin" value="wanita" id="jenis_kelamin_wanita">
  <label for="jenis_kelamin_wanita">Wanita</label><br>

  <label for="asal_sekolah">Asal Sekolah:</label>
  <input type="text" name="asal_sekolah" id="asal_sekolah"><br>

  <label for="nilai_uan">Nilai UAN:</label>
  <input type="text" name="nilai_uan" id="nilai_uan"><br>

  <input type="submit" name="submit" value="Submit">
  <input type="reset" value="Reset">
</form>
