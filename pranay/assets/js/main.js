const internshipData = [
  {
    id: 1,
    title: 'Pediatric Nursing Rotation',
    facility: "Green Valley Children's Hospital",
    location: 'Denver, CO',
    category: 'nursing',
    mode: 'in-person',
    deadline: '2026-02-10',
    featured: true,
    theme: 'teal',
    duration: '12 weeks',
    badges: ['Paid', 'Preceptorship'],
    description:
      'Support pediatric care teams across inpatient and outpatient units with hands-on mentorship and simulation labs.',
    requirements: 'Junior standing, BLS certification, 2 faculty references',
    posted: '2023-12-03',
    detail: {
      summary:
        'Gain direct exposure to pediatric acute and ambulatory care teams while assisting with patient support and care coordination tasks.',
      responsibilities: [
        'Support nurses with patient intake, vitals, and discharge education for families.',
        'Document care updates in the pediatric EHR under mentor supervision.',
        'Coordinate play therapy and comfort measures with child life specialists.',
      ],
      learning: [
        'Strengthen pediatric assessment and medication safety skills through supervised rotations.',
        'Develop empathetic communication strategies for guiding caregivers through treatment plans.',
        'Build confidence leading bedside education huddles alongside mentor nurses.',
      ],
      schedule: '32 hours per week • Mon-Thu 7:00 a.m. – 3:00 p.m.',
      compensation: '$1,400 monthly stipend plus cafeteria credits',
      requirements: [
        'Junior standing in accredited nursing program',
        'Basic Life Support (BLS) certification',
        'Two faculty references and immunization records',
        'Availability for evening simulation labs twice monthly',
      ],
      application: [
        'Submit resume and tailored cover letter highlighting pediatric interest.',
        'Upload two faculty references and unofficial transcript.',
        'Complete 20-minute recorded interview within five days of invitation.',
      ],
      perks: [
        'Weekly simulation labs and bedside mentorship with pediatric specialists.',
        'Shadow multidisciplinary teams during complex care rounds.',
        'Access to hospital wellness and mindfulness programming.',
      ],
      contact: {
        name: 'Lena Ortiz, Pediatric Nurse Educator',
        email: 'lena.ortiz@greenvalleychildrens.org',
        phone: '(303) 555-2291',
        office: 'Nurse education office, Level 3',
      },
    },
  },
  {
    id: 2,
    title: 'Community Health Outreach Fellow',
    facility: 'Hopewell Clinics Network',
    location: 'Remote • Mountain Time',
    category: 'public-health',
    mode: 'remote',
    deadline: '2024-01-28',
    featured: true,
    theme: 'lavender',
    duration: '10 weeks',
    badges: ['Remote', 'Stipend'],
    description:
      'Coordinate telehealth screenings, manage community vaccination drives, and build health education toolkits.',
    requirements: 'Public health coursework, bilingual preferred, reliable internet access',
    posted: '2023-12-12',
    detail: {
      summary:
        'Drive public health impact by supporting mobile clinic campaigns, digital triage, and educational outreach across rural communities.',
      responsibilities: [
        'Coordinate weekly telehealth screening clinics and compile outreach reports.',
        'Design multilingual education materials for vaccination and preventative care.',
        'Partner with community liaisons to schedule home visits and wellness fairs.',
      ],
      learning: [
        'Master virtual care workflows and documentation standards for community health programs.',
        'Practice culturally responsive communication in bilingual health education.',
        'Build project management habits for tracking outreach milestones.',
      ],
      schedule: '25 hours per week • Flexible remote schedule with Tuesday stand-ups.',
      compensation: '$900 program stipend plus technology reimbursement',
      requirements: [
        'Completion of foundational public health coursework',
        'Professional fluency in English and conversational Spanish',
        'Reliable internet connection and private workspace',
        'Availability to support two Saturday pop-up events',
      ],
      application: [
        'Share resume highlighting community engagement or language experience.',
        'Submit short video describing interest in rural health equity.',
        'Provide one faculty or supervisor reference with contact details.',
      ],
      perks: [
        'Mentorship from licensed community health nurses and social workers.',
        'Certification in telehealth triage fundamentals.',
        'Opportunities to present findings to regional health coalition.',
      ],
      contact: {
        name: 'Caleb Mendez, Community Health Lead',
        email: 'caleb.mendez@hopewellclinics.org',
        phone: '(970) 555-8821',
        office: 'Virtual office hours via Teams, Thu 9–11 a.m.',
      },
    },
  },
  {
    id: 3,
    title: 'Rehabilitation Therapy Assistant',
    facility: 'Sunrise Rehabilitation Center',
    location: 'Fort Collins, CO',
    category: 'therapy',
    mode: 'hybrid',
    deadline: '2024-03-05',
    featured: false,
    theme: 'sage',
    duration: '14 weeks',
    badges: ['Hybrid', 'Licensed Mentor'],
    description:
      'Shadow occupational and physical therapists, assist with patient treatment plans, and document progress notes.',
    requirements: 'HIPAA training, background check, weekend availability',
    posted: '2023-11-28',
    detail: {
      summary:
        'Serve as an integral member of the therapy team by supporting patient mobility plans, adaptive equipment fittings, and interdisciplinary case reviews.',
      responsibilities: [
        'Prepare treatment areas and adaptive devices prior to patient sessions.',
        'Capture progress metrics and enter daily therapy notes in compliance systems.',
        'Coordinate follow-up exercises and home programming with caregivers.',
      ],
      learning: [
        'Deepen understanding of neuro and ortho rehab protocols.',
        'Practice motivational interviewing to encourage patient adherence.',
        'Collaborate with PT, OT, and speech therapy mentors on case planning.',
      ],
      schedule: '30 hours per week • On-site Tue-Thu, remote documentation Fri.',
      compensation: '$1,050 monthly stipend and commuter transit pass',
      requirements: [
        'HIPAA training and current background check on file',
        'Availability for two Saturday adaptive sports clinics',
        'Strong documentation habits and attention to detail',
        'Comfort assisting with patient transfers up to 25 lbs',
      ],
      application: [
        'Complete online application with resume and interest statement.',
        'Submit faculty reference focused on rehabilitation coursework.',
        'Attend virtual group interview and onsite facilities tour.',
      ],
      perks: [
        'Access to interdisciplinary rounds and specialty workshops.',
        'Hands-on coaching in adaptive technology and equipment fitting.',
        'Professional development stipend for continuing education course.',
      ],
      contact: {
        name: 'Melissa Grant, Clinical Programs Manager',
        email: 'placements@sunriserehab.org',
        phone: '(970) 555-7423',
        office: 'Hybrid availability • Wed walk-ins 1–3 p.m.',
      },
    },
  },
  {
    id: 4,
    title: 'Radiology Imaging Support',
    facility: 'Mercy Diagnostics Lab',
    location: 'Colorado Springs, CO',
    category: 'diagnostics',
    mode: 'in-person',
    deadline: '2024-02-18',
    featured: true,
    theme: 'ocean',
    duration: '8 weeks',
    badges: ['Evening shifts', 'Patient-facing'],
    description:
      'Assist technologists with patient prep, equipment calibration, and imaging workflow optimization.',
    requirements: 'Physics coursework, immunization records, safety orientation',
    posted: '2023-12-06',
    detail: {
      summary:
        'Experience the full radiology workflow from patient preparation to image quality review while supporting a fast-paced diagnostics team.',
      responsibilities: [
        'Prepare patients for MRI and CT scans while reinforcing safety procedures.',
        'Log equipment calibration metrics and escalate variances to technologists.',
        'Manage imaging queue board and coordinate with referring departments.',
      ],
      learning: [
        'Understand contrast protocols, modality differences, and safety compliance.',
        'Refine patient communication skills for explaining complex procedures.',
        'Learn LEAN workflow tactics for high-volume imaging suites.',
      ],
      schedule: '24 hours per week • Mon-Thu 1:00 p.m. – 7:00 p.m.',
      compensation: '$18/hour with evening differential and scrubs stipend',
      requirements: [
        'Completion of physics or imaging sciences coursework',
        'Proof of immunizations and recent TB screening',
        'Attendance at radiation safety and infection control training',
        'Comfort with rotating evening shifts',
      ],
      application: [
        'Provide resume with relevant laboratory or imaging experience.',
        'Upload transcript and safety orientation certificates.',
        'Interview onsite with lead technologist and operations supervisor.',
      ],
      perks: [
        'Mentorship from radiology technologists and medical physicist.',
        'Observation hours in fluoroscopy, CT, and ultrasound labs.',
        'Participation in quarterly quality improvement sprint.',
      ],
      contact: {
        name: 'Reed Donovan, Lead Imaging Technologist',
        email: 'reed.donovan@mercydiagnostics.org',
        phone: '(719) 555-6344',
        office: 'Diagnostics operations suite, Room 2B',
      },
    },
  },
  {
    id: 5,
    title: 'Healthcare Administration Analyst',
    facility: 'Mountainview Medical Group',
    location: 'Aurora, CO',
    category: 'administration',
    mode: 'hybrid',
    deadline: '2024-01-22',
    featured: false,
    theme: 'amber',
    duration: '16 weeks',
    badges: ['Project-based', 'Mentor pairing'],
    description:
      'Optimize scheduling workflows, monitor patient satisfaction dashboards, and support compliance audits.',
    requirements: 'Data analysis skills, proficiency with Excel or Sheets, attention to detail',
    posted: '2023-12-01',
    detail: {
      summary:
        'Join the operations analytics team to streamline patient access, redesign dashboards, and uncover data stories that inform executive decisions.',
      responsibilities: [
        'Audit scheduling templates and recommend adjustments to reduce bottlenecks.',
        'Refresh patient experience dashboards and automate weekly reporting.',
        'Compile compliance documentation for quarterly quality reviews.',
      ],
      learning: [
        'Translate healthcare operations data into actionable insights.',
        'Strengthen presentation skills with executive-ready briefing templates.',
        'Build confidence in Excel, Sheets, and SQL-based data pulls.',
      ],
      schedule: '20–25 hours per week • Hybrid with on-site Tuesdays.',
      compensation: '$1,200 monthly stipend and professional development fund',
      requirements: [
        'Intermediate proficiency with Excel or Google Sheets',
        'Coursework in health administration or analytics',
        'Ability to work on-site one day per week',
        'Detail-oriented mindset with interest in process improvement',
      ],
      application: [
        'Submit resume plus one-page sample analysis or dashboard screenshot.',
        'Provide faculty recommendation focused on analytical aptitude.',
        'Complete 30-minute case interview with operations analyst.',
      ],
      perks: [
        'Mentorship pairing with senior operations manager.',
        'Certification voucher for Lean Six Sigma Yellow Belt.',
        'Networking lunches with service line directors.',
      ],
      contact: {
        name: 'Dana Kim, Director of Operational Excellence',
        email: 'dana.kim@mountainviewmed.org',
        phone: '(720) 555-0415',
        office: 'Operations hub, Suite 410',
      },
    },
  },
  {
    id: 6,
    title: 'Telehealth Support Intern',
    facility: 'Northwest Health Partners',
    location: 'Remote • Pacific Time',
    category: 'public-health',
    mode: 'remote',
    deadline: '2024-02-02',
    featured: false,
    theme: 'slate',
    duration: '12 weeks',
    badges: ['Remote', 'Patient advocacy'],
    description:
      'Provide concierge support for telehealth visits, train patients on remote monitoring devices, and triage basic inquiries.',
    requirements: 'Customer service experience, HIPAA compliance, bilingual a plus',
    posted: '2023-12-08',
    detail: {
      summary:
        'Deliver compassionate virtual-first support to patients while ensuring seamless telehealth appointments and device onboarding.',
      responsibilities: [
        'Guide patients through telehealth check-in steps and troubleshoot connectivity issues.',
        'Educate patients on home monitoring kits and escalate clinical concerns to nurses.',
        'Document encounter notes and satisfaction feedback after each visit.',
      ],
      learning: [
        'Develop customer service excellence tailored to healthcare environments.',
        'Practice escalation protocols and warm handoffs to clinical teams.',
        'Gain exposure to remote monitoring platforms and analytics dashboards.',
      ],
      schedule: '20 hours per week • Mon-Fri rotating 4-hour shifts between 8 a.m. and 6 p.m. PT.',
      compensation: '$17/hour plus home office equipment stipend',
      requirements: [
        'Proven customer service or patient-facing experience',
        'Comfort navigating multiple digital systems simultaneously',
        'Quiet, professional remote workspace',
        'Conversational Spanish or Mandarin preferred',
      ],
      application: [
        'Submit resume and short cover letter focused on patient advocacy.',
        'Record sample patient greeting using provided script.',
        'Provide supervisor reference verifying customer service excellence.',
      ],
      perks: [
        'Weekly coaching huddles with telehealth nurse supervisors.',
        'Shadow virtual provider visits across multiple specialties.',
        'Access to remote work wellness stipend and ergonomic consultation.',
      ],
      contact: {
        name: 'Isha Patel, Virtual Care Coordinator',
        email: 'isha.patel@nwhealthpartners.org',
        phone: '(206) 555-9184',
        office: 'Virtual office hours Mon & Thu 10–11:30 a.m. PT',
      },
    },
  },
  {
    id: 7,
    title: 'Clinical Research Scholar',
    facility: 'Frontier Medical Research Institute',
    location: 'Boulder, CO',
    category: 'diagnostics',
    mode: 'in-person',
    deadline: '2024-03-12',
    featured: false,
    theme: 'berry',
    duration: '20 weeks',
    badges: ['Research', 'Publication support'],
    description:
      'Collect study data, coordinate IRB submissions, and assist with manuscript preparation for cardiology trials.',
    requirements: 'Research methods course, strong writing skills, 2 days on-site weekly',
    posted: '2023-11-20',
    detail: {
      summary:
        'Collaborate with cardiology investigators to support every phase of clinical trials from data collection to publication readiness.',
      responsibilities: [
        'Recruit participants and manage informed consent documentation.',
        'Collect vitals and lab samples during study visits alongside coordinators.',
        'Assist with literature reviews and manuscript drafting for peer review.',
      ],
      learning: [
        'Interpret clinical protocols and adhere to Good Clinical Practice standards.',
        'Improve statistical literacy with support from biostatistics mentors.',
        'Gain experience preparing IRB amendments and study reports.',
      ],
      schedule: '24–28 hours per week • On-site Tue/Wed with flexible remote analysis blocks.',
      compensation: '$1,500 monthly stipend plus conference travel fund',
      requirements: [
        'Completion of research methods or biostatistics course',
        'Strong academic writing samples',
        'Ability to commit to two consecutive weekdays on-site',
        'Comfort handling biological samples per protocol',
      ],
      application: [
        'Submit CV highlighting research or lab experience.',
        'Provide writing sample (published article or course paper).',
        'Interview with principal investigator and lead coordinator.',
      ],
      perks: [
        'Shadow cardiology procedures and investigator meetings.',
        'Publication support with senior scientists and medical writers.',
        'Conference presentation coaching and funding assistance.',
      ],
      contact: {
        name: 'Dr. Priya Singh, Principal Investigator',
        email: 'psingh@frontiermri.org',
        phone: '(303) 555-7142',
        office: 'Research pavilion, Suite 220',
      },
    },
  },
  {
    id: 8,
    title: 'Patient Experience Coordinator',
    facility: 'Harborview Family Care',
    location: 'Lakewood, CO',
    category: 'administration',
    mode: 'in-person',
    deadline: '2024-01-30',
    featured: false,
    theme: 'sunset',
    duration: '12 weeks',
    badges: ['In-person', 'Rotational'],
    description:
      'Improve patient navigation, run satisfaction surveys, and design feedback reports for clinic leadership.',
    requirements: 'Excellent communication skills, weekend availability, 3 references',
    posted: '2023-12-04',
    detail: {
      summary:
        'Champion patient voices across the family care network by shaping feedback loops, building rapport, and coordinating service recovery.',
      responsibilities: [
        'Greet patients, monitor lobby experience, and escalate real-time needs.',
        'Launch post-visit surveys and synthesize weekly satisfaction highlights.',
        'Collaborate with service line leaders on experience improvement pilots.',
      ],
      learning: [
        'Strengthen active listening skills in a healthcare environment.',
        'Apply design thinking to service recovery and patient journey mapping.',
        'Develop executive-ready storytelling for presenting insights.',
      ],
      schedule: '28 hours per week • Tue-Sat with rotating half-day Saturdays.',
      compensation: '$16/hour plus transportation reimbursement',
      requirements: [
        'Outstanding verbal and written communication skills',
        'Comfort facilitating conversations with diverse patient populations',
        'Weekend availability twice per month',
        'Three professional or academic references',
      ],
      application: [
        'Submit resume and short essay on memorable service experience.',
        'Provide three references with contact information.',
        'Complete scenario-based interview focused on service recovery.',
      ],
      perks: [
        'Rotation across pediatrics, women’s health, and geriatrics clinics.',
        'Mentorship from patient advocacy director and service design coach.',
        'Access to hospitality and empathy workshop series.',
      ],
      contact: {
        name: 'Jordan Wells, Patient Experience Director',
        email: 'jwells@harborviewfamily.org',
        phone: '(720) 555-6634',
        office: 'Patient advocacy suite, Level 2',
      },
    },
  },
  {
    id: 9,
    title: 'Integrated Behavioral Health Intern',
    facility: 'Calm Horizons Wellness Collective',
    location: 'Remote • Central Time',
    category: 'therapy',
    mode: 'hybrid',
    deadline: '2024-02-24',
    featured: true,
    theme: 'lavender',
    duration: '15 weeks',
    badges: ['Hybrid', 'Mentorship'],
    description:
      'Support behavioral health consultants with teletherapy triage, group session planning, and patient progress tracking.',
    requirements: 'Psychology major, trauma-informed care training, 6 hrs/week synchronous availability',
    posted: '2023-12-15',
    detail: {
      summary:
        'Collaborate with behavioral health clinicians to coordinate integrative care touchpoints, facilitate group resources, and champion whole-person wellness.',
      responsibilities: [
        'Host telephonic warm handoffs between primary care providers and behavioral health specialists.',
        'Co-design weekly mindfulness group agendas and educational resources.',
        'Maintain progress dashboards and flag follow-up needs to supervising clinicians.',
      ],
      learning: [
        'Develop clinical documentation skills for collaborative care models.',
        'Practice motivational interviewing and trauma-informed communication.',
        'Understand workflows for integrating behavioral health into primary care.',
      ],
      schedule: '15–18 hours per week • Remote sessions with biweekly in-person case reviews.',
      compensation: '$1,100 program stipend plus CEU reimbursement',
      requirements: [
        'Completion of abnormal psychology or counseling foundations course',
        'Certification or training in trauma-informed care',
        'Six hours of synchronous availability weekly for live sessions',
        'Professional references from faculty or clinical supervisors',
      ],
      application: [
        'Submit resume and reflective statement on behavioral health interests.',
        'Provide faculty recommendation and unofficial transcript.',
        'Complete values-based video interview within seven days of invitation.',
      ],
      perks: [
        'Weekly supervision with licensed behavioral health consultant.',
        'Shadow interdisciplinary huddles across primary care and psychiatry.',
        'Access to continuing education stipend and mental health first aid certification.',
      ],
      contact: {
        name: 'Mira Chen, Behavioral Health Program Lead',
        email: 'mira.chen@calmhorizons.org',
        phone: '(312) 555-0995',
        office: 'Virtual office hours Wed 2–4 p.m. CT',
      },
    },
  },
];

