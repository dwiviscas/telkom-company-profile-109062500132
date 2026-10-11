<?php
require_once 'config/database.php';
$pageTitle = 'Beranda - Telkom University';
require 'includes/header.php';
?>

<section class="hero">
    <div class="container hero-grid">

        <div class="hero-content">
            <span class="eyebrow">Praktikum Web Development</span>

            <h1>
                Belajar membangun website dinamis sambil
                mempraktikkan Git.
            </h1>

            <p class="lead">
                Proyek simulasi ini menggunakan HTML, CSS,
                PHP native, MySQL/MariaDB, dan workflow Git
                lokal serta GitHub.
            </p>

            <div class="hero-actions">
                <a class="btn btn-primary" href="programs.php">
                    Lihat Program Studi
                </a>

                <a class="btn btn-secondary" href="news.php">
                    Baca Berita
                </a>
            </div>
        </div>

        <aside class="hero-panel">
            <span class="badge">Project Milestone</span>
            <h3>Target praktikum</h3>

            <div class="milestone-grid">
                <div class="milestone-item">
                    <strong>5+</strong>
                    <span>Halaman PHP</span>
                </div>

                <div class="milestone-item">
                    <strong>3</strong>
                    <span>Tabel database</span>
                </div>

                <div class="milestone-item">
                    <strong>8+</strong>
                    <span>Commit terarah</span>
                </div>

                <div class="milestone-item">
                    <strong>1</strong>
                    <span>Remote GitHub</span>
                </div>
            </div>
        </aside>

    </div>
</section>
<?php require 'includes/footer.php'; ?>
