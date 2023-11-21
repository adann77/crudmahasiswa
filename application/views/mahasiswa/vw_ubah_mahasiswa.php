<div class="container-fluid">
    <h1 class=" h3 mb-4-text-gray-880"> <?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Mahasiswa


                </div>

                <div class="card-body">
                    <form action="<?= base_url('Mahasiswa/update'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?=$mahasiswa['nama']; ?>"  class="form-control" id="nama" placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim"value="<?=$mahasiswa['nim']; ?>"  class="form-control" id="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin"> Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="laki-laki" <?php if ($mahasiswa['jenis_kelamin']== "laki-laki"){
                                    echo "selected";
                                } ?>>Laki-Laki </option>
                                <option value="perempuan" <?php if ($mahasiswa['jenis_kelamin']== "perempuan"){
                                    echo "selected";

                                } ?>>Perempuan </option>

                            


                            <div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="<?=$mahasiswa['email']; ?>"  class="form-control" id="email" placeholder="Email">
                                    

                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="prodi">prodi</label>
                                       <select name="prodi" id="menu_id" class="form-control">
                                       <?php foreach ($prodi as $p) : ?>
                                        <option value = "<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']){
                                            echo "selected";

                                        }?>><?= $p['nama']; ?></option>

                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" value="<?=$mahasiswa['asal_sekolah']; ?>"  class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Hp</label>
                                        <input type="text" name="no_hp" value="<?=$mahasiswa['no_hp']; ?>" class="form-control" id="no_hp" placeholder="No HP">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" value="<?=$mahasiswa['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                                    </div>
                                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup<a>
                                            <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>