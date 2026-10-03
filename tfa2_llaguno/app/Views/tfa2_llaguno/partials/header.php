<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Northstar Drugs customer and staff account database management system.">
    <title>Northstar Drugs | <?= esc($title) ?></title>
    <link rel="stylesheet" href="<?= base_url('tfa2_llaguno/css/style.css') ?>">
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container header-content">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="Northstar Drugs home">
                <span class="brand-mark" aria-hidden="true">
                    <span class="cross-horizontal"></span>
                    <span class="cross-vertical"></span>
                </span>
                <span class="brand-copy">
                    <strong>Northstar Drugs</strong>
                    <small>Community Pharmacy</small>
                </span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation">
                <span></span>
                <span></span>
                <span></span>
                <span class="sr-only">Open navigation</span>
            </button>

            <!-- Navigation -->
            <nav class="site-nav" id="main-navigation" aria-label="Main navigation">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Home</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= site_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= site_url('users') ?>">Users</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
            </nav>
        </div>
    </header>

    <main>
