<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Grade Computing System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #ffb5d0ff, #c47e9dff);
      min-height: 100vh;
    }
    .card {
      border: none;
      border-radius: 15px;
    }
    .card-header {
      background: linear-gradient(90deg, #db81c0ff, #cf5ba6ff);
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    .form-label i {
      margin-right: 8px;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg">
          <div class="card-header text-white text-center py-3">
            <h4 class="mb-0"><i class="bi bi-calculator-fill me-2"></i>Grade Computing System</h4>
          </div>
          <div class="card-body p-4">
            <form action="submitted.php" method="POST">
              <!-- Student Name -->
              <div class="mb-3">
                <label for="student_name" class="form-label"><i class="bi bi-person-fill"></i>Student Name</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required />
              </div>

              <!-- Prelim Grade -->
              <div class="mb-3">
                <label for="prelim_grade" class="form-label"><i class="bi bi-pencil-fill"></i>Prelim Grade</label>
                <input type="number" name="prelim_grade" id="prelim_grade" class="form-control" min="0" max="100" step="0.01" required />
              </div>

              <!-- Midterm Grade -->
              <div class="mb-3">
                <label for="mid_grade" class="form-label"><i class="bi bi-journal-check"></i>Midterm Grade</label>
                <input type="number" name="mid_grade" id="mid_grade" class="form-control" min="0" max="100" step="0.01" required />
              </div>

              <!-- Final Grade -->
              <div class="mb-3">
                <label for="final_grade" class="form-label"><i class="bi bi-award-fill"></i>Final Grade</label>
                <input type="number" name="final_grade" id="final_grade" class="form-control" min="0" max="100" step="0.01" required />
              </div>

              <!-- Submit Button -->
              <div class="text-end">
                <button type="submit" class="btn btn-success px-4">
                  <i class="bi bi-clipboard-check-fill me-1"></i>Compute Grade
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
