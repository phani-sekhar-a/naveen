<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Interview Scheduling | MediInternia Internship Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>
  <body data-page="schedule" class="bg-light">
<?php include __DIR__ . "/../app/components/nav.php"; ?>


    <main class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-xl-8">
            <div class="card border-0 shadow-lg rounded-4">
              <div class="card-header bg-soft-primary d-flex flex-wrap justify-content-between align-items-center">
                <div>
                  <h1 class="h4 fw-bold mb-1">Book your interviews</h1>
                  <p class="text-muted mb-0">Select a date to view slots. Reserve instantly and get a confirmation.</p>
                </div>
                <div class="d-flex align-items-center gap-2 mt-3 mt-sm-0">
                  <button class="btn btn-outline-secondary btn-sm" type="button" id="prevMonthBtn"><i class="bi bi-chevron-left"></i></button>
                  <span class="fw-semibold" id="calendarMonth"></span>
                  <button class="btn btn-outline-secondary btn-sm" type="button" id="nextMonthBtn"><i class="bi bi-chevron-right"></i></button>
                </div>
              </div>
              <div class="card-body p-4">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="calendar" id="scheduleCalendar"></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label fw-semibold" for="slotDatePicker">Quick date selection</label>
                      <input class="form-control" type="date" id="slotDatePicker" />
                    </div>
                    <div class="card border-0 shadow-sm slot-card">
                      <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                          <h2 class="h6 fw-semibold mb-0">Available slots</h2>
                          <span class="badge bg-primary-subtle text-primary" id="slotCountBadge">0</span>
                        </div>
                        <span class="badge bg-light text-secondary" id="slotDateLabel">Select a date</span>
                      </div>
                      <div class="card-body">
                        <div class="list-group list-group-flush" id="slotList">
                          <div class="text-center text-muted py-3">Choose a date to view slots.</div>
                        </div>
                        <div class="slot-insights mt-3" id="slotInsights">
                          <div class="text-muted small">Select a date to see slot insights.</div>
                        </div>
                        <div class="mt-3 d-none" id="noSlotsWrap">
                          <div class="alert alert-warning mb-2">No slots on this date.</div>
                          <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#waitlistModal">Join waitlist for an earlier slot</button>
                        </div>
                      </div>
                    </div>
                    <div class="alert alert-info d-flex align-items-center gap-2 mt-3">
                      <i class="bi bi-lightbulb"></i>
                      <span>Tip: Book at least 48 hours ahead so screening can finish on time.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
              <div class="card-body p-4">
                <h2 class="h5 fw-semibold mb-3">Upcoming interviews</h2>
                <div class="list-group list-group-flush" id="upcomingInterviews"></div>
              </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
              <div class="card-header bg-soft-primary">
                <h2 class="h6 fw-semibold mb-0">Reminder preferences</h2>
              </div>
              <div class="card-body">
                <form id="reminderForm">
                  <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="smsReminder" checked />
                    <label class="form-check-label" for="smsReminder">SMS reminder 1 hour before</label>
                  </div>
                  <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="emailReminder" checked />
                    <label class="form-check-label" for="emailReminder">Email summary each morning</label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="reminderNotes">Notes for the interviewer</label>
                    <textarea class="form-control" id="reminderNotes" rows="3" placeholder="Share access instructions or preferred topics."></textarea>
                  </div>
                  <button class="btn btn-primary w-100" type="submit">Save reminders</button>
                  <div class="alert alert-success d-none mt-3" id="reminderAlert">Reminder preferences saved.</div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="modal fade" id="slotBookingModal" tabindex="-1" aria-labelledby="slotBookingLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="slotBookingLabel">Book interview slot</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="small text-muted mb-2">Selected slot</p>
            <p class="fw-semibold" id="slotBookingDetails"></p>
            <form id="slotBookingForm" class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="candidateName">Full name</label>
                  <input class="form-control" type="text" id="candidateName" placeholder="Person A" required />
                  <div class="invalid-feedback">Enter your name.</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="candidateEmail">Email</label>
                  <input class="form-control" type="email" id="candidateEmail" placeholder="persona@example.com" required />
                  <div class="invalid-feedback">Enter a valid email.</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="meetingMode">Meeting mode</label>
                  <select class="form-select" id="meetingMode" required>
                    <option value="" disabled selected>Select</option>
                    <option value="video">Video call</option>
                    <option value="phone">Phone call</option>
                    <option value="onsite">On-site</option>
                  </select>
                  <div class="invalid-feedback">Choose a meeting mode.</div>
                </div>
                <div class="col-12">
                  <label class="form-label" for="candidateNotes">Notes (optional)</label>
                  <textarea class="form-control" id="candidateNotes" rows="2" placeholder="Access needs or brief agenda."></textarea>
                </div>
              </div>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="shareCalendar" checked />
                <label class="form-check-label" for="shareCalendar">Share booking with my mentor</label>
              </div>
              <div class="mt-3 d-flex justify-content-between align-items-center">
                <span class="text-muted small">A confirmation will appear instantly.</span>
                <button class="btn btn-primary" type="submit">Confirm booking</button>
              </div>
              <div class="alert alert-success d-none mt-3" id="bookingAlert">
                Interview slot confirmed! Invites are on the way.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="waitlistModal" tabindex="-1" aria-labelledby="waitlistLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-soft-secondary">
            <h1 class="modal-title fs-5" id="waitlistLabel">Join waitlist for earlier slot</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="waitlistForm" class="needs-validation" novalidate>
              <div class="mb-3">
                <label class="form-label" for="waitlistDate">Target date</label>
                <input class="form-control" type="date" id="waitlistDate" required />
                <div class="invalid-feedback">Pick a date to monitor.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="waitlistWindow">Preferred time window</label>
                <select class="form-select" id="waitlistWindow" required>
                  <option value="" disabled selected>Select a window</option>
                  <option value="morning">Morning (8:00–11:30)</option>
                  <option value="afternoon">Afternoon (12:30–16:30)</option>
                  <option value="evening">Evening (17:00–19:00)</option>
                </select>
                <div class="invalid-feedback">Select a time window.</div>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="waitlistNotify" checked />
                <label class="form-check-label" for="waitlistNotify">Notify me by email and SMS</label>
              </div>
              <button class="btn btn-secondary w-100" type="submit">Join waitlist</button>
              <div class="alert alert-success d-none mt-3" id="waitlistAlert">You're on the waitlist. We'll alert you if a slot opens.</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" id="slotToast">
        <div class="d-flex">
          <div class="toast-body">
            <i class="bi bi-check-circle me-2"></i>Interview slot confirmed! Calendar invites are on the way.
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>

    <footer class="bg-dark text-white py-4">
      <div class="container text-center small">&copy; <span id="currentYear"></span> MediInternia Internship Portal. All rights reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const now = new Date();
        let viewYear = now.getFullYear();
        let viewMonth = now.getMonth();
        const monthLabel = document.getElementById('calendarMonth');
        const cal = document.getElementById('scheduleCalendar');
        const slotDatePicker = document.getElementById('slotDatePicker');
        const slotList = document.getElementById('slotList');
        const slotDateLabel = document.getElementById('slotDateLabel');
        const slotCountBadge = document.getElementById('slotCountBadge');
        const slotInsights = document.getElementById('slotInsights');
        const noSlotsWrap = document.getElementById('noSlotsWrap');
        const upcoming = document.getElementById('upcomingInterviews');

        function fmtMonth(year, month) {
          return new Date(year, month, 1).toLocaleString(undefined, { month: 'long', year: 'numeric' });
        }

        function daysInMonth(year, month) {
          return new Date(year, month + 1, 0).getDate();
        }

        function buildCalendar(year, month) {
          monthLabel.textContent = fmtMonth(year, month);
          cal.innerHTML = '';
          const start = new Date(year, month, 1);
          const startWeekday = (start.getDay() + 6) % 7;
          const dcount = daysInMonth(year, month);
          const grid = document.createElement('div');
          grid.className = 'row row-cols-7 g-2';
          for (let i = 0; i < startWeekday; i++) {
            const blank = document.createElement('div');
            blank.className = 'col';
            grid.appendChild(blank);
          }
          for (let d = 1; d <= dcount; d++) {
            const col = document.createElement('div');
            col.className = 'col';
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'btn btn-light w-100 border';
            btn.textContent = d;
            const date = new Date(year, month, d);
            btn.dataset.iso = date.toISOString().slice(0, 10);
            btn.addEventListener('click', () => selectDate(btn.dataset.iso));
            col.appendChild(btn);
            grid.appendChild(col);
          }
          cal.appendChild(grid);
        }

        function mockSlotsFor(iso) {
          const seed = iso.split('-').join('');
          let h = 0;
          for (let i = 0; i < seed.length; i++) h = (h * 33 + seed.charCodeAt(i)) % 97;
          const count = [0,1,2,3,4,5,6][h % 7];
          const slots = [];
          const baseHours = [9, 10, 11, 13, 14, 15, 16];
          for (let i = 0; i < count; i++) {
            const hour = baseHours[(h + i) % baseHours.length];
            const start = `${String(hour).padStart(2,'0')}:00`;
            const end = `${String(hour+1).padStart(2,'0')}:00`;
            slots.push({ start, end, id: `${iso}-${start.replace(':','')}` });
          }
          return slots;
        }

        function selectDate(iso) {
          slotDatePicker.value = iso;
          slotDateLabel.textContent = new Date(iso).toLocaleDateString();
          const slots = mockSlotsFor(iso);
          slotList.innerHTML = '';
          slotInsights.innerHTML = '';
          slotCountBadge.textContent = String(slots.length);
          noSlotsWrap.classList.toggle('d-none', slots.length > 0);

          if (slots.length === 0) {
            slotList.innerHTML = '<div class="text-center text-muted py-3">No slots on this date. Try another day or join the waitlist.</div>';
            slotInsights.innerHTML = '<div class="text-muted small">Tip: Tuesdays and Thursdays tend to have more availability.</div>';
            return;
          }

          slots.forEach(s => {
            const item = document.createElement('div');
            item.className = 'list-group-item d-flex justify-content-between align-items-center';
            const left = document.createElement('div');
            left.innerHTML = `<strong>${s.start}–${s.end}</strong> <span class="text-muted small ms-2">Video or On-site</span>`;
            const btn = document.createElement('button');
            btn.className = 'btn btn-sm btn-primary';
            btn.textContent = 'Book';
            btn.addEventListener('click', () => openBooking(iso, s));
            item.appendChild(left);
            item.appendChild(btn);
            slotList.appendChild(item);
          });

          const best = slots[0];
          slotInsights.innerHTML = `<div class="text-muted small"><i class="bi bi-graph-up-arrow me-1"></i>Best match: ${best.start}–${best.end}. Book early to avoid conflicts.</div>`;
        }

        function addUpcoming(iso, slot) {
          const li = document.createElement('a');
          li.href = '#';
          li.className = 'list-group-item list-group-item-action d-flex justify-content-between align-items-center';
          li.innerHTML = `<div><strong>${new Date(iso).toLocaleDateString()}</strong> • ${slot.start}–${slot.end}<div class="text-muted small">Interview scheduled</div></div><span class="badge bg-success-subtle text-success">Booked</span>`;
          upcoming.prepend(li);
        }

        const bookingModal = new bootstrap.Modal('#slotBookingModal');
        const bookingAlert = document.getElementById('bookingAlert');
        const bookingDetails = document.getElementById('slotBookingDetails');
        let bookingCtx = null;

        function openBooking(iso, slot) {
          bookingCtx = { iso, slot };
          bookingDetails.textContent = `${new Date(iso).toLocaleDateString()} • ${slot.start}–${slot.end}`;
          bookingAlert.classList.add('d-none');
          document.getElementById('slotBookingForm').reset();
          bookingModal.show();
        }

        document.getElementById('slotBookingForm').addEventListener('submit', (e) => {
          e.preventDefault();
          const form = e.currentTarget;
          if (!form.checkValidity()) { form.classList.add('was-validated'); return; }
          bookingAlert.classList.remove('d-none');
          setTimeout(() => {
            bookingModal.hide();
            const toast = new bootstrap.Toast(document.getElementById('slotToast'));
            toast.show();
            if (bookingCtx) addUpcoming(bookingCtx.iso, bookingCtx.slot);
          }, 600);
        });

        document.getElementById('reminderForm').addEventListener('submit', (e) => {
          e.preventDefault();
          const alert = document.getElementById('reminderAlert');
          alert.classList.remove('d-none');
          setTimeout(() => alert.classList.add('d-none'), 1500);
        });

        const waitlistModal = new bootstrap.Modal('#waitlistModal');
        document.getElementById('waitlistForm').addEventListener('submit', (e) => {
          e.preventDefault();
          const form = e.currentTarget;
          if (!form.checkValidity()) { form.classList.add('was-validated'); return; }
          const ok = document.getElementById('waitlistAlert');
          ok.classList.remove('d-none');
          setTimeout(() => { ok.classList.add('d-none'); waitlistModal.hide(); }, 1000);
        });

        document.getElementById('prevMonthBtn').addEventListener('click', () => {
          viewMonth -= 1;
          if (viewMonth < 0) { viewMonth = 11; viewYear -= 1; }
          buildCalendar(viewYear, viewMonth);
        });
        document.getElementById('nextMonthBtn').addEventListener('click', () => {
          viewMonth += 1;
          if (viewMonth > 11) { viewMonth = 0; viewYear += 1; }
          buildCalendar(viewYear, viewMonth);
        });

        slotDatePicker.addEventListener('change', (e) => selectDate(e.target.value));

        buildCalendar(viewYear, viewMonth);
        selectDate(now.toISOString().slice(0,10));
        document.getElementById('currentYear')?.append(document.createTextNode(String(new Date().getFullYear())));
      });
    </script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
