@extends('layouts.app')

@section('title', 'Student Life - St John of God University')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-16">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-4">
            <i class="fas fa-users text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Student <span class="text-yellow-300">Life</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-6"></div>
        <p class="text-lg md:text-xl max-w-3xl mx-auto text-red-100">
            Everything you need for a successful and enjoyable university experience
        </p>
    </div>
</section>

<!-- Small Gallery Section -->
<!-- Small Gallery Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Campus <span class="text-red-600">Moments</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                A glimpse into student life at St John of God University
            </p>
        </div>

        <!-- Gallery Grid - All images -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Existing Image 1 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/carausel3.jpg') }}" alt="Campus Life 1" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Existing Image 2 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/campus_life.jpg') }}" alt="Campus Life 2" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Existing Image 3 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/campus_life2.jpg') }}" alt="Campus Life 3" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- Existing Image 4 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/carausel/computer_lab.jpg') }}" alt="Campus Life 4" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- New Image 5 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/students/student_life1.jpg') }}" alt="Student Life 5" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- New Image 6 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/students/student_life2.jpg') }}" alt="Student Life 6" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- New Image 7 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/students/student_life3.jpg') }}" alt="Student Life 7" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- New Image 8 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/students/student_life4.jpg') }}" alt="Student Life 8" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- New Image 9 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/students/student_life5.jpg') }}" alt="Student Life 9" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- New Image 10 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/students/student_life6.jpg') }}" alt="Student Life 10" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
            <!-- New Image 11 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="{{ asset('images/students/student_life7.jpg') }}" alt="Student Life 11" class="w-full h-48 object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <i class="fas fa-search-plus text-white text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Gallery Caption -->
        <div class="text-center mt-6">
            <p class="text-sm text-gray-500">Click on images to view full size • Hover to zoom</p>
        </div>
    </div>
</section>

<!-- Quick Access Section -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Quick <span class="text-red-600">Access</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Essential resources for current students
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <a href="#" class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition border border-gray-100 group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition">
                    <i class="fas fa-user-graduate text-red-600 text-2xl group-hover:text-white transition"></i>
                </div>
                <h3 class="font-bold text-gray-800">Student Portal</h3>
                <p class="text-sm text-gray-500 mt-1">Access your account</p>
            </a>
            <a href="#" class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition border border-gray-100 group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition">
                    <i class="fas fa-calendar-alt text-red-600 text-2xl group-hover:text-white transition"></i>
                </div>
                <h3 class="font-bold text-gray-800">Academic Calendar</h3>
                <p class="text-sm text-gray-500 mt-1">Important dates</p>
            </a>
            <a href="#" class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition border border-gray-100 group">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition">
                    <i class="fas fa-credit-card text-red-600 text-2xl group-hover:text-white transition"></i>
                </div>
                <h3 class="font-bold text-gray-800">Fee Payment</h3>
                <p class="text-sm text-gray-500 mt-1">Pay online</p>
            </a>
        </div>
    </div>
</section>

<!-- Student Services Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Student <span class="text-red-600">Services</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Support services to help you succeed
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-heartbeat text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Health Services</h3>
                <p class="text-gray-600 text-sm">On-campus clinic and counseling services available to all students.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chalkboard-user text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Academic Support</h3>
                <p class="text-gray-600 text-sm">Tutoring, writing center, and academic advising services.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-briefcase text-red-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Career Services</h3>
                <p class="text-gray-600 text-sm">Internship placement, job fairs, and career counseling.</p>
            </div>
        </div>
    </div>
</section>

<!-- Accommodation Section -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('images/carausel/accomodation.jpg') }}" alt="Student Accommodation" class="rounded-xl shadow-lg w-full h-80 object-cover">
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Student <span class="text-red-600">Accommodation</span></h2>
                <div class="w-20 h-1 bg-red-600 rounded-full mb-4"></div>
                <p class="text-gray-600 mb-4">
                    Comfortable and affordable on-campus housing with modern amenities. Safe and conducive environment for learning.
                </p>
                <ul class="space-y-2 text-gray-600 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Single & Shared Rooms</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> 24/7 Security</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Common Areas & Study Rooms</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Affordable Rates</li>
                </ul>
                <button onclick="openAccommodationModal()" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                    Apply for Accommodation <i class="fas fa-arrow-right text-sm"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Accommodation Application Modal -->
