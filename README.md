<div id="top"></div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#credentials">Credentials</a></li>
  </ol>
</details>


<!-- ABOUT THE PROJECT -->
## About The Project

This project is created to learn and practice inertia; understand why it is created; and explore the power of INERTIA!

This project consists of a dashboard to perform CRUD operations for a book store.

<p align="right">(<a href="#top">back to top</a>)</p>


### Built With

* [Inertia](https://inertiajs.com/)

<p align="right">(<a href="#top">back to top</a>)</p>

<!-- GETTING STARTED -->
## Getting Started

Follow these steps to try this out on your localhost.

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/JerryDindi/book-store-vue.git
   ```
2. Run composer install
   ```sh
   composer install
   ```
3. Create .env
   ```sh
   cp .env.example .env
   ```
4. Generate key
   ```sh
   php artisan key:generate
   ```
5. Run npm install
   ```sh
   npm install
6. Run npm run dev
   ```sh
   npm run dev
   ```
7. Run migration files
   ```sh
   php artisan migrate
   ```
8. Run seeders
   ```sh
   php artisan db:seed
   ```
9. Run on your localhost
   ```sh
   php artisan serve
   ```
1. Run symlinks
   ```sh
   php artisan storage:link
   ```
   
<p align="right">(<a href="#top">back to top</a>)</p>


<!-- CREDENTIALS EXAMPLES -->
## Credentials

Admin <br/>
username: super_admin@example.com <br/>
password: password <br/>

<p align="right">(<a href="#top">back to top</a>)</p>