# Laravel API Example

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/Mohamed-Sayed-Ismail/laravel-api-example/actions"><img src="https://github.com/Mohamed-Sayed-Ismail/laravel-api-example/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

This is a Laravel API example project demonstrating best practices for building RESTful APIs with Laravel. The project showcases:

- RESTful API endpoints
- Database migrations and seeders
- Eloquent models and relationships
- API resource transformations
- Authentication and authorization
- Unit and feature testing
- Clean code architecture

## Features

- **Location API**: Complete CRUD operations for location management
- **User Management**: User registration, authentication, and profile management
- **Database Seeding**: Pre-populated test data for development
- **API Testing**: Comprehensive test suite for all endpoints
- **Modern Laravel**: Built with the latest Laravel framework features

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Mohamed-Sayed-Ismail/laravel-api-example.git
   cd laravel-api-example
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   # Configure your database in .env file
   php artisan migrate
   php artisan db:seed
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

## API Endpoints

The API provides location-based services with the following main endpoints:

- `GET /api/locations` - List all locations
- `GET /api/locations/search` - Search locations by proximity and type
- `GET /api/locations/types` - Get all available location types  
- `GET /api/locations/type/{type}` - Get locations by type
- `GET /api/test` - API connectivity test endpoint

**📖 For detailed API documentation with examples, see [API_DOCUMENTATION.md](./API_DOCUMENTATION.md)**

## Example Usage

```bash
# Search for restaurants within 5km of Brussels city center
curl "http://localhost:8000/api/locations/search?latitude=50.8503&longitude=4.3517&search_type=restaurant&distance=5"

# Get all available location types
curl "http://localhost:8000/api/locations/types"

# Test API connectivity
curl "http://localhost:8000/api/test"
```

## Testing

Run the test suite:

```bash
php artisan test
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

Mohamed Sayed Ismail - [GitHub](https://github.com/Mohamed-Sayed-Ismail)

Project Link: [https://github.com/Mohamed-Sayed-Ismail/laravel-api-example](https://github.com/Mohamed-Sayed-Ismail/laravel-api-example)
