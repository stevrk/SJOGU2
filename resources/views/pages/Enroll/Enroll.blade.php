@extends('layouts.app')

@section('title', 'Application Process - St John of God University')

@section('content')
<style>
    /* Auth Forms */
    .auth-form {
        display: none !important;
    }

    .auth-form.active {
        display: block !important;
    }
    
    /* Multi-step form styles */
    .step {
        display: none;
    }
    .step.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .step-progress {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
        position: relative;
    }
    .step-progress::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
        height: 2px;
        background: #e5e7eb;
        z-index: 0;
    }
    .progress-step {
        flex: 1;
        text-align: center;
        position: relative;
        z-index: 1;
        cursor: pointer;
    }
    .progress-step .step-number {
        width: 40px;
        height: 40px;
        background: #e5e7eb;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 8px;
        font-weight: bold;
        color: #6b7280;
        transition: all 0.3s;
    }
    .progress-step.active .step-number {
        background: #dc2626;
        color: white;
        box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.3);
    }
    .progress-step.completed .step-number {
        background: #10b981;
        color: white;
    }
    .progress-step.completed .step-number::after {
        content: "✓";
    }
    .step-title {
        font-size: 12px;
        color: #6b7280;
    }
    .progress-step.active .step-title {
        color: #dc2626;
        font-weight: 600;
    }
    .form-container {
        max-width: 800px;
        margin: 0 auto;
    }
    
    /* Toggle Switch for Login/Register */
    .toggle-option {
        transition: all 0.3s ease;
    }

    .toggle-option.active {
        background-color: #dc2626 !important;
        color: white !important;
    }

    .toggle-option:not(.active) {
        background-color: transparent !important;
        color: #374151 !important;
    }

    .toggle-option:not(.active):hover {
        background-color: #fee2e2 !important;
        color: #dc2626 !important;
    }
    
    /* Auto-save indicator */
    .auto-save-indicator {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #10b981;
        color: white;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 12px;
        z-index: 100;
        animation: slideIn 0.3s ease;
        display: none;
        align-items: center;
        gap: 8px;
    }
    .auto-save-indicator.show {
        display: flex;
    }
    @keyframes slideIn {
        from { transform: translateX(100px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    /* Logout button styles */
    .logout-btn {
        transition: all 0.3s ease;
    }
    .logout-btn:hover {
        background-color: #dc2626 !important;
        transform: translateY(-2px);
    }
</style>

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-12">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Application <span class="text-yellow-300">Process</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-4"></div>
        <p class="text-lg max-w-2xl mx-auto text-red-100">Complete the steps below to submit your application</p>
    </div>
</section>

<!-- Progress Steps -->
<section class="py-8 px-4 md:px-16 bg-gray-50 border-b">
    <div class="container mx-auto max-w-4xl">
        <div class="step-progress">
            <div class="progress-step" data-step="1">
                <div class="step-number">1</div>
                <div class="step-title">Register/Login</div>
            </div>
            <div class="progress-step" data-step="2">
                <div class="step-number">2</div>
                <div class="step-title">Personal Details</div>
            </div>
            <div class="progress-step" data-step="3">
                <div class="step-number">3</div>
                <div class="step-title">Education & Documents</div>
            </div>
            <div class="progress-step" data-step="4">
                <div class="step-number">4</div>
                <div class="step-title">Review & Submit</div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 px-4 md:px-16 bg-gray-50 min-h-[500px]">
    <div class="container mx-auto form-container">
        <!-- Step 1: Registration/Login -->
        <div id="step1" class="step active">
            <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 max-w-md mx-auto">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 md:w-20 md:h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-user-lock text-red-600 text-xl md:text-2xl"></i>
                    </div>
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">Begin Your Application</h2>
                    <p class="text-gray-500 text-xs md:text-sm mt-2">Please register or login to continue with your application</p>
                </div>

                <!-- Toggle Switch -->
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-0 bg-gray-100 rounded-xl sm:rounded-full p-1 mb-6">
                    <div class="toggle-option flex-1 text-center py-2.5 sm:py-2 px-3 sm:px-4 rounded-lg sm:rounded-full cursor-pointer transition-all duration-300 font-medium text-xs sm:text-sm active bg-red-600 text-white" data-auth="register">
                        <i class="fas fa-user-plus mr-1 sm:mr-2 text-xs sm:text-sm"></i>
                        <span>Register</span>
                    </div>
                    <div class="toggle-option flex-1 text-center py-2.5 sm:py-2 px-3 sm:px-4 rounded-lg sm:rounded-full cursor-pointer transition-all duration-300 font-medium text-xs sm:text-sm bg-transparent text-gray-700 hover:bg-red-50" data-auth="login">
                        <i class="fas fa-sign-in-alt mr-1 sm:mr-2 text-xs sm:text-sm"></i>
                        <span>Login</span>
                    </div>
                </div>

                <!-- Registration Form -->
                <div id="registerForm" class="auth-form active" style="display: block;">
                    <form onsubmit="handleRegistration(event)">
                        <div class="mb-4">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="reg_fullname" required 
                                   class="w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 text-sm">
                        </div>
                        <div class="mb-4">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="reg_email" required 
                                   class="w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 text-sm">
                            <p class="text-xs text-gray-500 mt-1">This will be your username for login</p>
                        </div>
                        <div class="mb-4">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                            <input type="tel" id="reg_phone" required 
                                   class="w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 text-sm">
                        </div>
                        <div class="mb-4">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Create Password *</label>
                            <input type="password" id="reg_password" required 
                                   class="w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 text-sm">
                            <p class="text-xs text-gray-500 mt-1">Minimum 6 characters</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Confirm Password *</label>
                            <input type="password" id="reg_password_confirm" required 
                                   class="w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 text-sm">
                        </div>
                        <button type="submit" class="w-full bg-red-600 text-white py-2.5 sm:py-3 rounded-lg font-semibold hover:bg-red-700 transition text-sm">
                            Register & Continue
                        </button>
                    </form>
                </div>

                <!-- Login Form - Updated to accept Email or Phone -->
                <div id="loginForm" class="auth-form" style="display: none;">
                    <form onsubmit="handleLogin(event)">
                        <div class="mb-4">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Email or Phone Number *</label>
                            <input type="text" id="login_identifier" required 
                                   class="w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 text-sm"
                                   placeholder="Enter your email or phone number">
                            <p class="text-xs text-gray-500 mt-1">Use the email or phone number you registered with</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-700 mb-2">Password *</label>
                            <input type="password" id="login_password" required 
                                   class="w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 text-sm">
                        </div>
                        <button type="submit" class="w-full bg-red-600 text-white py-2.5 sm:py-3 rounded-lg font-semibold hover:bg-red-700 transition text-sm">
                            Login & Continue
                        </button>
                    </form>
                  
                </div>

                <!-- Success Message after login/register -->
                <div id="authSuccessMessage" class="hidden mt-6 p-3 sm:p-4 bg-green-50 border border-green-200 rounded-lg text-center">
                    <i class="fas fa-check-circle text-green-500 text-lg sm:text-xl mb-2"></i>
                    <p class="text-green-700 font-semibold text-sm sm:text-base" id="authSuccessText"></p>
                    <p class="text-green-600 text-xs sm:text-sm mt-1">Redirecting to application form...</p>
                </div>
            </div>
        </div>

        <!-- Step 2: Personal Details -->
       
<div id="step2" class="step">
    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
        <div class="border-b border-gray-200 pb-4 mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Personal Details</h2>
            <p class="text-gray-500 text-sm">Please complete all sections carefully. All fields marked with * are required.</p>
        </div>

        <form id="personalDetailsForm">
            <!-- Course Selection with All 8 Programs -->
            <div class="mb-6 bg-red-50 p-4 rounded-lg">
                <label class="block text-sm font-semibold text-gray-700 mb-3">
                    <i class="fas fa-graduation-cap text-red-600 mr-1"></i> Course Applying For *
                </label>
    
                <!-- Department: Clinical Medicine - 3 Programs + Public Health -->
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-stethoscope text-red-600 text-sm"></i> Department of Clinical Medicine
                    </h4>
                    <div class="space-y-2 ml-2 sm:ml-4">
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="Diploma in Clinical Medicine (Generic)" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">Diploma in Clinical Medicine</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Generic | 3 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="Diploma in Clinical Medicine (Upgrading)" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">Diploma in Clinical Medicine (Upgrading)</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Upgrading | 2 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="BSc in Clinical Medicine (Mental Health) - Upgrading" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">BSc in Clinical Medicine (Mental Health)</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Upgrading | 2 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="Bachelor of Science in Public Health" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">Bachelor of Science in Public Health</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Generic | 4 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Department: Nursing and Midwifery - 2 Programs -->
                <div class="mb-4">
                    <h4 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-hand-holding-heart text-red-600 text-sm"></i> Department of Nursing and Midwifery
                    </h4>
                    <div class="space-y-2 ml-2 sm:ml-4">
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="BSc in Nursing and Midwifery (Generic)" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">BSc in Nursing and Midwifery</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Generic | 4 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="BSc in Mental Health Psychiatric Nursing - Upgrading" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">BSc in Mental Health Psychiatric Nursing</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Upgrading | 2 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Department: Psycho-Social Counselling - 2 Programs -->
                <div class="mb-2">
                    <h4 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
                        <i class="fas fa-brain text-red-600 text-sm"></i> Department of Psycho-Social Counselling
                    </h4>
                    <div class="space-y-2 ml-2 sm:ml-4">
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="BSc in Psychotherapy (Psychosocial Counselling) - Generic" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">BSc in Psychotherapy (Psychosocial Counselling)</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Generic | 4 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                        <label class="flex flex-col sm:flex-row sm:items-center gap-2 p-3 bg-white rounded border border-gray-200 cursor-pointer hover:border-red-500 transition">
                            <div class="flex items-center gap-2">
                                <input type="radio" name="course" value="BSc in Psychotherapy - Upgrading" class="course-radio text-red-600 flex-shrink-0 auto-save-field">
                                <div>
                                    <span class="text-sm font-medium">BSc in Psychotherapy (Upgrading)</span>
                                    <span class="text-xs text-gray-500 block sm:inline sm:ml-2">(Upgrading | 2 Years | Full-time)</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                
                <p class="text-xs text-gray-500 mt-3 italic">Total of 8 programs across departments</p>
            </div>

            <!-- Personal Information -->
            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Title *</label>
                    <select name="title" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                        <option value="">Select</option>
                        <option>Mr</option>
                        <option>Mrs</option>
                        <option>Miss</option>
                        <option>Sr</option>
                        <option>Br</option>
                        <option>Dr</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Surname *</label>
                    <input type="text" name="surname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">First Names *</label>
                    <input type="text" name="first_names" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth *</label>
                    <input type="date" name="dob" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Gender *</label>
                    <select name="gender" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                        <option value="">Select</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Marital Status *</label>
                    <select name="marital_status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                        <option value="">Select</option>
                        <option>Single</option>
                        <option>Married</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Citizenship *</label>
                    <input type="text" name="citizenship" value="Malawian" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">National ID Number *</label>
                    <input type="text" name="national_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                    <p class="text-xs text-gray-500 mt-1">For non-Malawians, provide passport number</p>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Cell Phone Number *</label>
                    <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Permanent Address *</label>
                    <textarea name="permanent_address" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required></textarea>
                </div>
            </div>

            <!-- First Application Question -->
            <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                <label class="block text-sm font-semibold text-gray-700 mb-3">Is this your first application to SJOGU? *</label>
                <div class="flex gap-4">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="first_application" value="Yes" class="first-app-radio text-red-600 auto-save-field" required> Yes
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="first_application" value="No" class="first-app-radio text-red-600 auto-save-field"> No
                    </label>
                </div>
                <div id="previous_application_reason" class="mt-3 hidden">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">If No, indicate why you were not admitted during the first time</label>
                    <textarea name="previous_reason" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="Please explain reason for not being admitted previously..."></textarea>
                </div>
            </div>

            <!-- Next of Kin / Guardian -->
            <div class="mb-6 pt-4 border-t">
                <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <i class="fas fa-users text-red-600"></i> Next of Kin / Guardian
                </h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                        <input type="text" name="next_of_kin_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Relationship *</label>
                        <input type="text" name="next_of_kin_relationship" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" name="next_of_kin_phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" name="next_of_kin_email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Physical Address *</label>
                        <textarea name="next_of_kin_address" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required></textarea>
                    </div>
                </div>
            </div>

            <!-- How Did You Learn About SJOGU -->
            <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                <label class="block text-sm font-semibold text-gray-700 mb-3">How did you learn about SJOGU and this programme?</label>
                <div class="grid md:grid-cols-2 gap-3">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="heard_from[]" value="Newspaper" class="text-red-600 auto-save-field"> Newspaper
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="heard_from[]" value="Facebook" class="text-red-600 auto-save-field"> Facebook
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="heard_from[]" value="TV" class="text-red-600 auto-save-field"> TV
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="heard_from[]" value="Word of Mouth" class="text-red-600 auto-save-field"> Word of Mouth
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="heard_from[]" value="Radio" class="text-red-600 auto-save-field"> Radio
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="heard_from[]" value="Friend/Relative" class="text-red-600 auto-save-field"> Friend/Relative
                    </label>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 mt-6 pt-4 border-t">
                <div class="text-center md:text-left w-full md:w-auto">
                    <p class="text-xs text-green-600 mt-2 flex items-center justify-center md:justify-start gap-1">
                        <i class="fas fa-save"></i> Auto-saving enabled
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                    <button type="button" class="prev-step bg-gray-300 text-gray-700 px-4 sm:px-6 py-2 rounded-lg font-semibold hover:bg-gray-400 transition flex items-center justify-center gap-2 w-full sm:w-auto order-2 sm:order-1">
                        <i class="fas fa-arrow-left mr-2"></i> Previous
                    </button>
                    <button type="button" class="next-step bg-red-600 text-white px-4 sm:px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2 w-full sm:w-auto order-1 sm:order-2">
                        Next: Education & Documents <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
       

        <!-- Step 3: Education & Documents -->
       <!-- Step 3: Education & Documents -->
<div id="step3" class="step">
    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
        <div class="border-b border-gray-200 pb-4 mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Education & Documents</h2>
            <p class="text-gray-500 text-sm">Please complete all sections carefully. All fields marked with * can not be left blank.</p>
        </div>

        <form id="educationForm">
            <!-- MSCE/IGCSE Results -->
            <div class="mb-6">
                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <i class="fas fa-chart-line text-red-600"></i> MSCE/IGCSE Results
                </h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">English (Grade)</label>
                        <input type="text" name="msce_english" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Mathematics (Grade)</label>
                        <input type="text" name="msce_math" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Biology (Grade)</label>
                        <input type="text" name="msce_biology" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Physical Science (Grade)</label>
                        <input type="text" name="msce_physical_science" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Physics (Grade)</label>
                        <input type="text" name="msce_physics" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Chemistry (Grade)</label>
                        <input type="text" name="msce_chemistry" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Bible Knowledge (Grade)</label>
                        <input type="text" name="msce_bible" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Social Studies (Grade)</label>
                        <input type="text" name="msce_social_studies" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Agriculture (Grade)</label>
                        <input type="text" name="msce_agriculture" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Chichewa (Grade)</label>
                        <input type="text" name="msce_chichewa" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Geography (Grade)</label>
                        <input type="text" name="msce_geography" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="e.g., A, B, C">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Other Subject (Specify)</label>
                        <div class="flex gap-2">
                            <input type="text" name="msce_other_subject" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="Subject name">
                            <input type="text" name="msce_other_grade" class="w-24 px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" placeholder="Grade">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post-Secondary Institutions -->
            <div class="mb-6 pt-4 border-t">
                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <i class="fas fa-university text-red-600"></i> Post-Secondary Institutions
                </h3>
                <p class="text-sm text-gray-500 mb-3">Please list all secondary and post-secondary institutions attended</p>
                <div id="institutions-container">
                    <div class="institution-entry grid md:grid-cols-3 gap-3 mb-3">
                        <input type="text" name="institution_name[]" placeholder="Name of School or College" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                        <input type="text" name="institution_years[]" placeholder="Years Attended" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                        <input type="text" name="institution_qualification[]" placeholder="Certificate/Diploma/Degree Obtained" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                    </div>
                </div>
                <button type="button" onclick="addInstitution()" class="text-red-600 text-sm hover:text-red-700 mt-2 flex items-center gap-1">
                    <i class="fas fa-plus-circle"></i> Add Another Institution
                </button>
            </div>

            <!-- Sponsorship Details -->
            <div class="mb-6 pt-4 border-t">
                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <i class="fas fa-hand-holding-usd text-red-600"></i> Sponsorship Details
                </h3>
                <div class="mb-3">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">How will your study be sponsored? *</label>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="sponsorship_type" value="Self-Sponsored" class="sponsorship-radio text-red-600 auto-save-field" required> Self-Sponsored
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="sponsorship_type" value="Sponsor" class="sponsorship-radio text-red-600 auto-save-field"> Have a Sponsor
                        </label>
                    </div>
                </div>
                <div id="sponsor_details" class="hidden grid md:grid-cols-2 gap-4 mt-3">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Sponsor Name</label>
                        <input type="text" name="sponsor_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Sponsor Phone Number</label>
                        <input type="tel" name="sponsor_phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Sponsor Address</label>
                        <textarea name="sponsor_address" rows="2" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Sponsor Email</label>
                        <input type="email" name="sponsor_email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                    </div>
                </div>
            </div>

            <!-- Three Referees -->
            <div class="mb-6 pt-4 border-t">
                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <i class="fas fa-users text-red-600"></i> Three Referees
                </h3>
                <p class="text-sm text-gray-500 mb-3">Give three traceable referees - one should preferably be from your Employer if working</p>
                <div id="referees-container">
                    <div class="referee-entry grid md:grid-cols-2 gap-3 mb-3">
                        <input type="text" name="referee_name[]" placeholder="Full Name of Referee" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                        <input type="text" name="referee_contact[]" placeholder="Contact Address / Phone Number / Email" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
                    </div>
                </div>
                <p class="text-xs text-gray-400 mt-2">At least 3 referees required. Add more if needed.</p>
            </div>

            <!-- Document Uploads -->
            <div class="mb-6 pt-4 border-t">
                <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <i class="fas fa-file-upload text-red-600"></i> Required Documents
                </h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">1. Certified copies of all secondary or post-secondary Certificates/Diplomas/Degree *</label>
                        <input type="file" name="doc_certificates[]" multiple accept=".pdf,.jpg,.png" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500">
                        <p class="text-xs text-gray-500 mt-1">Upload all certificates (PDF, JPG, PNG - Max 5MB each)</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">2. Certified copy of registration certificate with regulatory body (NMCM and Medical Council if applicable)</label>
                        <input type="file" name="doc_registration" accept=".pdf,.jpg,.png" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">3. Three letters of recommendation (from current or former employer)</label>
                        <input type="file" name="doc_recommendations[]" multiple accept=".pdf" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500">
                        <p class="text-xs text-gray-500 mt-1">Upload three separate recommendation letters (PDF only)</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">4. Two passport sized photographs</label>
                        <input type="file" name="doc_photos[]" multiple accept=".jpg,.png" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500">
                        <p class="text-xs text-gray-500 mt-1">Upload two passport photos (JPG, PNG)</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">5. Photocopy of National ID (for Malawians) or Passport (for international students) *</label>
                        <input type="file" name="doc_id" accept=".pdf,.jpg,.png" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">6. Proof of ability to pay fees (letter from parent/guardian/sponsor)</label>
                        <input type="file" name="doc_sponsorship" accept=".pdf,.jpg,.png" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">7. Government employees: Letter of approval to pursue the course</label>
                        <input type="file" name="doc_approval" accept=".pdf" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">8. Authentic bank deposit slip (Application fee MK 12,000)</label>
                        <input type="file" name="doc_deposit_slip" accept=".pdf,.jpg,.png" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500">
                        <p class="text-xs text-gray-500 mt-1">Upload proof of payment for the application fee</p>
                    </div>
                </div>
            </div>

            <!-- Declaration -->
            <div class="mb-6 pt-4 border-t">
                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                    <i class="fas fa-check-circle text-red-600"></i> Declaration
                </h3>
                <div class="bg-gray-50 rounded-lg p-4">
                    <label class="flex items-start gap-2 cursor-pointer mb-4">
                        <input type="checkbox" name="declaration" required class="mt-1 w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                        <span class="text-sm text-gray-700">
                            I hereby certify that the information given in this application form is correct and complete to the best of my knowledge, and hereby give my permission to the admissions committee to obtain any verification deemed necessary to process my application. I also certify that all attached documents become the property of the College and shall not be returned to me.
                        </span>
                    </label>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Signature (Type Full Name) *</label>
                            <input type="text" name="signature" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Date *</label>
                            <input type="date" name="declaration_date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 mt-6 pt-4 border-t">
                <div class="text-center md:text-left w-full md:w-auto">
                    <p class="text-xs text-green-600 mt-2 flex items-center justify-center md:justify-start gap-1">
                        <i class="fas fa-save"></i> Auto-saving enabled
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                    <button type="button" class="prev-step bg-gray-300 text-gray-700 px-4 sm:px-6 py-2 rounded-lg font-semibold hover:bg-gray-400 transition flex items-center justify-center gap-2 w-full sm:w-auto order-2 sm:order-1">
                        <i class="fas fa-arrow-left mr-2"></i> Previous
                    </button>
                    <button type="button" class="next-step bg-red-600 text-white px-4 sm:px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2 w-full sm:w-auto order-1 sm:order-2">
                        Next: Review & Submit <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

        <!-- Step 4: Review & Submit -->
        <!-- Step 4: Review & Submit -->
<div id="step4" class="step">
    <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
        <div class="border-b border-gray-200 pb-4 mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Review & Submit</h2>
            <p class="text-gray-500 text-sm">Please review your application before submitting</p>
        </div>

        <!-- Review Content -->
        <div id="reviewContent" class="mb-6 bg-gray-50 rounded-lg p-4 max-h-96 overflow-y-auto">
            <div class="text-center text-gray-500 py-8">
                <i class="fas fa-spinner fa-spin text-2xl mb-2"></i>
                <p>Loading your application data...</p>
            </div>
        </div>

        <!-- Final Declaration -->
        <div class="mb-6 p-4 bg-red-50 rounded-lg border border-red-200">
            <label class="flex items-start gap-2 cursor-pointer">
                <input type="checkbox" id="final_declaration" class="mt-1 w-4 h-4 text-red-600 border-gray-300 rounded focus:ring-red-500">
                <span class="text-sm text-gray-700">
                    I confirm that all information provided in this application is accurate and complete. I understand that providing false information may lead to disqualification or dismissal from the university.
                </span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 mt-6 pt-4 border-t">
            <div class="text-center md:text-left w-full md:w-auto">
                <p class="text-xs text-gray-500">Please ensure all information is correct before submitting</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                <button type="button" class="prev-step bg-gray-300 text-gray-700 px-4 sm:px-6 py-2 rounded-lg font-semibold hover:bg-gray-400 transition flex items-center justify-center gap-2 w-full sm:w-auto">
                    <i class="fas fa-arrow-left mr-2"></i> Previous
                </button>
                <button type="button" id="submitApplicationBtn" class="bg-green-600 text-white px-6 sm:px-8 py-2 rounded-lg font-semibold hover:bg-green-700 transition flex items-center justify-center gap-2 w-full sm:w-auto">
                    <i class="fas fa-paper-plane"></i> Submit Application
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl max-w-md w-full p-8 text-center transform transition-all duration-300 scale-95">
        <!-- Checkmark Animation -->
        <div class="checkmark-wrapper mb-4">
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
            </svg>
        </div>
        
        <h3 class="text-2xl font-bold text-gray-800 mb-2">Application Submitted!</h3>
        <p class="text-gray-600 mb-4">Your application has been received successfully.</p>
        
        <div class="bg-green-50 rounded-lg p-4 mb-4 text-left">
            <p class="text-sm text-green-800 mb-2 font-semibold">
                <i class="fas fa-check-circle text-green-600 mr-2"></i> What happens next?
            </p>
            <ul class="text-sm text-green-700 space-y-2">
                <li class="flex items-start gap-2">
                    <i class="fas fa-envelope mt-0.5"></i>
                    <span>You will receive a confirmation email within 24 hours</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-clock mt-0.5"></i>
                    <span>Your application will be reviewed within 7-14 business days</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-chart-line mt-0.5"></i>
                    <span>You can track your application status on your dashboard</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-phone mt-0.5"></i>
                    <span>You will be contacted for an interview if shortlisted</span>
                </li>
            </ul>
        </div>
        
        <div class="bg-yellow-50 rounded-lg p-3 mb-4 text-left">
            <p class="text-xs text-yellow-800">
                <i class="fas fa-info-circle mr-1"></i>
                <strong>Application ID:</strong> <span id="applicationIdDisplay">SJOGU-XXXXX</span>
            </p>
            <p class="text-xs text-yellow-700 mt-1">
                Please save your Application ID for future reference
            </p>
        </div>
        
        <div class="flex flex-col gap-3">
            <a href="#" onclick="closeSuccessModalAndReset()" class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition flex items-center justify-center gap-2">
                <i class="fas fa-check-circle"></i>
                Done
            </a>
            <button onclick="closeSuccessModal()" class="text-gray-500 hover:text-gray-700 text-sm">
                Close
            </button>
        </div>
    </div>
</div>

<style>
    /* Checkmark Animation Styles */
    .checkmark-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .checkmark {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #4caf50;
        stroke-miterlimit: 10;
        animation: scale 0.3s ease-in-out 0.2s both;
    }
    
    .checkmark__circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        stroke: #4caf50;
        fill: none;
        animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
    }
    
    .checkmark__check {
        transform-origin: 50% 50%;
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.4s forwards;
    }
    
    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes scale {
        0%, 100% {
            transform: none;
        }
        50% {
            transform: scale3d(1.1, 1.1, 1);
        }
    }
    
    /* Modal animation */
    #successModal.flex .scale-95 {
        animation: modalPop 0.3s ease-out forwards;
    }
    
    @keyframes modalPop {
        0% {
            transform: scale(0.95);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>
       
    </div>
</section>

<!-- Logout Button - Moved to visible location -->
<div id="logoutContainer" class="hidden mt-4 mb-8 text-center">
    <button onclick="handleLogout()" class="logout-btn bg-gray-800 text-white px-6 py-2 rounded-lg shadow-md hover:bg-red-600 transition flex items-center justify-center gap-2 mx-auto">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span>
    </button>
    <p class="text-xs text-gray-500 mt-2">Click here to logout and start over</p>
</div>

<!-- Auto-save Indicator -->
<div id="autoSaveIndicator" class="auto-save-indicator">
    <i class="fas fa-save"></i>
    <span>Auto-saving...</span>
</div>

<script>
    let currentStep = 1;
    let isLoggedIn = false;
    let currentUser = null;
    let autoSaveTimeout = null;

    // Auto-save function
    function autoSave() {
        if (!isLoggedIn || !currentUser || currentStep !== 2) return;
        
        const indicator = document.getElementById('autoSaveIndicator');
        indicator.classList.add('show');
        
        if (autoSaveTimeout) clearTimeout(autoSaveTimeout);
        
        autoSaveTimeout = setTimeout(() => {
            saveFormData();
            setTimeout(() => {
                indicator.classList.remove('show');
            }, 1000);
        }, 800);
    }

    // Save form data
    function saveFormData() {
        if (!currentUser || !currentUser.email) return;
        
        const formData = collectFormData();
        localStorage.setItem(`sjogu_personal_details_${currentUser.email}`, JSON.stringify(formData));
        
        const userData = localStorage.getItem(`sjogu_user_${currentUser.email}`);
        if (userData) {
            const user = JSON.parse(userData);
            user.applicationStatus = 'personal_details_in_progress';
            user.applicationData = { ...user.applicationData, personal_details: formData };
            localStorage.setItem(`sjogu_user_${currentUser.email}`, JSON.stringify(user));
        }
    }

    // Collect all form data
    function collectFormData() {
        const selectedCourse = document.querySelector('input[name="course"]:checked');
        
        return {
            course: selectedCourse ? selectedCourse.value : '',
            title: document.querySelector('select[name="title"]')?.value || '',
            surname: document.querySelector('input[name="surname"]')?.value || '',
            first_names: document.querySelector('input[name="first_names"]')?.value || '',
            dob: document.querySelector('input[name="dob"]')?.value || '',
            gender: document.querySelector('select[name="gender"]')?.value || '',
            marital_status: document.querySelector('select[name="marital_status"]')?.value || '',
            citizenship: document.querySelector('input[name="citizenship"]')?.value || '',
            national_id: document.querySelector('input[name="national_id"]')?.value || '',
            phone: document.querySelector('input[name="phone"]')?.value || '',
            email: document.querySelector('input[name="email"]')?.value || '',
            permanent_address: document.querySelector('textarea[name="permanent_address"]')?.value || '',
            first_application: document.querySelector('input[name="first_application"]:checked')?.value || '',
            previous_reason: document.querySelector('textarea[name="previous_reason"]')?.value || '',
            next_of_kin_name: document.querySelector('input[name="next_of_kin_name"]')?.value || '',
            next_of_kin_relationship: document.querySelector('input[name="next_of_kin_relationship"]')?.value || '',
            next_of_kin_phone: document.querySelector('input[name="next_of_kin_phone"]')?.value || '',
            next_of_kin_email: document.querySelector('input[name="next_of_kin_email"]')?.value || '',
            next_of_kin_address: document.querySelector('textarea[name="next_of_kin_address"]')?.value || ''
        };
    }

    // Validate before proceeding to next step
    function validateAndProceed() {
        const selectedCourse = document.querySelector('input[name="course"]:checked');
        if (!selectedCourse) {
            alert('Please select a course');
            return false;
        }
        
        const requiredFields = ['title', 'surname', 'first_names', 'dob', 'gender', 'marital_status', 'citizenship', 'national_id', 'phone', 'email', 'permanent_address', 'first_application', 'next_of_kin_name', 'next_of_kin_relationship', 'next_of_kin_phone', 'next_of_kin_address'];
        
        for (const field of requiredFields) {
            const element = document.querySelector(`[name="${field}"]`);
            if (element && !element.value) {
                alert(`Please fill in the ${field.replace(/_/g, ' ')} field`);
                element.focus();
                return false;
            }
        }
        
        saveFormData();
        return true;
    }

    // Attach auto-save to all form fields
    function attachAutoSave() {
        const fields = document.querySelectorAll('.auto-save-field, input[name="course"], input[name="first_application"]');
        fields.forEach(field => {
            field.removeEventListener('change', autoSave);
            field.removeEventListener('keyup', autoSave);
            field.removeEventListener('input', autoSave);
            
            field.addEventListener('change', autoSave);
            field.addEventListener('keyup', autoSave);
            field.addEventListener('input', autoSave);
        });
    }

    // Check if user is already logged in
    function checkLoginStatus() {
        const savedUser = localStorage.getItem('sjogu_current_user');
        if (savedUser) {
            currentUser = JSON.parse(savedUser);
            isLoggedIn = true;
            showLogoutButton();
            setTimeout(() => {
                goToNextStep();
            }, 1000);
        }
    }

    // Handle Registration
    function handleRegistration(event) {
        event.preventDefault();
        
        const fullname = document.getElementById('reg_fullname').value;
        const email = document.getElementById('reg_email').value;
        const phone = document.getElementById('reg_phone').value;
        const password = document.getElementById('reg_password').value;
        const passwordConfirm = document.getElementById('reg_password_confirm').value;
        
        if (password !== passwordConfirm) {
            alert('Passwords do not match!');
            return;
        }
        
        if (password.length < 6) {
            alert('Password must be at least 6 characters');
            return;
        }
        
        const existingUser = localStorage.getItem(`sjogu_user_${email}`);
        if (existingUser) {
            alert('An account with this email already exists. Please login instead.');
            return;
        }
        
        const user = {
            fullname: fullname,
            email: email,
            phone: phone,
            password: btoa(password),
            registeredAt: new Date().toISOString(),
            applicationStatus: 'draft',
            applicationData: null
        };
        
        localStorage.setItem(`sjogu_user_${email}`, JSON.stringify(user));
        localStorage.setItem('sjogu_current_user', JSON.stringify({
            fullname: fullname,
            email: email,
            phone: phone
        }));
        
        currentUser = { fullname: fullname, email: email, phone: phone };
        isLoggedIn = true;
        
        const successDiv = document.getElementById('authSuccessMessage');
        const successText = document.getElementById('authSuccessText');
        successText.textContent = `Welcome ${fullname}! Registration successful.`;
        successDiv.classList.remove('hidden');
        
        document.getElementById('registerForm').classList.remove('active');
        document.getElementById('loginForm').classList.remove('active');
        
        showLogoutButton();
        
        setTimeout(() => {
            goToNextStep();
            attachAutoSave();
            loadSavedPersonalDetails();
            prefillEmail();
        }, 2000);
    }
    
    // Handle Login - Updated to accept email or phone
    function handleLogin(event) {
        event.preventDefault();
        
        const identifier = document.getElementById('login_identifier').value;
        const password = document.getElementById('login_password').value;
        
        // Search for user by email or phone
        let foundUser = null;
        let foundKey = null;
        
        for (let i = 0; i < localStorage.length; i++) {
            const key = localStorage.key(i);
            if (key && key.startsWith('sjogu_user_')) {
                const userData = localStorage.getItem(key);
                const user = JSON.parse(userData);
                if (user.email === identifier || user.phone === identifier) {
                    foundUser = user;
                    foundKey = key;
                    break;
                }
            }
        }
        
        if (!foundUser) {
            alert('Account not found. Please register first.');
            return;
        }
        
        if (btoa(password) !== foundUser.password) {
            alert('Invalid password. Please try again.');
            return;
        }
        
        currentUser = {
            fullname: foundUser.fullname,
            email: foundUser.email,
            phone: foundUser.phone
        };
        isLoggedIn = true;
        
        localStorage.setItem('sjogu_current_user', JSON.stringify(currentUser));
        
        const successDiv = document.getElementById('authSuccessMessage');
        const successText = document.getElementById('authSuccessText');
        successText.textContent = `Welcome back ${foundUser.fullname}! Login successful.`;
        successDiv.classList.remove('hidden');
        
        document.getElementById('registerForm').classList.remove('active');
        document.getElementById('loginForm').classList.remove('active');
        
        showLogoutButton();
        
        setTimeout(() => {
            goToNextStep();
            attachAutoSave();
            loadSavedPersonalDetails();
            prefillEmail();
        }, 2000);
    }
    
    // Handle Logout
    function handleLogout() {
        localStorage.removeItem('sjogu_current_user');
        isLoggedIn = false;
        currentUser = null;
        
        currentStep = 1;
        document.querySelectorAll('.step').forEach(step => step.classList.remove('active'));
        document.getElementById('step1').classList.add('active');
        updateProgressSteps();
        
        document.getElementById('registerForm').reset();
        document.getElementById('loginForm').reset();
        document.getElementById('registerForm').classList.add('active');
        document.getElementById('loginForm').classList.remove('active');
        document.getElementById('authSuccessMessage').classList.add('hidden');
        
        document.querySelectorAll('.toggle-option').forEach(opt => opt.classList.remove('active'));
        document.querySelector('.toggle-option[data-auth="register"]').classList.add('active');
        
        document.getElementById('logoutContainer').classList.add('hidden');
        
        alert('You have been logged out successfully.');
    }
    
    function showLogoutButton() {
        document.getElementById('logoutContainer').classList.remove('hidden');
    }
    
    // Navigation functions
    function goToNextStep() {
        if (currentStep === 2) {
            if (!validateAndProceed()) return;
        }
        
        if (currentStep < 4) {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            currentStep++;
            document.getElementById(`step${currentStep}`).classList.add('active');
            updateProgressSteps();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
    
    function goToPrevStep() {
        if (currentStep > 1) {
            document.getElementById(`step${currentStep}`).classList.remove('active');
            currentStep--;
            document.getElementById(`step${currentStep}`).classList.add('active');
            updateProgressSteps();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
    
    function updateProgressSteps() {
        document.querySelectorAll('.progress-step').forEach((step, index) => {
            const stepNum = index + 1;
            if (stepNum < currentStep) {
                step.classList.add('completed');
                step.classList.remove('active');
            } else if (stepNum === currentStep) {
                step.classList.add('active');
                step.classList.remove('completed');
            } else {
                step.classList.remove('active', 'completed');
            }
        });
    }
    
    // Show/hide previous application reason
    document.querySelectorAll('input[name="first_application"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const reasonDiv = document.getElementById('previous_application_reason');
            if (this.value === 'No') {
                reasonDiv.classList.remove('hidden');
            } else {
                reasonDiv.classList.add('hidden');
            }
            autoSave();
        });
    });
    
    // Toggle between Login and Register
    document.querySelectorAll('.toggle-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.toggle-option').forEach(opt => {
                opt.classList.remove('active');
            });
            
            this.classList.add('active');
            
            const authType = this.getAttribute('data-auth');
            if (authType === 'register') {
                document.getElementById('registerForm').classList.add('active');
                document.getElementById('loginForm').classList.remove('active');
            } else {
                document.getElementById('registerForm').classList.remove('active');
                document.getElementById('loginForm').classList.add('active');
            }
        });
    });
  
    // Next/Previous button handlers
    document.querySelectorAll('.next-step').forEach(btn => {
        btn.addEventListener('click', goToNextStep);
    });
    
    document.querySelectorAll('.prev-step').forEach(btn => {
        btn.addEventListener('click', goToPrevStep);
    });
    
    // Demo account helper
    function showDemoAccount() {
        document.getElementById('login_identifier').value = 'demo@sjogu.edu';
        document.getElementById('login_password').value = 'demo123';
        alert('Demo credentials filled!\n\nEmail/Phone: demo@sjogu.edu\nPassword: demo123\n\nNote: Create an account first if this is your first time.');
    }
    
    // Progress step click navigation
    document.querySelectorAll('.progress-step').forEach(step => {
        step.addEventListener('click', function() {
            if (!isLoggedIn && this.getAttribute('data-step') != 1) {
                alert('Please register or login first to continue with your application.');
                return;
            }
            const targetStep = parseInt(this.getAttribute('data-step'));
            if (targetStep <= currentStep) {
                document.getElementById(`step${currentStep}`).classList.remove('active');
                currentStep = targetStep;
                document.getElementById(`step${currentStep}`).classList.add('active');
                updateProgressSteps();
                window.scrollTo({ top: 0, behavior: 'smooth' });
                if (targetStep === 2) {
                    setTimeout(() => {
                        attachAutoSave();
                        loadSavedPersonalDetails();
                        prefillEmail();
                    }, 100);
                }
            } else {
                alert('Please complete the current step first.');
            }
        });
    });
    
    // Load saved personal details
    function loadSavedPersonalDetails() {
        if (currentUser && currentUser.email) {
            const savedData = localStorage.getItem(`sjogu_personal_details_${currentUser.email}`);
            if (savedData) {
                const data = JSON.parse(savedData);
                for (const [key, value] of Object.entries(data)) {
                    const element = document.querySelector(`[name="${key}"]`);
                    if (element) {
                        if (element.type === 'radio') {
                            const radio = document.querySelector(`[name="${key}"][value="${value}"]`);
                            if (radio) radio.checked = true;
                        } else {
                            element.value = value;
                        }
                    }
                }
                if (data.first_application === 'No') {
                    document.getElementById('previous_application_reason').classList.remove('hidden');
                }
            }
        }
    }
    
    // Prefill email from registration
    function prefillEmail() {
        if (currentUser && currentUser.email) {
            const emailField = document.querySelector('input[name="email"]');
            if (emailField && !emailField.value) {
                emailField.value = currentUser.email;
            }
        }
    }
    
    // Course selection auto-save
    document.querySelectorAll('input[name="course"]').forEach(radio => {
        radio.addEventListener('change', autoSave);
    });


    //step 3 functions
    // Add institution function