const categoryHighlights = [
  {
    key: 'nursing',
    title: 'Nursing & Patient Care',
    description: 'Bedside experience across surgical, pediatric, and critical care units with mentor supervision.',
    icon: 'bi-heart-pulse',
    color: 'primary',
  },
  {
    key: 'public-health',
    title: 'Community Health Outreach',
    description: 'Collaborate with mobile clinics, telehealth programs, and public health coalitions to expand access.',
    icon: 'bi-people',
    color: 'success',
  },
  {
    key: 'diagnostics',
    title: 'Diagnostics & Imaging',
    description: 'Learn imaging protocols, lab operations, and quality assurance in state-of-the-art facilities.',
    icon: 'bi-activity',
    color: 'info',
  },
  {
    key: 'therapy',
    title: 'Therapy & Rehabilitation',
    description: 'Support physical and occupational therapy teams with personalized treatment plans.',
    icon: 'bi-bandaid',
    color: 'warning',
  },
  {
    key: 'administration',
    title: 'Healthcare Administration',
    description: 'Optimize operations, staffing, and patient experience with data-driven projects.',
    icon: 'bi-diagram-3',
    color: 'secondary',
  },
];


const savedSearches = [
  {
    title: 'Denver pediatric inpatient',
    filters: 'Nursing • In-person • Deadline &lt; 30 days',
  },
  {
    title: 'Remote public health',
    filters: 'Community outreach • Remote • Stipend',
  },
  {
    title: 'Rehab therapy evenings',
    filters: 'Therapy • Hybrid • Evening shifts',
  },
];

const upcomingInternshipPlaceholders = [
  {
    title: 'Maternal Wellness Navigator',
    focus: 'Perinatal education cohorts across three community hospitals.',
    launch: 'Launching April 2024',
    readiness: 'Curriculum draft under review by OB leadership.',
    theme: 'peach',
  },
  {
    title: 'Telehealth Behavioral Coach',
    focus: 'Hybrid support for adolescent behavioral health clinics.',
    launch: 'Launching May 2024',
    readiness: 'Pilot technology stack validated with two partner sites.',
    theme: 'mint',
  },
  {
    title: 'Rural Clinic Operations Fellow',
    focus: 'Operational excellence projects across frontier primary care hubs.',
    launch: 'Launching June 2024',
    readiness: 'Awaiting grant confirmation for housing and travel stipends.',
    theme: 'sky',
  },
];

const upcomingInterviews = [
  {
    program: 'Community Health Outreach',
    date: 'Tue, Jan 23',
    time: '2:30 PM MT',
    type: 'Virtual',
    interviewer: 'Dr. Priya Singh',
  },
  {
    program: 'Radiology Imaging Support',
    date: 'Thu, Jan 25',
    time: '9:00 AM MT',
    type: 'On-site',
    interviewer: 'Lead Technologist Reed',
  },
  {
    program: 'Rehabilitation Therapy Assistant',
    date: 'Mon, Jan 29',
    time: '11:00 AM MT',
    type: 'Virtual',
    interviewer: 'Therapy Manager Lopez',
  },
];

const scheduleSlots = {
  '2024-01-22': [
    { time: '09:00 AM', interviewer: 'Dr. Priya Singh', mode: 'Virtual', location: 'Teams meeting' },
    { time: '11:30 AM', interviewer: 'Nurse Educator Cole', mode: 'Virtual', location: 'Zoom' },
  ],
  '2024-01-23': [
    { time: '02:30 PM', interviewer: 'Community Health Panel', mode: 'Virtual', location: 'Teams meeting' },
    { time: '04:00 PM', interviewer: 'Program Coordinator Hill', mode: 'Virtual', location: 'Teams meeting' },
  ],
  '2024-01-24': [
    { time: '10:00 AM', interviewer: 'Dr. Amina Patel', mode: 'On-site', location: 'Mercy Diagnostics, Suite 210' },
    { time: '01:30 PM', interviewer: 'Lead Technologist Reed', mode: 'On-site', location: 'Mercy Diagnostics, Suite 210' },
  ],
  '2024-01-26': [
    { time: '08:30 AM', interviewer: 'Therapy Manager Lopez', mode: 'Virtual', location: 'Zoom' },
    { time: '03:15 PM', interviewer: 'Chief Nursing Officer Kim', mode: 'On-site', location: 'Green Valley Hospital' },
  ],
};

