$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Xoá danh mục
function delRow(id, url) {
    if (confirm('Xác nhận xoá ?')) {
        $.ajax({
            type: "DELETE",
            dataType: 'JSON',
            data: { id },
            url: url,
            success: function (result) {
                // console.log(result);
                if (result.error === false) {
                    alert(result.message);
                    location.reload();
                } else {
                    alert("Lỗi. Vui lòng thử lại!");
                }
            }
        })
    }
}

// Upload ảnh
$('#upload').change(function () {
    const form = new FormData();
    form.append('file', $(this)[0].files[0]);

    $.ajax({
        processData: false,
        contentType: false,
        type: "POST",
        dataType: 'JSON',
        data: form,
        url: '/admin/upload/services',
        success: function (rs) {
            if (rs.error === false) {
                $('#showImg').html('<a href="' + rs.url + '" target="_blank">' +
                    '<img src="' + rs.url + '" width="200px"></a>');

                $('#file').val(rs.url);
            } else {
                alert("Không thể upload ảnh!");
            }
        }
    });
});

// Đẩy lịch trình lên bảng
function addRow() {
    var date = $('#selectedDate').val();
    var idTour = document.getElementById("idTour");
    var selectedId = idTour.options[idTour.selectedIndex].value;
    var selectedName = idTour.options[idTour.selectedIndex].text;

    var tableBody = $('.table-body');

    var row = '<tr><td>'
                    +  selectedId + 
                '</td><td>' 
                    + selectedName +
                '</td><td style="text-align:center">'
                    + date +
                '</td><td style="text-align:center"><div class="flex align-items-center list-user-action"><button class="bg-danger" style="border: none; border-radius: 5px" onclick="deleteRow(this)"><i class="ri-delete-bin-line"></i></button></div></td></tr>';
    tableBody.append(row);
}

function deleteRow(row) {
    $(row).closest('tr').remove();
}

function getvalue() {
    var scheduleData = [];
    $('.table-body tr').each(function (index, tr) {
        var idtour = $(tr).find('td:eq(0)').text();
        var date = $(tr).find('td:eq(2)').text();
        scheduleData.push({ idtour: idtour, date: date });
    });

    $.ajax({
        type: "POST",
        url: "/admin/schedules/add-schedule",
        data: { schedule: scheduleData },
        success: function (result) {
            if (result.error === false) {
                alert(result.message);
                location.reload();
            } else {
                alert('Lưu lịch trình thất bại!');
            }
        }
    });
}

// thống kê tour
$(document).ready(function() {
    var currentDate = new Date();
    var currentMonth = currentDate.getMonth() + 1;
    var currentYear = currentDate.getFullYear();
    $('#month').val(currentMonth);
    $('#year').val(currentYear);
    
    getThongke();
});
function getThongke() {
    var month = $('#month').val();
    var year = $('#year').val();
    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        data: {month: month, year: year},
        url: '/admin/dashboard/handle-tour',
        success: function(data) {  
            var tableBody = $('.table-db');
            tableBody.find('tr:has(td)').remove();
            data.forEach(function(item) {
                var row = '<tr><td >' + item.ten + '</td><td style="text-align:center">' + item.Tong + '</td></tr>'; 
                tableBody.append(row); 
               
            });
          
    
        },
        
    });
}
$('#sortOptions').change(function() {
    var selectedOption = $(this).val();
    sortTable(selectedOption);
});

function sortTable(option) {
    var rows = $('.table').find('tr').not(':first');
    // Chuyển đổi các hàng thành một mảng để sắp xếp
    var rowsArray = rows.get();
    // Sắp xếp mảng dựa trên tùy chọn được chọn
    rowsArray.sort(function(row1, row2) {
        var value1 = $(row1).find('td').eq(1).text();
        var value2 = $(row2).find('td').eq(1).text();
        if (option === 'asc') {
            return parseFloat(value1) - parseFloat(value2);
        } else if (option === 'desc') {
            return parseFloat(value2) - parseFloat(value1);
        }
    });
    $('.table').append(rowsArray);
}

