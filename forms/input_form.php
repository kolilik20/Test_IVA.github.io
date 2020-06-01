<fieldset>
    <div class="form-group">
        <label for="nama">Nama *</label>
          <input type="text" name="nama" value="<?php echo htmlspecialchars($edit ? $pasien['nama'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Nama" class="form-control" required="required" id = "nama">
    </div> 

    <div class="form-group">
        <label for="umur">Umur</label>
        <input name="umur" value="<?php echo htmlspecialchars($edit ? $pasien['umur'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Umur" class="form-control"  type="text" id="umur">
    </div>

    <div class="form-group">
        <label>Jenis Kelamin *</label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="laki" <?php echo ($edit &&$pasien['gender'] =='laki') ? "checked": "" ; ?> required="required" id="laki"/> Laki-Laki
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="perempuan" <?php echo ($edit && $pasien['gender'] =='perempuan')? "checked": "" ; ?> required="required" id="perempuan"/> Perempuan
        </label>
    </div>

    
    <div class="form-group">
        <label>Kelurahan</label>
        <?php $opt_arr = array("Jerakah", "Karanganyar", "Mangkang Kulon", "Mangunharjo", "Randugarut", "Tugurejo"); ?>
        <select name="kelurahan" class="form-control selectpicker" required>
            <option value=" ">Pilih Kelurahan</option>
            <?php
            foreach ($opt_arr as $opt) {
                if ($edit && $opt == $pasien['kelurahan']) {
                    $sel = 'selected';
                } else {
                    $sel = '';
                }
                echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label>Periksa IVA TEST *</label>
        <label class="radio-inline">
            <input type="radio" name="periksa" value="sudah" <?php echo ($edit &&$pasien['periksa'] =='sudah') ? "checked": "" ; ?> required="required" id="sdh"/> Sudah
        </label>
        <label class="radio-inline">
            <input type="radio" name="periksa" value="belum" <?php echo ($edit && $pasien['periksa'] =='belum')? "checked": "" ; ?> required="required" id="blm"/> Belum
        </label>
    </div>

    <div class="form-group">
        <label>PAPSMEAR *</label>
        <label class="radio-inline">
            <input type="radio" name="papsmir" value="belum" <?php echo ($edit &&$pasien['papsmir'] =='belum') ? "checked": "" ; ?> required="required" id="belum"/> Belum
        </label>
        <label class="radio-inline">
            <input type="radio" name="papsmir" value="sudah" <?php echo ($edit && $pasien['papsmir'] =='sudah')? "checked": "" ; ?> required="required" id="sudah"/> Sudah
        </label>
    </div>


    <div class="form-group">
        <label>Hasil Tes *</label>
        <label class="radio-inline">
            <input type="radio" name="hasil" value="negatif" <?php echo ($edit &&$pasien['hasil'] =='negatif') ? "checked": "" ; ?> required="required" id="negatif"/> Negatif
        </label>
        <label class="radio-inline">
            <input type="radio" name="hasil" value="positif" <?php echo ($edit && $pasien['hasil'] =='positif')? "checked": "" ; ?> required="required" id="positif"/> Positif
        </label>

        <label class="radio-inline">
            <input type="radio" name="hasil" value="-" <?php echo ($edit && $pasien['hasil'] =='-')? "checked": "" ; ?> required="required" id="-"/> -
        </label>
    </div>
    
    <div class="form-group">
        <label for="keterangan">Keterangan *</label>
          <input type="text" name="keterangan" value="<?php echo htmlspecialchars($edit ? $pasien['keterangan'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="keterangan" class="form-control" required="required" id = "keterangan">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>
