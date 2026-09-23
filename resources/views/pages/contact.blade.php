@extends('layout.app')

@section('title', 'Home - ApexBooks')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="hero">
    <div class="hero-content">
        <span class="hero-badge">📚 Welcome to ApexBooks</span>
        <h1 class="hero-title">
            Discover Your Next
            <span class="hero-highlight">Great Read</span>
        </h1>
        <p class="hero-subtitle">
            Thousands of books across every genre — from timeless classics
            to the latest bestsellers. All in one place.
        </p>

        <div class="hero-buttons">
            <a href="#featured" class="hero-btn-primary">Browse Books</a>
            <a href="#" class="hero-btn-secondary">Learn More →</a>
        </div>
    </div>
</section>

{{-- ==================== FEATURED BOOKS ==================== --}}
<section id="featured" class="section">
    <div class="books-grid">
        @foreach ([
            ['The Midnight Library', 'Matt Haig',    'Fiction',    '📘'],
            ['Atomic Habits',        'James Clear',  'Self-Help',  '📗'],
            ['Project Hail Mary',    'Andy Weir',    'Sci-Fi',     '📙'],
            ['The Silent Patient',   'Alex Michaelides', 'Thriller', '📕'],
            ['Educated',             'Tara Westover','Memoir',     '📓'],
            ['Dune',                 'Frank Herbert','Sci-Fi',     '📔'],
        ] as [$title, $author, $genre, $icon])
            <div class="book-card">
                <div class="book-cover">{{ $icon }}</div>
                <h3 class="book-title">{{ $title }}</h3>
                <p class="book-author">by {{ $author }}</p>
                <span class="book-genre">{{ $genre }}</span>
            </div>
        @endforeach
    </div>
</section>

{{-- ==================== CATEGORIES ==================== --}}
<section class="section">
    <div class="section-header">
        <h2>Browse by Category</h2>
        <p>Find the perfect book for every mood.</p>
    </div>

    <div class="categories-grid">
        @foreach ([
            ['Fiction',    '🎭'],
            ['Self-Help',  '🌟'],
            ['Sci-Fi',     '🚀'],
            ['Mystery',    '🔍'],
            ['Romance',    '💖'],
            ['History',    '🏛️'],
            ['Biography',  '👤'],
            ['Children',   '🧸'],
        ] as [$name, $icon])
            <a href="#" class="category-card">
                <span class="category-icon">{{ $icon }}</span>
                <span class="category-name">{{ $name }}</span>
            </a>
        @endforeach
    </div>
</section>

{{-- ==================== CTA ==================== --}}
<section class="cta-section">
    <div class="cta-content">
        <h2>Join Our Reading Community</h2>
        <p>Get personalized recommendations, exclusive deals, and early access to new releases.</p>
        <a href="#" class="cta-btn">Sign Up Free</a>
    </div>
</section>

@endsection

<style>
/* ==================== HERO ==================== */
.hero {
    background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%);
    padding: 80px 20px;
    text-align: center;
}
.hero-content { max-width: 800px; margin: 0 auto; }
.hero-badge {
    display: inline-block;
    background: #fff;
    color: #7e22ce;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 22px;
    box-shadow: 0 4px 12px rgba(168, 85, 247, 0.15);
}
.hero-title {
    font-size: 52px;
    font-weight: 800;
    color: #4c1d95;
    line-height: 1.15;
    margin-bottom: 20px;
}
.hero-highlight {
    background: linear-gradient(90deg, #a855f7, #ec4899);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.hero-subtitle {
    font-size: 18px;
    color: #6b21a8;
    max-width: 600px;
    margin: 0 auto 32px;
    line-height: 1.6;
}
.hero-buttons {
    display: flex;
    gap: 14px;
    justify-content: center;
    flex-wrap: wrap;
}
.hero-btn-primary {
    background: #6b21a8;
    color: #fff;
    padding: 14px 32px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s;
    box-shadow: 0 6px 18px rgba(107, 33, 168, 0.3);
}
.hero-btn-primary:hover {
    background: #a855f7;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(168, 85, 247, 0.4);
}
.hero-btn-secondary {
    background: #fff;
    color: #6b21a8;
    padding: 14px 32px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    border: 2px solid #6b21a8;
    transition: all 0.3s;
}
.hero-btn-secondary:hover {
    background: #6b21a8;
    color: #fff;
}

/* ==================== SECTIONS ==================== */
.section {
    max-width: 1300px;
    margin: 0 auto;
    padding: 70px 20px;
}
.section-header { text-align: center; margin-bottom: 45px; }
.section-header h2 {
    font-size: 34px;
    color: #4c1d95;
    margin-bottom: 8px;
}
.section-header p { color: #7e22ce; font-size: 16px; }

/* ==================== BOOKS GRID ==================== */
.books-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 24px;
}
.book-card {
    background: #fff;
    border-radius: 18px;
    padding: 24px;
    text-align: center;
    box-shadow: 0 4px 16px rgba(168, 85, 247, 0.1);
    border: 1px solid #f3e8ff;
    transition: all 0.3s;
}
.book-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(168, 85, 247, 0.25);
}
.book-cover {
    font-size: 58px;
    margin-bottom: 14px;
}
.book-title {
    font-size: 16px;
    color: #4c1d95;
    margin-bottom: 6px;
    font-weight: 700;
}
.book-author {
    font-size: 13px;
    color: #7e22ce;
    margin-bottom: 12px;
}
.book-genre {
    display: inline-block;
    background: #f3e8ff;
    color: #6b21a8;
    padding: 4px 14px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
}

/* ==================== CATEGORIES ==================== */

.category-card {
    background: #fff;
    border-radius: 14px;
    padding: 22px 14px;
    text-align: center;
    text-decoration: none;
    border: 2px solid #f3e8ff;
    transition: all 0.3s;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}
.category-card:hover {
    border-color: #a855f7;
    background: #faf5ff;
    transform: translateY(-4px);
}
.category-icon { font-size: 34px; }
.category-name {
    color: #6b21a8;
    font-weight: 600;
    font-size: 14px;
}

/* ==================== CTA ==================== */
.cta-section {
    background: linear-gradient(135deg, #6b21a8, #a855f7);
    padding: 70px 20px;
    text-align: center;
    color: #fff;
}
.cta-content { max-width: 600px; margin: 0 auto; }
.cta-content h2 {   h
    font-size: 34px;
    margin-bottom: 12px;
}
.cta-content p {
    font-size: 16px;
    margin-bottom: 26px;
    opacity: 0.95;Hn  a
}
.cta-btn {
    display: inline-block;
    background: #fff;
    color: #6b21a8;
    padding: 14px 34px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.3s;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
}
.cta-btn:hover {
    background: #f3e8ff;
    transform: translateY(-2px);
}

/* ==================== RESPONSIVE ==================== */
@media (max-width: 768px) {
    .hero-title { font-size: 36px; }
    .hero-subtitle { font-size: 16px; }
    .section-header h2 { font-size: 26px; }
    .cta-content h2 { font-size: 26px; }
}
</style>