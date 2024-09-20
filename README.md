
# README

## What's in the Repo?

### WordPress 6.6.2
This repository includes the latest stable release of WordPress. You can download it [here](https://wordpress.org/download/).

### Underscores Base Theme
The theme is built using the Underscores starter theme. For more information, visit [Underscores.me](https://underscores.me/).

## Getting Started

### Prerequisites
- A local server environment like XAMPP, WAMP, or MAMP.
- Git installed on your machine.
- A web browser for testing.

### Setting up the Project on Windows

1. **Clone the Repository:**

   git clone https://github.com/infotechnexus28/wastewater


2. **Set Up Virtual Host:**
   - Configure your virtual host to point to `http://wastewater.test`.
   - Ensure the root directory is set to the path of the cloned repository.

3. **Set Up the Database:**
   - Open the `db` folder and locate the `.sql` dump file.
   - Import the `.sql` file into your local database server (e.g., using MySQL or phpMyAdmin).
   - Update the database settings in the `wp-config.php` file to match your local database configuration.

4. **Test the Site:**
   - Open your browser and navigate to [http://wastewater.test] to verify that the site is accessible.

5. **Login to the Site:**
   - Go to [http://wastewater.test/wp-login.php].
   - Use the following credentials:
     - **Username:** `admin`
     - **Password:** `admin`
