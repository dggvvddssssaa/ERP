<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login.php");
    exit();
}
require_once '../../config/db_connection.php';

// Lấy danh sách tài liệu
$sql = "SELECT * FROM documents ORDER BY created_at DESC";
$result = $conn->query($sql);
$path = "../";
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="content">
    <?php include '../includes/topbar.php'; ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kho Tài liệu</li>
                </ol>
            </nav>
            <h2 class="h4">Quản lý Tài liệu & Biểu mẫu</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="form.php" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Upload Tài liệu
            </a>
        </div>
    </div>

    <!-- Lưu ý: style overflow-y: visible để menu không bị cắt -->
    <div class="card card-body shadow border-0 table-wrapper" style="overflow-x: auto; overflow-y: visible;">
        <table class="table user-table table-hover align-items-center">
            <thead>
                <tr>
                    <th class="border-bottom">Tên Tài liệu</th>
                    <th class="border-bottom">Loại File</th>
                    <th class="border-bottom">Dung lượng</th>
                    <th class="border-bottom">Lượt tải</th>
                    <th class="border-bottom">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <span class="fw-bold"><?php echo htmlspecialchars($row['title']); ?></span><br>
                                <small class="text-muted"><?php echo htmlspecialchars(substr($row['description'], 0, 50)); ?>...</small>
                            </td>
                            <td>
                                <?php
                                $badge = 'bg-secondary';
                                if ($row['file_type'] == 'pdf') $badge = 'bg-danger';
                                if ($row['file_type'] == 'word') $badge = 'bg-primary';
                                if ($row['file_type'] == 'excel') $badge = 'bg-success';
                                ?>
                                <span class="badge <?php echo $badge; ?>"><?php echo strtoupper($row['file_type']); ?></span>
                            </td>
                            <td><?php echo $row['file_size']; ?></td>
                            <td><?php echo $row['download_count']; ?></td>

                            <!-- CỘT HÀNH ĐỘNG DROPDOWN -->
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        </svg>
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">

                                        <!-- Tải về -->
                                        <a class="dropdown-item d-flex align-items-center" href="../../assets/uploads/documents/<?php echo $row['file_path']; ?>" target="_blank">
                                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                            Tải xuống
                                        </a>

                                        <!-- Sửa -->
                                        <a class="dropdown-item d-flex align-items-center" href="form.php?id=<?php echo $row['id']; ?>">
                                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 9.414V13h3.586l6.828-6.828a2 2 0 000-2.828z"></path>
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                            </svg>
                                            Sửa
                                        </a>

                                        <!-- Xóa -->
                                        <div role="separator" class="dropdown-divider my-1"></div>
                                        <a class="dropdown-item d-flex align-items-center text-danger" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Xóa tài liệu này?')">
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
                        <td colspan="5" class="text-center py-4">Chưa có tài liệu nào.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php include '../includes/footer.php'; ?>
</main>

<!-- SCRIPT GIÚP DROPDOWN KHÔNG BỊ CẮT BỞI BẢNG -->
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