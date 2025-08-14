
DT Tuning — Build with Contact Form
===================================
Changes:
- "Contact" renamed to "Contact Us" in the header.
- Header alignment improved (nav link vertical centering and spacing).
- Contact page now includes a styled form (black & yellow carbon theme).
- A simple PHP mail handler is included: contact-send.php
    * Update the $to email address inside contact-send.php if needed.
    * Your hosting must support PHP's mail() or be configured to send mail.
    * On success, the page shows a green success message; on error, a red one.

Files:
- contact.html (form)
- contact-send.php (mailer)
- assets/contact.js (shows success/error message after redirect)
- All other pages, images, and styles preserved from earlier builds.
