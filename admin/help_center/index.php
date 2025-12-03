<?php
session_start();
// 1. Check Login
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}

require_once '../../config/db_connection.php';

// --- XỬ LÝ PHÂN TRANG ---
$limit = 10; // Số dòng mỗi trang
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

// Tính tổng số bản ghi
$total_result = $conn->query("SELECT COUNT(*) as total FROM help_items");
$total_row = $total_result->fetch_assoc();
$total_records = $total_row['total'];
$total_pages = ceil($total_records / $limit);

// Lấy danh sách items (Có phân trang)
$sql = "SELECT h.*, c.name as cat_name 
        FROM help_items h 
        LEFT JOIN help_categories c ON h.category_id = c.id 
        ORDER BY h.created_at DESC 
        LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

$path = "../";
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="content">

    <!-- Topbar -->
    <?php include '../includes/topbar.php'; ?>

    <!-- Breadcrumbs -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="../index.php"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hướng dẫn sử dụng</li>
                </ol>
            </nav>
            <h2 class="h4">Thư viện Hướng dẫn</h2>
            <p class="mb-0">Quản lý video và tài liệu hướng dẫn cho người dùng.</p>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="form.php" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Thêm Mới
            </a>
        </div>
    </div>

    <!-- Table -->
    <!-- Đã xóa class table-responsive để tránh lỗi cắt popup, thay bằng style overflow -->
    <div class="card card-body shadow border-0 table-wrapper" style="overflow-x: auto; overflow-y: visible;">
        <table class="table user-table table-hover align-items-center">
            <thead>
                <tr>
                    <th class="border-bottom">Tiêu đề</th>
                    <th class="border-bottom">Loại</th>
                    <th class="border-bottom">Danh mục</th>
                    <th class="border-bottom">Liên kết / File</th>
                    <th class="border-bottom">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <a href="#" class="d-flex align-items-center">
                                    <?php if ($row['thumbnail']): ?>
                                        <img src="../../assets/uploads/help/<?php echo $row['thumbnail']; ?>" class="avatar rounded me-3" style="object-fit:cover; width: 50px; height: 50px;">
                                    <?php else: ?>
                                        <div class="avatar rounded bg-secondary me-3 d-flex align-items-center justify-content-center text-white" style="width: 50px; height: 50px;"><i class="fas fa-image"></i></div>
                                    <?php endif; ?>
                                    <span class="fw-bold"><?php echo htmlspecialchars($row['title']); ?></span>
                                </a>
                            </td>
                            <td>
                                <?php if ($row['type'] == 'video'): ?>
                                    <span class="badge bg-danger"><i class="fas fa-video me-1"></i> Video</span>
                                <?php else: ?>
                                    <span class="badge bg-info text-dark"><i class="fas fa-file-pdf me-1"></i> Tài liệu</span>
                                <?php endif; ?>
                            </td>
                            <td><span class="fw-normal"><?php echo htmlspecialchars($row['cat_name']); ?></span></td>
                            <td>
                                <?php if ($row['type'] == 'video'): ?>
                                    <?php if (!empty($row['video_link'])): ?>
                                        <a href="<?php echo $row['video_link']; ?>" target="_blank" class="btn btn-sm btn-outline-primary">Xem Video</a>
                                    <?php else: ?>
                                        <span class="text-muted">File Upload</span>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="../../assets/uploads/help/<?php echo $row['file_path']; ?>" target="_blank" class="btn btn-sm btn-outline-info">Tải File</a>
                                <?php endif; ?>
                            </td>

                            <!-- ACTION DROPDOWN -->
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        </svg>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                                        <a class="dropdown-item d-flex align-items-center" href="form.php?id=<?php echo $row['id']; ?>">
                                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 9.414V13h3.586l6.828-6.828a2 2 0 000-2.828z"></path>
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Sửa
                                        </a>
                                        <div role="separator" class="dropdown-divider my-1"></div>
                                        <a class="dropdown-item d-flex align-items-center text-danger" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa mục này?');">
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
                        <td colspan="5" class="text-center py-4">Chưa có dữ liệu hướng dẫn nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- PHÂN TRANG -->
        <?php if ($total_pages > 1): ?>
            <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <nav aria-label="Page navigation">
                    <ul class="pagination mb-0">
                        <!-- Nút Previous -->
                        <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                            <a class="page-link" href="<?php if ($page > 1) echo "?page=" . ($page - 1);
                                                        else echo "#"; ?>">Previous</a>
                        </li>

                        <!-- Các nút số trang -->
                        <?php
                        $start = max(1, $page - 2);
                        $end = min($total_pages, $page + 2);

                        if ($start > 1) {
                            echo '<li class="page-item"><a class="page-link" href="?page=1">1</a></li>';
                            if ($start > 2) echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                        }

                        for ($i = $start; $i <= $end; $i++) {
                            $active = ($i == $page) ? 'active' : '';
                            echo '<li class="page-item ' . $active . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }

                        if ($end < $total_pages) {
                            if ($end < $total_pages - 1) echo '<li class="page-item disabled"><span class="page-link">...</span></li>';
                            echo '<li class="page-item"><a class="page-link" href="?page=' . $total_pages . '">' . $total_pages . '</a></li>';
                        }
                        ?>

                        <!-- Nút Next -->
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

    <?php include '../includes/footer.php'; ?>
</main>

<!-- SCRIPT FIX LỖI DROPDOWN BỊ KHUẤT -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
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
    });
</script>