const analyticsSnapshots = {
  30: {
    metrics: { applicants: 620, interviews: 182, offers: 118, topSpecialty: 'Telehealth Support', specialtyShare: 0.27 },
    applicants: {
      labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
      total: [140, 155, 160, 165],
      unique: [120, 130, 135, 140],
    },
    categories: {
      labels: ['Nursing', 'Community Health', 'Diagnostics', 'Therapy', 'Administration'],
      data: [150, 170, 90, 110, 100],
    },
    funnel: [620, 410, 230, 118],
    activity: [
      { time: 'Jan 12, 09:24', event: 'Interview Scheduled', details: 'Pediatric Nursing Rotation • Avery Hudson' },
      { time: 'Jan 11, 16:03', event: 'New Listing', details: 'Telehealth Support Intern • Northwest Health Partners' },
      { time: 'Jan 09, 13:17', event: 'Offer Accepted', details: 'Community Health Outreach Fellow • Li Wei' },
    ],
  },
  90: {
    metrics: { applicants: 1842, interviews: 526, offers: 312, topSpecialty: 'Community Health', specialtyShare: 0.31 },
    applicants: {
      labels: ['Nov', 'Dec', 'Jan'],
      total: [620, 598, 624],
      unique: [540, 520, 545],
    },
    categories: {
      labels: ['Nursing', 'Community Health', 'Diagnostics', 'Therapy', 'Administration'],
      data: [510, 572, 280, 248, 232],
    },
    funnel: [1842, 1220, 668, 312],
    activity: [
      { time: 'Jan 12, 09:24', event: 'Interview Scheduled', details: 'Pediatric Nursing Rotation • Avery Hudson' },
      { time: 'Jan 11, 16:03', event: 'New Listing', details: 'Telehealth Support Intern • Northwest Health Partners' },
      { time: 'Jan 10, 08:12', event: 'Admin Note', details: 'Approved employer onboarding • Harborview Family Care' },
      { time: 'Dec 28, 14:41', event: 'Offer Accepted', details: 'Radiology Imaging Support • Malik Thompson' },
    ],
  },
  180: {
    metrics: { applicants: 3260, interviews: 1012, offers: 602, topSpecialty: 'Nursing & Patient Care', specialtyShare: 0.34 },
    applicants: {
      labels: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan'],
      total: [540, 610, 620, 598, 624],
      unique: [480, 540, 550, 520, 545],
    },
    categories: {
      labels: ['Nursing', 'Community Health', 'Diagnostics', 'Therapy', 'Administration'],
      data: [1085, 960, 520, 420, 275],
    },
    funnel: [3260, 2140, 1098, 602],
    activity: [
      { time: 'Jan 12, 09:24', event: 'Interview Scheduled', details: 'Pediatric Nursing Rotation • Avery Hudson' },
      { time: 'Dec 30, 10:03', event: 'Compliance Review', details: 'Sunrise Rehabilitation Center • Documents approved' },
      { time: 'Nov 18, 11:45', event: 'New Listing', details: 'Clinical Research Scholar • Frontier Medical Research Institute' },
      { time: 'Oct 05, 15:21', event: 'Offer Accepted', details: 'Healthcare Administration Analyst • Lila Ortiz' },
    ],
  },
  365: {
    metrics: { applicants: 6125, interviews: 1878, offers: 1140, topSpecialty: 'Community Health', specialtyShare: 0.29 },
    applicants: {
      labels: ['Q1', 'Q2', 'Q3', 'Q4'],
      total: [1400, 1525, 1540, 1660],
      unique: [1260, 1340, 1360, 1465],
    },
    categories: {
      labels: ['Nursing', 'Community Health', 'Diagnostics', 'Therapy', 'Administration'],
      data: [1985, 1795, 860, 800, 685],
    },
    funnel: [6125, 4010, 1892, 1140],
    activity: [
      { time: 'Jan 12, 09:24', event: 'Interview Scheduled', details: 'Pediatric Nursing Rotation • Avery Hudson' },
      { time: 'Dec 01, 09:12', event: 'Annual Summary', details: 'Generated system-wide year-end report' },
      { time: 'Sep 19, 16:27', event: 'Offer Accepted', details: 'Community Health Outreach Fellow • Morgan Ellis' },
      { time: 'May 03, 10:14', event: 'New Listing', details: 'Telehealth Support Intern • Northwest Health Partners' },
    ],
  },
};

const profileState = {
  student: {
    overview: {
      tagline: 'Pediatric wellness advocate',
      summary:
        'Balancing pediatric acute care rotations with community outreach to guide families through each stage of healing.',
      focusAreas: 'Family-centred rounding • Telehealth triage • Child life collaboration',
      highlightOne: 'Leads bilingual caregiver education workshops for neonatal and pediatrics units every Friday.',
      highlightTwo: 'Coaches peers on trauma-informed simulation drills as the cohort safety champion.',
      highlightThree: 'Mentors first-year students on onboarding checklists and reflective practice journals.',
      statExperiences: '4',
      statFamilies: '48',
      statReflections: '9',
      rotation: 'Next rotation: Rocky Mountain Children’s – Outpatient infusion (Feb 12 – Apr 05).',
      mentor: 'Mentor check-ins with Dr. Lila Chen every Monday afternoon.',
    },
    identity: {
      initials: 'AH',
      name: 'Avery Hudson',
      headline: 'Pediatric nursing candidate',
      email: 'avery.hudson@mediinternia.com',
      phone: '(303) 555-0112',
      location: 'Denver, CO',
      university: 'Colorado Health Sciences University',
      program: 'MSN - Pediatric Care',
    },
    preferences: {
      primaryFocus: 'Pediatric acute care & family education clinics',
      availability: 'Full-time (Mon-Thu clinical rotations, Fri simulation lab)',
      startDate: '2024-02-05',
      programLevel: 'Postgraduate',
      about:
        'Fifth-semester nursing student focused on pediatric and maternal care with a passion for community outreach and family education.',
    },
    development: {
      goals: 'Lead bedside education huddles and triage telehealth follow ups during rotations.',
      competencies:
        '• Pediatric IV placement certification\n• Bilingual patient navigation (English/Spanish)\n• Epic EHR training badge',
      hours: '184 clinical hours completed',
      mentor: 'Mentored by Dr. Lila Chen, DNP',
    },
    readiness: {
      resume: 'Updated December 2023 with pediatrics clinical rotations',
      references: '2 of 3 faculty references confirmed; third pending signature',
      compliance: 'HIPAA, BLS, flu vaccine, and background check verified',
      portfolio: 'https://mediinternia.com/avery-hudson-portfolio',
      nextSteps: 'Record mock interview responses and upload simulation reflections by Jan 22.',
    },
    security: {
      primaryEmail: 'avery.hudson@mediinternia.com',
      backupEmail: 'avery.secure@mediinternia.com',
      phone: '(303) 555-0112',
      twoFactor: 'Authenticator app',
      lastPasswordChange: '2023-11-18',
      recoveryQuestion: 'Who was your first clinical rotation mentor?',
      recoveryAnswer: 'Dr. Lila Chen',
      currentPassword: 'MediInternia#24',
      newPassword: 'PulseCare!48',
      confirmPassword: 'PulseCare!48',
    },
  },
  employer: {
    overview: {
      tagline: 'Reimagining restorative care',
      summary:
        'Sunrise Rehabilitation Center coordinates neurologic and orthopedic recovery pathways with interdisciplinary mentor teams.',
      focusAreas: 'Neurological recovery • Mobility innovation • Community reintegration',
      highlightOne: 'Interdisciplinary mentors from physical therapy, occupational therapy, and speech-language pathology.',
      highlightTwo: 'Structured onboarding playbook with 92% intern satisfaction scores across the past three cohorts.',
      highlightThree: 'Innovation rounds every Thursday showcasing measurable patient milestones and intern contributions.',
      statPlacements: '6',
      statMentors: '14',
      statPartnerships: '3',
      flagship: 'Flagship rotation: Neuro recovery lab immersion (Mar – May).',
      support: 'Support channels include virtual office hours, concierge onboarding, and digital equipment checkouts.',
    },
    organization: {
      initials: 'SR',
      name: 'Sunrise Rehabilitation Center',
      tagline: 'Integrated therapy & wellness network',
      focus: 'Neurological and orthopedic rehabilitation',
      location: 'Fort Collins, CO',
      overview: 'Community-based rehab center supporting inpatient and outpatient recovery with interprofessional teams.',
    },
    program: {
      slots: '6',
      schedule: 'On-site Tue-Thu, remote project blocks on Mon/Fri',
      startDate: '2024-03-04',
      stipend: '$1,200 monthly stipend plus housing support',
      requirements:
        'Background check, HIPAA renewal, 2 faculty references, immunization records.',
    },
    contact: {
      coordinator: 'Melissa Grant, Clinical Programs Manager',
      email: 'placements@sunriserehab.org',
      phone: '(970) 555-7423',
      officeHours: 'Virtual office hours Wednesdays 1–3 p.m.',
      resources: 'Digital onboarding hub, telehealth training library, and weekly mentor roundtables.',
    },
    notes: {
      interviews: 'Virtual interviews every Tuesday & Thursday at 10:00 a.m.',
      orientation: 'Hybrid welcome session with facility tour and safety briefing.',
      evaluations: 'Bi-weekly competency check-ins plus final capstone presentation.',
    },
    security: {
      primaryEmail: 'placements@sunriserehab.org',
      backupEmail: 'talent@sunriserehab.org',
      phone: '(970) 555-7423',
      twoFactor: 'Text message to program hotline',
      lastPasswordChange: '2023-10-07',
      recoveryQuestion: 'What year did your first intern cohort launch?',
      recoveryAnswer: '2018',
      currentPassword: 'SunriseAccess!32',
      newPassword: 'RehabTalent#92',
      confirmPassword: 'RehabTalent#92',
    },
  },
};

const adminProfileState = {
  identity: {
    initials: 'JE',
    name: 'Jordan Ellis',
    title: 'Director of Internship Operations',
    region: 'Mountain Healthcare Network',
  },
  overview: {
    summary:
      'Leads healthcare internship strategy across 42 partner sites, safeguarding compliance while elevating candidate experience and employer outcomes.',
    highlightOne: 'Coordinates cross-campus recruitment sprints with 15 academic partners each quarter.',
    highlightTwo: 'Maintains incident response playbooks and readiness drills across five service lines.',
    activeInterns: '128',
    partnerSites: '42',
    auditScore: '98% audit score',
  },
  contact: {
    email: 'jordan.ellis@mediinternia.com',
    phone: '(720) 555-0148',
    office: 'Pulse Center, Suite 410, Denver, CO',
    hours: 'Mon–Thu 8:30 a.m. – 5:30 p.m. MT',
  },
  notifications: {
    digest: 'Monday 08:00 MT weekly digest',
    escalations: 'SMS + Teams alerts for compliance holds',
    slack: '#mediinternia-admins channel updates',
  },
  security: {
    mfa: 'Hardware key + authenticator app',
    audit: 'Last audit Jan 05, 2024 (no findings)',
    password: 'Password rotated Dec 18, 2023',
    recovery: 'Recovery kit stored in encrypted vault',
  },
  support: {
    openTickets: '3',
    resolved: '18',
    satisfaction: '94% positive',
  },
};

