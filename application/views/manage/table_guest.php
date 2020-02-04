<!-- เพิ่มข้อมูล Guest -->
<div class="col-md-12">
    <h3>เพิ่มข้อมูล (NO VALIDATION)</h3>

    <div class="form-group">
        <label for=""><h5>รหัสประจำตัว</h5></label>
        <input type="text" class="form-control" id="id" name="id" placeholder="">
    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for=""><h5>คำนำหน้า</h5></label>
            <select class="form-control" id="prefix">
                <option value="0" disabled selected> คำนำหน้า </option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for=""><h5>ชื่อ</h5></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="">
        </div>
        
        <div class="form-group col-md-4">
            <label for=""><h5>นามสกุล</h5></label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="">
        </div>
    </div>

    <div class="form-group">
        <div class="float-right">
            <a class="btn g-pink" id="add_new_guest" onclick="add_guest()">บันทึก</a>
        </div>
    </div>
</div>

<!-- ค้นหารายชื่อ -->
<h3>ค้นหา</h3>
<div class="row">

    <div class="form-group col-md-3" id="year_guest_status">
        <select class="form-control">
            <option value="9" selected> ชั้นปี </option>
            <option value="2"> ชั้นปีที่ 1 </option>
            <option value="3"> ชั้นปีที่ 2 </option>
            <option value="4"> ชั้นปีที่ 3 </option>
            <option value="5"> ชั้นปีที่ 4 </option>
            <option value="6"> ศิษย์เก่า </option>
            <option value="1"> อาจารย์ </option>
        </select>
    </div>
    
    <div class="form-group col-md-9">
        <input id="search_guest_status" type="text" class="form-control" id="name_table" name="name_table" placeholder="ค้นหา">
    </div>
</div>

<table>
    <thead class="g-pink">
        <tr>
            <th style="width:10%">ลำดับ</th>
            <th>ชื่อ</th>
            <th>โต๊ะ</th>
            <th>การกำเดินการ</th>
        </tr>
    </thead>
    <tbody id="tb_guest_status">
        
    </tbody>
</table>

<script>

    $('#add_new_guest').on('click', function () {
        let name = $('#name').val();
        let last_name = $('#lname').val();
        let id = $('#id').val();
        let prefix = $('#prefix').val();
        
        console.log(name)
        console.log(last_name)
        console.log(id)
        console.log(prefix)

        let url = "<?php echo $this->config->item('controller_manage'). 'add_new_guest'; ?>";
        $.ajax({
            type: "post",
            url: url,
            data: {
                name: name
                ,lname: last_name
                ,id: id
                ,prefix: prefix
            },
            dataType: "JSON",
            success: function (response) {
                location.reload();
                console.log('success')
            }, error: function(){
                console.log('error')
            }
        });
    });

    function add_guest(){

        
    }
</script>