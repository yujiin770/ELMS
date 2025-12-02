FOLDER STRUCTURED

elms/
├── public/               <-- WEB ROOT. All requests and assets are served from here.
│   ├── index.php         <-- The single entry point for the entire application.
│   └── assets/           <-- Compiled and static frontend assets.
│       ├── css/
│       │   ├── bootstrap/
│       │   │   └── bootstrap.min.css  <-- Core Bootstrap framework styles.
│       │   └── login.css              <-- Custom styles for the authentication pages.
│       ├── fonts/                     <-- (Placeholder for custom font files).
│       ├── images/                    <-- All static images, like the school logo.
│       └── js/
│           ├── bootstrap/
│           │   └── bootstrap.bundle.min.js <-- Core Bootstrap JavaScript.
│           └── auth.js                     <-- Custom JS for the auth page animations.
│
├── src/                  <-- The core application source code (NOT publicly accessible).
│   ├── Controllers/      <-- (Placeholder) Handles request logic.
│   ├── Core/             <-- (Placeholder) Core application services (e.g., Router, Database).
│   ├── Helpers/          <-- (Placeholder) Global helper functions.
│   ├── Models/           <-- (Placeholder) Handles data interaction with the database.
│   └── Views/            <-- Contains all presentation logic (HTML templates).
│       ├── components/   <-- (Placeholder) Reusable UI components.
│       ├── layouts/
│       │   └── auth.php  <-- The master layout for all auth pages. Contains <head>, <body>, and script tags.
│       └── pages/
│           ├── auth-container.php     <-- The main page view. It includes both login & forgot password forms to enable the animation.
│           ├── forgot-password.php    <-- forgot password form.
│           └── login.php              <-- login form.
│
├── vendor/               <-- Third-party libraries managed by Composer (if any).
├── .env                  <-- Environment variables (database credentials, API keys).
├── composer.json         <-- Defines project dependencies for Composer.
└── readme.md             <-- This file.