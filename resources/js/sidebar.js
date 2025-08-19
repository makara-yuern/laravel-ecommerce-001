window.toggleSidebarDropdown = toggleSidebarDropdown;
function toggleSidebarDropdown(e) {
    e.preventDefault();
    const arrow = e.target.closest('.sidebar-dropdown-arrow');
    const dropdownKey = arrow.getAttribute('data-dropdown');
    const parent = arrow.closest('.sidebar-dropdown');
    const submenu = parent.querySelector('.sidebar-submenu[data-dropdown="' + dropdownKey + '"]');
    const icon = arrow.querySelector('i');
    let openDropdowns = JSON.parse(localStorage.getItem('openSidebarDropdowns') || '{}');
    if (submenu.style.display === 'none' || submenu.style.display === '') {
        submenu.style.display = 'block';
        icon.classList.remove('fa-circle-chevron-down');
        icon.classList.add('fa-circle-chevron-up');
        openDropdowns[dropdownKey] = true;
    } else {
        submenu.style.display = 'none';
        icon.classList.remove('fa-circle-chevron-up');
        icon.classList.add('fa-circle-chevron-down');
        openDropdowns[dropdownKey] = false;
    }
    localStorage.setItem('openSidebarDropdowns', JSON.stringify(openDropdowns));
}

// On page load, restore open state for dropdowns
document.addEventListener('DOMContentLoaded', function() {
    let openDropdowns = JSON.parse(localStorage.getItem('openSidebarDropdowns') || '{}');
    document.querySelectorAll('.sidebar-submenu[data-dropdown]').forEach(function(submenu) {
        const key = submenu.getAttribute('data-dropdown');
        const arrow = document.querySelector('.sidebar-dropdown-arrow[data-dropdown="' + key + '"] i');
        if (openDropdowns[key]) {
            submenu.style.display = 'block';
            if (arrow) {
                arrow.classList.remove('fa-circle-chevron-down');
                arrow.classList.add('fa-circle-chevron-up');
            }
        } else {
            submenu.style.display = 'none';
            if (arrow) {
                arrow.classList.remove('fa-circle-chevron-up');
                arrow.classList.add('fa-circle-chevron-down');
            }
        }
    });
});