function addInstitution() {
    const container = document.getElementById('institutions-container');
    const newEntry = document.createElement('div');
    newEntry.className = 'institution-entry grid md:grid-cols-3 gap-3 mb-3';
    newEntry.innerHTML = `
        <input type="text" name="institution_name[]" placeholder="Name of School or College" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
        <input type="text" name="institution_years[]" placeholder="Years Attended" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
        <input type="text" name="institution_qualification[]" placeholder="Certificate/Diploma/Degree Obtained" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
    `;
    container.appendChild(newEntry);
    attachAutoSaveToNewFields(newEntry);
}

// Add referee function
function addReferee() {
    const container = document.getElementById('referees-container');
    const newEntry = document.createElement('div');
    newEntry.className = 'referee-entry grid md:grid-cols-2 gap-3 mb-3';
    newEntry.innerHTML = `
        <input type="text" name="referee_name[]" placeholder="Full Name of Referee" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
        <input type="text" name="referee_contact[]" placeholder="Contact Address / Phone Number / Email" class="px-4 py-2 border border-gray-300 rounded-lg focus:border-red-500 focus:ring-red-500 auto-save-field">
    `;
    container.appendChild(newEntry);
    attachAutoSaveToNewFields(newEntry);
}

// Attach auto-save to new dynamic fields
function attachAutoSaveToNewFields(container) {
    const fields = container.querySelectorAll('input, select, textarea');
    fields.forEach(field => {
        field.addEventListener('change', autoSave);
        field.addEventListener('keyup', autoSave);
        field.addEventListener('input', autoSave);
    });
}

