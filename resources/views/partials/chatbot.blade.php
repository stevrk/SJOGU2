<style>
    /* Chatbot Floating Button */
    .chatbot-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.2), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    .chatbot-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.3);
    }
    
    .chatbot-btn i {
        font-size: 28px;
        color: white;
    }
    
    /* Tooltip/Prompt */
    .chatbot-prompt {
        position: fixed;
        bottom: 100px;
        right: 30px;
        background: white;
        padding: 12px 18px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        font-size: 14px;
        font-weight: 500;
        color: #333;
        white-space: nowrap;
        z-index: 999;
        animation: pulse 2s infinite;
        border-left: 4px solid #dc2626;
    }
    
    .chatbot-prompt:after {
        content: '';
        position: absolute;
        bottom: -10px;
        right: 20px;
        border-width: 10px 10px 0 10px;
        border-style: solid;
        border-color: white transparent transparent transparent;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: translateY(0);
            opacity: 1;
        }
        50% {
            transform: translateY(-5px);
            opacity: 0.9;
        }
    }
    
    /* Chatbot Modal */
    .chatbot-modal {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 350px;
        max-width: calc(100vw - 60px);
        background: white;
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        z-index: 1001;
        display: none;
        flex-direction: column;
        overflow: hidden;
        animation: slideUp 0.3s ease;
    }
    
    .chatbot-modal.active {
        display: flex;
    }
    
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .chatbot-header {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .chatbot-header h3 {
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .chatbot-header h3 i {
        font-size: 20px;
    }
    
    .chatbot-close {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .chatbot-close:hover {
        background: rgba(255,255,255,0.3);
        transform: rotate(90deg);
    }
    
    .chatbot-body {
        padding: 20px;
        max-height: 350px;
        overflow-y: auto;
    }
    
    .faq-item {
        margin-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 12px;
    }
    
    .faq-question {
        font-weight: 600;
        color: #333;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        margin-bottom: 8px;
    }
    
    .faq-question i {
        color: #dc2626;
        font-size: 12px;
        transition: transform 0.3s;
    }
    
    .faq-question.active i {
        transform: rotate(90deg);
    }
    
    .faq-answer {
        color: #666;
        font-size: 13px;
        line-height: 1.5;
        padding-left: 24px;
        display: none;
    }
    
    .faq-answer.show {
        display: block;
    }
    
    /* Chat Input Section */
    .chatbot-input-section {
        padding: 15px 20px 20px 20px;
        border-top: 1px solid #e5e7eb;
        background-color: #ffffff;
    }
    
    .demo-notice {
        background-color: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 8px 12px;
        margin-bottom: 12px;
        border-radius: 8px;
    }
    
    .demo-notice p {
        font-size: 11px;
        color: #92400e;
        margin: 0;
    }
    
    .demo-notice i {
        margin-right: 6px;
    }
    
    .chatbot-input-wrapper {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    
    .chatbot-input-wrapper input {
        flex: 1;
        padding: 10px 12px;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        font-size: 13px;
        outline: none;
        transition: all 0.3s;
    }
    
    .chatbot-input-wrapper input:focus {
        border-color: #dc2626;
        box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
    }
    
    .chatbot-input-wrapper input::placeholder {
        color: #9ca3af;
        font-size: 12px;
    }
    
    .send-btn {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
        border: none;
        color: white;
        padding: 10px 16px;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 500;
    }
    
    .send-btn:hover {
        transform: scale(1.02);
        background: linear-gradient(135deg, #b91c1c, #991b1b);
    }
    
    .demo-hint {
        text-align: center;
        margin-top: 10px;
        font-size: 10px;
        color: #9ca3af;
    }
    
    .demo-hint i {
        margin-right: 4px;
    }
    
    .chatbot-footer {
        padding: 15px 20px;
        border-top: 1px solid #f0f0f0;
        background: #fafafa;
        font-size: 12px;
        color: #999;
        text-align: center;
    }
    
    /* Overlay for mobile */
    .chatbot-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        display: none;
    }
    
    .chatbot-overlay.active {
        display: block;
    }
    
    @media (max-width: 640px) {
        .chatbot-modal {
            width: calc(100vw - 40px);
            right: 20px;
            bottom: 90px;
        }
        .chatbot-prompt {
            display: none;
        }
        .chatbot-body {
            max-height: 300px;
        }
    }
</style>

<!-- Floating Chatbot Button -->
<div class="chatbot-btn" id="chatbotBtn">
    <i class="fas fa-comment-dots"></i>
</div>

<!-- Chatbot Prompt/Tooltip -->
<div class="chatbot-prompt" id="chatbotPrompt">
    <i class="fas fa-robot text-red-600 mr-2"></i> How may I assist you today?
</div>

<!-- Chatbot Modal -->
<div class="chatbot-modal" id="chatbotModal">
    <div class="chatbot-header">
        <h3>
            <i class="fas fa-headset"></i>
            SJOGU Assistant
        </h3>
        <button class="chatbot-close" id="chatbotCloseBtn">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="chatbot-body">
        <div class="mb-4 text-center">
            <i class="fas fa-robot text-4xl text-red-600 mb-2"></i>
            <p class="text-gray-600 text-sm">Hello! I'm your virtual assistant. Here are some frequently asked questions:</p>
        </div>
        
        <!-- FAQ 1 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="1">
                <i class="fas fa-chevron-right"></i>
                When are the application deadlines?
            </div>
            <div class="faq-answer" data-answer="1">
                Applications for the 2025/2026 academic year close on <strong>May 31st, 2026</strong>. Late applications may be considered on a case-by-case basis.
            </div>
        </div>
        
        <!-- FAQ 2 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="2">
                <i class="fas fa-chevron-right"></i>
                What programs are offered at SJOGU?
            </div>
            <div class="faq-answer" data-answer="2">
                We offer programs in Clinical Medicine, Nursing and Midwifery, Psycho-Social Counselling, and Public Health. Both generic and upgrading programs are available.
            </div>
        </div>
        
        <!-- FAQ 3 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="3">
                <i class="fas fa-chevron-right"></i>
                How do I apply for admission?
            </div>
            <div class="faq-answer" data-answer="3">
                You can apply online through our Admissions section or download the application form and submit it to the admissions office along with required documents.
            </div>
        </div>
        
        <!-- FAQ 4 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="4">
                <i class="fas fa-chevron-right"></i>
                What are the entry requirements?
            </div>
            <div class="faq-answer" data-answer="4">
                Generic programs require MSCE with 6 credits including English, Mathematics, Biology, Physics, and Chemistry. Upgrading programs require a Diploma in a relevant field.
            </div>
        </div>
        
        <!-- FAQ 5 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="5">
                <i class="fas fa-chevron-right"></i>
                Is there accommodation available?
            </div>
            <div class="faq-answer" data-answer="5">
                Yes, we offer comfortable on-campus accommodation with single and shared rooms, 24/7 security, and common study areas.
            </div>
        </div>
        
        <!-- FAQ 6 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="6">
                <i class="fas fa-chevron-right"></i>
                How can I contact the admissions office?
            </div>
            <div class="faq-answer" data-answer="6">
                You can email admissions@sjogu.edu or call +265 123 456 789. Our office hours are Monday-Friday, 8:00 AM - 5:00 PM.
            </div>
        </div>
        
        <!-- FAQ 7 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="7">
                <i class="fas fa-chevron-right"></i>
                Are there scholarships available?
            </div>
            <div class="faq-answer" data-answer="7">
                Yes, merit-based and need-based scholarships are available. Contact the financial aid office for more information.
            </div>
        </div>
        
        <!-- FAQ 8 -->
        <div class="faq-item">
            <div class="faq-question" data-faq="8">
                <i class="fas fa-chevron-right"></i>
                Is SJOGU accredited?
            </div>
            <div class="faq-answer" data-answer="8">
                Yes, SJOGU is accredited by the National Council for Higher Education (NCHE) and our programs are approved by NMCM and MCM.
            </div>
        </div>
    </div>
    
    <!-- Chat Input Section - Demo -->
    <div class="chatbot-input-section">
        <!--<div class="demo-notice">
            <p><i class="fas fa-info-circle"></i> <strong>Demo Mode:</strong> This is a demonstration chatbot. No responses will be generated.</p>
        </div>-->
        
        <div class="chatbot-input-wrapper">
            <input type="text" 
                   id="chatbotInput" 
                   placeholder="Type your question here (demo)..."
                   autocomplete="off">
            <button id="sendChatBtn" class="send-btn">
                <i class="fas fa-paper-plane"></i>
                Send
            </button>
        </div>
        
        <!--<div class="demo-hint">
            <i class="fas fa-robot"></i> Demo chatbot - Ask anything about SJOGU (simulated responses)
        </div>-->
    </div>
    
   
</div>

<!-- Chatbot JavaScript -->
<script>
    // Chatbot elements
    const chatbotBtn = document.getElementById('chatbotBtn');
    const chatbotModal = document.getElementById('chatbotModal');
    const chatbotCloseBtn = document.getElementById('chatbotCloseBtn');
    const chatbotPrompt = document.getElementById('chatbotPrompt');
    const chatbotInput = document.getElementById('chatbotInput');
    const sendChatBtn = document.getElementById('sendChatBtn');
    
    // Open chatbot modal
    chatbotBtn?.addEventListener('click', () => {
        chatbotModal.classList.add('active');
        chatbotPrompt.style.display = 'none';
        // Focus on input when modal opens
        setTimeout(() => {
            if (chatbotInput) chatbotInput.focus();
        }, 300);
    });
    
    // Close chatbot modal
    function closeChatbotModal() {
        chatbotModal.classList.remove('active');
        setTimeout(() => {
            if (chatbotPrompt) chatbotPrompt.style.display = 'block';
        }, 300);
    }
    
    chatbotCloseBtn?.addEventListener('click', closeChatbotModal);
    
    // Close modal when clicking outside
    document.addEventListener('click', (e) => {
        if (chatbotModal.classList.contains('active')) {
            if (!chatbotModal.contains(e.target) && !chatbotBtn.contains(e.target)) {
                closeChatbotModal();
            }
        }
    });
    
    // FAQ Toggle functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqId = question.getAttribute('data-faq');
            const answer = document.querySelector(`.faq-answer[data-answer="${faqId}"]`);
            
            // Toggle current answer
            answer.classList.toggle('show');
            question.classList.toggle('active');
            
            // Rotate chevron
            const chevron = question.querySelector('i');
            if (answer.classList.contains('show')) {
                chevron.style.transform = 'rotate(90deg)';
            } else {
                chevron.style.transform = 'rotate(0deg)';
            }
        });
    });
    
    // Demo chat response function
    function showDemoResponse() {
        const message = chatbotInput.value.trim();
        
        if (message === "") {
            alert("💬 Demo Chatbot\n\nPlease type a question to see how the chatbot would respond.\n\n📢 This is a demonstration - no actual AI responses are generated.\n\n💡 Try asking about:\n• Application deadlines\n• Programs offered\n• Entry requirements\n• Scholarships");
        } else {
            alert(`💬 SJOGU Assistant - Demo Response\n\n━━━━━━━━━━━━━━━━━━━━━━━━\n📝 You asked: "${message}"\n━━━━━━━━━━━━━━━━━━━━━━━━\n\n📢 This is a demonstration chatbot.\n\nFor real assistance, please:\n✓ Check our FAQ section above\n✓ Call: +265 123 456 789\n✓ Email: info@sjogu.edu\n✓ Visit our admissions office\n\nThank you for your interest in SJOGU! 🎓\n━━━━━━━━━━━━━━━━━━━━━━━━`);
        }
        
        // Clear input after sending (optional - comment out if you want to keep the message)
        // chatbotInput.value = "";
        
        // Keep focus on input for next question
        setTimeout(() => {
            chatbotInput.focus();
        }, 100);
    }
    
    // Send button click event
    sendChatBtn?.addEventListener('click', showDemoResponse);
    
    // Enter key press event
    chatbotInput?.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            showDemoResponse();
        }
    });
    
    // Auto-hide prompt after 8 seconds
    setTimeout(() => {
        if (chatbotPrompt) {
            chatbotPrompt.style.opacity = '0';
            setTimeout(() => {
                if (chatbotPrompt) chatbotPrompt.style.display = 'none';
            }, 500);
        }
    }, 8000);
</script>

