

Hàm checkAdmin (req, resp, next) kiểm tra xem người dùng có đăng nhập hay không. 

Nếu không, nó sẽ chuyển hướng người dùng đến trang đăng nhập. 

Nếu có, nó sẽ kiểm tra xem người dùng có phân quyền quản trị hay không. Nếu có, nó sẽ tiếp tục thêm bước tiếp theo; 
Ngược lại, nó se chuyển hướng người dùng về trang đăng nhập.
