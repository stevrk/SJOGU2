@extends('layouts.app')

@section('title', 'Staff Directory - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Staff <span class="text-yellow-300">Directory</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Meet our dedicated team of leaders, educators, and professionals
        </p>
    </div>
</section>

<!-- Executive Leadership Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Executive <span class="text-red-600">Leadership</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our executive leadership team guiding the university towards excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Vice Chancellor -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Vice Chancellor</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/VC.jpg')))
                            <img src="{{ asset('images/staff/VC.jpg') }}" alt="Charles Masulani Mwale, PhD" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-tie text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Prof. Charles Masulani Mwale, PhD</h4>
                    <p class="text-red-600 text-sm mb-2">Vice Chancellor</p>
                    <p class="text-sm text-gray-500 mb-3">PhD, MSc, BSc</p>
                    <p class="text-gray-600 text-sm">Leading the university with vision and excellence in higher education.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:vc@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Deputy Vice Chancellor -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Deputy Vice Chancellor</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/DVC.jpg')))
                            <img src="{{ asset('images/staff/DVC.jpg') }}" alt="Prof. Esmie Mkwinda, PhD" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-tie text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Prof. Esmie Mkwinda, PhD</h4>
                    <p class="text-red-600 text-sm mb-2">Deputy Vice Chancellor</p>
                    <p class="text-sm text-gray-500 mb-3">PhD</p>
                    <p class="text-gray-600 text-sm">Supporting the Vice Chancellor in academic and administrative leadership.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:dvc@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dean of Faculty -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Dean of Faculty</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/Dean of faculty.jpg')))
                            <img src="{{ asset('images/staff/Dean of faculty.jpg') }}" alt="Chimwemwe Munthali, MSc" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-chalkboard-user text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Chimwemwe Munthali, MSc</h4>
                    <p class="text-red-600 text-sm mb-2">Dean of Faculty</p>
                    <p class="text-sm text-gray-500 mb-3">MSc</p>
                    <p class="text-gray-600 text-sm">Overseeing academic programs and faculty development.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:dean@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Administrative Leadership -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Administrative <span class="text-red-600">Leadership</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Key administrative leaders supporting university operations
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Registrar -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Registrar</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/registrar.jpg')))
                            <img src="{{ asset('images/staff/registrar.jpg') }}" alt="Chisomo Chithyola" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-user-tie text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Chisomo Chithyola</h4>
                    <p class="text-red-600 text-sm mb-2">Registrar</p>
                    <p class="text-sm text-gray-500 mb-3">MBA</p>
                    <p class="text-gray-600 text-sm">Managing student records, admissions, and academic registrations.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:registrar@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Director of Quality Assurance -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Quality Assurance</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/quality assuarance.jpg')))
                            <img src="{{ asset('images/staff/quality assuarance.jpg') }}" alt="Zione Mugala" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-clipboard-list text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Zione Mugala</h4>
                    <p class="text-red-600 text-sm mb-2">Director of Quality Assurance</p>
                    <p class="text-sm text-gray-500 mb-3">MSc</p>
                    <p class="text-gray-600 text-sm">Ensuring academic standards and institutional quality compliance.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:qa@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- University Librarian -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Library Services</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/librarian.jpg')))
                            <img src="{{ asset('images/staff/librarian.jpg') }}" alt="Robert Chalochiwawa" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-book text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Robert Chalochiwawa</h4>
                    <p class="text-red-600 text-sm mb-2">University Librarian</p>
                    <p class="text-gray-600 text-sm">Managing library resources, digital archives, and research support services.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:library@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Academic Department Heads -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Department <span class="text-red-600">Heads</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Academic department leaders driving excellence in their respective fields
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Head of Clinical Medicine -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Clinical Medicine</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/HOD CM.jpg')))
                            <img src="{{ asset('images/staff/HOD CM.jpg') }}" alt="Silvester Malunga" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-stethoscope text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Silvester Malunga, MSc</h4>
                    <p class="text-red-600 text-sm mb-2">Head of Department</p>
                    <p class="text-sm text-gray-500 mb-3">MSc</p>
                    <p class="text-gray-600 text-sm">Leading the Clinical Medicine department with expertise in medical education.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:clinical@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Head of Nursing and Midwifery -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Nursing & Midwifery</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/HOD NM.jpg')))
                            <img src="{{ asset('images/staff/HOD NM.jpg') }}" alt="Meryiam Banda" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-hand-holding-heart text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Meryiam Banda, MSc</h4>
                    <p class="text-red-600 text-sm mb-2">Head of Department</p>
                    <p class="text-sm text-gray-500 mb-3">MSc</p>
                    <p class="text-gray-600 text-sm">Leading the Nursing and Midwifery department with clinical excellence.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:nursing@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Head of Psycho-Social Counselling -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Psycho-Social Counselling</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/HOD PC.jpg')))
                            <img src="{{ asset('images/staff/HOD PC.jpg') }}" alt="Tendai Machaya" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-brain text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Tendai Machaya, MA</h4>
                    <p class="text-red-600 text-sm mb-2">Head of Department</p>
                    <p class="text-sm text-gray-500 mb-3">MA</p>
                    <p class="text-gray-600 text-sm">Leading the Psycho-Social Counselling department with expertise in mental health.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:counselling@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specialized Faculty -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Specialized <span class="text-red-600">Faculty</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Distinguished faculty members contributing to academic excellence
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Seed Global Educator -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Seed Global Health</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/seed global.jpg')))
                            <img src="{{ asset('images/staff/seed global.jpg') }}" alt="Geldine Chironda" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-globe-africa text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Dr. Geldine Chironda, PhD</h4>
                    <p class="text-red-600 text-sm mb-2">Seed Global Educator</p>
                    <p class="text-sm text-gray-500 mb-3">PhD</p>
                    <p class="text-gray-600 text-sm">International educator enhancing healthcare training through global partnerships.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:geldine@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Head of Basic Sciences -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition border border-gray-100">
                <div class="bg-red-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Basic Sciences</h3>
                </div>
                <div class="p-6 text-center">
                    <div class="w-48 h-48 lg:w-56 lg:h-56 mx-auto mb-4 overflow-hidden bg-gray-200 rounded-lg">
                        @if(file_exists(public_path('images/staff/HOD BASIC.jpg')))
                            <img src="{{ asset('images/staff/HOD BASIC.jpg') }}" alt="Dumisani Mfune" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-red-100 to-red-200">
                                <i class="fas fa-microscope text-5xl text-red-400"></i>
                            </div>
                        @endif
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Dumisani Mfune, MSc</h4>
                    <p class="text-red-600 text-sm mb-2">Head of Basic Sciences</p>
                    <p class="text-sm text-gray-500 mb-3">MSc</p>
                    <p class="text-gray-600 text-sm">Leading foundational sciences education for health programs.</p>
                    <div class="mt-4 flex justify-center gap-3">
                        <a href="mailto:basicsciences@sjogu.edu" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="tel:+265123456789" class="text-red-600 hover:text-red-700 transition">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection