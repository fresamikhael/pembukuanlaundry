<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>
    </section>

    <?php foreach($user as $cs) : ?>
    <form method="POST" action="<?php echo base_url('admin/data_customer/update_customer_aksi') ?>">

        <div class="form-group">
            <label>Nama</label>
            <input type="hidden" name="id_customer" value="<?php echo $cs->id_user ?>">
            <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
            <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
            <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>No. Telp</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
            <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Username</label>
            <select class="form-control" name="gender">
                <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?> </option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <?php echo form_error('gender','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" name="no_telepon" class="form-control" value="<?php echo $cs->no_telepon ?>">
            <?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        <button type="reset" class="btn btn-sm btn-danger">Reset</button>

    </form>
<?php endforeach; ?>

</div>