<div id="accommodationModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-md w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-t-2xl px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <i class="fas fa-home text-xl"></i>
                <h3 class="text-xl font-bold">Accommodation Application</h3>
            </div>
            <button onclick="closeAccommodationModal()" class="text-white hover:text-gray-200 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
        
        <div class="p-6">
            <form id="accommodationForm" onsubmit="submitAccommodation(event)">
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input type="text" id="acc_fullname" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 transition"
                           placeholder="Enter your full name">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Student Registration Number</label>
                    <input type="text" id="acc_reg_number" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 transition"
                           placeholder="e.g., SJOGU/2024/001">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="acc_email" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 transition"
                           placeholder="your.email@sjogu.edu">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" id="acc_phone" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 transition"
                           placeholder="+265 999 123 456">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Program of Study</label>
                    <select id="acc_program" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 transition">
                        <option value="">Select your program</option>
                        <option>Diploma in Clinical Medicine</option>
                        <option>BSc in Nursing and Midwifery</option>
                        <option>BSc in Clinical Medicine (Mental Health)</option>
                        <option>BSc in Mental Health Psychiatric Nursing</option>
                        <option>BSc in Psychotherapy (Psychosocial Counselling)</option>
                        <option>Bachelor of Science in Public Health</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Year of Study</label>
                    <select id="acc_year" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 transition">
                        <option value="">Select year</option>
                        <option>Year 1</option>
                        <option>Year 2</option>
                        <option>Year 3</option>
                        <option>Year 4</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Preferred Room Type</label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="flex items-center gap-2 p-2 border border-gray-200 rounded-lg cursor-pointer hover:border-red-500 transition">
                            <input type="radio" name="room_type" value="Single Room" required class="text-red-600">
                            <span class="text-sm">Single Room</span>
                        </label>
                        <label class="flex items-center gap-2 p-2 border border-gray-200 rounded-lg cursor-pointer hover:border-red-500 transition">
                            <input type="radio" name="room_type" value="Shared Room (2 persons)" class="text-red-600">
                            <span class="text-sm">Shared Room (2 persons)</span>
                        </label>
                        <label class="flex items-center gap-2 p-2 border border-gray-200 rounded-lg cursor-pointer hover:border-red-500 transition">
                            <input type="radio" name="room_type" value="Shared Room (4 persons)" class="text-red-600">
                            <span class="text-sm">Shared Room (4 persons)</span>
                        </label>
                        <label class="flex items-center gap-2 p-2 border border-gray-200 rounded-lg cursor-pointer hover:border-red-500 transition">
                            <input type="radio" name="room_type" value="Special Needs" class="text-red-600">
                            <span class="text-sm">Special Needs</span>
                        </label>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Special Requirements (Optional)</label>
                    <textarea id="acc_requirements" rows="2" 
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 transition"
                              placeholder="Any medical or special accommodation requirements..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                    Submit Application
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Success Modal for Accommodation -->
<div id="accommodationSuccessModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 text-center">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-check-circle text-3xl text-green-600"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800 mb-2">Application Submitted!</h3>
        <p class="text-gray-600 mb-4">Your accommodation application has been received successfully.</p>
        <div class="bg-gray-50 rounded-lg p-3 mb-4 text-left">
            <p class="text-sm text-gray-700">A confirmation email has been sent to your registered email address. Our accommodation office will contact you within 3-5 business days.</p>
        </div>
        <button onclick="closeAccommodationSuccessModal()" class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">
            Close
        </button>
    </div>
</div>

