<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
        <a  href="<?php echo site_url('UAS/DataProfile'); ?>" role="button" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode profile</th>
                        <th>Subject</th>
                        <th>Content</th>
                        <th>Publish</th>
                        <th>Delete Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                       <th>Kode profile</th>
                        <th>Subject</th>
                        <th>Content</th>
                         <th>Publish</th>
                        <th>Delete Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    if(!empty($Datamenu))
                    {
                        foreach($Datamenu as $ReadDS)
                        {
                    ?>
                    <tr>
                        <td><?php echo $ReadDS->kd_profile; ?></td>
                        <td><?php echo $ReadDS->subject; ?></td>
                        <td><?php echo $ReadDS->content; ?></td>
                        <td><?php echo $ReadDS->publish; ?></td>
                        <td><?php echo $ReadDS->delete_date; ?></td>



                        <td>
                            <a href="<?php echo site_url('UAS/RestoreDataProfile/'.$ReadDS->kd_profile) ?>" role="button" class="btn btn-danger" class="btn btn-warning">Restore</a>
                        </td>
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