// Show/hide sponsor details
document.querySelectorAll('input[name="sponsorship_type"]').forEach(radio => {
    radio.addEventListener('change', function() {
        const sponsorDiv = document.getElementById('sponsor_details');
        if (this.value === 'Sponsor') {
            sponsorDiv.classList.remove('hidden');
        } else {
            sponsorDiv.classList.add('hidden');
        }
        autoSave();
    });
});

// Initialize 3 referee entries on page load
document.addEventListener('DOMContentLoaded', function() {
    const refereeContainer = document.getElementById('referees-container');
    // Add 2 more referee entries (already have 1 from HTML)
    for (let i = 1; i < 3; i++) {
        addReferee();
    }
});


//step 4 functions
// Build review content when entering step 4
function buildReviewContent() {
    const reviewContent = document.getElementById('reviewContent');
    
    // Get all form data
    const personalData = collectFormData();
    const selectedCourse = document.querySelector('input[name="course"]:checked');
    
    // Get education data
    const msceEnglish = document.querySelector('input[name="msce_english"]')?.value || 'Not provided';
    const msceMath = document.querySelector('input[name="msce_math"]')?.value || 'Not provided';
    const msceBiology = document.querySelector('input[name="msce_biology"]')?.value || 'Not provided';
    
    // Get sponsorship type
    const sponsorshipType = document.querySelector('input[name="sponsorship_type"]:checked')?.value || 'Not specified';
    
    let html = `
        <div class="space-y-4">
            <!-- Course Section -->
            <div class="border-b pb-2">
                <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                    <i class="fas fa-graduation-cap text-red-600"></i> Program Selected
                </h3>
                <p class="text-gray-700">${selectedCourse ? selectedCourse.value : 'Not selected'}</p>
            </div>
            
            <!-- Personal Information -->
            <div class="border-b pb-2">
                <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                    <i class="fas fa-user text-red-600"></i> Personal Information
                </h3>
                <div class="grid grid-cols-2 gap-2 text-sm">
                    <p><span class="text-gray-500">Full Name:</span> ${personalData.title || ''} ${personalData.surname || ''} ${personalData.first_names || ''}</p>
                    <p><span class="text-gray-500">Date of Birth:</span> ${personalData.dob || 'Not provided'}</p>
                    <p><span class="text-gray-500">Gender:</span> ${personalData.gender || 'Not provided'}</p>
                    <p><span class="text-gray-500">Marital Status:</span> ${personalData.marital_status || 'Not provided'}</p>
                    <p><span class="text-gray-500">Citizenship:</span> ${personalData.citizenship || 'Not provided'}</p>
                    <p><span class="text-gray-500">National ID:</span> ${personalData.national_id || 'Not provided'}</p>
                    <p><span class="text-gray-500">Phone:</span> ${personalData.phone || 'Not provided'}</p>
                    <p><span class="text-gray-500">Email:</span> ${personalData.email || 'Not provided'}</p>
                </div>
                <p class="text-sm mt-2"><span class="text-gray-500">Address:</span> ${personalData.permanent_address || 'Not provided'}</p>
            </div>
            
            <!-- Next of Kin -->
            <div class="border-b pb-2">
                <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                    <i class="fas fa-users text-red-600"></i> Next of Kin
                </h3>
                <div class="grid grid-cols-2 gap-2 text-sm">
                    <p><span class="text-gray-500">Name:</span> ${personalData.next_of_kin_name || 'Not provided'}</p>
                    <p><span class="text-gray-500">Relationship:</span> ${personalData.next_of_kin_relationship || 'Not provided'}</p>
                    <p><span class="text-gray-500">Phone:</span> ${personalData.next_of_kin_phone || 'Not provided'}</p>
                    <p><span class="text-gray-500">Email:</span> ${personalData.next_of_kin_email || 'Not provided'}</p>
                </div>
                <p class="text-sm mt-2"><span class="text-gray-500">Address:</span> ${personalData.next_of_kin_address || 'Not provided'}</p>
            </div>
            
            <!-- Education Summary -->
            <div class="border-b pb-2">
                <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                    <i class="fas fa-chart-line text-red-600"></i> MSCE Results (Top Grades)
                </h3>
                <div class="grid grid-cols-3 gap-2 text-sm">
                    <p><span class="text-gray-500">English:</span> ${msceEnglish}</p>
                    <p><span class="text-gray-500">Mathematics:</span> ${msceMath}</p>
                    <p><span class="text-gray-500">Biology:</span> ${msceBiology}</p>
                </div>
            </div>
            
            <!-- Sponsorship -->
            <div class="border-b pb-2">
                <h3 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                    <i class="fas fa-hand-holding-usd text-red-600"></i> Sponsorship
                </h3>
                <p class="text-sm">${sponsorshipType}</p>
            </div>
        </div>
    `;
    
    reviewContent.innerHTML = html;
}

