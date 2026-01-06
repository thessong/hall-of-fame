<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Hall of Fame') }} - @yield('title')</title>
    
    {{-- Temporary inline styles until Node.js is installed and Vite is running --}}
    @if (!file_exists(public_path('build/manifest.json')))
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap');
            
            :root {
                --color-brand-dark-green: #2C5234;
                --color-brand-white: #FFFFFF;
                --color-brand-silver-grey: #A2AAAD;
            }
            
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Instrument Sans', system-ui, sans-serif; line-height: 1.6; color: #333; }
            
            /* Navigation */
            nav { background-color: var(--color-brand-dark-green); padding: 1rem; }
            .nav-wrapper { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
            .logo { color: var(--color-brand-white); text-decoration: none; font-size: 1.5rem; font-weight: bold; }
            .nav-links { display: flex; list-style: none; gap: 2rem; }
            .nav-links a { color: var(--color-brand-white); text-decoration: none; transition: color 0.2s; }
            .nav-links a:hover { color: var(--color-brand-silver-grey); }
            
            /* Footer */
            footer { background-color: var(--color-brand-dark-green); color: var(--color-brand-white); padding: 2rem 1rem; margin-top: 4rem; text-align: center; }
            footer .container { max-width: 1200px; margin: 0 auto; }
            
            /* Containers */
            .container { max-width: 1200px; margin: 0 auto; padding: 2rem 1rem; }
            
            /* Hero */
            .hero { text-align: center; padding: 3rem 0; }
            .hero h1 { color: var(--color-brand-dark-green); font-size: 2.5rem; margin-bottom: 1rem; }
            
            /* Quick Links */
            .quick-links { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem; }
            .quick-link-card { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); text-decoration: none; color: inherit; border: 1px solid var(--color-brand-silver-grey); transition: all 0.2s; }
            .quick-link-card:hover { background-color: var(--color-brand-dark-green); color: var(--color-brand-white); transform: translateY(-4px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
            .quick-link-card h2 { margin-bottom: 0.5rem; }
            
            /* Member Card */
            .member-card { border: 1px solid var(--color-brand-silver-grey); border-radius: 8px; padding: 1rem; margin-bottom: 1rem; display: flex; gap: 1rem; }
            .member-image { width: 150px; height: 150px; object-fit: cover; border-radius: 4px; }
            .member-image-placeholder { width: 150px; height: 150px; background-color: var(--color-brand-silver-grey); display: flex; align-items: center; justify-content: center; border-radius: 4px; color: white; }
            .member-info { flex: 1; }
            .member-info h3 { color: var(--color-brand-dark-green); margin-bottom: 0.5rem; }
            .member-year, .member-sport { color: var(--color-brand-silver-grey); margin: 0.25rem 0; }
            .member-description { margin-top: 0.5rem; }
            .members-grid { margin-top: 2rem; }
            
            /* Record Table */
            .record-table-container { margin-bottom: 2rem; }
            .record-table-container h2 { color: var(--color-brand-dark-green); margin-bottom: 1rem; }
            .record-table { width: 100%; border-collapse: collapse; background-color: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
            .record-table th, .record-table td { padding: 0.75rem; text-align: left; border-bottom: 1px solid var(--color-brand-silver-grey); }
            .record-table th { background-color: var(--color-brand-dark-green); color: var(--color-brand-white); font-weight: bold; }
            .record-table tr:hover { background-color: #f8f9fa; }
            .text-center { text-align: center; }
            .records-section { margin-top: 2rem; }
            
            /* About Page */
            .about-content { margin-top: 2rem; line-height: 1.6; }
            
            h1 { color: var(--color-brand-dark-green); font-size: 2rem; margin-bottom: 1rem; }
        </style>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="antialiased">
    <x-navigation />
    
    <main>
        @yield('content')
    </main>
    
    <x-footer />
</body>
</html>
