<?= view('tfa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- User Table -->

<section class="page-banner compact-banner">
    <div class="container">
        <span class="eyebrow">Staff directory</span>
        <h1>User Accounts</h1>
        <p>View the staff accounts and roles used in Northstar POS.</p>
    </div>
</section>

<section class="section table-section">
    <div class="container">
        <div class="table-card">
            <div class="table-heading">
                <div>
                    <h2>User records</h2>
                    <p>Usernames, staff names, and assigned roles</p>
                </div>
                <span class="status-label">Static data</span>
            </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['full_name']) ?></td>
                            <td><?= esc($user['role']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</section>

<?= view('tfa1_llaguno/partials/footer') ?>
