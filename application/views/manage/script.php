<script>
    var table
    var prefix
    var guest
    var guest_all
    var id_guest = []

    $(document).ready(function() {

        get_table()
        // console.log(table)
        
        get_guest_available()
        get_all_guest()
        // console.log(guest)
        // console.log(guest_all)

        show_table_guest_status()
        show_prefix()

        // Search member
        $("#search_member").on("keyup", function() {
            var value = $('#search_member').val().toLowerCase();
            $("#tb_list_member > tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        // Search table
        $("#search_table_name").on("keyup", function() {
            var value = $('#search_table_name').val().toLowerCase();
            $("#tb_table_name > tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        // Search table guest status
        $("#search_guest_status").on("keyup", function() {
            var value = $('#search_guest_status').val().toLowerCase();
            $("#tb_guest_status > tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        $('.btn-save').click(function() {
            save_table()
        });

        $('#type').change(function (e) { 
            show_table_code()
        });

        $('#year').change(function (e) { 
            show_table_guest()
        });

        $('#map_table_show').click(function (e) { 
            ($('#map_table').css('display') == 'none')?$('#map_table').show():$('#map_table').hide()
            $('#table').hide()
            $('#booking').hide()
            $('#add_guest').hide()
        });

        $('#table_show').click(function (e) { 
            ($('#table').css('display') == 'none')?$('#table').show():$('#table').hide()
            $('#map_table').hide()
            $('#booking').hide()
            $('#add_guest').hide()
            show_table()
        });

        $('#booking_table_show').click(function (e) { 
            ($('#booking').css('display') == 'none')?$('#booking').show():$('#booking').hide()
            $('#table').hide()
            $('#map_table').hide()
            show_table()
        });

        $('#add_guest_show').click(function (e) { 
            ($('#add_guest').css('display') == 'none')?$('#add_guest').show():$('#add_guest').hide()
            $('#table').hide()
            $('#map_table').hide()
            $('#booking').hide()
            show_table()
        });

        // Show detail table 
        $('#year2').change(function (e) { 
            let type = $('#year2 > select').val();
            show_table_by_type(type)
        });

        // Show detail guest status 
        $('#year_guest_status').change(function (e) { 
            let type = $('#year_guest_status > select').val();
            show_guest_status_by_type(type)
        });

    });

    function show_guest_status_by_type(type){
        let tbody = ""

        for(i in guest_all){
            if(type==guest_all[i].std_id.substring(0,2) || type=="11"){
                tbody += `<tr>`

                tbody += `<td class="text-center index_guest_status"></td>`
                tbody += `<td class="text-left">`
                tbody += `${guest_all[i].name_guest}`
                tbody += `</td>`

                if(guest_all[i].name_table){
                    tbody += `<td class="text-left">`
                    tbody += `${guest_all[i].name_table}`
                    tbody += `</td>`
                    tbody += `<td>`
                    tbody += `<a class="btn g-yellow">ยกเลิก</a>`
                    tbody += `</td>`
                }else{
                    tbody += `<td>`
                    tbody += 'ไม่มีที่นั่ง'
                    tbody += `</td>`
                    tbody += `<td>`
                    tbody += `<a class="btn g-blue disabled">ไม่พบข้อมูล</a>`
                    tbody += `</td>`
                }

                tbody += `</tr>`
            }
        }

        $('#tb_guest_status').html(tbody);
        reset_guest_status_count()
    }

    // Get detail of table form databases
    function get_prefix(){
        
        let url = "<?php echo $this->config->item('controller_manage'). 'get_prefix'; ?>";
        $.ajax({
            type: "POST",
            async: false,
            url: url,
            dataType: "JSON",
            success: function (data) {
                prefix = data
            }
        });

    }

    // Get detail of table form databases
    function get_table(){
        
        let url = "<?php echo $this->config->item('controller_manage'). 'get_all_table_code'; ?>";
        $.ajax({
            type: "POST",
            async: false,
            url: url,
            dataType: "JSON",
            success: function (data) {
                table = data
            }
        });

    }

    // Reset number of column of table name
    function reset_table_name_count(){
        $('#tb_table_name tr').each((index, element) => {
            $(element).children('.indexTableName ').text(index + 1)
        })
    }

    // Reset number of column of member
    function reset_member_in_table_count(){
        $('#tb_member_in_table tr').each((index, element) => {
            $(element).children('.indexMember_in_table ').text(index + 1)
        })
    }

    // Show member in table
    function show_member(tb_id) {  
        let member_in_table
        let tb = ""
        let table_member = ""
        let url = "<?php echo $this->config->item('controller_manage'). 'get_member_by_table'; ?>";

        $.ajax({
            type: "POST",
            async: false,
            url: url,
            data: {
                id_table: tb_id
            },
            dataType: "JSON",
            success: function (data) {
                member_in_table = data
                // console.log(data)
            }
        });

        tb_id-=1

        if(member_in_table.length != 0){
            for(i in member_in_table){
                tb += "<tr>"
                tb += '<td class="text-center indexMember_in_table"></td>'
                tb += '<td class="">'+member_in_table[i].name_guest+'</td>'
                tb += "</tr>"
            }
        }else{
            tb += "<tr>"
            tb += '<td colspan="2" class="text-center"> ไม่พบข้อมูล </td>'
            tb += "</tr>"
        }

        (table[tb_id].name_table ) ?name_table = table[tb_id].name_table : name_table=" ไม่มีชื่อ "
        $('#tb_member_in_table').html(tb);
        $('#name_table_modal').html(name_table + ' รหัสโต๊ะ: ' + table[tb_id].code_table );
        reset_member_in_table_count()
        $('#member_in_table').modal();
    }
    
    // Show table when select type of table
    function show_table_by_type(type){
        let tbody = ""

        for(i in table){
            if(type == table[i].type_table_id) {
                let name = (table[i].name_table==null) ? "-" : table[i].name_table;

                tbody += '<tr>'
                tbody += '<td class="text-center indexTableName"></td>'
                tbody += '<td class="text-center">'+table[i].code_table+'</td>'
                tbody += '<td class="text-center">'+name+'</td>'
                tbody += '<td class="text-center">'+table[i].type_table+'</td>'
                tbody += '<td class="text-center"><a class="btn g-magneto" onclick="show_member('+table[i].tb_id+')">แสดงสมาชิก</a></td>'
                tbody += '</tr>'
            }
        }

        $('#tb_table_name').html(tbody);
        reset_table_name_count()
    }

    // Show detail of table 
    function show_table(){
        let tbody = ""

        for(i in table){
            let name = (table[i].name_table==null) ? "-" : table[i].name_table;

            tbody += '<tr>'
            tbody += '<td class="text-center indexTableName"></td>'
            tbody += '<td class="text-center">'+table[i].code_table+'</td>'
            tbody += '<td class="text-center">'+name+'</td>'
            tbody += '<td class="text-center">'+table[i].type_table+'</td>'
            tbody += '<td class="text-center"><a class="btn g-magneto" onclick="show_member('+table[i].tb_id+')">แสดงสมาชิก</a></td>'
            tbody += '</tr>'
        }

        $('#tb_table_name').html(tbody);
        reset_table_name_count()
    }

    // Count column in table guest status
    function reset_guest_status_count(){
        $('#tb_guest_status tr').each((index, element) => {
            $(element).children('.index_guest_status').text(index + 1)
        })
    }

    // Show code of table in selection
    function show_table_guest_status(){
        let tbody = ""

        for(i in guest_all){
            tbody += `<tr>`

            tbody += `<td class="text-center index_guest_status"></td>`
            tbody += `<td class="text-left">`
            tbody += `${guest_all[i].name_guest}`
            tbody += `</td>`
            
            if(guest_all[i].name_table){
                tbody += `<td class="text-left">`
                tbody += `${guest_all[i].name_table}`
                tbody += `</td>`
                tbody += `<td>`
                tbody += `<a class="btn g-yellow">ยกเลิก</a>`
                tbody += `</td>`
            }else{
                tbody += `<td class="text-left">`
                tbody += 'ไม่มีที่นั่ง'
                tbody += `</td>`
                tbody += `<td>`
                tbody += `<a class="btn g-blue disabled">ไม่พบข้อมูล</a>`
                tbody += `</td>`
            }

            tbody += `</tr>`
        }

        $('#tb_guest_status').html(tbody);
        reset_guest_status_count()
    }

    // Show code of table in selection
    function show_prefix(){
        get_prefix()
        let select = ""
        console.log(prefix)

        select += '<option disable selected value="0">คำนำหน้า</option>'

        for(index in prefix){
            select += '<option value="'+prefix[index].pf_id+'">'+prefix[index].pf_name+'</option>'
        }

        $('#prefix').html(select);
    }

    // Show code of table in selection
    function show_table_code(){
        let select = ""
        let type = $('#type > select').val();

        select += '<option disable selected value="0">รหัส</option>'

        for(index in table){
            if(type==table[index].type_table_id)
                select += '<option value="'+table[index].tb_id+'">'+table[index].code_table+'</option>'
        }


        $('#tb_code').html(select);
    }

    // Get guest available form databases
    function get_guest_available(){

        let url = "<?php echo $this->config->item('controller_manage'). 'get_guest_available'; ?>";

        $.ajax({
            type: "POST",
            async: false,
            url: url,
            dataType: "JSON",
            success: function (data) {
                guest = data
            }
        });

    }

    // Get all guest form databases
    function get_all_guest(){

        let url = "<?php echo $this->config->item('controller_manage'). 'get_all_guest'; ?>";

        $.ajax({
            type: "POST",
            async: false,
            url: url,
            dataType: "JSON",
            success: function (data) {
                guest_all = data
            }
        });

    }

    // Show guest when selected year
    function show_table_guest(){
        let tb = ""
        let year = $('#year > select').val();
        let i = 0

        for(index in guest){
            if(year == guest[index].std_id.substring(0, 2)){
                tb += '<tr>'
                tb += '<td class="text-center" width="10%">'+(++i)+'</td>'
                tb += '<td class="" width="50%">'+guest[index].name_guest+'</td>'
                tb += '<td class="text-center" width="30%"><a class="btn g-yellow" onclick="add_guest('+guest[index].gu_id+')">เพิ่ม</a></td>'
                tb += '</tr>'
            }
        }

        $('#tb_list_member').html(tb);
    }

    // find id in guest
    function find_id(id){
        for(i in id_guest){
            if(id == id_guest[i]){
                return true
            }
        }
        return false
    }

    // Reset number columns of member
    function resetNums(){
        $('#tb_member tr').each((index, element) => {
            $(element).children('.index ').text(index + 1)
        })
    }

    // Delete guest in table (Views)
    function delete_guest(element, id){
        element.closest('tr').remove()
        id_guest.splice(id, 1)
        reset_table_guest()
    }

    // Reset table guest after delete guest
    function reset_table_guest(){
        let tb = ""
        for(i in id_guest){
            for(index in guest){
                if(id_guest[i] == guest[index].gu_id){
                    tb += '<tr>'
                    tb += '<td class="text-center index" width="10%"></td>'
                    tb += '<td class="" width="50%">'+guest[index].name_guest+'</td>'
                    tb += '<td class="text-center" width="30%"><a class="btn g-pink" onclick="delete_guest(this,'+(parseInt(i))+','+guest[index].gu_id+')">ยกเลิก</a></td>'
                    tb += '</tr>'
                }
            }
        }
        $('#tb_member').html(tb);
        resetNums()
    }

    // Add guest in table (Views)
    function add_guest(id){
        let tb = ""
        let i = 0
        $('#tb_member tr').each((index, element) => {
            i++
        })

        id_guest.push(id)
        for(index in guest){
            if(id == guest[index].gu_id){
                tb = ""
                tb += '<tr>'
                tb += '<td class="text-center index" width="10%">'+(i)+'</td>'
                tb += '<td class="" width="50%">'+guest[index].name_guest+'</td>'
                tb += '<td class="text-center" width="30%"><a class="btn g-pink" onclick="delete_guest(this,'+(parseInt(i))+')">ยกเลิก</a></td>'
                tb += '</tr>'
                $('#tb_member').append(tb);
                resetNums()
            }
        }

    }

    // Update table and guest in table (Databases)
    function save_table(){

        console.log(id_guest)
        let id_table = $('#tb_code').val();
        let name_table = $('#name_table').val();
        let guest = id_guest;
        let url = "<?php echo $this->config->item('controller_manage'). 'add_guest'; ?>";

        // console.log("ID_TABLE " + id_table)
        // console.log(name_table)
        // console.log(guest)

        $.ajax({
            type: "POST",
            url: url,
            data: {
                id_table: id_table,
                name_table: name_table,
                guest: guest
            },
            dataType: "JSON",
            success: function (data) {
                console.log('success')
                get_table()
                get_all_guest()
                get_guest_available()
            },
            error: function (data){
                console.log('error')
            }
        });
    }

</script>