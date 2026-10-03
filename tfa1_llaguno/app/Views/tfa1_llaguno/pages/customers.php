<?= view('tfa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- Customer Table -->

<section class="page-banner compact-banner">
    <div class="container">
        <span class="eyebrow">Account directory</span>
        <h1>Customer Accounts</h1>
        <p>View the contact information stored for Northstar POS customers.</p>
    </div>
</section>

<section class="section table-section">
    <div class="container">
        <div class="table-card">
            <div class="table-heading">
                <div>
                    <h2>Customer records</h2>
                    <p>Full names and contact details</p>
                </div>
                <span class="status-label">Static data</span>
            </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($customers as $customer): ?>
                        <tr>
                            <td><?= esc($customer['full_name']) ?></td>
                            <td><?= esc($customer['email']) ?></td>
                            <td><?= esc($customer['phone']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</section>

<?= view('tfa1_llaguno/partials/footer') ?>
