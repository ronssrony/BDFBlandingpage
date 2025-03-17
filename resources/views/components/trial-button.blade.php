<div>
<button
    class="relative overflow-hidden cursor-pointer border-[4px] border-[#C7DFFF] bg-[#1565CE] text-white text-[16px] md:text-[18px] font-[700] rounded-full group w-58 h-16">
    <span class="absolute inset-0 flex items-center justify-center transition-transform duration-500 ease-out group-hover:-translate-y-12">
        {{__('trial-btn.btn-text')}}
    </span>
    <span class="absolute inset-0 flex items-center justify-center translate-y-8 opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100">
        {{__('trial-btn.btn-text')}}
    <svg class="w-6 h-6 ml-2" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10H40M40 10L30 0M40 10L30 20" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</span>
</button>
</div>
</div>

<style>
    .group::before {
        content: '';
        position: absolute;
        width: 300%;
        height: 300%;
        top: 100%;
        left: 50%;
        background-color: rgba(218, 94, 0, 1);
        transform: translate(-50%, -50%) scale(0);
        border-radius: 50%;
        transition: transform 0.8s ease, width 0.8s ease, height 0.8s ease;
    }

    .group:hover::before {
        transform: translate(-50%, -50%) scale(1);
        width: 400%;
        height: 400%;
    }

    .group:hover {
        background: linear-gradient(to top, #2563eb 0%, #1d4ed8 100%);
    }
</style>

<script>
    function updateBackground(event, button) {
        const rect = button.getBoundingClientRect();
        const x = ((event.clientX - rect.left) / rect.width) * 100;
        const y = ((event.clientY - rect.top) / rect.height) * 100;
        button.style.setProperty('--x', x + '%');
        button.style.setProperty('--y', y + '%');
    }

    function resetBackground(button) {
        button.style.setProperty('--x', '50%');
        button.style.setProperty('--y', '50%');
    }
</script>