<?= view('tfa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- About Section -->
<section class="page-banner">
    <div class="container narrow-container">
        <span class="eyebrow">About the system</span>
        <h1>Built to make essential account records easier to review.</h1>
        <p>Northstar POS is a basic Point-of-Sale support application for organizing customer and staff account information.</p>
    </div>
</section>

<section class="section">
    <div class="container about-grid">
        <div>
            <h2>A focused first version</h2>
            <p>The application keeps its purpose simple: provide separate pages for customer contact details and user account roles. This creates a clear foundation for a larger POS system without adding features that the business does not yet need.</p>
            <p>Its four-page structure also demonstrates how CodeIgniter routes, controllers, and views work together to display organized information.</p>
        </div>
        <aside class="about-summary">
            <h3>What it manages</h3>
            <ul>
                <li>Customer names and contact details</li>
                <li>Staff usernames and full names</li>
                <li>User roles within the POS system</li>
            </ul>
        </aside>
    </div>
</section>

<?= view('tfa1_llaguno/partials/footer') ?>
