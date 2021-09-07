<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        Rekap Barang Masuk
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <br>
            <!-- filter -->
            <form action="<?php echo site_url('Penjualan/RekapBarang'); ?>" method="post">
            <table>
                <tr>
                    <td>Tanggal Awal
                        <input type="date" name="tglawal" class="form form-control" >
                    </td>
                    <td>Tanggal Akhir
                        <input type="date" name="tglakhir" class="form form-control" >
                    </td>
                    <td><br>
                        <input type="submit" name="filter" value="Filter" class="btn btn-primary">
                    </td>
                </tr>
            </table>
            </form>
            <!-- filter -->
            <br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Jenis</th>
                        <th>nama</th>
                        <th>harga</th>
                        <th>jumlah</th>
                        <th>Tanggal Masuk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Jenis</th>
                        <th>nama</th>
                        <th>harga</th>
                        <th>jumlah</th>
                        <th>Tanggal Masuk</th>
                    </tr>
                </tfoot>
                <tbody>
				<?php
					if(!empty($DataBarang))
					{
						foreach($DataBarang as $ReadDS)
						{
					?>
                    <tr>
						<td><?php echo $ReadDS->kd_barang; ?></td>
						<td><?php echo $ReadDS->jenis; ?></td>
						<td><?php echo $ReadDS->nama; ?></td>
						<td><?php echo $ReadDS->harga; ?></td>
						<td><?php echo $ReadDS->jumlah; ?></td>
						<td><?php echo $ReadDS->tgl_masuk; ?></td>
					</tr>
                    <?php		
						}
					}
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>