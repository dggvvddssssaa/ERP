<?php
session_start();
// Kiểm tra đăng nhập
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

require_once '../../config/db_connection.php';

// --- CẤU HÌNH PHÂN TRANG ---
$limit = 10;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

// Tính tổng số bản ghi
$total_result = $conn->query("SELECT COUNT(*) as total FROM contacts");
$total_row = $total_result->fetch_assoc();
$total_records = $total_row['total'];
$total_pages = ceil($total_records / $limit);

// LẤY DỮ LIỆU
$sql = "SELECT * FROM contacts ORDER BY created_at DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

$path = "../";
?>

<!-- Include các phần dùng chung -->
<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="content">
    <!-- Topbar -->
    <?php include '../includes/topbar.php'; ?>

    <!-- Breadcrumb & Tiêu đề -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="../index.php">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                </ol>
            </nav>
            <h2 class="h4">Danh sách khách hàng liên hệ</h2>
        </div>
    </div>

    <!-- Bảng dữ liệu chính -->
    <div class="card card-body shadow border-0 table-wrapper" style="overflow-x: auto; overflow-y: visible;">
        <table class="table user-table table-hover align-items-center">
            <thead>
                <tr>
                    <th class="border-bottom" width="5%">STT</th>
                    <th class="border-bottom">Họ tên</th>
                    <th class="border-bottom">Email / SĐT</th>
                    <th class="border-bottom">Nội dung</th>
                    <th class="border-bottom">Ngày gửi</th>
                    <th class="border-bottom">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0):
                    $stt = $offset;
                    while ($row = $result->fetch_assoc()):
                        $stt++;
                        $avatarChar = mb_substr($row['full_name'], 0, 1);
                ?>
                        <tr>
                            <td class="text-center fw-bold"><?php echo $stt; ?></td>

                            <!-- Cột Họ tên -->
                            <td>
                                <a href="#" class="d-flex align-items-center">
                                    <div class="avatar d-flex align-items-center justify-content-center fw-bold rounded bg-secondary text-white me-3">
                                        <span><?php echo $avatarChar; ?></span>
                                    </div>
                                    <div class="d-block">
                                        <span class="fw-bold"><?php echo htmlspecialchars($row['full_name']); ?></span>
                                        <div class="small text-gray">ID: #<?php echo $row['id']; ?></div>
                                    </div>
                                </a>
                            </td>

                            <!-- Cột Email/SĐT -->
                            <td>
                                <span class="fw-normal d-flex align-items-center">
                                    <svg class="icon icon-xxs text-gray-500 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <?php echo htmlspecialchars($row['email']); ?>
                                </span>
                                <span class="fw-normal d-flex align-items-center mt-1">
                                    <svg class="icon icon-xxs text-gray-500 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                    </svg>
                                    <?php echo htmlspecialchars($row['phone']); ?>
                                </span>
                            </td>

                            <!-- Cột Nội dung -->
                            <td>
                                <span class="fw-bold"><?php echo htmlspecialchars($row['subject']); ?></span>
                                <div class="small text-gray text-wrap" style="max-width: 250px;">
                                    <?php echo htmlspecialchars(substr($row['message'], 0, 50)) . '...'; ?>
                                </div>
                            </td>

                            <!-- Cột Ngày gửi -->
                            <td>
                                <span class="fw-normal"><?php echo date('d/m/Y', strtotime($row['created_at'])); ?></span>
                            </td>

                            <!-- Cột Hành động -->
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                                        <!-- NÚT XEM CHI TIẾT (Kích hoạt Modal) -->
                                        <!-- Ta lưu dữ liệu vào các thuộc tính data-* -->
                                        <a class="dropdown-item d-flex align-items-center btn-view-detail"
                                            href="#"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalDetail"
                                            data-name="<?php echo htmlspecialchars($row['full_name']); ?>"
                                            data-email="<?php echo htmlspecialchars($row['email']); ?>"
                                            data-phone="<?php echo htmlspecialchars($row['phone']); ?>"
                                            data-subject="<?php echo htmlspecialchars($row['subject']); ?>"
                                            data-message="<?php echo htmlspecialchars($row['message']); ?>"
                                            data-date="<?php echo date('H:i d/m/Y', strtotime($row['created_at'])); ?>">
                                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            Xem chi tiết
                                        </a>

                                        <div role="separator" class="dropdown-divider my-1"></div>

                                        <a class="dropdown-item d-flex align-items-center text-danger" href="delete_contact.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Xóa liên hệ này?')">
                                            <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            Xóa
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Chưa có dữ liệu</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- PHẦN PHÂN TRANG -->
        <?php if ($total_pages > 1): ?>
            <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <nav aria-label="Page navigation">
                    <ul class="pagination mb-0">
                        <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                            <a class="page-link" href="<?php if ($page > 1) echo "?page=" . ($page - 1);
                                                        else echo "#"; ?>">Previous</a>
                        </li>
                        <?php
                        $start = max(1, $page - 2);
                        $end = min($total_pages, $page + 2);
                        if ($start > 1) echo '<li class="page-item"><a class="page-link" href="?page=1">1</a></li>';
                        for ($i = $start; $i <= $end; $i++) {
                            $active = ($i == $page) ? 'active' : '';
                            echo '<li class="page-item ' . $active . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($end < $total_pages) echo '<li class="page-item"><a class="page-link" href="?page=' . $total_pages . '">' . $total_pages . '</a></li>';
                        ?>
                        <li class="page-item <?php if ($page >= $total_pages) echo 'disabled'; ?>">
                            <a class="page-link" href="<?php if ($page < $total_pages) echo "?page=" . ($page + 1);
                                                        else echo "#"; ?>">Next</a>
                        </li>
                    </ul>
                </nav>
                <div class="fw-normal small mt-4 mt-lg-0">
                    Hiển thị <b><?php echo ($total_records > 0) ? $offset + 1 : 0; ?></b> đến <b><?php echo min($offset + $limit, $total_records); ?></b> trong tổng số <b><?php echo $total_records; ?></b> bản ghi
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>
</main>

<!-- === MODAL CHI TIẾT LIÊN HỆ === -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalDetailLabel">Chi Tiết Liên Hệ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="fw-bold text-gray-500">Người gửi:</label>
                    <div id="view_name" class="fw-bold text-dark fs-5"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="fw-bold text-gray-500">Email:</label>
                        <div id="view_email" class="text-info"></div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold text-gray-500">Số điện thoại:</label>
                        <div id="view_phone"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="fw-bold text-gray-500">Ngày gửi:</label>
                    <div id="view_date" class="text-muted small"></div>
                </div>
                <hr>
                <div class="mb-3">
                    <label class="fw-bold text-gray-500">Chủ đề:</label>
                    <div id="view_subject" class="fw-bold"></div>
                </div>
                <div class="mb-3">
                    <label class="fw-bold text-gray-500">Nội dung tin nhắn:</label>
                    <div class="p-3 bg-light rounded border" id="view_message" style="white-space: pre-wrap;"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT XỬ LÝ -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // 1. Fix lỗi Dropdown bị khuất
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl, {
                popperConfig: function(defaultBsPopperConfig) {
                    return {
                        ...defaultBsPopperConfig,
                        strategy: 'fixed'
                    };
                }
            });
        });

        // 2. Xử lý hiển thị dữ liệu lên Modal
        var modalDetail = document.getElementById('modalDetail');
        modalDetail.addEventListener('show.bs.modal', function(event) {
            // Nút nào được bấm?
            var button = event.relatedTarget;

            // Lấy dữ liệu từ data attributes
            var name = button.getAttribute('data-name');
            var email = button.getAttribute('data-email');
            var phone = button.getAttribute('data-phone');
            var subject = button.getAttribute('data-subject');
            var message = button.getAttribute('data-message');
            var date = button.getAttribute('data-date');

            // Gán dữ liệu vào Modal
            modalDetail.querySelector('#view_name').textContent = name;
            modalDetail.querySelector('#view_email').textContent = email;
            modalDetail.querySelector('#view_phone').textContent = phone;
            modalDetail.querySelector('#view_subject').textContent = subject;
            modalDetail.querySelector('#view_message').textContent = message;
            modalDetail.querySelector('#view_date').textContent = date;
        });
    });
</script>