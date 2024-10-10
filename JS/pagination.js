document.addEventListener('DOMContentLoaded', function () {
    const jobGrid = document.getElementById('job_grid');
    const jobs = jobGrid.getElementsByClassName('job_decoration');
    const jobsPerPage = 12;
    const paginationNumbers = document.getElementById('pagination-numbers');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    let currentPage = 1;
    const totalPages = Math.ceil(jobs.length / jobsPerPage);

    // Create pagination numbers
    function createPagination() {
        paginationNumbers.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const pageNumber = document.createElement('span');
            pageNumber.innerText = i;
            pageNumber.addEventListener('click', function () {
                currentPage = i;
                updateJobsDisplay();
                updatePaginationNumbers();
            });
            paginationNumbers.appendChild(pageNumber);
        }
        updatePaginationNumbers();
    }

    // Update the job grid to display the current page's jobs
    function updateJobsDisplay() {
        for (let i = 0; i < jobs.length; i++) {
            jobs[i].style.display = 'none'; // Hide all jobs
        }
        const start = (currentPage - 1) * jobsPerPage;
        const end = start + jobsPerPage;
        for (let i = start; i < end && i < jobs.length; i++) {
            jobs[i].style.display = 'block'; // Show jobs for the current page
        }
    }

    // Update pagination buttons (highlight current page)
    function updatePaginationNumbers() {
        const pageNumbers = paginationNumbers.getElementsByTagName('span');
        for (let i = 0; i < pageNumbers.length; i++) {
            pageNumbers[i].classList.remove('active');
        }
        pageNumbers[currentPage - 1].classList.add('active');
    }

    // Handle previous and next button clicks
    prevBtn.addEventListener('click', function () {
        if (currentPage > 1) {
            currentPage--;
            updateJobsDisplay();
            updatePaginationNumbers();
        }
    });

    nextBtn.addEventListener('click', function () {
        if (currentPage < totalPages) {
            currentPage++;
            updateJobsDisplay();
            updatePaginationNumbers();
        }
    });

    // Initialize pagination
    updateJobsDisplay();
    createPagination();
});
