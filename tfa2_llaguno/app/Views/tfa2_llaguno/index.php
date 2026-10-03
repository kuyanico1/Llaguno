<?= view('tfa2_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- Hero -->
<section class="hero">
    <div class="container hero-layout">
        <div class="hero-copy">
            <span class="eyebrow">Northstar Drugs Database Management System</span>
            <h1>Organized account records for a dependable community pharmacy.</h1>
            <p>Northstar Drugs uses this simple CodeIgniter system to keep customer contact details and staff account information clear, consistent, and easy to review.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?= site_url('customers') ?>">View customer accounts</a>
                <a class="button button-secondary" href="<?= site_url('users') ?>">View user accounts</a>
            </div>
        </div>

        <aside class="system-card" aria-label="Database system overview">
            <span class="card-kicker">Account system</span>
            <h2>From database to a clear record view</h2>
            <ol class="system-flow">
                <li>
                    <span>01</span>
                    <div>
                        <strong>MySQL tables</strong>
                        <p>Store customer and user account records.</p>
                    </div>
                </li>
                <li>
                    <span>02</span>
                    <div>
                        <strong>CodeIgniter Models</strong>
                        <p>Retrieve the records through the data layer.</p>
                    </div>
                </li>
                <li>
                    <span>03</span>
                    <div>
                        <strong>Account Views</strong>
                        <p>Present the records in readable tables.</p>
                    </div>
                </li>
            </ol>
        </aside>
    </div>
</section>

<!-- Main Content -->
<section class="services-section">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">System directories</span>
            <h2>Two focused account pages</h2>
            <p>The system keeps the laboratory scope practical by separating customer contact records from internal staff accounts.</p>
        </div>

        <div class="directory-grid">
            <article class="directory-card">
                <span class="card-number">01</span>
                <h3>Customer Accounts</h3>
                <p>Review each customer&apos;s name, email address, phone number, and record creation date.</p>
                <a href="<?= site_url('customers') ?>">Open customer directory <span aria-hidden="true">&rarr;</span></a>
            </article>

            <article class="directory-card">
                <span class="card-number">02</span>
                <h3>User Accounts</h3>
                <p>Review the username, full name, and creation date for each internal system account.</p>
                <a href="<?= site_url('users') ?>">Open user directory <span aria-hidden="true">&rarr;</span></a>
            </article>
        </div>
    </div>
</section>

<?= view('tfa2_llaguno/partials/footer') ?>
