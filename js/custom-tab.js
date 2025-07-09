document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Update button styling
            tabs.forEach(t => t.classList.remove('active-tab'));
            tab.classList.add('active-tab');

            // Show correct tab content
            tabContents.forEach(content => content.classList.remove('active'));
            const target = document.getElementById(tab.dataset.tab);
            if (target) target.classList.add('active');
        });
    });
});
