# PHP Classic App – Simple Guestbook

This is a small classic PHP project that demonstrates basic web application functionality using only PHP and a text file.

## 🧾 Features

- HTML form handling with PHP
- Guestbook entries are saved to a `.txt` file
- Stored entries are displayed directly on the page
- Runs locally via PHP’s built-in web server (no need for Apache, Nginx or a database)

## 🚀 Getting Started

### Prerequisites
- PHP installed (version 8.x recommended)
- Any text editor (e.g., VS Code)

### Run Locally

1. Clone the repository or download the files.
2. Open your terminal and navigate to the project folder:

```bash
cd path/to/php-classic-app


Start the PHP development server:
php -S localhost:8000
Open your browser and go to:
http://localhost:8000

File Structure
php-classic-app/
│
├── index.php          # Main guestbook logic (form, save, display)
├── guestbook.txt      # Stores user messages
└── README.md          # Project description
 Notes