<!-- Loading Animation -->
<style>
    .loading-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    
    .loading-container.hide {
        opacity: 0;
        visibility: hidden;
    }
    
    .loading-content {
        text-align: center;
        animation: fadeIn 0.5s ease;
    }
    
    .loading-logo {
        width: 120px;
        height: 120px;
        margin: 0 auto 30px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        animation: pulse 1.5s ease-in-out infinite;
    }
    
    .loading-logo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .loading-text {
        font-size: 18px;
        color: #dc2626;
        font-weight: 500;
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
    }
    
    .dot-animation {
        display: inline-flex;
        gap: 4px;
        margin-left: 4px;
    }
    
    .dot-animation span {
        width: 6px;
        height: 6px;
        background: #dc2626;
        border-radius: 50%;
        animation: bounce 1.4s ease-in-out infinite;
    }
    
    .dot-animation span:nth-child(1) {
        animation-delay: 0s;
    }
    
    .dot-animation span:nth-child(2) {
        animation-delay: 0.2s;
    }
    
    .dot-animation span:nth-child(3) {
        animation-delay: 0.4s;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(220, 38, 38, 0.2);
        }
    }
    
    @keyframes bounce {
        0%, 60%, 100% {
            transform: translateY(0);
            opacity: 0.5;
        }
        30% {
            transform: translateY(-10px);
            opacity: 1;
        }
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Red glow effect */
    .loading-logo {
        position: relative;
    }
    
    .loading-logo::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        border-radius: 50%;
        background: linear-gradient(135deg, #dc2626, #991b1b);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
        animation: glow 2s ease-in-out infinite;
    }
    
    @keyframes glow {
        0%, 100% {
            opacity: 0;
        }
        50% {
            opacity: 0.3;
        }
    }
</style>

<div id="loadingContainer" class="loading-container">
    <div class="loading-content">
        <div class="loading-logo">
            <img src="{{ asset('images/logo_stjohn.png') }}" alt="St John of God University">
        </div>
        <div class="loading-text">
            Loading
            <div class="dot-animation">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to show loading
    function showLoading() {
        const loadingContainer = document.getElementById('loadingContainer');
        if (loadingContainer) {
            loadingContainer.classList.remove('hide');
        }
    }
    
    // Function to hide loading
    function hideLoading() {
        const loadingContainer = document.getElementById('loadingContainer');
        if (loadingContainer) {
            setTimeout(() => {
                loadingContainer.classList.add('hide');
                setTimeout(() => {
                    if (loadingContainer.style.display !== 'none') {
                        // Optional: remove from DOM after animation
                        // loadingContainer.style.display = 'none';
                    }
                }, 500);
            }, 300); // Small delay to ensure content is rendered
        }
    }
    
    // Hide loading when page is fully loaded
    window.addEventListener('load', function() {
        hideLoading();
    });
    
    // Show loading on page navigation (for links)
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        if (link && link.href && !link.href.startsWith('javascript:') && link.href.indexOf('#') === -1) {
            const sameOrigin = link.href.startsWith(window.location.origin);
            if (sameOrigin) {
                showLoading();
            }
        }
    });
</script>