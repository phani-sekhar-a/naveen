function fetchCounts() {
    fetch("endpoints/get_counts.php")
    .then(r => r.json())
    .then(data => {
        document.getElementById("studentsCount").textContent = data.students;
        document.getElementById("employersCount").textContent = data.employers;
        document.getElementById("submissionsCount").textContent = data.submissions;
    });
}

function fetchCategoryChart() {
    fetch("endpoints/get_categories.php")
    .then(r => r.json())
    .then(data => {
        const labels = data.map(r => r.category);
        const totals = data.map(r => r.total);
        new Chart(document.getElementById("categoryChart"), {
            type: "pie",
            data: {
                labels,
                datasets: [{ data: totals }]
            }
        });
    });
}

function fetchApplicationsChart() {
    fetch("endpoints/get_submissions.php")
    .then(r => r.json())
    .then(data => {
        const labels = data.map(r => r.employer);
        const totals = data.map(r => r.apps);
        new Chart(document.getElementById("submissionsChart"), {
            type: "bar",
            data: {
                labels,
                datasets: [{ data: totals }]
            }
        });
    });
}

fetchCounts();
fetchCategoryChart();
fetchApplicationsChart();
