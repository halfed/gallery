<?php include("includes/header.php"); ?>
    <?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

    <?php
    $message = "";

    if(isset($_POST['submit']) && isset($_FILES['file']['size']) > 0) {
        $photo = new Photo();
        $photo->title = $_POST['title'];
        $photo->set_file($_FILES['file']);

        if($photo->save()) {
            $message = "Photo uploaded Succesfully";
        } else {
            $message = join("<br>" , $photo->errors); 
        }
    }
    ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <?php include("includes/top_nav.php"); ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
            <?php include("includes/side_nav.php"); ?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Upload
                            <small>Subheading</small>
                        </h1>

                        <div><?php echo $message; ?><div>
                        <div class="col-md-6">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="file" name="file">
                                </div>

                                <input type="submit" name="submit">
                            </form>
                        </div>
                        


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>