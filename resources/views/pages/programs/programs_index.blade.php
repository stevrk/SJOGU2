@extends('layouts.app')

@section('title', 'Academic Programs - St John of God University')

@section('content')
<!-- PROGRAMS SECTION -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
       <div class="text-center mb-12">
            <p class="text-red-600 font-semibold mb-2 uppercase tracking-wide">Our Academic Programs</p>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Courses & <span class="text-red-600">Programs</span></h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Explore our diverse range of healthcare programs across our academic departments
            </p>
        </div>

        <!-- Entry Requirements -->
        <div class="bg-gray-50 rounded-lg p-6 mb-12 border border-gray-200">
            <div class="flex items-center gap-3 mb-4">
                <i class="fas fa-graduation-cap text-2xl text-red-600"></i>
                <h2 class="text-xl font-bold text-gray-800">Entry Requirements Overview</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-red-600 mb-2">Generic Programs</h3>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Full Malawi School Certificate of Education (MSCE) or equivalent with six (6) credits</li>
                        <li>• Credits must include: English, Mathematics, Biology, Physics, Chemistry</li>
                        <li>• For Psychotherapy: six (6) credits including English and Mathematics</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-red-600 mb-2">Upgrading Programs</h3>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li>• Diploma in relevant field from accredited institution</li>
                        <li>• Minimum two (2) years post-qualification clinical/work experience</li>
                        <li>• Current registration with professional regulatory body</li>
                        <li>• Full MSCE with six (6) credits including English and relevant sciences</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Department: Clinical Medicine -->
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6 border-b border-red-200 pb-3">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-stethoscope text-red-600 text-lg"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Department of Clinical Medicine</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Diploma in Clinical Medicine (Generic) -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/programs/clinical.jpg') }}" alt="Clinical Medicine" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">3 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Diploma in Clinical Medicine</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">Comprehensive training in clinical medicine preparing students for primary healthcare delivery.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 3 Years</span>
                            <a href="{{ route('programs.show', 'diploma-in-clinical-medicine') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Diploma in Clinical Medicine (Upgrading) -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/programs/clinical1.jpg') }}" alt="Clinical Medicine Upgrading" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Diploma in Clinical Medicine (Upgrading)</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">Upgrading program for qualified Medical Assistants with Certificate in Clinical Medicine.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                            <a href="{{ route('programs.show', 'diploma-in-clinical-medicine-upgrading') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BSc Clinical Medicine - Mental Health (Upgrading) -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/programs/clinical3.jpg') }}" alt="Mental Health" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Clinical Medicine (Mental Health) - Upgrading</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">For qualified Clinical Officers with Diploma in Clinical Medicine or Mental Health.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                            <a href="{{ route('programs.show', 'bsc-clinical-medicine-mental-health') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Department: Nursing and Midwifery -->
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6 border-b border-red-200 pb-3">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-hand-holding-heart text-red-600 text-lg"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Department of Nursing and Midwifery</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- BSc Nursing and Midwifery (Generic) -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/programs/nursing.jpg') }}" alt="Nursing and Midwifery" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">4 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Nursing and Midwifery</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">Professional nursing program combining theoretical knowledge with practical clinical skills.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 4 Years</span>
                            <a href="{{ route('programs.show', 'bsc-nursing-midwifery') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BSc Mental Health Psychiatric Nursing (Upgrading) -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/programs/nursing_up.jpg') }}" alt="Psychiatric Nursing" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Mental Health Psychiatric Nursing - Upgrading</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">For Registered Nurses/Registered Nurse Midwives with University Diploma.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                            <a href="{{ route('programs.show', 'bsc-psychiatric-nursing-upgrading') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Department: Psycho-Social Counselling -->
        <div class="mb-12">
            <div class="flex items-center gap-3 mb-6 border-b border-red-200 pb-3">
                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-brain text-red-600 text-lg"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Department of Psycho-Social Counselling</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- BSc in Psychotherapy (Generic) -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/programs/psychotherapy.jpg')}}" alt="Psychotherapy" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">4 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Psychotherapy (Psychosocial Counselling)</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">Two exit points: Diploma after 4 semesters, Bachelor's after 8 semesters.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 4 Years</span>
                            <a href="{{ route('programs.show', 'bsc-psychotherapy') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BSc in Psychotherapy (Upgrading) -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/programs/psychotherapy_up.jpg') }}" alt="Psychotherapy Upgrading" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Upgrading</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">2 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">BSc in Psychotherapy - Upgrading</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">For qualified Counsellors with Diploma in Psychosocial Counselling.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 2 Years</span>
                            <a href="{{ route('programs.show', 'bsc-psychotherapy-upgrading') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- BSc Public Health -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                    <img src="{{ asset('images/public health.jpg') }}" alt="Public Health" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex gap-2 mb-2">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Generic</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">4 Years</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Bachelor of Science in Public Health</h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">Comprehensive program focusing on community health, epidemiology, and health promotion.</p>
                        <div class="flex items-center justify-between pt-3 border-t">
                            <span class="text-sm text-gray-500">Full-time | 4 Years</span>
                            <a href="{{ route('programs.show', 'bsc-public-health') }}" class="text-red-600 text-sm font-semibold hover:text-red-700 transition">
                                Read More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush