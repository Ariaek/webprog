<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Employee Payslip</h4>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                $employeeName = $_POST['employee_name'];
                $workDays = $_POST['work_days'];
                $dailyRate = $_POST['daily_rate'];
                $cashAdvance = $_POST['cash_advance'];

                $grossPay = $workDays * $dailyRate;
                $tax = $dailyRate * 0.2;
                $sss = $grossPay * 0.015;
                $pagIbig = 50;

                $totalDeductions = $tax + $sss + $pagIbig + $cashAdvance;
                $netPay = $grossPay - $totalDeductions;
            } else {
                echo "<div class='alert alert-danger'>No Data Received</div>";
                exit;
            }
            ?>

            <ul class="list-group">
                <li class="list-group-item" style ="border: 0;"><strong>Employee Name:</strong> <?= htmlspecialchars($employeeName) ?></li>
                <li class="list-group-item" style ="border: 0;"><strong>Total Work Days:</strong> <?= $workDays ?></li>
                <li class="list-group-item" style ="border: 0;"><strong>Daily Rate:</strong> ₱<?= number_format($dailyRate, 2) ?></li>
                <hr>
                <li class="list-group-item" style ="border: 0;"><strong>Gross Pay:</strong> ₱<?= number_format($grossPay, 2) ?></li>
                <li class="list-group-item" style ="border: 0;"><strong>Tax (20% of Daily Rate):</strong> ₱<?= number_format($tax, 2) ?></li>
                <li class="list-group-item" style ="border: 0;"><strong>SSS (1.5% of Gross):</strong> ₱<?= number_format($sss, 2) ?></li>
                <li class="list-group-item" style ="border: 0;"><strong>Pag-IBIG:</strong> ₱<?= number_format($pagIbig, 2) ?></li>
                <li class="list-group-item" style ="border: 0;"><strong>Cash Advance:</strong> ₱<?= number_format($cashAdvance, 2) ?></li>
                <hr>
                <li class="list-group-item" style ="border: 0;"><strong>Total Deductions:</strong> ₱<?= number_format($totalDeductions, 2) ?></li>
                <li class="list-group-item" style="color: #228B22;"><strong>Net Pay:</strong> ₱<?= number_format($netPay, 2) ?></li>
            </ul>

            <div class="mt-4">
                <a href="payroll.php" class="btn btn-primary">Back</a>
                <a href="index.php" class="btn btn-primary">Print Payslip</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
