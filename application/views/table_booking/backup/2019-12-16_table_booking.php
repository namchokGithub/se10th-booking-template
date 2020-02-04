<?php $this->load->view('table_booking/script'); ?>
<?php $this->load->view('table_booking/style'); ?>
<a href="<?= site_url('Party'); ?>" class="back">
    <img src="<?= base_url('assets/img/left-arrow.png'); ?>">
</a>

<!-- Legend -->
<div class="d-flex justify-content-center legend fade-in">
    <div class="col-md-10 pb-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <p><img src="<?= base_url('assets/img/teacher.png'); ?>"> อาจารย์</p>
                <p><img src="<?= base_url('assets/img/alumni.png'); ?>"> ศิษย์เก่า</p>
                <p><img src="<?= base_url('assets/img/freshman.png'); ?>"> ชั้นปีที่ 1</p>
                <p><img src="<?= base_url('assets/img/sophomore.png'); ?>"> ชั้นปีที่ 2</p>
                <p><img src="<?= base_url('assets/img/junior.png'); ?>"> ชั้นปีที่ 3</p>
                <p><img src="<?= base_url('assets/img/senior.png'); ?>"> ชั้นปีที่ 4</p>
                <p><img src="<?= base_url('assets/img/backup.png'); ?>"> ที่นั่งสำรอง</p>
            </ol>
        </nav>
    </div>
</div>

<!-- ส่วนแสดงผลโต๊ะ -->
<div class="d-flex justify-content-center">
    <div class="col-md-10 pb-2">
        <div class="jumbotron fade-in">
            <div class="d-flex justify-content-center">
                <table class="tables mb-3">
                    <tr>
                        <th colspan="17">
                            <div class="stage">Stage</div>
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 20px;"></th>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>E</th>
                        <th>F</th>
                        <th>G</th>
                        <th>H</th>
                        <th>I</th>
                        <th>J</th>
                        <th>K</th>
                        <th>L</th>
                        <th>M</th>
                        <th>N</th>
                        <th>O</th>
                        <th style="width: 20px;"></th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td id="A11"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="B11"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="C11"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="D11"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="E11"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>

                        <td id="F19"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>

                        <td id="VIP1"><img src="<?= base_url('assets/img/teacher.png'); ?>"></td>
                        <td id="VIP2"><img src="<?= base_url('assets/img/teacher.png'); ?>"></td>
                        <td id="VIP3"><img src="<?= base_url('assets/img/teacher.png'); ?>"></td>

                        <td id="J19"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>

                        <td id="K12"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="L12"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="M12"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="N12"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="O12"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <th>1</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td id="A21"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="B21"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="C21"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="D21"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>
                        <td id="E21"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>

                        <td id="F29"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="G29"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="H29"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="I29"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="J29"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>

                        <td id="K22"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="L22"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="M22"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="N22"><img src="<?= base_url('assets/img/sophomore.png'); ?>"></td>
                        <td id="O24"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td id="A33"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="B33"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="C33"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="D33"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="E31"><img src="<?= base_url('assets/img/freshman.png'); ?>"></td>

                        <td id="F39"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="G39"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="H39"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="I39"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="J39"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>

                        <td id="K34"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="L34"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="M34"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="N34"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="O34"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <th>3</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td id="A43"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="B43"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="C43"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="D43"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>
                        <td id="E43"><img src="<?= base_url('assets/img/junior.png'); ?>"></td>

                        <td id="F49"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="G49"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="H49"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="I49"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="J49"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>

                        <td id="K44"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="L44"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="M44"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="N44"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="O44"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td id="TEMP1"><img src="<?= base_url('assets/img/backup.png'); ?>"></td>
                        <td id="TEMP2"><img src="<?= base_url('assets/img/backup.png'); ?>"></td>
                        <td id="C54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="D54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="E54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>

                        <td id="F54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="G59"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="H59"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="I59"><img src="<?= base_url('assets/img/alumni.png'); ?>"></td>
                        <td id="J54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>

                        <td id="K54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="L54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="M54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="N54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <td id="O54"><img src="<?= base_url('assets/img/senior.png'); ?>"></td>
                        <th>5</th>
                    </tr>
                </table>
            </div>
            <div class="legend">
                <div class="col-md-4">
                    <label for=""><code>*</code>หมายเหตุ: </label>
                </div>
                <div class="col-md-12">
                    <div class="d-flex justify-content-star">
                        <p><img src="<?= base_url('assets/img/teacher.png'); ?>"> ว่าง</p>
                        <p><img src="<?= base_url('assets/img/book_teacher.png'); ?>"> จองแล้ว</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="d-flex justify-content-center legend fade-in">
    <div class="col-md-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-around">
                <div class="col-md-4 d-flex align-items-center">
                    <h4 class="mb-1 mt-1">โต๊ะที่เลือก : <span id="table-code"></span></h4>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <h4 class="mb-1 mt-1">ชื่อโต๊ะ : <span id="table-name"></span></h4 class="mb-0">
                </div>
                <div class="col-md-4 d-flex justify-content-center ">
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