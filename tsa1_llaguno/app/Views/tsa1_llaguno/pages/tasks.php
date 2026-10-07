<?= view('tsa1_llaguno/partials/header', ['title' => $title, 'activePage' => $activePage]) ?>

<section class="page-intro compact-intro">
    <div class="container intro-layout">
        <div>
            <span class="eyebrow">Pharmacy operations</span>
            <h1>Complete Task List</h1>
        </div>
        <p>All Northstar Drugs operational tasks are ordered by task date from earliest to latest.</p>
    </div>
</section>

<section class="content-section table-section">
    <div class="container">
        <div class="records-card">
            <div class="records-heading">
                <div>
                    <h2>Task records</h2>
                    <p>Daily pharmacy checks, documentation, delivery, and inventory work</p>
                </div>
                <span class="label-pill label-profile"><?= esc((string) count($tasks)) ?> total tasks</span>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Task Date</th>
                            <th scope="col">Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($tasks === []) : ?>
                            <tr class="empty-row">
                                <td colspan="5">No task records were found.</td>
                            </tr>
                        <?php else : ?>
                            <?php foreach ($tasks as $task) : ?>
                                <tr>
                                    <td><?= esc($task['id']) ?></td>
                                    <td class="task-title-cell"><?= esc($task['title']) ?></td>
                                    <td><span class="status-pill status-<?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span></td>
                                    <td><time datetime="<?= esc($task['task_date']) ?>"><?= esc(date('F j, Y', strtotime($task['task_date']))) ?></time></td>
                                    <td>
                                        <time datetime="<?= esc(date('c', strtotime($task['created_at']))) ?>">
                                            <?= esc(date('F j, Y', strtotime($task['created_at']))) ?>
                                            <small><?= esc(date('g:i:s A', strtotime($task['created_at']))) ?></small>
                                        </time>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= view('tsa1_llaguno/partials/footer') ?>
