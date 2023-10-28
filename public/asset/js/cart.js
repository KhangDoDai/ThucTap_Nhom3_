function checkAll() {
    var checkboxes = document.querySelectorAll('.form-check-input'); // Lấy danh sách tất cả các checkbox

    var selectAllCheckbox = document.getElementById('selectAll'); // Lấy checkbox "Chọn tất cả"

    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = selectAllCheckbox
            .checked; // Đặt giá trị checked của các checkbox khác bằng với giá trị checked của checkbox "Chọn tất cả"
    }
}

function toggleCategories() {
    var categories = document.getElementById("collapseCategories");
    if (categories.style.display === "none") {
        categories.style.display = "block";
    } else {
        categories.style.display = "none";
    }
}

