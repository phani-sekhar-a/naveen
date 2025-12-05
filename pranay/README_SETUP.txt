README – Internship Application Submission System (Setup Guide)

Overview
This project is a PHP-based web application that enables students to submit internship applications, upload resumes, and view their submissions. This document explains only the setup required to host and run the website.

1. Requirements
• PHP 8 or above
• Apache or Nginx web server
• File uploads enabled
• Writable directory for resume uploads
(No database instructions included by request.)

2. Folder Structure
/auth
/middleware
/partials
/uploads
    /resumes
application.php
login.php
config/db.php
index.php
tracker.php

Note: The /uploads/resumes folder must be writable.

3. Hosting Setup Instructions
Step 1 — Upload all project files to your hosting provider (public_html or web root).
Step 2 — Set write permissions for:
/uploads
/uploads/resumes
(permissions: 755 or 775)

Step 3 — Confirm PHP is active on the server. No other configuration required.

Step 4 — Access the website:
https://yourdomain.com/login.php

4. Resume Upload Functionality
Allowed file types: PDF, DOC, DOCX
Max size: 5MB
Uploads stored in /uploads/resumes

5. Troubleshooting
• Resume not uploading → check folder permissions.
• Page not loading → ensure PHP is enabled.
• Login redirects → ensure sessions/cookies are enabled.

6. Summary
To run:
✓ Upload files
✓ Keep folder structure
✓ Set write permissions
✓ Access via browser
