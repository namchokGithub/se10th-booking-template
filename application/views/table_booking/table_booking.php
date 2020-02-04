<?php $this->load->view('table_booking/script'); ?>
<?php $this->load->view('table_booking/style'); ?>
<a href="<?= site_url('Party'); ?>" class="back">
    <img src="<?= base_url('assets/img/left-arrow.png'); ?>"><span class="center-text">F19</span>
</a>

<!-- Legend -->
<div class="d-flex justify-content-center legend fade-in">
    <div class="col-md-10 pb-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <p><img src="<?= base_url('assets/img/teacher.png'); ?>"> อาจารย์</p>
                <p><img src="<?= base_url('assets/img/gen_54.png'); ?>"> ศิษย์เก่ารุ่น 54</p>
                <p><img src="<?= base_url('assets/img/gen_55.png'); ?>"> ศิษย์เก่ารุ่น 55</p>
                <p><img src="<?= base_url('assets/img/gen_56.png'); ?>"> ศิษย์เก่ารุ่น 56</p>
                <p><img src="<?= base_url('assets/img/gen_57.png'); ?>"> ศิษย์เก่ารุ่น 57</p>
                <p><img src="<?= base_url('assets/img/gen_58.png'); ?>"> ศิษย์เก่ารุ่น 58</p>
                <p><img src="<?= base_url('assets/img/backup.png'); ?>"> ที่นั่งสำรอง</p>
                <p><img src="<?= base_url('assets/img/man.png'); ?>"> จองแล้ว</p>
            </ol>
        </nav>
    </div>
</div>

<!-- ส่วนแสดงผลโต๊ะ -->
<div class="d-flex justify-content-center">
    <div class="col-md-10 pb-2">
        <div class="jumbotron fade-in px-3">
            <div class="d-flex justify-content-center">
                <table class="tables mb-3" id="table_book">
                    <tr>
                        <th colspan="7">
                            <div class="stage">Stage</div>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 20px;"></th>
                        <th>F</th>
                        <th>G</th>
                        <th>H</th>
                        <th>I</th>
                        <th>J</th>
                        <th style="width: 20px;"></th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td id="F19"><img src="<?= base_url('assets/img/gen_54.png'); ?>"><span class="center-text">F19</span></td>

                        <td id="VIP1"><img src="<?= base_url('assets/img/teacher.png'); ?>"></td>
                        <td id="VIP2"><img src="<?= base_url('assets/img/teacher.png'); ?>"></td>
                        <td id="VIP3"><img src="<?= base_url('assets/img/teacher.png'); ?>"></td>

                        <td id="J19"><img src="<?= base_url('assets/img/gen_58.png'); ?>"><span class="center-text">J19</span></td>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td id="F29"><img src="<?= base_url('assets/img/gen_54.png'); ?>"><span class="center-text">F29</span></td>
                        <td id="G29"><img src="<?= base_url('assets/img/gen_55.png'); ?>"><span class="center-text">G29</span></td>
                        <td id="H29"><img src="<?= base_url('assets/img/gen_56.png'); ?>"><span class="center-text">H29</span></td>
                        <td id="I29"><img src="<?= base_url('assets/img/gen_57.png'); ?>"><span class="center-text">I29</span></td>
                        <td id="J29"><img src="<?= base_url('assets/img/gen_58.png'); ?>"><span class="center-text">J29</span></td>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td id="F39"><img src="<?= base_url('assets/img/gen_54.png'); ?>"><span class="center-text">F39</span></td>
                        <td id="G39"><img src="<?= base_url('assets/img/gen_55.png'); ?>"><span class="center-text">G39</span></td>
                        <td id="H39"><img src="<?= base_url('assets/img/gen_56.png'); ?>"><span class="center-text">H39</span></td>
                        <td id="I39"><img src="<?= base_url('assets/img/gen_57.png'); ?>"><span class="center-text">I39</span></td>
                        <td id="J39"><img src="<?= base_url('assets/img/gen_58.png'); ?>"><span class="center-text">J39</span></td>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td id="F49"><img src="<?= base_url('assets/img/gen_54.png'); ?>"><span class="center-text">F49</span></td>
                        <td id="G49"><img src="<?= base_url('assets/img/gen_55.png'); ?>"><span class="center-text">G49</span></td>
                        <td id="H49"><img src="<?= base_url('assets/img/gen_56.png'); ?>"><span class="center-text">H49</span></td>
                        <td id="I49"><img src="<?= base_url('assets/img/gen_57.png'); ?>"><span class="center-text">I49</span></td>
                        <td id="J49"><img src="<?= base_url('assets/img/gen_58.png'); ?>"><span class="center-text">J49</span></td>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td id="F59"><img src="<?= base_url('assets/img/gen_54.png'); ?>"><span class="center-text">F59</span></td>
                        <td id="G59"><img src="<?= base_url('assets/img/gen_55.png'); ?>"><span class="center-text">G59</span></td>
                        <td id="TEMP1"><img src="<?= base_url('assets/img/backup.png'); ?>"><span class="center-text">T1</span></td>
                        <td id="I59"><img src="<?= base_url('assets/img/gen_57.png'); ?>"><span class="center-text">I59</span></td>
                        <td id="TEMP2"><img src="<?= base_url('assets/img/backup.png'); ?>"><span class="center-text">T2</span></td>
                        <th>5</th>
                    </tr>
                </table>
            </div>
            <!-- <div class="legend">
                <div class="col-md-4">
                    <label for=""><code>*</code>หมายเหตุ: </label>
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-star">
                        <p><img src="<?= base_url('assets/img/man.png'); ?>"><span class="center-text">F19</span> จองแล้ว</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- Footer -->
<div class="d-flex justify-content-center legend fade-in">
    <div class="col-md-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-around">
                <div class="col-md-3 d-flex align-items-center">
                    <h4 class="mb-1 mt-1">โต๊ะที่เลือก : <span id="table-code"></span></h4>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <h4 class="mb-1 mt-1">ชื่อโต๊ะ : <span id="table-name"></span></h4 class="mb-0">
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <h4 class="mb-1 mt-1">สถานะโต๊ะ : <span id="table-status"></span></h4 class="mb-0">
                </div>
                <div class="col-md-3 d-flex justify-content-center ">
                    <button type="button" disabled
                        class="btn mb-1 mt-1 btn-primary btn-table-detail">รายละเอียด</button>
                </div>
            </ol>
        </nav>
    </div>
</div>
<!-- End footer -->

<!-- The Modal -->
<div class="modal fade" id="table-detail">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header d-flex justify-content-center">
                <h4 class="modal-title">รายละเอียดโต๊ะ <span id="table-id"></span></h4>
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            </div>

            <!-- Modal body -->
            <div class="modal-body">

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            </div>

        </div>
    </div>
</div>