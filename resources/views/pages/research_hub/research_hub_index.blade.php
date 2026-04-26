@extends('layouts.app')

@section('title', 'Research Hub - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-flask text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Research <span class="text-yellow-300">Hub</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Advancing healthcare knowledge through innovative research and collaboration
        </p>
    </div>
</section>

<!-- Research Stats Highlights -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Impact</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Our research initiatives are making a difference in healthcare delivery and policy
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-file-alt text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">45+</p>
                <p class="text-gray-500 text-sm">Research Papers</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">12+</p>
                <p class="text-gray-500 text-sm">Active Projects</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">8+</p>
                <p class="text-gray-500 text-sm">Collaborations</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-red-600 text-xl"></i>
                </div>
                <p class="text-2xl md:text-3xl font-bold text-gray-800">5+</p>
                <p class="text-gray-500 text-sm">Grants Funded</p>
            </div>
        </div>
    </div>
</section>

<!-- Research Areas by Department -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Departments</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Key research areas across our academic departments
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-stethoscope text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Clinical Medicine</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Infectious diseases, internal medicine, surgical innovations, and patient care optimization
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Malaria Research</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">HIV/AIDS</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Tuberculosis</span>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-hand-holding-heart text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Nursing & Midwifery</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Maternal health, neonatal care, nursing education, and community health nursing
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Maternal Health</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Child Care</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Nursing Education</span>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-brain text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Psycho-Social Counselling</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Mental health, trauma counselling, substance abuse, and community psychosocial support
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Mental Health</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Trauma Care</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Substance Abuse</span>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition border-l-4 border-red-600">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-chart-bar text-red-600 text-lg"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Public Health</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Epidemiology, health promotion, disease prevention, and health policy research
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Epidemiology</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Health Policy</span>
                    <span class="bg-red-50 text-red-600 text-xs px-2 py-1 rounded">Disease Prevention</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Research - Coming Soon -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Featured <span class="text-red-600">Research</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Ongoing and completed research projects making an impact
            </p>
        </div>

        <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-lg p-8 text-center max-w-2xl mx-auto">
            <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-microscope text-yellow-600 text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Research Content Coming Soon</h3>
            <p class="text-gray-600 mb-4">
                Our research department is currently compiling detailed information about ongoing and completed research projects.
            </p>
            <div class="inline-flex items-center gap-2 text-yellow-700 text-sm">
                <i class="fas fa-clock"></i>
                <span>Expected launch: 2026</span>
            </div>
        </div>
    </div>
</section>

<!-- Publications - Coming Soon -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Recent <span class="text-red-600">Publications</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Latest research papers and publications from our faculty
            </p>
        </div>

        <div class="bg-blue-50 border-l-4 border-blue-500 rounded-lg p-8 text-center max-w-2xl mx-auto">
            <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-file-alt text-blue-600 text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Publications Database Coming Soon</h3>
            <p class="text-gray-600 mb-4">
                Our publications database is being populated with research papers, journals, and conference proceedings.
            </p>
            <div class="inline-flex items-center gap-2 text-blue-700 text-sm">
                <i class="fas fa-database"></i>
                <span>Being updated regularly</span>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="#" class="inline-block border-2 border-red-600 text-red-600 px-6 py-2 rounded-lg font-semibold hover:bg-red-600 hover:text-white transition">
                View All Publications (Coming Soon)
            </a>
        </div>
    </div>
</section>

<!-- Research Partners -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Research <span class="text-red-600">Partners</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Collaborating with leading institutions to advance healthcare research
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center">
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-university text-gray-400 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600">University of Malawi</p>
            </div>
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-globe-africa text-gray-400 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600">WHO Malawi</p>
            </div>
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-heartbeat text-gray-400 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600">Malawi Ministry of Health</p>
            </div>
            <div class="text-center p-4 grayscale hover:grayscale-0 transition">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-chart-line text-gray-400 text-3xl"></i>
                </div>
                <p class="text-sm text-gray-600">CDC Malawi</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 px-4 md:px-16 bg-gradient-to-r from-red-700 to-red-800">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">Interested in Research?</h2>
        <p class="text-red-100 mb-6 max-w-2xl mx-auto">
            Join our research community. Collaborate with our faculty or pursue your own research interests.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="#" class="bg-white text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Contact Research Office
            </a>
            <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white/10 transition">
                View Research Opportunities
            </a>
        </div>
    </div>
</section>
@endsection