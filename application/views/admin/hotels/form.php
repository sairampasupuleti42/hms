<style>
    .error {
        color: #ff0000;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hotels
            <!--<small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Hotels</li>
        </ol>
    </section>
    <section class="content">
        <form class="form-horizontal" id="frm" method="post" enctype="multipart/form-data">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                    <div class="box-tools"><a href="<?php echo base_url() ?>admin/hotels/"
                                              class="btn btn-danger btn-sm">Back
                            to
                            Hotels</a>
                    </div>
                </div>

                <div class="box-body">
                    <input type="hidden" name="_id" value="<?php echo !empty($hotel) ? $hotel['_id'] : ""; ?>">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Basic Information</b>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelName">Hotel
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control required" id="hotelName" type="text"
                                                       placeholder="Enter Hotel Name." name="hotelName"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelType">Hotel type
                                            </label>
                                            <div class="col-sm-9">
                                                <?php $hts = array(
                                                    'Economy' => 'Economy',
                                                    '2 Star' => '2 Star',
                                                    '3 Star' => '3 Star',
                                                    '5 Star' => '5 Star',
                                                    '7 Star' => '7 Star',
                                                ); ?>
                                                <select class="form-control required" id="hotelType"
                                                        name="hotelType">
                                                    <option>--Select Hotel Type</option>
                                                    <?php
                                                    foreach ($hts as $ht) {
                                                        ?>
                                                        <option value="<?php echo $ht; ?>"><?php echo $ht; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelPhone">Phone No.
                                            </label>
                                            <div class="col-sm-9">
                                                <input class="form-control required" id="hotelPhone" type="text"
                                                       placeholder="Enter Phone No." name="hotelPhone"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelMobile">Mobile No.
                                            </label>
                                            <div class="col-sm-9">
                                                <input class="form-control required" id="hotelMobile" type="text"
                                                       placeholder="Enter Mobile No." name="hotelMobile"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelEmail">Email Id
                                            </label>
                                            <div class="col-sm-9">
                                                <input class="form-control  required" id="hotelEmail" type="text"
                                                       placeholder="Enter Email Id" name="hotelEmail"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelImages">Upload Images
                                            </label>
                                            <div class="col-sm-9">

                                                <input class="form-control  required" id="hotelImages" type="file"
                                                       name="hotelImages[]" multiple="multiple"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelWebSite">Website
                                            </label>
                                            <div class="col-sm-9">
                                                <input class="form-control " id="hotelWebSite" type="text"
                                                       placeholder="Enter Website" name="hotelWebSite"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelAddress1"> Address Line
                                                1</label>
                                            <div class="col-sm-9">
                                                <input class="form-control required " id="hotelAddress1" type="text"
                                                       placeholder="Enter  Address Line 1" name="hotelAddress1"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelAddress2"> Address Line
                                                2</label>
                                            <div class="col-sm-9">
                                                <input class="form-control required " id="hotelAddress2" type="text"
                                                       placeholder="Enter  Address Line 2" name="hotelAddress2"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelCity"> City </label>
                                            <div class="col-sm-9">
                                                <input class="form-control required " id="hotelCity" type="text"
                                                       placeholder="Enter City" name="hotelCity"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelState"> State </label>
                                            <div class="col-sm-9">
                                                <input class="form-control required" id="hotelState" type="text"
                                                       placeholder="Enter  State" name="hotelState"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelPinCode"> Pincode </label>
                                            <div class="col-sm-9">
                                                <input class="form-control required" id="hotelPinCode" type="text"
                                                       maxlength="6" onkeypress="return isNumber(event);"
                                                       placeholder="Enter  Pincode" name="hotelPinCode"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelGstNo"> GST No. </label>
                                            <div class="col-sm-9">
                                                <input class="form-control " id="hotelGstNo" type="text"
                                                       placeholder="Enter  GST No." name="hotelGstNo"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Rooms Information</b>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="hotelRooms">Total Rooms</label>
                                            <div class="col-sm-8">
                                                <input class="form-control required" id="hotelRooms" maxlength="2"
                                                       type="text"
                                                       placeholder="Enter Hotel Rooms for booking." name="hotelRooms"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="hotelRoomPrice">Price
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" name="hotelRoomPrice" id="hotelRoomPrice"
                                                       placeholder="Enter price of each room"
                                                       class="form-control required"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group hide" id="checkApp">
                                            <label class="control-label col-sm-9" for="hotelRoomPrice">Apply Same price
                                                for
                                                all
                                            </label>
                                            <div class="col-sm-3">
                                                <label class="checkbox-inline" style="margin-top:30px;"></label>
                                                <input type="checkbox" name="ap" id="pappl" class="flat-red"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr/>
                                    <div id="roomsDiv" class="hide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="col-md-offset-10">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="<?php echo base_url() ?>admin/hotels/" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </form>
    </section>
</div>
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }

    $(document).ready(function () {
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd/mm/yyyy'
        });
        $('#pappl').on('ifChanged', function (event) {
            changePrice();
        });
        $('body').on('focusout', '#hotelRoomPrice', function (e) {
            $("#pappl").parent('[class*="icheckbox"]').addClass("checked");
            var $price = $('#hotelRoomPrice').val();
            $('.hotelRoomPrices').val(parseFloat($price).toFixed(2));
            var checked = $("#pappl").parent('[class*="icheckbox"]').hasClass("checked");
            if (checked) {
                changePrice();
            } else {
                //priceNull();
            }
        });
        $('body').on('focusout', '#hotelRooms', function (e) {
            var $rooms = parseInt($(this).val());
            if (!isNaN($rooms)) {
                $('#roomsDiv,#checkApp').removeClass('hide');
                $('#roomsDiv').empty();
                for (var k = 1; k <= $rooms; k++) {
                    $('#roomsDiv').append('' +
                        '<div id="room-' + k + '">\n' +
                        '                                        <div class="col-md-3">' +
                        '<div class="form-group"> ' +
                        '<label class="control-label col-sm-3" for="hotelRoomNo"> Room No. </label>' +
                        '<div class="col-sm-9"> ' +
                        '<input class="form-control required" id="hotelRoomNo" type="text" placeholder="Enter Hotel Room No (Ex.403 )" name="hotelRoomNo[]"/>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3">' +
                        '<div class="form-group"> ' +
                        '<label class="control-label col-sm-3" for="roomTitle">  Title. </label>' +
                        '<div class="col-sm-9">' +
                        ' <input class="form-control required" id="roomTitle" type="text" placeholder="Enter Room type ex.Deluxe single" name="roomTitle[]"/>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '\n' +
                        '                                        <div class="col-md-4">\n' +
                        '                                            <div class="form-group">\n' +
                        '                                                <label class="control-label col-sm-4" for="hotelRoomPrice"> ' +
                        '                                                    Price. </label>\n' +
                        '                                                <div class="col-sm-8">\n' +
                        '                                                    <input class="form-control required hotelRoomPrices" id="hotelRoomPrice" type="text"\n' +
                        '                                                           placeholder="Enter Hotel Room price (Ex. 1700 )"\n' +
                        '                                                           name="hotelRoomPrice[]" disabled/>\n' +
                        '                                                </div>\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n<div class="col-md-2"><div class="form-group"><label class="control-label col-sm-4" for="hotelRoomPrice"> Status</label><div class="col-sm-8">' +
                        '<select class="form-control required">' +
                        '<option value="">--Select Status--</option><option value="1" selected>Active</option><option value="0">Inactive</option></select></div></div>' +

                        '                                    </div><div class="clearfix"></div>');
                }
            } else {
                $('#roomsDiv,#checkApp').addClass('hide');
            }
        });

        function changePrice() {
            var checked = $("#pappl").parent('[class*="icheckbox"]').hasClass("checked");
            if (!checked) {
                var $price = $('#hotelRoomPrice').val();
                $('.hotelRoomPrices').val(parseFloat($price).toFixed(2));

            } else {
                //   priceNull();
            }
        }

        function priceNull() {
            $priceNull = 0;
            $('.hotelRoomPrices').val(parseFloat($priceNull).toFixed(2));
        }
    })
</script>
