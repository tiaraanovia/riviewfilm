<?php
//session_start();
//modular memanggil file dari folder tampleate
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/C_review.php';

$review = new C_review();
?>
<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Review</h1>
                        </div>

                        <form action="../routers/r_review.php?aksi=update" method="POST" class="user" enctype ="multipart/form-data">
                            <?php foreach($review->edit($_GET['id']) as $b){?>
                            <!--untuk menampung inputan id user -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="Id" name="id" value ="<?= $b->id ?>" hidden>
                            </div>
                            <!--untuk menampung nama dari user-->
                            <div hidden class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    placeholder="id_review" name="id_review" value ="<?= $b->id_review?>">
                            </div>
                   
                            <!--untuk menampung password dari user-->
                            <div class="form-group" hidden>
                                <input type="text" class="form-control form-control-user" id="password"
                                    placeholder="id" name="id"value ="<?= $b->id ?>">
                            </div>

                             <!--untuk menampung password dari user-->
                             <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="password"
                                    placeholder="nama" name="nama"value ="<?= $b->judul ?>">
                            </div>

                             <!--untuk menampung password dari user-->
                             <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="password"
                                    placeholder="pengguna" name="pengguna"value ="<?= $b->nama ?>">
                            </div>

                             <!--untuk menampung password dari user-->
                             <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="password"
                                    placeholder="review" name="review"value ="<?= $b->review ?>">
                            </div>


                            <!--untuk menampung nama dari user-->
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" id="photo"
                                    value="<?= $b->photo ?>" name="photo">
                            </div>
                           
                            <!-- <div style="display: flex ; justify-content: center; align-items: center;">
                                                <img name = "photo" src="<?= "../assets/img/" . $b->photo;?>" alt="<?= $b->nama?>" width="150" height="195">
                                        </div>
                                        <br>    
                                       <p align = "center"> <?= $b->judul ?> </p> -->
                            <div class="input-field">
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Edit" id="register" name="register">
                            </div>

                            <?php 
                            }
                            ?>

                        </form>
                        
                
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

</body>

<?php
    include_once 'template/footer.php';
?>
