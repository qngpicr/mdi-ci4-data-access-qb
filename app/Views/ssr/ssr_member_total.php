<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ssr-member-total</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="mb-3">member 테이블 (SSR)</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>id_member</th>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>role</th>
                <th>status</th>
                <th>email_verified</th>
                <th>fail_count</th>
                <th>last_login</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($memberList)): ?>
                <?php foreach ($memberList as $member): ?>
                    <tr>
                        <td><?= esc($member->id_member) ?></td>
                        <td><?= esc($member->id) ?></td>
                        <td><?= esc($member->name) ?></td>
                        <td><?= esc($member->email) ?></td>
                        <td><?= esc($member->role) ?></td>
                        <td><?= esc($member->status) ?></td>
                        <td><?= esc($member->email_verified) ?></td>
                        <td><?= esc($member->fail_count) ?></td>
                        <td><?= esc($member->last_login) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="9" class="text-center text-muted">데이터가 없습니다.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
