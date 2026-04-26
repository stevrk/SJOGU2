@extends('layouts.app')

@section('title', $program['title'] . ' - St John of God University')

@section('content')
<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('programs') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-red-600 transition">
                <i class="fas fa-arrow-left text-sm"></i>
                Back to Programs
            </a>
        </div>

        <!-- Program Header -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg mb-8">
            <div class="h-64 md:h-80 overflow-hidden">
                <img src="{{ asset('images/' . $program['image']) }}" 
                     alt="{{ $program['title'] }}" 
                     class="w-full h-full object-cover">
            </div>
            <div class="p-6 md:p-8">
                <div class="flex flex-wrap gap-3 mb-4">
                    <span class="bg-{{ $program['type'] == 'Generic' ? 'green' : 'orange' }}-100 text-{{ $program['type'] == 'Generic' ? 'green' : 'orange' }}-700 text-xs px-3 py-1 rounded-full font-semibold">
                        {{ $program['type'] }} Program
                    </span>
                    <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-semibold">
                        {{ $program['duration'] }}
                    </span>
                    <span class="bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full font-semibold">
                        {{ $program['study_mode'] }}
                    </span>
                </div>
                <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mb-2">{{ $program['title'] }}</h1>
                <p class="text-red-600 mb-4">Department of {{ $program['department'] }}</p>
            </div>
        </div>

        <!-- Program Details -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Overview -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-info-circle text-red-600"></i>
                        Program Overview
                    </h2>
                    <p class="text-gray-600 leading-relaxed">{{ $program['overview'] }}</p>
                </div>

                <!-- Program Structure -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-tasks text-red-600"></i>
                        Program Structure
                    </h2>
                    <ul class="space-y-2">
                        @foreach($program['structure'] as $item)
                            <li class="flex items-start gap-2 text-gray-600">
                                <i class="fas fa-check-circle text-green-500 mt-1 text-sm"></i>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-4 pt-3 border-t">
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-clock mr-2 text-red-500"></i>
                            Duration: {{ $program['duration'] }} ({{ $program['duration_semesters'] }})
                        </p>
                    </div>
                </div>

                <!-- Career Opportunities -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-briefcase text-red-600"></i>
                        Career Opportunities
                    </h2>
                    <ul class="space-y-2">
                        @foreach($program['career_opportunities'] as $career)
                            <li class="flex items-start gap-2 text-gray-600">
                                <i class="fas fa-arrow-right text-red-500 mt-1 text-sm"></i>
                                <span>{{ $career }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Entry Requirements -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-graduation-cap text-red-600"></i>
                        Entry Requirements
                    </h2>
                    <ul class="space-y-2">
                        @foreach($program['entry_requirements'] as $requirement)
                            <li class="flex items-start gap-2 text-gray-600">
                                <i class="fas fa-check text-green-500 mt-1 text-sm"></i>
                                <span>{{ $requirement }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Accreditation -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <i class="fas fa-certificate text-red-600"></i>
                        Accreditation
                    </h2>
                    <p class="text-gray-600">{{ $program['accreditation'] }}</p>
                </div>

                <!-- Apply Now CTA -->
                <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-6 text-white text-center">
                    <i class="fas fa-user-graduate text-3xl mb-3"></i>
                    <h3 class="text-xl font-bold mb-2">Ready to Apply?</h3>
                    <p class="text-sm text-red-100 mb-4">Take the first step towards your career in healthcare</p>
                    <a href="{{ route('enroll') }}" class="inline-block bg-white text-red-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Apply Now
                    </a>
                </div>

                <!-- Need Help -->
                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <i class="fas fa-question-circle text-2xl text-red-600 mb-2"></i>
                    <h3 class="font-bold text-gray-800 mb-2">Need More Information?</h3>
                    <p class="text-sm text-gray-600 mb-3">Contact our admissions office</p>
                    <div class="space-y-2 text-sm">
                        <p class="text-gray-600">
                            <i class="fas fa-phone-alt text-red-500 w-5"></i> +265 123 456 789
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-envelope text-red-500 w-5"></i> admissions@sjogu.edu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection