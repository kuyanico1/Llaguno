<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Northstar POS customer and staff account management system.">
    <title><?= esc($title) ?> | Northstar POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa1_llaguno/css/style.css') ?>">
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container header-content">
            <a class="brand" href="<?= site_url('/') ?>" aria-label="Northstar POS home">
                <span class="brand-mark" aria-hidden="true">N</span>
                <span>
                    <strong>Northstar POS</strong>
                    <small>Simple business records</small>
                </span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation">
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="menu-line"></span>
                <span class="sr-only">Open navigation</span>
            </button>

            <!-- Navigation -->
            <nav class="site-nav" id="main-navigation" aria-label="Main navigation">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Home</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
                <a class="<?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= site_url('customers') ?>">Customers</a>
                <a class="<?= $activePage === 'users' ? 'active' : '' ?>" href="<?= site_url('users') ?>">Users</a>
            </nav>
        </div>
    </header>

    <main>
