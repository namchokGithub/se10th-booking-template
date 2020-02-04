<script>
    $(document).ready(function() {
        $('#table-name').text("-");
        $('#table-code').text("-");
        var table

        function setBookedTable(data) {
            $.each(data, function(index, val) {
                if (val.tb_code == "VIP1" || val.tb_code == "VIP2" || val.tb_code == "VIP3")
                    $(`#${val.tb_code} img`).attr('src', "<?= base_url('assets/img/book_teacher.png'); ?>");
                else if (val.tb_code == "TEMP1" || val.tb_code == "TEMP2")
                    $(`#${val.tb_code} img`).attr('src', "<?= base_url('assets/img/book_backup.png'); ?>");
                else if (val.tb_code[2] == '1')
                    $(`#${val.tb_code} img`).attr('src', "<?= base_url('assets/img/book_freshman.png'); ?>");
                else if (val.tb_code[2] == '2')
                    $(`#${val.tb_code} img`).attr('src', "<?= base_url('assets/img/book_sophomore.png'); ?>");
                else if (val.tb_code[2] == '3')
                    $(`#${val.tb_code} img`).attr('src', "<?= base_url('assets/img/book_junior.png'); ?>");
                else if (val.tb_code[2] == '4')
                    $(`#${val.tb_code} img`).attr('src', "<?= base_url('assets/img/book_senior.png'); ?>");
                else if (val.tb_code[2] == '9')
                    $(`#${val.tb_code} img`).attr('src', "<?= base_url('assets/img/book_alumni.png'); ?>");

                // ซ่อนชื่อโต๊ะ
                $(`#${val.tb_code}`).append(
                    `<input hidden value='${val.name}'></input>`
                );
            });
        }

        //2019-12-14 21:44 Athiruj
        $(document).on('click', '.btn-table-detail', function() {
            $('.modal-body').empty();
            // รอ
            // var tableName = $($(this).children('input')).val()
            $('#table-id').text(`${this.id}`);
                
            $.ajax({
                type: "post",
                url: "<?php echo site_url('Table_booking/getTableMember'); ?>",
                data: {
                    tb_code: this.id
                },
                dataType: "json",
                success: function(data) {
                    if (data) {
                        $('.modal-body').append(
                        `<h5 class="mb-4">ชื่อโต๊ะ: ${$('#table-name').text()}</h5>`
                        );
                        
                        $.each(data, function(index, val) {
                            $('.modal-body').append(
                                `<p>${index+1}. ${val.name}</p>`
                            );
                        });
                    } else {
                        $('.modal-body').append(
                            `<h2 class="text-danger text-center">โต๊ะว่าง</h2>`
                        );
                    }
                }
            }).then(() => {
                $('#table-detail').modal('show');
            });;
        });

        $(document).on('click', 'td', function() {
            $('td').removeClass('clicked');
            $(this).addClass('clicked');
            $('#table-code').text(this.id);
            $('#table-name').text("-");
            $('.btn-table-detail').attr('id', this.id);
            var tableName = $($(this).children('input')).val()
            if(tableName){
                $('#table-name').text(tableName);
                $('.btn-table-detail').removeAttr('disabled');
            }else{
                $('.btn-table-detail').attr('disabled',true);
            }
        });

        $.ajax({
            type: "post",
            url: "<?php echo site_url('Table_booking/getBookedTable'); ?>",
            data: {},
            dataType: "JSON",
            success: function(data) {
                setBookedTable(data)
            }
        });


    });
</script>