# Salon Nilu - Beauty Salon Website

## Project Overview
A professional website for Salon Nilu, a premium unisex beauty salon offering hairstyling, bridal services, and beauty treatments. This PHP-based website features a content management system for administrators to manage services, content, and user accounts.

## Group Members
- MCI Fernando - 37101
- RACH Ranasinghe - 37014
- SS Waravita - 36406
- RPDA Mihisarani - 37047
- HMI Udara - 37020
- KN Wickramarthilaka - 36877
- SSR Rodrigo - 37242
- TLAH Sandaruwan - 37301
- HHNV Induwara - 37171

## Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap 5
- **Backend:** PHP
- **Database:** MySQL
- **Version Control:** GitHub
- **Additional Tools:** XAMPP (for local development)

## Features
### User-Facing Features
- Responsive homepage with service overview
- About Us section with salon information
- Service catalog and pricing
- Online booking system
- Gallery showcasing previous work
- Customer review system
- Contact information and location details

### Admin Features
- User authentication and authorization
- CRUD operations for services and content
- User management with different access levels
- Appointment management system
- Content updates without coding knowledge

## Installation Instructions

### Prerequisites
- Web server (Apache, Nginx or XAMPP)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web browser

### Setup Steps
1. **Clone or download the project files**
git clone - https://github.com/SanukaWaravita/SalonNilu.git



2. **Database Setup**
- Create a MySQL database named `salonnilu`
- Import the SQL file from the `database/` folder (if provided)
- Alternatively, the database will be created automatically on first run if you've set up the connection properly

3. **Configuration**
- Update database credentials in `config/database.php` or relevant configuration file:
  ```php
  $host = 'localhost';
  $dbname = 'salonnilu';
  $username = 'root';
  $password = '';
  ```

4. **File Placement**
- Place all files in your web server's root directory (e.g., `htdocs` for XAMPP)
- Ensure the necessary directories have write permissions if file uploads are required

5. **Access the Website**
- Main site: `http://localhost/SalonNilu/`
- Admin panel: `http://localhost/SalonNilu/admin_dashboard.php/`

## Admin Access
**Default Admin Account:**
- Username: `chamindu`
- Password: `chamindu828`

**Admin Capabilities:**
- Add, edit, and delete services
- Manage user accounts and permissions
- Update website content
- View and manage appointments
- Moderate customer reviews
