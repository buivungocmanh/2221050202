document.addEventListener('DOMContentLoaded', function() {
    const travelForm = document.getElementById('travel-form');

    if (travelForm) {
        travelForm.addEventListener('submit', function(event) {
            event.preventDefault(); 

            // Lấy dữ liệu từ form
            const destination = document.getElementById('destination').value.trim();
            const checkIn = document.getElementById('check-in').value;
            const checkOut = document.getElementById('check-out').value;
            const guests = document.getElementById('guests').value;

            // Kiểm tra tính hợp lệ cơ bản
            if (!destination || !checkIn || !checkOut || !guests) {
                alert('Vui lòng điền đầy đủ tất cả các trường!');
                return;
            }

            // Kiểm tra logic ngày tháng
            const dateIn = new Date(checkIn);
            const dateOut = new Date(checkOut);
            const today = new Date();
            today.setHours(0, 0, 0, 0); 

            if (dateOut <= dateIn) {
                alert('Ngày về phải sau ngày đi!');
                return;
            }

            if (dateIn < today) {
                alert('Ngày đi không thể là ngày trong quá khứ!');
                return;
            }

            // Thông báo thành công (giả lập)
            alert(`🎉 Tìm kiếm thành công! 
            \nBạn muốn đi: ${destination}
            \nTừ: ${checkIn}
            \nĐến: ${checkOut}
            \nSố khách: ${guests}
            \n(Trong dự án thực tế, trang này sẽ chuyển sang trang kết quả tìm kiếm!)`);

            // Xóa form sau khi gửi (tùy chọn)
            travelForm.reset();
        });
    }

    // --- Logic cho Trang Đăng Nhập (login.html - nếu bạn tạo) ---
    // Giả định login.html sử dụng form có id="login-form", input id="username", id="password"
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Logic đăng nhập giả lập
            if (username === 'test' && password === '123456') {
                alert('Đăng nhập thành công! Chào mừng trở lại!');
                window.location.href = 'index.html'; 
            } else {
                alert('Tên đăng nhập hoặc mật khẩu không đúng!');
            }
        });
    }
});