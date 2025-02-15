<div class="container">
    <h3 class="mb-3">Edit Buku : <?= $data['buku']['judul'] ?></h3>
    <form action="<?= BASE_URL; ?>/buku/updatebuku" method="post">
        <div calss="class-body">
            <input type="hidden" name="id" value="<?= $data['buku']['id']; ?>">
            <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['buku']['judul'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data['buku']['penulis'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="text" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $data['buku']['tgl_selesai'] ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>