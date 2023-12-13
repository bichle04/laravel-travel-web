'use strict';

/**
 * GO TO TOP
 */

// Khi sự kiện scroll xảy ra trên cửa sổ, gọi hàm scrollFunction()
window.onscroll = function () {
    scrollFunction();
};

// Hàm scrollFunction() kiểm tra vị trí cuộn và hiển thị lên button khi vị trí vượt quá 20px
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";           // Nếu vị trí cuộn vượt quá 20px, hiển thị button
    } else {
        document.getElementById("myBtn").style.display = "none";            // Ngược lại, ẩn button
    }
}

// Khi người dùng nhấp chuột vào button, cuộn lên đầu trang một cách mượt (smooth)
function topFunction() {
    window.scrollTo({           // Sử dụng window.scrollTo() để cuộn đến vị trí top với hiệu ứng smooth
        top: 0,
        behavior: "smooth"
    });
}