<?php include 'header.php' ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Registration Form</div>
                    <div class="card-body">
                        <?php if (isset($message)){ ?>
                            <h2 class="text-center font-weight-bold text-success"><?php echo $message; ?></h2>
                        <?php } ?>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" required name="full_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Email Address</label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Subject</label>
                                <div class="col-md-9">
                                    <label><input type="checkbox" name="subject[]" value="Bangla"> Bangla </label>
                                    <label><input type="checkbox" name="subject[]" value="English"> English </label>
                                    <label><input type="checkbox" name="subject[]" value="Math"> Math </label>
                                    <label><input type="checkbox" name="subject[]" value="Physics"> Physics </label>
                                    <label><input type="checkbox" name="subject[]" value="Chemistry"> Chemistry </label>
                                    <label><input type="checkbox" name="subject[]" value="Biology"> Biology </label>
                                    <label><input type="checkbox" name="subject[]" value="Religion"> Religion </label>
                                </div>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3 col-form-label"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-success" name="register_btn" value="Submit"/>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php include 'footer.php' ?>