let applicantsChart;
let categoriesChart;
let funnelChart;

const monthNames = [
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
  'July',
  'August',
  'September',
  'October',
  'November',
  'December',
];

document.addEventListener('DOMContentLoaded', () => {
  updateCurrentYear();
  setupValidation();
  initGlobalButtonFeedback();

  const page = document.body.dataset.page;

  switch (page) {
    case 'home':
      initHomePage();
      break;
    case 'login':
      initLoginPage();
      break;
    case 'forgot-password':
      initForgotPasswordPage();
      break;
    case 'signup':
      initSignupPage();
      break;
    case 'student-profile':
    case 'employer-profile':
      initProfilePage();
      break;
    case 'internships':
      initInternshipsPage();
      break;
    case 'internship-detail':
      initInternshipDetailPage();
      break;
    case 'application':
      initApplicationPage();
      break;
    case 'schedule':
      initSchedulePage();
      break;
    case 'analytics':
      initAnalyticsPage();
      break;
    case 'admin-profile':
      initAdminProfilePage();
      break;
    default:
      break;
  }
});

function updateCurrentYear() {
  const yearEl = document.getElementById('currentYear');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
}

function setupValidation() {
  const forms = document.querySelectorAll('.needs-validation');
  forms.forEach((form) => {
    form.addEventListener(
      'submit',
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      },
      false
    );
  });
}

function initGlobalButtonFeedback() {
  document.body.addEventListener('click', (event) => {
    const button = event.target.closest('button');
    if (!button) return;
    if (button.classList.contains('btn-close') || button.classList.contains('navbar-toggler')) return;
    if (button.type === 'submit') return;
    if (button.disabled) return;
    if (button.dataset.feedbackSkip === 'true') return;

    const message = button.dataset.feedbackMessage || 'Action completed successfully.';
    const variant = button.dataset.feedbackVariant || 'success';
    showToast(message, variant);
  });
}

function initHomePage() {
  renderCategoryHighlights();
  renderFeaturedInternships();

  const searchForm = document.getElementById('homeSearchForm');
  if (searchForm) {
    searchForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const keyword = document.getElementById('homeSearchInput').value.toLowerCase();
      const locationInput = document.getElementById('homeLocationInput');
      const location = locationInput ? locationInput.value.toLowerCase() : '';
      const filtered = internshipData.filter((item) => {
        const matchesKeyword = keyword
          ? item.title.toLowerCase().includes(keyword) ||
            item.facility.toLowerCase().includes(keyword) ||
            item.description.toLowerCase().includes(keyword)
          : true;
        const matchesLocation = location ? item.location.toLowerCase().includes(location) : true;
        return matchesKeyword && matchesLocation;
      });
      renderFeaturedInternships(filtered);
      const resultMessage =
        filtered.length > 0
          ? `Showing ${filtered.length} featured ${filtered.length === 1 ? 'internship' : 'internships'} that match your search.`
          : 'No featured internships match your search yet. Try broadening your keywords.';
      showToast(resultMessage, filtered.length > 0 ? 'success' : 'warning');
    });
  }
}

function renderCategoryHighlights() {
  const container = document.getElementById('categoryHighlights');
  if (!container) return;

  container.innerHTML = '';
  categoryHighlights.slice(0, 3).forEach((category) => {
    const col = document.createElement('div');
    col.className = 'col-md-4';
    col.innerHTML = `
      <div class="card border-0 shadow-sm h-100 text-center p-4">
        <div class="icon-circle bg-${category.color}-subtle text-${category.color} mx-auto mb-3">
          <i class="bi ${category.icon}"></i>
        </div>
        <h3 class="h5 fw-semibold">${category.title}</h3>
        <p class="text-muted small">${category.description}</p>
        <a class="btn btn-link stretched-link" href="internships.html#${category.key}">Explore</a>
      </div>
    `;
    container.appendChild(col);
  });
}

function renderFeaturedInternships(filteredList) {
  const container = document.getElementById('featuredInternships');
  if (!container) return;

  const data = filteredList ? filteredList.slice(0, 3) : internshipData.filter((item) => item.featured).slice(0, 3);
  container.innerHTML = '';

  if (data.length === 0) {
    const emptyState = document.createElement('div');
    emptyState.className = 'col-12';
    emptyState.innerHTML = `
      <div class="alert alert-info mb-0">
        We couldn't find internships that match your search yet. Try adjusting your keywords or browse all opportunities.
      </div>
    `;
    container.appendChild(emptyState);
    return;
  }

  data.forEach((item) => {
    const col = document.createElement('div');
    col.className = 'col-md-4';
    col.innerHTML = createInternshipCardMarkup(item, true);
    container.appendChild(col);
  });
}

function createInternshipCardMarkup(item, compact = false) {
  const badges = item.badges
    .map((badge) => `<span class="badge bg-primary-subtle me-1 mb-1">${badge}</span>`)
    .join('');
  const deadlineText = `Deadline: ${formatDate(item.deadline)}`;
  const descriptionText = compact ? truncateText(item.description, 90) : truncateText(item.description, 160);
  const themeClass = item.theme ? ` featured-card--${item.theme}` : ' featured-card--teal';
  const ctaLabel = 'Apply now';

  return `
    <div class="card featured-card${themeClass} h-100">
      <div class="card-body d-flex flex-column">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <div>
            <span class="badge bg-soft-primary text-uppercase small mb-2">${mapCategoryKeyToLabel(item.category)}</span>
            <h3 class="h5 fw-bold mb-1">${item.title}</h3>
            <p class="text-muted small mb-1">${item.facility}</p>
          </div>
          <span class="badge bg-light text-muted">${item.mode}</span>
        </div>
        <p class="text-muted small flex-grow-1">${descriptionText}</p>
        <p class="text-muted small mb-0"><i class="bi bi-list-check me-1"></i>${item.requirements}</p>
        <div class="mt-3">
          ${badges}
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
          <div class="small text-muted">
            <i class="bi bi-geo-alt me-1"></i>${item.location}<br />
            <i class="bi bi-clock me-1"></i>${item.duration}
          </div>
          <div class="text-end">
            <p class="small fw-semibold mb-2">${deadlineText}</p>
            <div class="btn-group" role="group" aria-label="Internship actions">
              <button class="btn btn-outline-secondary btn-sm" type="button" data-feedback-skip="true" data-save-internship="${item.id}">
                <i class="bi bi-bookmark"></i>
              </button>
              <a class="btn btn-primary btn-sm" href="internship-detail.html?id=${item.id}">${ctaLabel}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;
}

function truncateText(text, limit) {
  if (text.length <= limit) return text;
  return `${text.slice(0, limit - 3)}...`;
}

function mapCategoryKeyToLabel(key) {
  const match = categoryHighlights.find((category) => category.key === key);
  return match ? match.title : key;
}

function initLoginPage() {
  const togglePasswordButtons = document.querySelectorAll('[data-toggle-password]');
  togglePasswordButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const input = button.previousElementSibling;
      if (!input) return;
      const isPassword = input.getAttribute('type') === 'password';
      input.setAttribute('type', isPassword ? 'text' : 'password');
      button.innerHTML = isPassword
        ? '<i class="bi bi-eye-slash"></i><span class="visually-hidden">Hide password</span>'
        : '<i class="bi bi-eye"></i><span class="visually-hidden">Show password</span>';
    });
  });

  const loginForm = document.getElementById('loginForm');
  const alertBox = document.getElementById('loginAlert');
  if (loginForm && alertBox) {
    loginForm.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();
      if (loginForm.checkValidity()) {
        const role = document.querySelector('input[name="loginRole"]:checked').value;
        alertBox.classList.remove('d-none', 'alert-danger');
        alertBox.classList.add('alert-info');
        alertBox.innerHTML = `<i class="bi bi-info-circle me-2"></i>Signing you in as <strong>${role}</strong>. You\'ll be redirected to your dashboard.`;
        showToast(`Signed in as ${role}. Redirecting you to your dashboard.`, 'success');
      } else {
        alertBox.classList.remove('d-none', 'alert-info');
        alertBox.classList.add('alert-danger');
        alertBox.textContent = 'Please correct the highlighted fields before continuing.';
        showToast('Please correct the highlighted fields before continuing.', 'danger');
      }
    });
  }
}

function initForgotPasswordPage() {
  const form = document.getElementById('forgotPasswordForm');
  const alertBox = document.getElementById('forgotPasswordAlert');
  if (form && alertBox) {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();

      if (form.checkValidity()) {
        const emailValue = document.getElementById('resetEmail')?.value || '';
        const delivery = document.querySelector('input[name="resetDelivery"]:checked')?.value || 'email';
        const isSms = delivery === 'sms';
        alertBox.classList.remove('d-none', 'alert-danger');
        alertBox.classList.add('alert-success');
        const message = `<i class="bi bi-check-circle me-2"></i>${
          isSms ? 'A verification code is' : 'Reset instructions are'
        } on the way to <strong>${emailValue}</strong>. Check your ${isSms ? 'messages' : 'inbox'} to continue.`;
        alertBox.innerHTML = message;
        showToast(
          isSms
            ? 'Security code sent via SMS. Follow the prompts to reset your password.'
            : 'Password reset email sent. Check your inbox to continue.',
          'success'
        );
      } else {
        alertBox.classList.remove('d-none', 'alert-success');
        alertBox.classList.add('alert-danger');
        alertBox.textContent = 'Please fix the highlighted fields to continue.';
        showToast('Please fix the highlighted fields to continue.', 'danger');
      }
    });
  }

  const deliveryRadios = document.querySelectorAll('input[name="resetDelivery"]');
  deliveryRadios.forEach((radio) => {
    radio.addEventListener('change', () => {
      const message =
        radio.value === 'sms'
          ? "We'll text you a one-time code to unlock your account."
          : "We'll email a secure link that you can open on any device.";
      showToast(message, 'primary');
    });
  });
}

