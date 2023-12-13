'use strict';

/**
 * SHOW PASS
 */

// Hiển thị mật khẩu khi người dùng click vào nút Show
$(function () {

    // Duyệt qua từng phần tử <input> có type là "password" và có thuộc tính data-eye.
    $("input[type='password'][data-eye]").each(function (i) {
        var $this = $(this),                        // Gán biến $this cho phần tử hiện tại và tạo biến id và el
            id = 'eye-password-' + i,               // Tạo ID duy nhất cho các phần tử liên quan đến mật khẩu
            el = $('#' + id);                       // Lưu trữ phần tử có ID tương ứng vào biến el


        $this.wrap($("<div/>", {                    // Bọc phần tử $this bằng một thẻ <div> mới,              
            style: 'position : relative',             // với thuộc tính style và id đã được xác định.
            id: id
        }));

        $this.css({                                 // Thiết lập padding phía bên phải của $this (input) là 60px.
            paddingRight: 60
        });


        $this.after($("<div/>", {                   // Chèn một thẻ <div> sau $this (input),
            html: 'Hiện',                           // với tên 'Show' và các thuộc tính CSS.
            class: 'btn btn-primary btn-sm',
            id: 'passeye-toggle-' + i,
        }).css({
            position: 'absolute',
            right: 10,
            top: ($this.outerHeight() / 2) - 12,
            padding: '2px 7px',
            fontSize: 12,
            cursor: 'pointer',
        }));


        $this.after($("<input/>", {                 // Thêm một phần tử input[type='hidden'] để lưu trữ giá trị mật khẩu.
            type: 'hidden',
            id: 'passeye-' + i
        }));


        var invalid_feedback = $this.parent().parent().find('.invalid-feedback');
        if (invalid_feedback.length) {              // Nếu có phần tử .invalid-feedback nằm trong cấu trúc cha của $this,
            $this.after(invalid_feedback.clone());  // chèn một bản sao của nó sau phần tử input.
        }



        $this.on("keyup paste", function () {       // Khi người dùng gõ hoặc dán vào phần tử input,
            $("#passeye-" + i).val($(this).val());  // cập nhật giá trị của input[type='hidden'] với giá trị của $this.
        });



        $("#passeye-toggle-" + i).on("click", function () {     // Khi người dùng click vào nút Show,
            if ($this.hasClass("show")) {                       // thay đổi kiểu hiển thị của input giữa 'password' và 'text'.
                $this.attr('type', 'password');
                $this.removeClass("show");
                $(this).removeClass("btn-outline-primary");
            } else {
                $this.attr('type', 'text');
                $this.val($("#passeye-" + i).val());
                $this.addClass("show");
                $(this).addClass("btn-outline-primary");
            }
        });
    });

    $(".my-login-validation").submit(function () {      // Khi người dùng submit form có lớp '.my-login-validation'.
        var form = $(this);
        if (form[0].checkValidity() === false) {        // Nếu form không hợp lệ, 
            event.preventDefault();                     // nó sẽ ngăn chặn hành vi mặc định của submit
            event.stopPropagation();                    // và ngừng lan truyền sự kiện.
        }
        form.addClass('was-validated');                 // Thêm lớp '.was-validated' cho form.
    });
});