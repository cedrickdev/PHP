<?php
require_once "assets.php";
$title = "main";
function dropDownItem(string $link, string $text): void{

    $text = <<<HTML
    <li><a href="$link">$text</a></li>
HTML;

    echo $text;
}

$name = 

?>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.php" class="logo d-flex align-items-center me-auto">

            <h1><?php $title ?><span>e</span>Business</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <?php dropDownItem("a.com", "list A") ?>
                        <?php dropDownItem("a.com", "list B") ?>
                        <?php dropDownItem("a.com", "list C") ?>
                </li>
            </ul>
            <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
</header>

