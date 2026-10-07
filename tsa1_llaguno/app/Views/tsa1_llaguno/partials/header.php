<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Northstar Drugs Tasks for Today Management System.">
    <title>Northstar Drugs | <?= esc($title) ?></title>
    <link rel="stylesheet" href="<?= base_url('tsa1_llaguno/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container header-content">
            <a class="brand" href="<?= base_url() ?>" aria-label="Northstar Drugs home">
                <span class="brand-mark" aria-hidden="true">
                    <span>N</span>
                    <i></i>
                </span>
                <span class="brand-copy">
                    <strong>Northstar Drugs</strong>
                    <small>Community Pharmacy Operations</small>
                </span>
            </a>

            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation">
                <span></span>
                <span></span>
                <span></span>
                <span class="sr-only">Open navigation</span>
            </button>

            <nav class="site-nav" id="main-navigation" aria-label="Main navigation">
                <a class="<?= $activePage === 'home' ? 'active' : '' ?>" href="<?= base_url() ?>">Today</a>
                <a class="<?= $activePage === 'tasks' ? 'active' : '' ?>" href="<?= base_url('tasks') ?>">Task List</a>
                <a class="<?= $activePage === 'profile' ? 'active' : '' ?>" href="<?= base_url('profile') ?>">Profile</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
            </nav>
        </div>
    </header>

    <main>
