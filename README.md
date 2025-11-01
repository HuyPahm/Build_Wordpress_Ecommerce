# 👋 Huy-commerce

Đặc tả: 
Dự án: Hệ thống quản lý thương mại điện tử My Chicken 
cung cấp một nền tảng trực tuyến cho phép khách hàng xem, chọn mua, và thanh toán cho các sản phẩm gia cầm. Hệ thống cũng cung cấp cho quản trị viên các công cụ để quản lý sản phẩm, đơn hàng, tồn kho, khách hàng và vận hành.

Hệ thống được mô hình hóa theo DFD Mức 0, bao gồm một tiến trình trung tâm và 5 tác nhân ngoài:

Khách hàng: Người mua hàng.

Quản trị viên: Người vận hành hệ thống.

Nhà cung cấp: Nguồn nhập hàng.

Cổng thanh toán: Đối tác xử lý giao dịch tài chính.

Đơn vị vận chuyển: Đối tác giao hàng.


##  1. Quản lý người dùng

- Khách hàng có thể đăng ký và đăng nhập tài khoản để sử dụng các dịch vụ của hệ thống (như họ tên, email, số điện thoại, địa chỉ, lịch sử mua hàng, wishlist) .

- Khách hàng có thể tìm kiếm sản phẩm trên trang chủ, sử dụng bộ lọc theo thương hiệu, sản phẩm mới về, sản phẩm bán chạy.

- Khách hàng có thể lưu sản phẩm yêu thích vào wishlist để theo dõi sau.

- Hệ thống cung cấp chat bot và mục hỗ trợ.

##  2. Quản lý sản phẩm

- Quản lý danh mục sản phẩm và thông tin sản phẩm (hệ thống kinh doanh nhiều loại sản phẩm khác nhau do đó cần)

- Quản trị viên có thể thêm mới, sửa chữa, xóa bỏ sản phẩm khi có thay đổi.

- Các thông tin sản phẩm bao gồm: mã sản phẩm, tên sản phẩm, mô tả chi tiết, thương hiệu, hình ảnh, số lượng tồn kho, giá bán, thời gian bảo hành, chính sách đổi trả.

- Hệ thống cho phép quản lý tồn kho và cập nhật tự động khi phát sinh giao dịch.

##  3. Quản lý đơn hàng

- Khách hàng lựa chọn sản phẩm và đưa vào giỏ hàng (cart).

- Khi đặt hàng, hệ thống ghi nhận các thông tin cần thiết.
- Hệ thống hỗ trợ quy cách đóng gói và tùy chọn giao hàng nhanh 2h.

- Nếu sản phẩm không đủ hàng, hệ thống sẽ thông báo cho khách.

- Đơn hàng hợp lệ sẽ được chuyển sang bước thanh toán và giao hàng.

##  4. Thanh toán & Giao hàng

- Hệ thống hỗ trợ nhiều cổng thanh toán trực tuyến (thẻ ngân hàng, ví điện tử…) hoặc thanh toán khi nhận hàng.
- Nếu khách hàng hủy đơn hoặc đổi trả, hệ thống ghi nhận lý do và tiến hành hoàn tiền theo chính sách.

##  5. Quản lý khuyến mãi

- Quản trị viên có thể thiết lập và quản lý các chương trình khuyến mãi.
- Hệ thống tự động kiểm tra điều kiện và áp dụng khuyến mãi khi khách thanh toán.

##  6. Quản lý bảo hành & Đổi trả

- Khách hàng có thể yêu cầu bảo hành hoặc đổi trả theo chính sách.
- Khách hàng có thể gửi yêu cầu bảo hành hoặc tra cứu trạng thái bảo hành trực tuyến.
- 
##  7. Báo cáo & Phân tích
- Báo cáo doanh thu theo ngày, tuần, tháng.
- Báo cáo tồn kho sản phẩm.
  
##  8. Quản trị hệ thống
- Quản lý thông tin khách hàng: tìm kiếm theo mã khách hàng, xem lịch sử giao dịch.
- Quản lý phân quyền: phân quyền cho các tài khoản quản trị.

---

##  Chiến lược & Công cụ
- 📝 Lập biểu đồ **BFD(mức ngữ cảnh), DFD (các cấp), ERD(mức logic)** và xây dựng web thông qua WordPress, WooCommerce.
- 🎨 Theme tùy biến dựa theo đặc tả.
- 🔌 Plugin quản lý bán hàng, SEO, bảo mật (?).
- 🗄️ Quản lý cơ sở dữ liệu.
- ☁️ Triển khai (?)

---

## 🚀  **BFD mức ngữ cảnh**



<img width="1106" height="428" alt="image" src="https://github.com/user-attachments/assets/0c4b154c-5ea5-4b02-bf2b-18cecab152a9" />

DFD mức 0:

<img width="1108" height="989" alt="image" src="https://github.com/user-attachments/assets/a7113b4b-17d7-4ad3-b1a6-1a9e1b0dd07b" />

DFD mức 1:

<img width="1107" height="985" alt="image" src="https://github.com/user-attachments/assets/83bcfb38-9f00-4af9-ac24-bae4a1c9e8e2" />

<img width="1107" height="850" alt="image" src="https://github.com/user-attachments/assets/e84ccbad-9828-477f-9f67-2c1644cea712" />


DFD mức 2(Quản lý khách hàng):
<img width="1107" height="634" alt="image" src="https://github.com/user-attachments/assets/2ecef440-f9e2-43e4-b37c-9501a1275294" />

DFD mức 2(Quản lý kho):

<img width="1107" height="870" alt="image" src="https://github.com/user-attachments/assets/dbd9a26d-042b-49d1-ac54-f66e40a367ea" />

DFD mức 2(Quản lý đơn hàng):

<img width="1107" height="716" alt="image" src="https://github.com/user-attachments/assets/52a57216-b981-4e27-8824-e43fb0272bc3" />

DFD mức 2(Quản lý thanh toán):

<img width="1107" height="971" alt="image" src="https://github.com/user-attachments/assets/3ab8a949-f2ce-44f0-9128-ce610e3f3445" />

DFD mức 2(Quản lý sản phẩm):

<img width="1107" height="639" alt="image" src="https://github.com/user-attachments/assets/861f801d-6218-46c1-b52a-9ef1d7631db6" />

DFD mức 2(Quản lý vận chuyển):

<img width="976" height="858" alt="image" src="https://github.com/user-attachments/assets/523da73c-3ef2-4dad-8fe3-05a40fb20534" />

DFD mức 2(Quản lý khuyến mãi):

<img width="1107" height="505" alt="image" src="https://github.com/user-attachments/assets/ce597d84-a5dc-43d0-b357-87f7b2964cfa" />

DFD mức 2(Quản lý báo cáo):

<img width="924" height="424" alt="image" src="https://github.com/user-attachments/assets/0e710f75-f2ee-4797-b523-e954bcd8ce94" />






---

