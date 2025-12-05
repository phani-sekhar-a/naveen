<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Application Submission | MediInternia Internship Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <style>
      body{font-family:Nunito,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,"Helvetica Neue",Arial}
      .dropzone{border:2px dashed #cfe2ff;background:#f8fbff;border-radius:12px;padding:18px;cursor:pointer;transition:.15s}
      .dropzone.dragover{background:#edf5ff;border-color:#9ec5fe}
      .counter{font-size:.85rem}
      .fs-xs{font-size:.8rem}
    </style>
  </head>
  <body class="bg-light" data-page="application">
    <?php include __DIR__ . "/../app/components/nav.php"; ?>


    <main class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4">
              <div class="card-header bg-white">
                <h1 class="h5 fw-bold mb-0">Internship application</h1>
              </div>
              <div class="card-body">
                <form id="appForm" class="needs-validation" novalidate>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label" for="appName">Full name</label>
                      <input class="form-control" type="text" id="appName" placeholder="Person A" required />
                      <div class="invalid-feedback">Enter your name.</div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="appEmail">Email</label>
                      <input class="form-control" type="email" id="appEmail" placeholder="person@example.com" required />
                      <div class="invalid-feedback">Provide a valid email.</div>
                    </div>

                    <div class="col-12">
                      <label class="form-label" for="appInternship">Internship</label>
                      <select class="form-select" id="appInternship" required>
                        <option value="" disabled selected>Select an internship</option>
                        <option value='{"title":"Pediatric Nursing Rotation","facility":"Green Valley Hospital"}'>Pediatric Nursing Rotation — Green Valley Hospital</option>
                        <option value='{"title":"Community Health Outreach Fellow","facility":"Hopewell Clinics Network"}'>Community Health Outreach Fellow — Hopewell Clinics Network</option>
                        <option value='{"title":"Radiology Imaging Support","facility":"Mercy Diagnostics Lab"}'>Radiology Imaging Support — Mercy Diagnostics Lab</option>
                        <option value='{"title":"Clinical Informatics Analyst","facility":"Northwest Health Partners"}'>Clinical Informatics Analyst — Northwest Health Partners</option>
                      </select>
                      <div class="invalid-feedback">Choose a role.</div>
                    </div>

                    <div class="col-12">
                      <label class="form-label d-flex justify-content-between align-items-center" for="resumeInput">
                        <span>Resume</span>
                        <span class="text-muted fs-xs">PDF/DOCX • max 5 MB</span>
                      </label>
                      <div class="dropzone" id="resumeDrop">
                        <input type="file" id="resumeInput" accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="d-none" />
                        <div class="d-flex align-items-center gap-3">
                          <div class="display-6 text-primary"><i class="bi bi-file-earmark-arrow-up"></i></div>
                          <div>
                            <div class="fw-semibold" id="resumeLabel">Drag & drop your resume here, or click to browse</div>
                            <div class="text-muted fs-xs">We’ll do a quick client-side check for type and size.</div>
                          </div>
                        </div>
                      </div>
                      <div class="invalid-feedback d-block" id="resumeError" style="display:none;"></div>
                    </div>

                    <div class="col-12">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="form-label mb-0" for="coverLetter">Cover letter</label>
                        <div class="d-flex align-items-center gap-2">
                          <select class="form-select form-select-sm" id="templatePicker" style="width:auto">
                            <option value="" selected>Templates</option>
                            <option value="concise">Concise</option>
                            <option value="story">Story</option>
                          </select>
                          <span class="text-muted counter" id="clCounter">0 words</span>
                        </div>
                      </div>
                      <textarea class="form-control" id="coverLetter" rows="6" placeholder="Write a short, role-relevant cover letter..." required></textarea>
                      <div class="invalid-feedback">Add a short cover letter.</div>
                      <div class="progress mt-2" style="height:6px">
                        <div class="progress-bar" id="clMeter" role="progressbar" style="width:0%"></div>
                      </div>
                      <div class="form-text" id="clHint">Aim for 120–220 words.</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="confirmCheck" required />
                        <label class="form-check-label" for="confirmCheck">I confirm details are accurate for this application.</label>
                        <div class="invalid-feedback">Confirmation is required.</div>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex flex-column flex-md-row gap-2 mt-4">
                    <button class="btn btn-outline-secondary flex-fill" type="button" id="saveDraftBtn"><i class="bi bi-save me-1"></i>Save draft</button>
                    <button class="btn btn-primary flex-fill" type="submit"><i class="bi bi-send me-1"></i>Submit application</button>
                  </div>

                  <div class="alert alert-success d-none mt-3" id="successAlert">
                    Application submitted. Track progress in <a href="calendar.php" class="alert-link">Status Tracker</a>.
                  </div>
                  <div class="alert alert-danger d-none mt-3" id="errorAlert">
                    Please fix the highlighted fields and try again.
                  </div>
                  <div class="alert alert-info d-none mt-3" id="draftAlert">
                    Draft saved locally. You can return and continue later.
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4">
              <div class="card-header bg-white">
                <h2 class="h6 fw-semibold mb-0">Submission checklist</h2>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush" id="checklist">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Name & email
                    <span class="badge rounded-pill bg-secondary" data-ck="id">Pending</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Internship selected
                    <span class="badge rounded-pill bg-secondary" data-ck="role">Pending</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Resume attached
                    <span class="badge rounded-pill bg-secondary" data-ck="cv">Pending</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cover letter length
                    <span class="badge rounded-pill bg-secondary" data-ck="cl">Pending</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Confirmation checked
                    <span class="badge rounded-pill bg-secondary" data-ck="confirm">Pending</span>
                  </li>
                </ul>
                <p class="text-muted small mt-3">All checks turn green before a successful submission.</p>
              </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mt-4">
              <div class="card-body">
                <h3 class="h6 fw-semibold mb-2">What happens after submit?</h3>
<ol class="small text-muted mb-0">
  <li>
    <strong>Submitted</strong>
    <span class="badge bg-primary-subtle text-primary ms-1">Submitted</span>
    — your application is received and queued.
  </li>
  <li>
    <strong>Under review</strong>
    <span class="badge bg-info-subtle text-info ms-1">Under review</span>
    — the employer screens your resume and cover letter.
  </li>
  <li>
    <strong>Interview</strong>
    <span class="badge bg-warning-subtle text-warning ms-1">Interview</span>
    — you may be invited to a phone/video or onsite interview.
  </li>
  <li>
    <strong>Decision</strong>
    <span class="badge bg-secondary-subtle text-secondary ms-1">Decision</span>
    — the team finalises the outcome.
  </li>
  <li>
    <strong>Offer</strong>
    <span class="badge bg-success-subtle text-success ms-1">Offer</span>
    — if selected, you’ll receive an offer and next-steps.
  </li>
  <li class="mb-0">
    <strong>Onboarding</strong>
    <span class="badge bg-success-subtle text-success ms-1">Onboarding</span>
    — compliance checks and start-date confirmation.
  </li>
</ol>
<p class="text-muted small mt-3 mb-0">
  You can view each stage in <a href="calendar.php" class="link-primary">Status Tracker</a>. We’ll update the stage whenever something changes.
</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-dark text-white py-4">
      <div class="container text-center small">&copy; <span id="currentYear"></span> MediInternia Internship Portal. All rights reserved.</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
      (function(){
        const KEY_APPS='mi_student_apps';   // Status Tracker reads this
        const KEY_DRAFT='mi_app_draft';     // Save Draft feature

        const $=s=>document.querySelector(s);
        const appForm=$('#appForm');
        const resumeInput=$('#resumeInput');
        const resumeDrop=$('#resumeDrop');
        const resumeLabel=$('#resumeLabel');
        const resumeError=$('#resumeError');
        const templatePicker=$('#templatePicker');
        const coverLetter=$('#coverLetter');
        const clCounter=$('#clCounter');
        const clMeter=$('#clMeter');
        const saveDraftBtn=$('#saveDraftBtn');
        const successAlert=$('#successAlert');
        const errorAlert=$('#errorAlert');
        const draftAlert=$('#draftAlert');

        document.getElementById('currentYear').textContent=new Date().getFullYear();
        loadDraft();
        updateCoverStats();
        attachEvents();
        updateChecklist();

        function attachEvents(){
          resumeDrop.addEventListener('click',()=>resumeInput.click());
          resumeDrop.addEventListener('dragover',e=>{e.preventDefault();resumeDrop.classList.add('dragover');});
          resumeDrop.addEventListener('dragleave',()=>resumeDrop.classList.remove('dragover'));
          resumeDrop.addEventListener('drop',e=>{
            e.preventDefault(); resumeDrop.classList.remove('dragover');
            const f=e.dataTransfer.files && e.dataTransfer.files[0];
            if(f) attachResume(f);
          });
          resumeInput.addEventListener('change',e=>{
            const f=e.target.files && e.target.files[0];
            if(f) attachResume(f);
          });

          coverLetter.addEventListener('input',updateCoverStats);
          templatePicker.addEventListener('change',applyTemplate);

          ['#appName','#appEmail','#appInternship','#confirmCheck'].forEach(sel=>{
            const el=$(sel); el.addEventListener('input',updateChecklist); el.addEventListener('change',updateChecklist);
          });

          saveDraftBtn.addEventListener('click',()=>{
            const draft=collectForm(false);
            localStorage.setItem(KEY_DRAFT,JSON.stringify(draft));
            show(draftAlert,true); setTimeout(()=>show(draftAlert,false),1600);
          });

          appForm.addEventListener('submit',e=>{
            e.preventDefault();
            hideAlerts();
            if(!validateForm()){ show(errorAlert,true); return; }
            const payload=collectForm(true);
            const apps=loadApps();
            apps.push({
              title:payload.internship.title,
              facility:payload.internship.facility,
              applied:todayISO(),
              status:'Submitted',
              updated:todayISO()
            });
            localStorage.setItem(KEY_APPS,JSON.stringify(apps));
            localStorage.removeItem(KEY_DRAFT);
            show(successAlert,true);
            appForm.reset();
            resumeLabel.textContent='Drag & drop your resume here, or click to browse';
            updateChecklist(); updateCoverStats();
          });
        }

        function attachResume(file){
          const okType=/pdf|msword|officedocument\.wordprocessingml\.document/i.test(file.type)||/\.(pdf|docx?|DOCX?)$/.test(file.name);
          const okSize=file.size<=5*1024*1024;
          if(!okType){showResumeError('Unsupported file type. Use PDF or DOC/DOCX.');return;}
          if(!okSize){showResumeError('File too large. Max 5 MB.');return;}
          resumeLabel.textContent=`${file.name} • ${(file.size/1024/1024).toFixed(2)} MB`;
          showResumeError('');
          updateChecklist();
        }
        function showResumeError(msg){
          if(!msg){resumeError.style.display='none';resumeError.textContent='';}
          else{resumeError.style.display='block';resumeError.textContent=msg;}
        }

        function wordCount(txt){return (txt||'').trim().split(/\s+/).filter(Boolean).length;}
        function updateCoverStats(){
          const words=wordCount(coverLetter.value);
          clCounter.textContent=words+' words';
          const pct=Math.max(5,Math.min(100,Math.round((words/220)*100)));
          clMeter.style.width=pct+'%';
          clMeter.className='progress-bar '+(words<80?'bg-warning':(words<=260?'bg-success':'bg-danger'));
        }

        function applyTemplate(){
          const v=templatePicker.value;
          if(v==='concise'){
            coverLetter.value="Dear Hiring Team,\n\nI’m excited to apply for this internship. My recent clinical coursework and hands-on labs align with your rotation objectives. I work well in teams, communicate clearly with patients, and learn quickly in fast-paced settings. I’m eager to contribute, grow under mentorship, and support safe, compassionate care.\n\nThank you for your consideration,\nPerson A";
          } else if(v==='story'){
            coverLetter.value="Dear Hiring Team,\n\nDuring my last rotation, I supported a high-acuity case where clear communication and calm teamwork helped a family through a difficult day. That experience shaped my focus on empathy and reliability. Your program’s structure—mentorship, simulation, and patient education—matches how I learn best. I’m ready to contribute, reflect, and improve each week.\n\nThank you,\nPerson A";
          }
          updateCoverStats();
          templatePicker.value='';
          updateChecklist();
        }

        function validateForm(){
          appForm.classList.add('was-validated');
          const okBasic=appForm.checkValidity();
          const hasResume = resumeLabel.textContent && !/Drag & drop/.test(resumeLabel.textContent);
          if(!hasResume){showResumeError('Please attach your resume.');}
          return okBasic && hasResume;
        }

        function collectForm(){
          const name=$('#appName').value.trim();
          const email=$('#appEmail').value.trim();
          const internshipJSON=$('#appInternship').value;
          const internship=internshipJSON?JSON.parse(internshipJSON):null;
          const cl=$('#coverLetter').value.trim();
          return {name,email,internship,coverLetter:cl,ts:Date.now()};
        }

        function updateChecklist(){
          const okId=$('#appName').value.trim() && $('#appEmail').value.trim();
          setCk('id',okId);
          setCk('role',!!$('#appInternship').value);
          const hasResume = resumeLabel.textContent && !/Drag & drop/.test(resumeLabel.textContent);
          setCk('cv',hasResume);
          const words=($('#coverLetter').value||'').trim().split(/\s+/).filter(Boolean).length;
          setCk('cl',words>=80 && words<=260);
          setCk('confirm',$('#confirmCheck').checked);
        }
        function setCk(key,ok){
          const el=document.querySelector(`[data-ck="${key}"]`);
          if(!el) return;
          el.className='badge rounded-pill '+(ok?'bg-success-subtle text-success':'bg-secondary');
          el.textContent= ok ? 'Ready' : 'Pending';
        }

        function loadDraft(){
          try{
            const raw=localStorage.getItem(KEY_DRAFT);
            if(!raw) return;
            const d=JSON.parse(raw);
            if(d.name) $('#appName').value=d.name;
            if(d.email) $('#appEmail').value=d.email;
            if(d.internship) $('#appInternship').value=JSON.stringify(d.internship);
            if(d.coverLetter) $('#coverLetter').value=d.coverLetter;
          }catch(e){}
        }

        function loadApps(){
          try{
            const raw=localStorage.getItem(KEY_APPS);
            return raw?JSON.parse(raw):[];
          }catch(e){return [];}
        }
        function todayISO(){return new Date().toISOString().slice(0,10);}
        function show(el,flag){if(!el)return;el.classList.toggle('d-none',!flag);}
        function hideAlerts(){[successAlert,errorAlert,draftAlert].forEach(a=>show(a,false));}
      })();
    </script>
  </body>
</html>
