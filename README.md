
---

# WeShare - Share Your Notes Effortlessly

WeShare is a cutting-edge application designed to revolutionize the way you create, store, and share notes. With a focus on simplicity, security, and user engagement, WeShare leverages the power of the TALL stack to provide a seamless experience for users looking to capture and disseminate their thoughts and ideas.

## Features

- **AI-Powered Notes**: Generate notes with the help of AI or use pre-existing templates for your content.
- **Flexible Sharing Options**: Share your notes publicly or privately with ease, ensuring your ideas reach the intended audience.
- **Engagement Through Interaction**: Receive likes and engage with your audience directly through email interactions.
- **Advanced Security**: End-to-end encryption and unique identifiers (UUIDs) keep your notes secure and private.

## Technology Stack

WeShare is built using the TALL stack, a modern technology stack that brings together:

- **[TailwindCSS](https://tailwindcss.com/)**: A utility-first CSS framework for rapidly building custom designs.
- **[AlpineJS](https://alpinejs.dev/)**: A rugged, minimal framework for composing JavaScript behavior in your markup.
- **[Laravel](https://laravel.com/)**: A web application framework with expressive, elegant syntax.
- **[Livewire](https://laravel-livewire.com/)**: A full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.

Additionally, WeShare uses **PostgreSQL** as its database management system, known for its robustness, performance, and standards compliance.

## Getting Started

To get started with WeShare, follow these steps:

1. **Clone the Repository**

   ```
   git clone https://github.com/yourusername/weshare.git
   cd weshare
   ```

2. **Install Dependencies**

   ```
   composer install
   npm install && npm run dev
   ```

3. **Setup Environment**

   Copy `.env.example` to `.env` and configure your environment variables, including your database credentials.

   ```
   cp .env.example .env
   ```

4. **Generate Application Key**

   ```
   php artisan key:generate
   ```

5. **Run Migrations**

   ```
   php artisan migrate
   ```

6. **Serve the Application**

   ```
   php artisan serve
   ```

   Visit `http://localhost:8000` in your web browser.

## Accessing WeShare

WeShare is also deployed and accessible at [https://weshare-1.fly.dev](https://weshare-1.fly.dev), allowing you to explore its features online.

## License

Distributed under the MIT License. See `LICENSE` for more information.

---
