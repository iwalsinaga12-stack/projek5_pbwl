<?php

$id = $_GET['id'];
$dosen = new App\Dosen();

$row = $dosen->edit($id);
?>

<div class="mb-4">
    <h2 class="fw-bold mb-1">Edit Dosen</h2>
    <p class="text-secondary mb-0">Perbarui data dosen.</p>
</div>

<div class="row">
    <div class="col-12 col-lg-7">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <form action="dosen_proses.php" method="post">
                    <input type="hidden" name="dosen_id" value="<?php echo $row['dosen_id']; ?>">
                    <div class="mb-3">
                        <label for="dosen_nip" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="dosen_nip" name="dosen_nip" value="<?php echo htmlspecialchars($row['dosen_nip']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="dosen_nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="dosen_nama" name="dosen_nama" value="<?php echo htmlspecialchars($row['dosen_nama']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="dosen_golongan" class="form-label">Golongan</label>
                        <input type="text" class="form-control" id="dosen_golongan" name="dosen_golongan" value="<?php echo htmlspecialchars($row['dosen_golongan']); ?>">
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" name="btn_update" value="UPDATE" class="btn btn-primary">
                            <i class="bi bi-floppy me-1"></i> Update
                        </button>
                        <a href="index.php?hal=dosen" class="btn btn-secondary">
                            <i class="bi bi-x-circle me-1"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
