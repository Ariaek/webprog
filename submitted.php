<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Grade Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to right, #f0a1caff, #fdb7e4ff);
            min-height: 100vh;
        }
        .grade-card {
            border-radius: 15px;
        }
        .letter-grade {
            font-weight: bold;
            font-size: 1.3rem;
        }
    </style>
</head>
<body>

<div class="container d-flex align-items-center justify-content-center mt-5">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg grade-card">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">Student Grade Result</h4>
            </div>
            <div class="card-body p-4">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $studentName = $_POST['student_name'];
                    $prelim = floatval($_POST['prelim_grade']);
                    $midterm = floatval($_POST['mid_grade']);
                    $final = floatval($_POST['final_grade']);

                    // Weighted average:
                    $weightedAverage = ($prelim + $midterm + $final) / 3;

                    // Determine letter grade
                    if ($weightedAverage >= 90) {
                        $letterGrade = 'A';
                        $gradeColor = 'text-success';
                    } elseif ($weightedAverage >= 80) {
                        $letterGrade = 'B';
                        $gradeColor = 'text-primary';
                    } elseif ($weightedAverage >= 70) {
                        $letterGrade = 'C';
                        $gradeColor = 'text-warning';
                    } elseif ($weightedAverage >= 60) {
                        $letterGrade = 'D';
                        $gradeColor = 'text-danger';
                    } else {
                        $letterGrade = 'F';
                        $gradeColor = 'text-danger fw-bold';
                    }
                } else {
                    echo "<div class='alert alert-danger'>No data received.</div>";
                    exit;
                }
                ?>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Student Name:</strong> <?= htmlspecialchars($studentName) ?></li>
                    <li class="list-group-item"><strong>Prelim Grade:</strong> <?= number_format($prelim, 2) ?></li>
                    <li class="list-group-item"><strong>Midterm Grade:</strong> <?= number_format($midterm, 2) ?></li>
                    <li class="list-group-item"><strong>Final Grade:</strong> <?= number_format($final, 2) ?></li>
                    <li class="list-group-item"><strong>Weighted Average:</strong> <?= number_format($weightedAverage, 2) ?></li>
                    <li class="list-group-item <?= $gradeColor ?>">
                        <strong>Letter Grade:</strong> <span class="letter-grade"><?= $letterGrade ?></span>
                    </li>
                </ul>

                <div class="mt-4 d-flex justify-content-between">
                    <a href="grade.php" class="btn btn-primary">Back to Form</a>
                    <button onclick="window.print()" class="btn btn-outline-secondary">Print Result</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
