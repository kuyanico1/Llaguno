<?= view('tfa2_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<!-- Main Content -->
<section class="page-intro">
    <div class="container intro-layout">
        <div>
            <span class="eyebrow">About the project</span>
            <h1>A simple database-backed system for Northstar Drugs.</h1>
        </div>
        <p>Northstar Drugs is presented as a local community pharmacy. This application demonstrates how CodeIgniter organizes customer and user account records through Models, Controllers, and Views.</p>
    </div>
</section>

<section class="content-section">
    <div class="container about-layout">
        <div class="about-copy">
            <h2>Built for the TFA2 data flow</h2>
            <p>The project moves the account information used in TFA1 from temporary PHP arrays into MySQL tables. Each table will connect to its own Model, while the Controllers will pass retrieved records to the account Views.</p>
            <p>The pharmacy identity provides a realistic business setting without adding inventory, prescription, checkout, or other features outside the laboratory requirements.</p>
        </div>

        <aside class="scope-list">
            <h3>Project scope</h3>
            <ul>
                <li>Customer account records</li>
                <li>Internal user account records</li>
                <li>CodeIgniter MVC organization</li>
                <li>MySQL database retrieval</li>
            </ul>
        </aside>
    </div>
</section>

<?= view('tfa2_llaguno/partials/footer') ?>
