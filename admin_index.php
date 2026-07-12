<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container">

    <h2>Admin Artikel</h2>

    <div class="top-action">

        <a href="<?= base_url('index.php/admin/artikel/add'); ?>" class="btn-add">
            + Tambah Artikel
        </a>

        <a href="<?= base_url('index.php/artikel'); ?>" class="btn-back">
            ← Kembali
        </a>

        <a href="<?= base_url('user/logout'); ?>" class="btn-logout">
            Logout
        </a>

    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php if (!empty($artikel)): ?>

            <?php $no = 1; ?>

            <?php foreach ($artikel as $row): ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td><?= esc($row['judul']); ?></td>

                    <td>
                        <?= $row['status'] ? 'Aktif' : 'Draft'; ?>
                    </td>

                    <td>

                        <a href="<?= base_url('index.php/admin/artikel/edit/'.$row['id']); ?>" class="btn-edit">
                            Ubah
                        </a>

                        <a href="<?= base_url('index.php/admin/artikel/delete/'.$row['id']); ?>"
                           class="btn-delete"
                           onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                            Hapus
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>
                <td colspan="4" style="text-align:center;">
                    Belum ada artikel.
                </td>
            </tr>

        <?php endif; ?>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>