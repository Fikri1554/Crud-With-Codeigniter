<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
        <a  href="<?php echo site_url('UAS/DataVideo'); ?>" role="button" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                    <tr>
                        <th>kode video</th>
                        <th>Subject</th>
                        <th>Link</th>
                        <th>Content</th>
                        <th>Publish</th>
                        <th>Delete Date</th>
                    
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th>kode video</th>
                        <th>Subject</th>
                        <th>Link</th>
                        <th>Content</th>
                        <th>Publish</th>
                      <th>Delete Date</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    if(!empty($Datavideo))
                    {
                        foreach($Datavideo as $ReadDS)
                        {
                    ?>
                    <tr>
                        <td><?php echo $ReadDS->kd_video; ?></td>
                        <td><?php echo $ReadDS->subject; ?></td>
                        <td><?php echo $ReadDS->link; ?></td>
                        <td><?php echo $ReadDS->content; ?></td>
                        <td><?php echo $ReadDS->publish; ?></td>
                        <td><?php echo $ReadDS->delete_date; ?></td>
                        



                        <td>
                            <a href="<?php echo site_url('UAS/RestoreDataVideo/'.$ReadDS->kd_video) ?>" role="button" class="btn btn-danger" class="btn btn-warning">Restore</a>
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
