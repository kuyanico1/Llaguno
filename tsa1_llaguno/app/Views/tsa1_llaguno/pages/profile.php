<?= view('tsa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<section class="page-intro compact-intro">
    <div class="container intro-layout">
        <div>
            <span class="eyebrow">System administrator</span>
            <h1>Pharmacist Profile</h1>
        </div>
        <p>The account responsible for reviewing Northstar Drugs&apos; daily operational task records.</p>
    </div>
</section>

<section class="content-section">
    <div class="container profile-container">
        <?php if ($user === null) : ?>
            <div class="empty-state">
                <span class="empty-icon" aria-hidden="true">!</span>
                <h2>Profile record unavailable.</h2>
                <p>The administrator profile could not be found in the database.</p>
            </div>
        <?php else : ?>
            <article class="profile-card">
                <div class="profile-banner">
                    <span class="profile-avatar" aria-hidden="true">NL</span>
                    <div>
                        <span class="label-pill label-profile">Administrator profile</span>
                        <h2><?= esc($user['full_name']) ?></h2>
                        <p>System Administrator and Pharmacist</p>
                    </div>
                </div>

                <dl class="profile-details">
                    <div>
                        <dt>Username</dt>
                        <dd><?= esc($user['username']) ?></dd>
                    </div>
                    <div>
                        <dt>Full name</dt>
                        <dd><?= esc($user['full_name']) ?></dd>
                    </div>
                    <div>
                        <dt>Email address</dt>
                        <dd><a href="mailto:<?= esc($user['email']) ?>"><?= esc($user['email']) ?></a></dd>
                    </div>
                    <div>
                        <dt>Profile created</dt>
                        <dd><?= esc(date('F j, Y \a\t g:i:s A', strtotime($user['created_at']))) ?></dd>
                    </div>
                </dl>
            </article>
        <?php endif; ?>
    </div>
</section>

<?= view('tsa1_llaguno/partials/footer') ?>
