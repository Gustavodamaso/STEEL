<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="img/Logo 1.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="dashboard.css" />
        <title>DASHBOARD - POLISTAMPO</title>
    </head>
    <body>
        <!-- start: Sidebar -->
        <div class="sidebar">
            <a class="sidebar-brand">
                <img src="img/Logo 1.png" alt="" class="sidebar-brand-image" />
                <span class="sidebar-brand-text">Olá, Mariana</span>
            </a>
            <div class="sidebar-menu-wrapper">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-title">
                        <span class="sidebar-menu-title-expanded">MENU</span>
                        <span class="sidebar-menu-title-collapsed"><i class="ri-more-fill"></i></span>
                    </li>
                    <li class="sidebar-menu-item" data-sidebar-menu-item>
                        <a href="#" class="sidebar-menu-item-link" data-sidebar-menu-toggle>
                            <span class="sidebar-menu-item-link-icon">
                                <i class="ri-home-5-line"></i>
                            </span>
                            <span class="sidebar-menu-item-link-text">Página Inicial</span>
                            <span class="sidebar-menu-item-link-arrow">
                                <i class="ri-arrow-right-s-line"></i>
                            </span>
                        </a>
                        <ul class="sidebar-submenu" data-sidebar-menu-dropdown>
                            <li class="sidebar-submenu-item" data-sidebar-submenu-item>
                                <a href="#" class="sidebar-submenu-item-link" data-sidebar-submenu-toggle>
                                    <span class="sidebar-submenu-item-link-text">Estoque</span>
                                    <span class="sidebar-submenu-item-link-arrow">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </span>
                                </a>
                                <ul class="sidebar-submenu" data-sidebar-submenu-dropdown>
                                    <li class="sidebar-submenu-item">
                                        <a href="ad_materiais.php" class="sidebar-submenu-item-link">
                                            <span class="sidebar-submenu-item-link-text">Adicionar Materiais</span>
                                        </a>
                                        <a href="#" class="sidebar-submenu-item-link">
                                            <span class="sidebar-submenu-item-link-text">Editar Materiais</span>
                                        </a>
                                        <a href="#" class="sidebar-submenu-item-link">
                                            <span class="sidebar-submenu-item-link-text">Visualizar Estoque</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Reuniões</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">LMS</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Crypto</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item" data-sidebar-menu-item>
                        <a href="#" class="sidebar-menu-item-link" data-sidebar-menu-toggle>
                            <span class="sidebar-menu-item-link-icon">
                                <i class="ri-apps-2-line"></i>
                            </span>
                            <span class="sidebar-menu-item-link-text">Apps</span>
                            <span class="sidebar-menu-item-link-arrow">
                                <i class="ri-arrow-right-s-line"></i>
                            </span>
                        </a>
                        <ul class="sidebar-submenu" data-sidebar-menu-dropdown>
                            <li class="sidebar-submenu-item" data-sidebar-submenu-item>
                                <a href="#" class="sidebar-submenu-item-link" data-sidebar-submenu-toggle>
                                    <span class="sidebar-submenu-item-link-text">Analytics</span>
                                    <span class="sidebar-submenu-item-link-arrow">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </span>
                                </a>
                                <ul class="sidebar-submenu" data-sidebar-submenu-dropdown>
                                    <li class="sidebar-submenu-item">
                                        <a href="#" class="sidebar-submenu-item-link">
                                            <span class="sidebar-submenu-item-link-text">Test</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Ecommerce</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">LMS</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Crypto</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-title">
                        <span class="sidebar-menu-title-expanded">MENU</span>
                        <span class="sidebar-menu-title-collapsed"><i class="ri-more-fill"></i></span>
                    </li>
                    <li class="sidebar-menu-item" data-sidebar-menu-item>
                        <a href="#" class="sidebar-menu-item-link" data-sidebar-menu-toggle>
                            <span class="sidebar-menu-item-link-icon">
                                <i class="ri-dashboard-3-line"></i>
                            </span>
                            <span class="sidebar-menu-item-link-text">Dashboard</span>
                            <span class="sidebar-menu-item-link-arrow">
                                <i class="ri-arrow-right-s-line"></i>
                            </span>
                        </a>
                        <ul class="sidebar-submenu" data-sidebar-menu-dropdown>
                            <li class="sidebar-submenu-item" data-sidebar-submenu-item>
                                <a href="#" class="sidebar-submenu-item-link" data-sidebar-submenu-toggle>
                                    <span class="sidebar-submenu-item-link-text">Analytics</span>
                                    <span class="sidebar-submenu-item-link-arrow">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </span>
                                </a>
                                <ul class="sidebar-submenu" data-sidebar-submenu-dropdown>
                                    <li class="sidebar-submenu-item">
                                        <a href="#" class="sidebar-submenu-item-link">
                                            <span class="sidebar-submenu-item-link-text">Test</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Ecommerce</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">LMS</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Crypto</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item" data-sidebar-menu-item>
                        <a href="#" class="sidebar-menu-item-link" data-sidebar-menu-toggle>
                            <span class="sidebar-menu-item-link-icon">
                                <i class="ri-apps-2-line"></i>
                            </span>
                            <span class="sidebar-menu-item-link-text">Aplicativos</span>
                            <span class="sidebar-menu-item-link-arrow">
                                <i class="ri-arrow-right-s-line"></i>
                            </span>
                        </a>
                        <ul class="sidebar-submenu" data-sidebar-menu-dropdown>
                            <li class="sidebar-submenu-item" data-sidebar-submenu-item>
                                <a href="#" class="sidebar-submenu-item-link" data-sidebar-submenu-toggle>
                                    <span class="sidebar-submenu-item-link-text">Analytics</span>
                                    <span class="sidebar-submenu-item-link-arrow">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </span>
                                </a>
                                <ul class="sidebar-submenu" data-sidebar-submenu-dropdown>
                                    <li class="sidebar-submenu-item" data-sidebar-submenu-item>
                                        <a href="#" class="sidebar-submenu-item-link" data-sidebar-submenu-toggle>
                                            <span class="sidebar-submenu-item-link-text">Test</span>
                                            <span class="sidebar-submenu-item-link-arrow">
                                                <i class="ri-arrow-right-s-line"></i>
                                            </span>
                                        </a>
                                        <ul class="sidebar-submenu" data-sidebar-submenu-dropdown>
                                            <li class="sidebar-submenu-item">
                                                <a href="#" class="sidebar-submenu-item-link">
                                                    <span class="sidebar-submenu-item-link-text">Test</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Ecommerce</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">LMS</span>
                                </a>
                            </li>
                            <li class="sidebar-submenu-item">
                                <a href="#" class="sidebar-submenu-item-link">
                                    <span class="sidebar-submenu-item-link-text">Crypto</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a onclick="window.location.href='logout.php'" class="sidebar-menu-item-link">
                            <span class="sidebar-menu-item-link-icon">
                                <i class="ri-logout-box-line"></i>
                            </span>
                            <span class="sidebar-menu-item-link-text">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-overlay" data-sidebar-dismiss=""></div>
        <!-- end: Sidebar -->

        <!-- start: Main -->
        <div class="main">
            <div class="topbar">
                <button type="button" class="btn btn-icon btn-light topbar-sidebar-toggle" data-sidebar-toggle><i class="ri-menu-line"></i></button>
                <div class="topbar-search-wrapper">
                    <button type="button" class="btn btn-icon btn-light topbar-search-back" data-dismiss="topbar-search">
                        <i class="ri-arrow-left-line"></i>
                    </button>
                    <form class="topbar-search">
                        <input type="text" class="form-control" placeholder="Search..." />
                        <span class="topbar-search-icon"><i class="ri-search-line"></i></span>
                    </form>
                </div>
                <div class="topbar-right">
                    <button type="button" class="btn btn-icon btn-light topbar-right-item-search" data-toggle="topbar-search">
                        <i class="ri-search-line"></i>
                    </button>
                    <div class="dropdown">
                        <button type="button" class="btn btn-icon btn-light topbar-right-item" data-toggle="dropdown">
                            <img src="https://flagsapi.com/BR/shiny/64.png" class="topbar-right-item-image" />
                        </button>
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-item-link">
                                        <img src="https://flagsapi.com/FR/shiny/64.png" class="dropdown-menu-item-link-image" />
                                        <span class="dropdown-menu-item-link-text">Bangladesh</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-item-link">
                                        <img src="https://flagsapi.com/ES/shiny/64.png" class="dropdown-menu-item-link-image" />
                                        <span class="dropdown-menu-item-link-text">Indonesia</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-item-link">
                                        <img src="https://flagsapi.com/US/shiny/64.png" class="dropdown-menu-item-link-image" />
                                        <span class="dropdown-menu-item-link-text">Singapore</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-icon btn-light topbar-right-item" data-toggle="dropdown">
                            <i class="ri-shopping-cart-2-line"></i>
                            <span class="topbar-right-item-total">5</span>
                        </button>
                        <div class="dropdown-menu-wrapper">
                            <div class="dropdown-content">
                                <div class="dropdown-content-header">
                                    <p class="dropdown-content-title">Cart</p>
                                    <span class="badge badge-primary-soft">5 items</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <div class="dropdown-cart-wrapper">
                                        <div class="dropdown-cart-item">
                                            <img src="https://placehold.co/100x100" alt="" class="dropdown-cart-item-image" />
                                            <div class="dropdown-cart-item-body">
                                                <a href="#" class="dropdown-cart-item-title">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                                <p class="dropdown-cart-item-description">Qty: 1 * &dollar;10</p>
                                            </div>
                                            <p class="dropdown-cart-item-price">&dollar;10</p>
                                            <button type="button" class="dropdown-cart-item-remove"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                        <div class="dropdown-cart-item">
                                            <img src="https://placehold.co/100x100" alt="" class="dropdown-cart-item-image" />
                                            <div class="dropdown-cart-item-body">
                                                <a href="#" class="dropdown-cart-item-title">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                                <p class="dropdown-cart-item-description">Qty: 1 * &dollar;10</p>
                                            </div>
                                            <p class="dropdown-cart-item-price">&dollar;10</p>
                                            <button type="button" class="dropdown-cart-item-remove"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                        <div class="dropdown-cart-item">
                                            <img src="https://placehold.co/100x100" alt="" class="dropdown-cart-item-image" />
                                            <div class="dropdown-cart-item-body">
                                                <a href="#" class="dropdown-cart-item-title">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                                <p class="dropdown-cart-item-description">Qty: 1 * &dollar;10</p>
                                            </div>
                                            <p class="dropdown-cart-item-price">&dollar;10</p>
                                            <button type="button" class="dropdown-cart-item-remove"><i class="ri-delete-bin-line"></i></button>
                                        </div>
                                    </div>
                                    <div class="dropdown-content-bottom">
                                        <div class="dropdown-cart-total">
                                            <p class="dropdown-cart-total-text">Total</p>
                                            <p class="dropdown-cart-total-amount">&dollar;30</p>
                                        </div>
                                        <a href="#" class="btn btn-primary btn-block">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-icon btn-light topbar-right-item" data-toggle="dropdown">
                            <i class="ri-notification-3-line"></i>
                            <span class="topbar-right-item-total">4</span>
                        </button>
                        <div class="dropdown-menu-wrapper">
                            <div class="dropdown-content">
                                <div class="dropdown-content-header">
                                    <p class="dropdown-content-title">Notification</p>
                                    <span class="badge badge-primary-soft">7 items</span>
                                </div>
                                <div class="dropdown-content-body">
                                    <div class="dropdown-notification-wrapper">
                                        <a href="#" class="dropdown-notification-item">
                                            <span class="dropdown-notification-item-icon primary-soft">
                                                <i class="ri-history-line"></i>
                                            </span>
                                            <p class="dropdown-notification-item-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <p class="dropdown-notification-item-time">4 days ago</p>
                                        </a>
                                        <a href="#" class="dropdown-notification-item">
                                            <span class="dropdown-notification-item-icon danger-soft">
                                                <i class="ri-history-line"></i>
                                            </span>
                                            <p class="dropdown-notification-item-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <p class="dropdown-notification-item-time">4 days ago</p>
                                        </a>
                                        <a href="#" class="dropdown-notification-item">
                                            <span class="dropdown-notification-item-icon success-soft">
                                                <i class="ri-history-line"></i>
                                            </span>
                                            <p class="dropdown-notification-item-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            <p class="dropdown-notification-item-time">4 days ago</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-icon btn-light topbar-right-item" onclick="document.getElementById('fileInput').click();">
                            <img src="https://placehold.co/100x100" alt="" class="topbar-right-item-user-image" id="userImage" />
                        </button>
                        <input type="file" id="fileInput" style="display: none;" onchange="handleFile(this.files)">
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-item-link">
                                        <span class="dropdown-menu-item-link-icon"><i class="ri-user-line"></i></span>
                                        <span class="dropdown-menu-item-link-text">Profile</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-item-link">
                                        <span class="dropdown-menu-item-link-icon"><i class="ri-settings-line"></i></span>
                                        <span class="dropdown-menu-item-link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-item">
                                    <a href="#" class="dropdown-menu-item-link">
                                        <span class="dropdown-menu-item-link-icon"><i class="ri-logout-circle-line"></i></span>
                                        <span class="dropdown-menu-item-link-text">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <h1 class="content-title">Dashboard</h1>
            </div>
        </div>
        <!-- end: Main -->

        <script src="https://cdn.jsdelivr.net/npm/@floating-ui/core@1.6.8"></script>
        <script src="https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.12"></script>
        <script src="dashboard.js"></script>

        <script>
            function handleFile(files) {
                if (files.length === 0) return;
                const file = files[0];
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = new Image();
                    img.onload = function () {
                        const canvas = document.createElement('canvas');
                        const ctx = canvas.getContext('2d');
                        canvas.width = 100;
                        canvas.height = 100;
                        ctx.drawImage(img, 0, 0, 100, 100);
                        document.getElementById('userImage').src = canvas.toDataURL('image/png');
                    };
                    img.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        </script>
    </body>
</html>


