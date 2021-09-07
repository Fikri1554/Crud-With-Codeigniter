<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        Rekap Pembelian Barang
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <br>
            <!-- filter -->
            <form action="<?php echo site_url('Penjualan/RekapPembelian'); ?>" method="post">
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
                        <th>kode Pembelian</th>
                        <th>Struk</th>
                        <th>kode barang</th>
                        <th>Jumlah beli</th>
                        <th>Tanggal beli</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>kode Pembelian</th>
                        <th>Struk</th>
                        <th>kode barang</th>
                        <th>Jumlah beli</th>
                        <th>Tanggal beli</th>
                    </tr>
                </tfoot>
                <tbody>
				<?php
					if(!empty($DataPembelian))
					{
						foreach($DataPembelian as $ReadDS)
						{
					?>
                    <tr>
						<td><?php echo $ReadDS->kd_pembelian; ?></td>
						<td><?php echo $ReadDS->struk; ?></td>
						<td><?php echo $ReadDS->nama; ?></td>
						<td><?php echo $ReadDS->jml_beli; ?></td>
						<td><?php echo $ReadDS->tgl_beli; ?></td>
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