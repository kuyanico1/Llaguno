<?= view('tfa2_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- Main Content -->
<section class="page-intro compact-intro">
    <div class="container intro-layout">
        <div>
            <span class="eyebrow">Customer directory</span>
            <h1>Customer Accounts</h1>
        </div>
        <p>Contact information for customers registered in the Northstar Drugs account database.</p>
    </div>
</section>

<!-- Customer Records -->
<section class="content-section table-section">
    <div class="container">
        <div class="records-card">
            <div class="records-heading">
                <div>
                    <h2>Customer records</h2>
                    <p>Database fields required by TFA2</p>
                </div>
                <span class="status-label"><?= count($customers) ?> database records</span>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Created Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($customers === []) : ?>
                            <tr class="empty-row">
                                <td colspan="6">No customer records were found.</td>
                            </tr>
                        <?php else : ?>
                            <?php foreach ($customers as $customer) : ?>
                                <tr>
                                    <td><?= esc($customer['id']) ?></td>
                                    <td><?= esc($customer['full_name']) ?></td>
                                    <td><?= esc($customer['email']) ?></td>
                                    <td><?= esc($customer['phone']) ?></td>
                                    <td><?= esc(date('F j, Y', strtotime($customer['created_at']))) ?></td>
                                    <td><?= esc(date('g:i A', strtotime($customer['created_at']))) ?></td>
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