<script>
    function openAccommodationModal() {
        document.getElementById('accommodationModal').classList.remove('hidden');
        document.getElementById('accommodationModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
    
    function closeAccommodationModal() {
        document.getElementById('accommodationModal').classList.add('hidden');
        document.getElementById('accommodationModal').classList.remove('flex');
        document.body.style.overflow = 'auto';
    }
    
    function closeAccommodationSuccessModal() {
        document.getElementById('accommodationSuccessModal').classList.add('hidden');
        document.getElementById('accommodationSuccessModal').classList.remove('flex');
        document.body.style.overflow = 'auto';
    }
    
    function submitAccommodation(event) {
        event.preventDefault();
        
        const fullname = document.getElementById('acc_fullname').value;
        const regNumber = document.getElementById('acc_reg_number').value;
        const program = document.getElementById('acc_program').value;
        const year = document.getElementById('acc_year').value;
        const roomType = document.querySelector('input[name="room_type"]:checked')?.value;
        
        if (!fullname || !regNumber || !program || !year || !roomType) {
            alert('Please fill in all required fields.');
            return;
        }
        
        closeAccommodationModal();
        
        document.getElementById('accommodationSuccessModal').classList.remove('hidden');
        document.getElementById('accommodationSuccessModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
        
        document.getElementById('accommodationForm').reset();
    }
    
    window.addEventListener('click', function(e) {
        const modal = document.getElementById('accommodationModal');
        const successModal = document.getElementById('accommodationSuccessModal');
        if (e.target === modal) {
            closeAccommodationModal();
        }
        if (e.target === successModal) {
            closeAccommodationSuccessModal();
        }
    });
</script>

<!-- Student Council Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Student <span class="text-red-600">Council</span></h2>
                <div class="w-20 h-1 bg-red-600 rounded-full mb-4"></div>
                <p class="text-gray-600 mb-4">
                    Your voice matters! The Student Council represents student interests and organizes campus activities.
                </p>
                <ul class="space-y-2 text-gray-600 mb-6">
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Student Representatives</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Monthly Meetings</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Event Planning</li>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-green-500"></i> Student Welfare</li>
                </ul>
                <a href="#" class="inline-flex items-center gap-2 bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                    Meet Your Representatives <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/carausel/counsel.jpg') }}" alt="Student Council" class="rounded-xl shadow-lg w-full h-80 object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Activities & Clubs Section -->
<section class="py-16 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Activities & <span class="text-red-600">Clubs</span></h2>
            <div class="w-20 h-1 bg-red-600 mx-auto rounded-full mb-4"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Explore campus life beyond the classroom
            </p>
        </div>

        <div class="grid md:grid-cols-5 gap-6">
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-futbol text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800">Sports</h3>
                <p class="text-sm text-gray-500">Football, basketball, volleyball, athletics</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-music text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800">Music & Arts</h3>
                <p class="text-sm text-gray-500">Choir, drama, dance, traditional music</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-handshake text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800">Volunteer Programs</h3>
                <p class="text-sm text-gray-500">Community outreach, health camps</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-heart text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800">Psychosocial Support</h3>
                <p class="text-sm text-gray-500">Counseling, peer support, wellness programs</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center hover:shadow-lg transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-church text-red-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800">Chaplaincy</h3>
                <p class="text-sm text-gray-500">Spiritual support and guidance</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 px-4 md:px-16 bg-white">
    <div class="container mx-auto max-w-2xl text-center">
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8 text-white">
            <i class="fas fa-headset text-4xl mb-4"></i>
            <h2 class="text-2xl font-bold mb-2">Need Help?</h2>
            <p class="text-red-100 mb-4">Contact Student Affairs Office</p>
            <div class="space-y-2">
                <p><i class="fas fa-phone-alt mr-2"></i> +265 991 887 119</p>
                <p><i class="fas fa-envelope mr-2"></i> collegehs@sjog.mw</p>
                <p><i class="fas fa-clock mr-2"></i> Monday - Friday, 8:00 AM - 5:00 PM</p>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Script for Gallery -->
<script>
    // Simple lightbox functionality for gallery images
    document.querySelectorAll('.group.relative.overflow-hidden.rounded-lg').forEach(img => {
        img.addEventListener('click', function() {
            const imgSrc = this.querySelector('img').src;
            const modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0,0,0,0.9)';
            modal.style.zIndex = '9999';
            modal.style.display = 'flex';
            modal.style.alignItems = 'center';
            modal.style.justifyContent = 'center';
            modal.style.cursor = 'pointer';
            modal.innerHTML = `
                <img src="${imgSrc}" style="max-width: 90%; max-height: 90%; object-fit: contain;">
                <button style="position: absolute; top: 20px; right: 20px; color: white; font-size: 30px; background: none; border: none; cursor: pointer;">&times;</button>
            `;
            modal.addEventListener('click', function(e) {
                if (e.target === modal || e.target.tagName === 'BUTTON') {
                    modal.remove();
                }
            });
            document.body.appendChild(modal);
        });
    });
</script>
@endsection