<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Internship Listings | MediInternia Internship Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <style>
      .meta-chip{font-size:.75rem;padding:.25rem .5rem;border-radius:999px}
      .deadline-pill{font-size:.75rem}
      .card-title.clamp-2,.card-text.clamp-2{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}
      .card-text.clamp-3{display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}
      .btn-icon{display:inline-flex;align-items:center;gap:.4rem}
      .shortlist-badge{position:absolute;top:10px;right:10px}
    </style>
  </head>
  <body data-page="placements" class="bg-light">
    <?php include __DIR__ . "/../app/components/nav.php"; ?>

    <main class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
              <div class="card-body p-4">
                <h1 class="h4 fw-bold mb-3">Filter placements</h1>
                <form id="internshipFilters" novalidate>
                  <div class="mb-3">
                    <label class="form-label" for="filterKeyword">Keyword</label>
                    <input class="form-control" type="search" id="filterKeyword" placeholder="Search by role or facility" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="filterCategory">Specialty</label>
                    <select class="form-select" id="filterCategory">
                      <option value="">All specialties</option>
                      <option value="nursing">Nursing &amp; Patient Care</option>
                      <option value="therapy">Therapy &amp; Rehabilitation</option>
                      <option value="diagnostics">Diagnostics &amp; Imaging</option>
                      <option value="administration">Healthcare Administration</option>
                      <option value="public-health">Public Health &amp; Outreach</option>
                    </select>
                  </div>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label" for="filterLocation">Location</label>
                      <input class="form-control" type="text" id="filterLocation" placeholder="City or region" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="filterMode">Mode</label>
                      <select class="form-select" id="filterMode">
                        <option value="">Any</option>
                        <option value="in-person">In-person</option>
                        <option value="hybrid">Hybrid</option>
                        <option value="remote">Remote</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-check form-switch my-3">
                    <input class="form-check-input" type="checkbox" id="filterFeatured" />
                    <label class="form-check-label" for="filterFeatured">Show featured placements only</label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="filterSort">Sort by</label>
                    <select class="form-select" id="filterSort">
                      <option value="deadline">Deadline (soonest)</option>
                      <option value="newest">Recently added</option>
                      <option value="name">Alphabetical</option>
                    </select>
                  </div>
                  <div class="d-flex flex-column gap-2">
                    <button class="btn btn-primary" type="submit">Apply filters</button>
                    <button class="btn btn-outline-secondary" type="reset" id="filtersReset">Clear filters</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
              <div class="card-body p-4">
                <h2 class="h5 fw-bold mb-3">Manage postings</h2>
                <p class="text-muted small">Employers can add placements and monitor applicant volume.</p>
                <div class="d-grid gap-2">
                  <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#createListingModal">
                    <i class="bi bi-plus-circle me-2"></i>Create new listing
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
              <div>
                <h2 class="h3 fw-bold mb-1">Healthcare placements</h2>
                <p class="text-muted mb-0" id="internshipCount">Explore placements across hospitals, clinics, and research centers.</p>
              </div>
              <div class="mt-3 mt-md-0 d-flex gap-2">
                <button class="btn btn-outline-info btn-icon" type="button" id="openShortlistBtn"><i class="bi bi-bookmark-star"></i>Shortlist</button>
                <button class="btn btn-outline-secondary btn-icon" type="button" id="exportCsvBtn"><i class="bi bi-download"></i>Export CSV</button>
              </div>
            </div>

            <div class="row g-4" id="internshipResults"></div>

            <div class="mt-5">
              <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3">
                <div>
                  <h3 class="h4 fw-bold mb-1">Upcoming internship concepts</h3>
                  <p class="text-muted mb-0">Preview pipeline opportunities our partners plan to publish next quarter.</p>
                </div>
                <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#notifyUpcomingModal">
                  <i class="bi bi-bell me-2"></i>Get notified when live
                </button>
              </div>
              <div class="row g-4 mt-1" id="upcomingInternships"></div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="modal fade" id="createListingModal" tabindex="-1" aria-labelledby="createListingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="createListingModalLabel">Create internship listing</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="createListingForm" class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="listingTitle">Internship title</label>
                  <input class="form-control" type="text" id="listingTitle" required />
                  <div class="invalid-feedback">Provide a title for the internship.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="listingFacility">Facility</label>
                  <input class="form-control" type="text" id="listingFacility" required />
                  <div class="invalid-feedback">Facility name is required.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="listingCategory">Specialty</label>
                  <select class="form-select" id="listingCategory" required>
                    <option value="" disabled selected>Select specialty</option>
                    <option value="nursing">Nursing &amp; Patient Care</option>
                    <option value="therapy">Therapy &amp; Rehabilitation</option>
                    <option value="diagnostics">Diagnostics &amp; Imaging</option>
                    <option value="administration">Healthcare Administration</option>
                    <option value="public-health">Public Health &amp; Outreach</option>
                  </select>
                  <div class="invalid-feedback">Select a specialty.</div>
                </div>
                <div class="col-md-3">
                  <label class="form-label" for="listingMode">Mode</label>
                  <select class="form-select" id="listingMode" required>
                    <option value="" selected disabled>Select mode</option>
                    <option value="in-person">In-person</option>
                    <option value="hybrid">Hybrid</option>
                    <option value="remote">Remote</option>
                  </select>
                  <div class="invalid-feedback">Choose a mode.</div>
                </div>
                <div class="col-md-3">
                  <label class="form-label" for="listingDeadline">Deadline</label>
                  <input class="form-control" type="date" id="listingDeadline" required />
                  <div class="invalid-feedback">Deadline is required.</div>
                </div>
                <div class="col-12">
                  <label class="form-label" for="listingDescription">Description</label>
                  <textarea class="form-control" id="listingDescription" rows="3" placeholder="Share responsibilities, rotations, and outcomes" required></textarea>
                  <div class="invalid-feedback">Provide a brief description.</div>
                </div>
                <div class="col-12">
                  <label class="form-label" for="listingRequirements">Requirements</label>
                  <textarea class="form-control" id="listingRequirements" rows="2" placeholder="List core requirements" required></textarea>
                  <div class="invalid-feedback">Outline the requirements.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="listingContact">Point of contact</label>
                  <input class="form-control" type="text" id="listingContact" placeholder="Name &amp; email" required />
                  <div class="invalid-feedback">Include a contact.</div>
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="listingCapacity">Intern capacity</label>
                  <input class="form-control" type="number" id="listingCapacity" min="1" value="1" required />
                  <div class="invalid-feedback">Set the number of interns.</div>
                </div>
              </div>
              <div class="mt-4 d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">Save listing</button>
              </div>
              <div class="alert alert-success d-none mt-3" id="listingSuccess">Listing saved as draft for review.</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="notifyUpcomingModal" tabindex="-1" aria-labelledby="notifyUpcomingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="notifyUpcomingModalLabel">Upcoming internship alerts</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="upcomingNotifyForm" novalidate class="needs-validation">
              <div class="mb-3">
                <label class="form-label" for="upcomingEmail">Email address</label>
                <input class="form-control" type="email" id="upcomingEmail" placeholder="you@example.com" required />
                <div class="invalid-feedback">Provide a valid email.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="upcomingFocus">Preferred focus area</label>
                <select class="form-select" id="upcomingFocus" required>
                  <option value="" disabled selected>Select a focus</option>
                  <option value="nursing">Pediatric and acute care</option>
                  <option value="community">Community outreach &amp; public health</option>
                  <option value="research">Clinical research &amp; informatics</option>
                  <option value="administration">Healthcare leadership &amp; administration</option>
                </select>
                <div class="invalid-feedback">Select a focus area.</div>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="upcomingDigest" checked />
                <label class="form-check-label" for="upcomingDigest">Send me monthly pipeline digests</label>
              </div>
              <button class="btn btn-primary w-100" type="submit">Notify me</button>
              <div class="alert alert-success d-none mt-3" id="upcomingAlert">
                We will notify you as soon as these opportunities are published.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="shortlistModal" tabindex="-1" aria-labelledby="shortlistModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="shortlistModalLabel">My Shortlist</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="shortlistContainer" class="row g-3"></div>
            <div class="alert alert-light border mt-3 d-none" id="shortlistEmpty">No saved placements yet.</div>
          </div>
          <div class="modal-footer">
            <a href="calendar.php" class="btn btn-primary">Open Status Tracker</a>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-dark text-white py-4">
      <div class="container text-center small">
        &copy; <span id="currentYear"></span> MediInternia Internship Portal. All rights reserved.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
      (function () {
        const resultsEl = document.getElementById('internshipResults');
        const countEl = document.getElementById('internshipCount');
        const formFilters = document.getElementById('internshipFilters');
        const featuredOnlyEl = document.getElementById('filterFeatured');
        const sortEl = document.getElementById('filterSort');
        const keywordEl = document.getElementById('filterKeyword');
        const categoryEl = document.getElementById('filterCategory');
        const locationEl = document.getElementById('filterLocation');
        const modeEl = document.getElementById('filterMode');
        const openShortlistBtn = document.getElementById('openShortlistBtn');
        const shortlistContainer = document.getElementById('shortlistContainer');
        const shortlistEmpty = document.getElementById('shortlistEmpty');
        const exportCsvBtn = document.getElementById('exportCsvBtn');

        const seedListings = [
          { id: 1,  title: 'Pediatric Nursing Rotation',           facility: 'Green Valley Hospital',          category: 'nursing',       mode: 'in-person', location: 'Manchester',    deadline: '2026-01-31', featured: true,  description: 'Support acute pediatrics, family education rounds, and tele-triage exposure.', requirements: 'BLS, HIPAA, 2 faculty refs' },
          { id: 2,  title: 'Community Health Outreach Fellow',     facility: 'Hopewell Clinics Network',       category: 'public-health', mode: 'hybrid',    location: 'Leeds',         deadline: '2026-02-12', featured: false, description: 'Design outreach campaigns and measure impact with local councils.', requirements: 'DBS, immunisations' },
          { id: 4,  title: 'Radiology Imaging Support',            facility: 'Mercy Diagnostics Lab',          category: 'diagnostics',   mode: 'in-person', location: 'Liverpool',     deadline: '2026-02-20', featured: false, description: 'Shadow image workflows and assist with patient intake & prep.', requirements: 'Radiation safety, mentor sign-off' },
          { id: 7,  title: 'Clinical Informatics Analyst',         facility: 'Northwest Health Partners',      category: 'administration',mode: 'remote',    location: 'Remote (UK)',   deadline: '2026-01-28', featured: true,  description: 'Build reporting views for leadership dashboards using mock EHR data.', requirements: 'Excel/Sheets, data ethics briefing' },
          { id: 9,  title: 'Therapy & Rehabilitation Assistant',   facility: 'Sunrise Rehabilitation Center',  category: 'therapy',       mode: 'hybrid',    location: 'Birmingham',    deadline: '2026-03-05', featured: false, description: 'Assist PT/OT teams with patient exercises and documentation.', requirements: 'Manual handling training' }
        ];

        const upcoming = [
          { title: 'Child Life Services Shadowing', org: 'Rocky Mountain Children’s', month: 'Apr' },
          { title: 'Laboratory Sciences Rotation', org: 'Mercy Diagnostics Lab', month: 'May' },
          { title: 'Telehealth Triage Assistant', org: 'Hopewell Clinics Network', month: 'Jun' }
        ];

        const state = { listings: [...seedListings], shortlist: loadShortlist() };

        function loadShortlist(){ try{ return JSON.parse(localStorage.getItem('mi_shortlist')||'[]'); }catch(e){ return []; } }
        function saveShortlist(){ localStorage.setItem('mi_shortlist', JSON.stringify(state.shortlist)); }

        function fmtDeadline(d) {
          const dt = new Date(d + 'T00:00:00Z');
          return dt.toLocaleDateString(undefined, { year: 'numeric', month: 'short', day: 'numeric' });
        }

        function isSaved(id){ return state.shortlist.includes(id); }

        function cardTemplate(item) {
          const catMap = {
            'nursing':        { badge: 'bg-primary-subtle text-primary', icon: 'bi-heart-pulse' },
            'therapy':        { badge: 'bg-success-subtle text-success', icon: 'bi-bandaid' },
            'diagnostics':    { badge: 'bg-info-subtle text-info',      icon: 'bi-activity' },
            'administration': { badge: 'bg-secondary-subtle text-secondary', icon: 'bi-building' },
            'public-health':  { badge: 'bg-warning-subtle text-warning', icon: 'bi-people' }
          };
          const meta = catMap[item.category] || catMap['administration'];
          const saved = isSaved(item.id);
          return `
            <div class="col-12 col-md-6">
              <div class="card border-0 shadow-sm rounded-4 h-100 position-relative">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="meta-chip ${meta.badge}"><i class="bi ${meta.icon} me-1"></i>${item.category.replace('-', ' ')}</span>
                    <span class="meta-chip bg-light text-muted"><i class="bi bi-geo-alt me-1"></i>${item.location}</span>
                    <span class="meta-chip bg-light text-muted"><i class="bi bi-laptop me-1"></i>${item.mode}</span>
                  </div>
                  <h3 class="h5 card-title clamp-2 mb-1">${item.title}</h3>
                  <p class="text-muted mb-2">${item.facility}</p>
                  <p class="card-text clamp-3">${item.description}</p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                  <span class="badge bg-warning-subtle text-warning deadline-pill"><i class="bi bi-hourglass-split me-1"></i>Deadline: ${fmtDeadline(item.deadline)}</span>
                  <div class="d-flex gap-2">
                    <a href="placement-detail.php" class="btn btn-sm btn-primary">View</a>
                    <button class="btn btn-sm ${saved ? 'btn-success' : 'btn-outline-secondary'}" data-act="toggle-save" data-id="${item.id}">
                      <i class="bi ${saved ? 'bi-bookmark-star-fill' : 'bi-bookmark'} me-1"></i>${saved ? 'Saved' : 'Save'}
                    </button>
                  </div>
                </div>
              </div>
            </div>
          `;
        }

        function upcomingCardTemplate(u) {
          return `
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                  <h4 class="h6 mb-1">${u.title}</h4>
                  <p class="text-muted small mb-2">${u.org}</p>
                  <span class="badge bg-light text-secondary"><i class="bi bi-calendar-event me-1"></i>Target: ${u.month}</span>
                </div>
              </div>
            </div>
          `;
        }

        function applyFilters() {
          const kw = keywordEl.value.trim().toLowerCase();
          const cat = categoryEl.value;
          const loc = locationEl.value.trim().toLowerCase();
          const mode = modeEl.value;
          const featuredOnly = featuredOnlyEl.checked;

          let items = [...state.listings];
          if (kw) items = items.filter(i => [i.title, i.facility, i.description].some(v => v.toLowerCase().includes(kw)));
          if (cat) items = items.filter(i => i.category === cat);
          if (loc) items = items.filter(i => (i.location || '').toLowerCase().includes(loc));
          if (mode) items = items.filter(i => i.mode === mode);
          if (featuredOnly) items = items.filter(i => i.featured);

          const sort = sortEl.value;
          if (sort === 'deadline') items.sort((a, b) => new Date(a.deadline) - new Date(b.deadline));
          else if (sort === 'newest') items.sort((a, b) => b.id - a.id);
          else if (sort === 'name') items.sort((a, b) => a.title.localeCompare(b.title));

          resultsEl.innerHTML = items.map(cardTemplate).join('') || `
            <div class="col-12"><div class="alert alert-light border d-flex align-items-center" role="alert">
              <i class="bi bi-search me-2"></i>No placements match your filters. Try broadening your search.
            </div></div>`;
          countEl.textContent = items.length ? `${items.length} placements match your criteria.` : `No results for the selected filters.`;
        }

        function renderInitial() {
          resultsEl.innerHTML = state.listings.map(cardTemplate).join('');
          document.getElementById('upcomingInternships').innerHTML = upcoming.map(upcomingCardTemplate).join('');
          document.getElementById('currentYear').textContent = new Date().getFullYear();
          countEl.textContent = `${state.listings.length} placements available.`;
        }

        resultsEl.addEventListener('click', function(e){
          const btn = e.target.closest('[data-act="toggle-save"]');
          if(!btn) return;
          const id = parseInt(btn.getAttribute('data-id'),10);
          const idx = state.shortlist.indexOf(id);
          if(idx >= 0) state.shortlist.splice(idx,1); else state.shortlist.push(id);
          saveShortlist();
          applyFilters();
        });

        function openShortlist() {
          const items = state.listings.filter(i => state.shortlist.includes(i.id));
          shortlistContainer.innerHTML = items.map(i => `
            <div class="col-12 col-md-6">
              <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                  <h4 class="h6 mb-1">${i.title}</h4>
                  <p class="text-muted small mb-2">${i.facility}</p>
                  <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-light text-secondary">${i.location}</span>
                    <span class="badge bg-light text-secondary">${i.mode}</span>
                    <span class="badge bg-warning-subtle text-warning">Deadline: ${fmtDeadline(i.deadline)}</span>
                  </div>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                  <a class="btn btn-sm btn-primary" href="placement-detail.php">View</a>
                  <button class="btn btn-sm btn-outline-danger" data-remove="${i.id}"><i class="bi bi-x-circle me-1"></i>Remove</button>
                </div>
              </div>
            </div>
          `).join('');
          shortlistEmpty.classList.toggle('d-none', items.length > 0);
          const modal = new bootstrap.Modal(document.getElementById('shortlistModal'));
          modal.show();
        }

        shortlistContainer.addEventListener('click', function(e){
          const btn = e.target.closest('[data-remove]');
          if(!btn) return;
          const id = parseInt(btn.getAttribute('data-remove'),10);
          state.shortlist = state.shortlist.filter(x => x !== id);
          saveShortlist();
          openShortlist();
          applyFilters();
        });

        openShortlistBtn.addEventListener('click', openShortlist);

        function toCSV(rows) {
          const header = ['Title','Facility','Category','Mode','Location','Deadline'];
          const body = rows.map(r => [r.title, r.facility, r.category, r.mode, r.location, r.deadline]);
          const all = [header, ...body].map(r => r.map(x => `"${String(x).replace(/"/g,'""')}"`).join(',')).join('\n');
          return all;
        }

        exportCsvBtn.addEventListener('click', function(){
          const kw = keywordEl.value.trim().toLowerCase();
          const cat = categoryEl.value;
          const loc = locationEl.value.trim().toLowerCase();
          const mode = modeEl.value;
          const featuredOnly = featuredOnlyEl.checked;
          let items = [...state.listings];
          if (kw) items = items.filter(i => [i.title, i.facility, i.description].some(v => v.toLowerCase().includes(kw)));
          if (cat) items = items.filter(i => i.category === cat);
          if (loc) items = items.filter(i => (i.location || '').toLowerCase().includes(loc));
          if (mode) items = items.filter(i => i.mode === mode);
          if (featuredOnly) items = items.filter(i => i.featured);
          const csv = toCSV(items);
          const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
          const url = URL.createObjectURL(blob);
          const a = document.createElement('a');
          a.href = url;
          a.download = 'placements_export.csv';
          document.body.appendChild(a);
          a.click();
          a.remove();
          URL.revokeObjectURL(url);
        });

        formFilters.addEventListener('submit', function (e) {
          e.preventDefault();
          applyFilters();
        });
        formFilters.addEventListener('reset', function () {
          setTimeout(applyFilters, 0);
        });
        [keywordEl, categoryEl, locationEl, modeEl, featuredOnlyEl, sortEl].forEach(el => {
          el.addEventListener('change', applyFilters);
          el.addEventListener('keyup', (ev) => { if (ev.key === 'Enter') applyFilters(); });
        });

        const createListingForm = document.getElementById('createListingForm');
        createListingForm.addEventListener('submit', function (e) {
          e.preventDefault();
          if (!createListingForm.checkValidity()) {
            createListingForm.classList.add('was-validated');
            return;
          }
          const newItem = {
            id: Date.now(),
            title: document.getElementById('listingTitle').value.trim(),
            facility: document.getElementById('listingFacility').value.trim(),
            category: document.getElementById('listingCategory').value,
            mode: document.getElementById('listingMode').value,
            location: 'TBD',
            deadline: document.getElementById('listingDeadline').value,
            featured: false,
            description: document.getElementById('listingDescription').value.trim(),
            requirements: document.getElementById('listingRequirements').value.trim()
          };
          state.listings.push(newItem);
          document.getElementById('listingSuccess').classList.remove('d-none');
          applyFilters();
          setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('createListingModal'));
            modal && modal.hide();
            createListingForm.reset();
            createListingForm.classList.remove('was-validated');
            document.getElementById('listingSuccess').classList.add('d-none');
          }, 900);
        });

        (function initUpcoming(){
          document.getElementById('upcomingInternships').innerHTML = upcoming.map(upcomingCardTemplate).join('');
        })();

        (function initYear(){ document.getElementById('currentYear').textContent = new Date().getFullYear(); })();

        (function wireUpcomingForm(){
          const f = document.getElementById('upcomingNotifyForm');
          const alert = document.getElementById('upcomingAlert');
          f.addEventListener('submit', function(e){
            e.preventDefault();
            if(!f.checkValidity()){ f.classList.add('was-validated'); return; }
            alert.classList.remove('d-none');
            setTimeout(()=>{
              const modal = bootstrap.Modal.getInstance(document.getElementById('notifyUpcomingModal'));
              modal && modal.hide();
              f.reset();
              f.classList.remove('was-validated');
              alert.classList.add('d-none');
            }, 900);
          });
        })();

        renderInitial();
      })();
    </script>
  </body>
</html>
