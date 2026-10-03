<?= view('tfa2_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- Main Content -->
<section class="page-intro compact-intro">
    <div class="container intro-layout">
        <div>
            <span class="eyebrow">Staff directory</span>
            <h1>User Accounts</h1>
        </div>
        <p>Internal account information for staff members who use the Northstar Drugs system.</p>
    </div>
</section>

<!-- User Records -->
<section class="content-section table-section">
    <div class="container">
        <div class="records-card">
            <div class="records-heading">
                <div>
                    <h2>User records</h2>
                    <p>Database fields required by TFA2</p>
                </div>
                <span class="status-label"><?= count($users) ?> database records</span>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Created Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($users === []) : ?>
                            <tr class="empty-row">
                                <td colspan="5">No user records were found.</td>
                            </tr>
                        <?php else : ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= esc($user['id']) ?></td>
                                    <td><?= esc($user['username']) ?></td>
                                    <td><?= esc($user['full_name']) ?></td>
                                    <td><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></td>
                                    <td><?= esc(date('g:i A', strtotime($user['created_at']))) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= view('tfa2_llaguno/partials/footer') ?>
