<!-- Menu management -->
<div class="container mt-3">

    <!-- Card menu -->
    <div class="card">

        <!-- Header -->
        <div class="card-header g-green" data-toggle="collapse" href="#collapseMenu1" role="button" aria-expanded="true" aria-controls="collapseMenu1">
            <h3 class="m-auto">Management</h3>
        </div>
        <!-- End header -->
        <div id="collapseMenu1">

            <!-- Card body -->
            <div class="card-body" id="menu">

                <!-- R1 -->
                <div class="row">

                    <!-- Map Tables -->
                    <div class="col-sm">
                        <!-- Menu 2 -->
                        <div class="card" id="map_table_show">

                            <div class="card-body g-pink">Map Tables</div>

                        </div>
                        <!-- End menu 2 -->
                    </div>

                    <!-- Tables -->
                    <div class="col-sm">

                        <!-- Menu 1 -->
                        <div class="card" id="table_show">

                            <div class="card-body g-pink">Tables</div>

                        </div>
                        <!-- End menu 1 -->

                    </div>

                    <!-- Home -->
                    <div class="col-sm">

                        <a href="<?php echo $this->config->item('Main_controller')?>">
                            <!-- Menu 3 -->
                            <div class="card" id="home">

                                <div class="card-body g-magneto" style="border-radius: 30px !important;">Home</div>

                            </div>
                            <!-- End menu 3 -->
                        </a>

                    </div>

                </div>

                <!-- R2 -->
                <div class="row mt-2">

                    <!-- Booking table (A) -->
                    <div class="col-sm-4">
                        <!-- Menu 4 -->
                        <div class="card" id="booking_table_show">

                            <div class="card-body g-pink">Booking table (A)</div>

                        </div>
                        <!-- End menu 4 -->
                    </div>

                    <!-- Booking table (All) -->
                    <div class="col-sm-4">
                        <!-- Menu 4 -->
                        <div class="card" id="booking_table_all_show">

                            <div class="card-body g-pink">Booking table (All)</div>

                        </div>
                        <!-- End menu 4 -->
                    </div>

                    <!-- Add guest -->
                    <div class="col-sm-4">
                        <!-- Menu 4 -->
                        <div class="card" id="add_guest_show">

                            <div class="card-body g-pink">Add guest</div>

                        </div>
                        <!-- End menu 4 -->
                    </div>

                </div>

            </div>
            <!-- End card body -->
        </div>

    </div>

    <!-- Card Map table management -->
    <div id="map_table" class="card mt-5" style="display: none">

        <!-- Header -->
        <div class="card-header g-green">
            <h2 class="m-auto">Map Table</h2>
        </div>
        <!-- End header -->

        <form action="">
            <div class="card-body">

                <div class="form-group">
                    <label for="input_id_table"><h4>รหัสโต๊ะที่นั่ง</h4></label>
                    <div class="form-row">
                        
                        <div class="form-group col-md-3" id="type">
                            <select class="form-control">
                                <option value="11" disabled selected> ประเภท </option>
                                <option value="3"> ชั้นปีที่ 1 </option>
                                <option value="4"> ชั้นปีที่ 2 </option>
                                <option value="5"> ชั้นปีที่ 3 </option>
                                <option value="6"> ชั้นปีที่ 4 </option>ww
                                <option value="2"> ศิษย์เก่า </option>
                                <option value="1"> อาจารย์ </option>
                                <option value="7"> สำรอง </option>
                            </select>
                        </div>
    
                        <div class="form-group col-md-9">
                            <select class="form-control" id="tb_code">
                                <option disable selected value="0">รหัส</option>
                            </select>
                        </div>
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="input_name_table"><h4>ชื่อโต๊ะที่นั่ง</h4></label>
                    <input type="text" class="form-control" id="name_table" name="name_table" placeholder="เช่น เจ๊จูน 4 คูณร้อย">
                </div>

                 <!-- Member in table -->
                 <div class="form-group">
                    <label for="input_member_table"><h4>สมาชิก</h4></label>
                    <table class="table">
                        <thead class="g-pink">
                            <tr>
                                <th class="text-center" width="10%">ลำดับ</th>
                                <th class="text-center" width="50%">ชื่อ</th>
                                <th class="text-center" width="30%">การดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody id="tb_member">

                        </tbody>
                    </table>

                    <div class="pr-5">
                        <div class="float-right">
                            <button type="submit" class="btn g-scooter btn-save">บันทึก</button>
                        </div>
                    </div>
                </div>      

                <!-- Find quest -->
                <div class="form-group mt-5">
                    <label for="member_table"><h4>ค้นหารายชื่อสมาชิก</h4></label>

                    <div class="form-row">
                        
                        <div class="form-group col-md-3" id="year">
                            <select class="form-control">
                                <option value="11" disabled selected> ชั้นปี </option>
                                <option value="62"> ชั้นปีที่ 1 </option>
                                <option value="61"> ชั้นปีที่ 2 </option>
                                <option value="60"> ชั้นปีที่ 3 </option>
                                <option value="59"> ชั้นปีที่ 4 </option>
                                <option value="99"> ศิษย์เก่า </option>
                                <option value="00"> อาจารย์ </option>
                            </select>
                        </div>
    
                        <div class="form-group col-md-9">
                            <input id="search_member" type="text" class="form-control" id="name_table" name="name_table" placeholder="ค้นหา">
                        </div>

                        <!-- Table guest -->
                        <table class="table mt-3">
                            <thead class="g-green">
                                <tr>
                                    <th class="text-center" width="10%">ลำดับ</th>
                                    <th class="text-center" width="50%">ชื่อ</th>
                                    <th class="text-center" width="30%">การดำเนินการ</th>
                                </tr>
                            </thead>
                            <tbody id="tb_list_member">
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>        
                 
            </div>
            <!-- end Card body -->
        </form>

    </div>
    <!-- Card -->

    <!-- Card table management -->
    <div id="table" class="card mt-5" style="display: none">

        <!-- Header -->
        <div class="card-header g-green">
            <h2 class="m-auto">Tables</h2>
        </div>
        <!-- End header -->

        <form action="javascript:void(0)">
            <!-- Card body -->
            <div class="card-body">
                <!-- Find quest -->
                <div class="form-group mt-1">
                    <label for="member_table"><h4>ค้นหารายชื่อโต๊ะที่นั่ง</h4></label>

                    <div class="form-row">
                        
                        <div class="form-group col-md-3" id="year2">
                            <select class="form-control">
                                <option value="0" disabled selected> ทั้งหมด </option>
                                <option value="3"> ชั้นปีที่ 1 </option>
                                <option value="4"> ชั้นปีที่ 2 </option>
                                <option value="5"> ชั้นปีที่ 3 </option>
                                <option value="6"> ชั้นปีที่ 4 </option>
                                <option value="2"> ศิษย์เก่า </option>
                                <option value="1"> อาจารย์ </option>
                                <option value="7"> ที่นั่งสำรอง </option>
                            </select>
                        </div>
    
                        <div class="form-group col-md-9">
                            <input id="search_table_name" type="text" class="form-control" placeholder="ค้นหา">
                        </div>

                        <!-- Table guest -->
                        <table class="table mt-3">
                            <thead class="g-green">
                                <tr>
                                    <th class="text-center" width="5%">ลำดับ</th>
                                    <th class="text-center" width="5%">รหัส</th>
                                    <th class="text-center" width="50%">ชื่อ</th>
                                    <th class="text-center" width="10%">ประเภท</th>
                                    <th class="text-center" width="30%">การดำเนินการ</th>
                                </tr>
                            </thead>
                            <tbody id="tb_table_name">
                                
                            </tbody>
                        </table>
                    </div>

                </div>   
            </div>
            <!-- end Card body -->
        </form>

    </div>
    <!-- Card -->

    <!-- Card guest management -->
    <div id="guest" class="card mt-5" style="display: none">

        <!-- Header -->
        <div class="card-header g-green">
            <h3>Guest</h3>
        </div>
        <!-- End header -->

    </div>
    <!-- Card -->

    <!-- Card Booking -->
    <div id="booking" class="card mt-5" style="display: none">
        <!-- Header -->
        <div class="card-header g-green">
            <h3>Booking</h3>
        </div>
        <!-- End header -->

        <div class="card-body">
            <?php echo $booking; ?>
        </div>
    </div>
    <!-- End card Booking -->

    <!-- Add guest -->
    <div id="add_guest" class="card mt-5" style="display: none">
        <!-- Header -->
        <div class="card-header g-green">
            <h3>Add guest</h3>
        </div>
        <!-- End header -->

        <div class="card-body">
            <?php echo $table_guest; ?>
        </div>
    </div>
    <!-- End Add guest -->

    <!-- Modal -->
    <div class="modal fade" id="member_in_table" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">สมาชิกโต๊ะ <span id="name_table_modal"></span></h5>
                    <button style="color: gray !important;" type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <!-- Table member in table -->
                    <table class="table mt-3 m-auto p-0">
                        <thead class="g-green">
                            <tr>
                                <th class="text-center" width="10%">ลำดับ</th>
                                <th class="text-center" width="50%">ชื่อ</th>
                            </tr>
                        </thead>
                        <tbody id="tb_member_in_table">
                            
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn g-magneto" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>

</div>