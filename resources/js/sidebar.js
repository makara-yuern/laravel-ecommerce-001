function toggleSidebarDropdown(e) {
    e.preventDefault();
    const parent = e.target.closest('.sidebar-dropdown');
    const submenu = parent.querySelector('.sidebar-submenu');
    const arrow = parent.querySelector('.sidebar-dropdown-arrow i');
    if (submenu.style.display === 'none' || submenu.style.display === '') {
        submenu.style.display = 'block';
        arrow.classList.remove('fa-circle-chevron-down');
        arrow.classList.add('fa-circle-chevron-up');
    } else {
        submenu.style.display = 'none';
        arrow.classList.remove('fa-circle-chevron-up');
        arrow.classList.add('fa-circle-chevron-down');
    }
}

window.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.sidebar-dropdown > a').forEach(function(link) {
        link.addEventListener('click', toggleSidebarDropdown);
    });
});
