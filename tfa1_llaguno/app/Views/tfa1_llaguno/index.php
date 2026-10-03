<?= view('tfa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <div class="hero-copy">
            <span class="eyebrow">Point-of-Sale Account System</span>
            <h1>Keep customer and staff records organized.</h1>
            <p>Northstar POS gives a small business one clear place to view essential customer and employee account information.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?= site_url('customers') ?>">View Customers</a>
                <a class="button button-secondary" href="<?= site_url('users') ?>">View Users</a>
            </div>
        </div>

        <div class="hero-panel" aria-label="Northstar POS overview">
            <span class="panel-label">System overview</span>
            <div class="overview-item">
                <strong>Customer Accounts</strong>
                <span>Contact details in one simple list</span>
            </div>
            <div class="overview-item">
                <strong>User Accounts</strong>
                <span>Staff names, usernames, and roles</span>
            </div>
            <div class="overview-item">
                <strong>Four Clear Pages</strong>
                <span>Easy navigation for daily reference</span>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Core records</span>
            <h2>A practical starting point for a small business</h2>
            <p>The first version focuses on the account information a team needs to reference most often.</p>
        </div>

        <div class="feature-grid">
            <article class="feature-card">
                <span class="feature-number">01</span>
                <h3>Customer management</h3>
                <p>Review customer names, email addresses, and phone numbers in a clear table.</p>
            </article>
            <article class="feature-card">
                <span class="feature-number">02</span>
                <h3>Staff management</h3>
                <p>Keep track of system users and understand the role assigned to each staff member.</p>
            </article>
            <article class="feature-card">
                <span class="feature-number">03</span>
                <h3>Simple organization</h3>
                <p>Move between the main pages quickly through a consistent, responsive navigation bar.</p>
            </article>
        </div>
    </div>
</section>

<?= view('tfa1_llaguno/partials/footer') ?>