function initSignupPage() {
  const roleButtons = document.querySelectorAll('[data-role-trigger]');
  const roleSaveButtons = document.querySelectorAll('[data-role-save]');
  const roleStatus = document.getElementById('roleSelectionStatus');
  const selectedRoleInput = document.getElementById('selectedRole');
  const roleFields = document.querySelectorAll('[data-role]');
  const signupForm = document.getElementById('signupForm');
  const signupAlert = document.getElementById('signupAlert');

  roleButtons.forEach((button) => {
    const role = button.dataset.roleTrigger;
    if (!role) return;
    button.dataset.feedbackMessage =
      role === 'student'
        ? 'Student details modal opened. Complete the fields to continue.'
        : 'Employer details modal opened. Share your placement needs.';
    button.dataset.feedbackVariant = 'primary';
  });

  roleFields.forEach((field) => {
    field.dataset.originalRequired = field.hasAttribute('required') ? 'true' : 'false';
    field.required = false;
  });

  roleButtons.forEach((button) => {
    const target = button.getAttribute('data-bs-target');
    if (!target) return;
    const modalEl = document.querySelector(target);
    if (!modalEl) return;
    modalEl.addEventListener('hidden.bs.modal', () => {
      modalEl.querySelectorAll('.is-invalid').forEach((field) => field.classList.remove('is-invalid'));
    });
  });

  const setRoleButtonState = (activeRole) => {
    roleButtons.forEach((button) => {
      const isActive = button.dataset.roleTrigger === activeRole;
      button.classList.toggle('btn-primary', isActive);
      button.classList.toggle('btn-outline-primary', !isActive);
    });
  };

  const updateRoleStatus = (role) => {
    if (!roleStatus) return;
    if (!role) {
      roleStatus.textContent = 'Select a role button below to add your tailored details.';
      roleStatus.classList.remove('text-success', 'text-danger');
      roleStatus.classList.add('text-muted');
      return;
    }

    roleStatus.textContent =
      role === 'student'
        ? 'Student internship preferences saved. You can revisit to make edits at any time.'
        : 'Employer talent needs saved. You can revisit to make edits at any time.';
    roleStatus.classList.remove('text-muted', 'text-danger');
    roleStatus.classList.add('text-success');
  };

  const applyRoleSelection = (role) => {
    if (selectedRoleInput) {
      selectedRoleInput.value = role;
    }
    updateRoleStatus(role);
    setRoleButtonState(role);

    roleFields.forEach((field) => {
      const originalRequired = field.dataset.originalRequired === 'true';
      const isActive = field.dataset.role === role;
      field.required = isActive && originalRequired;
      if (!isActive) {
        field.classList.remove('is-invalid');
      }
    });
  };

  roleSaveButtons.forEach((button) => {
    button.dataset.feedbackSkip = 'true';
    button.addEventListener('click', () => {
      const role = button.dataset.roleSave;
      const modalEl = button.closest('.modal');
      if (!role || !modalEl) return;

      const fields = modalEl.querySelectorAll('[data-role]');
      let isValid = true;

      fields.forEach((field) => {
        const originalRequired = field.dataset.originalRequired === 'true';
        field.required = originalRequired;
        const fieldValid = field.checkValidity();
        field.classList.toggle('is-invalid', !fieldValid);
        if (!fieldValid) {
          isValid = false;
        }
      });

      if (!isValid) {
        const firstInvalid = Array.from(fields).find((field) => !field.checkValidity());
        if (firstInvalid) {
          firstInvalid.focus();
          firstInvalid.reportValidity();
        }
        showToast('Review the highlighted fields before saving your details.', 'danger');
        return;
      }

      applyRoleSelection(role);

      const modalInstance = bootstrap.Modal.getInstance(modalEl);
      if (modalInstance) {
        modalInstance.hide();
      }

      if (window.bootstrap?.Toast) {
        const roleLabel = role === 'student' ? 'student' : 'employer';
        showToast(`Saved your ${roleLabel} details.`, 'primary');
      }

      finalizeSignup('modal');
    });
  });

  function finalizeSignup(source = 'form') {
    if (!signupForm || !signupAlert) return false;

    signupForm.classList.add('was-validated');
    const password = document.getElementById('signupPassword');
    const confirmPassword = document.getElementById('confirmPassword');
    if (password && confirmPassword) {
      if (password.value !== confirmPassword.value) {
        confirmPassword.setCustomValidity('Passwords must match');
      } else {
        confirmPassword.setCustomValidity('');
      }
    }

    if (!selectedRoleInput || !selectedRoleInput.value) {
      if (roleStatus) {
        roleStatus.textContent = 'Please submit student or employer details to finish registration.';
        roleStatus.classList.remove('text-muted', 'text-success');
        roleStatus.classList.add('text-danger');
      }
    }

    const baseValid = signupForm.checkValidity();
    const roleSelected = Boolean(selectedRoleInput && selectedRoleInput.value);

    if (baseValid && roleSelected) {
      signupAlert.classList.remove('d-none', 'alert-danger');
      signupAlert.classList.add('alert-success');
      signupAlert.innerHTML =
        '<i class="bi bi-check-circle-fill me-2"></i>Your account has been created! Next, verify your email to unlock placement recommendations.';
      showToast('Registration details captured. Check your inbox to verify access.', 'success');
      return true;
    }

    signupAlert.classList.remove('d-none', 'alert-success');
    signupAlert.classList.add('alert-danger');
    signupAlert.innerHTML =
      '<i class="bi bi-exclamation-triangle-fill me-2"></i>Please complete the highlighted fields and role details to continue.';
    showToast('Complete the highlighted fields to finish registration.', 'danger');
    return false;
  }

  if (signupForm && signupAlert) {
    signupForm.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();
      finalizeSignup('form');
    });
  }

  updateRoleStatus('');
}

function initProfilePage() {
  renderProfileDisplays();

  const modals = document.querySelectorAll('[data-profile-modal]');
  modals.forEach((modalEl) => {
    modalEl.addEventListener('show.bs.modal', () => {
      const form = modalEl.querySelector('[data-profile-form]');
      if (form) {
        populateProfileForm(form);
        form.classList.remove('was-validated');
      }
    });

    modalEl.addEventListener('hidden.bs.modal', () => {
      const form = modalEl.querySelector('[data-profile-form]');
      form?.classList.remove('was-validated');
    });
  });

  document.querySelectorAll('[data-profile-form]').forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();

      if (!form.checkValidity()) {
        form.classList.add('was-validated');
        showToast('Complete the highlighted fields before saving changes.', 'danger');
        return;
      }

      const role = form.dataset.profileRole;
      const group = form.dataset.profileGroup;
      if (!role || !group || !profileState[role] || !profileState[role][group]) {
        return;
      }

      const updatedGroup = { ...profileState[role][group] };
      form.querySelectorAll('[data-profile-field]').forEach((field) => {
        const key = field.dataset.profileField;
        if (!key) return;
        updatedGroup[key] = field.value.trim();
      });

      profileState[role][group] = updatedGroup;
      renderProfileDisplays();

      const modalEl = form.closest('.modal');
      if (modalEl) {
        const modalInstance = bootstrap.Modal.getInstance(modalEl);
        modalInstance?.hide();
      }
      showToast('Profile details updated successfully.', 'success');
    });
  });
}

function renderProfileDisplays() {
  const nodes = document.querySelectorAll('[data-profile-value]');
  nodes.forEach((node) => {
    const path = node.dataset.profileValue;
    if (!path) return;
    const value = resolveProfileValue(path);
    if (value === undefined) return;

    let display = value;
    const format = node.dataset.profileFormat;
    if (format === 'date') {
      display = formatDate(value);
    } else if (format === 'slots') {
      if (value) {
        const count = Number(value);
        if (!Number.isNaN(count)) {
          const label = count === 1 ? 'internship slot' : 'internship slots';
          display = `${count} ${label}`;
        } else {
          display = value;
        }
      } else {
        display = '';
      }
    }

    node.textContent = display;
  });
}

function initAdminProfilePage() {
  renderAdminProfileDisplays();

  document.querySelectorAll('[data-admin-modal]').forEach((modalEl) => {
    modalEl.addEventListener('show.bs.modal', () => {
      const form = modalEl.querySelector('[data-admin-form]');
      if (!form) return;
      form.classList.remove('was-validated');
      form.querySelectorAll('.alert').forEach((alert) => alert.classList.add('d-none'));
      populateAdminProfileForm(form);
      if (form.dataset.adminGroup === 'security') {
        const confirmField = document.getElementById('adminPasswordConfirm');
        confirmField?.setCustomValidity('');
        const newField = document.getElementById('adminPasswordNew');
        if (newField) newField.value = '';
        if (confirmField) confirmField.value = '';
      }
    });
  });

  document.querySelectorAll('[data-admin-form]').forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();

      if (form.dataset.adminGroup === 'security') {
        const newPassword = document.getElementById('adminPasswordNew');
        const confirmPassword = document.getElementById('adminPasswordConfirm');
        if (newPassword && confirmPassword) {
          if (newPassword.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Passwords must match');
          } else {
            confirmPassword.setCustomValidity('');
          }
        }
      }

      form.classList.add('was-validated');
      if (!form.checkValidity()) {
        showToast('Please complete the highlighted fields before saving.', 'danger');
        return;
      }

      form.querySelectorAll('[data-admin-input]').forEach((field) => {
        const path = field.dataset.adminInput;
        if (!path) return;
        setAdminProfileValue(path, field.value.trim());
      });

      if (form.dataset.adminGroup === 'security') {
        const passwordField = document.getElementById('adminPassword');
        if (passwordField) {
          setAdminProfileValue('security.password', passwordField.value.trim());
        }
        const newPassword = document.getElementById('adminPasswordNew');
        const confirmPassword = document.getElementById('adminPasswordConfirm');
        if (newPassword) newPassword.value = '';
        if (confirmPassword) {
          confirmPassword.value = '';
          confirmPassword.setCustomValidity('');
        }
      }

      renderAdminProfileDisplays();
      const alert = form.querySelector('.alert');
      alert?.classList.remove('d-none');
      const group = form.dataset.adminGroup;
      const messageMap = {
        contact: 'Admin contact details updated successfully.',
        notifications: 'Notification preferences saved.',
        security: 'Security controls refreshed for the admin account.',
      };
      showToast(messageMap[group] || 'Changes saved.', 'success');
    });
  });
}

function renderAdminProfileDisplays() {
  document.querySelectorAll('[data-admin-display]').forEach((node) => {
    const value = getAdminProfileValue(node.dataset.adminDisplay);
    if (value !== undefined) {
      node.textContent = value;
    }
  });
}

function populateAdminProfileForm(form) {
  form?.querySelectorAll('[data-admin-input]').forEach((field) => {
    const value = getAdminProfileValue(field.dataset.adminInput);
    if (value === undefined) return;
    field.value = value;
  });
}

function getAdminProfileValue(path) {
  if (!path) return undefined;
  return path.split('.').reduce((acc, key) => {
    if (acc && Object.prototype.hasOwnProperty.call(acc, key)) {
      return acc[key];
    }
    return undefined;
  }, adminProfileState);
}

function setAdminProfileValue(path, value) {
  if (!path) return;
  const keys = path.split('.');
  let ref = adminProfileState;
  keys.slice(0, -1).forEach((key) => {
    if (!ref[key]) {
      ref[key] = {};
    }
    ref = ref[key];
  });
  ref[keys[keys.length - 1]] = value;
}

function populateProfileForm(form) {
  const role = form.dataset.profileRole;
  const group = form.dataset.profileGroup;
  if (!role || !group) return;

  const state = profileState[role]?.[group];
  if (!state) return;

  form.querySelectorAll('[data-profile-field]').forEach((field) => {
    const key = field.dataset.profileField;
    if (!key) return;
    const value = state[key] ?? '';
    field.value = value;
  });
}

function resolveProfileValue(path) {
  return path.split('.').reduce((acc, key) => {
    if (acc && Object.prototype.hasOwnProperty.call(acc, key)) {
      return acc[key];
    }
    return undefined;
  }, profileState);
}

