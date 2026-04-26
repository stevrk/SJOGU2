@extends('layouts.app')

@section('title', $article['title'] . ' - St John of God University')

@section('content')
<div class="bg-gray-50 min-h-screen py-12">
    <div class="container mx-auto px-4 md:px-16">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-red-600 transition">
                <i class="fas fa-arrow-left text-sm"></i>
                Back to News
            </a>
        </div>

        <!-- Article Container -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <!-- Featured Image -->
            @if(isset($article['image']))
            <div class="h-64 md:h-96 overflow-hidden">
                <img src="{{ asset('images/' . $article['image']) }}" 
                     alt="{{ $article['title'] }}" 
                     class="w-full h-full object-cover">
            </div>
            @endif

            <!-- Article Content -->
            <div class="p-6 md:p-10">
                <!-- Meta Information -->
                <div class="flex flex-wrap items-center gap-4 mb-6 pb-4 border-b">
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <i class="far fa-calendar-alt"></i>
                        <span>{{ $article['date'] ?? 'Date not specified' }}</span>
                    </div>
                    @if(isset($article['category']))
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <i class="fas fa-tag"></i>
                        <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs font-semibold">
                            {{ $article['category'] }}
                        </span>
                    </div>
                    @endif
                    @if(isset($article['author']))
                    <div class="flex items-center gap-2 text-gray-500 text-sm">
                        <i class="fas fa-user"></i>
                        <span>By {{ $article['author'] }}</span>
                    </div>
                    @endif
                </div>

                <!-- Title -->
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-6">{{ $article['title'] }}</h1>

                <!-- Content -->
                <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                    {!! $article['content'] !!}
                </div>

                <!-- Share Section -->
                <div class="mt-8 pt-6 border-t">
                    <div class="flex flex-wrap items-center gap-4">
                        <span class="text-gray-600 font-semibold">Share this article:</span>
                        <div class="flex gap-3">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" 
                               target="_blank"
                               class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                                <i class="fab fa-facebook-f text-white text-sm"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($article['title']) }}" 
                               target="_blank"
                               class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition">
                                <i class="fab fa-twitter text-white text-sm"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article['title'] . ' - ' . url()->current()) }}" 
                               target="_blank"
                               class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-700 transition">
                                <i class="fab fa-whatsapp text-white text-sm"></i>
                            </a>
                            <a href="mailto:?subject={{ urlencode($article['title']) }}&body={{ urlencode(url()->current()) }}" 
                               class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-900 transition">
                                <i class="fas fa-envelope text-white text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Articles Section (Optional) -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">More News</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group">
                    <img src="{{ asset('images/graduation.jpg') }}" alt="News" class="w-full h-40 object-cover group-hover:scale-105 transition duration-300">
                    <div class="p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-red-600 text-xs font-semibold">Graduation</span>
                            <span class="text-gray-400 text-xs">|</span>
                            <span class="text-gray-500 text-xs"><i class="far fa-calendar-alt mr-1"></i> March 15, 2026</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2">18th Graduation Ceremony</h4>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">The university announces its 18th graduation ceremony...</p>
                        <a href="{{ route('news.show', '18th-graduation-ceremony') }}" class="text-red-600 text-sm font-semibold hover:text-red-700">Read More →</a>
                    </div>
                </div>
                <!-- Add more related articles -->
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .prose p {
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }
    
    .prose h2 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-top: 2rem;
        margin-bottom: 1rem;
        color: #1f2937;
    }
    
    .prose h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
        color: #1f2937;
    }
    
    .prose ul, .prose ol {
        margin: 1rem 0;
        padding-left: 2rem;
    }
    
    .prose li {
        margin: 0.5rem 0;
    }
    
    .prose blockquote {
        border-left: 4px solid #dc2626;
        padding-left: 1rem;
        margin: 1.5rem 0;
        font-style: italic;
        color: #4b5563;
    }
    
    .prose img {
        max-width: 100%;
        height: auto;
        border-radius: 0.5rem;
        margin: 1.5rem 0;
    }
</style>
@endpush