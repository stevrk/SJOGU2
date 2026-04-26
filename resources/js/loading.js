// Loading service
class LoadingService {
    constructor() {
        this.loadingContainer = null;
        this.timeout = null;
    }
    
    init() {
        this.loadingContainer = document.getElementById('loadingContainer');
        if (!this.loadingContainer) {
            this.createLoadingElement();
        }
    }
    
    createLoadingElement() {
        const loadingHTML = `
            <div id="loadingContainer" class="loading-container" style="display: none;">
                <div class="loading-content">
                    <div class="loading-logo">
                        <img src="/images/logo_stjohn.png" alt="St John of God University">
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
        `;
        document.body.insertAdjacentHTML('afterbegin', loadingHTML);
        this.loadingContainer = document.getElementById('loadingContainer');
        
        // Add styles if not already present
        if (!document.querySelector('#loading-styles')) {
            const styles = `
                <style id="loading-styles">
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
                        transition: opacity 0.3s ease;
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
                    .dot-animation span:nth-child(1) { animation-delay: 0s; }
                    .dot-animation span:nth-child(2) { animation-delay: 0.2s; }
                    .dot-animation span:nth-child(3) { animation-delay: 0.4s; }
                    
                    @keyframes pulse {
                        0%, 100% { transform: scale(1); }
                        50% { transform: scale(1.05); }
                    }
                    @keyframes bounce {
                        0%, 60%, 100% { transform: translateY(0); opacity: 0.5; }
                        30% { transform: translateY(-10px); opacity: 1; }
                    }
                    @keyframes fadeIn {
                        from { opacity: 0; transform: translateY(-20px); }
                        to { opacity: 1; transform: translateY(0); }
                    }
                </style>
            `;
            document.head.insertAdjacentHTML('beforeend', styles);
        }
    }
    
    show() {
        if (this.loadingContainer) {
            clearTimeout(this.timeout);
            this.loadingContainer.style.display = 'flex';
            this.loadingContainer.classList.remove('hide');
        }
    }
    
    hide() {
        if (this.loadingContainer) {
            this.timeout = setTimeout(() => {
                this.loadingContainer.classList.add('hide');
                setTimeout(() => {
                    if (this.loadingContainer.style.display !== 'none') {
                        this.loadingContainer.style.display = 'none';
                    }
                }, 300);
            }, 300);
        }
    }
}

// Initialize loading service
const loading = new LoadingService();
loading.init();

// Auto-hide on load
window.addEventListener('load', () => loading.hide());

// Show on navigation
document.addEventListener('click', (e) => {
    const link = e.target.closest('a');
    if (link && link.href && link.href.startsWith(window.location.origin) && !link.href.includes('#')) {
        loading.show();
    }
});

// Export for use in other scripts
window.loading = loading;