function initInternshipsPage() {
  const filtersForm = document.getElementById('internshipFilters');
  const resultsContainer = document.getElementById('internshipResults');
  const countLabel = document.getElementById('internshipCount');
  const listViewBtn = document.getElementById('listViewBtn');
  const gridViewBtn = document.getElementById('gridViewBtn');
  const resetBtn = document.getElementById('filtersReset');
  const upcomingContainer = document.getElementById('upcomingInternships');

  const renderResults = (data) => {
    if (!resultsContainer) return;
    resultsContainer.innerHTML = '';
    if (!data.length) {
      const emptyState = document.createElement('div');
      emptyState.className = 'col-12';
      emptyState.innerHTML = `
        <div class="alert alert-info mb-0">No internships match your filters yet. Try adjusting your search or create an alert for updates.</div>
      `;
      resultsContainer.appendChild(emptyState);
    } else {
      data.forEach((item) => {
        const col = document.createElement('div');
        col.className = 'col-12 col-md-6 internship-item';
        col.innerHTML = createInternshipCardMarkup(item);
        resultsContainer.appendChild(col);
      });
    }
    updateResultLayout(resultsContainer);
    if (countLabel) {
      countLabel.textContent = `${data.length} internships match your criteria.`;
    }
  };

  let currentResults = [...internshipData];
  renderResults(currentResults);

  const renderUpcomingPlaceholders = () => {
    if (!upcomingContainer) return;
    upcomingContainer.innerHTML = '';
    upcomingInternshipPlaceholders.forEach((item) => {
      const col = document.createElement('div');
      col.className = 'col-12 col-md-6 col-xl-4';
      col.innerHTML = `
        <div class="card border-0 shadow-sm placeholder-card placeholder-card-${item.theme}">
          <div class="card-body">
            <span class="badge bg-white text-primary mb-3">In planning</span>
            <h4 class="h5 fw-bold">${item.title}</h4>
            <p class="text-white-50 mb-2">${item.focus}</p>
            <div class="d-flex flex-column gap-1 text-white small">
              <span><i class="bi bi-calendar-week me-2"></i>${item.launch}</span>
              <span><i class="bi bi-clipboard-check me-2"></i>${item.readiness}</span>
            </div>
          </div>
        </div>
      `;
      upcomingContainer.appendChild(col);
    });
  };

  renderUpcomingPlaceholders();

  if (filtersForm) {
    filtersForm.addEventListener('submit', (event) => {
      event.preventDefault();
      const keyword = document.getElementById('filterKeyword').value.toLowerCase();
      const category = document.getElementById('filterCategory').value;
      const location = document.getElementById('filterLocation').value.toLowerCase();
      const mode = document.getElementById('filterMode').value;
      const featuredOnly = document.getElementById('filterFeatured').checked;
      const sort = document.getElementById('filterSort').value;

      currentResults = internshipData.filter((item) => {
        const matchesKeyword = keyword
          ? item.title.toLowerCase().includes(keyword) ||
            item.facility.toLowerCase().includes(keyword) ||
            item.description.toLowerCase().includes(keyword)
          : true;
        const matchesCategory = category ? item.category === category : true;
        const matchesLocation = location ? item.location.toLowerCase().includes(location) : true;
        const matchesMode = mode ? item.mode === mode : true;
        const matchesFeatured = featuredOnly ? item.featured : true;
        return matchesKeyword && matchesCategory && matchesLocation && matchesMode && matchesFeatured;
      });

      if (sort === 'deadline') {
        currentResults.sort((a, b) => new Date(a.deadline) - new Date(b.deadline));
      } else if (sort === 'newest') {
        currentResults.sort((a, b) => new Date(b.posted) - new Date(a.posted));
      } else if (sort === 'name') {
        currentResults.sort((a, b) => a.title.localeCompare(b.title));
      }

      renderResults(currentResults);
      showToast('Filters updated with your latest preferences.', 'info');
    });
  }

  if (resetBtn) {
    resetBtn.dataset.feedbackSkip = 'true';
    resetBtn.addEventListener('click', () => {
      currentResults = [...internshipData];
      renderResults(currentResults);
      showToast('Filters reset to show all healthcare internships.', 'secondary');
    });
  }

  if (listViewBtn && gridViewBtn && resultsContainer) {
    [listViewBtn, gridViewBtn].forEach((button) => {
      button.addEventListener('click', () => {
        resultsContainer.dataset.view = button.dataset.view;
        [listViewBtn, gridViewBtn].forEach((btn) => btn.classList.remove('btn-primary'));
        button.classList.add('btn-primary');
        updateResultLayout(resultsContainer);
      });
      button.dataset.feedbackMessage =
        button.dataset.view === 'list' ? 'List view enabled for detailed reading.' : 'Grid view enabled for quick browsing.';
      button.dataset.feedbackVariant = 'info';
    });
    gridViewBtn.classList.add('btn-primary');
  }

  resultsContainer?.addEventListener('click', (event) => {
    const target = event.target.closest('[data-save-internship]');
    if (!target) return;

    const id = Number(target.dataset.saveInternship);
    const internship = internshipData.find((item) => item.id === id);
    if (!internship) return;

    showToast(`${internship.title} saved to your favorites.`, 'secondary');
  });

  const modalForm = document.getElementById('createListingForm');
  const successMessage = document.getElementById('listingSuccess');
  if (modalForm && successMessage) {
    modalForm.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();
      if (!modalForm.checkValidity()) {
        return;
      }

      const newListing = {
        id: internshipData.length + 1,
        title: document.getElementById('listingTitle').value,
        facility: document.getElementById('listingFacility').value,
        category: document.getElementById('listingCategory').value,
        mode: document.getElementById('listingMode').value,
        deadline: document.getElementById('listingDeadline').value,
        description: document.getElementById('listingDescription').value,
        requirements: document.getElementById('listingRequirements').value,
        location: document.getElementById('filterLocation')?.value || 'To be announced',
        featured: document.getElementById('listingFeatured').checked,
        duration: 'Flexible',
        badges: ['New listing'],
        posted: new Date().toISOString().slice(0, 10),
      };
      internshipData.push(newListing);
      successMessage.classList.remove('d-none');
      successMessage.textContent = 'Listing saved as draft for review.';
      currentResults = [...internshipData];
      renderResults(currentResults);
      showToast('Draft listing created. Submit for approval when ready.', 'success');
    });
  }

  const savedSearchList = document.getElementById('savedSearchList');
  if (savedSearchList) {
    renderSavedSearches(savedSearchList);
  }

  const createAlertBtn = document.getElementById('createAlertBtn');
  if (createAlertBtn && savedSearchList) {
    createAlertBtn.dataset.feedbackSkip = 'true';
    createAlertBtn.addEventListener('click', () => {
      const newAlert = {
        title: 'Custom alert',
        filters: 'Use filters to personalize this alert',
      };
      savedSearches.push(newAlert);
      renderSavedSearches(savedSearchList);
      showToast('Saved search alert created. Update filters to refine results.', 'primary');
    });
  }

  const reviewersForm = document.getElementById('assignReviewersForm');
  const reviewersAlert = document.getElementById('reviewersAlert');
  document.getElementById('assignReviewersModal')?.addEventListener('hidden.bs.modal', () => {
    reviewersForm?.classList.remove('was-validated');
    reviewersAlert?.classList.add('d-none');
  });
  reviewersForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    reviewersForm.classList.add('was-validated');
    if (!reviewersForm.checkValidity()) {
      showToast('Complete reviewer selection before sending invites.', 'danger');
      return;
    }
    reviewersAlert?.classList.remove('d-none');
    showToast('Reviewer invites will be sent with scoring guides.', 'success');
  });

  const plannerForm = document.getElementById('cohortPlannerForm');
  const plannerAlert = document.getElementById('plannerAlert');
  const plannerPreview = document.getElementById('plannerPreview');
  document.getElementById('cohortPlannerModal')?.addEventListener('hidden.bs.modal', () => {
    plannerForm?.classList.remove('was-validated');
    plannerAlert?.classList.add('d-none');
  });

  const updatePlannerPreview = () => {
    if (!plannerPreview || !plannerForm) return;
    const dept = plannerForm.querySelector('#plannerDepartment')?.selectedOptions?.[0]?.textContent || 'Healthcare';
    const slots = plannerForm.querySelector('#plannerSlots')?.value || '0';
    const start = plannerForm.querySelector('#plannerStart')?.value || '';
    const formattedStart = start ? formatDate(`${start}-01`) : 'TBD';
    plannerPreview.innerHTML = `
      <li><i class="bi bi-building me-2"></i>${dept.trim()} planning ${slots} slots</li>
      <li><i class="bi bi-calendar2-check me-2"></i>Target start: ${formattedStart}</li>
      <li><i class="bi bi-people me-2"></i>Finance &amp; education teams notified for support</li>
    `;
  };

  plannerForm?.addEventListener('input', updatePlannerPreview);
  plannerForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    plannerForm.classList.add('was-validated');
    if (!plannerForm.checkValidity()) {
      showToast('Add the missing cohort details before publishing.', 'danger');
      return;
    }
    plannerAlert?.classList.remove('d-none');
    showToast('Cohort forecast shared with leadership.', 'success');
  });
  updatePlannerPreview();

  const upcomingNotifyForm = document.getElementById('upcomingNotifyForm');
  const upcomingAlert = document.getElementById('upcomingAlert');
  document.getElementById('notifyUpcomingModal')?.addEventListener('hidden.bs.modal', () => {
    upcomingNotifyForm?.classList.remove('was-validated');
    upcomingAlert?.classList.add('d-none');
  });
  upcomingNotifyForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    upcomingNotifyForm.classList.add('was-validated');
    if (!upcomingNotifyForm.checkValidity()) {
      showToast('Add your contact details to receive launch alerts.', 'danger');
      return;
    }
    upcomingAlert?.classList.remove('d-none');
    showToast('Pipeline alerts scheduled—watch your inbox.', 'success');
  });
}

function initInternshipDetailPage() {
  const params = new URLSearchParams(window.location.search);
  const idParam = Number(params.get('id'));
  const internship = internshipData.find((item) => item.id === idParam) || internshipData[0];
  if (!internship) return;

  const { detail = {} } = internship;

  setDetailText('[data-detail="title"]', internship.title);
  setDetailText('[data-detail="facility"]', internship.facility);
  setDetailText('[data-detail="location"]', internship.location);
  setDetailText('[data-detail="category"]', mapCategoryKeyToLabel(internship.category));
  setDetailText('[data-detail="mode"]', internship.mode);
  setDetailText('[data-detail="duration"]', internship.duration);
  setDetailText('[data-detail="deadline"]', formatDate(internship.deadline));
  setDetailText('[data-detail="summary"]', detail.summary || internship.description);
  setDetailText('[data-detail="compensation"]', detail.compensation || 'Details shared during interview.');
  setDetailText('[data-detail="schedule"]', detail.schedule || internship.duration);

  renderBadgeList('[data-detail-badges]', internship.badges);
  renderDetailList('[data-detail-list="responsibilities"]', detail.responsibilities);
  renderDetailList('[data-detail-list="learning"]', detail.learning);
  renderDetailList('[data-detail-list="requirements"]', detail.requirements);
  renderDetailList('[data-detail-list="application"]', detail.application);
  renderDetailList('[data-detail-list="perks"]', detail.perks);

  setDetailText('[data-detail="contactName"]', detail.contact?.name);
  setDetailText('[data-detail="contactEmail"]', detail.contact?.email);
  setDetailText('[data-detail="contactPhone"]', detail.contact?.phone);
  setDetailText('[data-detail="contactOffice"]', detail.contact?.office);

  const breadcrumbTitle = document.getElementById('detailBreadcrumbTitle');
  if (breadcrumbTitle) {
    breadcrumbTitle.textContent = internship.title;
  }

  const applyButton = document.getElementById('detailApplyButton');
  if (applyButton) {
    const applicationParams = new URLSearchParams();
    applicationParams.set('program', internship.title);
    applyButton.setAttribute('href', `application.html?${applicationParams.toString()}`);
  }

  document.title = `${internship.title} | MediInternia Internship Portal`;
}

function setDetailText(selector, value) {
  const node = document.querySelector(selector);
  if (!node) return;
  node.textContent = value && value.length ? value : '—';
}

function renderBadgeList(selector, badges = []) {
  const container = document.querySelector(selector);
  if (!container) return;
  if (!badges || !badges.length) {
    container.innerHTML = '<span class="badge bg-light text-muted">Info coming soon</span>';
    return;
  }
  container.innerHTML = badges
    .map((badge) => `<span class="badge bg-primary-subtle text-primary me-2 mb-2">${badge}</span>`)
    .join('');
}

