<!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/shop-homepage.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">

            <div class="row">


                <!-- /.col-lg-3 -->

                <div class="col-lg-8">


                    <div class="row">
                        <?php
                        foreach ($resu as $unResultat) {
                            $idmodal = 'modal-event-' . $unResultat['id_event'];
                            ?>

                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#" data-toggle="modal" data-target="#<?php echo $idmodal; ?>"><img class="card-img-top" src="../img/Template<?php echo $unResultat['id_event']; ?>.jpg" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php
                                            echo "<td>", $unResultat['designation'], "</td>";
                                            ?>
                                        </h4>
                                        
                                        <p class="card-text"></p>
                                        <div class="modal fade bannerformmodal modal-event" tabindex="-1" role="dialog" aria-labelledby="modal-event-label" aria-hidden="true" id="<?php echo $idmodal; ?>">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="modal-event-label-"><?php echo $unResultat['designation']; ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <img class="card-img-top" src="../img/Template<?php echo $unResultat['id_event']; ?>.jpg" alt="">
                                                                        </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                        <div class="modal-footer">
                                                        </div>          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"></small>

                                    </div>
                                    
                                  
                                </div>
                            </div>
    <?php
}
?>


                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>


