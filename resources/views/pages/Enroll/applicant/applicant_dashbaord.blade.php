@extends('layouts.app')

@section('title', 'Applicant Dashboard - St John of God University')

@section('content')
<style>
    .status-badge {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-reviewed { background: #dbeafe; color: #2563eb; }
    .status-approved { background: #d1fae5; color: #059669; }
    .status-rejected { background: #fee2e2; color: #dc2626; }
    
    .timeline-item {
        position: relative;
        padding-left: 30px;
        padding-bottom: 25px;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: 8px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e5e7eb;
    }
    .timeline-item:last-child::before {
        display: none;
    }
    .timeline-dot {
        position: absolute;
        left: 0;
        top: 0;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #dc2626;
        border: 3px solid white;
        box-shadow: 0 0 0 2px #dc2626;
    }
    .timeline-dot.completed {
        background: #10b981;
        box-shadow: 0 0 0 2px #10b981;
    }
</style>

<section class="relative bg-gradient-to-r from-red-700 to-red-800 text-white py-12">
    <div class="container mx-auto px-4 md:px-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Applicant <span class="text-yellow-300">Dashboard</span></h1>
        <div class="w-24 h-1 bg-yellow-300 mx-auto rounded-full mb-4"></div>
        <p class="text-lg max-w-2xl mx-auto text-red-100">
            Track your application status and manage your details
        </p>
    </div>
</section>

<section class="py-12 px-4 md:px-16 bg-gray-50">
    <div class="container mx-auto max-w-6xl">
        @php
            $application = json_decode(localStorage()->get('sjogu_current_application'), true);
        @endphp
        
        @if(!isset($application))
        <div class="bg-white rounded-xl shadow-lg p-8 text-center">
            <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-folder-open text-3xl text-gray-400"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">No Active Application</h3>
            <p class="text-gray-600 mb-6">You haven't submitted any applications yet.</p>
            <a href="{{ route('enroll') }}" class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition inline-flex items-center gap-2">
                <i class="fas fa-plus-circle"></i> Start New Application
            </a>
        </div>
        @else
        <div class="grid lg:grid-cols-3 gap-6">
            <!-- Left Column - Application Info -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Application Status Card -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Application Status</h2>
                            <p class="text-sm text-gray-500">ID: {{ $application['applicationId'] }}</p>
                        </div>
                        <span class="status-badge status-pending">
                            <i class="fas fa-clock mr-1"></i> Under Review
                        </span>
                    </div>
                    
                    <div class="mt-4">
                        <div class="flex justify-between text-sm text-gray-600 mb-2">
                            <span>Progress</span>
                            <span>60%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-red-600 h-2 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <p class="text-sm text-gray-600 mb-2">Submitted: {{ date('F j, Y, g:i a', strtotime($application['submissionDate'])) }}</p>
                        <p class="text-sm text-gray-600">Last Updated: Today</p>
                    </div>
                </div>
                
                <!-- Application Timeline -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Application Timeline</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot completed"></div>
                            <div class="font-semibold text-gray-800">Application Submitted</div>
                            <div class="text-sm text-gray-500">{{ date('F j, Y', strtotime($application['submissionDate'])) }}</div>
                            <p class="text-sm text-gray-600 mt-1">Your application has been received and is in queue for review.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="font-semibold text-gray-800">Document Verification</div>
                            <div class="text-sm text-gray-500">In Progress</div>
                            <p class="text-sm text-gray-600 mt-1">Our admissions team is verifying your documents.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="font-semibold text-gray-800">Academic Review</div>
                            <div class="text-sm text-gray-500">Pending</div>
                            <p class="text-sm text-gray-600 mt-1">Your qualifications will be assessed by the faculty.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="font-semibold text-gray-800">Interview (if applicable)</div>
                            <div class="text-sm text-gray-500">Pending</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="font-semibold text-gray-800">Final Decision</div>
                            <div class="text-sm text-gray-500">Pending</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Actions & Info -->
            <div class="space-y-6">
                <!-- Application Details Card -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Application Details</h3>
                    <div class="space-y-3 text-sm">
                        <div>
                            <span class="text-gray-500">Program:</span>
                            <p class="font-semibold text-gray-800">{{ $application['data']['course'] ?? 'Not specified' }}</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Full Name:</span>
                            <p class="font-semibold text-gray-800">{{ $application['data']['title'] ?? '' }} {{ $application['data']['surname'] ?? '' }} {{ $application['data']['first_names'] ?? '' }}</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Email:</span>
                            <p class="font-semibold text-gray-800">{{ $application['data']['email'] ?? 'Not provided' }}</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Phone:</span>
                            <p class="font-semibold text-gray-800">{{ $application['data']['phone'] ?? 'Not provided' }}</p>
                        </div>
                        <div>
                            <span class="text-gray-500">Payment Reference:</span>
                            <p class="font-semibold text-gray-800">{{ $application['data']['payment_reference'] ?? 'Not provided' }}</p>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Actions</h3>
                    <div class="space-y-3">
                        <button onclick="showDemoEditAlert()" class="w-full bg-yellow-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600 transition flex items-center justify-center gap-2">
                            <i class="fas fa-edit"></i> Edit Application (Demo)
                        </button>
                        <button onclick="showDemoUploadAlert()" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-600 transition flex items-center justify-center gap-2">
                            <i class="fas fa-upload"></i> Upload More Documents (Demo)
                        </button>
                        <button onclick="showDemoMessageAlert()" class="w-full bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-300 transition flex items-center justify-center gap-2">
                            <i class="fas fa-comment"></i> Contact Admissions (Demo)
                        </button>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="bg-gray-100 rounded-xl p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-3">Need Help?</h3>
                    <div class="space-y-2 text-sm">
                        <p><i class="fas fa-phone-alt text-red-600 w-5"></i> +265 123 456 789</p>
                        <p><i class="fas fa-envelope text-red-600 w-5"></i> admissions@sjogu.edu</p>
                        <p><i class="fas fa-clock text-red-600 w-5"></i> Mon - Fri, 8:00 AM - 5:00 PM</p>
                    </div>
                </div>
                
                <!-- Demo Notice -->
                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
                    <div class="flex items-start gap-2">
                        <i class="fas fa-info-circle text-yellow-600 mt-0.5"></i>
                        <p class="text-xs text-yellow-800">
                            <strong>Demo Version:</strong> This is a demonstration dashboard. In the full version, you would be able to edit your application, upload additional documents, and receive real-time updates on your application status.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<script>
    function showDemoEditAlert() {
        alert('📝 Demo Mode\n\nIn the full version, you would be able to:\n\n✓ Edit your personal information\n✓ Update contact details\n✓ Add/remove qualifications\n✓ Change your selected program (before review)\n\nAll changes would be saved and reviewed by admissions staff.\n\nThis is a demonstration feature.');
    }
    
    function showDemoUploadAlert() {
        alert('📎 Demo Mode\n\nIn the full version, you would be able to:\n\n✓ Upload additional supporting documents\n✓ Replace previously uploaded files\n✓ Add recommendation letters\n✓ Submit missing requirements\n\nDocuments would be automatically attached to your application.\n\nThis is a demonstration feature.');
    }
    
    function showDemoMessageAlert() {
        alert('💬 Demo Mode\n\nIn the full version, you would be able to:\n\n✓ Send messages to admissions office\n✓ Receive real-time responses\n✓ Get notifications about your application\n✓ Schedule interview appointments\n\nThis is a demonstration feature.');
    }
</script>
@endsection