<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MediInternia Internship Portal | Healthcare Internships</title>
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
  <body data-page="home" class="bg-light">
    <?php include __DIR__ . "/../app/components/nav.php"; ?>

    <main>
      <section class="home-hero position-relative overflow-hidden text-center">
        <div class="hero-glow"></div>
        <div class="container position-relative py-5">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <span class="eyebrow mb-3 d-inline-flex align-items-center gap-2">
                <i class="bi bi-activity"></i> Healthcare Internship Portal
              </span>
              <h1 class="display-4 fw-bold mb-3">Find the Right Healthcare Internship for You</h1>
              <p class="lead text-muted mb-4">Search placements across hospitals, community clinics, and research labs to jump-start your healthcare career.</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <form class="hero-search shadow-sm bg-white" id="homeSearchForm">
                <label class="visually-hidden" for="homeSearchInput">Search placements</label>
                <div class="input-group input-group-lg">
                  <span class="input-group-text bg-transparent border-0 ps-4">
                    <i class="bi bi-search text-primary"></i>
                  </span>
                  <input
                    class="form-control border-0"
                    type="search"
                    id="homeSearchInput"
                    placeholder="Search by specialty, facility, or focus"
                    aria-label="Search placements"
                  />
                  <button class="btn btn-primary px-4" type="submit">Find Internships</button>
                </div>
              </form>
              <div class="mt-3 d-flex justify-content-center">
                <a class="btn btn-outline-primary btn-lg" href="placements.php">
                  Browse all placements
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Featured Internships</h2>
      <p class="text-muted mb-0">Hand-picked opportunities from trusted healthcare partners.</p>
    </div>
    <div class="row g-4" id="featuredInternships">
      <div class="col-md-4">
        <div class="card featured-card featured-card--teal h-100">
          <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <div>
                <span class="badge bg-soft-primary text-uppercase small mb-2">Nursing &amp; Patient Care</span>
                <h3 class="h5 fw-bold mb-1">Paediatric Nursing Rotation</h3>
                <p class="text-muted small mb-1">Riverside Children’s Hospital</p>
              </div>
              <span class="badge bg-light text-muted">In-person</span>
            </div>
            <p class="text-muted small flex-grow-1">
              Shadow senior nurses on the paediatric ward, support play therapy, and practise core skills in supervised simulation sessions.
            </p>
            <div class="mt-3">
              <span class="badge bg-primary-subtle me-1 mb-1">Paid</span>
              <span class="badge bg-primary-subtle me-1 mb-1">Preceptorship</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
              <div class="small text-muted">
                <i class="bi bi-geo-alt me-1"></i>London, UK<br />
                <i class="bi bi-clock me-1"></i>12 weeks
              </div>
              <div class="text-end">
                <p class="small fw-semibold mb-2">Deadline: 6 Dec 2025</p>
                <div class="btn-group" role="group" aria-label="Internship actions">
                  <button class="btn btn-outline-secondary btn-sm" type="button">
                    <i class="bi bi-bookmark"></i>
                  </button>
                  <a class="btn btn-primary btn-sm" href="placement-detail.php">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card featured-card featured-card--lavender h-100">
          <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <div>
                <span class="badge bg-soft-primary text-uppercase small mb-2">Community Health Outreach</span>
                <h3 class="h5 fw-bold mb-1">Community Health Outreach Fellow</h3>
                <p class="text-muted small mb-1">Greater Manchester Community Health</p>
              </div>
              <span class="badge bg-light text-muted">Hybrid</span>
            </div>
            <p class="text-muted small flex-grow-1">
              Coordinate local screening events, help build simple health-education packs, and assist with telehealth check-ins for underserved groups.
            </p>
            <div class="mt-3">
              <span class="badge bg-primary-subtle me-1 mb-1">Stipend</span>
              <span class="badge bg-primary-subtle me-1 mb-1">Mon–Fri, daytime</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
              <div class="small text-muted">
                <i class="bi bi-geo-alt me-1"></i>Manchester, UK (hybrid)<br />
                <i class="bi bi-clock me-1"></i>10 weeks
              </div>
              <div class="text-end">
                <p class="small fw-semibold mb-2">Deadline: 15 Dec 2025</p>
                <div class="btn-group" role="group" aria-label="Internship actions">
                  <button class="btn btn-outline-secondary btn-sm" type="button">
                    <i class="bi bi-bookmark"></i>
                  </button>
                  <a class="btn btn-primary btn-sm" href="placement-detail.php">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card featured-card featured-card--sunset h-100">
          <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <div>
                <span class="badge bg-soft-primary text-uppercase small mb-2">Diagnostics &amp; Imaging</span>
                <h3 class="h5 fw-bold mb-1">Radiology Imaging Support</h3>
                <p class="text-muted small mb-1">Leeds Diagnostic Centre</p>
              </div>
              <span class="badge bg-light text-muted">In-person</span>
            </div>
            <p class="text-muted small flex-grow-1">
              Assist technologists with patient prep, keep imaging rooms running smoothly, and learn the basics of QA checks across CT and X-ray.
            </p>
            <div class="mt-3">
              <span class="badge bg-primary-subtle me-1 mb-1">Evening shifts</span>
              <span class="badge bg-primary-subtle me-1 mb-1">Patient-facing</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
              <div class="small text-muted">
                <i class="bi bi-geo-alt me-1"></i>Leeds, UK<br />
                <i class="bi bi-clock me-1"></i>8 weeks
              </div>
              <div class="text-end">
                <p class="small fw-semibold mb-2">Deadline: 10 Jan 2026</p>
                <div class="btn-group" role="group" aria-label="Internship actions">
                  <button class="btn btn-outline-secondary btn-sm" type="button">
                    <i class="bi bi-bookmark"></i>
                  </button>
                  <a class="btn btn-primary btn-sm" href="placement-detail.php">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


      <section class="py-5">
        <div class="container">
          <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">How It Works</h2>
            <p class="text-muted mb-0">
              MediInternia Portal streamlines the journey from discovery to onboarding with tools designed for busy healthcare teams
              and ambitious students.
            </p>
          </div>
          <div class="row g-4">
            <div class="col-md-4">
              <div class="card h-100 border-0 shadow-sm step-card text-center">
                <div class="card-body">
                  <span class="step-number">1</span>
                  <h5 class="fw-semibold">Discover</h5>
                  <p class="small text-muted">Browse placements curated by specialty, location, and patient care setting.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100 border-0 shadow-sm step-card text-center">
                <div class="card-body">
                  <span class="step-number">2</span>
                  <h5 class="fw-semibold">Apply</h5>
                  <p class="small text-muted">Build your application package with resume, references, and tailored statements.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100 border-0 shadow-sm step-card text-center">
                <div class="card-body">
                  <span class="step-number">3</span>
                  <h5 class="fw-semibold">Grow</h5>
                  <p class="small text-muted">Track interviews, get feedback, and prepare for life-changing placements.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 bg-primary text-white">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h2 class="fw-bold mb-3">Ready to start your healthcare career journey?</h2>
              <p class="mb-0">
                Join the MediInternia Portal community to access curated placements, dedicated mentors, and smart tools for your next step.
              </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
              <a class="btn btn-light btn-lg" href="signup.php">Create an account</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-dark text-white py-4">
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
