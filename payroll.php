<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Grade Computing System</h4>
        </div>
        <div class="card-body">
            <form action="Payslip.php" method="POST">
                <!-- Name -->
                <div class="mb-3">
                    <label for="student_name" class="form-label">Student Name</label>
                    <input type="text" name="student_name" id="student_name" class="form-control" required>
                </div>

                <!-- days of work -->
                <div class="mb-3">
                    <label for="prelim_grade" class="form-label">Prelim Grade</label>
                    <input type="number" name="prelim_grade" id="prelim_grade" class="form-control" required>
                </div>

                <!-- rate -->
                <div class="mb-3">
                    <label for="mid_grade" class="form-label">Midterm Grade</label>
                    <input type="number" name="mid_grade" id="mid_grade" class="form-control" required>
                </div>

                <!-- Cash advance -->
                <div class="mb-3">
                    <label for="final_grade" class="form-label">Final Grade</label>
                    <input type="number" name="final_grade" id="final_grade" class="form-control" required>
                </div>

                <!-- Submit -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Generate Payslip</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
