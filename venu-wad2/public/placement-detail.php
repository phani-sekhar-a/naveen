<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Internship Details | MediInternia Internship Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body data-page="internship-detail" class="bg-light">
    <header class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
      <div class="container py-2">
        <a class="navbar-brand fw-bold text-primary" href="home.php">
          <i class="bi bi-heart-pulse me-2"></i>MediInternia Internship Portal
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item"><a class="nav-link" href="placements.php">Internships</a></li>
            <li class="nav-item"><a class="nav-link" href="apply.php">Apply</a></li>
            <li class="nav-item"><a class="nav-link" href="calendar.php">Schedule</a></li>
            <li class="nav-item"><a class="nav-link" href="analytics.php">Analytics</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profiles</a>
              <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                <li><a class="dropdown-item" href="learner-profile.php">Student Profile</a></li>
                <li><a class="dropdown-item" href="partner-profile.php">Employer Profile</a></li>
                <li><a class="dropdown-item" href="admin-settings.php">Admin Profile</a></li>
              </ul>
            </li>
            <li class="nav-item ms-lg-3">
              <a class="btn btn-outline-primary" href="signin.php">Sign in</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="py-5">
      <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item"><a href="placements.php">Internships</a></li>
            <li class="breadcrumb-item active" aria-current="page" id="detailBreadcrumbTitle">Pediatric Nursing Rotation</li>
          </ol>
        </nav>

        <div class="row g-4">
          <div class="col-lg-8">
            <article class="card border-0 shadow-sm rounded-4">
              <div class="card-body p-4 p-lg-5">
                <span class="badge bg-primary-subtle text-primary text-uppercase mb-2" data-detail="category">Nursing &amp; Patient Care</span>
                <h1 class="h3 fw-bold mb-2" data-detail="title">Pediatric Nursing Rotation</h1>
                <p class="text-muted mb-1">
                  <i class="bi bi-hospital text-primary me-1"></i>
                  <span data-detail="facility">Green Valley Hospital</span>
                </p>
                <p class="text-muted mb-3">
                  <i class="bi bi-geo-alt text-primary me-1"></i>
                  <span data-detail="location">Denver, CO</span>
                </p>
                <p class="lead text-muted" data-detail="summary">
                  Join a multidisciplinary pediatrics team delivering family-centred care across infusion, step-down, and outpatient clinics. Interns rotate through bedside education, triage shadowing, and simulation labs with weekly mentor feedback.
                </p>

                <div class="d-flex flex-wrap gap-2 mb-4" data-detail-badges>
                  <span class="badge bg-primary-subtle text-primary">Patient-facing</span>
                  <span class="badge bg-primary-subtle text-primary">Mentor-led</span>
                  <span class="badge bg-primary-subtle text-primary">Stipend</span>
                  <span class="badge bg-primary-subtle text-primary">EPIC exposure</span>
                </div>

                <div class="row g-3 mb-4">
                  <div class="col-sm-6 col-lg-3">
                    <div class="detail-meta-card">
                      <span class="detail-meta-label">Mode</span>
                      <span class="detail-meta-value" data-detail="mode">In-person</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="detail-meta-card">
                      <span class="detail-meta-label">Duration</span>
                      <span class="detail-meta-value" data-detail="duration">12 weeks</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="detail-meta-card">
                      <span class="detail-meta-label">Deadline</span>
                      <span class="detail-meta-value" data-detail="deadline">Feb 15, 2026</span>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="detail-meta-card">
                      <span class="detail-meta-label">Schedule</span>
                      <span class="detail-meta-value" data-detail="schedule">Mon–Thu, 8:00–16:00</span>
                    </div>
                  </div>
                </div>

                <section class="mb-5">
                  <h2 class="h5 fw-semibold">Responsibilities</h2>
                  <ul class="list-group list-group-flush detail-list" data-detail-list="responsibilities">
                    <li class="list-group-item">Support bedside rounding; prepare patient education materials for families.</li>
                    <li class="list-group-item">Shadow infusion nurses on IV prep, med reconciliation, and discharge teaching.</li>
                    <li class="list-group-item">Assist with triage intake documentation and telehealth follow-up notes.</li>
                    <li class="list-group-item">Participate in Friday simulation labs and debriefs; log reflections weekly.</li>
                  </ul>
                </section>

                <section class="mb-5">
                  <h2 class="h5 fw-semibold">Learning outcomes</h2>
                  <ul class="list-group list-group-flush detail-list" data-detail-list="learning">
                    <li class="list-group-item">Demonstrate safe pediatrics workflow across inpatient and ambulatory settings.</li>
                    <li class="list-group-item">Communicate care plans with caregivers using plain-language techniques.</li>
                    <li class="list-group-item">Document accurately in an EHR sandbox under mentor supervision.</li>
                    <li class="list-group-item">Apply trauma-informed principles in patient interactions and simulations.</li>
                  </ul>
                </section>

                <section class="mb-5">
                  <h2 class="h5 fw-semibold">Program perks</h2>
                  <ul class="list-group list-group-flush detail-list" data-detail-list="perks">
                    <li class="list-group-item">$1,200 monthly stipend and meal vouchers on rotation days.</li>
                    <li class="list-group-item">Weekly mentor check-ins; capstone presentation at graduation.</li>
                    <li class="list-group-item">Badged access to skills lab and pediatrics education library.</li>
                    <li class="list-group-item">Letter of completion with competency summaries.</li>
                  </ul>
                </section>

                <section class="mb-0">
                  <h2 class="h5 fw-semibold">Application steps</h2>
                  <ul class="list-group list-group-flush detail-list" data-detail-list="application">
                    <li class="list-group-item">Submit resume and brief cover letter via the application form.</li>
                    <li class="list-group-item">Complete a short program fit questionnaire (5 minutes).</li>
                    <li class="list-group-item">If shortlisted, attend a 20-minute video interview.</li>
                    <li class="list-group-item">Final decision and offer within 10 business days.</li>
                  </ul>
                </section>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <aside class="card border-0 shadow-sm rounded-4 mb-4">
              <div class="card-body p-4">
                <h2 class="h6 text-uppercase text-muted mb-3">Key details</h2>
                <p class="mb-2 small text-muted">Compensation</p>
                <p class="fw-semibold mb-3" data-detail="compensation">$1,200 monthly stipend</p>
                <p class="mb-2 small text-muted">Contact</p>
                <ul class="list-unstyled small mb-4">
                  <li class="mb-2">
                    <i class="bi bi-person-circle text-primary me-2"></i>
                    <span data-detail="contactName">Program Coordinator</span>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-envelope-open text-primary me-2"></i>
                    <span data-detail="contactEmail">placements@example.com</span>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-telephone text-primary me-2"></i>
                    <span data-detail="contactPhone">1111111111</span>
                  </li>
                  <li class="mb-0">
                    <i class="bi bi-door-open text-primary me-2"></i>
                    <span data-detail="contactOffice">Pediatrics Education Office, 2nd Floor</span>
                  </li>
                </ul>
                <a
                  class="btn btn-primary w-100"
                  id="detailApplyButton"
                  href="apply.php?listingId=PNR-2026-01&title=Pediatric%20Nursing%20Rotation&facility=Green%20Valley%20Hospital&category=Nursing%20%26%20Patient%20Care"
                >
                  Start application
                </a>
              </div>
            </aside>

            <aside class="card border-0 shadow-sm rounded-4">
              <div class="card-body p-4">
                <h2 class="h6 text-uppercase text-muted mb-3">Requirements</h2>
                <ul class="list-group list-group-flush detail-list" data-detail-list="requirements">
                  <li class="list-group-item">Current enrolment in nursing or allied-health program.</li>
                  <li class="list-group-item">BLS certification (can be completed before start date).</li>
                  <li class="list-group-item">Immunisation record and background check clearance.</li>
                  <li class="list-group-item">Faculty reference or skills checklist (preferred).</li>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
      <div class="container text-center small">
        &copy; <span id="currentYear"></span> MediInternia Internship Portal. All rights reserved.
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
