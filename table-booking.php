<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>จองโต็ะ</title>
</head>

<?php
    $this->load->view('style.css');
?>

<body>
    <!-- <div class="container">
        <table class="zone">
            <tr>
                <td>A</td>
                <td rowspan="2">B</td>
                <td>C</td>
            </tr>
            <tr>
                <td>D</td>
                <td>E</td>
            </tr>
        </table>
    </div> -->
    <div style="height:50px;"></div>

    <div class="legend d-flex justify-content-center align-content-center flex-wrap alert alert-dark" role="alert">
        <p><img src="photos/teacher.png"> อาจารย์</p>
        <p><img src="photos/alumni.png"> ศิษย์เก่า</p>
        <p><img src="photos/freshman.png"> นิสิตชั้นปีที่ 1</p>
        <p><img src="photos/sophomore.png"> นิสิตชั้นปีที่ 2</p>
        <p><img src="photos/junior.png"> นิสิตชั้นปีที่ 3</p>
        <p><img src="photos/senior.png"> นิสิตชั้นปีที่ 4</p>
        <p><img src="photos/backup.png"> ที่นั่งสำรอง</p>
    </div>

    <!-- ส่วนแสดงผลโต๊ะ -->
    <div class="container">
        <table class="tables">
            <tr>
                <th colspan="17">
                    <div class="stage">Stage</div>
                </th>
            </tr>
            <tr>
                <td>A</td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <th style="width:20px;"></th>
                <th colspan="3">
                    <table class="sub">
                        <td><img src="photos/teacher.png"></td>
                        <td><img src="photos/teacher.png"></td>
                        <td><img src="photos/teacher.png"></td>
                    </table>
                </th>
                <th style="width:20px;"></th>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/sophomore.png"></td>
                <td>A</td>
            </tr>
            <tr>
                <td>B</td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <td><img src="photos/freshman.png"></td>
                <th style="width:20px;"></th>
                <th colspan="3">
                    <table class="sub">
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                    </table>
                </th>
                <th style="width:20px;"></th>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/sophomore.png"></td>
                <td><img src="photos/senior.png"></td>
                <td>B</td>
            </tr>
            <tr>
                <td>C</td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/freshman.png"></td>
                <th style="width:20px;"></th>
                <th colspan="3">
                    <table class="sub">
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                    </table>
                </th>
                <th style="width:20px;"></th>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td>C</td>
            </tr>
            <tr>
                <td>D</td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/junior.png"></td>
                <td><img src="photos/junior.png"></td>
                <th style="width:20px;"></th>
                <th colspan="3">
                    <table class="sub">
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                    </table>
                </th>
                <th style="width:20px;"></th>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td>D</td>
            </tr>
            <tr>
                <td>E</td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <th style="width:20px;"></th>
                <th colspan="3">
                    <table class="sub">
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                        <td><img src="photos/alumni.png"></td>
                    </table>
                </th>
                <th style="width:20px;"></th>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td><img src="photos/senior.png"></td>
                <td>E</td>
            </tr>
            <tr>
                <td>F</td>
                <td><img src="photos/backup.png"></td>
                <td><img src="photos/backup.png"></td>
                <td><img src="photos/backup.png"></td>
                <th colspan="9"></th>
                <td><img src="photos/backup.png"></td>
                <td><img src="photos/backup.png"></td>
                <td><img src="photos/backup.png"></td>
                <td>F</td>
            </tr>
        </table>
    </div>



    <!-- ส่วนสรุปการเลือกโต๊ะ -->
    <div class="summary_container d-flex justify-content-center">
        <div class="col-sm">
            <div class="jumbotron">
                <!-- ที่ selected_table จะใช้ JQ ดึงค่ามาใส่ -->
                <h1 class="summary_title">คุณเลือกโต๊ะ : <span class="selected_table">A1-01</span></h1>
                <hr class="my-4">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-danger btn-md" href="#" role="button">ยกเลิก</a>
                    <a class="btn btn-success btn-md" href="#" role="button">ยืนยัน</a>
                </div>
                <!-- <p class="d-flex justify-content-center">It uses utility classes for typography .</p> -->
            </div>
        </div>
    </div>
</body>

</html>