<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>csr-member-total</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="mb-3">member 테이블 (CSR)</h2>

    <table id="memberTable" class="table table-striped table-bordered">
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
        <tbody id="memberBody">
            <tr><td colspan="9" class="text-center text-muted">데이터 로딩 중...</td></tr>
        </tbody>
    </table>

    <script src="/assets/js/fetch/member-rest-fetch.js"></script>
</body>
</html>
