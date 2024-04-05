document.getElementById('menu-toggle').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    var content = document.getElementById('content');
    sidebar.classList.toggle('sidebar-hidden');
    content.classList.toggle('content-hidden');
  });

document.addEventListener("DOMContentLoaded", function() {
    const dashboardLink = document.getElementById('dashboard-link');
    const authorLink = document.getElementById('author-link');
    const karyaLink = document.getElementById('karya-link')
    const dashboardContent = document.getElementById('content');
    const authorContent = document.getElementById('author-content');
    const karyaContent = document.getElementById('karya-content');
  

    // Fungsi untuk menampilkan konten dashboard
    function showDashboard() {
        dashboardContent.style.display = 'block';
        authorContent.style.display = 'none';
        karyaContent.style.display = 'none';
    }

    // Fungsi untuk menampilkan konten author
    function showAuthor() {
        dashboardContent.style.display = 'none';
        authorContent.style.display = 'block';
        karyaContent.style.display = 'none';
    }

    function showKarya() {
        dashboardContent.style.display = 'none';
        authorContent.style.display = 'none';
        karyaContent.style.display = 'block';
    }


    // Tambahkan event listener untuk tautan dashboard
    dashboardLink.addEventListener('click', function(event) {
        event.preventDefault(); // Hindari navigasi ke "#" (atau halaman lain)
        showDashboard();
    });

    // Tambahkan event listener untuk tautan author
    authorLink.addEventListener('click', function(event) {
        event.preventDefault(); // Hindari navigasi ke "#" (atau halaman lain)
        showAuthor();
    });


    // Tambahkan event listener untuk tautan karya
    karyaLink.addEventListener('click', function(event) {
        event.preventDefault(); // Hindari navigasi ke "#" (atau halaman lain)
        showKarya();
    });

    // Tampilkan dashboard secara default saat halaman dimuat
    showDashboard();
});


