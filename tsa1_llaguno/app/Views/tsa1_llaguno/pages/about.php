<?= view('tsa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<section class="page-intro">
    <div class="container intro-layout">
        <div>
            <span class="eyebrow">About the project</span>
            <h1>Daily task visibility for Northstar Drugs.</h1>
        </div>
        <p>The Tasks for Today Management System is a CodeIgniter 4 application that separates today&apos;s pharmacy priorities from the complete operational task list.</p>
    </div>
</section>

<section class="content-section">
    <div class="container about-layout">
        <div class="about-copy">
            <h2>Built for focused pharmacy operations</h2>
            <p>The system uses CodeIgniter Models, Controllers, and Views to retrieve daily work from a MySQL database and present it through four focused pages.</p>
            <p>It supports operational task monitoring only. It does not provide medical diagnosis, treatment recommendations, patient-specific advice, sales processing, or prescription data for real people.</p>
        </div>

        <aside class="developer-card">
            <span class="card-kicker">Developer</span>
            <h3>Dr. Nico Llaguno</h3>
            <p>TC32 &middot; IT0049 Web System Technologies</p>
            <dl>
                <div>
                    <dt>Framework</dt>
                    <dd>CodeIgniter 4</dd>
                </div>
                <div>
                    <dt>Business</dt>
                    <dd>Northstar Drugs</dd>
                </div>
                <div>
                    <dt>Assessment</dt>
                    <dd>Technical Summative Assessment 1</dd>
                </div>
            </dl>
        </aside>
    </div>
</section>

<?= view('tsa1_llaguno/partials/footer') ?>