function renderDetailList(selector, items = []) {
  const container = document.querySelector(selector);
  if (!container) return;
  container.innerHTML = '';

  if (!items || !items.length) {
    const li = document.createElement('li');
    li.className = 'list-group-item small text-muted';
    li.textContent = 'Information will be added soon.';
    container.appendChild(li);
    return;
  }

  items.forEach((item) => {
    const li = document.createElement('li');
    li.className = 'list-group-item';
    li.textContent = item;
    container.appendChild(li);
  });
}

function updateResultLayout(container) {
  const view = container.dataset.view || 'grid';
  const items = container.querySelectorAll('.internship-item');
  items.forEach((item) => {
    item.classList.remove('col-md-6');
    if (view === 'grid') {
      item.classList.add('col-md-6');
    }
  });
}

function renderSavedSearches(container) {
  container.innerHTML = '';
  savedSearches.forEach((alert) => {
    const item = document.createElement('button');
    item.type = 'button';
    item.className = 'list-group-item list-group-item-action text-start';
    item.dataset.feedbackSkip = 'true';
    item.innerHTML = `<div class="fw-semibold">${alert.title}</div><div class="text-muted small">${alert.filters}</div>`;
    item.addEventListener('click', () => showToast(`Alert "${alert.title}" activated. We\'ll email you new matches.`, 'info'));
    container.appendChild(item);
  });
}

function initApplicationPage() {
  const form = document.getElementById('applicationForm');
  const successAlert = document.getElementById('applicationSuccess');
  const errorAlert = document.getElementById('applicationError');
  const progressBar = document.getElementById('applicationProgress');
  const checklist = document.getElementById('applicationChecklist');
  const statusContainer = document.getElementById('applicationStatus');
  const statusSteps = statusContainer?.querySelectorAll('[data-status-step]') || [];
  const statusOrder = ['submitted', 'review', 'interview', 'decision'];

  const setApplicationStatus = (stage) => {
    if (!statusSteps.length) return;
    const targetIndex = statusOrder.indexOf(stage);
    statusSteps.forEach((step) => {
      const stepKey = step.dataset.statusStep;
      const stepIndex = statusOrder.indexOf(stepKey);
      step.classList.remove('active', 'completed');
      if (stepIndex < targetIndex) {
        step.classList.add('completed');
      } else if (stepIndex === targetIndex) {
        step.classList.add('active');
      }
    });
  };

  setApplicationStatus('submitted');

  if (checklist) {
    checklist.addEventListener('change', updateChecklistProgress);
  }

  if (form && successAlert && errorAlert && progressBar) {
    const updateProgress = () => {
      const requiredFields = Array.from(form.querySelectorAll('[required]'));
      const completed = requiredFields.filter((field) => {
        if (field.type === 'checkbox') {
          return field.checked;
        }
        return field.value && field.value.length > 0;
      });
      const percent = Math.round((completed.length / requiredFields.length) * 100) || 0;
      progressBar.style.width = `${percent}%`;
      progressBar.textContent = `${percent}%`;
    };

    form.addEventListener('input', updateProgress);
    updateProgress();

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      event.stopPropagation();

      if (form.checkValidity()) {
        successAlert.classList.remove('d-none');
        errorAlert.classList.add('d-none');
        updateChecklistFromForm(form);
        showToast('Application submitted. Recruiters will be notified.', 'success');
        setApplicationStatus('review');
      } else {
        successAlert.classList.add('d-none');
        errorAlert.classList.remove('d-none');
        showToast('Fix the highlighted fields before submitting your application.', 'danger');
      }
    });
  }

  const recommendationForm = document.getElementById('recommendationForm');
  const recommendationAlert = document.getElementById('recommendationAlert');
  recommendationForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    recommendationForm.classList.add('was-validated');
    if (!recommendationForm.checkValidity()) {
      showToast('Add the missing reminder details to continue.', 'danger');
      return;
    }
    recommendationAlert?.classList.remove('d-none');
    showToast('Recommendation reminder queued for delivery.', 'success');
    setApplicationStatus('interview');
  });

  const complianceForm = document.getElementById('complianceForm');
  const complianceAlert = document.getElementById('complianceAlert');
  complianceForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    complianceForm.classList.add('was-validated');
    if (!complianceForm.checkValidity()) {
      showToast('Upload the required compliance documents before submitting.', 'danger');
      return;
    }
    complianceAlert?.classList.remove('d-none');
    showToast('Compliance packet submitted for review.', 'success');
    setApplicationStatus('decision');
  });
}

function updateChecklistFromForm(form) {
  const mapping = {
    resumeUpload: 'resume',
    coverLetterUpload: 'coverLetter',
    personalStatement: 'statement',
    referenceEmail: 'reference',
    requirementsAck: 'requirements',
  };
  Object.entries(mapping).forEach(([fieldId, checklistKey]) => {
    const field = form.querySelector(`#${fieldId}`);
    const checkbox = form.querySelector(`[data-checklist="${checklistKey}"]`);
    if (field && checkbox) {
      if (field.type === 'checkbox') {
        checkbox.checked = field.checked;
      } else {
        checkbox.checked = field.value && field.value.length > 0;
      }
    }
  });
  updateChecklistProgress();
}

function updateChecklistProgress() {
  const checklist = document.getElementById('applicationChecklist');
  if (!checklist) return;
  const checkboxes = checklist.querySelectorAll('input[type="checkbox"]');
  const completed = Array.from(checkboxes).filter((item) => item.checked).length;
  const percent = Math.round((completed / checkboxes.length) * 100);
  showToast(`Checklist ${percent}% complete.`, 'info');
}

function initSchedulePage() {
  const calendarContainer = document.getElementById('scheduleCalendar');
  const monthLabel = document.getElementById('calendarMonth');
  const datePicker = document.getElementById('slotDatePicker');
  const slotList = document.getElementById('slotList');
  const slotLabel = document.getElementById('slotDateLabel');
  const slotInsights = document.getElementById('slotInsights');
  const upcomingList = document.getElementById('upcomingInterviews');
  const reminderForm = document.getElementById('reminderForm');
  const reminderAlert = document.getElementById('reminderAlert');
  const slotConfirmationDetails = document.getElementById('slotConfirmationDetails');
  const confirmSlotBtn = document.getElementById('confirmSlotBtn');
  if (confirmSlotBtn) {
    confirmSlotBtn.dataset.feedbackSkip = 'true';
  }

  let currentDate = new Date();
  currentDate.setDate(1);
  let selectedDate = null;

  const renderCalendar = () => {
    if (!calendarContainer || !monthLabel) return;
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    monthLabel.textContent = `${monthNames[month]} ${year}`;

    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    let day = 1;
    let html = '<table class="table mb-0"><thead><tr>';
    const weekdayHeaders = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    weekdayHeaders.forEach((dayName) => {
      html += `<th scope="col">${dayName}</th>`;
    });
    html += '</tr></thead><tbody>';

    for (let row = 0; row < 6; row++) {
      html += '<tr>';
      for (let col = 0; col < 7; col++) {
        if ((row === 0 && col < firstDay) || day > daysInMonth) {
          html += '<td></td>';
        } else {
          const dateKey = formatDateKey(year, month + 1, day);
          const hasSlots = Boolean(scheduleSlots[dateKey]);
          const isSelected = selectedDate === dateKey;
          html += `
            <td>
              <button type="button" class="${hasSlots ? 'fw-semibold' : 'text-muted'} ${
            isSelected ? 'active' : ''
          }" data-calendar-day="${dateKey}">${day}</button>
            </td>
          `;
          day++;
        }
      }
      html += '</tr>';
      if (day > daysInMonth) break;
    }

    html += '</tbody></table>';
    calendarContainer.innerHTML = html;
  };

  const updateSlots = (dateKey) => {
    if (!slotList || !slotLabel) return;
    selectedDate = dateKey;
    renderCalendar();
    const slots = scheduleSlots[dateKey];
    slotLabel.textContent = slots ? formatDate(dateKey) : 'Select a date';
    slotList.innerHTML = '';
    if (!slots || !slots.length) {
      slotList.innerHTML = '<div class="text-center text-muted py-3">No slots available for this date.</div>';
      if (slotInsights) {
        slotInsights.innerHTML = '<div class="text-muted small">We will add more availability soon. Try proposing alternate times.</div>';
      }
      return;
    }

    slots.forEach((slot, index) => {
      const item = document.createElement('button');
      item.type = 'button';
      item.className = 'list-group-item list-group-item-action text-start';
      item.dataset.slotIndex = index;
      item.dataset.slotDate = dateKey;
      item.dataset.feedbackSkip = 'true';
      item.innerHTML = `
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <div class="fw-semibold">${slot.time}</div>
            <div class="text-muted small">${slot.interviewer} • ${slot.mode}</div>
          </div>
          <span class="badge bg-primary-subtle text-primary">Reserve</span>
        </div>
        <div class="text-muted small mt-1">${slot.location}</div>
      `;
      slotList.appendChild(item);
    });

    if (slotInsights) {
      const remoteCount = slots.filter((slot) => slot.mode.toLowerCase() === 'virtual').length;
      const onsiteCount = slots.length - remoteCount;
      const firstSlot = slots[0];
      const lastSlot = slots[slots.length - 1];
      slotInsights.innerHTML = `
        <div class="border rounded-4 p-3 bg-light">
          <p class="mb-2 fw-semibold">${slots.length} slot${slots.length === 1 ? '' : 's'} available</p>
          <ul class="list-unstyled small mb-0 text-muted">
            <li><i class="bi bi-clock-history me-2"></i>Earliest: ${firstSlot.time} • Latest: ${lastSlot.time}</li>
            <li><i class="bi bi-laptop me-2"></i>${remoteCount} virtual • ${onsiteCount} on-site</li>
            <li><i class="bi bi-people me-2"></i>Lead interviewer: ${firstSlot.interviewer}</li>
          </ul>
        </div>
      `;
    }
  };

  const renderUpcoming = () => {
    if (!upcomingList) return;
    upcomingList.innerHTML = '';
    upcomingInterviews.forEach((interview) => {
      const item = document.createElement('div');
      item.className = 'list-group-item';
      item.innerHTML = `
        <div class="fw-semibold">${interview.program}</div>
        <div class="text-muted small">${interview.date} • ${interview.time}</div>
        <div class="text-muted small">${interview.type} with ${interview.interviewer}</div>
      `;
      upcomingList.appendChild(item);
    });
  };

  renderCalendar();
  renderUpcoming();

  const firstAvailableDate = Object.keys(scheduleSlots).sort()[0];
  if (firstAvailableDate) {
    updateSlots(firstAvailableDate);
    if (datePicker) {
      datePicker.value = firstAvailableDate;
    }
    announceSlotSummary(firstAvailableDate);
  }

  const announceSlotSummary = (dateKey) => {
    if (!dateKey) return;
    const slotCount = scheduleSlots[dateKey]?.length || 0;
    const variant = slotCount ? 'success' : 'warning';
    const message = slotCount
      ? `Showing ${slotCount} interview slot${slotCount === 1 ? '' : 's'} for ${formatDate(dateKey)}.`
      : `No slots on ${formatDate(dateKey)}. Try another day or share availability.`;
    showToast(message, variant);
  };

  const prevMonthBtn = document.getElementById('prevMonthBtn');
  const nextMonthBtn = document.getElementById('nextMonthBtn');
  if (prevMonthBtn) {
    prevMonthBtn.dataset.feedbackSkip = 'true';
    prevMonthBtn.addEventListener('click', () => {
      currentDate.setMonth(currentDate.getMonth() - 1);
      renderCalendar();
      showToast(`Viewing ${monthNames[currentDate.getMonth()]} ${currentDate.getFullYear()} availability.`, 'info');
    });
  }

  if (nextMonthBtn) {
    nextMonthBtn.dataset.feedbackSkip = 'true';
    nextMonthBtn.addEventListener('click', () => {
      currentDate.setMonth(currentDate.getMonth() + 1);
      renderCalendar();
      showToast(`Viewing ${monthNames[currentDate.getMonth()]} ${currentDate.getFullYear()} availability.`, 'info');
    });
  }

  calendarContainer?.addEventListener('click', (event) => {
    const button = event.target.closest('button[data-calendar-day]');
    if (!button) return;
    button.dataset.feedbackSkip = 'true';
    const dateKey = button.dataset.calendarDay;
    updateSlots(dateKey);
    if (datePicker) {
      datePicker.value = dateKey;
    }
    announceSlotSummary(dateKey);
  });

  datePicker?.addEventListener('change', (event) => {
    const dateKey = event.target.value;
    updateSlots(dateKey);
    announceSlotSummary(dateKey);
  });

  slotList?.addEventListener('click', (event) => {
    const item = event.target.closest('[data-slot-index]');
    if (!item) return;
    const dateKey = item.dataset.slotDate;
    const slot = scheduleSlots[dateKey]?.[Number(item.dataset.slotIndex)];
    if (!slot) return;
    if (slotConfirmationDetails) {
      slotConfirmationDetails.textContent = `${formatDate(dateKey)} at ${slot.time} with ${slot.interviewer} (${slot.mode})`;
    }
    showToast(`Reviewing ${slot.mode.toLowerCase()} slot on ${formatDate(dateKey)} at ${slot.time}.`, 'info');
    const modal = bootstrap.Modal.getOrCreateInstance('#slotConfirmationModal');
    modal.show();
    confirmSlotBtn.dataset.slotDate = dateKey;
    confirmSlotBtn.dataset.slotIndex = item.dataset.slotIndex;
  });

  confirmSlotBtn?.addEventListener('click', () => {
    const modal = bootstrap.Modal.getInstance('#slotConfirmationModal');
    modal?.hide();
    const toastEl = document.getElementById('slotToast');
    if (toastEl) {
      const toast = bootstrap.Toast.getOrCreateInstance(toastEl);
      toast.show();
    }
    const slotDate = confirmSlotBtn.dataset.slotDate;
    const slotIndex = Number(confirmSlotBtn.dataset.slotIndex);
    const slot = scheduleSlots[slotDate]?.[slotIndex];
    if (slot) {
      showToast(`Reserved ${slot.mode.toLowerCase()} interview on ${formatDate(slotDate)} at ${slot.time}.`, 'success');
    } else {
      showToast('Interview slot reserved. Check your inbox for confirmation.', 'success');
    }
  });

  reminderForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    reminderAlert?.classList.remove('d-none');
    setTimeout(() => reminderAlert?.classList.add('d-none'), 4000);
    showToast('Reminder preferences updated for your interviews.', 'success');
  });

  const panelForm = document.getElementById('panelForm');
  const panelAlert = document.getElementById('panelAlert');
  panelForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    panelForm.classList.add('was-validated');
    if (!panelForm.checkValidity()) {
      showToast('Select the panel details before sending the request.', 'danger');
      return;
    }
    panelAlert?.classList.remove('d-none');
    showToast('Panel coordination request sent to the hiring team.', 'success');
    const modalInstance = bootstrap.Modal.getInstance(document.getElementById('panelModal'));
    modalInstance?.hide();
  });

  const availabilityForm = document.getElementById('availabilityForm');
  const availabilityAlert = document.getElementById('availabilityAlert');
  availabilityForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    availabilityForm.classList.add('was-validated');
    if (!availabilityForm.checkValidity()) {
      showToast('Provide alternate dates and notes to submit your request.', 'danger');
      return;
    }
    availabilityAlert?.classList.remove('d-none');
    showToast('Alternate availability shared with the scheduler.', 'success');
    const modalInstance = bootstrap.Modal.getInstance(document.getElementById('availabilityModal'));
    modalInstance?.hide();
  });
}

