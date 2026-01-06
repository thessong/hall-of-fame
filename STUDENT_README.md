# Hall of Fame Website - Student Development Guide

## Project Overview
This Laravel project is the foundation for our school's Hall of Fame website. The site will display:
- Hall of Fame member profiles with photos and biographies
- Athletic record boards for various sports
- General school information

## Getting Started

### Prerequisites
- Git installed on your computer
- PHP 8.2 or higher
- Composer (PHP package manager)
- Node.js and npm

### Initial Setup

1. **Clone the Repository**
   ```bash
   git clone [REPOSITORY_URL_WILL_BE_PROVIDED]
   cd hall-of-fame
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**
   ```bash
   # Copy the environment file
   cp .env.example .env
   
   # Generate application key
   php artisan key:generate
   ```

4. **Database Setup**
   The project is configured to use SQLite by default. The database file should already exist at `database/database.sqlite`.

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Start Development Server**
   ```bash
   # Terminal 1: Start Laravel server
   php artisan serve
   
   # Terminal 2: Start Vite for assets
   npm run dev
   ```

7. **View the Site**
   Open your browser to `http://localhost:8000`

## Project Structure

### Views Location
All view files are in `resources/views/`:
- `layouts/app.blade.php` - Main layout template
- `components/` - Reusable components
- `home.blade.php` - Homepage
- `hall-of-fame/index.blade.php` - Hall of Fame listing page
- `records/index.blade.php` - Record boards page
- `about.blade.php` - About page

### Components Available
The project includes several reusable components:

1. **Navigation Component** (`components/navigation.blade.php`)
   - Site navigation menu
   - Customize links and styling as needed

2. **Footer Component** (`components/footer.blade.php`)
   - Site footer
   - Add school contact info, social links, etc.

3. **Member Card Component** (`components/member-card.blade.php`)
   - Displays individual Hall of Fame member info
   - Usage example:
   ```blade
   <x-member-card 
       name="John Doe"
       year="2020"
       sport="Basketball"
       image="path/to/image.jpg"
       description="Brief bio here..."
   />
   ```

4. **Record Table Component** (`components/record-table.blade.php`)
   - Displays athletic records in a table format
   - Usage example:
   ```blade
   <x-record-table 
       sport="Basketball"
       :records="$records"
   />
   ```

### Routes
Routes are defined in `routes/web.php`:
- `/` - Home page
- `/hall-of-fame` - Hall of Fame listing
- `/records` - Record boards
- `/about` - About page

## Development Tasks

### Phase 1: Database Design
1. Create migrations for:
   - Hall of Fame members table (name, year, sport, bio, image path, etc.)
   - Record boards table (sport, event, record, holder, year, etc.)
   - Any other data tables needed

2. Create models for each table

3. Set up relationships between models if needed

### Phase 2: Controllers
1. Create controllers for:
   - Hall of Fame management
   - Record boards
   - Other features

2. Update routes to use controllers instead of closures

### Phase 3: Views Development
1. Customize the existing views with actual content
2. Add forms for data entry (if admin functionality is needed)
3. Style the pages (CSS is inline for now, consider moving to app.css)
4. Add images and other media

### Phase 4: Features
Consider adding:
- Search functionality
- Filtering by sport or year
- Admin panel for managing content
- Image upload functionality
- Pagination for large lists

## Useful Commands

```bash
# Create a new migration
php artisan make:migration create_table_name

# Create a new model
php artisan make:model ModelName

# Create a new controller
php artisan make:controller ControllerName

# Run migrations
php artisan migrate

# Rollback last migration
php artisan migrate:rollback

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## Git Workflow

```bash
# Check status
git status

# Stage your changes
git add .

# Commit with a message
git commit -m "Description of changes"

# Push to GitHub
git push origin main

# Pull latest changes
git pull origin main
```

## Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Blade Templates](https://laravel.com/docs/blade)
- [Laravel Eloquent ORM](https://laravel.com/docs/eloquent)
- [Tailwind CSS](https://tailwindcss.com) (if you want to add it)

## Notes

- The example data in the views is just for demonstration
- You'll need to replace it with actual database queries
- Keep commits small and descriptive
- Test your changes before pushing to GitHub
- Ask for help when needed!

## Contact

[Add your contact information here for student questions]
