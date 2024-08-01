## Overview

The Hotel Management System is a comprehensive application designed to streamline the management of hotel operations. This system enables efficient handling of bookings, guest information, room details, and billing processes. The project is implemented using a relational database management system (DBMS) to ensure data integrity and ease of access.

## Features

- **User Authentication**: Secure login system for administrators and staff.
- **Booking Management**: Facilitate room bookings, cancellations, and modifications.
- **Guest Management**: Store and manage guest information and history.
- **Room Management**: Keep track of room availability, types, and rates.
- **Billing and Payments**: Generate invoices and process payments.
- **Reports and Analytics**: Generate reports on bookings, revenue, and occupancy.

## Technologies Used

- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL

## Installation

### Prerequisites

- Web server (e.g., Apache)
- PHP
- MySQL
- Web browser

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Kruthikasv/Hotel_management_system_DBMS.git
   ```

2. **Set Up the Database**
   - Create a new MySQL database.
   - Import the database schema from `hotel_management_system.sql` file provided in the repository.
     ```bash
     mysql -u username -p password database_name < path_to_sql_file
     ```

3. **Configure Database Connection**
   - Update the database configuration in `config.php` with your database credentials.
     ```php
     <?php
     $servername = "your_server_name";
     $username = "your_username";
     $password = "your_password";
     $dbname = "your_database_name";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

4. **Deploy to Web Server**
   - Copy the project files to your web server’s root directory.
   - Ensure that your web server is running and can serve PHP files.

5. **Access the Application**
   - Open your web browser and navigate to `http://your_server_address/Hotel_management_system_DBMS`.

## Usage

### Admin Functions

- **Login**: Admins can log in using their credentials.
- **Manage Bookings**: View, add, update, or delete room bookings.
- **Manage Guests**: View, add, update, or delete guest information.
- **Manage Rooms**: Add new rooms, update room details, or delete rooms.
- **Generate Reports**: View and export reports on various aspects of the hotel’s performance.

### Staff Functions

- **Login**: Staff can log in using their credentials.
- **View Bookings**: Staff can view and manage current bookings.
- **Check-In/Check-Out**: Handle guest check-in and check-out processes.
- **Billing**: Process payments and generate invoices for guests.

## Database Schema

- **Users**: Stores user information for admins and staff.
- **Guests**: Stores guest information and history.
- **Rooms**: Stores room details, including type, rate, and availability.
- **Bookings**: Stores booking details, including guest ID, room ID, check-in and check-out dates.
- **Payments**: Stores payment details, including booking ID, amount, and payment date.

## Contributions

Contributions to the project are welcome. Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -am 'Add your feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

## Contact

For any inquiries or support, please contact:

- **Name**: Kruthika Vasisht
- **Email**: [kruthikasvasisht@gmail.com]