function initAnalyticsPage() {
  const rangeSelect = document.getElementById('analyticsRange');
  const metricApplicants = document.getElementById('metricApplicants');
  const metricInterviews = document.getElementById('metricInterviews');
  const metricOffers = document.getElementById('metricOffers');
  const metricSpecialty = document.getElementById('metricTopSpecialty');
  const categoryHighlight = document.getElementById('categoryHighlight');
  const activityTable = document.getElementById('recentActivityTable')?.querySelector('tbody');
  const userForm = document.getElementById('userForm');
  const userAlert = document.getElementById('userAlert');
  const listingForm = document.getElementById('listingForm');
  const listingAlert = document.getElementById('listingAlert');
  const adminNoteForm = document.getElementById('adminNoteForm');
  const adminNoteAlert = document.getElementById('adminNoteAlert');

  const initCharts = (snapshot) => {
    const ctxApplicants = document.getElementById('applicantsChart');
    const ctxCategories = document.getElementById('categoriesChart');
    const ctxFunnel = document.getElementById('funnelChart');
    if (!ctxApplicants || !ctxCategories || !ctxFunnel) return;

    applicantsChart = new Chart(ctxApplicants, {
      type: 'line',
      data: {
        labels: snapshot.applicants.labels,
        datasets: [
          {
            label: 'Applicants',
            data: snapshot.applicants.total,
            borderColor: '#1c7ed6',
            backgroundColor: 'rgba(28, 126, 214, 0.15)',
            tension: 0.4,
            fill: true,
          },
        ],
      },
      options: {
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } },
      },
    });

    categoriesChart = new Chart(ctxCategories, {
      type: 'doughnut',
      data: {
        labels: snapshot.categories.labels,
        datasets: [
          {
            data: snapshot.categories.data,
            backgroundColor: ['#1c7ed6', '#3bc9db', '#845ef7', '#fcc419', '#12b886'],
          },
        ],
      },
      options: {
        plugins: { legend: { position: 'bottom' } },
      },
    });

    funnelChart = new Chart(ctxFunnel, {
      type: 'bar',
      data: {
        labels: ['Applications', 'Screened', 'Interviews', 'Offers'],
        datasets: [
          {
            label: 'Candidates',
            data: snapshot.funnel,
            backgroundColor: '#1c7ed6',
          },
        ],
      },
      options: {
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } },
      },
    });
  };

  const updateMetrics = (range) => {
    const snapshot = analyticsSnapshots[range];
    if (!snapshot) return;
    if (metricApplicants) metricApplicants.textContent = snapshot.metrics.applicants.toLocaleString();
    if (metricInterviews) metricInterviews.textContent = snapshot.metrics.interviews.toLocaleString();
    if (metricOffers) metricOffers.textContent = snapshot.metrics.offers.toLocaleString();
    if (metricSpecialty) metricSpecialty.textContent = snapshot.metrics.topSpecialty;
    if (categoryHighlight) {
      categoryHighlight.textContent = `${snapshot.metrics.topSpecialty} • ${(snapshot.metrics.specialtyShare * 100).toFixed(
        0
      )}%`;
    }

    if (applicantsChart && categoriesChart && funnelChart) {
      applicantsChart.data.labels = snapshot.applicants.labels;
      applicantsChart.data.datasets[0].data = snapshot.applicants.total;
      applicantsChart.data.datasets[0].label = 'Applicants';
      applicantsChart.update();

      categoriesChart.data.labels = snapshot.categories.labels;
      categoriesChart.data.datasets[0].data = snapshot.categories.data;
      categoriesChart.update();

      funnelChart.data.datasets[0].data = snapshot.funnel;
      funnelChart.update();
    } else {
      initCharts(snapshot);
    }

    if (activityTable) {
      activityTable.innerHTML = '';
      snapshot.activity.forEach((row) => {
        const tr = document.createElement('tr');
        tr.innerHTML = `<td>${row.time}</td><td>${row.event}</td><td>${row.details}</td>`;
        activityTable.appendChild(tr);
      });
    }
    document.getElementById('viewApplicantsTotal')?.checked = true;
  };

  rangeSelect?.addEventListener('change', (event) => {
    updateMetrics(event.target.value);
  });

  document.querySelectorAll('input[name="applicantsView"]').forEach((radio) => {
    radio.addEventListener('change', (event) => {
      if (!applicantsChart) return;
      const range = rangeSelect?.value || '90';
      const snapshot = analyticsSnapshots[range];
      const view = event.target.value;
      applicantsChart.data.datasets[0].label = view === 'total' ? 'Applicants' : 'Unique applicants';
      applicantsChart.data.datasets[0].data =
        view === 'total' ? snapshot.applicants.total : snapshot.applicants.unique;
      applicantsChart.update();
    });
  });

  const exportButton = document.getElementById('exportReportBtn');
  if (exportButton) {
    exportButton.dataset.feedbackSkip = 'true';
    exportButton.addEventListener('click', () => {
      const toastEl = document.getElementById('exportToast');
      if (toastEl) {
        const toast = bootstrap.Toast.getOrCreateInstance(toastEl);
        toast.show();
      }
      showToast('Analytics export queued. Watch your inbox for the download link.', 'success');
    });
  }

  userForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    userForm.classList.add('was-validated');
    if (!userForm.checkValidity()) {
      showToast('Select a user and access level before saving changes.', 'danger');
      return;
    }
    userAlert?.classList.remove('d-none');
    showToast('User access updated with audit trail entry.', 'success');
    const modalInstance = bootstrap.Modal.getInstance(document.getElementById('userModal'));
    modalInstance?.hide();
  });

  listingForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    listingForm.classList.add('was-validated');
    if (!listingForm.checkValidity()) {
      showToast('Complete the listing status update before submitting.', 'danger');
      return;
    }
    listingAlert?.classList.remove('d-none');
    showToast('Listing update routed to the employer contact.', 'success');
    const modalInstance = bootstrap.Modal.getInstance(document.getElementById('listingModal'));
    modalInstance?.hide();
  });

  adminNoteForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    event.stopPropagation();
    adminNoteForm.classList.add('was-validated');
    if (!adminNoteForm.checkValidity()) {
      showToast('Add the missing note details before saving.', 'danger');
      return;
    }
    adminNoteAlert?.classList.remove('d-none');
    showToast('Admin note captured for the leadership brief.', 'success');
    const modalInstance = bootstrap.Modal.getInstance(document.getElementById('adminNoteModal'));
    modalInstance?.hide();
  });

  updateMetrics(rangeSelect?.value || '90');
}

function showToast(message, variant = 'primary') {
  let container = document.querySelector('.toast-stack');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container position-fixed top-0 end-0 p-3 toast-stack';
    document.body.appendChild(container);
  }

  const toastEl = document.createElement('div');
  toastEl.className = `toast align-items-center text-bg-${variant} border-0`;
  toastEl.role = 'alert';
  toastEl.ariaLive = 'assertive';
  toastEl.ariaAtomic = 'true';
  toastEl.innerHTML = `
    <div class="d-flex">
      <div class="toast-body">${message}</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  `;
  container.appendChild(toastEl);
  const toast = new bootstrap.Toast(toastEl, { delay: 2500 });
  toast.show();
  toastEl.addEventListener('hidden.bs.toast', () => toastEl.remove());
}

function formatDate(dateString) {
  const date = new Date(dateString);
  if (Number.isNaN(date.getTime())) return dateString;
  return date.toLocaleDateString(undefined, { month: 'short', day: 'numeric', year: 'numeric' });
}

function formatDateKey(year, month, day) {
  const paddedMonth = month.toString().padStart(2, '0');
  const paddedDay = day.toString().padStart(2, '0');
  return `${year}-${paddedMonth}-${paddedDay}`;
}
