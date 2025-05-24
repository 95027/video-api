<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

---

## 📽️ Laravel Video Streaming Task

This Laravel application demonstrates a basic video streaming API and frontend functionality using JWT authentication.

### ✅ Features Implemented

1. **Fetched Videos from YouTube API**  
   - Videos are pulled from a third-party API.
   - Displayed in a list with the ability to play in an embedded iframe.

2. **JWT Authentication (REST API)**  
   - Register/Login using JWT.
   - Endpoints:
     - `POST /api/register`
     - `POST /api/login`
     - `GET /api/user`
     - `POST /api/logout`

3. **Video Upload API**  
   - Authenticated users can upload videos.
   - Files renamed with a timestamp and stored in `storage/app/public/videos`.

---

