// 'use strict';

{/* <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script> */}
    // $(document).ready(function() {
    //     $('.special__desc').each(function() {
    //         var $description = $(this);
    //         var content = $description.html();

    //         if (content.length > 100) {
    //             var shortContent = content.substr(0, 100) + '...';
    //             $description.html(shortContent);
    //             $description.append('<button class="read-more-btn">Xem thêm</button>');

    //             $description.on('click', '.read-more-btn', function() {
    //                 $description.html(content);
    //             });
    //         }
    //     });
    // });
{/* </script> */}


// Cuộn đến phần tử tương ứng khi nhấp chuột vào liên kết trong thanh điều hướng
// function scrollToSection(event) {
//     event.preventDefault();                                 // Ngăn chặn hành vi mặc định của sự kiện click

//     var targetId = this.getAttribute('href').substring(1);  // Lấy id từ thuộc tính 'href' của liên kết và loại bỏ ký tự '#'
//     var targetElement = document.getElementById(targetId);  // Tìm targetElement dựa trên id

//     if (targetElement) {                    // Nếu targetElement tồn tại, cuộn đến vị trí của nó với hiệu ứng smooth
//         window.scrollTo({
//             top: targetElement.offsetTop,
//             behavior: 'smooth'
//         });
//     }
// }





/**
 * CHECK INPUT & SHOW NOTIFICATION
 */

// var form = document.querySelector(".datphong-form");
// form.addEventListener("submit", function (event) {
//     event.preventDefault(); // Ngăn chặn gửi biểu mẫu mặc định

//     // Kiểm tra các trường đầu vào
//     var fullName = document.querySelector("input[type='text']").value;
//     var email = document.querySelector("input[type='email']").value;
//     var destination = document.querySelector("select").value;
//     var checkInDate = document.querySelector("input[type='date']:nth-of-type(1)").value;
//     var checkOutDate = document.querySelector("input[type='date']:nth-of-type(2)").value;
//     var rooms = document.querySelector("select:nth-of-type(1)").value;
//     var adults = document.querySelector("select:nth-of-type(2)").value;
//     var children = document.querySelector("select:nth-of-type(3)").value;

//     // Kiểm tra điều kiện
//     if (fullName !== "" && email !== "" && destination !== "" && checkInDate !== "" && checkOutDate !== "" && rooms !== "" && adults !== "") {
//         // Hiển thị thông báo
//         alert("You have successfully registered. Please wait for a response from the email.");
//     } else {
//         alert("Please fill in all the required fields.");
//     }
// });