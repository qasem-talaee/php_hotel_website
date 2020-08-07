<?php
$get_type = "select * from room_type";
$run_type = mysqli_query($con, $get_type);
$get_bed = 'select * from bed';
$run_bed = mysqli_query($con, $get_bed);
?>
<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <form action="<?php echo ($base_url); ?>booking-form/" class="booking-form aside-stretch" method="post">
                    <div class="row">
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3 px-4">
                                    <label for="#">Check-in Date</label>
                                    <input name="start_date" type="date" class="form-control" placeholder="Check-in date" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3 px-4">
                                    <label for="#">Check-out Date</label>
                                    <input name="end_date" type="date" class="form-control" placeholder="Check-out date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3 px-4">
                                    <label for="#">Room</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="room_type" id="" class="form-control">
                                                <?php
                                                while ($row_type=mysqli_fetch_array($run_type)){
                                                    $name = $row_type['name'];
                                                    $id = $row_type['id']; ?>
                                                    <option value="<?php echo ($id); ?>"><?php echo ($name); ?></option>
                                               <?php }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex py-md-4">
                            <div class="form-group align-self-stretch d-flex align-items-end">
                                <div class="wrap align-self-stretch py-3 px-4">
                                    <label for="#">Guests</label>
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="bed" id="" class="form-control">
                                                <?php
                                                while ($row_bed=mysqli_fetch_array($run_bed)){
                                                    $id = $row_bed['id'];
                                                    $count = $row_bed['bed']; ?>
                                                    <option value="<?php echo ($id); ?>"><?php echo ($count); ?> Adult</option>
                                               <?php }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex">
                            <div class="form-group d-flex align-self-stretch">
                                <input type="submit" name="submit" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block" value="Check Availability">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>