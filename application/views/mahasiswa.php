<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>

    <section class="content" >
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Tambah Data Mahasiswa</i> </button>

        <table class="table" >
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
            </tr>
            <?php 
                $no = 1;
                foreach($mahasiswa as $mhs) : ?>
                    <tr>
                        <td> <?= $no++ ?> </td>
                        <td> <?= $mhs->nama ?> </td>
                        <td> <?= $mhs->nim ?> </td>
                        <td> <?= $mhs->tgl_lahir ?> </td>
                        <td> <?= $mhs->jurusan ?> </td>
                    </tr>
            <?php endforeach; ?>
        </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="<?= base_url().'mahasiswa/tambah_aksi' ?>  ">
            <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control"></input>
            </div>
            <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control"></input>
            </div>
            <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control"></input>
            </div>
            <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control"></input>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        </form>

      </div>
      
    </div>
  </div>
</div>

</div>