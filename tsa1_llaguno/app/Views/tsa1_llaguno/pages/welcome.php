<?= view('tsa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<section class="hero">
    <div class="container hero-layout">
        <div class="hero-copy">
            <span class="eyebrow"><span class="eyebrow-dot"></span> Northstar operations desk</span>
            <h1>Good day,<br> <em>Dr. Nico Llaguno.</em></h1>
            <p>Review the pharmacy team&apos;s operational priorities for today and keep essential checks visible throughout the shift.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?= base_url('tasks') ?>">View complete task list</a>
                <a class="button button-secondary" href="<?= base_url('profile') ?>">Open pharmacist profile</a>
            </div>
            <p class="hero-note"><span aria-hidden="true">&#10022;</span> Built for clear, dependable community-pharmacy routines.</p>
        </div>

        <aside class="date-card" aria-label="Current date and task count">
            <div class="date-card-heading">
                <span class="card-kicker">Today in Manila</span>
                <span class="star-symbol" aria-hidden="true">&#10022;</span>
            </div>
            <time datetime="<?= esc(date('Y-m-d', strtotime($currentDate))) ?>"><?= esc($currentDate) ?></time>
            <div class="today-count">
                <strong><?= esc((string) count($tasks)) ?></strong>
                <span><?= count($tasks) === 1 ? 'priority scheduled for today' : 'priorities scheduled for today' ?></span>
            </div>
            <a class="date-card-link" href="<?= base_url('tasks') ?>">Review the full work calendar <span aria-hidden="true">&rarr;</span></a>
        </aside>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="section-heading split-heading">
            <div>
                <span class="eyebrow">Today&apos;s worklist</span>
                <h2>Operational tasks for <?= esc($currentDate) ?></h2>
            </div>
            <span class="label-pill label-today">Today</span>
        </div>

        <?php if ($tasks === []) : ?>
            <div class="empty-state">
                <span class="empty-icon" aria-hidden="true">&#10003;</span>
                <h3>No tasks are scheduled for today.</h3>
                <p>The current worklist is clear. Check the complete task list for past and upcoming pharmacy operations.</p>
                <a href="<?= base_url('tasks') ?>">View all tasks <span aria-hidden="true">&rarr;</span></a>
            </div>
        <?php else : ?>
            <div class="task-grid">
                <?php foreach ($tasks as $index => $task) : ?>
                    <article class="task-card">
                        <div class="task-card-topline">
                            <span class="task-icon" aria-hidden="true"><?= esc(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?></span>
                            <span class="status-pill status-<?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span>
                        </div>
                        <h3><?= esc($task['title']) ?></h3>
                        <dl class="task-meta">
                            <div>
                                <dt>Task date</dt>
                                <dd><?= esc(date('F j, Y', strtotime($task['task_date']))) ?></dd>
                            </div>
                            <div>
                                <dt>Added</dt>
                                <dd><?= esc(date('F j, Y \a\t g:i:s A', strtotime($task['created_at']))) ?></dd>
                            </div>
                        </dl>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= view('tsa1_llaguno/partials/footer') ?>