// Submit application function
function submitApplication() {
    const declaration = document.getElementById('final_declaration');
    
    if (!declaration.checked) {
        alert('Please confirm that all information provided is accurate by checking the declaration box.');
        declaration.focus();
        return;
    }
    
    // Generate Application ID
    const applicationId = 'SJOGU-' + Date.now() + '-' + Math.random().toString(36).substr(2, 6).toUpperCase();
    
    // Collect all application data
    const applicationData = {
        applicationId: applicationId,
        submittedAt: new Date().toISOString(),
        personalDetails: collectFormData(),
        educationDetails: {
            msce_english: document.querySelector('input[name="msce_english"]')?.value || '',
            msce_math: document.querySelector('input[name="msce_math"]')?.value || '',
            msce_biology: document.querySelector('input[name="msce_biology"]')?.value || '',
            msce_physical_science: document.querySelector('input[name="msce_physical_science"]')?.value || '',
            msce_physics: document.querySelector('input[name="msce_physics"]')?.value || '',
            msce_chemistry: document.querySelector('input[name="msce_chemistry"]')?.value || '',
        },
        sponsorship_type: document.querySelector('input[name="sponsorship_type"]:checked')?.value || '',
        declaration_signed: true,
        declaration_date: document.querySelector('input[name="declaration_date"]')?.value || new Date().toISOString().split('T')[0]
    };
    
    // Save to localStorage
    if (currentUser && currentUser.email) {
        localStorage.setItem(`sjogu_submitted_application_${currentUser.email}`, JSON.stringify(applicationData));
        
        // Update user status
        const userData = localStorage.getItem(`sjogu_user_${currentUser.email}`);
        if (userData) {
            const user = JSON.parse(userData);
            user.applicationStatus = 'submitted';
            user.applicationId = applicationId;
            user.submittedAt = new Date().toISOString();
            localStorage.setItem(`sjogu_user_${currentUser.email}`, JSON.stringify(user));
        }
    }
    
    // Display Application ID in modal
    document.getElementById('applicationIdDisplay').textContent = applicationId;
    
    // Show success modal
    openSuccessModal();
    
    // Clear draft
    if (currentUser && currentUser.email) {
        localStorage.removeItem(`sjogu_personal_details_${currentUser.email}`);
    }
}

// Open success modal
function openSuccessModal() {
    const modal = document.getElementById('successModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

// Close success modal
function closeSuccessModal() {
    const modal = document.getElementById('successModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Close success modal and reset to step 1
function closeSuccessModalAndReset() {
    closeSuccessModal();
    
    // Reset to step 1
    currentStep = 1;
    document.querySelectorAll('.step').forEach(step => step.classList.remove('active'));
    document.getElementById('step1').classList.add('active');
    updateProgressSteps();
    
    // Reset logout state
    isLoggedIn = false;
    currentUser = null;
    document.getElementById('logoutContainer').classList.add('hidden');
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Attach submit button event
document.getElementById('submitApplicationBtn')?.addEventListener('click', submitApplication);

// Build review when entering step 4
const originalGoToNextStep = goToNextStep;
window.goToNextStep = function() {
    if (currentStep === 3) {
        buildReviewContent();
    }
    originalGoToNextStep();
};
    
    // Check login status on page load
    checkLoginStatus();







</script>
@endsection